<?php if ($this->_var['full_page']): ?>
<!doctype html>
<html>
<head><?php echo $this->fetch('library/admin_html_head.lbi'); ?></head>

<body class="iframe_body">
	<div class="warpper">
    	<div class="title"><?php echo $this->_var['lang']['order_word']; ?> - <?php echo $this->_var['ur_here']; ?></div>
        <div class="content">
            <div class="tabs_info">
            	<ul>
                    <li><a href="order_delay.php?act=complaint_conf"><?php echo $this->_var['lang']['order_delay_conf']; ?></a></li>
                    <li class="curr"><a href="order_delay.php?act=list"><?php echo $this->_var['lang']['order_delay_apply']; ?></a></li>
                </ul>
            </div>
        	<div class="explanation" id="explanation">
            	<div class="ex_tit"><i class="sc_icon"></i><h4><?php echo $this->_var['lang']['operating_hints']; ?></h4><span id="explanationZoom" title="<?php echo $this->_var['lang']['fold_tips']; ?>"></span></div>
                <ul>
                	<li><?php echo $this->_var['lang']['operation_prompt_content']['list']['0']; ?></li>
                    <li><?php echo $this->_var['lang']['operation_prompt_content']['list']['1']; ?></li>
                </ul>
            </div>
            <div class="flexilist">
                <div class="common-head">
                    <div class="refresh<?php if (! $this->_var['action_link']): ?> ml0<?php endif; ?>">
                    	<div class="refresh_tit" title="<?php echo $this->_var['lang']['refresh_data']; ?>"><i class="icon icon-refresh"></i></div>
                    	<div class="refresh_span"><?php echo $this->_var['lang']['refresh_common']; ?><?php echo $this->_var['record_count']; ?><?php echo $this->_var['lang']['record']; ?></div>
                    </div>
                    <div class="search">
                        <form action="javascript:searchUser()" name="searchForm">
                            <div class="select m0">
                                <div class="imitate_select select_w170">
                                    <div class="cite"><?php echo $this->_var['lang']['all']; ?></div>
                                    <ul>
                                        <li><a href="javascript:;" data-value="-1" class="ftx-01"><?php echo $this->_var['lang']['all']; ?></a></li>
                                        <li><a href="javascript:;" data-value="0" class="ftx-01"><?php echo $this->_var['lang']['not_audited']; ?></a></li>
                                        <li><a href="javascript:;" data-value="1" class="ftx-01"><?php echo $this->_var['lang']['audited_adopt']; ?></a></li>
                                        <li><a href="javascript:;" data-value="2" class="ftx-01"><?php echo $this->_var['lang']['audited_not_adopt']; ?></a></li>
                                    </ul>
                                    <input name="review_status" type="hidden" value="0" id="">
                                </div>
                            </div>
                            <div class="input">
                                <input type="text" name="keyword" class="text nofocus" placeholder="<?php echo $this->_var['lang']['user_name']; ?>" autocomplete="off" /><button class="btn" name="secrch_btn"></button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="common-content">
                    <form method="post" action="" name="listForm" onsubmit="return confirmSubmit()">
                	<div class="list-div" id="listDiv">
                        <?php endif; ?>
                    	<table cellpadding="0" cellspacing="0" border="0">
                            <thead>
                                <tr>
                                    <th width="3%" class="sign"><div class="tDiv"><input type="checkbox" name="all_list" class="checkbox" id="all_list" autocomplete="off" /><label for="all_list" class="checkbox_stars"></label></div></th>
                                    <th width="30%"><div class="tDiv"><?php echo $this->_var['lang']['user_name']; ?></div></th>
                                    <th width="15%"><div class="tDiv"><?php echo $this->_var['lang']['order_id']; ?></div></th>
                                    <th width="25%"><div class="tDiv"><?php echo $this->_var['lang']['delay_time']; ?></div></th>
                                    <th width="10%"><div class="tDiv"><?php echo $this->_var['lang']['adopt_personnel']; ?></div></th>
                                    <th width="15%" class="handle"><?php echo $this->_var['lang']['adopt_status']; ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $_from = $this->_var['order_delay_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'order_delay_list_0_19539500_1574922671');if (count($_from)):
    foreach ($_from AS $this->_var['order_delay_list_0_19539500_1574922671']):
?>
                            	<tr>
                                    <td class="sign"><div class="tDiv"><input type="checkbox" name="checkboxes[]"  class="checkbox" value="<?php echo $this->_var['order_delay_list_0_19539500_1574922671']['delayed_id']; ?>" id="checkbox_<?php echo $this->_var['order_delay_list_0_19539500_1574922671']['delayed_id']; ?>"  autocomplete="off" /><label for="checkbox_<?php echo $this->_var['order_delay_list_0_19539500_1574922671']['delayed_id']; ?>" class="checkbox_stars"></label></div></td>
                                    <td><div class="tDiv"><?php echo htmlspecialchars($this->_var['order_delay_list_0_19539500_1574922671']['user_name']); ?></div></td>
                                    <td><div class="tDiv"><?php echo $this->_var['order_delay_list_0_19539500_1574922671']['order_sn']; ?></div></td>
                                    <td>
                                        <div class="tDiv">
                                            <?php if ($this->_var['order_delay_list_0_19539500_1574922671']['review_status']): ?>
                                                <?php echo $this->_var['order_delay_list_0_19539500_1574922671']['apply_day']; ?>
                                            <?php else: ?>
                                                <input type="text" name="commission_rate" class="text w40" value="<?php echo $this->_var['order_delay_list_0_19539500_1574922671']['apply_day']; ?>" onkeyup="listTable.editInput(this, 'edit_apply_day', '<?php echo $this->_var['order_delay_list_0_19539500_1574922671']['delayed_id']; ?>')">
                                            <?php endif; ?>
                                        </div>
                                    </td>
                                    <td><div class="tDiv"><?php echo $this->_var['order_delay_list_0_19539500_1574922671']['review_admin_user']; ?></div></td>
                                    <td><div class="tDiv handle"><?php echo $this->_var['order_delay_list_0_19539500_1574922671']['review_status_info']; ?></div></td>
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
                                                <div id="type" class="imitate_select select_w170">
                                                    <div class="cite"><?php echo $this->_var['lang']['please_select']; ?></div>
                                                    <ul>
                                                        <li><a href="javascript:;" data-value="" class="ftx-01"><?php echo $this->_var['lang']['please_select']; ?></a></li>
                                                        <li><a href="javascript:;" data-value="batch_remove" class="ftx-01"><?php echo $this->_var['lang']['drop']; ?></a></li>
                                                        <li><a href="javascript:;" data-value="review_to" class="ftx-01"><?php echo $this->_var['lang']['check']; ?></a></li>
                                                    </ul>
                                                    <input name="type" type="hidden" value="" id="type_val" autocomplete="off">
                                                </div>
                                                <div id="review_status" class="imitate_select select_w170" style="display:none">
                                                    <div class="cite"><?php echo $this->_var['lang']['please_select']; ?></div>
                                                    <ul>
                                                        <li><a href="javascript:;" data-value="" class="ftx-01"><?php echo $this->_var['lang']['please_select']; ?></a></li>
                                                        <li><a href="javascript:;" data-value="1" class="ftx-01"><?php echo $this->_var['lang']['audited_adopt']; ?></a></li>
                                                        <li><a href="javascript:;" data-value="2" class="ftx-01"><?php echo $this->_var['lang']['audited_not_adopt']; ?></a></li>
                                                    </ul>
                                                    <input name="review_status" type="hidden" value="" id="review_status_val" autocomplete="off">
                                                </div>
                                                <input type="hidden" value="batch" name="act">
                                                <input name="act" type="hidden" value="batch" />
                                                <input name="remove" type="submit" ectype="btnSubmit" value="<?php echo $this->_var['lang']['button_submit_alt']; ?>" class="btn btn_disabled" disabled />
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
listTable.recordCount = '<?php echo $this->_var['record_count']; ?>';
listTable.pageCount = '<?php echo $this->_var['page_count']; ?>';
<?php $_from = $this->_var['filter']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
listTable.filter.<?php echo $this->_var['key']; ?> = '<?php echo $this->_var['item']; ?>';
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
   
$.divselect("#type","#type_val",function(obj){
    var val = obj.attr("data-value");
    if(val == 'review_to'){
        $("#review_status").show();
    }else{
        $("#review_status").hide();
    }
});
/**
 * 搜索用户
 */
function searchUser()
{
    listTable.filter['keywords'] = Utils.trim(document.forms['searchForm'].elements['keyword'].value);
    listTable.filter['review_status'] = Utils.trim(document.forms['searchForm'].elements['review_status'].value);
    listTable.filter['page'] = 1;
    listTable.loadList();
}    

function confirmSubmit(frm, ext)
{
    if (frm.elements['type'].value == 'trash')
    {
        return confirm(remove_confirm);
    }
    else if (frm.elements['type'].value == '')
    {
        return false;
    }
    else
    {
        if(frm.elements['review_status'].value == ''){
            alert(select_operation_cat);
            return false;
        }else{
            return true;
        }
    }
}
$(".ps-container").perfectScrollbar();
</script>     
</body>
</html>
<?php endif; ?>
