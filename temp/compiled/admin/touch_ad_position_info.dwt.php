<!doctype html>
<html>
<head><?php echo $this->fetch('library/admin_html_head.lbi'); ?></head>

<body class="iframe_body">
	<div class="warpper">
    	<div class="title"><a href="<?php echo $this->_var['action_link']['href']; ?>" class="s-back"><?php echo $this->_var['lang']['back']; ?></a><?php if ($this->_var['type'] == 1): ?>手机<?php else: ?>广告<?php endif; ?> - <?php echo $this->_var['ur_here']; ?></div>
        <div class="content">
        	<div class="explanation" id="explanation">
            	<div class="ex_tit"><i class="sc_icon"></i><h4><?php echo $this->_var['lang']['operating_hints']; ?></h4><span id="explanationZoom" title="<?php echo $this->_var['lang']['fold_tips']; ?>"></span></div>
                <ul>
                    <li><?php echo $this->_var['lang']['operation_prompt_content']['info']['0']; ?></li>
                    <li><?php echo $this->_var['lang']['operation_prompt_content']['info']['1']; ?></li>
                    <li><?php echo $this->_var['lang']['operation_prompt_content']['info']['2']; ?></li>
                    <li><?php echo $this->_var['lang']['operation_prompt_content_common']; ?></li>
                </ul>
            </div>
            <div class="flexilist">
                <div class="common-content">
                    <div class="mian-info">
                        <form action="<?php if ($this->_var['type'] == 1): ?>touch_ad_position.php<?php else: ?>ad_position.php<?php endif; ?>" method="post" name="theForm" enctype="multipart/form-data" id="posit_arr_form" >
                            <div class="switch_info">
                                <div class="item">
                                    <div class="label"><?php echo $this->_var['lang']['require_field']; ?><?php echo $this->_var['lang']['position_name']; ?>：</div>
                                    <div class="label_value">
                                        <input type="text" name="position_name" class="text" value="<?php echo $this->_var['posit_arr']['position_name']; ?>" id="position_name" autocomplete="off" />
                                        <div class="form_prompt"></div>
                                    </div>
                                </div>
                                <?php if ($this->_var['is_team']): ?>
								<div class="item">
                                    <div class="label"><?php echo $this->_var['lang']['ads_channel']; ?>：</div>
                                    <div class="label_value">
                                        <select name="tc_id" class="text">
                                            <option value='0'><?php echo $this->_var['lang']['select_ads_channel']; ?></option>
                                            <?php $_from = $this->_var['team_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');if (count($_from)):
    foreach ($_from AS $this->_var['cat']):
