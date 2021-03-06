<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
    <meta name="Description" content="<?php echo $this->_var['description']; ?>" />
    
    <title><?php echo $this->_var['page_title']; ?></title>
    
    
    
    <link rel="shortcut icon" href="favicon.ico" />
    
    
    
    <link rel="stylesheet" href="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/css/style.css">
    <link rel="stylesheet" href="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/css/iconfont.css">
    <link rel="stylesheet" href="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/sz/mayi_base.css">
    <link rel="stylesheet" href="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/sz/public.css">
    <link rel="stylesheet" href="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/sz/jquery.bxslider.css">
    <link rel="stylesheet" href="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/sz/layer.css">
    <link rel="stylesheet" href="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/sz/new_calendar.css">
    <link rel="stylesheet" href="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/sz/index.css">
    <link rel="stylesheet" href="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/sz/laxin.css">
    <link rel="stylesheet" href="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/sz/chatStyle.css">
    
    <link rel="stylesheet" href="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/css/purebox.css">
    
    <?php echo $this->smarty_insert_scripts(array('files'=>'jquery-1.9.1.min.js,jquery.json.js,transport_jquery.js,suggest.js,scroll_city.js,utils.js,warehouse.js,warehouse_area.js,jquery.SuperSlide.2.1.1.js,jquery.yomi.js,cart_common.js,cart_quick_links.js')); ?>
    <script src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/js/dsc-common.js"></script>
    <script src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/js/jquery.purebox.js?v=12312"></script>
    
</head>

<body>
    
    <div class="header">
        <div class="nav index_nav line_h70">
            <div class="w1050 c_white clearfloat">
                <div class="logo fl">
                    <a href="<?php echo $this->_var['url_index']; ?>"><img src="<?php echo $this->_var['site_domain']; ?>themes/<?php echo $GLOBALS['_CFG']['template']; ?>/images/logo.gif" width="40" alt="logo"></a>
                </div>
                <ul class="fr nav-list clearfloat">
                    <li>
                        <p class="top-line"></p>
                        <span class="service fw600 f14">客服热线</span>
                        <ul class="hover-list radius-6 c_gray_dark t-center">
                            <li><?php echo $this->_var['service_phone']; ?></li>
                        </ul>
                    </li>
                    <li>
                        <p class="top-line"></p>
                        <a class="app fw600 f14 c_white" target="_blank" href="#">下载APP送500元大礼包</a>
                        <ul class="hover-list radius-6 c_gray_dark t-center down-app" style="display: none;">
                            <li class="clearfloat">
                                <div class="fl">
                                    <p class="f18 c_gray_dark mb10">扫码下载APP</p>
                                    <img src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/sz/img/app.jpg"
                                        width="112" alt="下载app">
                                    <p class="f14">注册立送500元大礼包</p>
                                </div>
                                <div class="fr">
                                    <div class="fl">
                                        <p class="f18 c_gray_dark mb10">扫码快速预订</p>
                                        <img src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/sz/img/JJ8GRMND8SDJCP267PTG7BW8S3AV5T.jpg"
                                            width="112" alt="微信小程序">
                                        <p class="f14">蚂蚁短租小程序</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <p class="top-line"></p>
                        <a class="f14 fw600 c_white" target="_blank" href="#">商旅合作</a>
                    </li>
                    <li>
                        <p class="top-line"></p>
                        <a class="fw600 f14 c_white" href="javascript:void(0);">
                            帮助中心
                        </a>
                        <ul class="hover-list radius-6 c_gray_dark t-left left42">
                            <li class="mb10">
                                <a class="c_gray_dark" target="_blank" href="#">搜索房源</a>
                            </li>
                            <li class="mb10">
                                <a class="c_gray_dark" target="_blank" href="#">预订房源</a>
                            </li>
                            <li class="mb10">
                                <a class="c_gray_dark" target="_blank" href="#">订单操作</a>
                            </li>
                            <li class="mb10">
                                <a class="c_gray_dark" target="_blank" href="#">入住评论</a>
                            </li>
                            <li>
                                <a class="c_gray_dark" target="_blank" href="#">更多</a>
                            </li>
                        </ul>
                    </li>
                    <li class="ml20 user-action">
                        <?php if ($this->_var['userinfo']['username']): ?>
						<div class="login-info f0 ">
							<p class="top-line"></p>
							<a href="javascript:void(0);" style="border: none;"><img class="user-head circle" src="<?php if ($this->_var['userinfo']['user_picture']): ?><?php echo $this->_var['userinfo']['user_picture']; ?><?php else: ?>themes/<?php echo $GLOBALS['_CFG']['template']; ?>/images/touxiang.jpg<?php endif; ?>" alt="头像" ></a>
							<span class="f14 fw600 ver-t" style="color: white;"><?php echo $this->_var['userinfo']['nick_name']; ?></span>
							
						</div>
                        <?php else: ?>
                        <div class="login-btn t-center fw600 cursorpt " id="loginshow">登录/注册</div>
                        <?php endif; ?>
                    </li>
                </ul>
            </div>
        </div>
        <div class="banner clearfloat">
            <div class="bx-wrapper" style="max-width: 100%;">
                <div class="bx-viewport" style="width: 100%; overflow: hidden; position: relative; height: 560px;">
                    <ul id="banner" style="width: auto; position: relative;">
                        <?php $_from = $this->_var['silders']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'silder');if (count($_from)):
    foreach ($_from AS $this->_var['silder']):
?>
                        <li style="float: none; list-style: none; position: absolute; width: 1903px; z-index: 0; display: list-item;max-width: <?php echo $this->_var['silder']['ad_width']; ?>;max-height:<?php echo $this->_var['silder']['ad_height']; ?>;">
                            <a href="<?php echo $this->_var['silder']['ad_link']; ?>" target="_blank">
                                <img src="<?php echo $this->_var['silder']['ad_code']; ?>" alt="<?php echo $this->_var['silder']['ad_name']; ?>" width="<?php echo $this->_var['silder']['ad_width']; ?>" height="<?php echo $this->_var['silder']['ad_height']; ?>">
                            </a>
                        </li>
                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                    </ul>
                </div>
                <div class="bx-controls bx-has-pager bx-has-controls-direction">
                    <div class="bx-pager bx-default-pager" id="silder-btn">
                        <?php $_from = $this->_var['silders']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('k', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['k'] => $this->_var['item']):
