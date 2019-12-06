<!doctype html>
<html>
<head><?php echo $this->fetch('library/admin_html_head.lbi'); ?></head>

<body class="iframe_body">
	<div class="warpper">
    	<div class="title"><a href="<?php echo $this->_var['action_link']['href']; ?>" class="s-back"><?php echo $this->_var['lang']['back']; ?></a>手机-<?php echo $this->_var['ur_here']; ?></div>
            <div class="content">
            <div class="explanation" id="explanation">
                <div class="ex_tit"><i class="sc_icon"></i><h4><?php echo $this->_var['lang']['operating_hints']; ?></h4><span id="explanationZoom" title="<?php echo $this->_var['lang']['fold_tips']; ?>"></span></div>
                <ul>
                    <li><?php echo $this->_var['lang']['operation_prompt_content']['info']['0']; ?></li>
                    <li><?php echo $this->_var['lang']['operation_prompt_content_common']; ?></li>
                </ul>
            </div>
            <div class="flexilist">
                <div class="mian-info">
                    <form action="touch_ads.php" method="post" name="theForm" enctype="multipart/form-data" id="agency_form">
                        <div class="switch_info">
                             <div class="item">
                                <div class="label"><?php echo $this->_var['lang']['ad_type']; ?>：</div>
                                <div class="label_value">
                                    <div class="checkbox_items">
                                        <div class="checkbox_item">
                                            <input type="radio" class="ui-radio" name="ad_type" id="sex1" value="0" <?php if ($this->_var['ads']['ad_type'] == 0): ?>checked="checked"<?php endif; ?> onclick="get_ad_type(this.value);" />
                                            <label for="sex1" class="ui-radio-label" ><?php echo $this->_var['lang']['ad_type1']; ?></label>
                                        </div>
                                        <div class="checkbox_item">
                                            <input type="radio" class="ui-radio" name="ad_type" id="sex2" value="1"  <?php if ($this->_var['ads']['ad_type'] == 1): ?>checked="checked"<?php endif; ?> onclick="get_ad_type(this.value);"  />
                                            <label for="sex2" class="ui-radio-label"><?php echo $this->_var['lang']['ad_type2']; ?></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="label"><?php echo $this->_var['lang']['require_field']; ?><?php echo $this->_var['lang']['ad_name']; ?>：</div>
                                <div class="label_value">
                                    <input type="text" name="ad_name" class="text"  value="<?php echo $this->_var['ads']['ad_name']; ?>" autocomplete="off" />
                                    <div class="notic m20"><?php echo $this->_var['lang']['ad_name_notic']; ?></div>
                                    <div class="form_prompt"></div>
                                </div>
                            </div>
                            <div class="item" id="ad_type_2" style="display:<?php if ($this->_var['ads']['ad_type'] == 0): ?>none<?php else: ?><?php endif; ?>">
                                <div class="label"><?php echo $this->_var['lang']['goods_name']; ?>：</div>
                                <div class="label_value">
                                    <input type="text" name="goods_name" class="text"  value="<?php echo $this->_var['ads']['goods_name']; ?>" autocomplete="off" />
                                    <div class="notic m20"><?php echo $this->_var['lang']['ad_name_notic2']; ?></div>
                                </div>
                            </div>
                            <?php if ($this->_var['action'] == "add"): ?>
                            <div class="item">
                                <div class="label"><?php echo $this->_var['lang']['media_type']; ?>：</div>
                                <div class="label_value">
                                    <div class="date-item year">
                                        <div id="media_type_sel" class="imitate_select select_w320">
                                          <div class="cite"><?php echo $this->_var['lang']['ad_img']; ?></div>
                                          <ul>
                                             <li><a href="javascript:;" data-value="0" class="ftx-01"><?php echo $this->_var['lang']['ad_img']; ?></a></li>
                                            <li><a href="javascript:;" data-value="1" class="ftx-01"><?php echo $this->_var['lang']['ad_flash']; ?></a></li>
                                            <li><a href="javascript:;" data-value="2" class="ftx-01"><?php echo $this->_var['lang']['ad_html']; ?></a></li>
                                            <li><a href="javascript:;" data-value="3" class="ftx-01"><?php echo $this->_var['lang']['ad_text']; ?></a></li>
                                          </ul>
                                          <input name="media_type" type="hidden" value="0" id="media_type_val">
                                        </div>
                                    </div>
                                </div>
                            </div>
                          <?php else: ?>
                                  <input type="hidden" name="media_type" value="<?php echo $this->_var['ads']['media_type']; ?>" />
                          <?php endif; ?>
                          <div class="item">
                                <div class="label"><?php echo $this->_var['lang']['position_id']; ?>：</div>
                                <div class="label_value">
                                    <div class="date-item year">
                                        <div id="user_year" class="imitate_select select_w320">
                                          <div class="cite"><?php echo $this->_var['lang']['outside_posit']; ?></div>
                                          <ul>
                                            <li><a href="javascript:;" data-value="0" class="ftx-01"><?php echo $this->_var['lang']['outside_posit']; ?></a></li>
                                             <?php $_from = $this->_var['position_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('k', 'list');if (count($_from)):
    foreach ($_from AS $this->_var['k'] => $this->_var['list']):
?>
                                            <li><a href="javascript:;" data-value="<?php echo $this->_var['k']; ?>" class="ftx-01"><?php echo $this->_var['list']; ?></a></li>
                                            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                          </ul>
                                          <input name="position_id" type="hidden" value="<?php echo $this->_var['ads']['position_id']; ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="label"><?php echo $this->_var['lang']['start_end_date']; ?>：</div>
                                <div class="label_value">
                                    <div class="text_time" id="text_time_start">
                                            <input type="text" name="start_time" value="<?php echo $this->_var['ads']['start_time']; ?>" id="start_time_id" class="text" autocomplete="off" readonly />
                                    </div>
                                    <span class="bolang">&nbsp;&nbsp;~&nbsp;&nbsp;</span>
                                    <div class="text_time" id="text_time_end">
                                            <input type="text" name="end_time" value="<?php echo $this->_var['ads']['end_time']; ?>" id="end_time_id" class="text" autocomplete="off" readonly />
                                    </div>
                                </div>                               
                            </div>
                            <?php if ($this->_var['ads']['media_type'] == 0 || $this->_var['action'] == "add"): ?>
                                <div id="0">
                                    <div class="item">
                                        <div class="label"><?php echo $this->_var['lang']['ad_link']; ?>：</div>
                                        <div class="label_value">
                                            <input type="text" name="ad_link" class="text" value="<?php echo $this->_var['ads']['ad_link']; ?>" autocomplete="off" />
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="label"><?php echo $this->_var['lang']['upfile_img']; ?>：</div>
                                        <div class="label_value">
                                        	<div class="type-file-box">
                                                <input type="button" name="button" id="button" class="type-file-button" value="" />
                                                <input type="file" class="type-file-file" id="ad_img" name="ad_img" data-state="imgfile" size="30" hidefocus="true" value="" />
                                                <?php if ($this->_var['ads']['ad_code']): ?>
                                                <span class="show">
                                                    <a href="<?php echo $this->_var['ads']['ad_code']; ?>" target="_blank" class="nyroModal"><i class="icon icon-picture" data-tooltipimg="../data/afficheimg/<?php echo $this->_var['ads']['ad_code']; ?>" ectype="tooltip" title="tooltip"></i></a>
                                                </span>
                                                <?php endif; ?>
                                                <input type="text" name="textfile" class="type-file-text" id="textfield" autocomplete="off" readonly />
                                            </div>
                                            <div class="notic m20" id="AdCodeImg"><?php echo $this->_var['lang']['ad_name_notic2']; ?></div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="label"><?php echo $this->_var['lang']['img_url']; ?>：</div>
                                        <div class="label_value">
                                            <input type='text' name='img_url'  value="<?php echo $this->_var['url_src']; ?>" class="text" autocomplete="off" />
                                        </div>
                                    </div>
                                </div>
                                <?php endif; ?>
                                 <?php if ($this->_var['ads']['media_type'] == 1 || $this->_var['action'] == "add"): ?>
                                <div id="1" style="<?php if ($this->_var['ads']['media_type'] != 1 || $this->_var['action'] == 'add'): ?>display:none<?php endif; ?>">
                                    <div class="item">
                                        <div class="label"><?php echo $this->_var['lang']['upfile_flash']; ?>：</div>
                                        <div class="label_value">
                                        	<div class="type-file-box">
                                                <input type="button" name="button" id="button" class="type-file-button" value="" />
                                                <input type="file" class="type-file-file" id="upfile_flash" name="upfile_flash" data-state="imgfile" size="30" hidefocus="true" value="" />
                                                <?php if ($this->_var['ads']['ad_code']): ?>
                                                <span class="show">
                                                    <a href="../data/afficheimg/<?php echo $this->_var['ads']['ad_code']; ?>" target="_blank" class="nyroModal"><i class="icon icon-picture" data-tooltipimg="../data/afficheimg/<?php echo $this->_var['ads']['ad_code']; ?>" ectype="tooltip" title="tooltip"></i></a>
                                                </span>
                                                <?php endif; ?>
                                                <input type="text" name="textfile" class="type-file-text" id="textfield" autocomplete="off" readonly />
                                            </div>
                                            <div class="notic m20" id="AdCodeFlash"><?php echo $this->_var['lang']['ad_code_flash']; ?></div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="label"><?php echo $this->_var['lang']['flash_url']; ?>：</div>
                                        <div class="label_value">
                                            <input type="text" name="flash_url" class="text" value="<?php echo $this->_var['flash_url']; ?>" autocomplete="off" />
                                        </div>
                                    </div>
                                </div>
                                <?php endif; ?>
                                <?php if ($this->_var['ads']['media_type'] == 2 || $this->_var['action'] == "add"): ?>
                                <div id="2" style="<?php if ($this->_var['ads']['media_type'] != 2 || $this->_var['action'] == 'add'): ?>display:none<?php endif; ?>">
                                    <div class="item">
                                        <div class="label"><?php echo $this->_var['lang']['enter_code']; ?>：</div>
                                        <div class="label_value">
                                            <textarea name="ad_code" cols="60" rows="4" class="textarea"><?php echo $this->_var['ads']['ad_code']; ?></textarea>
                                            <div class="form_prompt"></div>
                                        </div>
                                    </div>
                                </div>    
                                <?php endif; ?>
                                <?php if ($this->_var['ads']['media_type'] == 3 || $this->_var['action'] == "add"): ?>
                                <div id="3" style="<?php if ($this->_var['ads']['media_type'] != 3 || $this->_var['action'] == 'add'): ?>display:none<?php endif; ?>">
                                    <div class="item">
                                        <div class="label"><?php echo $this->_var['lang']['ad_link']; ?>：</div>
                                        <div class="label_value">
                                            <input type="text" name="ad_link2" class="text" value="<?php echo $this->_var['ads']['ad_link']; ?>" autocomplete="off" />
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="label"><?php echo $this->_var['lang']['ad_code']; ?>：</div>
                                        <div class="label_value">
                                            <textarea name="ad_text" cols="60" rows="4" class="textarea"><?php echo $this->_var['ads']['ad_code']; ?></textarea>
                                        </div>
                                    </div>
                                </div>
                                 <?php endif; ?>
                                 
                                 <div class="item">
                                    <div class="label"><?php echo $this->_var['lang']['background_color']; ?>：</div>
                                    <div class="label_value">
                                        <input type="text" name="link_color" class="text" value="<?php echo $this->_var['ads']['link_color']; ?>" autocomplete="off" />
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="label"><?php echo $this->_var['lang']['enabled']; ?>：</div>
                                    <div class="label_value">
                                        <div class="checkbox_items">
                                            <div class="checkbox_item">
                                                <input type="radio" class="ui-radio" name="enabled" id="sex_0" value="1" <?php if ($this->_var['ads']['enabled'] == 1): ?> checked="true" <?php endif; ?>  />
                                                <label for="sex_0" class="ui-radio-label"><?php echo $this->_var['lang']['is_enabled']; ?></label>
                                            </div>
                                            <div class="checkbox_item">
                                                <input type="radio" class="ui-radio" name="enabled" id="sex_1" value="0" <?php if ($this->_var['ads']['enabled'] == 0): ?> checked="true" <?php endif; ?>  />
                                                <label for="sex_1" class="ui-radio-label"><?php echo $this->_var['lang']['no_enabled']; ?></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                 <div class="item" style="display:none">
                                    <div class="label"><?php echo $this->_var['lang']['home_rec_mer_pro']; ?></div>
                                    <div class="label_value">
                                        <div class="checkbox_items">
                                            <label>
                                                <input name="is_new" type="checkbox" class="checkbox" value="1" <?php if ($this->_var['ads']['is_new'] == 1): ?> checked="true" <?php endif; ?>/>
                                                <span><?php echo $this->_var['lang']['new_adv']; ?></span>
                                            </label>
                                            <label>
                                                <input name="is_hot" type="checkbox" class="checkbox" value="1" <?php if ($this->_var['ads']['is_hot'] == 1): ?> checked="true" <?php endif; ?>/>
                                                <span><?php echo $this->_var['lang']['hot_adv']; ?></span>
                                            </label>
                                            <label>
                                                <input name="is_best" type="checkbox" class="checkbox" value="1" <?php if ($this->_var['ads']['is_best'] == 1): ?> checked="true" <?php endif; ?>/>
                                                <span><?php echo $this->_var['lang']['best_adv']; ?></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                 <div class="item">
                                    <div class="label"><?php echo $this->_var['lang']['link_man']; ?>：</div>
                                    <div class="label_value">
                                        <input type="text" name="link_man" class="text" value="<?php echo $this->_var['ads']['link_man']; ?>" autocomplete="off" />
                                    </div>
                                </div>
                                 <div class="item">
                                    <div class="label"><?php echo $this->_var['lang']['link_email']; ?>：</div>
                                    <div class="label_value">
                                        <input type="text" name="link_email" class="text" value="<?php echo $this->_var['ads']['link_email']; ?>" autocomplete="off" />
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="label"><?php echo $this->_var['lang']['link_phone']; ?>：</div>
                                    <div class="label_value">
                                        <input type="text" name="link_phone" class="text" value="<?php echo $this->_var['ads']['link_phone']; ?>" autocomplete="off" />
                                    </div>
                                </div>
                            <div class="item">
                                <div class="label">&nbsp;</div>
                                <div class="label_value info_btn mt0">
                                    <a href="javascript:;" class="button" name="Submit" id="submitBtn"><?php echo $this->_var['lang']['button_submit']; ?></a>
                                    <input type="hidden" name="act" value="<?php echo $this->_var['form_act']; ?>" />
                                    <input type="hidden" name="id" value="<?php echo $this->_var['ads']['ad_id']; ?>" />
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
 <?php echo $this->fetch('library/pagefooter.lbi'); ?>
    
    <script type="text/javascript">
        
        $.divselect("#media_type_sel","#media_type_val",function(obj){
            var val = obj.attr("data-value");
            showMedia(val);
        });
       
        var MediaList = new Array('0', '1', '2', '3');
        function showMedia(AdMediaType)
        {
                for (I = 0; I < MediaList.length; I ++)
                {
                  if (MediaList[I] == AdMediaType){
                        $("#"+AdMediaType).css("display","block");
                        }else{
                        $("#"+MediaList[I]).css("display","none")
                        }
                }
        }
//时间选择
    var opts1 = {
            'targetId':'start_time_id',//时间写入对象的id
            'triggerId':['start_time_id'],//触发事件的对象id
            'alignId':'text_time_start',//日历对齐对象
            'format':'-',//时间格式 默认'YYYY-MM-DD HH:MM:SS'
            'min':'<?php echo $this->_var['snatch']['start_time']; ?>' //最小时间
    },opts2 = {
            'targetId':'end_time_id',
            'triggerId':['end_time_id'],
            'alignId':'text_time_end',
            'format':'-',
            'min':'<?php echo $this->_var['snatch']['start_time']; ?>'
    }
    xvDate(opts1);
    xvDate(opts2);
		//表单验证
		$(function(){
			$("#submitBtn").click(function(){
				if($("#agency_form").valid()){
					$("#agency_form").submit();
				}
			});
		
			$('#agency_form').validate({
				errorPlacement:function(error, element){
					var error_div = element.parents('div.label_value').find('div.form_prompt');
					element.parents('div.label_value').find(".notic").hide();
					error_div.append(error);
				},
				rules:{
					ad_name :{
						required:true
					}
				},
				messages:{
					ad_name :{
						required:'<i class="icon icon-exclamation-sign"></i>'+ad_name_empty
					}
				}
			});
		});
                
    function get_ad_type(val){
	  var ad_type_2 =$('#ad_type_2');
	  	  
	  if(val == 1){
                ad_type_2.css('display','');
	  }else{
              ad_type_2.css('display','none');
	  }
    }

    </script>
</body>
</html>
