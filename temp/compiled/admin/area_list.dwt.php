<?php if ($this->_var['full_page']): ?>
<!doctype html>
<html>
<head><?php echo $this->fetch('library/admin_html_head.lbi'); ?></head>

<body class="iframe_body">
	<div class="warpper">
    	<div class="title"><?php echo $this->_var['lang']['11_system']; ?> - <?php echo $this->_var['ur_here']; ?></div>
        <div class="content">
        	<?php echo $this->fetch('library/shipping_menu_tab.lbi'); ?>			
        	<div class="explanation" id="explanation">
            	<div class="ex_tit"><i class="sc_icon"></i><h4><?php echo $this->_var['lang']['operating_hints']; ?></h4><span id="explanationZoom" title="<?php echo $this->_var['lang']['fold_tips']; ?>"></span></div>
                <ul>
                	<li><?php echo $this->_var['lang']['operation_prompt_content']['list']['0']; ?></li>
                    <li><?php echo $this->_var['lang']['operation_prompt_content']['list']['1']; ?></li>
                    <li><?php echo $this->_var['lang']['operation_prompt_content']['list']['2']; ?></li>
                    <li><?php echo $this->_var['lang']['operation_prompt_content']['list']['3']; ?></li>
                </ul>
            </div>
            <div class="flexilist">
            	<div class="common-head">
                	<div class="fl mt2">
                    	<a href="<?php echo $this->_var['action_link']['href']; ?>"><div class="fbutton"><div class="add_region" title="<?php echo $this->_var['action_link']['text']; ?>"><span><?php if ($this->_var['action_link']['type'] == 1): ?><i class="icon icon-reply"></i><?php else: ?><i class="icon icon-plus"><?php endif; ?></i><?php echo $this->_var['action_link']['text']; ?></span></div></div></a>
                        <a href="javascript:void(0);" class="restore_btn"><div class="fbutton"><div class="cog" title="<?php echo $this->_var['lang']['restore_default_set']; ?>"><span><i class="icon icon-cog"></i><?php echo $this->_var['lang']['restore_default_set']; ?></span></div></div></a>
                    </div>
                    <div class="add_area fr">
                        <form method="post" action="area_manage.php" name="theForm">
                           <input type="hidden" name="region_type" value="<?php echo $this->_var['region_type']; ?>" />
                           <input type="hidden" name="parent_id" value="<?php echo $this->_var['parent_id']; ?>" />
                           <input type="text" name="region_name" class="text" placeholder="<?php echo $this->_var['lang']['region_name_placeholder']; ?>" autocomplete="off" />
                           <a href="javascript:void(0);" onclick="return add_area();" class="btn btn30 red_btn"><?php echo $this->_var['lang']['add_region']; ?></a>
                        </form>
                    </div>
                </div>
                <div class="common-content">
                	<div class="list-div" id="listDiv">
                        <?php endif; ?>
                    	<table cellpadding="0" cellspacing="0" border="0">
                        	<thead>
                            	<tr>
                                	<th width="8%"><div class="tDiv"><?php echo $this->_var['lang']['record_id']; ?></div></th>
                                    <th width="27%"><div class="tDiv"><?php echo $this->_var['lang']['region_name']; ?></div></th>
                                    <th width="25%"><div class="tDiv"><?php echo $this->_var['lang']['region_hierarchy']; ?></div></th>
                                    <th width="20%"><div class="tDiv"><?php echo $this->_var['lang']['region_belonged']; ?></div></th>
                                    <th width="20%" class="handle"><?php echo $this->_var['lang']['handler']; ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $_from = $this->_var['region_arr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'list');$this->_foreach['area_name'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['area_name']['total'] > 0):
    foreach ($_from AS $this->_var['list']):
        $this->_foreach['area_name']['iteration']++;
?>
                            	<tr>
                                	<td><div class="tDiv"><?php echo $this->_var['list']['region_id']; ?></div></td>
                                    <td>
                                        <div class="tDiv">
                                            <input type="text" name="measure_unit" class="text w80" value="<?php echo htmlspecialchars($this->_var['list']['region_name']); ?>" onkeyup="listTable.editInput(this, 'edit_area_name', <?php echo $this->_var['list']['region_id']; ?>)"/>
                                        </div>
                                    </td>
                                    <td><div class="tDiv"><?php echo $this->_var['area_here']; ?></div></td>
                                    <td><div class="tDiv"><?php echo $this->_var['area_top']; ?></div></td>
                                    <td class="handle">
                                        <div class="tDiv a1">
                                        	<?php if ($this->_var['region_type'] < 4): ?>
                                        	<a href="area_manage.php?act=list&type=<?php echo $this->_var['list']['region_type+1']; ?>&pid=<?php echo $this->_var['list']['region_id']; ?>" title="<?php echo $this->_var['lang']['manage_area']; ?>" class="btn_see"><i class="sc_icon sc_icon_see"></i><?php echo $this->_var['lang']['manage_area']; ?></a>
                                        	<?php endif; ?>
                                            <a href="javascript:listTable.remove(<?php echo $this->_var['list']['region_id']; ?>, '<?php echo $this->_var['lang']['area_drop_confirm']; ?>', 'drop_area')" title="<?php echo $this->_var['lang']['drop']; ?>" class="btn_trash"><i class="icon icon-trash"></i><?php echo $this->_var['lang']['drop']; ?></a>
                                        </div>
                                    </td>
                                </tr>
                                <?php endforeach; else: ?>
                                    <tr><td class="no-records" colspan="12"><?php echo $this->_var['lang']['no_records']; ?></td></tr>
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
	$(".restore_btn").click(function(){
            if(window.confirm('<?php echo $this->_var['lang']['confirm_set']; ?>')){
                     window.location.href="area_manage.php?act=restore_region";
                     return true;
            }else{
                   return false;
            }
        });
        function add_area()
        {
            
            var region_name = $("input[name='region_name']").val();
            var region_type = $("input[name='region_type']").val();
            var parent_id   = $("input[name='parent_id']").val();

            if (region_name.length == 0)
            {
                alert(region_name_empty);
            }
            else
            {
                $.jqueryAjax("area_manage.php", "is_ajax=1&act=add_area&parent_id="+parent_id+ '&region_name=' + region_name + '&region_type=' + region_type, listTable.listCallback, 'POST', 'JSON');
                $("input[name='region_name']").val('');
            }

            return false;
        }
    </script>
</body>
</html>
<?php endif; ?>
