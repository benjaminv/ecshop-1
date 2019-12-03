
<?php if ($this->_var['related_goods']): ?>
<div class="g-main g-recommend">
	<div class="mt">
		<h3><?php echo $this->_var['lang']['releate_goods']; ?></h3>
	</div>
	<div class="mc">
		<div class="mc-warp">
			<ul>
				<?php $_from = $this->_var['related_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_43060700_1575335563');$this->_foreach['related'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['related']['total'] > 0):
    foreach ($_from AS $this->_var['goods_0_43060700_1575335563']):
        $this->_foreach['related']['iteration']++;
?>
				<li>
					<div class="p-img"><a href="<?php echo $this->_var['goods_0_43060700_1575335563']['url']; ?>" target="_blank"><img src="<?php echo $this->_var['goods_0_43060700_1575335563']['goods_thumb']; ?>" width="170" height="170"></a></div>
					<div class="p-name"><a href="<?php echo $this->_var['goods_0_43060700_1575335563']['url']; ?>" target="_blank" title="<?php echo htmlspecialchars($this->_var['goods_0_43060700_1575335563']['goods_name']); ?>"><?php echo $this->_var['goods_0_43060700_1575335563']['short_name']; ?></a></div>
					<div class="p-price">
						<?php if ($this->_var['goods_0_43060700_1575335563']['promote_price'] != ''): ?>
						<?php echo $this->_var['goods_0_43060700_1575335563']['formated_promote_price']; ?>
						<?php else: ?>
						<?php echo $this->_var['goods_0_43060700_1575335563']['shop_price']; ?>
						<?php endif; ?>					
					</div>
				</li>
				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			</ul>
		</div>
	</div>
</div>
<?php endif; ?>