?>
                        <div class="bx-pager-item">
                            <a href="javascript:void(0)" data-slide-index="<?php echo $this->_var['k']; ?>" class="bx-pager-link"><?php echo $this->_var['k']; ?></a>
                        </div>
                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                    </div>
                    <div class="bx-controls-direction" id="silder-change">
                        <a class="bx-prev" href="javascript:void(0)">Prev</a>
                        <a class="bx-next" href="javascript:void(0)">Next</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container w1050">
        
        <div class="search radius-12">
            <ul class="search_tab clearfloat">
                <li id="search_inland" class="search_inland active" >国内</li>
                <li id="search_overseas" class="search_overseas">海外<span
                        class="hot-icon"></span></li>
            </ul>
            <div class="clearfloat">
                <div class="fl clearfloat search-input-block">
                    
                    <div class="fl relave t-left place clearfloat">
                        <div class="theme c_gray f14">目的地</div>
                        <div class="input-box active">
                            <input class="f18 c_gray_light fw700" id="searchcityin" type="text" placeholder="城市、景点、商圈">
                            <span class="circle" id="clearCityInfo" style="display: none;">×</span>
                        </div>
                        
                        <div class="suggest_results search-modal has-words radius-12 c_gray_dark" id="suggest"
                             style="overflow: hidden; outline: none;">
                            <ul id="suggestul">

                            </ul>
                        </div>
                        <div class="error_tip_list search-modal radius-12" id="tip_searchcity"
                            style="overflow: hidden; outline: none;">关键词无结果</div>
                        
                        <div class="select-hotcity clearfloat search-modal radius-12 c_gray_dark" id="searchcitydiv"
                            name="searchcitydiv" tabindex="2" style="overflow: hidden; outline: none; display: none;">
                            <ul class="clearfloat city_tab">
                                <li id="city_inland" class="city_inland active"
                                    _mayi_rp="webindex|searchtab|cityinland">国内·港澳台</li>
                                <li id="city_overseas" class="city_overseas" _mayi_rp="webindex|searchtab|cityoverseas">
                                    海外<span class="hot-icon"></span></li>
                            </ul>
                            <div class="searh-recent clearfloat history">
                                <p class="w100 clearfloat"><span class="searh-tit fl fw700">历史搜索</span><span
                                        class="cleartrace fr clear" onclick="return Bind_Click(this);"
                                        _mayi_rp="webindex|condition|clearHistory"></span></p>
                                <ul id="searh-recent" class="clearfloat citys">
                                </ul>
                            </div>
                            <ul class="select-title clearfloat tab" id="cityselecttitleul">
                                <li class="active"><a value="hotcity" id="hotcity" class="selected"
                                        href="javascript:void(0)"></a></li>
                                <li><a value="a_b_c_d" id="a_b_c_d" href="javascript:void(0)" class="">ABCD</a></li>
                                <li><a value="e_f_g_h" id="e_f_g_h" href="javascript:void(0)" class="">EFGH</a></li>
                                <li><a value="j_k_l_m" id="j_k_l_m" href="javascript:void(0)" class="">JKLM</a></li>
                                <li><a value="n_p_q_r" id="n_p_q_r" href="javascript:void(0)" class="">NPQR</a></li>
                                <li><a value="s_t_w" id="s_t_w" href="javascript:void(0)" class="">STW</a></li>
                                <li><a value="x_y_z" id="x_y_z" href="javascript:void(0)">XYZ</a></li>
                            </ul>
                            <ul class="select-citycon clearfloat tab-content" id="cityselectul" name="cityselectul"
                                tabindex="5" style="overflow: hidden; outline: none;">
                            </ul>
                            <!-- <div class="hotmore hint f12 c_gray" >温馨提示：支持中文/拼音/简拼输入</div> -->
                            <div id="ascrail2005" class="nicescroll-rails nicescroll-rails-vr"
                                style="width: 8px; z-index: 10000; cursor: default; position: absolute; top: 1px; left: 582px; height: 20px; touch-action: none; display: none;">
                                <div class="nicescroll-cursors"
                                    style="position: relative; top: 0px; float: right; width: 6px; height: 0px; background-color: rgb(72, 72, 72); border: 1px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 100px; touch-action: none;">
                                </div>
                            </div>
                            <div id="ascrail2005-hr" class="nicescroll-rails nicescroll-rails-hr"
                                style="height: 8px; z-index: 10000; top: 13px; left: 0px; position: absolute; cursor: default; display: none;">
                                <div class="nicescroll-cursors"
                                    style="position: absolute; top: 0px; height: 6px; width: 0px; background-color: rgb(72, 72, 72); border: 1px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 100px;">
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="fl t-center time clearfloat" id="calendar_group">
                        <div class="theme c_gray f14 t-left">住宿日期</div>
                        <div class="input-box">
                            <input id="checkinday" readonly="" class="f18 c_gray_light fw700" type="text"
                                placeholder="入住日期">
                            <input id="checkinday_value" type="hidden">
                            <div class="count">
                                <span class="f12 c_gray_dark" id="zrdays">0晚</span>
                            </div>
                            <input id="checkoutday" readonly="" class="f18 c_gray_light fw700" type="text"
                                placeholder="退房日期">
                            <input id="checkoutday_value" type="hidden">
                        </div>
                        <span class="circle clear" id="clearSelect" style="display: none;"
                            _mayi_rp="webindex|condition|clearCalendar">×</span>
                        <div id="index_list_calendar-box" class="hidden search-modal" tabindex="3"
                            style="overflow: hidden; outline: none; display: none;">
                            <div class="calendar-month paddingR10">
                                <div class="calendar-title width_274">
                                    <h2 cury="2019" curm="11">2019-11</h2>
                                </div>
                                <ul class="calendar-week">
                                    <li class="pink red">日</li>
                                    <li>一</li>
                                    <li>二</li>
                                    <li>三</li>
                                    <li>四</li>
                                    <li>五</li>
                                    <li class="pink red">六</li>
                                </ul>
                                <ul class="calendar-day">
                                    <li class="old line2"></li>
                                    <li class="old line2"></li>
                                    <li class="old line2"></li>
                                    <li class="old line2"></li>
                                    <li class="old line2"></li>
                                    <li class="line2 old " d="1" m="10" y="2019" w="5" today="0" ymd="2019-11-01">
                                        <span>1</span></li>
                                    <li class="line2 old " d="2" m="10" y="2019" w="6" today="0" ymd="2019-11-02">
                                        <span>2</span></li>
                                    <li class="line2 old " d="3" m="10" y="2019" w="0" today="0" ymd="2019-11-03">
                                        <span>3</span></li>
                                    <li class="line2 old " d="4" m="10" y="2019" w="1" today="0" ymd="2019-11-04">
                                        <span>4</span></li>
                                    <li class="line2 old " d="5" m="10" y="2019" w="2" today="0" ymd="2019-11-05">
                                        <span>5</span></li>
                                    <li class="line2 old " d="6" m="10" y="2019" w="3" today="0" ymd="2019-11-06">
                                        <span>6</span></li>
                                    <li class="line2 old " d="7" m="10" y="2019" w="4" today="0" ymd="2019-11-07">
                                        <span>7</span></li>
                                    <li class="line2 old " d="8" m="10" y="2019" w="5" today="0" ymd="2019-11-08">
                                        <span>8</span></li>
                                    <li class="line2 old " d="9" m="10" y="2019" w="6" today="0" ymd="2019-11-09">
                                        <span>9</span></li>
                                    <li class="line2 old " d="10" m="10" y="2019" w="0" today="0" ymd="2019-11-10">
                                        <span>10</span></li>
                                    <li class="line2 old " d="11" m="10" y="2019" w="1" today="0" ymd="2019-11-11">
                                        <span>11</span></li>
                                    <li class="line2 old " d="12" m="10" y="2019" w="2" today="0" ymd="2019-11-12">
                                        <span>12</span></li>
                                    <li class="line2 old " d="13" m="10" y="2019" w="3" today="0" ymd="2019-11-13">
                                        <span>13</span></li>
                                    <li class="line2 old " d="14" m="10" y="2019" w="4" today="0" ymd="2019-11-14">
                                        <span>14</span></li>
                                    <li class="line2 old " d="15" m="10" y="2019" w="5" today="0" ymd="2019-11-15">
                                        <span>15</span></li>
                                    <li class="line2 old " d="16" m="10" y="2019" w="6" today="0" ymd="2019-11-16">
                                        <span>16</span></li>
                                    <li class="line2 old " d="17" m="10" y="2019" w="0" today="0" ymd="2019-11-17">
                                        <span>17</span></li>
                                    <li class="line2 old " d="18" m="10" y="2019" w="1" today="0" ymd="2019-11-18">
                                        <span>18</span></li>
                                    <li class="line2 old " d="19" m="10" y="2019" w="2" today="0" ymd="2019-11-19">
                                        <span>19</span></li>
                                    <li class="line2 old " d="20" m="10" y="2019" w="3" today="0" ymd="2019-11-20">
                                        <span>20</span></li>
                                    <li class="line2 old " d="21" m="10" y="2019" w="4" today="0" ymd="2019-11-21">
                                        <span>21</span></li>
                                    <li class="line2 old " d="22" m="10" y="2019" w="5" today="0" ymd="2019-11-22">
                                        <span>22</span></li>
                                    <li class="line2 old " d="23" m="10" y="2019" w="6" today="0" ymd="2019-11-23">
                                        <span>23</span></li>
                                    <li class="line2 old " d="24" m="10" y="2019" w="0" today="0" ymd="2019-11-24">
                                        <span>24</span></li>
                                    <li class="line2 old " d="25" m="10" y="2019" w="1" today="0" ymd="2019-11-25">
                                        <span>25</span></li>
                                    <li class="line2 old " d="26" m="10" y="2019" w="2" today="0" ymd="2019-11-26">
                                        <span>26</span></li>
                                    <li class="line2 old " d="27" m="10" y="2019" w="3" today="0" ymd="2019-11-27">
                                        <span>27</span></li>
                                    <li class="line2 show-date " d="28" m="10" y="2019" w="4" today="1"
                                        ymd="2019-11-28"><span>今天</span></li>
                                    <li class="line2 show-date " d="29" m="10" y="2019" w="5" today="0"
                                        ymd="2019-11-29"><span>29</span></li>
                                    <li class="line2 show-date " d="30" m="10" y="2019" w="6" today="0"
                                        ymd="2019-11-30"><span>30</span></li>
                                </ul>
                            </div>
                            <div class="calendar-month">
                                <div class="calendar-title">
                                    <h2 cury="2019" curm="12">2019-12</h2>
                                </div>
                                <ul class="calendar-week">
                                    <li class="pink red">日</li>
                                    <li>一</li>
                                    <li>二</li>
                                    <li>三</li>
                                    <li>四</li>
                                    <li>五</li>
                                    <li class="pink red">六</li>
                                </ul>
                                <ul class="calendar-day">
                                    <li class="line2 show-date " d="1" m="11" y="2019" w="0" today="0" ymd="2019-12-01">
                                        <span>1</span></li>
                                    <li class="line2 show-date " d="2" m="11" y="2019" w="1" today="0" ymd="2019-12-02">
                                        <span>2</span></li>
                                    <li class="line2 show-date " d="3" m="11" y="2019" w="2" today="0" ymd="2019-12-03">
                                        <span>3</span></li>
                                    <li class="line2 show-date " d="4" m="11" y="2019" w="3" today="0" ymd="2019-12-04">
                                        <span>4</span></li>
                                    <li class="line2 show-date " d="5" m="11" y="2019" w="4" today="0" ymd="2019-12-05">
                                        <span>5</span></li>
                                    <li class="line2 show-date " d="6" m="11" y="2019" w="5" today="0" ymd="2019-12-06">
                                        <span>6</span></li>
                                    <li class="line2 show-date " d="7" m="11" y="2019" w="6" today="0" ymd="2019-12-07">
                                        <span>7</span></li>
                                    <li class="line2 show-date " d="8" m="11" y="2019" w="0" today="0" ymd="2019-12-08">
                                        <span>8</span></li>
                                    <li class="line2 show-date " d="9" m="11" y="2019" w="1" today="0" ymd="2019-12-09">
                                        <span>9</span></li>
                                    <li class="line2 show-date " d="10" m="11" y="2019" w="2" today="0"
                                        ymd="2019-12-10"><span>10</span></li>
                                    <li class="line2 show-date " d="11" m="11" y="2019" w="3" today="0"
                                        ymd="2019-12-11"><span>11</span></li>
                                    <li class="line2 show-date " d="12" m="11" y="2019" w="4" today="0"
                                        ymd="2019-12-12"><span>12</span></li>
                                    <li class="line2 show-date " d="13" m="11" y="2019" w="5" today="0"
                                        ymd="2019-12-13"><span>13</span></li>
                                    <li class="line2 show-date " d="14" m="11" y="2019" w="6" today="0"
                                        ymd="2019-12-14"><span>14</span></li>
                                    <li class="line2 show-date " d="15" m="11" y="2019" w="0" today="0"
                                        ymd="2019-12-15"><span>15</span></li>
                                    <li class="line2 show-date " d="16" m="11" y="2019" w="1" today="0"
                                        ymd="2019-12-16"><span>16</span></li>
                                    <li class="line2 show-date " d="17" m="11" y="2019" w="2" today="0"
                                        ymd="2019-12-17"><span>17</span></li>
                                    <li class="line2 show-date " d="18" m="11" y="2019" w="3" today="0"
                                        ymd="2019-12-18"><span>18</span></li>
                                    <li class="line2 show-date " d="19" m="11" y="2019" w="4" today="0"
                                        ymd="2019-12-19"><span>19</span></li>
                                    <li class="line2 show-date " d="20" m="11" y="2019" w="5" today="0"
                                        ymd="2019-12-20"><span>20</span></li>
                                    <li class="line2 show-date " d="21" m="11" y="2019" w="6" today="0"
                                        ymd="2019-12-21"><span>21</span></li>
                                    <li class="line2 show-date " d="22" m="11" y="2019" w="0" today="0"
                                        ymd="2019-12-22"><span>22</span></li>
                                    <li class="line2 show-date " d="23" m="11" y="2019" w="1" today="0"
                                        ymd="2019-12-23"><span>23</span></li>
                                    <li class="line2 show-date " d="24" m="11" y="2019" w="2" today="0"
                                        ymd="2019-12-24"><span>24</span></li>
                                    <li class="line2 show-date " d="25" m="11" y="2019" w="3" today="0"
                                        ymd="2019-12-25"><span>25</span></li>
                                    <li class="line2 show-date " d="26" m="11" y="2019" w="4" today="0"
                                        ymd="2019-12-26"><span>26</span></li>
                                    <li class="line2 show-date " d="27" m="11" y="2019" w="5" today="0"
                                        ymd="2019-12-27"><span>27</span></li>
                                    <li class="line2 show-date " d="28" m="11" y="2019" w="6" today="0"
                                        ymd="2019-12-28"><span>28</span></li>
                                    <li class="line2 show-date " d="29" m="11" y="2019" w="0" today="0"
                                        ymd="2019-12-29"><span>29</span></li>
                                    <li class="line2 show-date " d="30" m="11" y="2019" w="1" today="0"
                                        ymd="2019-12-30"><span>30</span></li>
                                    <li class="line2 show-date " d="31" m="11" y="2019" w="2" today="0"
                                        ymd="2019-12-31"><span>31</span></li>
                                    <li class="old line2"></li>
                                    <li class="old line2"></li>
                                    <li class="old line2"></li>
                                    <li class="old line2"></li>
                                </ul>
                            </div><span class="cal_next" id="nextMonth"></span>
                        </div>
                    </div>
                    
                    <div class="fl relave t-center  t-left people clearfloat">
                        <div class="theme c_gray f14 ">入住人数</div>
                        <div class="chose-people cursorpt input-box">
                            <span class="f18 c_gray_dark fw700" id="countVal">不限</span>
                        </div>

                        <div id="ruzhunum" class="search-modal radius-12 c_gray_dark"
                            _mayi_rp="webindex|condition|peopleNum" tabindex="4"
                            style="overflow: hidden; outline: none;">
                            <ul>
                                <li peoplenum="不限">不限</li>
                                <li peoplenum="1">1人</li>
                                <li peoplenum="2">2人</li>
                                <li peoplenum="3">3人</li>
                                <li peoplenum="4">4人</li>
                                <li peoplenum="5">5人</li>
                                <li peoplenum="6">6人</li>
                                <li peoplenum="7">7人</li>
                                <li peoplenum="8">8人</li>
                                <li peoplenum="9">9人+</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="fr relave search-btn f24 c_white fw600 t-center cursorpt" id="tosearchlist">搜索民宿</div>
            </div>
        </div>
        
        
        <div class="index-block" style="margin-top: 0px;">
            <div class="header clearfloat">
                <img class="fl" src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/sz/img/homestay.png">
                <div class="fl">
                    <h1 class="f28 c_gray_dark fw700">
                        民宿,旅途中的家
                    </h1>
                    <p class="f14 c_gray">
                        <span>谈笑有鸿儒，往来无白丁</span>
                    </p>
                </div>
            </div>
            <div class="content clearfloat homestay">
                
                <div class="fl f0">
                    <?php $_from = $this->_var['house_category']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('k', 'category');if (count($_from)):
    foreach ($_from AS $this->_var['k'] => $this->_var['category']):
