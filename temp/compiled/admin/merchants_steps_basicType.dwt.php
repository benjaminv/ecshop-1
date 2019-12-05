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
                                <!-- <?php $_from = $this->_var['fields']['city_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'city_list_0_77480300_1575522294');if (count($_from)):
    foreach ($_from AS $this->_var['city_list_0_77480300_1575522294']):
?> -->
									<span class="liv hide" data-text="<?php echo $this->_var['lang']['city']; ?>" data-type="3" data-value="<?php echo $this->_var['city_list_0_77480300_1575522294']['region_id']; ?>"><?php echo $this->_var['lang']['city']; ?></span>
                                <!--<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>-->
								</div>
							</div>
							<div class="ui-dropdown smartdropdown alien">
								<input type="hidden" value="<?php echo $this->_var['fields']['textAreaForm']['district']; ?>" name="<?php echo $this->_var['fields']['textFields']; ?>[]" id="selDistricts">
								<div class="txt"><?php echo $this->_var['lang']['area_alt']; ?></div>
								<i class="down u-dropdown-icon"></i>
								<div class="options clearfix" style="max-height:300px;">
                                	<!-- <?php $_from = $this->_var['fields']['district_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'district_list_0_77480300_1575522294');if (count($_from)):
    foreach ($_from AS $this->_var['district_list_0_77480300_1575522294']):
?> -->
									<span class="liv hide" data-text="<?php echo $this->_var['lang']['area_alt']; ?>" data-type="4" data-value="<?php echo $this->_var['district_list_0_77480300_1575522294']['region_id']; ?>"><?php echo $this->_var['lang']['area_alt']; ?></span>
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
							<a href="../<?php echo $this->_var['fields']['titles_centents']; ?>" target="_blank" class="nyroModal"><i class="icon icon-picture" data-tooltipimg="../<?php echo $this->_var['fields']['titles_centents']; ?>" ectype="tooltip" title="tooltip"></i></a>
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
						<div class="checkbox_item fl">
                            <input type="checkbox" id="authorizeCheckBox" value="1" name="ec_shop_permanent" class="ui-checkbox" onClick="get_shopTime_term(this)" <?php if ($this->_var['fields']['shopTime_term'] == 1): ?>checked<?php endif; ?>>
                            <label for="authorizeCheckBox" class="ui-label"><?php echo $this->_var['lang']['permanent']; ?></label>
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
                       		<input name="<?php echo $this->_var['fields']['textFields']; ?>" type="checkbox" class="ui-checkbox" value="<?php echo $this->_var['checkbox']['radioCheckbox']; ?>" id="<?php echo $this->_var['fields']['textFields']; ?>_<?php echo $this->_var['checkbox']['radioCheckbox']; ?>" <?php if ($this->_var['fields']['shopTime_term'] == 1): ?>checked="checked"<?php endif; ?> />
                        	<label for="<?php echo $this->_var['fields']['textFields']; ?>_<?php echo $this->_var['checkbox']['radioCheckbox']; ?>" class="ui-label"><?php echo $this->_var['checkbox']['radioCheckbox']; ?></label>
                        </div>
                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                    </div>
				<?php endif; ?>
			<div class="fl org"><?php echo $this->_var['fields']['formSpecial']; ?></div>
		</div>
	</div>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</div>
</div>
<script>
function get_shopTime_term(f){
	var business_term_0 = document.getElementById('business_term_0');
	var business_term_1 = document.getElementById('business_term_1');
	if(f.checked){
		$(f).parent().addClass("cart-checkbox-checked");
		business_term_0.value = '';
		business_term_1.value = '';
	}else{
		$(f).parent().removeClass("cart-checkbox-checked");
	}
}
</script>