?>
                                            <option value="<?php echo $this->_var['cat']['id']; ?>" <?php if ($this->_var['posit_arr']['tc_id'] == $this->_var['cat']['id']): ?>selected<?php endif; ?>><?php echo $this->_var['cat']['name']; ?></option>
                                            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                        </select>
                                        <div class="form_prompt"></div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="label"><?php echo $this->_var['lang']['ads_type']; ?>：</div>
                                    <div class="label_value">
                                        <select name="tc_type" class="text">
                                            <option value="0"><?php echo $this->_var['lang']['select_ads_type']; ?></option>
                                            <option value="banner" <?php if ($this->_var['posit_arr']['tc_type'] == 'banner'): ?>selected<?php endif; ?>><?php echo $this->_var['lang']['top']; ?></option>
                                            <option value="right" <?php if ($this->_var['posit_arr']['tc_type'] == 'right'): ?>selected<?php endif; ?>><?php echo $this->_var['lang']['right']; ?></option>
                                            <option value="left" <?php if ($this->_var['posit_arr']['tc_type'] == 'left'): ?>selected<?php endif; ?>><?php echo $this->_var['lang']['left']; ?></option>
                                            <option value="bottom" <?php if ($this->_var['posit_arr']['tc_type'] == 'bottom'): ?>selected<?php endif; ?>><?php echo $this->_var['lang']['bottom']; ?></option>
                                        </select>
                                        <div class="form_prompt"></div>
                                    </div>
                                </div>                                
                                <div class="item">
                                    <div class="label"><?php echo $this->_var['lang']['ads_belong']; ?>：</div>
                                    <div class="label_value">
                                        <select name="ad_type" class="text">
                                            <option value="0"><?php echo $this->_var['lang']['select_belong_type']; ?></option>
                                            <option value="seckill" <?php if ($this->_var['posit_arr']['ad_type'] == 'seckill'): ?>selected<?php endif; ?>><?php echo $this->_var['lang']['seckill']; ?></option>
                                            <option value="wxapp" <?php if ($this->_var['posit_arr']['ad_type'] == 'wxapp'): ?>selected<?php endif; ?>><?php echo $this->_var['lang']['wxapp']; ?></option>
                                        </select>
                                        <div class="form_prompt"></div>
                                    </div>
                                </div>
                                <?php endif; ?>
                                <div class="item">
                                    <div class="label"><?php echo $this->_var['lang']['require_field']; ?><?php echo $this->_var['lang']['ad_width']; ?>：</div>
                                    <div class="label_value">
                                        <input type="text" name="ad_width" class="text" value="<?php echo $this->_var['posit_arr']['ad_width']; ?>" id="ad_width" placeholder="360" autocomplete="off" /><div class="notic m20"><?php echo $this->_var['lang']['unit_px']; ?></div><div class="form_prompt"></div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="label"><?php echo $this->_var['lang']['require_field']; ?><?php echo $this->_var['lang']['ad_height']; ?>：</div>
                                    <div class="label_value">
                                        <input type="text" name="ad_height" class="text" value="<?php echo $this->_var['posit_arr']['ad_height']; ?>" placeholder="180" id="ad_height" autocomplete="off" /><div class="notic m20"><?php echo $this->_var['lang']['unit_px']; ?></div><div class="form_prompt"></div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="label"><?php echo $this->_var['lang']['position_desc']; ?>：</div>
                                    <div class="label_value">
                                        <input type="text" name="position_desc" class="text" value="<?php echo $this->_var['posit_arr']['position_desc']; ?>" autocomplete="off" />
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="label"><?php echo $this->_var['lang']['posit_style']; ?>：</div>
                                    <div class="label_value">
                                        <textarea name="position_style" cols="60" rows="4" class="textarea" id="position_style"><?php echo $this->_var['posit_arr']['position_style']; ?></textarea>
                                        <div class="form_prompt"></div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="label"><?php echo $this->_var['lang']['yes_or_no']; ?>：</div>
                                    <div class="label_value">
                                        <div class="checkbox_items">
                                            <div class="checkbox_item">
                                                <input type="radio" class="ui-radio" name="is_public" id="sex_0" value="0" <?php if ($this->_var['posit_arr']['is_public'] == 0): ?>checked="checked"<?php endif; ?>  />
                                                <label for="sex_0" class="ui-radio-label"><?php echo $this->_var['lang']['no']; ?></label>
                                            </div>
                                            <div class="checkbox_item">
                                                <input type="radio" class="ui-radio" name="is_public" id="sex_1" value="1" <?php if ($this->_var['posit_arr']['is_public'] == 1): ?>checked="checked"<?php endif; ?>  />
                                                <label for="sex_1" class="ui-radio-label"><?php echo $this->_var['lang']['yes']; ?></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="label">&nbsp;</div>
                                    <div class="label_value info_btn">
                                        <a href="javascript:;" class="button" id="submitBtn"><?php echo $this->_var['lang']['button_submit']; ?></a>
                                        <input type="hidden" name="act" value="<?php echo $this->_var['form_act']; ?>" />
                                        <input type="hidden" name="id" value="<?php echo $this->_var['posit_arr']['position_id']; ?>" />
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
		</div>
    </div>
 <?php echo $this->fetch('library/pagefooter.lbi'); ?>
    <script type="text/javascript">
		//列表导航栏设置下路选项
    	$(".ps-container").perfectScrollbar();

		$(function(){
			$("#submitBtn").click(function(){
				if($("#posit_arr_form").valid()){
					$("#posit_arr_form").submit();
				}
			});

			$('#posit_arr_form').validate({
					errorPlacement: function(error, element){
						var error_div = element.parents('div.label_value').find('div.form_prompt');
						error_div.siblings(".notic").hide();
						error_div.append(error);
					},
					rules : {
							position_name : {
									required : true
							},
							ad_width : {
									required : true,
									digits :true,
									min : 0,
									max : 2000
							},
							ad_height : {
									required : true,
									digits :true,
									min : 0,
									max : 2000
							},
							position_style : {
									required : true,
							}
					},
					messages : {
							position_name : {
									required : '<i class="icon icon-exclamation-sign"></i>'+posit_name_empty
							},
							ad_width : {
									required : '<i class="icon icon-exclamation-sign"></i>'+ad_width_empty,
									digits :  '<i class="icon icon-exclamation-sign"></i>'+ad_width_number,
									min : '<i class="icon icon-exclamation-sign"></i>'+width_value,
									max : '<i class="icon icon-exclamation-sign"></i>'+width_value
							},
							ad_height : {
									required : '<i class="icon icon-exclamation-sign"></i>'+ad_height_empty,
									digits :  '<i class="icon icon-exclamation-sign"></i>'+ad_height_number,
									min : '<i class="icon icon-exclamation-sign"></i>'+height_value,
									max : '<i class="icon icon-exclamation-sign"></i>'+height_value
							},
							position_style : {
									required : '<i class="icon icon-exclamation-sign"></i>'+empty_position_style
							}
					}
			});
		});
    </script>
</body>
</html>
