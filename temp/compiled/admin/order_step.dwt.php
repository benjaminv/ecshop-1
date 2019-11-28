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
                <li><?php echo $this->_var['lang']['operation_prompt_content_common']; ?></li>
                <li><?php echo $this->_var['lang']['operation_prompt_content']['step']['0']; ?></li>
            </ul>
        </div>
        <div class="flexilist mt30">
            <div class="common-content">
                <?php if ($this->_var['step'] == "user"): ?>
                <form name="theForm" action="order.php?act=step_post&step=<?php echo $this->_var['step']; ?>&order_id=<?php echo $this->_var['order_id']; ?>&step_act=<?php echo $this->_var['step_act']; ?>" method="post" onsubmit="return checkUser()">
                    <div class="common-content">
                        <div class="step">
                            <div class="step_title">
                                <i class="ui-step"></i><h3><?php echo $this->_var['lang']['fill_user']; ?></h3>
                                <div class="fr">
                                    <div class="fbutton mt5 mr0"><div class="piliang" title="<?php echo $this->_var['lang']['batch_add_order']; ?>"><span><i class="icon icon-copy"></i><a href="mc_order.php"><?php echo $this->_var['lang']['batch_add_order']; ?></a></span></div></div>
                                </div>
                            </div>
                            <div class="step_info">
                                <div class="order_user_select">
                                    <div class="anonymous_user checkbox_user checked_user">
                                        <div class="checkbox_item">
                                            <input type="radio" name="anonymous" value="1" class="ui-radio" id="anonymous_user" checked />
                                            <label for="anonymous_user" class="ui-radio-label"><?php echo $this->_var['lang']['anonymous']; ?></label>
                                        </div>
                                    </div>
                                    <div class="register_user checkbox_user">
                                        <div class="checkbox_item">
                                            <input type="radio" name="anonymous" value="0" class="ui-radio" id="register_user" />
                                            <label for="register_user" class="ui-radio-label"><?php echo $this->_var['lang']['by_useridname']; ?></label>
                                        </div>
                                        <div class="register_user_warp">
                                            <div class="search">
                                                <input type="text" name="keyword" class="text mr0" placeholder="<?php echo $this->_var['lang']['search_user_placeholder']; ?>" autocomplete="off" readonly />
                                                <input type="button" class="select_btn" name="search" onclick="searchUser();" />
                                                <div id="user" class="imitate_select select_w260">
                                                    <div class="cite"><?php echo $this->_var['lang']['username']; ?></div>
                                                    <ul style="display: none;">
                                                        <li class="li_not"><?php echo $this->_var['lang']['search_user_name_notic']; ?></li>
                                                    </ul>
                                                    <input name="user" type="hidden" value="" id="user_val">
                                                </div>
                                                <div class="div_readonly"></div>
                                            </div>
                                            <div class="notic"><?php echo $this->_var['lang']['search_user_name_notic']; ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="goods_btn">
                            <input type="button" value="<?php echo $this->_var['lang']['button_cancel']; ?>" class="btn btn35 btn_blue" onclick="location.href='order.php?act=process&func=cancel_order&order_id=<?php echo $this->_var['order_id']; ?>&step_act=<?php echo $this->_var['step_act']; ?>'" />
                            <input name="submit" type="submit" class="btn btn35 blue_btn" value="<?php echo $this->_var['lang']['button_next']; ?>" />
                        </div>   
                    </div>				
                </form>
                <?php elseif ($this->_var['step'] == "goods"): ?>
                <div class="step">
                    <form name="theForm" action="order.php?act=step_post&step=edit_goods&order_id=<?php echo $this->_var['order_id']; ?>&step_act=<?php echo $this->_var['step_act']; ?>" method="post">
                        <div class="step_info">
                            <div class="add_goods_list">
                                <table class="table" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <th width="30%" class="tc"><?php echo $this->_var['lang']['goods_name']; ?></th>
                                        <th width="10%"><?php echo $this->_var['lang']['goods_sn']; ?></th>
                                        <th width="12%"><?php echo $this->_var['lang']['goods_price']; ?></th>
                                        <th width="10%"><?php echo $this->_var['lang']['goods_number']; ?></th>
                                        <th width="13%"><?php echo $this->_var['lang']['goods_attr']; ?></th>
                                        <th width="10%"><?php echo $this->_var['lang']['subtotal']; ?></th>
                                        <th width="5%"><?php echo $this->_var['lang']['handler']; ?></th>
                                        <th class="total tc" width="10%" rowspan="3"><a href="javascript:;" onclick="submit()"><i class="icon icon-refresh"></i></a><span><?php echo $this->_var['lang']['label_total']; ?>&nbsp;&nbsp;<?php echo $this->_var['goods_amount']; ?></span><input name="goods_count" type="hidden" value="<?php echo $this->_foreach['goods']['total']; ?>" /></th>
                                    </tr>
                                    <?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['goods']['iteration']++;