?>
                    <?php if ($this->_var['k'] <= 3): ?>
                    <?php if ($this->_var['k'] == 1): ?>
                    <a class="relave radius-12 w515" href="<?php echo $this->_var['category']['url']; ?>">
                        <img class=" lazy" width="515" height="261"
                            alt="<?php echo $this->_var['category']['name']; ?>" src="<?php echo $this->_var['category']['cat_icon']; ?>"
                            style="display: inline;">
                        <span class="f20 c_gray_dark fw600"><?php echo $this->_var['category']['name']; ?></span>
                    </a>
                    <br>
                    <?php else: ?>
                    <a class="relave radius-12 w248 mt20 <?php if ($this->_var['k'] % 2 == 0): ?>mr20<?php endif; ?>" href="<?php echo $this->_var['category']['url']; ?>">
                        <img class="lazy" height="180"
                            width="248" alt="<?php echo $this->_var['category']['name']; ?>"
                            src="<?php echo $this->_var['category']['cat_icon']; ?>"
                            style="display: inline;">
                        <span class="f20 c_gray_dark fw600 three"><?php echo $this->_var['category']['name']; ?></span>
                    </a>
                    <?php endif; ?>
                    <?php endif; ?>
                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                </div>
                
                <div class="fr f0">
                    <?php $_from = $this->_var['house_category']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('k', 'category');if (count($_from)):
    foreach ($_from AS $this->_var['k'] => $this->_var['category']):
