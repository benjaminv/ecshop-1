<!doctype html>
<html>
<head><?php echo $this->fetch('library/admin_html_head.lbi'); ?></head>

<body class="iframe_body">
	<div class="warpper">
    	<div class="title"><?php echo $this->_var['lang']['order_word']; ?> - <?php echo $this->_var['ur_here']; ?></div>
        <div class="content">
        	<div class="explanation" id="explanation">
                <div class="ex_tit"><i class="sc_icon"></i><h4><?php echo $this->_var['lang']['operating_hints']; ?></h4><span id="explanationZoom" title="<?php echo $this->_var['lang']['fold_tips']; ?>"></span></div>
                <ul>
                    <li><?php echo $this->_var['lang']['operation_prompt_content_common']; ?></li>
                    <li><?php echo $this->_var['lang']['operation_prompt_content']['mc_order']['0']; ?></li>
                    <li><?php echo $this->_var['lang']['operation_prompt_content']['mc_order']['1']; ?></li>
                </ul>
            </div>
            <div class="flexilist">
                <div class="common-content">
                    <div class="mian-info">
						<form action="mc_order.php" method="post" enctype="multipart/form-data" name="theForm" id="mc_order_form">
                            <div class="switch_info">
                                <div class="items">
                                    <div class="item">
                                        <div class="label"><?php echo $this->_var['lang']['reminder']; ?>：</div>
                                        <div class="label_value"><?php echo $this->_var['lang']['notice_order_num']; ?></div>
                                    </div>
                                    <div class="item mb0">
                                        <div class="label"><?php echo $this->_var['lang']['require_field']; ?><?php echo $this->_var['lang']['batch_import_user']; ?>[<span class="red"><?php echo $this->_var['lang']['register_over']; ?></span>]：</div>
                                        <div class="label_value">
                                        	<div class="type-file-box">
                                                <input type="button" name="button" id="button" class="type-file-button" value="">
                                                <input type="file" class="type-file-file" id="upfile" name="upfile" size="30" data-state="txtfile" hidefocus="true" value="">
                                                <input type="text" name="textfile" class="type-file-text"  id="textfield" readonly>
                                            </div>
											<div class="fl red bf100"><?php echo $this->_var['lang']['notice_mc_order']; ?></div>
                                            <div class="form_prompt"></div>
										</div>
                                    </div>
                                    <div class="item">
                                        <div class="label">&nbsp;</div>
                                        <div class="label_value">
                                            <a href="../mc_upfile/order_list.zip" target="_blank" class="mr10">1、<?php echo $this->_var['lang']['download_example']; ?></a>
                                            <a href="../mc_upfile/order_list.html" target="_blank" class="mr10">2、<?php echo $this->_var['lang']['online_view']; ?></a>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="label"><?php echo $this->_var['lang']['comment_goods_id']; ?></div>
                                        <div class="label_value">