?>
                                    <tr>
                                        <td class="goods_info">
                                            <?php if ($this->_var['goods']['goods_id'] > 0 && $this->_var['goods']['extension_code'] != 'package_buy'): ?>
                                                <a href="javascript:;" onclick="getGoodsInfo(<?php echo $this->_var['goods']['goods_id']; ?>);"><?php echo $this->_var['goods']['goods_name']; ?></a>
                                            <?php elseif ($this->_var['goods']['goods_id'] > 0 && $this->_var['goods']['extension_code'] == 'package_buy'): ?>
                                                <?php echo $this->_var['goods']['goods_name']; ?>
                                            <?php endif; ?>   
                                        </td>
                                        <td><?php echo $this->_var['goods']['goods_sn']; ?><input name="rec_id[]" type="hidden" value="<?php echo $this->_var['goods']['rec_id']; ?>" /></td>
                                        <td>
                                            <input name="goods_price[]" type="text" class="text w50" autocomplete="off" value="<?php echo $this->_var['goods']['goods_price']; ?>" />
                                            <input name="goods_id[]" type="hidden" class="text w50" autocomplete="off" value="<?php echo $this->_var['goods']['goods_id']; ?>" />
                                            <input name="goods_attr[]" type="hidden" class="text w50" autocomplete="off" value="<?php echo $this->_var['goods']['goods_attr']; ?>" />
                                        </td>
                                        <td><input type="text" class="text w50" name="goods_number[]" autocomplete="off" value="<?php echo $this->_var['goods']['goods_number']; ?>"/></td>
                                        <td><?php echo $this->_var['goods']['goods_attr']; ?></td>
                                        <td><?php echo $this->_var['goods']['subtotal']; ?></td>
                                        <td><a href="javascript:confirm_redirect(confirm_drop, 'order.php?act=process&func=drop_order_goods&rec_id=<?php echo $this->_var['goods']['rec_id']; ?>&step_act=<?php echo $this->_var['step_act']; ?>&order_id=<?php echo $this->_var['order_id']; ?>')"><?php echo $this->_var['lang']['drop']; ?></a></td>
                                    </tr>
                                    <?php endforeach; else: ?>
                                    <tr><td class="no-records" colspan="7"><?php echo $this->_var['lang']['no_records']; ?></td></tr>
                                    <?php endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                </table>
                            </div>
                        </div>
                    </form>
                    <form name="goodsForm" action="order.php?act=step_post&step=add_goods&order_id=<?php echo $this->_var['order_id']; ?>&step_act=<?php echo $this->_var['step_act']; ?>" method="post" onsubmit="return addToOrder()">
                        <div class="goods_search_filer">
                            <strong><?php echo $this->_var['lang']['search_goods']; ?></strong>
                            <input type="text" name="keyword" class="text w120" autocomplete="off" placeholder="<?php echo $this->_var['lang']['search_number_placeholder']; ?>" />
                            <?php if ($this->_var['warehouse_list']): ?>
                                <strong><?php echo $this->_var['lang']['warehouse']; ?></strong>
                                <div class="select">
                                    <div id="warehouse_id" class="imitate_select select_w170">
                                        <div class="cite"><?php echo $this->_var['lang']['please_select']; ?></div>
                                        <ul style="display: none;">
                                            <?php $_from = $this->_var['warehouse_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'list');if (count($_from)):
    foreach ($_from AS $this->_var['list']):
?>
                                                <li><a href="javascript:;" data-value="<?php echo $this->_var['list']['region_id']; ?>" class="ftx-01"><?php echo $this->_var['list']['region_name']; ?></a></li>
                                            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                        </ul>
                                        <input name="warehouse_id" type="hidden" value="" id="warehouse_id_val">
                                    </div>
                                </div>
                                <strong><?php echo $this->_var['lang']['region']; ?></strong>
                                <div class="select">
                                    <div id="area_id" class="imitate_select select_w170">
                                        <div class="cite"><?php echo $this->_var['lang']['please_select']; ?></div>
                                        <ul style="display: none;" >
                                            <li class="li_not"><?php echo $this->_var['lang']['select_warehouse']; ?></li>
                                        </ul>
                                        <input name="area_id" type="hidden" value="" id="area_id_val">
                                    </div>
                                </div>
                            <?php endif; ?>
                            <a href="javascript:;" name="search" onclick="searchGoods();" class="btn btn30 blue_btn mr20"><i class="icon icon-search"></i><?php echo $this->_var['lang']['button_search']; ?></a>

                            <div class="select" id="search_result">
                                <div id="goodslist" class="imitate_select select_w500">
                                    <div class="cite"><?php echo $this->_var['lang']['please_select']; ?></div>
                                    <ul style="display:none;">
                                        <li class="li_not"><?php echo $this->_var['lang']['please_search_goods']; ?></li>
                                    </ul>
                                    <input name="goodslist" type="hidden" value="" id="goodslist_val">
                                </div>
                            </div>
                        </div>
                        <div class="goods_info_add">
                            <div class="goods_info_desc">
                                <table class="table">
                                    <tr>
                                        <td class="goods_info_left"><?php echo $this->_var['lang']['goods_name']; ?></td>
                                        <td class="goods_info_right first"><div id="goods_name"></div></td>
                                    </tr>
                                    <tr>
                                        <td class="goods_info_left"><?php echo $this->_var['lang']['goods_sn']; ?></td>
                                        <td class="goods_info_right"><div id="goods_sn"></div></td>
                                    </tr>
                                    <tr>
                                        <td class="goods_info_left"><?php echo $this->_var['lang']['category']; ?></td>
                                        <td class="goods_info_right"><div id="goods_cat"></div></td>
                                    </tr>
                                    <tr>
                                        <td class="goods_info_left"><?php echo $this->_var['lang']['brand']; ?></td>
                                        <td class="goods_info_right"><div id="goods_brand"></div></td>
                                    </tr>
                                    <tr>
                                        <td class="goods_info_left"><?php echo $this->_var['lang']['goods_price']; ?></td>
                                        <td class="goods_info_right"><div id="add_price" class="checkbox_items"></div></td>
                                    </tr>
                                    <tr>
                                        <td class="goods_info_left"><?php echo $this->_var['lang']['goods_attr']; ?><input type="hidden" name="spec_count" value="0" /></td>
                                        <td class="goods_info_right"><div id="goods_attr"></div></td>
                                    </tr>
                                    <tr>
                                        <td class="goods_info_left"><?php echo $this->_var['lang']['storage']; ?></td>
                                        <td class="goods_info_right"><div id="goods_storage"></div></td>
                                    </tr>
                                    <tr>
                                        <td class="goods_info_left"><?php echo $this->_var['lang']['goods_number']; ?></td>
                                        <td class="goods_info_right"><input name="add_number" class="text w80" type="text" autocomplete="off" value="1"></td>
                                    </tr>
                                    <tr>
                                        <td class="goods_info_left"><?php echo $this->_var['lang']['join_order']; ?></td>
                                        <td class="goods_info_right last">
                                            <input name="add_goods" type="submit" value="<?php echo $this->_var['lang']['add_to_order']; ?>" class="btn btn30 red_btn" />
                                            <input name="model_attr" value="0" type="hidden" />
                                            <input name="attr_price" value="0" type="hidden" />
                                        </td>
                                    </tr>
                                </table>
                            </div>                           
                        </div>
                    </form>
                    <form action="order.php?act=step_post&step=goods&order_id=<?php echo $this->_var['order_id']; ?>&step_act=<?php echo $this->_var['step_act']; ?>" method="post" name="theFormNext" onSubmit="return subOrderAdd()">
                        <div class="goods_btn" id="button-info">
                            <input type="button" value="<?php echo $this->_var['lang']['button_cancel']; ?>" class="btn btn35 btn_blue" onclick="location.href='order.php?act=process&func=cancel_order&order_id=<?php echo $this->_var['order_id']; ?>&step_act=<?php echo $this->_var['step_act']; ?>'" />
                            <input type="button" class="btn btn35 btn_blue" onclick="history.back()" value="<?php echo $this->_var['lang']['button_prev']; ?>">
                            <input name="<?php if ($this->_var['step_act'] == 'add'): ?>next<?php else: ?>finish<?php endif; ?>" type="submit" class="btn btn35 blue_btn" value="<?php if ($this->_var['step_act'] == 'add'): ?><?php echo $this->_var['lang']['button_next']; ?><?php else: ?><?php echo $this->_var['lang']['button_submit']; ?><?php endif; ?>" />
                        </div>
                    </form>
                </div>
                <?php elseif ($this->_var['step'] == "consignee"): ?>
                <form name="theForm" action="order.php?act=step_post&step=<?php echo $this->_var['step']; ?>&order_id=<?php echo $this->_var['order_id']; ?>&step_act=<?php echo $this->_var['step_act']; ?>" method="post" id="consignee">
                    <div class="step">
                    	<div class="step_title pb5">
                            <i class="ui-step"></i>
                            <h3 class="fl"><?php echo $this->_var['lang']['receipt_info']; ?></h3>
                        </div>
                        <div class="step_content step_content_items">
                            <?php if ($this->_var['address_list']): ?>
                            <div class="item">
                                <div class="step_label"><?php echo $this->_var['lang']['address_list']; ?></div>
                                <div class="step_value">
                                    <div id="addresslist" class="imitate_select select_w320">
                                        <div class="cite"><?php if ($this->_var['order']['consignee'] || $this->_var['order']['email'] || $this->_var['order']['address']): ?><?php echo $this->_var['order']['consignee']; ?><?php echo $this->_var['order']['email']; ?><?php echo $this->_var['order']['address']; ?><?php else: ?><?php echo $this->_var['lang']['please_select']; ?><?php endif; ?></div>
                                        <ul style="display: none;">
                                            <?php $_from = $this->_var['address_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'address');if (count($_from)):
    foreach ($_from AS $this->_var['address']):
?>
                                                <li><a href='javascript:;' data-value='<?php echo $this->_var['address']['address_id']; ?>' class='ftx-01'><?php echo htmlspecialchars($this->_var['address']['consignee']); ?><?php echo $this->_var['address']['email']; ?><?php echo htmlspecialchars($this->_var['address']['address']); ?><?php echo htmlspecialchars($this->_var['address']['tel']); ?></a></li>
                                            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                        </ul>
                                        <input name="addresslist" type="hidden" value="" id="addresslist_val">
                                    </div>
                                </div>
                            </div>
                            <?php endif; ?>
                            <div class="item">
                                <div class="step_label"><?php echo $this->_var['lang']['require_field']; ?><?php echo $this->_var['lang']['label_consignee']; ?></div>
                                <div class="step_value">
                                	<input type="text" name="consignee" value="<?php echo $this->_var['order']['consignee']; ?>" id="consignee" class="text" autocomplete="off" />
                                    <div class="form_prompt"></div>
                                </div>
                            </div>
                            <?php if ($this->_var['exist_real_goods']): ?>
                            <div class="item">
                                <div class="step_label"><?php echo $this->_var['lang']['require_field']; ?><?php echo $this->_var['lang']['label_area']; ?></div>
                                <div class="step_value">
                                    <div class="level_linkage">
                                        <div id="dlcountry" class="ui-dropdown smartdropdown alien">
                                            <input type="hidden" value="<?php echo $this->_var['order']['country']; ?>" name="country" id="selcountry">
                                            <div class="txt"><?php echo $this->_var['lang']['country']; ?></div>
                                            <i class="down u-dropdown-icon"></i>
                                            <div class="options clearfix" style="max-height:300px;">
                                                <?php $_from = $this->_var['country_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'list');if (count($_from)):
    foreach ($_from AS $this->_var['list']):
?>
                                                <span class="liv" data-text="<?php echo $this->_var['list']['region_name']; ?>" data-type="1"  data-value="<?php echo $this->_var['list']['region_id']; ?>"><?php echo $this->_var['list']['region_name']; ?></span>
                                                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                            </div>
                                        </div>
                                        <div id="dlProvinces" class="ui-dropdown smartdropdown alien">
                                            <input type="hidden" value="<?php echo $this->_var['order']['province']; ?>" name="province" id="selProvinces">
                                            <div class="txt"><?php echo $this->_var['lang']['province_alt']; ?></div>
                                            <i class="down u-dropdown-icon"></i>
                                            <div class="options clearfix" style="max-height:300px;">
                                                <?php $_from = $this->_var['province_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'list');if (count($_from)):
    foreach ($_from AS $this->_var['list']):
?>
                                                <span class="liv" data-text="<?php echo $this->_var['list']['region_name']; ?>" data-type="2"  data-value="<?php echo $this->_var['list']['region_id']; ?>"><?php echo $this->_var['list']['region_name']; ?></span>
                                                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                            </div>
                                        </div>
                                        <div id="dlCity" class="ui-dropdown smartdropdown alien">
                                            <input type="hidden" value="<?php echo $this->_var['order']['city']; ?>" name="city" id="selCities">
                                            <div class="txt"><?php echo $this->_var['lang']['city']; ?></div>
                                            <i class="down u-dropdown-icon"></i>
                                            <div class="options clearfix" style="max-height:300px;">
                                                <?php $_from = $this->_var['city_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'list');if (count($_from)):
    foreach ($_from AS $this->_var['list']):
?>
                                                <span class="liv" data-text="<?php echo $this->_var['list']['region_name']; ?>" data-value="<?php echo $this->_var['list']['region_id']; ?>"><?php echo $this->_var['list']['region_name']; ?></span>
                                                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                            </div>
                                        </div>
                                        <div id="dlRegion" class="ui-dropdown smartdropdown alien">
                                            <input type="hidden" value="<?php echo $this->_var['order']['district']; ?>" name="district" id="selDistricts">
                                            <div class="txt"><?php echo $this->_var['lang']['area_alt']; ?></div>
                                            <i class="down u-dropdown-icon"></i>
                                            <div class="options clearfix" style="max-height:300px;">
                                                <?php $_from = $this->_var['district_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'list');if (count($_from)):
    foreach ($_from AS $this->_var['list']):
?>
                                                <span class="liv" data-text="<?php echo $this->_var['list']['region_name']; ?>" data-value="<?php echo $this->_var['list']['region_id']; ?>"><?php echo $this->_var['list']['region_name']; ?></span>
                                                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form_prompt"></div>
                                </div>
                            </div>
                            <?php endif; ?>
                            <div class="item">
                                <div class="step_label"><?php echo $this->_var['lang']['label_email']; ?></div>
                                <div class="step_value"><input type="text" name="email" id="email" value="<?php echo $this->_var['order']['email']; ?>" class="text" autocomplete="off" /></div>
                            </div>
                            <?php if ($this->_var['exist_real_goods']): ?>
                            <div class="item">
                                <div class="step_label"><?php echo $this->_var['lang']['require_field']; ?><?php echo $this->_var['lang']['label_address']; ?></div>
                                <div class="step_value">
                                	<input type="text" name="address" id="address"  value="<?php echo $this->_var['order']['address']; ?>" class="text" autocomplete="off" />
                                    <div class="form_prompt"></div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="step_label"><?php echo $this->_var['lang']['label_zipcode']; ?></div>
                                <div class="step_value"><input type="text" name="zipcode" id="zipcode" value="<?php echo $this->_var['order']['zipcode']; ?>" class="text" autocomplete="off" /></div>
                            </div>
                            <?php endif; ?>
                            <div class="item">
                                <div class="step_label"><?php echo $this->_var['lang']['label_tel']; ?></div>
                                <div class="step_value"><input type="text" name="tel" id="tel" value="<?php echo $this->_var['order']['tel']; ?>" class="text" autocomplete="off" /></div>
                            </div>
                            <div class="item">
                                <div class="step_label"><?php echo $this->_var['lang']['require_field']; ?><?php echo $this->_var['lang']['label_mobile']; ?></div>
                                <div class="step_value">
                                	<input type="text" name="mobile" id="mobile" value="<?php echo $this->_var['order']['mobile']; ?>" class="text" autocomplete="off" />
                                    <div class="form_prompt"></div>
                                </div>
                            </div>
                            <?php if ($this->_var['exist_real_goods']): ?>
                            <div class="item">
                                <div class="step_label"><?php echo $this->_var['lang']['label_sign_building']; ?></div>
                                <div class="step_value"><input type="text" name="sign_building" id="sign_building" value="<?php echo $this->_var['order']['sign_building']; ?>" class="text" autocomplete="off" /></div>
                            </div>
                            <div class="item">
                                <div class="step_label"><?php echo $this->_var['lang']['label_best_time']; ?></div>
                                <div class="step_value"><input type="text" name="best_time" id="best_time" value="<?php echo $this->_var['order']['best_time']; ?>" class="text" autocomplete="off" /></div>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="goods_btn">
                        <input type="button" value="<?php echo $this->_var['lang']['button_cancel']; ?>" class="btn btn35 btn_blue" onclick="location.href='order.php?act=process&func=cancel_order&order_id=<?php echo $this->_var['order_id']; ?>&step_act=<?php echo $this->_var['step_act']; ?>'" />
                        <?php if ($this->_var['step_act'] == "add"): ?><?php if ($this->_var['step_act'] == "add"): ?><input type="button" value="<?php echo $this->_var['lang']['button_prev']; ?>" class="btn btn35 btn_blue" onclick="history.back()" /><?php endif; ?><?php endif; ?>
                        <input name="<?php if ($this->_var['step_act'] == 'add'): ?>next<?php else: ?>finish<?php endif; ?>" type="submit" class="btn btn35 blue_btn" value="<?php if ($this->_var['step_act'] == 'add'): ?><?php echo $this->_var['lang']['button_next']; ?><?php else: ?><?php echo $this->_var['lang']['button_submit']; ?><?php endif; ?>" id="submitBtn" />
                    </div>
                </form>
                <?php elseif ($this->_var['step'] == "shipping"): ?>
                <form name="theForm" action="order.php?act=step_post&step=<?php echo $this->_var['step']; ?>&order_id=<?php echo $this->_var['order_id']; ?>&step_act=<?php echo $this->_var['step_act']; ?>" method="post" onsubmit="return checkShipping()">
                    <div class="step">
                        <div class="step_title pb5">
                            <i class="ui-step"></i>
                            <h3 class="fl"><?php echo $this->_var['lang']['add_distribution_mode']; ?></h3>
                        </div>
                        <div class="step_info">
                            <div class="list-div" id="list-div">
                                <table class="table_layout">
                                    <thead>
                                        <tr>
                                            <th width="25%"><div class="tDiv"><?php echo $this->_var['lang']['name']; ?></div></th>
                                            <th width="45%"><div class="tDiv"><?php echo $this->_var['lang']['desc']; ?></div></th>
                                            <th width="30%"><div class="tDiv tc"><?php echo $this->_var['lang']['shipping_fee']; ?></div></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      <?php $_from = $this->_var['shipping_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'shipping');if (count($_from)):
    foreach ($_from AS $this->_var['shipping']):
?>
                                        <tr>
                                            <td><div class="tDiv"><div class="checkbox_item"><input name="shipping" type="radio" class="ui-radio" value="<?php echo $this->_var['shipping']['shipping_id']; ?>" id="shipping_<?php echo $this->_var['shipping']['shipping_id']; ?>" <?php if ($this->_var['order']['shipping_id'] == $this->_var['shipping']['shipping_id']): ?>checked<?php endif; ?> autocomplete="off" /><label for="shipping_<?php echo $this->_var['shipping']['shipping_id']; ?>" class="ui-radio-label"><?php echo $this->_var['shipping']['shipping_name']; ?></label></div></td>
                                            <td><div class="tDiv"><span><?php echo $this->_var['shipping']['shipping_desc']; ?></span></div></td>
                                            <td>
                                                <div class="tDiv tc">
                                                    <?php echo $this->_var['shipping']['format_shipping_fee']; ?>
                                                </div>
                                            </td>
                                        </tr>
                                      <?php endforeach; else: ?>
                                        <tr>
                                            <td colspan="12" align="center"><div class="tDiv"><?php echo $this->_var['lang']['order_step_notic_01']; ?></div></td>
                                        </tr>
                                      <?php endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="12">
                                                <div class="tDiv">
                                                    <input type="checkbox" name="insure" class="ui-checkbox" id="baojia" value="1" <?php if ($this->_var['order']['insure_fee'] > 0): ?>checked<?php endif; ?> />
                                                    <label for="baojia" class="ui-label"><?php echo $this->_var['lang']['want_insure']; ?></label>
                                                </div>
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="goods_btn">
                        <?php if ($this->_var['step_act'] == "add"): ?><input type="button" value="<?php echo $this->_var['lang']['button_prev']; ?>" class="btn btn35 btn_blue" onclick="history.back()" /><?php endif; ?>
                        <input name="<?php if ($this->_var['step_act'] == 'add'): ?>next<?php else: ?>finish<?php endif; ?>" type="submit" class="btn btn35 blue_btn" value="<?php if ($this->_var['step_act'] == 'add'): ?><?php echo $this->_var['lang']['button_next']; ?><?php else: ?><?php echo $this->_var['lang']['button_submit']; ?><?php endif; ?>" />
                        <input type="button" value="<?php echo $this->_var['lang']['button_cancel']; ?>" class="btn btn35 btn_blue" onclick="location.href='order.php?act=process&func=cancel_order&order_id=<?php echo $this->_var['order_id']; ?>&step_act=<?php echo $this->_var['step_act']; ?>'" />
                    </div>
                </form>	
                <?php elseif ($this->_var['step'] == "payment"): ?>					
                <form name="theForm" action="order.php?act=step_post&step=<?php echo $this->_var['step']; ?>&order_id=<?php echo $this->_var['order_id']; ?>&step_act=<?php echo $this->_var['step_act']; ?>" method="post" onsubmit="return checkPayment();">
                    <div class="step">
                        <div class="step_title pb5">
                            <i class="ui-step"></i>
                            <h3 class="fl"><?php echo $this->_var['lang']['select_payment_method']; ?></h3>
                        </div>
                        <div class="step_info">
                            <div class="list-div" id="list-div">
                                <table cellpadding="0" cellspacing="0" border="0">
                                    <thead>
                                        <tr>
                                            <th width="10%"><div class="tDiv"><?php echo $this->_var['lang']['name']; ?></div></th>
                                            <th width="80%"><div class="tDiv"><?php echo $this->_var['lang']['desc']; ?></div></th>
                                            <th width="10%"><div class="tDiv"><?php echo $this->_var['lang']['pay_fee']; ?></div></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $_from = $this->_var['payment_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'payment');if (count($_from)):
    foreach ($_from AS $this->_var['payment']):
?>
                                        <?php if ($this->_var['payment']['pay_code'] != 'onlinepay'): ?>
                                        <tr>
                                            <td><div class="tDiv"><div class="checkbox_item"><input type="radio" class="ui-radio" name="payment" value="<?php echo $this->_var['payment']['pay_id']; ?>" id="payment_<?php echo $this->_var['payment']['pay_id']; ?>" <?php if ($this->_var['order']['pay_id'] == $this->_var['payment']['pay_id']): ?>checked<?php endif; ?> /><label class="ui-radio-label" for="payment_<?php echo $this->_var['payment']['pay_id']; ?>"><?php echo $this->_var['payment']['pay_name']; ?></label></div></td>
                                            <td><div class="tDiv"><?php echo $this->_var['payment']['pay_desc']; ?></div></td>
                                            <td><div class="tDiv"><?php echo $this->_var['payment']['pay_fee']; ?></div></td>
                                        </tr>
                                        <?php endif; ?>
                                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="goods_btn">
                        <?php if ($this->_var['step_act'] == "add"): ?><input type="button" value="<?php echo $this->_var['lang']['button_prev']; ?>" class="btn btn35 btn_blue" onclick="history.back()" /><?php endif; ?>
                        <input name="<?php if ($this->_var['step_act'] == 'add'): ?>next<?php else: ?>finish<?php endif; ?>" type="submit" class="btn btn35 blue_btn" value="<?php if ($this->_var['step_act'] == 'add'): ?><?php echo $this->_var['lang']['button_next']; ?><?php else: ?><?php echo $this->_var['lang']['button_submit']; ?><?php endif; ?>" />
                        <input type="button" value="<?php echo $this->_var['lang']['button_cancel']; ?>" class="btn btn35 btn_blue" onclick="location.href='order.php?act=process&func=cancel_order&order_id=<?php echo $this->_var['order_id']; ?>&step_act=<?php echo $this->_var['step_act']; ?>'" />
                    </div>		
                </form>
                <?php elseif ($this->_var['step'] == "other"): ?>
                <form name="theForm" action="order.php?act=step_post&step=<?php echo $this->_var['step']; ?>&order_id=<?php echo $this->_var['order_id']; ?>&step_act=<?php echo $this->_var['step_act']; ?>" method="post">
                    <div class="step">
                        <div class="step_title">
                            <i class="ui-step"></i>
                            <h3 class="fl"><?php echo $this->_var['lang']['add_invoice']; ?></h3>
                        </div>
                    	<div class="step_content step_content_items">
                            <?php if ($this->_var['exist_real_goods']): ?>
                                <?php if ($this->_var['card_list']): ?>
                                <div class="item">
                                    <div class="step_label"><?php echo $this->_var['lang']['label_card_message']; ?></div>
                                    <div class="step_value"><textarea name="card_message" class="textarea" ><?php echo $this->_var['order']['card_message']; ?></textarea></div>
                                </div>
                                <?php endif; ?>
                                <div class="item">
                                    <div class="step_label"><?php echo $this->_var['lang']['label_inv_type']; ?></div>
                                    <div class="step_value"><input type="text" name="inv_type" id="inv_type" value="<?php echo $this->_var['order']['inv_type']; ?>" class="text" autocomplete="off" /></div>
                                </div>
                                <div class="item">
                                    <div class="step_label"><?php echo $this->_var['lang']['label_inv_payee']; ?></div>
                                    <div class="step_value"><input type="text" name="inv_payee" id="inv_payee" value="<?php echo $this->_var['order']['inv_payee']; ?>" class="text" autocomplete="off" /></div>
                                </div>
                                <div class="item">
                                    <div class="step_label"><?php echo $this->_var['lang']['label_inv_content']; ?></div>
                                    <div class="step_value"><input type="text" name="inv_content" id="inv_content" value="<?php echo $this->_var['order']['inv_content']; ?>" class="text" autocomplete="off" /></div>
                                </div>
                            <?php endif; ?>
                            <div class="item">
                                <div class="step_label"><?php echo $this->_var['lang']['label_postscript']; ?></div>
                                <div class="step_value"><textarea name="postscript" class="textarea"><?php echo $this->_var['order']['postscript']; ?></textarea></div>
                            </div>
                            <div class="item">
                                <div class="step_label"><?php echo $this->_var['lang']['label_how_oos']; ?></div>
                                <div class="step_value"><input type="text" name="how_oos" value="<?php echo $this->_var['order']['how_oos']; ?>" id="how_oos" class="text" autocomplete="off" /></div>
                            </div>
                            <div class="item">
                                <div class="step_label"><?php echo $this->_var['lang']['label_to_buyer']; ?></div>
                                <div class="step_value"><textarea name="to_buyer" class="textarea"><?php echo $this->_var['order']['to_buyer']; ?></textarea></div>
                            </div>
                        </div>
                    </div>
                    <div class="goods_btn">
                        <?php if ($this->_var['step_act'] == "add"): ?><input type="button" value="<?php echo $this->_var['lang']['button_prev']; ?>" class="btn btn35 btn_blue" onclick="history.back()" /><?php endif; ?>
                        <input name="<?php if ($this->_var['step_act'] == 'add'): ?>next<?php else: ?>finish<?php endif; ?>" type="submit" class="btn btn35 blue_btn" value="<?php if ($this->_var['step_act'] == 'add'): ?><?php echo $this->_var['lang']['button_next']; ?><?php else: ?><?php echo $this->_var['lang']['button_submit']; ?><?php endif; ?>" />
                        <input type="button" value="<?php echo $this->_var['lang']['button_cancel']; ?>" class="btn btn35 btn_blue" onclick="location.href='order.php?act=process&func=cancel_order&order_id=<?php echo $this->_var['order_id']; ?>&step_act=<?php echo $this->_var['step_act']; ?>'" />
                    </div>
                </form>
                <?php elseif ($this->_var['step'] == "money"): ?>
                <form name="theForm" action="order.php?act=step_post&step=<?php echo $this->_var['step']; ?>&order_id=<?php echo $this->_var['order_id']; ?>&step_act=<?php echo $this->_var['step_act']; ?>" method="post">
                    <div class="step order_total">
                        <div class="step_title pb5">
                            <i class="ui-step"></i>
                            <h3 class="fl"><?php echo $this->_var['lang']['fee_info']; ?></h3>
                        </div>
                        <div class="section" style="overflow:inherit">
                            <dl>
                                <dt><?php echo $this->_var['lang']['label_goods_amount']; ?></dt>
                                <dd>
                                	&nbsp;&nbsp;<?php echo $this->_var['order']['formated_goods_amount']; ?>
                                    <input name="goods_amount" type="hidden" value="<?php echo $this->_var['order']['goods_amount']; ?>" autocomplete="off" />
                                </dd>
                                <dt><?php echo $this->_var['lang']['label_bonus']; ?></dt>
                                <dd style="overflow:inherit;">
                                    <?php if ($this->_var['order']['bonus_id'] > 0): ?>
                                        - <input name="bonus" type="text" class="text w80 fn" value="<?php echo $this->_var['order']['bonus']; ?>" autocomplete="off" />
                                        <input name="bonus_id" type="hidden" value="<?php echo $this->_var['order']['bonus_id']; ?>" />
                                    <?php else: ?>
                                        <div  class="imitate_select select_w145" id="bonus_id" style="position:relative; top:2px;">
                                            <div class="cite"></div>
                                            <ul>
                                                <li><a href="javascript:;" data-value="0" class="ftx-01"><?php echo $this->_var['lang']['select_please']; ?></a></li>
                                                <?php $_from = $this->_var['available_bonus']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'bonus');if (count($_from)):
    foreach ($_from AS $this->_var['bonus']):
?>
                                                <li><a href="javascript:;" data-value="<?php echo $this->_var['bonus']['bonus_id']; ?>" class="ftx-01" data-money="<?php echo $this->_var['bonus']['type_money']; ?>"><?php echo $this->_var['bonus']['type_name']; ?> - <?php echo $this->_var['bonus']['type_money']; ?></a></li>
                                                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                            </ul>
                                            <input name="bonus_id" type="hidden" value="0" id="bonus_id_val" autocomplete="off" />
                                            <input name="bonus_val" type="hidden" value="0" autocomplete="off" />
                                        </div>
                                    <?php endif; ?>
                                </dd>
                            </dl>
                            <dl>
                                <dt><?php echo $this->_var['lang']['label_tax']; ?></dt>
                                <dd>&nbsp;&nbsp;<input name="tax" type="text" id="tax" class="text w80 fn" value="<?php echo $this->_var['order']['tax']; ?>" size="15" autocomplete="off" /></dd>
                                <dt><?php echo $this->_var['lang']['label_money_paid']; ?></dt>
                                <dd>
                                	- <?php echo $this->_var['order']['formated_money_paid']; ?>
                                    <input name="money_paid" type="hidden" value="<?php echo $this->_var['order']['money_paid']; ?>" autocomplete="off" />
                                </dd>
                            </dl>
                            <dl>
                                <dt><?php echo $this->_var['lang']['label_shipping_fee']; ?></dt>
                                <dd>
                                <?php if ($this->_var['exist_real_goods']): ?>
                                	<input name="shipping_fee" class="text w80 fn" type="text" value="<?php echo $this->_var['order']['shipping_fee']; ?>" autocomplete="off" size="15">
                                <?php else: ?>
                                	0<input name="shipping_fee" type="hidden" value="0" autocomplete="off" />
                                <?php endif; ?>
                                </dd>
                                <dt><?php echo $this->_var['lang']['label_surplus']; ?>(<?php echo $this->_var['lang']['available_surplus']; ?><?php echo empty($this->_var['available_user_money']) ? '0' : $this->_var['available_user_money']; ?>)</dt>
                                <dd title="<?php echo $this->_var['lang']['available_surplus']; ?><?php echo empty($this->_var['available_user_money']) ? '0' : $this->_var['available_user_money']; ?>">- <?php if ($this->_var['order']['user_id'] > 0): ?><input name="surplus" class="text w80 fn" type="text" class="mr10" value="<?php echo $this->_var['order']['surplus']; ?>" size="15" autocomplete="off" /><?php endif; ?></dd>
                            </dl>
                            <dl>
                                <dt><?php echo $this->_var['lang']['label_pay_fee']; ?></dt>
                                <dd>&nbsp;&nbsp;<input name="pay_fee" type="text" class="text w80 fn" value="<?php echo $this->_var['order']['pay_fee']; ?>" size="15" autocomplete="off" /></dd>
                                <dt><?php echo $this->_var['lang']['label_integral']; ?>(<?php echo $this->_var['lang']['available_integral']; ?><?php echo empty($this->_var['available_pay_points']) ? '0' : $this->_var['available_pay_points']; ?>)</dt>
                                <dd title="<?php echo $this->_var['lang']['available_integral']; ?><?php echo empty($this->_var['available_pay_points']) ? '0' : $this->_var['available_pay_points']; ?>">- <?php if ($this->_var['order']['user_id'] > 0): ?><input name="integral" class="text w80 fn" type="text" class="mr10" value="<?php echo $this->_var['order']['integral']; ?>" size="15" autocomplete="off" /><?php endif; ?></dd>
                            </dl>
                            <dl>
                                <dt><?php echo $this->_var['lang']['label_discount']; ?></dt>
                                <dd>- <input name="discount" type="text" class="text w80 fn" id="discount" value="<?php echo $this->_var['order']['discount']; ?>" size="15" autocomplete="off" /></dd>
                                <dt><?php echo $this->_var['lang']['label_coupons']; ?></dt>
                                <dd>- <input name="coupons" type="text" class="text w80 fn" value="<?php echo $this->_var['order']['coupons']; ?>" autocomplete="off" /></dd>
                            </dl>
                            <dl>
                                
                                <dt></dt>
                                <dd></dd>
                                <dt><?php echo $this->_var['lang']['label_value_card']; ?></dt>
                                <dd>
                                	- <?php echo $this->_var['order']['formated_value_card']; ?>
                                    <input name="value_card" type="hidden" value="<?php echo $this->_var['order']['use_val']; ?>" autocomplete="off" />
                                </dd>
                            </dl>
                            <dl>
                            	<dt><?php echo $this->_var['lang']['label_order_amount']; ?></dt>
                                <dd class="red">
                                	<?php echo $this->_var['order']['formated_total_fee']; ?>
                                    <input name="total_fee" type="hidden" value="<?php echo $this->_var['order']['total_fee']; ?>" autocomplete="off" />
                                </dd>
                                <dt><?php if ($this->_var['order']['order_amount'] >= 0): ?> <?php echo $this->_var['lang']['label_money_dues']; ?> <?php else: ?> <?php echo $this->_var['lang']['label_money_refund']; ?> <?php endif; ?></dt>
                                <dd class="red">
                                	= <?php echo $this->_var['order']['formated_order_amount']; ?>
                                    <input name="order_amount" type="hidden" value="<?php echo $this->_var['order']['order_amount']; ?>" autocomplete="off" />
                                </dd>
                            </dl>
                        </div>
                    </div>
                    <div class="goods_btn">
                        <?php if ($this->_var['step_act'] == "add"): ?><input type="button" value="<?php echo $this->_var['lang']['button_prev']; ?>" class="btn btn35 btn_blue" onclick="history.back()" /><?php endif; ?>
                        <input name="button" type="button" onClick="get_order_amount();" class="btn btn35 blue_btn" value="<?php echo $this->_var['lang']['button_finish']; ?>" />
                        <input name="finish" type="hidden" value="<?php echo $this->_var['lang']['button_finish']; ?>" />
                        <input type="button" value="<?php echo $this->_var['lang']['button_cancel']; ?>" class="btn btn35 btn_blue" onclick="location.href='order.php?act=process&func=cancel_order&order_id=<?php echo $this->_var['order_id']; ?>&step_act=<?php echo $this->_var['step_act']; ?>'" />
                    </div>
                </form>
                <?php elseif ($this->_var['step'] == "invoice"): ?>
                <form name="theForm" action="order.php?act=step_post&step=<?php echo $this->_var['step']; ?>&order_id=<?php echo $this->_var['order_id']; ?>&step_act=<?php echo $this->_var['step_act']; ?>" method="post" onsubmit="return checkShipping()">
                    <div class="list-div table_list2" id="listDiv">
                        <table cellpadding="1" cellspacing="1" width="100%">
                            <tr>
                                <th width="3%">&nbsp;</th>
                                <th width="10%" align="left"><div class="th ml10"><?php echo $this->_var['lang']['name']; ?></div></th>
                                <th width="87%" align="center"><div class="th"><?php echo $this->_var['lang']['desc']; ?></div></th>
                            </tr>
                            <?php $_from = $this->_var['shipping_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'shipping');if (count($_from)):
    foreach ($_from AS $this->_var['shipping']):
?>
                            <tr>
                                <td align="center"><input name="shipping" type="radio" value="<?php echo $this->_var['shipping']['shipping_id']; ?>" id="shipping_<?php echo $this->_var['shipping']['shipping_id']; ?>" <?php if ($this->_var['order']['shipping_id'] == $this->_var['shipping']['shipping_id']): ?>checked<?php endif; ?> onclick="" /></td>
                                <td align="left"><label for="shipping_<?php echo $this->_var['shipping']['shipping_id']; ?>"><?php echo $this->_var['shipping']['shipping_name']; ?></label></td>
                                <td align="left"><?php echo $this->_var['shipping']['shipping_desc']; ?></td>
                            </tr>
                            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                            <tr>
                                <td colspan="3"><strong class="fl lh ml20"><?php echo $this->_var['lang']['shipping_note']; ?></strong></td>
                            </tr>
                            <tr>
                                <td colspan="3"><strong class="fl lh ml20"><?php echo $this->_var['lang']['label_invoice_no']; ?></strong><input name="invoice_no" type="text" value="<?php echo $this->_var['order']['invoice_no']; ?>" class="text text_2" size="30"/><!--<label class="blue_label"><?php echo $this->_var['lang']['invoice_no_mall']; ?></label>--></td>
                            </tr>
                        </table>
                    </div>
                    <div class="button-div info_bottom">
                        <div id="button-info" style="margin-left:45%;">
                        <?php if ($this->_var['step_act'] == "add"): ?><input type="button" value="<?php echo $this->_var['lang']['button_prev']; ?>" class="button mr10" onclick="history.back()" /><?php endif; ?>
                        <input name="<?php if ($this->_var['step_act'] == 'add'): ?>next<?php else: ?>finish<?php endif; ?>" type="submit" class="button mr10" value="<?php if ($this->_var['step_act'] == 'add'): ?><?php echo $this->_var['lang']['button_next']; ?><?php else: ?><?php echo $this->_var['lang']['button_submit']; ?><?php endif; ?>" />
                        <input type="button" value="<?php echo $this->_var['lang']['button_cancel']; ?>" class="button" onclick="location.href='order.php?act=process&func=cancel_order&order_id=<?php echo $this->_var['order_id']; ?>&step_act=<?php echo $this->_var['step_act']; ?>'" />
                        </div>
                    </div>
                </form>
                <?php elseif ($this->_var['step'] == "return_edit"): ?>
                <form name="theForm" action="order.php?act=edit_shipping&step=<?php echo $this->_var['step']; ?>&order_id=<?php echo $this->_var['order_id']; ?>&step_act=<?php echo $this->_var['step_act']; ?>" method="post" onsubmit="return checkShipping()">
                    <div class="list-div table_list2" id="listDiv">
                        <table cellpadding="1" cellspacing="1" width="100%">
                            <tr>
                                <th width="3%">&nbsp;</th>
                                <th width="10%" align="left"><div class="th ml10"><?php echo $this->_var['lang']['name']; ?></div></th>
                                <th width="87%" align="center"><div class="th"><?php echo $this->_var['lang']['desc']; ?></div></th>
                            </tr>
                            <?php $_from = $this->_var['shipping_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'shipping');if (count($_from)):
    foreach ($_from AS $this->_var['shipping']):
?>
                            <tr>
                                <td align="center"><input name="shipping" type="radio" value="<?php echo $this->_var['shipping']['shipping_id']; ?>" id="shipping_<?php echo $this->_var['shipping']['shipping_id']; ?>" <?php if ($this->_var['return']['out_shipping_name'] == $this->_var['shipping']['shipping_id']): ?>checked<?php endif; ?> onclick="" /></td>
                                <td align="left"><label for="shipping_<?php echo $this->_var['shipping']['shipping_id']; ?>"><?php echo $this->_var['shipping']['shipping_name']; ?></label></td>
                                <td align="left"><?php echo $this->_var['shipping']['shipping_desc']; ?></td>
                            </tr>
                            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                            <tr>
                                <td colspan="3"><strong class="fl lh ml20"><?php echo $this->_var['lang']['label_invoice_no']; ?></strong><input name="invoice_no" type="text" value="<?php echo $this->_var['return']['out_invoice_no']; ?>" class="text text_2" size="30"/><!--<label class="blue_label"><?php echo $this->_var['lang']['invoice_no_mall']; ?></label>--></td>
                            </tr>
                        </table>
                    </div>
                    <div class="button-div info_bottom">
                        <div id="button-info" style="margin-left:45%;">
                            <input name='ret_id' value='<?php echo $this->_var['return']['ret_id']; ?>' type='hidden'/>
                            <input name='rec_id' value='<?php echo $this->_var['return']['rec_id']; ?>' type='hidden'/>
                            <?php if ($this->_var['step_act'] == "add"): ?><input type="button" value="<?php echo $this->_var['lang']['button_prev']; ?>" class="button mr10" onclick="history.back()" /><?php endif; ?>
                            <input name="<?php if ($this->_var['step_act'] == 'add'): ?>next<?php else: ?>finish<?php endif; ?>" type="submit" class="button mr10" value="<?php if ($this->_var['step_act'] == 'add'): ?><?php echo $this->_var['lang']['button_next']; ?><?php else: ?><?php echo $this->_var['lang']['button_submit']; ?><?php endif; ?>" />
                            <input type="button" value="<?php echo $this->_var['lang']['button_cancel']; ?>" class="button" onclick="location.href='order.php?act=process&func=cancel_order&order_id=<?php echo $this->_var['order_id']; ?>&step_act=<?php echo $this->_var['step_act']; ?>'" />
                        </div>
                    </div>
                </form>
                <?php endif; ?>	
            </div>
        </div>		
    </div>
</div>
<?php echo $this->fetch('library/pagefooter.lbi'); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'region.js')); ?>
<script type="text/javascript">
var step = '<?php echo $this->_var['step']; ?>';
var orderId = <?php echo $this->_var['order_id']; ?>;
var act = '<?php echo $_GET['act']; ?>';

//地区三级联动
$.levelLink();

$(function(){
    $(".checkbox_user").find(".ui-radio").click(function(){
        var checkbox = $(this).parents(".checkbox_user");
        checkbox.addClass("checked_user").siblings().removeClass("checked_user");

        if($("#register_user").is(":checked")){
            $(".register_user_warp").find("input[type='text']").attr("readonly",false);
            $(".register_user_warp").find(".div_readonly").hide();
        }else{
            $(".register_user_warp").find("input[type='text']").attr("readonly",true);
            $(".register_user_warp").find(".div_readonly").show();
        }
    });
    $(document).on("click","input[name='add_price']",function(){
        if($(this).attr("id") == "custom_price"){
            $("#custom_price_value").show();
        }else{
            $("#custom_price_value").hide();
        }
    });
	
	//收货地址
	$("#submitBtn").click(function(){
		if($("#consignee").valid()){
			$("#consignee").submit();
		}
	});
	
	$('#consignee').validate({
		errorPlacement:function(error, element){
			var error_div = element.parents('div.step_value').find('div.form_prompt');
			element.parents('div.step_value').find(".notic").hide();
			error_div.find("label").remove();
			error_div.append(error);
		},
		ignore:"",
		rules:{
			consignee :{
				required : true
			},
			country :{
				min : 1
			},
			province :{
				min : 1
			},
			city :{
				min : 1
			},
			district :{
				min : 1
			},
			address : {
				required : true
			},
			mobile : {
				required : true,
				isTel : true
			}
		},
		messages:{
			consignee:{
				 required : '<i class="icon icon-exclamation-sign"></i><?php echo $this->_var['lang']['order_step_js_notic_01']; ?>'
			},
			country :{
				min : '<i class="icon icon-exclamation-sign"></i><?php echo $this->_var['lang']['order_step_js_notic_02']; ?>'
			},
			province :{
				min : '<i class="icon icon-exclamation-sign"></i><?php echo $this->_var['lang']['order_step_js_notic_03']; ?>'
			},
			city :{
				min : '<i class="icon icon-exclamation-sign"></i><?php echo $this->_var['lang']['order_step_js_notic_04']; ?>'
			},
			district :{
				min : '<i class="icon icon-exclamation-sign"></i><?php echo $this->_var['lang']['order_step_js_notic_05']; ?>'
			},
			address : {
				required : '<i class="icon icon-exclamation-sign"></i><?php echo $this->_var['lang']['order_step_js_notic_06']; ?>'
			},
			mobile : {
				required : '<i class="icon icon-exclamation-sign"></i><?php echo $this->_var['lang']['order_step_js_notic_07']; ?>',
				isTel : '<i class="icon icon-exclamation-sign"></i><?php echo $this->_var['lang']['order_step_js_notic_08']; ?>',
			}
		}			
	});
});
	
function checkUser()
  {
    var eles = document.forms['theForm'].elements;

    /* 如果搜索会员，检查是否找到 */
    if (document.getElementById('register_user').checked && eles['user'].value == "")
    {
        alert(pls_search_user);
        return false;
    }
    return true;
  }
	
/*function checkGoods()
{
    var eles = document.forms['theForm'].elements;

    if (eles['goods_count'].value <= 0)
    {
        alert(pls_search_goods);
        return false;
    }
    return true;
}*/
	
function checkConsignee()
{
    var eles = document.forms['theForm'].elements;

    if (eles['country'].value <= 0)
    {
        alert(pls_select_area);
        return false;
    }
    if (eles['province'].options.length > 1 && eles['province'].value <= 0)
    {
        alert(pls_select_area);
        return false;
    }
    if (eles['city'].options.length > 1 && eles['city'].value <= 0)
    {
        alert(pls_select_area);
        return false;
    }
    if (eles['district'].options.length > 1 && eles['district'].value <= 0)
    {
        alert(pls_select_area);
        return false;
    }
    if (eles['street'].options.length > 1 && eles['street'].value <= 0)
    {
        alert(pls_select_area);
        return false;
    }
    return true;
}
	
function checkShipping()
{
    if (!radioChecked('shipping'))
    {
        alert(pls_select_shipping);
        return false;
    }
    return true;
}
	
function checkPayment()
{
    if (!radioChecked('payment'))
    {
        alert(pls_select_payment);
        return false;
    }
    return true;
}
	
/**
 * 返回某 radio 是否被选中一个
 * @param string radioName
 */
function radioChecked(radioName)
{
    var eles = document.forms['theForm'].elements;

    for (var i = 0; i < eles.length; i++)
    {
        if (eles[i].name == radioName && eles[i].checked)
        {
            return true;
        }
    }
    return false;
}

$.divselect("#warehouse_id","#warehouse_id_val",function(){
    var warehouse_id = $("#warehouse_id_val").val();
    Ajax.call('goods_inventory_logs.php?is_ajax=1&act=search_area', "warehouse_id=" + warehouse_id, search_areaResult, "GET", "JSON");
});
	
function search_areaResult(result)
{
    $('#area_id').html(result.content);
}
	
$.divselect("#goodslist","#goodslist_val",function(){
    var goodsId = $("#goodslist_val").val();
    var warehouse_id = $("#warehouse_id_val").val();
    var area_id = $("#area_id_val").val();
    if (goodsId > 0)
    {
        Ajax.call('order.php?is_ajax=1&act=json&func=get_goods_info', 'goods_id=' + goodsId + '&warehouse_id=' + warehouse_id + '&area_id=' + area_id, getGoodsInfoResponse, 'get', 'json');
    }
    else
    {
        document.getElementById('goods_name').innerHTML = '';
        document.getElementById('goods_sn').innerHTML = '';
        document.getElementById('goods_cat').innerHTML = '';
        document.getElementById('goods_brand').innerHTML = '';
        document.getElementById('add_price').innerHTML = '';
        document.getElementById('goods_attr').innerHTML = '';
    }
});

function getGoodsInfoResponse(result)
{
    var eles = document.forms['goodsForm'].elements;

    // 显示商品名称、货号、分类、品牌
    document.getElementById('goods_name').innerHTML = result.goods_name;
    document.getElementById('goods_sn').innerHTML = result.goods_sn;
    document.getElementById('goods_cat').innerHTML = result.cat_name;
    document.getElementById('goods_brand').innerHTML = result.brand_name;
    document.getElementById('goods_storage').innerHTML = result.goods_storage;
    eles['model_attr'].value = result.model_attr;
    eles['attr_price'].value = result.attr_price;

    //显示价格：包括市场价、本店价（促销价）、会员价
    var priceHtml = '<div class="checkbox_item"><input type="radio" name="add_price" class="ui-radio" id="market_price" value="' + result.market_price + '" /><label for="market_price" class="ui-radio-label"><?php echo $this->_var['lang']['lab_bar_market_price']; ?> [' + result.market_price + ']</label></div>' +
      '<div class="checkbox_item"><input type="radio" name="add_price" class="ui-radio" id="shop_price" value="' + result.goods_price + '" checked /><label for="shop_price" class="ui-radio-label"><?php echo $this->_var['lang']['lab_bar_shop_price']; ?> [' + result.goods_price + ']</label></div>';
    for (var i = 0; i < result.user_price.length; i++)
    {
        priceHtml += '<div class="checkbox_item"><input type="radio" name="add_price" class="ui-radio" id="shop_price_'+i+'" value="' + result.user_price[i].user_price + '" /><label for="shop_price_'+i+'" class="ui-radio-label">' + result.user_price[i].rank_name + ' [' + result.user_price[i].user_price + ']</label></div>';
    }
    priceHtml += '<div class="checkbox_item"><input type="radio" name="add_price" class="ui-radio" id="custom_price" value="user_input" /><label for="custom_price" class="ui-radio-label mr10">' + input_price + '</label><input type="text" id="custom_price_value" name="input_price" class="text w120" value="" style="display:none;" /></div>';
    document.getElementById('add_price').innerHTML = priceHtml;

    //显示属性
    var specCnt = 0; // 规格的数量
    var attrHtml = '';
    var attrType = '';
    var attrTypeArray = '';
    var attrCnt = result.attr_list.length;
    for (i = 0; i < attrCnt; i++)
        {
            var valueCnt = result.attr_list[i].length;

            /*规格*/
            if (valueCnt > 1)
            {
                attrHtml += '<div class="checkbox_items"><div class="attr_name">' + result.attr_list[i][0].attr_name + '：</div>';
                for (var j = 0; j < valueCnt; j++)
                {
                    switch (result.attr_list[i][j].attr_type)
                    {
                        case '0' :
                        case '1' :
                        attrType = 'radio';
                        attrTypeArray = '';
                        break;

                        case '2' :
                        attrType = 'checkbox';
                        attrTypeArray = '[]';
                        break;
                    }
                    attrHtml += '<div class="checkbox_item"><input onclick="get_attr_number(' + result.goods_id + "," + result.warehouse_id + "," + result.area_id + "," + result.user_id + "," + result.model_attr + "," + result.goods_number + ')" type="' + attrType + '" name="spec_' + specCnt + attrTypeArray + '" value="' + result.attr_list[i][j].goods_attr_id + '" class="ui-radio" id="attr_'+result.attr_list[i][j].goods_attr_id+'"';
                    if (j == 0)
                    {
                        attrHtml += ' checked';
                    }
                    attrHtml += ' /><label class="ui-radio-label" for="attr_'+result.attr_list[i][j].goods_attr_id+'">' + result.attr_list[i][j].attr_value;
                    if (result.attr_list[i][j].attr_price > 0)
                    {
                        attrHtml += ' [+' + result.attr_list[i][j].attr_price + ']';
                    }
                    else if (result.attr_list[i][j].attr_price < 0)
                    {
                        attrHtml += ' [-' + Math.abs(result.attr_list[i][j].attr_price) + ']';
                    }
                    attrHtml += '</label></div>'
                }
                attrHtml += '</div>';
                specCnt++;
            }
            /*属性*/
            else
            {
                attrHtml += '<div class="checkbox_items"><div class="attr_name">'+result.attr_list[i][0].attr_name + '：</div>' + result.attr_list[i][0].attr_value + '</div>';
            }
        }
    eles['spec_count'].value = specCnt;
    document.getElementById('goods_attr').innerHTML = attrHtml;
}

function get_attr_number(goods_id, warehouse_id, area_id, user_id, model_attr, goods_number){
    var attr = getSelectedAttributes(document.forms['goodsForm']);
    Ajax.call('order.php?is_ajax=1&act=json&func=get_goods_attr_number', 'goods_id=' + goods_id + '&attr=' + attr + '&warehouse_id=' + warehouse_id + '&area_id=' + area_id + '&user_id=' + user_id + '&model_attr=' + model_attr + '&goods_number=' + goods_number, getGoodsAttrResponse, 'get', 'json');
}
  
function getGoodsAttrResponse(result){

    var eles = document.forms['goodsForm'].elements;

    document.getElementById('goods_storage').innerHTML = result.goods_storage;
    eles['attr_price'].value = result.attr_price;
}
  
/**
* 获得选定的商品属性
*/
function getSelectedAttributes(formBuy)
{
    var spec_arr = new Array();
    var j = 0;
    for (i = 0; i < formBuy.elements.length; i ++ )
    {
        var prefix = formBuy.elements[i].name.substr(0, 5);

        if (prefix == 'spec_' && (
            ((formBuy.elements[i].type == 'radio' || formBuy.elements[i].type == 'checkbox') && formBuy.elements[i].checked) ||
            formBuy.elements[i].tagName == 'SELECT'))
        {
            spec_arr[j] = formBuy.elements[i].value;
            j++ ;
        }
    }

    return spec_arr;
}
	
/**
 * 按用户编号或用户名搜索用户
 */
function searchUser()
{
    var eles = document.forms['theForm'].elements;

    /* 填充列表 */
    var idName = Utils.trim(eles['keyword'].value);

    if (idName != '')
    {
        Ajax.call('order.php?is_ajax=1&act=search_users&id_name=' + idName, '', searchUserResponse, 'GET', 'JSON');
    }
}

function searchUserResponse(result)
{

    if (result.message.length > 0)
    {
        alert(result.message);
    }

    if (result.error == 0)
    {
        $("#user").find('li').remove();

        var arr = result.userlist;

        for (var i = 0; i < arr.length; i++)
        {
            $("#user").children("ul").append("<li><a href='javascript:;' data-value='"+arr[i].user_id+"' class='ftx-01'>"+arr[i].user_name+"</a></li>")
        }
    }
}
  
/**
 * 按商品编号或商品名称或商品货号搜索商品
 */
function searchGoods()
{
    var eles = document.forms['goodsForm'].elements;
    var warehouse_id = eles['warehouse_id'].value;
    var area_id = eles['area_id'].value;
    // if(warehouse_id == 0){
        // alert('请选择仓库');
        // return false;
      // }else if(area_id == 0){
              // alert('请选择地区');
      // return false;
      // }else{
    /* 填充列表 */
    var keyword = Utils.trim(eles['keyword'].value);
    if (keyword != '')
    {
        Ajax.call('order.php?is_ajax=1&act=search_goods&keyword=' + keyword + '&order_id=<?php echo $this->_var['order_id']; ?>' + '&warehouse_id=' + warehouse_id + '&area_id=' + area_id, '', searchGoodsResponse, 'GET', 'JSON');
    }
      // }
}

function searchGoodsResponse(result)
{
    if (result.message.length > 0)
    {
        alert(result.message);
    }

    if (result.error == 0)
    {
        $("#goodslist").find('li').remove();

        var arr = result.goodslist;

        for (var i = 0; i < arr.length; i++)
        {
            $("#goodslist").children("ul").append("<li><a href='javascript:;' data-value='"+arr[i].goods_id+"' class='ftx-01'>"+arr[i].name+"</a></li>")
        }
    }
}
  
function submit(){
    document.forms['theForm'].submit();
}
  
/**
 * 把商品加入订单
 */
function addToOrder()
{
    var form = $("form[name='goodsForm']");
    var warehouse_id = form.find("input[name='warehouse_id']").val();
    var area_id = form.find("input[name='area_id']").val();
    var add_number = form.find("input[name='add_number']").val();
    var goods_storage = $("#goods_storage").html();
    goods_storage = Number(goods_storage);

    // 检查是否选择了商品
    if (form.find("input[name='goodslist']") == "")
    {
        alert(pls_search_goods);
        return false; 
    }/*else if(warehouse_id == 0){
        alert('请选择仓库');
        return false;
    }else if(area_id == 0){
        alert('请选择地区');
        return false;
    }*/
	
	if(goods_storage == 0){
        alert('<?php echo $this->_var['lang']['order_step_js_notic_09']; ?>');
		return false;
	}
	
    if(add_number > goods_storage){
        alert('<?php echo $this->_var['lang']['order_step_js_notic_09']; ?>');
        return false;
    }

    return true;
}

function subOrderAdd(){
	var form = $("form[name='theFormNext']");
	
	if($(".goods_info").length > 0){
		return true;
	}else{
		alert("<?php echo $this->_var['lang']['order_step_js_notic_10']; ?>");
		return false;
	}
}
  
/**
 * 载入收货地址
 * @param int addressId 收货地址id
 */
function loadAddress(addressId)
{
    location.href += 'order.php?act=<?php echo $_GET['act']; ?>&order_id=<?php echo $_GET['order_id']; ?>&step=<?php echo $_GET['step']; ?>&address_id=' + addressId;
}

$.divselect("#addresslist","#addresslist_val",function(obj){
    var value = obj.data("value");
    loadAddress(value);
});

$.divselect("#bonus_id","#bonus_id_val",function(obj){
    var money = obj.data("money");
    obj.parents(".imitate_select").find("input[name='bonus_val']").val(money);
});

/* 运算订单总金额不能为负数 */
function get_order_amount(){
	
	var goods_amount = $(":input[name='goods_amount']").val();
	var tax = $(":input[name='tax']").val();
	var shipping_fee = $(":input[name='shipping_fee']").val();
	var pay_fee = $(":input[name='pay_fee']").val();
	var discount = $(":input[name='discount']").val();

	var bonus = $(":input[name='bonus_val']").val();
	var money_paid = $(":input[name='money_paid']").val();
	var surplus = $(":input[name='surplus']").val();
	var integral = $(":input[name='integral']").val();
	var coupons = $(":input[name='coupons']").val();
	var value_card = $(":input[name='value_card']").val();
	
	var total_fee = Number(goods_amount) + Number(tax) + Number(shipping_fee) + Number(pay_fee) - Number(discount);
	
	if(total_fee < 0){
		alert("<?php echo $this->_var['lang']['order_step_js_notic_11']; ?>");
		return false;
	}
	
	if(total_fee == 0){
		var concessionary = Number(money_paid) + Number(surplus) - Number(coupons) - Number(integral) - Number(value_card) - Number(bonus);
		var order_amount = Number(total_fee) - Number(concessionary);
	}else{
		var order_amount = (Number(money_paid) + Number(surplus) + Number(coupons) + Number(integral) + Number(value_card) + Number(bonus) - total_fee) * -1;
	}
	
	var str = '';
	<?php if ($this->_var['order']['ru_id'] != 0): ?>
	str = "<?php echo $this->_var['lang']['order_step_js_notic_12']; ?>";
	<?php endif; ?>
	
	if(order_amount < 0){
		if(confirm("<?php echo $this->_var['lang']['order_step_js_notic_13']; ?>" + order_amount.toFixed(2) + "）" + str + "<?php echo $this->_var['lang']['order_step_js_notic_14']; ?>")){
			$("form[name='theForm']").submit();
		}
	}else{
		$("form[name='theForm']").submit();
	}
}
</script>
</body>
</html>
