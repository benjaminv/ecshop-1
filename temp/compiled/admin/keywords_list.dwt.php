<?php if ($this->_var['full_page']): ?>
<!doctype html>
<html>
<head><?php echo $this->fetch('library/admin_html_head.lbi'); ?></head>

<body class="iframe_body">
	<div class="warpper">
    	<div class="title"><?php echo $this->_var['lang']['11_system']; ?> - <?php echo $this->_var['ur_here']; ?></div>
        <div class="content">		
        	<div class="explanation" id="explanation">
            	<div class="ex_tit">
					<i class="sc_icon"></i><h4><?php echo $this->_var['lang']['operating_hints']; ?></h4><span id="explanationZoom" title="<?php echo $this->_var['lang']['fold_tips']; ?>"></span>
                    <?php if ($this->_var['open'] == 1): ?>
                    <div class="view-case">
                    	<div class="view-case-tit"><i></i><?php echo $this->_var['lang']['view_tutorials']; ?></div>
                        <div class="view-case-info">
                        	<a href="http://help.ecmoban.com/article-6896.html" target="_blank"><?php echo $this->_var['lang']['tutorials_bonus_list_one']; ?></a>
                        </div>
                    </div>			
                    <?php endif; ?>	
				</div>
                <ul>
                	<li><?php echo $this->_var['lang']['operation_prompt_content']['list']['0']; ?></li>
                    <li><?php echo $this->_var['lang']['operation_prompt_content']['list']['1']; ?></li>
                </ul>
            </div>
            <div class="flexilist">
                <div class="common-head">			
                    <div class="refresh ml0">
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
                                	<th width="40%"><div class="tDiv"><a href="javascript:listTable.sort('keyword'); "><?php echo $this->_var['lang']['keyword_name']; ?></a><?php echo $this->_var['sort_link_name']; ?></div></th>
                                    <th width="10%"><div class="tDiv"><a href="javascript:listTable.sort('result_count'); "><?php echo $this->_var['lang']['keyword_result']; ?></a><?php echo $this->_var['sort_link_url']; ?></div></th>
                                    <th width="10%"><div class="tDiv"><a href="javascript:listTable.sort('count'); "><?php echo $this->_var['lang']['keyword_total_count']; ?></a><?php echo $this->_var['sort_link_logo']; ?></div></th>
                                    <th width="10%"><div class="tDiv"><a href="javascript:listTable.sort('month_count'); "><?php echo $this->_var['lang']['keyword_month']; ?></a><?php echo $this->_var['sort_show_order']; ?></div></th>
                                    <th width="10%"><div class="tDiv"><a href="javascript:listTable.sort('week_count'); "><?php echo $this->_var['lang']['keyword_week']; ?></a><?php echo $this->_var['sort_show_order']; ?></div></th>
                                    <th width="10%"><div class="tDiv"><a href="javascript:listTable.sort('day_count'); "><?php echo $this->_var['lang']['keyword_day']; ?></a><?php echo $this->_var['sort_show_order']; ?></div></th>
                                    <th width="10%" class="handle"><?php echo $this->_var['lang']['handler']; ?></th>
                                </tr>
                            </thead>
                            <tbody>
								<?php $_from = $this->_var['keywords_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'keyword');if (count($_from)):
    foreach ($_from AS $this->_var['keyword']):
?>
                            	<tr>
                                    <td><div class="tDiv"><?php echo $this->_var['keyword']['keyword']; ?></div></td>
                                    <td><div class="tDiv"><?php echo $this->_var['keyword']['result_count']; ?></div></td>
                                    <td><div class="tDiv"><?php echo $this->_var['keyword']['count']; ?></div></td>
                                    <td><div class="tDiv"><?php echo $this->_var['keyword']['month_count']; ?></div></td>
                                    <td><div class="tDiv"><?php echo $this->_var['keyword']['week_count']; ?></div></td>
                                    <td><div class="tDiv"><?php echo $this->_var['keyword']['day_count']; ?></div></td>
                                    <td class="handle">
                                        <div class="tDiv a1">
                                            <a href="../search.php?keywords=<?php echo $this->_var['keyword']['keyword']; ?>" target="_blank" class="btn_see"><i class="sc_icon sc_icon_see"></i><?php echo $this->_var['lang']['view']; ?></a>
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
	<script type="text/javascript" language="JavaScript">
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
