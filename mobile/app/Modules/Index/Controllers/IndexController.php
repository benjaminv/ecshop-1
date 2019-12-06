<?php
//zend WEBSC在线更新  禁止倒卖 一经发现停止任何服务
namespace App\Modules\Index\Controllers;

class IndexController extends \App\Modules\Base\Controllers\FrontendController
{
	public function __construct()
	{
		parent::__construct();
		header('Access-Control-Allow-Origin: *');
		header('Access-Control-Allow-Methods: POST, GET, OPTIONS');
		header('Access-Control-Allow-Headers: X-HTTP-Method-Override, Content-Type, x-requested-with, Authorization');
	}

	public function actionIndex()
	{
		uaredirect(__PC__ . '/');

		if (IS_POST) {
			$preview = input('preview', 0);

			if ($preview) {
				$module = \App\Libraries\Compile::getModule('preview');
			}
			else {
				$module = \App\Libraries\Compile::getModule();
			}

			if ($module === false) {
				$module = \App\Libraries\Compile::initModule();
			}

			$this->response(array('error' => 0, 'data' => $module ? $module : ''));
		}

		$popup_ads = S('popup_ads');

		if ($popup_ads === false) {
			$popup_ads = dao('touch_ad')->where(array('ad_name' => '首页红包广告'))->find();
			S('popup_ads', $popup_ads, 600);
		}

		$time = gmtime();
		$popup_enabled = 1;
		$ad_link = '';
		if ($popup_ads['enabled'] == 1 && ($popup_ads['start_time'] <= $time && $time < $popup_ads['end_time'])) {
			if (!cookie('popup_enabled')) {
				$popup_enabled = get_data_path($popup_ads['ad_code'], 'afficheimg/');
				$ad_link = $popup_ads['ad_link'];
				cookie('ad_link', $ad_link);
				cookie('popup_enabled', $popup_enabled);
			}
		}

		$this->assign('ad_link', $ad_link);
		$this->assign('popup_ads', $popup_enabled);
		$topic_id = input('topic_id', 0, 'intval');
		$pages = dao('touch_page_view')->field('title, thumb_pic, page_id')->where(array('id' => $topic_id))->find();

		if (0 < $topic_id) {
			if (0 < $pages['page_id']) {
				$topic = dao('topic')->field('title, description')->where(array('topic_id' => $pages['page_id']))->find();
				$pages['title'] = $topic['title'];
				$pages['description'] = $topic['description'];
			}

			$pages['thumb_pic'] = get_image_path('data/gallery_album/original_img/' . $pages['thumb_pic']);
		}

		$position = assign_ur_here(0, $pages['title']);
		$seo = get_seo_words('index');

		foreach ($seo as $key => $value) {
			$seo[$key] = html_in(str_replace(array('{sitename}', '{key}', '{description}'), array(C('shop.shop_name'), C('shop.shop_keywords'), C('shop.shop_desc')), $value));
		}

		$page_title = !empty($seo['title']) ? $seo['title'] : $position['title'];
		$keywords = !empty($seo['keywords']) ? $seo['keywords'] : C('shop.shop_keywords');
		$description = !empty($seo['description']) ? $seo['description'] : (!empty($pages['description']) ? $pages['description'] : C('shop.shop_desc'));
		$share_img = !empty($pages['thumb_pic']) ? $pages['thumb_pic'] : '';
		$share_data = array('title' => $page_title, 'desc' => $description, 'link' => '', 'img' => $share_img);
		$this->assign('share_data', $this->get_wechat_share_content($share_data));
		$this->assign('page_title', $page_title);
		$this->assign('keywords', $keywords);
		$this->assign('description', $description);
		if(input('sz') == '123'){
			$this->display('bak');die;
		}
		/*Desc:首页
		**Author:sz
		**Date:2019/12/05
		**Time:17:38
		*/
		$travel_information = $this->travel_information();
		$this->assign('travel_information',$travel_information);
		$silders = $this->silders();
		$this->assign('silders',$silders);
		$cates = $this->category();
		$this->assign('cates',$cates);
		//特色
		$sgoods = $this->recommend_house();
		$this->assign('sgoods',$sgoods);
		//优质
		$notbrand = 0;
		if(!empty($sgoods)) $notbrand = $sgoods[0]['brand_id'];
		$hgoods = $this->recommend_house(0,$notbrand);
		$this->assign('hgoods',$hgoods);
		/* end */
		$this->display();
	}

	public function actionAppNav()
	{
		$app = C('shop.wap_index_pro') ? 1 : 0;
		$this->response(array('error' => 0, 'data' => $app));
	}

	public function actionNotice()
	{
		$condition = array('is_open' => 1, 'cat_id' => 12);
		$list = $this->db->table('article')->field('article_id, title, author, add_time, file_url, open_type')->where($condition)->order('article_type DESC, article_id DESC')->limit(5)->select();
		$res = array();

		foreach ($list as $key => $vo) {
			$res[$key]['text'] = $vo['title'];
			$res[$key]['url'] = build_uri('article', array('aid' => $vo['article_id']));
		}

		$this->response(array('error' => 0, 'data' => $res));
	}

