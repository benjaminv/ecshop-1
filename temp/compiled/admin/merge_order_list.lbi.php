<div id="merge_dialog">
	<div class="prompt mt20">
		<span><?php echo $this->_var['lang']['pagetip_merge_order_list']; ?></span>
	</div>
	<div class="items">
		<div class="item mb30">
			<div class="label"><?php echo $this->_var['lang']['steps_shop_name']; ?>：</div>
			<div class="value">
				<div class="select">
					<div id="store_name" class="imitate_select select_w120">
						<div class="cite"><?php echo $this->_var['lang']['select_please']; ?></div>
						<ul style="display: none;">
							<li><a href="javascript:;" data-value="0" class="ftx-01"><?php echo $this->_var['lang']['platform_self']; ?></a></li>
							<li><a href="javascript:;" data-value="1" class="ftx-01"><?php echo $this->_var['lang']['s_shop_name']; ?></a></li>
						</ul>
						<input name="store_name" type="hidden" value="-1" id="store_name_val">
					</div>
					<div id="merge_merchant_id" class="imitate_select select_w140" style="display:none;">
						<div class="cite"><?php echo $this->_var['lang']['select_please']; ?></div>
						<ul>
						   <?php $_from = $this->_var['store_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'store');if (count($_from)):
    foreach ($_from AS $this->_var['store']):
?>
						   <li><a href="javascript:;" data-value="<?php echo $this->_var['store']['ru_id']; ?>" class="ftx-01"><?php echo $this->_var['store']['store_name']; ?></a></li>
						   <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
						</ul>
						<input name="merge_merchant_id" type="hidden" value="" id="merchant_id_val">
					</div>
				</div>
				<a href="javascript:void(0);" class="btn btn30 blue_btn" ectype="search"><i class="icon icon-search"></i><?php echo $this->_var['lang']['search_word']; ?></a>
			</div>
		</div>
		<div class="item">
			<div class="label"><?php echo $this->_var['lang']['to_order_sn']; ?></div>
			<div class="value">
				<div id="main_order" class="imitate_select select_w220">
					<div class="cite"><?php echo $this->_var['lang']['select_please']; ?></div>
						<ul id="to_order_merge">
						<?php $_from = $this->_var['order_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'order');if (count($_from)):
    foreach ($_from AS $this->_var['order']):
?>
						<li><a href="javascript:;" data-value="<?php echo $this->_var['order']['order_sn']; ?>"></a><?php echo $this->_var['order']['order_sn']; ?> [<?php echo $this->_var['order']['user_name']; ?>]</li>
						<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
						</ul>
					<input name="main_order" type="hidden" value="" id="main_order_val">
				</div>
			</div>
		</div>
		<div class="item">
			<div class="label"><?php echo $this->_var['lang']['from_order_sn']; ?></div>
			<div class="value">
				<div id="from_order" class="imitate_select select_w220">
					<div class="cite"><?php echo $this->_var['lang']['select_please']; ?></div>
						<ul id="from_order_merge">
						<?php $_from = $this->_var['order_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'order');if (count($_from)):
    foreach ($_from AS $this->_var['order']):
?>
						<li><a href="javascript:;" data-value="<?php echo $this->_var['order']['order_sn']; ?>"></a><?php echo $this->_var['order']['order_sn']; ?> [<?php echo $this->_var['order']['user_name']; ?>]</li>
						<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
						</ul>
					<input name="from_order" type="hidden" value="" id="from_order_val">
				</div>
			</div>
		</div>
	</div>
</div>