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
                    <li><?php echo $this->_var['lang']['operation_prompt_content']['return_list']['0']; ?></li>
                    <li><?php echo $this->_var['lang']['operation_prompt_content']['return_list']['1']; ?></li>
                </ul>
            </div>
            <div class="flexilist">
            	<div class="common-head">
                	<div class="fl">
						<a href="order.php?act=order_query"><div class="fbutton"><div class="add" title="<?php echo $this->_var['lang']['03_order_query']; ?>"><span><i class="icon icon-plus"></i><?php echo $this->_var['lang']['03_order_query']; ?></span></div></div></a>
					</div>
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
                    	<table cellpadding="0" cellspacing="0" border="0">
                        	<thead>
                            	<tr>
                                	<th width="19%"><div class="tDiv"><?php echo $this->_var['lang']['record_id']; ?></div></th>
                                    <th width="8%"><div class="tDiv"><?php echo $this->_var['lang']['goods_steps_name']; ?></div></th>
                                    <th width="6%"><div class="tDiv"><?php echo $this->_var['lang']['return_change_type']; ?></div></th>
                                    <th width="10%"><div class="tDiv">申请信息</div></th>
                                    <th width="6%"><div class="tDiv"><?php echo $this->_var['lang']['y_amount']; ?></div></th>
                                    <th width="6%"><div class="tDiv"><?php echo $this->_var['lang']['s_amount']; ?></div></th>
                                    <th width="6%"><div class="tDiv"><?php echo $this->_var['lang']['goods_number']; ?></div></th>
                                    <th width="20%"><div class="tDiv"><?php echo $this->_var['lang']['consignee']; ?></div></th>
                                    <th width="7%"><div class="tDiv"><?php echo $this->_var['lang']['refund_way']; ?></div></th>
                                    <th width="7%"><div class="tDiv"><?php echo $this->_var['lang']['all_status']; ?></div></th>
                                    <th width="5%" class="handle"><?php echo $this->_var['lang']['handler']; ?></th>
                                </tr>
                            </thead>
                            <tbody>
								<?php $_from = $this->_var['order_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('okey', 'order');if (count($_from)):
    foreach ($_from AS $this->_var['okey'] => $this->_var['order']):
?>
								<tr>
                                  <td><div class="tDiv"><p><?php echo $this->_var['lang']['return_sn']; ?>：<?php echo $this->_var['order']['return_sn']; ?></p><p><?php echo $this->_var['lang']['order_sn']; ?>：<?php echo $this->_var['order']['order_sn']; ?><?php if ($this->_var['order']['extension_code'] == "group_buy"): ?><?php endif; ?></p></div></td>
								  <td>
                                  	<div class="tDiv">
									<?php if ($this->_var['order']['order_child'] == 0): ?>
										<?php if ($this->_var['order']['user_name']): ?>
											<font class="red"><?php echo $this->_var['order']['user_name']; ?></font>
										<?php else: ?>
											<font class="blue"><?php echo $this->_var['lang']['self']; ?></font>
										<?php endif; ?>
									<?php else: ?>
									<font class="pink3"><?php echo $this->_var['lang']['to_order_sn2']; ?></font>
									<?php endif; ?>
                                    </div>
								  </td>
								  <td><div class="tDiv"><?php if ($this->_var['order']['return_type'] == 0): ?><?php echo $this->_var['lang']['repair']; ?><?php elseif ($this->_var['order']['return_type'] == 1): ?><?php echo $this->_var['lang']['return_goods']; ?><?php elseif ($this->_var['order']['return_type'] == 2): ?><?php echo $this->_var['lang']['change']; ?><?php elseif ($this->_var['order']['return_type'] == 3): ?><?php echo $this->_var['lang']['only_return_money']; ?><?php endif; ?></div></td>
								  <td>
                                    <div class="tDiv">
                                        <p><?php echo $this->_var['lang']['applicant']; ?>：<?php echo $this->_var['order']['buyer']; ?></p>
                                        <p><?php echo $this->_var['lang']['apply_time']; ?>：<?php echo $this->_var['order']['apply_time']; ?></p>
                                    </div>
                                  </td>
								  <td>
                                  	<div class="tDiv">
                                    	<?php if ($this->_var['order']['discount_amount'] > 0): ?>
                                        + <?php echo $this->_var['order']['should_return']; ?>【<?php echo $this->_var['lang']['goods_alt']; ?>】
                                        <br/>
                                        - <?php echo $this->_var['order']['discount_amount']; ?>【<?php echo $this->_var['lang']['discount']; ?>】
                                        <br/>
                                        =
                                        <?php endif; ?>
                                  		<?php echo $this->_var['order']['formated_should_return']; ?>
                                    </div>
                                  </td>
								  <td><div class="tDiv"><?php echo $this->_var['order']['actual_return']; ?><?php if ($this->_var['order']['return_shipping_fee'] > 0 && $this->_var['order']['return_pay_status'] == 1): ?><br/><em class="org2">(<?php echo $this->_var['lang']['freight_charge']; ?>)</em><?php endif; ?></div></td>
								  <td><div class="tDiv"><?php echo $this->_var['order']['return_number']; ?></div></td>
								  <td><div class="tDiv"><?php echo htmlspecialchars($this->_var['order']['addressee']); ?></a><?php if ($this->_var['order']['phone']): ?> [TEL: <?php echo htmlspecialchars($this->_var['order']['phone']); ?>]<?php endif; ?> <br /><?php echo $this->_var['order']['address_detail']; ?></div></td>
								  <td><div class="tDiv"><?php if ($this->_var['order']['refund_type'] == 1): ?><?php echo $this->_var['lang']['return_balance']; ?><?php elseif ($this->_var['order']['refund_type'] == 2): ?><?php echo $this->_var['lang']['return_user_line']; ?><?php endif; ?></div></td>
								  <td><div class="tDiv"><?php if ($this->_var['order']['return_status'] < 0): ?><?php echo $this->_var['lang']['only_return_money']; ?><?php else: ?><?php echo $this->_var['lang']['rf'][$this->_var['order']['return_status']]; ?><?php endif; ?>-<font class="red"><?php echo $this->_var['lang']['ff'][$this->_var['order']['refound_status']]; ?></font></div></td>
								  <td class="handle">
									  <div class="tDiv a2">
										  <a href="order.php?act=return_info&ret_id=<?php echo $this->_var['order']['ret_id']; ?>&rec_id=<?php echo $this->_var['order']['rec_id']; ?>" title="<?php echo $this->_var['lang']['view']; ?>" class="btn_see"><i class="sc_icon sc_icon_see"></i><?php echo $this->_var['lang']['view']; ?></a> 
										  <?php if ($this->_var['order']['can_remove']): ?>
										  <a href="javascript:;" onclick="listTable.remove(<?php echo $this->_var['order']['order_id']; ?>, remove_confirm, 'remove_order')" title="<?php echo $this->_var['lang']['remove']; ?>" class="btn_trash"><i class="icon icon-edit"></i><?php echo $this->_var['lang']['drop']; ?></a></span>
										  <?php endif; ?>
									  </div>
								   </td>
								</tr>
								<?php endforeach; else: ?>
								<tr><td class="no-records" align="center" colspan="15"><?php echo $this->_var['lang']['no_records']; ?></td></tr>
								<?php endif; unset($_from); ?><?php $this->pop_vars();; ?>
                            </tbody>
                            <tfoot>
                            	<tr>
                                    <td colspan="15">
                                    	<div class="list-page">
                                            <?php echo $this->fetch('library/page.lbi'); ?>
                                        </div>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
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
                    <form method="get" name="formSearch_senior" action="javascript:searchReturnOrder()">
                        <div class="searchContent">
                            <div class="layout-box">
                                <dl>
                                    <dt><?php echo $this->_var['lang']['order_sn']; ?></dt>
                                    <dd><input type="text" value="" name="order_sn" class="s-input-txt" autocomplete="off" /></dd>
                                </dl>
                                <dl>
                                    <dt><?php echo $this->_var['lang']['return_sn']; ?></dt>
                                    <dd><input type="text" value="" name="return_sn" class="s-input-txt" autocomplete="off" /></dd>
                                </dl>
                                <dl>
                                    <dt><?php echo htmlspecialchars($this->_var['lang']['consignee']); ?></dt>
                                    <dd><input type="text" value="" name="consignee" class="s-input-txt" autocomplete="off" /></dd>
                                </dl>
                                <dl>
                                    <dt><?php echo $this->_var['lang']['all_status']; ?></dt>
                                    <dd>
                                        <div  class="select_w145 imitate_select">
                                            <div class="cite"><?php echo $this->_var['lang']['select_please']; ?></div>
                                            <ul>
                                               <li><a href="javascript:;" data-value="-1"><?php echo $this->_var['lang']['select_please']; ?></a></li>
                                               <li><a href="javascript:;" data-value="0"><?php echo $this->_var['lang']['already_repair']; ?></a></li>
                                               <li><a href="javascript:;" data-value="1"><?php echo $this->_var['lang']['refunded']; ?></a></li>
                                               <li><a href="javascript:;" data-value="2"><?php echo $this->_var['lang']['already_change']; ?></a></li>
                                            </ul>
                                            <input name="return_type" type="hidden" value="-1">
                                        </div>
                                    </dd>
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
                                <dl>
                                    <dt><?php echo $this->_var['lang']['from_order']; ?></dt>
                                    <dd>
                                        <div id="order_referer" class="imitate_select select_w145">
                                          <div class="cite"><?php echo $this->_var['lang']['select_please']; ?></div>
                                          <ul>
                                             <li><a href="javascript:;" data-value=""><?php echo $this->_var['lang']['select_please']; ?></a></li>
                                             <li><a href="javascript:;" data-value="pc">PC</a></li>
                                             <li><a href="javascript:;" data-value="touch">WAP</a></li>
                                             <li><a href="javascript:;" data-value="mobile">APP</a></li>
                                             <li><a href="javascript:;" data-value="ecjia-cashdesk"><?php echo $this->_var['lang']['cashdesk']; ?></a></li>
                                          </ul>
                                        <input name="order_referer" type="hidden" value="" id="order_referer_val">
                                        </div>
                                    </dd>
                                </dl>                                 
                            </div>
                        </div>
                        <div class="bot_btn">
                            <input type="submit" class="btn red_btn" name="tj_search" value="<?php echo $this->_var['lang']['button_inquire']; ?>" /><input type="reset" class="btn btn_reset" name="reset" value="<?php echo $this->_var['lang']['button_reset_alt']; ?>" />
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
	listTable.query = 'return_list_query';

	<?php $_from = $this->_var['filter']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
	listTable.filter.<?php echo $this->_var['key']; ?> = '<?php echo $this->_var['item']; ?>';
	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>	

	$.gjSearch("-240px");  //高级搜索
	
	$.divselect("#shop_name_select","#shop_name_val",function(obj){
		var val = obj.attr("data-value");
		get_store_search(val);
	});
	
	function get_store_search(val){
        if(val == 1){
			$("#merchant_box").css("display",'');
			$("#store_keyword").css("display",'none');
			$("#store_type").css("display",'none')
        }else if(val == 2){
			$("#merchant_box").css("display",'none');
			$("#store_keyword").css("display",'');
			$("#store_type").css("display",'none')
        }else if(val == 3){
			$("#merchant_box").css("display",'none');
			$("#store_keyword").css("display",'');
			$("#store_type").css("display",'')
        }else{
			$("#merchant_box").css("display",'none');
			$("#store_keyword").css("display",'none');
			$("#store_type").css("display",'none')
        }
	}

 	/* 搜索订单 */
    function searchReturnOrder()
    {
        var frm = $("form[name='formSearch_senior']");
        listTable.filter['store_search'] = Utils.trim(frm.find("input[name='store_search']").val());
        listTable.filter['merchant_id'] = Utils.trim(frm.find("input[name='merchant_id']").val());
        listTable.filter['store_keyword'] = Utils.trim(frm.find("input[name='store_keyword']").val());
        listTable.filter['store_type'] = Utils.trim(frm.find("input[name='store_type']").val());
        listTable.filter['order_referer'] = Utils.trim(frm.find("input[name='order_referer']").val());
		
        listTable.filter['order_sn'] = Utils.trim(($("form[name='searchForm']").find("input[name='order_sn']").val() != '') ? $("form[name='searchForm']").find("input[name='order_sn']").val() :  frm.find("input[name='order_sn']").val());
		listTable.filter['return_sn'] = Utils.trim(frm.find("input[name='return_sn']").val());
        listTable.filter['consignee'] = Utils.trim(frm.find("input[name='consignee']").val());
        listTable.filter['return_type'] = frm.find("input[name='return_type']").val();	
        listTable.filter['page'] = 1;
        listTable.loadList();
    }

    function check(){
		var snArray = new Array();
		var eles = document.forms['listForm'].elements;
		
		for (var i=0; i<eles.length; i++){
			if (eles[i].tagName == 'INPUT' && eles[i].type == 'checkbox' && eles[i].checked && eles[i].value != 'on'){
				snArray.push(eles[i].value);
			}
		}
		
		if (snArray.length == 0){
			return false;
		}else{
			eles['order_id'].value = snArray.toString();
			return true;
		}
    }
	</script>
</body>
</html>
<?php endif; ?>