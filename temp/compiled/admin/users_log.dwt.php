<?php if ($this->_var['full_page']): ?>
<!doctype html>
<html>
<head><?php echo $this->fetch('library/admin_html_head.lbi'); ?></head>

<body class="iframe_body">
	<div class="warpper">
    	<div class="title"><a href="users.php?act=list" class="s-back"><?php echo $this->_var['lang']['back']; ?></a><?php echo $this->_var['lang']['08_members']; ?> - <?php echo $this->_var['ur_here']; ?></div>
        <div class="content">
        	<div class="explanation" id="explanation">
            	<div class="ex_tit"><i class="sc_icon"></i><h4><?php echo $this->_var['lang']['operating_hints']; ?></h4><span id="explanationZoom" title="<?php echo $this->_var['lang']['fold_tips']; ?>"></span></div>
                <ul>
                	<li><?php echo $this->_var['lang']['operation_prompt_content']['log']['0']; ?></li>
                </ul>
            </div>
            <div class="flexilist">
            	<!--商品分类列表-->
                <div class="common-head">
                    <div class="refresh<?php if (! $this->_var['action_link']): ?> ml0<?php endif; ?>">
                    	<div class="refresh_tit" title="<?php echo $this->_var['lang']['refresh_data']; ?>"><i class="icon icon-refresh"></i></div>
                    	<div class="refresh_span"><?php echo $this->_var['lang']['refresh_common']; ?><?php echo $this->_var['record_count']; ?><?php echo $this->_var['lang']['record']; ?></div>
                    </div>
                </div>
                <div class="common-content">
                    <form method="post" action="users.php" name="listForm" onsubmit="return confirm(remove_log_confirm);">
                	<div class="list-div" id="listDiv">
                        <?php endif; ?>
                    	<table cellpadding="0" cellspacing="0" border="0">
                            <thead>
                                <tr>
                                    <th width="3%" class="sign"><div class="tDiv"><input type="checkbox" name="all_list" class="checkbox" id="all_list" /><label for="all_list" class="checkbox_stars"></label></div></th>
                                    <th width="5%"><div class="tDiv"><?php echo $this->_var['lang']['record_id']; ?></div></th>
                                    <th width="30%"><div class="tDiv"><?php echo $this->_var['lang']['handle_time']; ?></div></th>
                                    <th width="30%"><div class="tDiv"><?php echo $this->_var['lang']['change_type']; ?></div></th>、
                                    <th width="12%"><div class="tDiv"><?php echo $this->_var['lang']['ip_address']; ?></div></th>
                                    <th width="10%"><div class="tDiv"><?php echo $this->_var['lang']['change_city']; ?></div></th>
                                    <th width="10%"><div class="tDiv"><?php echo $this->_var['lang']['logon_service']; ?></div></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $_from = $this->_var['user_log']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'log');if (count($_from)):
    foreach ($_from AS $this->_var['log']):
?>
                            	<tr>
                                    <td class="sign"><div class="tDiv"><input type="checkbox" name="checkboxes[]" class="checkbox" value="<?php echo $this->_var['log']['log_id']; ?>" id="checkbox_<?php echo $this->_var['log']['log_id']; ?>" /><label for="checkbox_<?php echo $this->_var['log']['log_id']; ?>" class="checkbox_stars"></label></div></td>
                                    <td><div class="tDiv"><?php echo $this->_var['log']['log_id']; ?></div></td>
                                    <td>
                                        <div class="tDiv">
                                            <p><?php echo $this->_var['log']['change_time']; ?></p>
                                            <p><?php echo $this->_var['log']['admin_name']; ?></p>
                                        </div>
                                    </td>
                                    <td><div class="tDiv"><?php echo $this->_var['lang']['change_type_user'][$this->_var['log']['change_type']]; ?></div></td>
                                    <td><div class="tDiv"><?php echo $this->_var['log']['ip_address']; ?></div></td>
                                    <td><div class="tDiv"><?php echo $this->_var['log']['change_city']; ?></div></td>
                                    <td><div class="tDiv"><?php echo $this->_var['log']['logon_service']; ?></div></td>
                                </tr>
                                <?php endforeach; else: ?>
                                <tr><td class="no-records" colspan="12"><?php echo $this->_var['lang']['no_records']; ?></td></tr>
                                <?php endif; unset($_from); ?><?php $this->pop_vars();; ?>
                            </tbody>
                            <tfoot>
                            	<tr>
                                    <td colspan="12">
                                        <div class="tDiv">
                                        	<div class="tfoot_btninfo">
                                                <input name="act" type="hidden" value="batch_log" />
                                                <input name="user_id" type="hidden" value="<?php echo $this->_var['user_id']; ?>" />
                                                
                                                <input name="remove" type="submit" ectype="btnSubmit" value="<?php echo $this->_var['lang']['drop']; ?>" class="btn btn_disabled" disabled />
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
            </div>
	   </div>
	</div>
    <?php echo $this->fetch('library/pagefooter.lbi'); ?>
    <script type="text/javascript">

    listTable.recordCount = <?php echo empty($this->_var['record_count']) ? '0' : $this->_var['record_count']; ?>;
    listTable.pageCount = <?php echo empty($this->_var['page_count']) ? '1' : $this->_var['page_count']; ?>;
    listTable.query = 'users_log_query';

    <?php $_from = $this->_var['filter']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
    listTable.filter.<?php echo $this->_var['key']; ?> = '<?php echo $this->_var['item']; ?>';
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    $(".ps-container").perfectScrollbar();
    </script>     
</body>
</html>
<?php endif; ?>
