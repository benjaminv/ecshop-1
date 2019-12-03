<?php if ($this->_var['full_page']): ?>
<!doctype html>
<html>
<head><?php echo $this->fetch('library/admin_html_head.lbi'); ?></head>

<body class="iframe_body">
	<div class="warpper">
    	<div class="title"><?php echo $this->_var['lang']['mail']; ?> - <?php echo $this->_var['ur_here']; ?></div>
        <div class="content">		
        	<div class="explanation" id="explanation">
            	<div class="ex_tit"><i class="sc_icon"></i><h4><?php echo $this->_var['lang']['operating_hints']; ?></h4><span id="explanationZoom" title="<?php echo $this->_var['lang']['fold_tips']; ?>"></span></div>
                <ul>
                	<li><?php echo $this->_var['lang']['operation_prompt_content']['list']['0']; ?></li>
                </ul>
            </div>
            <div class="flexilist">
                <div class="common-head">
                    <div class="fl">
                    	<a href="<?php echo $this->_var['action_link']['href']; ?>"><div class="fbutton"><div class="add" title="<?php echo $this->_var['action_link']['text']; ?>"><span><i class="icon icon-plus"></i><?php echo $this->_var['action_link']['text']; ?></span></div></div></a>
                    </div>
                    <div class="refresh">
                    	<div class="refresh_tit" title="<?php echo $this->_var['lang']['refresh_data']; ?>"><i class="icon icon-refresh"></i></div>
                    	<div class="refresh_span"><?php echo $this->_var['lang']['refresh_common']; ?><?php echo $this->_var['record_count']; ?><?php echo $this->_var['lang']['record']; ?></div>
                    </div>					
                </div>
                <div class="common-content">
                	<div class="list-div" id="listDiv">
						<?php endif; ?>
                    	<table cellpadding="0" cellspacing="0" border="0">
                        	<thead>
                            	<tr>
                                	<th width="20%"><div class="tDiv"><?php echo $this->_var['lang']['magazine_name']; ?></div></th>
                                    <th width="15%"><div class="tDiv"><?php echo $this->_var['lang']['magazine_last_update']; ?></div></th>
                                    <th width="15%"><div class="tDiv"><?php echo $this->_var['lang']['magazine_last_send']; ?></div></th>
                                    <th width="40%"><div class="tDiv"><?php echo $this->_var['lang']['magazine_addtolist']; ?></div></th>
                                    <th width="10%" class="handle"><?php echo $this->_var['lang']['handler']; ?></th>
                                </tr>
                            </thead>
                            <tbody>
								<?php $_from = $this->_var['magazinedb']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'val');if (count($_from)):
    foreach ($_from AS $this->_var['val']):
?>
                            	<tr>
                                    <td><div class="tDiv"><?php echo $this->_var['val']['template_subject']; ?></div></td>
									<td><div class="tDiv"><?php echo $this->_var['val']['last_modify']; ?></div></td>
									<td><div class="tDiv"><?php echo $this->_var['val']['last_send']; ?></div></td>
									<td><div class="tDiv">
										<form action="magazine_list.php" method="post" name="hidform">
											<input type="hidden" name="id" value="<?php echo $this->_var['val']['template_id']; ?>" />
											<input type="hidden" name="act" value="addtolist" />
											<div id="" class="imitate_select select_w120">
												<div class="cite"><?php echo $this->_var['lang']['please_select']; ?></div>
												<ul>
													<li><a href="javascript:;" data-value="0" class="ftx-01"><?php echo $this->_var['lang']['pri']['0']; ?></a></li>
													<li><a href="javascript:;" data-value="1" class="ftx-01"><?php echo $this->_var['lang']['pri']['1']; ?></a></li>
												</ul>
												<input name="pri" type="hidden" value="0" id="">
											</div>
											<div id="" class="imitate_select select_w120">
												<div class="cite"><?php echo $this->_var['lang']['please_select']; ?></div>
												<ul>
													<?php $_from = $this->_var['send_rank']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'data');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['data']):
?>
													<li><a href="javascript:;" data-value="<?php echo $this->_var['key']; ?>" class="ftx-01"><?php echo $this->_var['data']; ?></a></li>
													<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
												</ul>
												<input name="send_rank" type="hidden" value="0_0" id="">
											</div>
											<input type="submit" value="<?php echo $this->_var['lang']['button_submit']; ?>" class="btn btn30 red_btn" />
										</form>
									</div></td>                               
                                    <td class="handle">
                                        <div class="tDiv a2">
                                            <a href="magazine_list.php?act=edit&id=<?php echo $this->_var['val']['template_id']; ?>" class="btn_edit"><i class="icon icon-edit"></i><?php echo $this->_var['lang']['edit']; ?></a>
                                            <a href="magazine_list.php?act=del&id=<?php echo $this->_var['val']['template_id']; ?>" onclick="return confirm('<?php echo $this->_var['lang']['ck_del']; ?>');" class="btn_trash"><i class="icon icon-trash"></i><?php echo $this->_var['lang']['drop']; ?></a>
                                        </div>
                                    </td>
                                </tr>
                                <?php endforeach; else: ?>
                                    <tr><td class="no-records" colspan="20"><?php echo $this->_var['lang']['no_records']; ?></td></tr>								
								<?php endif; unset($_from); ?><?php $this->pop_vars();; ?>
                            </tbody>
                            <tfoot>
                            	<tr>
                                    <td colspan="12">
                                    	<div class="list-page">
                                           <?php echo $this->fetch('library/page.lbi'); ?>
                                        </div>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
						<?php if ($this->_var['full_page']): ?>
                    </div>
                </div>
            </div>
		</div>
	</div>
    <?php echo $this->fetch('library/pagefooter.lbi'); ?>
	<script type="text/javascript">
	listTable.recordCount = <?php echo empty($this->_var['record_count']) ? '0' : $this->_var['record_count']; ?>;
	listTable.pageCount = <?php echo empty($this->_var['page_count']) ? '1' : $this->_var['page_count']; ?>;
	<?php $_from = $this->_var['filter']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
	listTable.filter.<?php echo $this->_var['key']; ?> = '<?php echo $this->_var['item']; ?>';
	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	</script>
</body>
</html>
<?php endif; ?>
