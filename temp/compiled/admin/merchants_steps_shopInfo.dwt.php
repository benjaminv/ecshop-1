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
							<!-- <?php $_from = $this->_var['fields']['city_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'city_list_0_79280400_1575522294');if (count($_from)):
    foreach ($_from AS $this->_var['city_list_0_79280400_1575522294']):
?> -->
								<span class="liv hide" data-text="<?php echo $this->_var['lang']['city']; ?>" data-type="3" data-value="<?php echo $this->_var['city_list_0_79280400_1575522294']['region_id']; ?>"><?php echo $this->_var['lang']['city']; ?></span>
							<!--<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>-->
							</div>
						</div>
						<div class="ui-dropdown smartdropdown alien">
							<input type="hidden" value="<?php echo $this->_var['fields']['textAreaForm']['district']; ?>" name="<?php echo $this->_var['fields']['textFields']; ?>[]" id="selDistricts">
							<div class="txt"><?php echo $this->_var['lang']['area_alt']; ?></div>
							<i class="down u-dropdown-icon"></i>
							<div class="options clearfix" style="max-height:300px;">
								<!-- <?php $_from = $this->_var['fields']['district_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'district_list_0_79280400_1575522294');if (count($_from)):
    foreach ($_from AS $this->_var['district_list_0_79280400_1575522294']):
?> -->
								<span class="liv hide" data-text="<?php echo $this->_var['lang']['area_alt']; ?>" data-type="4" data-value="<?php echo $this->_var['district_list_0_79280400_1575522294']['region_id']; ?>"><?php echo $this->_var['lang']['area_alt']; ?></span>
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
						<span class="show">
							<?php if ($this->_var['fields']['titles_centents'] != ''): ?><a href="../<?php echo $this->_var['fields']['titles_centents']; ?>" target="_blank" class="nyroModal"><?php endif; ?><i class="icon icon-picture" data-tooltipimg="../<?php echo $this->_var['fields']['titles_centents']; ?>" ectype="tooltip" title="tooltip"></i></a>
						</span>
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
						<input name="<?php echo $this->_var['fields']['textFields']; ?>[]" type="text"  id="<?php echo $this->_var['fields']['textFields']; ?>_<?php echo $this->_var['dk']; ?>" size="<?php echo $this->_var['date']['dateSize']; ?>" value='<?php echo $this->_var['date']['dateCentent']; ?>' readonly />
						<input name="selbtn_<?php echo $this->_var['fields']['textFields']; ?>_<?php echo $this->_var['dk']; ?>" type="button" id="selbtn_<?php echo $this->_var['fields']['textFields']; ?>_<?php echo $this->_var['dk']; ?>"> 
						</div>
						<?php else: ?>
						<span class="bolang">&nbsp;&nbsp;~&nbsp;&nbsp;</span>
						<div class="text_time" id="text_time_<?php echo $this->_var['fields']['textFields']; ?>_<?php echo $this->_var['dk']; ?>">
							<input name="<?php echo $this->_var['fields']['textFields']; ?>[]" type="text" id="<?php echo $this->_var['fields']['textFields']; ?>_<?php echo $this->_var['dk']; ?>" size="<?php echo $this->_var['date']['dateSize']; ?>" value='<?php echo $this->_var['date']['dateCentent']; ?>' readonly />
							<input name="selbtn_<?php echo $this->_var['fields']['textFields']; ?>_<?php echo $this->_var['dk']; ?>" type="button" id="selbtn_<?php echo $this->_var['fields']['textFields']; ?>_<?php echo $this->_var['dk']; ?>"> 
						</div>
						<?php endif; ?>
						<script type="text/javascript">
							var opts = {
								'targetId':'<?php echo $this->_var['fields']['textFields']; ?>_<?php echo $this->_var['dk']; ?>',
								'triggerId':['selbtn_<?php echo $this->_var['fields']['textFields']; ?>_<?php echo $this->_var['dk']; ?>'],
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
                            <label for="<?php echo $this->_var[' ']['textFields']; ?>_<?php echo $this->_var['radio']['radioCheckbox']; ?>" class="ui-radio-label"><?php echo $this->_var['radio']['radioCheckbox']; ?></label>
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
    <?php if ($this->_var['rs_enabled']): ?>
	<!--卖场-入驻地区 start-->
	<div class="item">
		<div class="label"><?php echo $this->_var['lang']['require_field']; ?><?php echo $this->_var['lang']['belong_region']; ?>：</div>
		<div class="value">
			<div class="level_linkage">
				<div class="fl">
					<div class="ui-dropdown smartdropdown alien">
						<input type="hidden" value="<?php echo $this->_var['title']['belong_region']['region_level']['0']; ?>" name="rs_country_id">
						<div class="txt"><?php echo $this->_var['lang']['country']; ?></div>
						<i class="down u-dropdown-icon"></i>
						<div class="options clearfix" style="max-height:300px;">
						<!-- <?php $_from = $this->_var['title']['belong_region']['country_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'country');if (count($_from)):
    foreach ($_from AS $this->_var['country']):
?> -->
							<span class="liv" data-text="<?php echo $this->_var['country']['region_name']; ?>"  data-type="1" data-value="<?php echo $this->_var['country']['region_id']; ?>"><?php echo $this->_var['country']['region_name']; ?></span>
						<!--<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>-->
						</div>
					</div>
					<div class="ui-dropdown smartdropdown alien">
						<input type="hidden" value="<?php echo $this->_var['title']['belong_region']['region_level']['1']; ?>" name="rs_province_id" id="selProvinces">
						<div class="txt"><?php echo $this->_var['lang']['province_alt']; ?></div>
						<i class="down u-dropdown-icon"></i>
						<div class="options clearfix" style="max-height:300px;">
							<!--<?php $_from = $this->_var['title']['belong_region']['province_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'province');if (count($_from)):
    foreach ($_from AS $this->_var['province']):
?>-->
							<span class="liv" data-text="<?php echo $this->_var['province']['region_name']; ?>" data-type="2" data-value="<?php echo $this->_var['province']['region_id']; ?>"><?php echo $this->_var['province']['region_name']; ?></span>
							<!--<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>-->
						</div>
					</div>
					<div class="ui-dropdown smartdropdown alien">
						<input type="hidden" value="<?php echo $this->_var['title']['belong_region']['region_level']['2']; ?>" name="rs_city_id" id="selCities">
						<div class="txt"><?php echo $this->_var['lang']['city']; ?></div>
						<i class="down u-dropdown-icon"></i>
						<div class="options clearfix" style="max-height:300px;">
						<!-- <?php $_from = $this->_var['title']['belong_region']['city_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'city');if (count($_from)):
    foreach ($_from AS $this->_var['city']):
?> -->
							<span class="liv hide" data-text="<?php echo $this->_var['city']['region_name']; ?>" data-type="3" data-value="<?php echo $this->_var['city']['region_id']; ?>"><?php echo $this->_var['city']['region_name']; ?></span>
						<!--<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>-->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>	
	<!--卖场-入驻地区 end-->
    <?php endif; ?>
	<div class="item">
		<div class="label"><?php echo $this->_var['lang']['require_field']; ?><?php echo $this->_var['lang']['expect_shop_type']; ?>：</div>
		<div class="value red">
			<!--<?php if ($this->_var['title']['parentType']['shoprz_type'] == 1): ?><?php echo $this->_var['lang']['flagship_store']; ?><?php elseif ($this->_var['title']['parentType']['shoprz_type'] == 2): ?><?php echo $this->_var['lang']['exclusive_shop']; ?><?php elseif ($this->_var['title']['parentType']['shoprz_type'] == 3): ?><?php echo $this->_var['lang']['franchised_store']; ?><?php endif; ?>--> 
			<?php echo $this->_var['title']['parentType']['shoprz_type']; ?>
		</div>
	</div>
	<div class="item">
		<div class="label"><?php echo $this->_var['lang']['naming_conventions']; ?>：</div>
		<div class="value">
			<div class="callout"><?php echo $this->_var['lang']['shop_name_describe']; ?>&nbsp;&nbsp;<span class="red"><?php echo $this->_var['lang']['notice_shop_custom']; ?></span></div>
		</div>
	</div>
	<div class="item">
		<div class="label"><?php echo $this->_var['lang']['require_field']; ?>&nbsp;<?php echo $this->_var['title']['fields_titles']; ?>：</div>
        <div class="value">
                <div class="red"><?php echo $this->_var['title']['titles_annotation']; ?></div>
                <div class="callout callout_list mt10">
                    <?php if ($this->_var['seller_shopinfo']['shop_name']): ?>
                    <div class="dl">
                        <div class="dt"><?php echo $this->_var['lang']['company_name']; ?>：</div>
                        <div class="dd red"><?php echo $this->_var['seller_shopinfo']['shop_name']; ?></div>
                    </div>   
                    <?php endif; ?>
                    <div class="dl">
                        <div class="dt"><?php echo $this->_var['lang']['select_brand_name']; ?>：</div>
                        <div class="dd">
							<div class="imitate_select select_w320">
								<div class="cite"><?php echo $this->_var['lang']['select_brand_name_two']; ?></div>
								<ul>
								<?php $_from = $this->_var['title']['brand_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'brand');if (count($_from)):
    foreach ($_from AS $this->_var['brand']):
?>
									<li><a href='javascript:;' data-value='<?php echo $this->_var['brand']['brandName']; ?>' class='ftx-01'><?php echo $this->_var['brand']['brandName']; ?></a></li>
								<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
								</ul>
								<input name="ec_shoprz_brandName" type="hidden" value="<?php echo $this->_var['title']['parentType']['shoprz_brandName']; ?>" id="<?php echo $this->_var['fields']['textFields']; ?>_val">
							</div> 
                        </div>
					</div>   
                    <div class="dl">    
                    	<div class="dt"><?php echo $this->_var['lang']['category_desc_key']; ?>：</div>
                        <div class="dd">
                             <input type="text" name="ec_shop_class_keyWords" size="30" value="<?php echo $this->_var['title']['parentType']['shop_class_keyWords']; ?>" class="text">&nbsp;&nbsp;                     
                    	</div>
					</div>   
                    <div class="dl">
                    	<div class="dt"><?php echo $this->_var['lang']['select_shop_suffix']; ?>：</div>
                        <div class="dd">
							<div class="imitate_select select_w320">
								<div class="cite"><?php echo $this->_var['lang']['select_please']; ?></div>
								<ul>
									<li><a href='javascript:;' data-value='<?php echo $this->_var['lang']['flagship_store']; ?>' class='ftx-01'><?php echo $this->_var['lang']['flagship_store']; ?></a></li>
									<li><a href='javascript:;' data-value='<?php echo $this->_var['lang']['exclusive_shop']; ?>' class='ftx-01'><?php echo $this->_var['lang']['exclusive_shop']; ?></a></li>
									<li><a href='javascript:;' data-value='<?php echo $this->_var['lang']['franchised_store']; ?>' class='ftx-01'><?php echo $this->_var['lang']['franchised_store']; ?></a></li>
									<li><a href='javascript:;' data-value='<?php echo $this->_var['lang']['shop_store']; ?>' class='ftx-01'><?php echo $this->_var['lang']['shop_store']; ?></a></li>
								</ul>
								<input name="ec_shopNameSuffix" type="hidden" value="<?php echo $this->_var['title']['parentType']['shoprz_type']; ?>" >
							</div> 							
                        </div>
					</div>   
                    <div class="dl nt_value">
                        <div class="dt"><?php echo $this->_var['lang']['require_field']; ?>&nbsp;<?php echo $this->_var['lang']['expect_shop_name']; ?>：</div>
                        <div class="dd">
                           <input type="text" name="ec_rz_shopName" id="rz_shopName" size="30" value="<?php echo $this->_var['title']['parentType']['rz_shopName']; ?>" class="text">
                           <div class="form_prompt"></div>
                        </div>
					</div>   
                    <div class="dl nt_value">    
                        <div class="dt"><?php echo $this->_var['lang']['require_field']; ?>&nbsp;<?php echo $this->_var['lang']['shop_admin_user']; ?>：</div>
                        <div class="dd">
                            <input type="text" name="ec_hopeLoginName" id="hopeLoginName" size="30" value="<?php echo $this->_var['title']['parentType']['hopeLoginName']; ?>" class="text">
                            <div class="form_prompt"></div>            
                        </div> 
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </div>
</div>