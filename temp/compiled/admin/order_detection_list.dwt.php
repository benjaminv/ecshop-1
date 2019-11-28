<?php if ($this->_var['full_page']): ?>
<!doctype html>
<html>
<head><?php echo $this->fetch('library/admin_html_head.lbi'); ?></head>

<body class="iframe_body">
<div class="warpper">
    <div class="title"><?php echo $this->_var['lang']['order_word']; ?> - <?php echo $this->_var['ur_here']; ?></div>
    <div class="content">
        <?php echo $this->fetch('library/common_tabs_info.lbi'); ?>
        <div class="explanation" id="explanation">
            <div class="ex_tit"><i class="sc_icon"></i><h4><?php echo $this->_var['lang']['operating_hints']; ?></h4><span id="explanationZoom" title="<?php echo $this->_var['lang']['fold_tips']; ?>"></span></div>
            <ul>
                <li><?php echo $this->_var['lang']['operation_prompt_content']['list']['0']; ?></li>
                <li><?php echo $this->_var['lang']['operation_prompt_content']['list']['1']; ?></li>
                <li><?php echo $this->_var['lang']['operation_prompt_content']['list']['2']; ?></li>
            </ul>
        </div>
        <div class="flexilist">
            <div class="common-head">
                <div class="fl">
                    <a href="javascript:void(0);" onclick="get_auto_order_detection(<?php echo empty($this->_var['filter']['seller_list']) ? '0' : $this->_var['filter']['seller_list']; ?>)"><div class="fbutton"><div class="add" ><span><?php echo $this->_var['lang']['button_detection']; ?></span></div></div></a>
                </div>
                <div class="notic ml10 red"><?php echo $this->_var['lang']['detection_list_notic']; ?></div>
                <div class="search">
                    <form action="javascript:;" name="searchForm" onSubmit="searchGoodsname(this);">
                    <div class="input">
                        <input type="text" name="order_sn" class="text nofocus" placeholder="<?php echo $this->_var['lang']['order_sn']; ?>" autocomplete="off" />
                        <input type="submit" class="btn" name="secrch_btn" ectype="secrch_btn" value="" />
                    </div>
                    </form>
                </div>
            </div>
            <div class="common-content">
                <form method="post" action="order.php?act=operate" name="listForm" onsubmit="return check()">
                    <div class="list-div" id="listDiv">
                        <?php endif; ?>
                        <table cellpadding="1" cellspacing="1" id="listTable">
                            <tbody>
                            	<tr>
                                    <th width="12%"><div class="tDiv"><?php echo $this->_var['lang']['order_sn']; ?></div></th>
                                    <th width="10%"><div class="tDiv"><?php echo $this->_var['lang']['goods_steps_name']; ?></div></th>
                                    <th width="12%"><div class="tDiv"><?php echo $this->_var['lang']['order_time']; ?></div></th>
                                    <th width="20%"><div class="tDiv"><?php echo $this->_var['lang']['consignee']; ?></div></th>
                                    <th width="9%"><div class="tDiv"><?php echo $this->_var['lang']['total_fee']; ?></div></th>
                                    <th width="10%"><div class="tDiv"><?php echo $this->_var['lang']['all_status']; ?></div></th>
                                    <?php if ($this->_var['is_detection'] == 1): ?>
                                    <th width="12%"><div class="tDiv"><?php echo $this->_var['lang']['await_time']; ?></div></th>
                                    <th width="12%"><div class="tDiv"><?php echo $this->_var['lang']['auto_confirm_time']; ?></div></th>
                                    <?php endif; ?>
                                </tr>
                                <?php if ($this->_var['is_detection'] == 1): ?>
                                <?php $_from = $this->_var['order_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('okey', 'order');if (count($_from)):
    foreach ($_from AS $this->_var['okey'] => $this->_var['order']):
?>
                                <tr>
                                <td>
                                    <div class="tDiv">
                                    <?php echo $this->_var['order']['order_sn']; ?>
                                    <?php if ($this->_var['order']['is_stages'] == 1): ?><div class="order_code"><?php echo $this->_var['lang']['baitiao_by_stages']; ?></div><?php endif; ?><!--白条分期-->
                                    <?php if ($this->_var['order']['extension_code'] == "group_buy"): ?>
                                        <div class="order_code"><?php echo $this->_var['lang']['group_buy']; ?></div>
                                    <?php elseif ($this->_var['order']['extension_code'] == "exchange_goods"): ?>
                                        <div class="order_code"><?php echo $this->_var['lang']['exchange_goods']; ?></div>
                                    <?php elseif ($this->_var['order']['extension_code'] == "auction"): ?>
                                        <div class="order_code"><?php echo $this->_var['lang']['auction']; ?></div>
                                    <?php elseif ($this->_var['order']['extension_code'] == "snatch"): ?>
                                        <div class="order_code"><?php echo $this->_var['lang']['snatch']; ?></div>
                                    <?php elseif ($this->_var['order']['extension_code'] == "presale"): ?>
                                        <div class="order_code"><?php echo $this->_var['lang']['presale']; ?></div>
                                    <?php endif; ?>

                                    <?php if ($this->_var['order']['order_child'] > 0): ?>
                                        <font class="to_order_sn red">
                                        <?php echo $this->_var['lang']['to_order_sn3']; ?>
                                            <div id="div_order_<?php echo $this->_var['order']['order_id']; ?>" class="div_order_id">
                                            <?php $_from = $this->_var['order']['child_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'list');if (count($_from)):
    foreach ($_from AS $this->_var['list']):
?>
                                            <?php echo $this->_var['lang']['sub_order_sn']; ?>：<?php echo $this->_var['list']['order_sn']; ?>
                                            <br/> 
                                            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                            </div>
                                        </font>
                                    <?php else: ?>
                                        <?php if ($this->_var['order']['main_order_id'] > 0): ?>
                                        <font class="to_order_sn org"><?php echo $this->_var['lang']['sub_order_sn2']; ?></font>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="tDiv">
                                    <?php if ($this->_var['order']['order_child'] == 0): ?>
                                    <?php if ($this->_var['order']['user_name']): ?>
                                        <font class="red"><?php echo $this->_var['order']['user_name']; ?></font>
                                    <?php else: ?>
                                        <font><?php echo $this->_var['lang']['self']; ?></font>
                                    <?php endif; ?>
                                <?php else: ?>
                                    <font class="blue3"><?php echo $this->_var['lang']['to_order_sn2']; ?></font>
                                    <?php endif; ?>
                                    </div>
                                </td>
                                <td><div class="tDiv"><?php echo htmlspecialchars($this->_var['order']['buyer']); ?><br /><?php echo $this->_var['order']['short_order_time']; ?></div></td>
                                <td><div class="tDiv"><a href="mailto:<?php echo $this->_var['order']['email']; ?>"> <?php echo htmlspecialchars($this->_var['order']['consignee']); ?></a><?php if ($this->_var['order']['mobile']): ?> [TEL: <?php echo htmlspecialchars($this->_var['order']['mobile']); ?>]<?php endif; ?> <br />[<?php echo $this->_var['order']['region']; ?>] <?php echo htmlspecialchars($this->_var['order']['address']); ?></div></td>
                                <td><div class="tDiv"><?php echo $this->_var['order']['formated_total_fee']; ?></div></td>
                                <td><div class="tDiv"><?php echo $this->_var['lang']['ss'][$this->_var['order']['shipping_status']]; ?>,<?php echo $this->_var['lang']['not_confirm_order']; ?></div></td>
                                <?php if ($this->_var['is_detection'] == 1): ?>
                                <td><div class="tDiv"><?php echo $this->_var['order']['auto_delivery_time']; ?><?php echo $this->_var['lang']['tian']; ?><?php if ($this->_var['order']['is_auto_confirm']): ?><br/><font class="red">(<?php echo $this->_var['lang']['expired']; ?>)</font><?php endif; ?></div></td>
                                <td <?php if ($this->_var['order']['is_auto_confirm']): ?>style="color:#007b7b"<?php endif; ?>><div class="tDiv"><?php echo $this->_var['order']['auto_confirm_time']; ?></div></td>
                                <?php endif; ?>
                                </tr>
                                <?php endforeach; else: ?>
                                <tr><td class="no-records"  colspan="12"><?php echo $this->_var['lang']['no_records']; ?></td></tr>
                                <?php endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                <?php endif; ?>
                            </tbody>
                            <?php if ($this->_var['is_detection'] == 1): ?>
                            <tfoot>
                                <tr>
                                    <td colspan="12">
                                        <div class="list-page">
                                            <?php echo $this->fetch('library/page.lbi'); ?>
                                        </div>
                                    </td>
                                </tr>
                            </tfoot>
                            <?php endif; ?>
                        </table>
                        <input name="order_id_list" type="hidden" value="<?php echo empty($this->_var['filter']['order_id']) ? '0' : $this->_var['filter']['order_id']; ?>">
                        <?php if ($this->_var['full_page']): ?>
                    </div>
                </form>
            </div>
        </div>
        <div class="gj_search">
            <div class="search-gao-list" id="searchBarOpen">
                <i class="icon icon-zoom-in"></i><?php echo $this->_var['lang']['advanced_search']; ?>
            </div>
            <div class="search-gao-bar">
                <div class="handle-btn" id="searchBarClose"><i class="icon icon-zoom-out"></i><?php echo $this->_var['lang']['pack_up']; ?></div>
                <div class="title"><h3><?php echo $this->_var['lang']['advanced_search']; ?></h3></div>
                <form method="get" name="formSearch_senior" action="javascript:searchOrder()">
                    <div class="searchContent">
                        <div class="layout-box">
                            <dl>
                                <dt><?php echo $this->_var['lang']['order_sn']; ?></dt>
                                <dd><input type="text" value="" name="order_sn" class="s-input-txt" autocomplete="off" /></dd>
                            </dl>
                            <dl>
                                <dt><?php echo htmlspecialchars($this->_var['lang']['consignee']); ?></dt>
                                <dd><input type="text" value="" name="consignee" class="s-input-txt" autocomplete="off" /></dd>
                            </dl>
                            <?php if ($this->_var['common_tabs']['info']): ?>
                            <dl>
                                <dt><?php echo $this->_var['lang']['steps_shop_name']; ?></dt>
                                <dd>
                                    <div id="shop_name_select" class="select_w145 imitate_select">
                                        <div class="cite"><?php echo $this->_var['lang']['please_select']; ?></div>
                                        <ul>
                                           <li><a href="javascript:;" data-value="0"><?php echo $this->_var['lang']['select_please']; ?></a></li>
                                           <li><a href="javascript:;" data-value="1"><?php echo $this->_var['lang']['s_shop_name']; ?></a></li>
                                           <li><a href="javascript:;" data-value="2"><?php echo $this->_var['lang']['s_qw_shop_name']; ?></a></li>
                                           <li><a href="javascript:;" data-value="3"><?php echo $this->_var['lang']['s_brand_type']; ?></a></li>
                                        </ul>
                                        <input name="store_search" type="hidden" value="0" id="shop_name_val">
                                    </div>
                                </dd>
                            </dl>
                            <?php endif; ?>
                            <dl style="display:none" id="merchant_box">
                                
                                <dd>
                                    <div class="select_w145 imitate_select">
                                        <div class="cite"><?php echo $this->_var['lang']['please_select']; ?></div>
                                        <ul>
                                           <li><a href="javascript:;" data-value="0"><?php echo $this->_var['lang']['please_select']; ?></a></li>
                                           <?php $_from = $this->_var['store_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'store');if (count($_from)):
    foreach ($_from AS $this->_var['store']):
?>
                                           <li><a href="javascript:;" data-value="<?php echo $this->_var['store']['ru_id']; ?>"><?php echo $this->_var['store']['store_name']; ?></a></li>
                                           <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                        </ul>
                                        <input name="merchant_id" type="hidden" value="0" >
                                    </div>
                                </dd>
                            </dl>
                            <dl id="store_keyword" style="display:none" >
                                <dd><input type="text" value="" name="store_keyword" class="s-input-txt" autocomplete="off" /></dd>
                            </dl>
                            <dl style="display:none" id="store_type">
                                <dd>
                                    <div class="select_w145 imitate_select">
                                        <div class="cite"><?php echo $this->_var['lang']['please_select']; ?></div>
                                        <ul>
                                           <li><a href="javascript:;" data-value="0"><?php echo $this->_var['lang']['steps_shop_type']; ?></a></li>
                                           <li><a href="javascript:;" data-value="<?php echo $this->_var['lang']['flagship_store']; ?>"><?php echo $this->_var['lang']['flagship_store']; ?></a></li>
                                           <li><a href="javascript:;" data-value="<?php echo $this->_var['lang']['exclusive_shop']; ?>"><?php echo $this->_var['lang']['exclusive_shop']; ?></a></li>
                                           <li><a href="javascript:;" data-value="<?php echo $this->_var['lang']['franchised_store']; ?>"><?php echo $this->_var['lang']['franchised_store']; ?></a></li>
                                           <li><a href="javascript:;" data-value="<?php echo $this->_var['lang']['shop_store']; ?>"><?php echo $this->_var['lang']['shop_store']; ?></a></li>
                                        </ul>
                                        <input name="store_type" type="hidden" value="0" >
                                    </div>
                                </dd>
                            </dl>
                            <dl class="bot_btn">
                                <dd>
                                   <input type="submit" class="btn red_btn" name="tj_search" value="<?php echo $this->_var['lang']['button_inquire']; ?>" /><input type="reset" class="btn btn_reset" name="reset" value="<?php echo $this->_var['lang']['button_reset_alt']; ?>" />
                                </dd>
                            </dl>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php echo $this->fetch('library/pagefooter.lbi'); ?>
<script type="text/javascript">
//列表导航栏设置下路选项
$(".ps-container").perfectScrollbar();

//分页传值
listTable.recordCount = <?php echo empty($this->_var['record_count']) ? '0' : $this->_var['record_count']; ?>;
listTable.pageCount = <?php echo empty($this->_var['page_count']) ? '1' : $this->_var['page_count']; ?>;
listTable.query = 'detection_query';

<?php $_from = $this->_var['filter']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
listTable.filter.<?php echo $this->_var['key']; ?> = '<?php echo $this->_var['item']; ?>';
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>		

function get_auto_order_detection(seller_list){
    var val = '';
    var order_id = $("input[name='order_id_list']").val();
    val = '&order_id_list=' + order_id;
    if(order_id != 0){
    	location.href = "order.php?act=auto_order_detection" + val + "&seller_list=" + seller_list;
	}else{
		alert("暂无可确认收货订单");
	}
}

$.divselect("#shop_name_select","#shop_name_val",function(obj){
    var val = obj.attr("data-value");
    get_store_search(val);
});

function get_store_search(val){
    if(val == 1){
        $("#merchant_box").css("display",'');
        $("#store_keyword").css("display",'none');
        $("#store_type").css("display",'none');
    }else if(val == 2){
        $("#merchant_box").css("display",'none');
        $("#store_keyword").css("display",'');
        $("#store_type").css("display",'none');
    }else if(val == 3){
        $("#merchant_box").css("display",'none');
        $("#store_keyword").css("display",'');
        $("#store_type").css("display",'');
    }else{
        $("#merchant_box").css("display",'none');
        $("#store_keyword").css("display",'none');
        $("#store_type").css("display",'none');
    }
}
$.gjSearch("-240px");  //高级搜索

/**
 * 搜索用户
 */
function searchOrder()
{
    var frm = $("form[name='formSearch_senior']");
    listTable.filter['store_search'] = Utils.trim(frm.find("input[name='store_search']").val());
    listTable.filter['merchant_id'] = Utils.trim(frm.find("input[name='merchant_id']").val());
    listTable.filter['store_keyword'] = Utils.trim(frm.find("input[name='store_keyword']").val());
    listTable.filter['store_type'] = Utils.trim(frm.find("input[name='store_type']").val());

    listTable.filter['order_sn'] = Utils.trim(($("form[name='searchForm']").find("input[name='order_sn']").val() != '') ? $("form[name='searchForm']").find("input[name='order_sn']").val() :  frm.find("input[name='order_sn']").val());
    listTable.filter['consignee'] = Utils.trim(frm.find("input[name='consignee']").val());
    listTable.filter['page'] = 1;
    listTable.query = "detection_query";
    listTable.loadList();
}

<?php if ($this->_var['is_detection'] == 2): ?>
function start(page)
{
	var val = '';
			
	<?php if ($this->_var['filter']['order_id_list']): ?>
	var order_id = '<?php echo $this->_var['filter']['order_id_list']; ?>';
	val = '&order_id_list=' + order_id;
	<?php endif; ?>
	
	Ajax.call('order.php?act=ajax_order_detection&is_ajax=1&start=1' + val, 'page=' + page, start_response, 'GET', 'JSON');
}
/**
 * 处理反馈信息
 * @param: result
 * @return
 */
function start_response(result)
{
	var tbl = document.getElementById("listTable"); //获取表格对象
	
	//创建新任务行
	if(result.order){
		var row = tbl.insertRow(-1);
		cell = row.insertCell(0);
		cell.innerHTML = "<div class='tDiv'>" + result.order.order_sn + "</div>";
		cell = row.insertCell(1);
		cell.innerHTML = "<div class='tDiv'>" + result.order.user_name + "</div>";
		cell = row.insertCell(2);
		cell.innerHTML = "<div class='tDiv'>" + result.order.buyer + "<br />" + result.order.short_order_time + "</div>";
		cell = row.insertCell(3);
		cell.innerHTML = "<div class='tDiv'>" + result.order.consignee + "</div>";
		cell = row.insertCell(4);
		cell.innerHTML = "<div class='tDiv'>" + result.order.formated_total_fee + "</div>";
		cell = row.insertCell(5);
		cell.innerHTML = "<div class='tDiv'>" + result.order.new_shipping_status + "</div>";
	}
	if(result.stop_ajax == 1){
		start(result.page);
	}
}

$(function(){
	start(1);
});
<?php endif; ?>
</script>
</body>
</html>
<?php endif; ?>