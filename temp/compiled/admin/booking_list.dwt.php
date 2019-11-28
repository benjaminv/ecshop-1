<?php if ($this->_var['full_page']): ?>
<!doctype html>
<html>
<head><?php echo $this->fetch('library/admin_html_head.lbi'); ?></head>

<body class="iframe_body">
	<div class="warpper">
    	<div class="title"><?php echo $this->_var['lang']['order_word']; ?> - <?php echo $this->_var['ur_here']; ?></div>
        <div class="content">
            <?php echo $this->fetch('library/common_tabs_info.lbi'); ?>
        	<div class="explanation" id="explanation">
            	<div class="ex_tit"><i class="sc_icon"></i><h4><?php echo $this->_var['lang']['operating_hints']; ?></h4><span id="explanationZoom" title="<?php echo $this->_var['lang']['fold_tips']; ?>"></span></div>
                <ul>
                	<li><?php echo $this->_var['lang']['operation_prompt_content']['0']; ?></li>
                    <li><?php echo $this->_var['lang']['operation_prompt_content']['1']; ?></li>
                </ul>
            </div>
            <div class="flexilist">
            	<div class="common-head">
                    <div class="search">
                        <form action="javascript:;" name="searchForm" onSubmit="searchGoodsname(this);">
                        <div class="input">
                            <input type="text" name="keyword" class="text nofocus" placeholder="<?php echo $this->_var['lang']['goods_name']; ?>" autocomplete="off" />
                            <input type="submit" class="btn" name="secrch_btn" ectype="secrch_btn" value="" />
                        </div>
                        </form>
                    </div>
                </div>
                <div class="common-content">
				<form method="post" action="" name="listForm">
                	<div class="list-div" id="listDiv">
						<?php endif; ?>
                    	<table cellpadding="1" cellspacing="1" >
                        	<thead>
                            	<tr>
                                    <th width="5%"><div class="tDiv"><?php echo $this->_var['lang']['record_id']; ?></div></th>
                                    <th width="10%"><div class="tDiv"><?php echo $this->_var['lang']['goods_steps_name']; ?></div></th>
                                    <th width="8%"><div class="tDiv"><?php echo $this->_var['lang']['link_man']; ?></div></th>
                                    <th width="40%"><div class="tDiv"><?php echo $this->_var['lang']['goods_name']; ?></div></th>
                                    <th width="5%"><div class="tDiv"><?php echo $this->_var['lang']['number']; ?></div></th>
                                    <th width="15%"><div class="tDiv"><?php echo $this->_var['lang']['booking_time']; ?></div></th>
                                    <th width="6%"><div class="tDiv"><?php echo $this->_var['lang']['is_dispose']; ?></div></th>
                                    <th width="10%" class="handle"><?php echo $this->_var['lang']['handler']; ?></th>
                                </tr>
                            </thead>
                            <tbody>
							<?php $_from = $this->_var['booking_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'booking');if (count($_from)):
    foreach ($_from AS $this->_var['booking']):
?>
                            	<tr>
                                    <td><div class="tDiv"><?php echo $this->_var['booking']['rec_id']; ?></div></td>
                                	<td><div class="tDiv"><?php if ($this->_var['booking']['user_name']): ?><font class="red"><?php echo $this->_var['booking']['user_name']; ?></font><?php else: ?><font class="blue"><?php echo $this->_var['lang']['self_run']; ?></font><?php endif; ?></div></td>
                                    <td><div class="tDiv"><?php echo htmlspecialchars($this->_var['booking']['link_man']); ?></div></td>
                                    <td><div class="tDiv"><?php echo $this->_var['booking']['goods_name']; ?></div></td>
                                    <td><div class="tDiv"><?php echo $this->_var['booking']['goods_number']; ?></div></td>
                                    <td><div class="tDiv"><?php echo $this->_var['booking']['booking_time']; ?></div></td>
                                    <td><div class="tDiv"><?php if ($this->_var['booking']['is_dispose']): ?><img src="images/yes.png"><?php else: ?><img src="images/no.png"><?php endif; ?></div></td>    
                                    <td class="handle">
										<div class="tDiv a2">
											<a href="goods_booking.php?act=detail&amp;id=<?php echo $this->_var['booking']['rec_id']; ?>" title="<?php echo $this->_var['lang']['detail']; ?>" class="btn_see"><i class="sc_icon sc_icon_see"></i><?php echo $this->_var['lang']['view']; ?></a>
											<a href="javascript:;" onclick="listTable.remove(<?php echo $this->_var['booking']['rec_id']; ?>,'<?php echo $this->_var['lang']['drop_confirm']; ?>')" title="<?php echo $this->_var['lang']['remove']; ?>" class="btn_trash"><i class="icon icon-trash"></i><?php echo $this->_var['lang']['drop']; ?></a>
										</div>
									</td>
                                </tr>
							<?php endforeach; else: ?>
							<tr><td class="no-records" colspan="10"><?php echo $this->_var['lang']['no_records']; ?></td></tr>
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
				</form>
                </div>
            </div>
        </div>
    </div>
    <?php echo $this->fetch('library/pagefooter.lbi'); ?>
	<script type="text/javascript">
	//分页传值
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