?>
                    <?php if ($this->_var['k'] > 3 && $this->_var['k'] <= 6): ?>
                    <?php if ($this->_var['k'] < 6): ?>
                    <a class="relave radius-12 w248 <?php if ($this->_var['k'] % 2 == 0): ?>mr20<?php endif; ?>" href="<?php echo $this->_var['category']['url']; ?>">
                        <img class="lazy" height="180"
                            width="248" alt="<?php echo $this->_var['category']['name']; ?>" src="<?php echo $this->_var['category']['cat_icon']; ?>"
                            style="display: inline;">
                        <span class="f20 c_gray_dark fw600 three"><?php echo $this->_var['category']['name']; ?></span>
                    </a>
                    <?php else: ?>
                    <br>
                    <a class="relave radius-12 w515 mt20" href="<?php echo $this->_var['category']['url']; ?>">
                        <img class="lazy" height="261" width="515"
                            alt="<?php echo $this->_var['category']['name']; ?>" src="<?php echo $this->_var['category']['cat_icon']; ?>"
                            style="display: inline;">
                        <span class="f20 c_gray_dark fw600"><?php echo $this->_var['category']['name']; ?></span>
                    </a>
                    <?php endif; ?>
                    <?php endif; ?>
                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                </div>
            </div>
        </div>
        
        <!-- <div class="index-block">
            <div class="header clearfloat">
                <img class="fl" src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/sz/img/theme_recommend.png">
                <div class="fl">
                    <h1 class="f28 c_gray_dark fw700">旅行主题推荐</h1>
                    <p class="f14 c_gray">
                        <span>有一种旅行，叫跋山涉水来睡你</span>
                    </p>
                </div>
            </div>
            <div class="content clearfloat" id="themeRecommend">
                <div class="fl f0">
                    <a class="inline-block w515 radius-12" href="http://www.mayi.com/beijing"
                        _mayi_rp="webindex|lvxing2|jt">
                        <img class="lazy" width="515" height="380"
                            data-original="//staticnew.mayi.com/resourcesWeb/v201807/index_page_new/images/family.jpg"
                            alt="家庭出游" src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/sz/img/family.jpg"
                            style="display: inline;">
                    </a>
                </div>
                <div class="fr f0">
                    <a class="inline-block radius-12 mr20 mb20" href="http://www.mayi.com/beijing"
                        _mayi_rp="webindex|lvxing2|sl">
                        <img class="lazy" width="248" height="180"
                            data-original="//staticnew.mayi.com/resourcesWeb/v201807/index_page_new/images/business.jpg"
                            alt="商旅出差" src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/sz/img/business.jpg"
                            style="display: inline;">
                    </a>
                    <a class="inline-block radius-12 mb20" href="http://www.mayi.com/beijing"
                        _mayi_rp="webindex|lvxing2|jh">
                        <img class="lazy" width="248" height="180"
                            data-original="//staticnew.mayi.com/resourcesWeb/v201807/index_page_new/images/party.jpg"
                            alt="聚会轰趴" src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/sz/img/party.jpg"
                            style="display: inline;">
                    </a>
                    <br>
                    <a class="inline-block radius-12 mr20" href="http://www.mayi.com/beijing"
                        _mayi_rp="webindex|lvxing2|zzyz">
                        <img class="lazy" width="248" height="180"
                            data-original="//staticnew.mayi.com/resourcesWeb/v201807/index_page_new/images/weekmonth.jpg"
                            alt="周租月租" src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/sz/img/weekmonth.jpg"
                            style="display: inline;">
                    </a>
                    <a class="inline-block radius-12" href="http://www.mayi.com/beijing" _mayi_rp="webindex|lvxing2|zk">
                        <img class="lazy" width="248" height="180"
                            data-original="//staticnew.mayi.com/resourcesWeb/v201807/index_page_new/images/discount.jpg"
                            alt="折扣房源" src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/sz/img/discount.jpg"
                            style="display: inline;">
                    </a>
                </div>
            </div>
        </div> -->
        
        <div class="index-block">
            <div class="header clearfloat">
                <img class="fl" src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/sz/img/hotplace.png">
                <div class="fl">
                    <h1 class="f28 c_gray_dark fw700">热门目的地,旅行资讯</h1>
                    <p class="f14 c_gray">
                        <span>灵魂和身体，总有一个在路上</span>
                    </p>
                </div>
            </div>
            <div class="content clearfloat">
                <?php if ($this->_var['travels']): ?>
                <?php $_from = $this->_var['travels']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'travel');if (count($_from)):
    foreach ($_from AS $this->_var['travel']):
