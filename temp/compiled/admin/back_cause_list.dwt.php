<?php if ($this->_var['full_page']): ?>
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
                	<li><?php echo $this->_var['lang']['operation_prompt_content']['return_cause_list']['0']; ?></li>
                    <li><?php echo $this->_var['lang']['operation_prompt_content']['return_cause_list']['1']; ?></li>
                </ul>
            </div>
            <div class="flexilist">
            	<div class="common-head">
                	<div class="fl">
						<a href="order.php?act=add_return_cause"><div class="fbutton"><div class="add" title="<?php echo $this->_var['lang']['add_return_cause']; ?>"><span><i class="icon icon-plus"></i><?php echo $this->_var['lang']['add_return_cause']; ?></span></div></div></a>
					</div>
                </div>
                <div class="common-content">
                	<div class="list-div" id="listDiv" >
						<?php endif; ?>
                    	<table cellpadding="1" cellspacing="1">
                        	<thead>
                            	<tr>
									<th width="10%"></th>
                                	<th width="30%"><div class="tDiv"><?php echo $this->_var['lang']['return_reason']; ?></div></th>
                                    <th width="20%"><div class="tDiv"><?php echo $this->_var['lang']['whether_display']; ?></div></th>
                                    <th width="20%"><div class="tDiv"><?php echo $this->_var['lang']['sort_order']; ?></div></th>
                                    <th width="20%" class="handle"><?php echo $this->_var['lang']['return_status']; ?></th>
                                </tr>
                            </thead>
                            <tbody>
							    <?php $_from = $this->_var['cause_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');if (count($_from)):
    foreach ($_from AS $this->_var['cat']):
?>
								<tr  class="<?php echo $this->_var['cat']['parent_id']; ?><?php if ($this->_var['cat']['level'] > 0): ?>_<?php echo $this->_var['cat']['level']; ?><?php endif; ?>" style="<?php if ($this->_var['cat']['level'] != 0): ?>display:none;<?php endif; ?>" id="<?php echo $this->_var['cat']['level']; ?>_<?php echo $this->_var['cat']['cause_id']; ?>">
								<td>
									<div class="tDiv first_setup">
										<div class="setup_span">
                                            <?php if ($this->_var['parent_id'] == 0): ?>
											<em><i class="icon icon-cog"></i><?php echo $this->_var['lang']['setup']; ?><i class="arrow"></i></em>
											<ul>
												<li><a href="order.php?act=add_return_cause&parent_id=<?php echo $this->_var['cat']['cause_id']; ?>"><?php echo $this->_var['lang']['add_next_level']; ?></a></li>
												<li><a href="order.php?act=back_cause_list&parent_id=<?php echo $this->_var['cat']['cause_id']; ?>"><?php echo $this->_var['lang']['view_next_level']; ?></a></li>
											</ul>
                                            <?php endif; ?>
										</div>
									</div>
								</td>
								<td><div class="tDiv"><?php echo $this->_var['cat']['cause_name']; ?></div></td>
								<td><div class="tDiv"><?php if ($this->_var['cat']['is_show'] == '1'): ?><img src="images/yes.png"><?php else: ?><img src="images/no.png"><?php endif; ?></div></td>
                                <td><div class="tDiv"><input name="sort_order" class="text w40" value="<?php echo $this->_var['cat']['sort_order']; ?>" onkeyup="listTable.editInput(this, 'edit_bank_sort_order',<?php echo $this->_var['cat']['cause_id']; ?> )" type="text"></div></td>
							    <td align="center" class="handle">
                                    <div class="tDiv a2">
                                        <a href="order.php?act=edit_cause&amp;c_id=<?php echo $this->_var['cat']['cause_id']; ?>" title="<?php echo $this->_var['lang']['edit']; ?>" class="btn_edit"><i class="icon icon-edit"></i><?php echo $this->_var['lang']['edit']; ?></a>
                                        <a href="javascript:;" onclick="listTable.remove(<?php echo $this->_var['cat']['cause_id']; ?>, '<?php echo $this->_var['lang']['drop_confirm']; ?>' , 'remove_cause')" title="<?php echo $this->_var['lang']['remove']; ?>" class="btn_trash"><i class="icon icon-trash"></i><?php echo $this->_var['lang']['drop']; ?></a>	
                                    </div>
								</td>
								</tr>
								<?php endforeach; else: ?>
								<tr><td class="no-records"  align="center" colspan="11"><?php echo $this->_var['lang']['no_records']; ?></td></tr>
								<?php endif; unset($_from); ?><?php $this->pop_vars();; ?>
                            </tbody>
                        </table>
						<?php if ($this->_var['full_page']): ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
 	<?php echo $this->fetch('library/pagefooter.lbi'); ?>
	<script type="text/javascript">
	//分页传值
	listTable.recordCount = <?php echo empty($this->_var['record_count']) ? '0' : $this->_var['record_count']; ?>;
	listTable.pageCount = <?php echo empty($this->_var['page_count']) ? '1' : $this->_var['page_count']; ?>;
	listTable.query = 'cause_query';

	<?php $_from = $this->_var['filter']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
	listTable.filter.<?php echo $this->_var['key']; ?> = '<?php echo $this->_var['item']; ?>';
	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>	
    </script>
</body>
</html>
<?php endif; ?>