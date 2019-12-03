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
                    <li><?php echo $this->_var['lang']['operation_prompt_content']['list']['1']; ?></li>
                </ul>
            </div>
            <div class="flexilist">
            	<!--数据列表-->
                <div class="common-head">		
                    <div class="refresh ml0">
                    	<div class="refresh_tit" title="<?php echo $this->_var['lang']['refresh_data']; ?>"><i class="icon icon-refresh"></i></div>
                    	<div class="refresh_span"><?php echo $this->_var['lang']['refresh_common']; ?><?php echo $this->_var['record_count']; ?><?php echo $this->_var['lang']['record']; ?></div>
                    </div>
                </div>
                <div class="common-content">
					<form method="post" action="" name="listForm">
                	<div class="list-div" id="listDiv">
						<?php endif; ?>
                    	<table cellpadding="0" cellspacing="0" border="0">
                        	<thead>
                            	<tr>
                                	<th width="3%" class="sign"><div class="tDiv"><input type="checkbox" name="all_list" class="checkbox" id="all_list" /><label for="all_list" class="checkbox_stars"></label></div></th>
                                	<th width="3%"><div class="tDiv"><?php echo $this->_var['lang']['record_id']; ?></div></th>
                                    <th width="25%"><div class="tDiv"><?php echo $this->_var['lang']['email_subject']; ?></div></th>
                                    <th width="19%"><div class="tDiv"><?php echo $this->_var['lang']['email_val']; ?></div></th>
                                    <th width="10%"><div class="tDiv"><?php echo $this->_var['lang']['pri']['name']; ?></div></th>
                                    <th width="10%"><div class="tDiv"><?php echo $this->_var['lang']['type']['name']; ?></div></th>
                                    <th width="10%"><div class="tDiv"><?php echo $this->_var['lang']['email_error']; ?></div></th>
                                    <th width="12%"><div class="tDiv"><?php echo $this->_var['lang']['last_send']; ?></div></th>
									<th width="8%" class="handle"><?php echo $this->_var['lang']['handler']; ?></th>
                                </tr>
                            </thead>
                            <tbody>
								<?php $_from = $this->_var['listdb']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'val');if (count($_from)):
    foreach ($_from AS $this->_var['val']):
?>
                            	<tr>
                                    <td class="sign">
                                    <div class="tDiv">
										<input type="checkbox" name="checkboxes[]" value="<?php echo $this->_var['val']['id']; ?>" class="checkbox" id="checkbox_<?php echo $this->_var['val']['id']; ?>" />
										<label for="checkbox_<?php echo $this->_var['val']['id']; ?>" class="checkbox_stars"></label>
									</div>
                                    </td>
                                    <td><div class="tDiv"><?php echo $this->_var['val']['id']; ?></div></td>
                                    <td><div class="tDiv"><?php echo $this->_var['val']['template_subject']; ?></div></td>                               
                                    <td><div class="tDiv"><?php echo $this->_var['val']['email']; ?></div></td>
                                    <td><div class="tDiv"><?php echo $this->_var['lang']['pri'][$this->_var['val']['pri']]; ?></div></td>
                                    <td><div class="tDiv"><?php echo $this->_var['lang']['type'][$this->_var['val']['type']]; ?></div></td>
                                    <td><div class="tDiv"><?php echo $this->_var['val']['error']; ?></div></td>
                                    <td><div class="tDiv"><?php echo $this->_var['val']['last_send']; ?></div></td>
                                    <td class="handle">
                                        <div class="tDiv a1">
                                            <a href="view_sendlist.php?act=del&id=<?php echo $this->_var['val']['id']; ?>" onclick="return confirm('<?php echo $this->_var['lang']['ckdelete']; ?>');" class="btn_trash"><i class="icon icon-trash"></i><?php echo $this->_var['lang']['drop']; ?></a>
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
                                        <div class="tDiv">
                                            <div class="tfoot_btninfo">
                                              <div class="shenhe">
                                                <input type="hidden" name="act" value=""/>
                                                <input type="button" id="btnSubmit1" value="<?php echo $this->_var['lang']['button_remove']; ?>" disabled="true" class="btn btn_disabled" onclick="subFunction('batch_remove')" ectype="btnSubmit" />
                                                <input type="button" id="btnSubmit2" value="<?php echo $this->_var['lang']['batch_send']; ?>" disabled="true" class="btn btn_disabled" onclick="subFunction('batch_send')" ectype="btnSubmit" />
                                                <input type="button" value="<?php echo $this->_var['lang']['all_send']; ?>" class="btn btn_disabled" disabled="true" onclick="subFunction('all_send')" ectype="btnSubmit" />
                                              </div>
                                            </div>
                                            <div class="list-page">
                                               <?php echo $this->fetch('library/page.lbi'); ?>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
						<?php if ($this->_var['full_page']): ?>
                    </div>
					</form>
                </div>
                <!--数据列表end-->
            </div>
		</div>
	</div>
 	<?php echo $this->fetch('library/pagefooter.lbi'); ?>
	<script type="text/javascript">
	function subFunction(act)
	{
        var frm = document.forms['listForm'];
        frm.elements['act'].value = act;
        frm.submit();
	}

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