?>
                <div class="fl t-left  mr20">
                    <div class="hot-place f0">
                        <a class="inline-block radius-12 w158" href="article.php?id=<?php echo $this->_var['travel']['article_id']; ?>">
                            <img class="lazy" width="158" height="220" alt="<?php echo $this->_var['travel']['keywords']; ?>" src="<?php echo $this->_var['travel']['file_url']; ?>" style="display: inline;">
                            <div class="info ">
                                <p class="fw600 f18"><span class="f12 "><?php echo $this->_var['travel']['title']; ?></span></p>
                            </div>
                        </a>
                    </div>
                </div>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                <?php endif; ?>
            </div>
        </div>
        
        <div class="intro-icon clearfloat t-center">
            <dl>
                <a href="#" target="_blank">
                    <dt><img src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/sz/img/realroom.png" alt="真实房源">
                    </dt>
                    <dd>
                        <p class="mt10 c_black f20">真实房源</p>
                        <p class="mt5 c_gray f14">上门实拍资质备案</p>
                    </dd>
                </a>
            </dl>
            <dl>
                <a href="#" target="_blank">
                    <dt><img src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/sz/img/happyin.png" alt="安心入住">
                    </dt>
                    <dd>
                        <p class="mt10 c_black f20">安心入住</p>
                        <p class="mt5 c_gray f14">到店无房赔付</p>
                    </dd>
                </a>
            </dl>
            <dl>
                <a href="#" target="_blank">
                    <dt><img src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/sz/img/zhima.png" alt="芝麻信用"></dt>
                    <dd>
                        <p class="mt10 c_black f20">芝麻信用</p>
                        <p class="mt5 c_gray f14">房东房客实名认证</p>
                    </dd>
                </a>
            </dl>

            <dl>
                <a href="#" target="_blank">
                    <dt><img src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/sz/img/pro-service.png" alt="专业客服">
                    </dt>
                    <dd>
                        <p class="mt10 c_black f20">专业客服</p>
                        <p class="mt5 c_gray f14">7 x 24小时</p>
                    </dd>
                </a>
            </dl>

        </div>
        
        <div class="advertisement">
            <div class="bx-wrapper" style="max-width: 100%;">
                <div class="bx-viewport" style="width: 100%; overflow: hidden; position: relative;">
                    <ul id="advertisement" style="width: 215%; position: relative;">
                    </ul>
                </div>
                <div class="bx-controls bx-has-pager bx-has-controls-direction">
                    <div class="bx-pager"></div>
                    <div class="bx-controls-direction">
                        <a class="bx-prev" href="#">Prev</a>
                        <a class="bx-next" href="#">Next</a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="index-block">
            <div class="header clearfloat">
                <img class="fl" src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/sz/img/haijingfang.png">
                <div class="fl">
                    <h1 class="f28 c_gray_dark fw700">特色民宿推荐</h1>
                    <p class="f14 c_gray">
                        <span>碧海蓝天金作沙, 椰风阵阵到天涯</span>
                    </p>
                </div>
            </div>
            <div class="content">
                <?php if ($this->_var['sgoods']): ?>
                <ul id="haijingfang" class="clearfloat">
                    <?php $_from = $this->_var['sgoods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
                    <li>
                        <a class="room_img" href="goods.php?id=<?php echo $this->_var['goods']['goods_id']; ?>" target="_blank">
                            <img class="radius-12 lazy" src="<?php echo $this->_var['goods']['goods_img']; ?>">
                            <div class="price">
                                <span class="f22 fw600 ">￥<?php echo $this->_var['goods']['shop_price']; ?></span>
                            </div>
                            
                        </a>
                        <div class="collect cursorpt <?php if ($this->_var['goods']['favorite'] == 1): ?>active<?php endif; ?>" title="未收藏" data-id="<?php echo $this->_var['goods']['goods_id']; ?>"></div>
                        <div class="info clearfloat">
                            <a href="goods.php?id=<?php echo $this->_var['goods']['goods_id']; ?>" target="_blank">
                                <div class="fl c_gray_dark f20">
                                    <h2 class="fw700 hidden-txt"><?php echo $this->_var['goods']['goods_name']; ?></h2>
                                    <p class="c_orange f14">
                                        <span><?php echo $this->_var['goods']['comments']['score']; ?></span>分
                                        ·
                                        <span class="c_gray_dark mr10 ml5"><?php echo $this->_var['goods']['comments']['allmen']; ?>条评价</span>
                                        <span class="f12 c_gray_light ver-t mr10">|</span>
                                        <span class="c_gray_dark ver-t"><?php echo $this->_var['goods']['goods_weight']; ?>居</span><span
                                            class="f12 c_gray_light ver-t ml10">|</span>
                                        <span class="c_gray_dark ml10">武汉</span>
                                    </p>
                                </div>
                            </a>
                            <?php if ($this->_var['goods']['store']['shop_logo']): ?>
                            <a href="goods.php?id=<?php echo $this->_var['goods']['goods_id']; ?>" target="_blank">
                                <img class="headimg fr circle" src="<?php echo $this->_var['goods']['store']['shop_logo']; ?>" alt="头像">
                            </a>
                            <?php endif; ?>
                        </div>
                    </li>
                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                </ul>

                <a href="category.php?id=<?php echo $this->_var['goods']['cat_id']; ?>&brand=<?php echo $this->_var['goods']['brand_id']; ?>" target="_blank">
                    <div class="more_btn f14 c_gray_dark t-center cursorpt">
                        查看更多
                    </div>
                </a>
                <?php endif; ?>
            </div>
        </div>
        
        <div class="index-block">
            <div class="header clearfloat">
                <img class="fl" src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/sz/img/preference.png">
                <div class="fl">
                    <h1 class="f28 c_gray_dark fw700">玖玖优质民宿</h1>
                    <p class="f14 c_gray">
                        <span>为你挑选出品质好、服务佳、设施全的优质房源</span>
                    </p>
                </div>
            </div>
            <div class="content">
                <?php if ($this->_var['hgoods']): ?>
                <ul id="preference" class="clearfloat">
                    <?php $_from = $this->_var['hgoods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
                    <li>
                        <a class="room_img" target="_blank" href="goods.php?id=<?php echo $this->_var['goods']['goods_id']; ?>">
                            <img class="radius-12 lazy" src="<?php echo $this->_var['goods']['goods_img']; ?>">
                            <div class="price">
                                <span class="f22 fw600 ">￥<?php echo $this->_var['goods']['shop_price']; ?></span>
                            </div>
                            
                        </a>
                        <div class="collect cursorpt <?php if ($this->_var['goods']['favorite'] == 1): ?>active<?php endif; ?>" title="未收藏" data-id="<?php echo $this->_var['goods']['goods_id']; ?>"></div>
                        <div class="info clearfloat">
                            <a href="http://www.mayi.com/room/851936298" target="_blank">
                                <div class="fl c_gray_dark f20">
                                    <h2 class="fw700 hidden-txt"><?php echo $this->_var['goods']['goods_name']; ?></h2>
                                    <p class="c_orange f14">
                                        <span>5.0</span>分
                                        ·
                                        <span class="c_gray_dark mr10 ml5"><?php echo $this->_var['goods']['comments']['allmen']; ?>条评价</span>
                                        <span class="f12 c_gray_light ver-t mr10">|</span>
                                        <span class="c_gray_dark ver-t"><?php echo $this->_var['goods']['goods_weight']; ?>居</span><span
                                            class="f12 c_gray_light ver-t ml10">|</span>
                                        <span class="c_gray_dark ml10">成都</span>
                                    </p>
                                </div>
                            </a>
                            <?php if ($this->_var['goods']['store']['shop_logo']): ?>
                            <a href="goods.php?id=<?php echo $this->_var['goods']['goods_id']; ?>" target="_blank">
                                <img class="headimg fr circle" src="" alt="头像">
                            </a>
                            <?php endif; ?>
                        </div>
                    </li>
                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                </ul>
                <a href="category.php?id=<?php echo $this->_var['goods']['cat_id']; ?>&brand=<?php echo $this->_var['goods']['brand_id']; ?>" target="_blank">
                    <div class="more_btn f14 c_gray_dark t-center cursorpt">
                        查看更多
                    </div>
                </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
    
    <div class="tag-bar"></div>
    
    <div class="totop-bar">
        <div class="tool radius-6">
            <p><a class="icon-ma pb10" href="http://www.mayi.com/activity/app50" title="二维码"></a></p>
            <!--<p><a class="icon-heart pb10" href="javascript:void(0);" title="收藏"></a></p>  -->
            <p><a class="icon-real pb10" href="http://www.mayi.com/supportplan" title="房客安心计划"></a></p>

            <ul class="hover-list radius-6 c_gray_dark t-center down-app">
                <li class="clearfloat">
                    <div class="fl">
                        <p class="f18 c_gray_dark mb10">扫码下载APP</p>
                        <img src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/sz/img/app.jpg" width="112"
                            alt="下载app">
                        <p class="f14">注册立送500元大礼包</p>
                    </div>
                    <div class="fr">
                        <div class="fl">
                            <p class="f18 c_gray_dark mb10">扫码快速预订</p>
                            <img src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/sz/img/JJ8GRMND8SDJCP267PTG7BW8S3AV5T.jpg"
                                width="112" alt="微信小程序">
                            <p class="f14">蚂蚁短租小程序</p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="totop mt10 radius-6 hidden" style="display: none;">
            <p><a class="icon-totop bor-none pb10" href="javascript:void(0);" title="返回顶部"></a></p>
        </div>

    </div>
    
    <div class="clear-modal">
        <div class="modal-box">
            <div class="modal-content t-center f14 c_gray_dark">
                足迹抹去无法再寻，确定清空？
            </div>
            <div class="modal-footer t-center clearfloat">
                <a href="javascript:void(0);" class="cancel-btn fl">取消</a>
                <a href="javascript:void(0);" class="sure-btn fr">清空</a>
            </div>
        </div>
    </div>
    
    <div id="floatingLayer">
        <div class="app-open" style="left: -100%; opacity: 0;">
            <div class="download_bg"></div>
            <div class="download_div w1000 clearfloat">
                
                <img class="download_app"
                    src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/sz/img/XXTXYA8RFP49U9HNPXYYGNUN4EMM2Y.jpg"
                    alt="">
                <div class="app_code">
                    <p>
                        扫描下载APP
                        <br>
                        立享优惠
                    </p>
                    <span style="display:block;padding:3px;background:#fff;width:90px;margin:0 auto;height: 90px;">
                        <img src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/sz/img/app.jpg" alt=""
                            style="width:100%;">
                    </span>
                </div>
                <div class="download_phone">
                    <img src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/sz/img/download_phone.png" alt="">
                </div>
                <div class="app_code">
                    <p>
                        关注微信公众号
                        <br>
                        更多福利更多资讯
                    </p>
                    <img src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/sz/img/weixin_ma.png" alt="">
                </div>
                <div class="btn-close">
                    <img src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/sz/img/btn-close.png" alt="">
                </div>
            </div>
        </div>
    </div>
    
    <div id="" style="display:none">
        <a href="http://www.mayi.com/tp_warmwinter/">
            <div class="app-open" style="left: -100%; width: 100%; height: 152px; opacity: 0;">
                <img src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/sz/img/TYD5GQGUY4B2RL6FRNFW5VQG42EKZZ.jpg"
                    alt=""
                    style="position:absolute;top:0;left:50%;margin-left:-960px;width:1920px;height:170px;vertical-align:top;display:block;">
                <div class="download_div w820">
                    <div class="btn-close r_80">
                        <img src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/sz/img/btn-close.png">
                    </div>
                </div>
            </div>
        </a>
        <div class="app-close" style="left: 0%;">
            <div class="background-img">
                <img src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/sz/img/FMBCEL94XASRULCA2K5EL6FS8U67UQ.jpg">
            </div>
        </div>
    </div>
    <div class="share_tan" style="display: none">
        <div class="mask"></div>
        <div class="hongbao_img">
            <img src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/sz/img/close.png" alt="" class="hong_close">
            <img src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/sz/img/hongbao1.png" alt="" class="hongbao">
            <div id="qrcode" class="ewm_img"><canvas width="100" height="100"></canvas></div>
            <p class="text_para">扫码后，通过分享活动邀请好友注册蚂蚁短租，双方均可获得100元住宿基金！</p>
        </div>
    </div>
    
    
    <div class="foot">
        <div class="w1050 pb20 clearfloat">

            <div class="footer pt30 over-hidden pb20">
                <ul>
                    <li>
                        <h3 class="f16 mb10">联系我们</h3>
                        <p class="mb15">客户服务</p>
                        <p class="f22"><?php echo $this->_var['service_phone']; ?></p>
                        <p>Email：<?php echo $this->_var['service_email']; ?></p>
                        <p class="mb10 mt25">商务合作</p>
                        <p>QQ：<?php $_from = $this->_var['qq']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'q');if (count($_from)):
    foreach ($_from AS $this->_var['q']):
?><?php echo $this->_var['q']; ?><?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?></p>
                        <p>Email：<?php echo $this->_var['email']; ?></p>
                    </li>
                    <?php $_from = $this->_var['helps']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'help');$this->_foreach['no'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['no']['total'] > 0):
    foreach ($_from AS $this->_var['help']):
        $this->_foreach['no']['iteration']++;