	public function actionGoods()
	{
		$number = input('post.number', 10);
		$condition = array('intro' => input('post.type', ''));
		$list = $this->getGoodsList($condition, $number);
		$res = array();
		$endtime = gmtime();

		foreach ($list as $key => $vo) {
			$res[$key]['desc'] = $vo['name'];
			$res[$key]['sale'] = $vo['sales_volume'];
			$res[$key]['stock'] = $vo['goods_number'];

			if ($vo['promote_price']) {
				$res[$key]['price'] = min($vo['promote_price'], $vo['shop_price']);
			}
			else {
				$res[$key]['price'] = $vo['shop_price'];
			}

			$res[$key]['marketPrice'] = $vo['market_price'];
			$res[$key]['img'] = $vo['goods_thumb'];
			$res[$key]['link'] = $vo['url'];
			$endtime = $endtime < $vo['promote_end_date'] ? $vo['promote_end_date'] : $endtime;
		}

		$this->response(array('error' => 0, 'data' => $res, 'endtime' => date('Y-m-d H:i:s', $endtime)));
	}

	public function actionSpa()
	{
		$this->display();
	}

	private function getGoodsList($param = array(), $size = 10)
	{
		$data = array('id' => 0, 'brand' => 0, 'intro' => '', 'price_min' => 0, 'price_max' => 0, 'filter_attr' => 0, 'sort' => 'goods_id', 'order' => 'desc', 'keyword' => '', 'isself' => 0, 'hasgoods' => 0, 'promotion' => 0, 'page' => 1, 'type' => 1, 'size' => $size, C('VAR_AJAX_SUBMIT') => 1);
		$data = array_merge($data, $param);
		$cache_id = md5(serialize($data));
		$list = S($cache_id);

		if ($list === false) {
			$url = url('category/index/products', $data, false, true);
			$res = \App\Extensions\Http::doGet($url);

			if ($res === false) {
				$res = file_get_contents($url);
			}

			if ($res) {
				$data = json_decode($res, 1);
				$list = empty($data['list']) ? false : $data['list'];
				S($cache_id, $list, 600);
			}
		}

		return $list;
	}
	/*Desc:首页旅行资讯
	**Author:sz
	**Date:2019/12/06
	**Time:9:30
	*/
	private function travel_information(){
		$db = $GLOBALS['db'];
		$sql = "SELECT a.*,ac.* FROM ".$GLOBALS['ecs']->table('article')." AS a INNER JOIN ".$GLOBALS['ecs']->table('article_cat')."  AS ac ON a.cat_id = ac.cat_id WHERE ac.cat_name LIKE '%旅行资讯%' ORDER BY a.article_id DESC,a.sort_order DESC LIMIT 0,6";
		$res = $db->getAll($sql);
		return $res;
	}

	//轮播图
	private function silders (){
		$db = $GLOBALS['db'];
		$sql = "SELECT * FROM ".$GLOBALS['ecs']->table('touch_ad')." AS a INNER JOIN ".$GLOBALS['ecs']->table('touch_ad_position').
		" AS ap ON a.position_id = ap.position_id WHERE ap.position_name LIKE '手机端首页轮播%' AND a.enabled = 1 AND a.start_time < ".time()." AND a.end_time >".time()."  ORDER BY a.ad_id DESC";
		$res = $db->getAll($sql);
		if(!empty($res)){
			foreach($res as $k=>$re){
				if ($re['ad_code']) {
					if (strpos($re['ad_code'], 'http://') === false && strpos($re['ad_code'], 'https://') === false) {
						$re['ad_code'] = __STATIC__ . '/data/afficheimg/' . $re['ad_code'];
					} 
				}
				$res[$k] = $re;
			}
		}
		return $res;
	}
	//分类
	private function category(){
		$cates = get_category_tree_leve_one();
		return $cates;
	}
	//推荐
	private function recommend_house($brand=0,$notbrand=0){
		$db = $GLOBALS['db'];
		$where = "g.is_delete = 0 and is_show = 1";
		if(!empty($brand)){
			$where .= " and g.brand_id = ".$brand; 
		}else{
			if(!empty($notbrand)) $condition = " and b.brand_id <> ".$notbrand;
			$brand = $db->getOne("SELECT b.brand_id FROM ".$GLOBALS['ecs']->table('brand')." AS b INNER JOIN ".$GLOBALS['ecs']->table('brand_extend')." AS be ON b.brand_id = be.brand_id ".$condition);
			if(empty($brand)) return [];
			$where .= " and g.brand_id = ".$brand['id'];
		}
		 
		$res =  $db->getAll("SELECT g.goods_id,g.cat_id,g.goods_img,g.user_id,g.brand_id,g.goods_name,g.shop_price,g.goods_weight,g.goods_video,g.goods_tag FROM ".$GLOBALS['ecs']->table('goods')." as g WHERE ".$where." limit 0,3");
		if(!empty($res)){
			foreach($res as $k=>$re){
				$re['favorite'] = 0;
				if($_SESSION['user_id']){
					$_is = $db->getOne("SELECT rec_id FROM ".$GLOBALS['ecs']->table('collect_goods')." where user_id = ".$_SESSION['user_id']." AND goods_id = ".$re['goods_id']." LIMIT 1");
					$re['favorite'] = empty($_is)?0:1;
				}
				$re['silders'] = get_goods_gallery($re['goods_id'],6);
				$re['store'] = get_shop_name($re['user_id'],3); 
				$re['comments'] = get_comments_percent($re['goods_id']);
				$re['goods_weight'] = intval($re['goods_weight']);
				$res[$k] = $re;
			}
		}
		return $res;
	}
}

?>
