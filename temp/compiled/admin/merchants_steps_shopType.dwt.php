<div class="step">
<div class="tit"><h4><?php echo $this->_var['title']['fields_titles']; ?></h4></div>

<div class="items"> 
<?php $_from = $this->_var['title']['cententFields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'fields');if (count($_from)):
    foreach ($_from AS $this->_var['fields']):
?>
	<div class="item">
		<div class="label"><?php echo $this->_var['fields']['fieldsFormName']; ?>：</div>
		<div class="value">
			<?php if ($this->_var['fields']['chooseForm'] == 'input'): ?>
				<input class="text" type="text" value="<?php echo $this->_var['fields']['titles_centents']; ?>" size="<?php echo $this->_var['fields']['inputForm']; ?>" name="<?php echo $this->_var['fields']['textFields']; ?>">
			<?php elseif ($this->_var['fields']['chooseForm'] == 'other'): ?>
				<?php if ($this->_var['fields']['otherForm'] == 'textArea'): ?>
					<div class="level_linkage">
						<div class="fl">
							<div class="ui-dropdown smartdropdown alien">
								<input type="hidden" value="<?php echo $this->_var['fields']['textAreaForm']['country']; ?>" name="<?php echo $this->_var['fields']['textFields']; ?>[]">
								<div class="txt"><?php echo $this->_var['lang']['country']; ?></div>
								<i class="down u-dropdown-icon"></i>
								<div class="options clearfix" style="max-height:300px;">

                                <!-- <?php $_from = $this->_var['country_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'country');if (count($_from)):
    foreach ($_from AS $this->_var['country']):
?> -->
									<span class="liv" data-text="<?php echo $this->_var['lang']['china']; ?>"  data-type="1" data-value="<?php echo $this->_var['country']['region_id']; ?>"><?php echo $this->_var['lang']['china']; ?></span>
                                <!--<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>-->
								</div>
							</div>
							<div class="ui-dropdown smartdropdown alien">
								<input type="hidden" value="<?php echo $this->_var['fields']['textAreaForm']['province']; ?>" name="<?php echo $this->_var['fields']['textFields']; ?>[]" id="selProvinces">
								<div class="txt"><?php echo $this->_var['lang']['province_alt']; ?></div>
								<i class="down u-dropdown-icon"></i>
								<div class="options clearfix" style="max-height:300px;">
									<!--<?php $_from = $this->_var['province_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'list');if (count($_from)):
    foreach ($_from AS $this->_var['list']):
?>-->
									<span class="liv" data-text="<?php echo $this->_var['list']['region_name']; ?>" data-type="2" data-value="<?php echo $this->_var['list']['region_id']; ?>"><?php echo $this->_var['list']['region_name']; ?></span>
									<!--<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>-->
								</div>
							</div>
							<div class="ui-dropdown smartdropdown alien">
								<input type="hidden" value="<?php echo $this->_var['fields']['textAreaForm']['city']; ?>" name="<?php echo $this->_var['fields']['textFields']; ?>[]" id="selCities">
								<div class="txt"><?php echo $this->_var['lang']['city']; ?></div>
								<i class="down u-dropdown-icon"></i>
								<div class="options clearfix" style="max-height:300px;">
                                <!-- <?php $_from = $this->_var['fields']['city_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'city_list_0_78280400_1575522294');if (count($_from)):
    foreach ($_from AS $this->_var['city_list_0_78280400_1575522294']):
?> -->
									<span class="liv hide" data-text="<?php echo $this->_var['lang']['city']; ?>" data-type="3" data-value="<?php echo $this->_var['city_list_0_78280400_1575522294']['region_id']; ?>"><?php echo $this->_var['lang']['city']; ?></span>
                                <!--<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>-->
								</div>
							</div>
							<div class="ui-dropdown smartdropdown alien">
								<input type="hidden" value="<?php echo $this->_var['fields']['textAreaForm']['district']; ?>" name="<?php echo $this->_var['fields']['textFields']; ?>[]" id="selDistricts">
								<div class="txt"><?php echo $this->_var['lang']['area_alt']; ?></div>
								<i class="down u-dropdown-icon"></i>
								<div class="options clearfix" style="max-height:300px;">
                                	<!-- <?php $_from = $this->_var['fields']['district_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'district_list_0_78280400_1575522294');if (count($_from)):
    foreach ($_from AS $this->_var['district_list_0_78280400_1575522294']):
?> -->
									<span class="liv hide" data-text="<?php echo $this->_var['lang']['area_alt']; ?>" data-type="4" data-value="<?php echo $this->_var['district_list_0_78280400_1575522294']['region_id']; ?>"><?php echo $this->_var['lang']['area_alt']; ?></span>
                                    <!--<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>-->
								</div>
							</div>
						</div>
					</div>
				<?php elseif ($this->_var['fields']['otherForm'] == 'dateFile'): ?>
					<div class="type-file-box">
						<input type="button" name="button" id="button" class="type-file-button" value="" />
						<input type="file" class="type-file-file" name="<?php echo $this->_var['fields']['textFields']; ?>" size="30" hidefocus="true" value="" />
						<input name="text_<?php echo $this->_var['fields']['textFields']; ?>" type="hidden" value="<?php echo $this->_var['fields']['titles_centents']; ?>" />
						<?php if ($this->_var['fields']['titles_centents'] != ''): ?>
                        <span class="show">
							<a href="../<?php echo $this->_var['fields']['titles_centents']; ?>" target="_blank" class="nyroModal"><i class="icon icon-picture" data-tooltipimg="<?php echo $this->_var['fields']['titles_centents']; ?>" ectype="tooltip" title="tooltip"></i></a>
						</span>
                        <?php endif; ?>
						<input type="text" name="textfile" class="type-file-text" id="textfield" readonly />
					</div>
				<?php elseif ($this->_var['fields']['otherForm'] == 'dateTime'): ?> 
					<?php $_from = $this->_var['fields']['dateTimeForm']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('dk', 'date');$this->_foreach['date'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['date']['total'] > 0):
    foreach ($_from AS $this->_var['dk'] => $this->_var['date']):
        $this->_foreach['date']['iteration']++;
?>
						<?php if ($this->_var['dk'] == 0): ?>  
						<div class="text_time" id="text_time_<?php echo $this->_var['fields']['textFields']; ?>_<?php echo $this->_var['dk']; ?>">
                            <input name="<?php echo $this->_var['fields']['textFields']; ?>[]" type="text" class="text mr0" id="<?php echo $this->_var['fields']['textFields']; ?>_<?php echo $this->_var['dk']; ?>" size="<?php echo $this->_var['date']['dateSize']; ?>" value='<?php echo $this->_var['date']['dateCentent']; ?>' readonly />
						</div>
						<?php else: ?>
						<span class="bolang">&nbsp;&nbsp;~&nbsp;&nbsp;</span>
						<div class="text_time" id="text_time_<?php echo $this->_var['fields']['textFields']; ?>_<?php echo $this->_var['dk']; ?>">
							<input name="<?php echo $this->_var['fields']['textFields']; ?>[]" type="text" class="text" id="<?php echo $this->_var['fields']['textFields']; ?>_<?php echo $this->_var['dk']; ?>" size="<?php echo $this->_var['date']['dateSize']; ?>" value='<?php echo $this->_var['date']['dateCentent']; ?>' readonly />
						</div>
						<?php endif; ?>
						<script type="text/javascript">
							var opts = {
								'targetId':'<?php echo $this->_var['fields']['textFields']; ?>_<?php echo $this->_var['dk']; ?>',
								'triggerId':['<?php echo $this->_var['fields']['textFields']; ?>_<?php echo $this->_var['dk']; ?>'],
								'alignId':'text_time_<?php echo $this->_var['fields']['textFields']; ?>_<?php echo $this->_var['dk']; ?>',
								'hms':'off',
								'format':'-'
							}
							xvDate(opts);
						</script>
					<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
				<?php endif; ?>
				<?php elseif ($this->_var['fields']['chooseForm'] == 'textarea'): ?>
					<textarea name="<?php echo $this->_var['fields']['textFields']; ?>" cols="<?php echo $this->_var['fields']['cols']; ?>" rows="<?php echo $this->_var['fields']['rows']; ?>" class="textarea"><?php echo $this->_var['fields']['titles_centents']; ?></textarea>  
				<?php elseif ($this->_var['fields']['chooseForm'] == 'select'): ?>
					<div id="<?php echo $this->_var['fields']['textFields']; ?>" class="imitate_select select_w320">
						<div class="cite"><?php echo $this->_var['lang']['select_please']; ?></div>
						<ul>
						<?php $_from = $this->_var['fields']['selectList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'selectList');if (count($_from)):
    foreach ($_from AS $this->_var['selectList']):
?>
							<li><a href='javascript:;' data-value='<?php echo $this->_var['selectList']; ?>' class='ftx-01'><?php echo $this->_var['selectList']; ?></a></li>
						<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
						</ul>
						<input name="<?php echo $this->_var['fields']['textFields']; ?>" type="hidden" value="<?php echo $this->_var['fields']['titles_centents']; ?>" id="<?php echo $this->_var['fields']['textFields']; ?>_val">
					</div>  
				<?php elseif ($this->_var['fields']['chooseForm'] == 'radio'): ?>  
                	<div class="checkbox_items"> 
					<?php $_from = $this->_var['fields']['radioCheckboxForm']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('rc_k', 'radio');if (count($_from)):
    foreach ($_from AS $this->_var['rc_k'] => $this->_var['radio']):
?>
                        <div class="checkbox_item"> 
                            <input name="<?php echo $this->_var['fields']['textFields']; ?>" type="radio" class="ui-radio" value="<?php echo $this->_var['radio']['radioCheckbox']; ?>" id="<?php echo $this->_var['fields']['textFields']; ?>_<?php echo $this->_var['radio']['radioCheckbox']; ?>" <?php if ($this->_var['fields']['titles_centents'] == $this->_var['radio']['radioCheckbox']): ?>checked="checked"<?php else: ?><?php if ($this->_var['rc_k'] == 0): ?>checked="checked"<?php endif; ?><?php endif; ?> />
                            <label for="<?php echo $this->_var['fields']['textFields']; ?>_<?php echo $this->_var['radio']['radioCheckbox']; ?>" class="ui-radio-label"><?php echo $this->_var['radio']['radioCheckbox']; ?></label>
                        </div>
                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                    </div>
				<?php elseif ($this->_var['fields']['chooseForm'] == 'checkbox'): ?>  
                	<div class="checkbox_items">
					<?php $_from = $this->_var['fields']['radioCheckboxForm']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('rc_k', 'checkbox');if (count($_from)):
    foreach ($_from AS $this->_var['rc_k'] => $this->_var['checkbox']):
?>
						<div class="checkbox_item">
                       		<input name="<?php echo $this->_var['fields']['textFields']; ?>" type="checkbox" class="ui-checkbox" value="<?php echo $this->_var['checkbox']['radioCheckbox']; ?>" id="<?php echo $this->_var['fields']['textFields']; ?>_<?php echo $this->_var['checkbox']['radioCheckbox']; ?>" <?php if ($this->_var['fields']['titles_centents'] == $this->_var['checkbox']['radioCheckbox']): ?>checked="checked"<?php else: ?><?php if ($this->_var['rc_k'] == 0): ?>checked="checked"<?php endif; ?><?php endif; ?> />
                        	<label for="<?php echo $this->_var['fields']['textFields']; ?>_<?php echo $this->_var['checkbox']['radioCheckbox']; ?>" class="ui-label"><?php echo $this->_var['checkbox']['radioCheckbox']; ?></label>
                        </div>
					<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                    </div>
				<?php endif; ?>
			<div class="fl org"><?php echo $this->_var['fields']['formSpecial']; ?></div>
		</div>
	</div>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	<!--以上是自定义基本信息，以下是固定信息-->
	<div class="item">
		<div class="label"><?php echo $this->_var['lang']['require_field']; ?>&nbsp;<?php echo $this->_var['lang']['expect_shop_type']; ?>：</div>
		<div class="label_value">
			<div id="shoprz_type" class="imitate_select select_w320">
				<div class="cite"><?php echo $this->_var['lang']['select_please']; ?></div>
				<ul>
					<li><a href='javascript:;' data-value='1' class='ftx-01'><?php echo $this->_var['lang']['flagship_store']; ?></a></li>
					<li><a href='javascript:;' data-value='2' class='ftx-01'><?php echo $this->_var['lang']['exclusive_shop']; ?></a></li>
					<li><a href='javascript:;' data-value='3' class='ftx-01'><?php echo $this->_var['lang']['franchised_store']; ?></a></li>
				</ul>
				<input name="ec_shoprz_type" type="hidden" value="<?php if ($this->_var['title']['parentType']['shoprz_type']): ?><?php echo $this->_var['title']['parentType']['shoprz_type']; ?><?php else: ?>0<?php endif; ?>" id="shoprz_type_val">
                                    
			</div>
			<div id="subShoprz_type" style="display:<?php if ($this->_var['title']['parentType']['shoprz_type'] == 1): ?>block<?php else: ?>none<?php endif; ?>" class="imitate_select select_w320">
				<div class="cite"><?php echo $this->_var['lang']['select_please']; ?></div>
				<ul>
					<li><a href='javascript:;' data-value='1' class='ftx-01'><?php echo $this->_var['lang']['subShoprz_type']['0']; ?></a></li>
					<li><a href='javascript:;' data-value='2' class='ftx-01'><?php echo $this->_var['lang']['subShoprz_type']['1']; ?></a></li>
					<li><a href='javascript:;' data-value='3' class='ftx-01'><?php echo $this->_var['lang']['subShoprz_type']['2']; ?></a></li>
				</ul>
				<input name="ec_subShoprz_type" type="hidden" value="<?php if ($this->_var['title']['parentType']['subShoprz_type']): ?><?php echo $this->_var['title']['parentType']['subShoprz_type']; ?><?php else: ?>0<?php endif; ?>" id="subShoprz_type_val">
			</div>	
			
			<div id="shopSellerType1" style="display:<?php if ($this->_var['title']['parentType']['shoprz_type'] == 1): ?>block<?php else: ?>none<?php endif; ?>">
				<div class="org" id="subShoprz_type1" style="display:<?php if ($this->_var['title']['parentType']['subShoprz_type'] == 1): ?>block<?php else: ?>none<?php endif; ?>; clear:both; padding-top:7px;"><?php echo $this->_var['lang']['subshop_brand_notic']; ?></div>
				<div style="display:<?php if ($this->_var['title']['parentType']['subShoprz_type'] == 2): ?>block<?php else: ?>none<?php endif; ?>;" class="fl bf100" id="subShoprz_type2">
					<div class="org"><?php echo $this->_var['lang']['subShoprz_org_notic']['0']; ?><a class="blue" href="#" target="_blank" style="display:none"><?php echo $this->_var['lang']['subShoprz_org_notic']['1']; ?></a></div>
					<div class="shop_nr">
						<label class="fl"><?php echo $this->_var['lang']['grant_validity']; ?>：</label>
						<div class="text_time" id="text_time5">
							<input type="text" name="ec_shop_expireDateStart" value="<?php echo $this->_var['title']['parentType']['shop_expireDateStart']; ?>" id="shop_expireDateStart" class="text mr0" readonly />
						</div>
						<span class="bolang">&nbsp;&nbsp;~&nbsp;&nbsp;</span>
						<div class="text_time" id="text_time6">
							<input type="text" name="ec_shop_expireDateEnd" value="<?php echo $this->_var['title']['parentType']['shop_expireDateEnd']; ?>" id="shop_expireDateEnd" class="text" readonly />
						</div>
                        <div class="checkbox_item fl">
                            <input type="checkbox" id="authorizeCheckBox" value="1" name="ec_shop_permanent" class="ui-checkbox" onClick="get_authorizeCheckBox(this, 'shop_expireDateStart', 'shop_expireDateEnd','<?php echo $this->_var['title']['parentType']['shop_expireDateStart']; ?>','<?php echo $this->_var['title']['parentType']['shop_expireDateEnd']; ?>');" <?php if ($this->_var['title']['parentType']['shop_permanent'] == 1): ?>checked<?php endif; ?>>
                            <label for="authorizeCheckBox" class="ui-label"><?php echo $this->_var['lang']['permanent']; ?></label>
                        </div>
					</div>
					<div id="container2" class="fl bf100 mt10" style="position: relative;">
						<div class="type-file-box">
							<input type="button" name="button" id="button" class="type-file-button" value="" />
							<input type="file" class="type-file-file" name="ec_authorizeFile" size="30" hidefocus="true" value="" />
							<?php if ($this->_var['title']['parentType']['authorizeFile']): ?>
                            <span class="show">
								<a href="../<?php echo $this->_var['title']['parentType']['authorizeFile']; ?>" target="_blank" class="nyroModal"><i class="icon icon-picture" data-tooltipimg="../<?php echo $this->_var['title']['parentType']['authorizeFile']; ?>" ectype="tooltip" title="tooltip"></i></a>
							</span>
                            <?php endif; ?>
							<input type="text" name="textfile" class="type-file-text" id="textfield" readonly />
						</div>
					</div>
				</div>
			
				<div style="display:<?php if ($this->_var['title']['parentType']['subShoprz_type'] == 3): ?>block<?php else: ?>none<?php endif; ?>; clear:both; line-height:30px;" id="subShoprz_type3">
					<?php echo $this->_var['lang']['subShoprz_type_notic']['0']; ?>：
					<div id="container1" style="position: relative;">
						<div class="type-file-box">
							<input type="button" name="button" id="button" class="type-file-button" value="" />
							<input type="file" class="type-file-file" name="ec_shop_hypermarketFile" size="30" hidefocus="true" value="" />
							<?php if ($this->_var['title']['parentType']['shop_hypermarketFile']): ?>
                            <span class="show">
								<a href="../<?php echo $this->_var['title']['parentType']['shop_hypermarketFile']; ?>" target="_blank" class="nyroModal"><i class="icon icon-picture" data-tooltipimg="../<?php echo $this->_var['title']['parentType']['shop_hypermarketFile']; ?>" ectype="tooltip" title="tooltip"></i></a>
							</span>
                            <?php endif; ?>
							<input type="text" name="textfile" class="type-file-text" id="textfield" readonly />
						</div>
					</div>
				</div>
			</div>
			
			<div style="display:<?php if ($this->_var['title']['parentType']['shoprz_type'] == 2): ?>block<?php else: ?>none<?php endif; ?>; clear:both; padding-top:7px;" id="shopSellerType2" class="orange">
				 <?php echo $this->_var['lang']['subShoprz_type_notic']['1']; ?>
			</div>
			<div style="display:<?php if ($this->_var['title']['parentType']['shoprz_type'] == 3): ?>block<?php else: ?>none<?php endif; ?>; clear:both; padding-top:7px;" id="shopSellerType3" class="orange">
				<?php echo $this->_var['lang']['subShoprz_type_notic']['2']; ?>
			</div>
            <div class="form_prompt"></div>
		</div>
	</div>
</div>
</div>
<script type="text/javascript">
	$.divselect("#shoprz_type","#shoprz_type_val",function(){
		var val = $("#shoprz_type_val").val();
		var num = 4;
		var idType = 'shopSellerType';
		if(val == 1){
			$("#subShoprz_type").show();
		}else{
			$("#subShoprz_type").hide();
		}

		get_show_hide(val,num,idType);		
	})
	
	function get_show_hide(val,num,idType){

	var newType;

	for(i=1; i<num; i++){
		newType = document.getElementById(idType+i);
		if(i == val){
			newType.style.display = 'block';
		}else{
			newType.style.display = 'none';
		}

		}
	}
	
	$.divselect("#subShoprz_type","#subShoprz_type_val",function(){
		var val = $("#subShoprz_type_val").val();
		var num = 4;
		var idType = 'subShoprz_type';	
		
		get_show_hide(val,num,idType);
	})

	function get_shoprz_type(val,num,idType){

	var subShoprz_type = document.getElementById('subShoprz_type');

	if(val == 1){
	subShoprz_type.style.display = 'block';
	}else{
	subShoprz_type.style.display = 'none';
	}

	get_show_hide(val,num,idType);
	}

	//时间选择
	var opts1 = {
		'targetId':'shop_expireDateStart',//时间写入对象的id
		'triggerId':'shop_expireDateStart',//触发事件的对象id
		'alignId':'text_time5',//日历对齐对象
		'format':'-',//时间格式 默认'YYYY-MM-DD HH:MM:SS'
		'hms':'off',
		'min':'' //最小时间
	},opts2 = {
		'targetId':'shop_expireDateEnd',
		'triggerId':'shop_expireDateEnd',
		'alignId':'text_time6',
		'format':'-',
		'hms':'off',
		'min':''
	}
	xvDate(opts1);
	xvDate(opts2);
</script>