?>
                    <?php if ($this->_foreach['no']['iteration'] < 6): ?>
                    <li>
                        <h3 class="f16 mb10"><?php echo $this->_var['help']['cat_name']; ?></h3>
                        <?php $_from = $this->_var['help']['article']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');$this->_foreach['help_cat'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['help_cat']['total'] > 0):
    foreach ($_from AS $this->_var['item']):
        $this->_foreach['help_cat']['iteration']++;
?>
                        <?php if ($this->_foreach['help_cat']['iteration'] < 4): ?>
                        <p>
                            <a href="<?php echo $this->_var['item']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['item']['title']); ?>" target="_blank"><?php echo $this->_var['item']['short_title']; ?></a>
                        </p>
                        <?php endif; ?>
                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                    </li>
                    <?php endif; ?>
                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                </ul>
            </div>
            
            <div class="link_end">
                <div class="city_classify">
                    <ul class="clearfloat">
                        <li class="choiced_bg_color">热门城市</li>
                        <li class="">网站导航</li>
                        <li class="">友情链接</li>
                    </ul>
                </div>
                <div class="big_classify_box">
                    <div class="classify_box" style="display: block;">
                        <ul class="clearfloat">
                            <li>
                                <a target="_blank" title="青岛" href="#">青岛日租房</a>
                            </li>
                        </ul>
                        <div class="footer_open" style="display: block;"></div>
                        <div class="footer_close" style="display: none;"></div>
                    </div>
                    
                    <div class="classify_box" style="display: none;">
                        <?php if ($this->_var['navigator_list']['bottom']): ?>
                        <ul class="clearfloat">
                            <?php $_from = $this->_var['navigator_list']['bottom']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav');$this->_foreach['nav_bottom_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_bottom_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav']):
        $this->_foreach['nav_bottom_list']['iteration']++;
