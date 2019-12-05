<div class="tbar-panel-main" ectype="tbpl-main">
    <div class="follow-tabnav">
        <ul>
            <li class="ui-switchable-item curr">
                <a href="javascript:void(0)"><?php echo $this->_var['lang']['goods']; ?></a>
                <span></span>
            </li>
            <li class="ui-switchable-item">
                <a href="javascript:void(0)"><?php echo $this->_var['lang']['seller_store']; ?></a>
            </li>
        </ul>
    </div>
    <div class="tbar-panel-content" ectype="tbpl-content">
        <div class="follow-tabcontents">
            <div class="follow-tab-content follow-product-list">
                <ul>
                <?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
                    <li class="fpl-item">
                        <a class="img-wrap" href="<?php echo $this->_var['goods']['url']; ?>" target="_blank"><img src="<?php echo $this->_var['goods']['goods_thumb']; ?>" width="100" height="100" /></a>
                        <a class="price" href="<?php echo $this->_var['goods']['url']; ?>" target="_blank"><?php if ($this->_var['goods']['promote_price']): ?><?php echo $this->_var['goods']['promote_price']; ?><?php else: ?><?php echo $this->_var['goods']['shop_price']; ?><?php endif; ?></a>
                        <a class="fpl-remove" href="javascript:deleteCollectGoods(<?php echo $this->_var['goods']['rec_id']; ?>);"><b class="iconfont icon-remove-alt"></b></a>
                    </li>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                </ul>
                <a href="user.php?act=collection_list" class="follow-bottom-more" target="_blank"><?php echo $this->_var['lang']['More_attention_goods']; ?> &gt;&gt;</a>
            </div>
            <div class="follow-tab-content follow-shop-list">
                <ul>
                <?php $_from = $this->_var['store_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'store');if (count($_from)):
    foreach ($_from AS $this->_var['store']):
?>
                    <li class="fsl-item">
                        <div class="shop-logo"><a href="<?php echo $this->_var['store']['url']; ?>" target="_blank"><img src="<?php echo $this->_var['store']['brand_thumb']; ?>" /></a></div>
                        <div class="shop-info">
                            <div class="si-name"><a target="_blank" href="<?php echo $this->_var['store']['url']; ?>"><?php echo $this->_var['store']['store_name']; ?></a></div>
                            <a href="<?php echo $this->_var['store']['url']; ?>" target="_blank" class="si-button"><?php echo $this->_var['lang']['enter_the_shop']; ?></a>
                        </div>
                    </li>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                </ul>
                <a href="user.php?act=store_list" class="follow-bottom-more" target="_blank"><?php echo $this->_var['lang']['enter_shop_more']; ?> &gt;&gt;</a>
            </div>
        </div>
    </div>
</div>
<script>
//商品收藏和店铺收藏切换
$(".tbar-panel-main").slide({titCell:".follow-tabnav li",mainCell:".follow-tabcontents",effect:"left",titOnClassName:"curr"});

function deleteCollectGoods(col_id)
{
	Ajax.call('get_ajax_content.php?act=get_content', 'data_type=mpbtn_collection&collection_id='+col_id+'&type=del', return_CollectGoods, 'POST', 'JSON');
}

function return_CollectGoods(result)
{
	$(".pop_panel").html(result.content);
	tbplHeigth();
}
</script>