<textarea class="textarea" name="comment_id" id="comment_id" onclick="get_comment(this);" style="height:150px; float:none;">3-12
4-11
5-16
6-14</textarea>
                                        <br/><span class="red"><?php echo $this->_var['lang']['format_goods_id']; ?></span>
                                        <br/><span class="red"><?php echo $this->_var['lang']['format_goods_operation']; ?></span>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="label"><?php echo $this->_var['lang']['require_field']; ?><?php echo $this->_var['lang']['goods_buy_number']; ?>：</div>
                                        <div class="label_value">
											<input name="goods_number" type="text" class="text w120" id="goods_number" value="1" size="10" autocomplete="off" />
                                        	<div class="form_prompt"></div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="label"><?php echo $this->_var['lang']['require_field']; ?><?php echo $this->_var['lang']['random_order_number']; ?>：</div>
                                        <div class="label_value">
											<input name="comment_num" type="text" class="text w120" id="comment_num" size="10" value="1" maxlength="4" autocomplete="off" />        
											<div class="notic"><?php echo $this->_var['lang']['tishi']; ?></div>
                                        	<div class="form_prompt"></div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="label"><?php echo $this->_var['lang']['add_time_slot']; ?>：</div>
                                        <div class="label_value text_time">
                                            <input type="text" name="start_time" value="" id="start_time" class="text mr0" readonly />
                                            <span class="bolang">&nbsp;&nbsp;~&nbsp;&nbsp;</span>
                                            <input type="text" name="end_time" value="" id="end_time" class="text" readonly />    
                                            <div class="notic"><?php echo $this->_var['lang']['add_time_slot_desc']; ?></div>
                                        </div>
                                    </div>
                                    <div class="item">
                                    <div class="label"><?php echo $this->_var['lang']['label_order_status']; ?></div>
                                        <div class="label_value">
                                            <div class="checkbox_items">
                                                <?php $_from = $this->_var['os_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'os');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['os']):
?>
                                                <div class="checkbox_item">
                                                    <input type="radio" name="order_status" value="<?php echo $this->_var['key']; ?>" class="ui-radio" id="order_status_0<?php echo $this->_var['key']; ?>" <?php if ($this->_var['key'] == 0): ?>checked<?php endif; ?>/>
                                                    <label for="order_status_0<?php echo $this->_var['key']; ?>" class="ui-radio-label"><?php echo $this->_var['os']; ?></label>
                                                </div>
                                                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="label"><?php echo $this->_var['lang']['label_shipping_status']; ?></div>
                                        <div class="label_value">
                                            <div class="checkbox_items">
                                                <?php $_from = $this->_var['ss_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'ss');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['ss']):
?>
                                                <div class="checkbox_item">
                                                    <input type="radio" name="shipping_status" value="<?php echo $this->_var['key']; ?>" class="ui-radio" id="shipping_status_0<?php echo $this->_var['key']; ?>" <?php if ($this->_var['key'] == 0): ?>checked<?php endif; ?>/>
                                                    <label for="shipping_status_0<?php echo $this->_var['key']; ?>" class="ui-radio-label"><?php echo $this->_var['ss']; ?></label>
                                                </div>
                                                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="label"><?php echo $this->_var['lang']['pay_status']; ?>：</div>
                                        <div class="label_value">
                                            <div class="checkbox_items">
                                                <?php $_from = $this->_var['ps_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'ps');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['ps']):
?>
                                                <div class="checkbox_item">
                                                    <input type="radio" name="pay_status" value="<?php echo $this->_var['key']; ?>" class="ui-radio" id="pay_status_0<?php echo $this->_var['key']; ?>" <?php if ($this->_var['key'] == 0): ?>checked<?php endif; ?>/>
                                                    <label for="pay_status_0<?php echo $this->_var['key']; ?>" class="ui-radio-label"><?php echo $this->_var['ps']; ?></label>
                                                </div>
                                                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="label">&nbsp;</div>
                                        <div class="label_value info_btn">
											<input type="submit" value="<?php echo $this->_var['lang']['batch_add_order']; ?>" class="button" id="submitBtn" />
											<!--<input type="reset" value="<?php echo $this->_var['lang']['button_reset']; ?>" class="button fl button_reset" />-->
											<input type="hidden" name="act" value="mc_add" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="switch_info" style="display:none;"><?php echo $this->_var['act_desc']; ?></div>
                            <div class="switch_info" style="display:none;"><?php echo $this->_var['act_promise']; ?></div>
                            <div class="switch_info" style="display:none;"><?php echo $this->_var['act_ensure']; ?></div>
                        </form>
                    </div>
                </div>
            </div>
		</div>
	</div>
 <?php echo $this->fetch('library/pagefooter.lbi'); ?>
    <script type="text/javascript">
		//表单验证
		$(function(){
			$("#submitBtn").click(function(){
				if($("#mc_order_form").valid()){
					$("#mc_order_form").submit();
				}
			});
			
			$('#mc_order_form').validate({
				errorPlacement:function(error, element){
					var error_div = element.parents('div.label_value').find('div.form_prompt');
					element.parents('div.label_value').find(".notic").hide();
					error_div.append(error);
				},
				rules : {
					textfile : {
						required : true
					},
					goods_number : {
						required : true,
						digits : true
					},
					comment_num : {
						required : true,
						digits:true
					}
				},
				messages : {
					textfile : {
						required : '<i class="icon icon-exclamation-sign"></i>' + file_not_null
					},
					goods_number : {
						required : '<i class="icon icon-exclamation-sign"></i>' + mc_order_notic_one,
						digits : '<i class="icon icon-exclamation-sign"></i>' + mc_order_notic_two
					},
					comment_num : {
						required : '<i class="icon icon-exclamation-sign"></i>' + mc_order_notic_three,
						digits : '<i class="icon icon-exclamation-sign"></i>' + mc_order_notic_four
					}
				}
			});
		});
        //时间选择
    var opts1 = {
        'targetId':'start_time',//时间写入对象的id
        'triggerId':['start_time'],//触发事件的对象id
        'alignId':'start_time',//日历对齐对象
        'format':'-'//时间格式 默认'YYYY-MM-DD HH:MM:SS'
    },opts2 = {
        'targetId':'end_time',
        'triggerId':['end_time'],
        'alignId':'end_time',
        'format':'-'
    }
    xvDate(opts1);
    xvDate(opts2);
    </script>
</body>
</html>