?>
                            <li>
                                <a <?php if ($this->_var['nav']['opennew'] == 1): ?>target="_blank"<?php endif; ?> title="<?php echo $this->_var['nav']['name']; ?>" href="<?php echo $this->_var['nav']['url']; ?>"><?php echo $this->_var['nav']['name']; ?></a>
                            </li>
                            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                        </ul>
                        <?php endif; ?>
                    </div>
                    
                    
                    <div class="classify_box" style="display: none;">
                        <ul class="clearfloat">
                            <?php if ($this->_var['img_links'] || $this->_var['txt_links']): ?>
                            
                            <?php $_from = $this->_var['img_links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'link');if (count($_from)):
    foreach ($_from AS $this->_var['link']):
?>
                            <li>
                                <a target="_blank" href="<?php echo $this->_var['link']['url']; ?>" title="<?php echo $this->_var['link']['name']; ?>"><?php echo $this->_var['link']['name']; ?></a>
                            </li>
                            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                            
                            <?php $_from = $this->_var['txt_links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'link');$this->_foreach['nolink'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nolink']['total'] > 0):
    foreach ($_from AS $this->_var['link']):
        $this->_foreach['nolink']['iteration']++;
?>
                            <li>
                                <a target="_blank" href="<?php echo $this->_var['link']['url']; ?>" title="<?php echo $this->_var['link']['name']; ?>"><?php echo $this->_var['link']['name']; ?></a>
                            </li>
                            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                            <?php endif; ?>
                        </ul>
                        <div class="footer_open" style="display: block;"></div>
                        <div class="footer_close" style="display: none;"></div>
                    </div>
                    
                </div>
            </div>
            <div class="mt40">
                <?php if ($this->_var['navigator_list']['bottom']): ?>
                <p class="t-center f12 c777776">
                    <?php $_from = $this->_var['navigator_list']['bottom']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav');$this->_foreach['nav_bottom_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_bottom_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav']):
        $this->_foreach['nav_bottom_list']['iteration']++;
?>
                    <a  class="c777776" href="<?php echo $this->_var['nav']['url']; ?>" <?php if ($this->_var['nav']['opennew'] == 1): ?> target="_blank" <?php endif; ?> >&nbsp;&nbsp;<?php echo $this->_var['nav']['name']; ?></a>
                    &nbsp;&nbsp;
                    <?php if (! ($this->_foreach['nav_bottom_list']['iteration'] == $this->_foreach['nav_bottom_list']['total'])): ?>
                    |
                    <?php endif; ?>
                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                </p>
                <?php endif; ?>
                
                <?php if ($this->_var['icp_number']): ?>
                <p class="t-center f12 c777776">
                    &copy;&nbsp;2015-<?php echo date('Y')?>&nbsp;<?php echo $GLOBALS['_CFG']['shop_name'];?>&nbsp;版权所有&nbsp;&nbsp;
                    <a class="c777776" href="http://www.miibeian.gov.cn/" target="_blank"><?php echo $this->_var['lang']['icp_number']; ?>:<?php echo $this->_var['icp_number']; ?></a>
                <p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</body>
<script>
    // 导航
    $(".nav.index_nav .nav-list li").hover(function () {
        $(this).children(".hover-list").show();
        $(this).siblings("li").children(".hover-list").hide()
    }, function () {
        $(this).children(".hover-list").hide();
    })
    //登录
    $("#loginshow").on("click", function () {
        location.href = "/user.php"
    })
    //底部
    $(".city_classify li").hover(function(){
        var index = $(this).index();
        $(this).addClass('choiced_bg_color')
        $(this).siblings().removeClass('choiced_bg_color')
        $(".big_classify_box .classify_box").hide()
        $(".big_classify_box .classify_box").eq(index).show()
    },function(){

    })
    //收藏
    $(".collect").on('click',function(){
        var goods_id = $(this).attr('data-id');
        $.ajax({
            url:'user.php?act=collect',
            type:'GET',
            dataType:'json',
            data:{id:goods_id},
            success:function(res){
                if(res.error !=2){
                    
                }else{
                    // 登录弹框
                    $.ajax({
                        url:'get_ajax_content.php?act=get_login_dialog',
                        type:'POST',
                        dataType:'json',
                        data:{back_act:'index.php'},
                        success:function(re){
                        
                            $.pb({
                                id:"loginDialogBody",
                                title:'您尚未登录',
                                width:380,
                                height:430,
                                content:re.content, 	//调取内容
                                drag:false,
                                foot:false
                            });
                            
                        }
                    })

                }
            }
        })
    })
    //轮播
    var silder = {
        ele:'#banner',
        isauto:true,
        time:5000,
        current:0,
        init:function(ele){
            var e = $(ele) || $(this.ele),_self=this;
            _self.change(0);
            if(_self.isauto){
                setInterval(function(){
                    _self.next();
                },_self.time);
            }
            return _self;
        },
        get_current:function(){
            var e = $(this.ele),current=0,children = e.children('li'),_self = this;

            for(var i=0;i<children.length;i++){
                
                if($(children[i]).css('zIndex') == 50){
                    current = i;
                    break;
                }
            }
            _self.current = current;
            return current;
        },
        next:function(){
            var current = this.get_current() +1;
            this.change(current);
        },
        prev:function(){
            var current = this.get_current() - 1;
            this.change(current);
        },
        change:function(current){
            var children = $(this.ele).children('li'),btn = $("#silder-btn .bx-pager-item");
            current = current > children.length -1 ? 0 :(current < 0 ? children.length-1 :current);
            btn.eq(current).siblings('.bx-pager-item').children('a').removeClass('active');
            children.eq(current).siblings('li').css({'zIndex':0}).hide();
            btn.eq(current).children('a').addClass('active');
            children.eq(current).css('zIndex',50).fadeIn(1000);
        }
    }
    var s = silder.init();
    $("#silder-change .bx-prev").on('click',function(){
        s.prev()
    })
    $("#silder-change .bx-next").on('click',function(){
        s.next()
    })
    //end轮播
</script>

</html>