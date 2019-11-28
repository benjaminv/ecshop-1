<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />

<title><?php echo $this->_var['page_title']; ?></title>



<link rel="shortcut icon" href="favicon.ico" />


<link rel="stylesheet" href="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/sz/mayi_base.css">
<link rel="stylesheet" href="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/sz/public.css">
<link rel="stylesheet" href="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/sz/jquery.bxslider.css">
<link rel="stylesheet" href="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/sz/layer.css">
<link rel="stylesheet" href="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/sz/new_calendar.css">
<link rel="stylesheet" href="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/sz/index.css">
<link rel="stylesheet" href="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/sz/laxin.css">
<link rel="stylesheet" href="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/sz/chatStyle.css">

</head>
<body>
    
    <div class="header">
        <div class="nav index_nav line_h70">
            <div class="w1050 c_white clearfloat">
                <div class="logo fl">
                    <a href="http://www.mayi.com/"><img src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/sz/img/logo.png" width="40" alt="logo"></a>
                </div>
                <ul class="fr nav-list clearfloat">
                    <li>
                        <p class="top-line"></p>
                        <span class="service fw600 f14">客服热线</span>
                        <ul class="hover-list radius-6 c_gray_dark t-center">
                            <li>400-028-6868</li>
                        </ul>
                    </li>
                    <li>
                        <p class="top-line"></p>
                        <a class="app fw600 f14 c_white" target="_blank" href="http://www.mayi.com/activity/app50">下载APP送500元大礼包</a>
                        <ul class="hover-list radius-6 c_gray_dark t-center down-app" style="display: none;">
                            <li class="clearfloat">
                                <div class="fl">
                                    <p class="f18 c_gray_dark mb10">扫码下载APP</p>
                                    <img src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/sz/img/app.jpg" width="112" alt="下载app">
                                    <p class="f14">注册立送500元大礼包</p>
                                </div>
                                <div class="fr">
                                    <div class="fl">
                                        <p class="f18 c_gray_dark mb10">扫码快速预订</p>
                                        <img src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/sz/img/JJ8GRMND8SDJCP267PTG7BW8S3AV5T.jpg" width="112" alt="微信小程序">
                                        <p class="f14">蚂蚁短租小程序</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <p class="top-line"></p>
                        <a class="f14 fw600 c_white" target="_blank" href="http://www.mayi.com/company/index">商旅合作</a>
                    </li>
                    <li>
                        <p class="top-line"></p>
                        <a class="fw600 f14 c_white" href="javascript:void(0);">
                            帮助中心
                        </a>
                        <ul class="hover-list radius-6 c_gray_dark t-left left42">
                            <li class="mb10">
                                <a class="c_gray_dark" target="_blank" href="http://www.mayi.com/questions/?flag=1">搜索房源</a>
                            </li>
                            <li class="mb10">
                                <a class="c_gray_dark" target="_blank" href="http://www.mayi.com/questions/?flag=3">预订房源</a>
                            </li>
                            <li class="mb10">
                                <a class="c_gray_dark" target="_blank" href="http://www.mayi.com/questions/?flag=5">订单操作</a>
                            </li>
                            <li class="mb10">
                                <a class="c_gray_dark" target="_blank" href="http://www.mayi.com/questions/?flag=7">入住评论</a>
                            </li>
                            <li>
                                <a class="c_gray_dark" target="_blank" href="http://www.mayi.com/questions/?flag=0">更多</a>
                            </li>
                        </ul>
                    </li>
                    <li class="ml20 user-action">
                           <div class="login-btn t-center fw600 cursorpt " id="loginshow">登录/注册</div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="banner clearfloat">
            <div class="bx-wrapper" style="max-width: 100%;"><div class="bx-viewport" style="width: 100%; overflow: hidden; position: relative; height: 560px;"><ul id="banner" style="width: auto; position: relative;">
                <li style="float: none; list-style: none; position: absolute; display: none; width: 1903px; z-index: 0;">
                    <img src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/sz/img/FPRM3Z7YH3P2JUTP6SNQN25QBR43T8.jpg" alt="banner1">
                    <div class="w1050">
                       <div class="banner-text">
                            <p class="c_white f36 fw700">蚂蚁短租</p>
                            <p class="c_white f48 fw700">家庭出游新选择</p>
                            <p class="c_white f18">2000万用户的放心选择</p> 
                        </div>
					 </div>
	            </li>
                
			         <li style="float: none; list-style: none; position: absolute; width: 1903px; z-index: 50; display: list-item;">
		             	   <a href="http://www.mayi.com/room/851895184" target="_blank" _mayi_rp="webindex|banner|851895184">
				                    <img src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/sz/img/9GTZMMG2W5Y3JVCL9JCSRX7QWQT6WG.jpg" alt="banner2">
				                    <div class="w1050">
				                        <div class="room-info clearfloat w1050">
				                            <img class="fr circle ml15" src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/sz/img/4EGXGTMT66LWSQEHQ7SAQKZA6AXHTE.jpg_35x35c.jpg" alt="头像">
				                            <div class="fr">
				                                <p class="local t-right"><span class="radius-6 f14 c_gray_dark fw600">大理</span></p>
				                                <p class="c_white f14 fw600">大理古城幽兰尚居 花朝双床房</p>
				                            </div>
				                        </div>
				                    </div>
				           </a>
			            </li>
			         <li style="float: none; list-style: none; position: absolute; width: 1903px; z-index: 0; display: none;">
		             	   <a href="http://www.mayi.com/room/852832929" target="_blank" _mayi_rp="webindex|banner|852832929">
				                    <img src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/sz/img/QGGYU2SNTBHH38ZR8TWLSGHZ9LY9NM.jpg" alt="banner2">
				                    <div class="w1050">
				                        <div class="room-info clearfloat w1050">
				                            <img class="fr circle ml15" src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/sz/img/V24CGB95HAH6W5X6SJ5C53DY35EHS2.jpg_35x35c.jpg" alt="头像">
				                            <div class="fr">
				                                <p class="local t-right"><span class="radius-6 f14 c_gray_dark fw600">武汉</span></p>
				                                <p class="c_white f14 fw600">花与画/武昌火车站/户部巷/高层观景房</p>
				                            </div>
				                        </div>
				                    </div>
				           </a>
			            </li>
            </ul></div><div class="bx-controls bx-has-pager bx-has-controls-direction"><div class="bx-pager bx-default-pager"><div class="bx-pager-item"><a href="http://www.mayi.com/index.html" data-slide-index="0" class="bx-pager-link">1</a></div><div class="bx-pager-item"><a href="http://www.mayi.com/index.html" data-slide-index="1" class="bx-pager-link active">2</a></div><div class="bx-pager-item"><a href="http://www.mayi.com/index.html" data-slide-index="2" class="bx-pager-link">3</a></div></div><div class="bx-controls-direction"><a class="bx-prev" href="http://www.mayi.com/index.html">Prev</a><a class="bx-next" href="http://www.mayi.com/index.html">Next</a></div></div></div>
        </div>
    </div>
    
    <div class="container w1050">
        
        <div class="search radius-12">
        	<ul class="search_tab clearfloat">
                <li id="search_inland" class="search_inland active" _mayi_rp="webindex|searchtab|searchinland">国内</li>
                <li id="search_overseas" class="search_overseas" _mayi_rp="webindex|searchtab|searchoverseas">海外<span class="hot-icon"></span></li>
            </ul>
            <div class="clearfloat">
            	<div class="fl clearfloat search-input-block">
                
                <div class="fl relave t-left place clearfloat">
                    <div class="theme c_gray f14">目的地</div>
                    <div class="input-box active">
                        <input class="f18 c_gray_light fw700" id="searchcityin" onkeydown="pressEve(event);" onkeyup="getSuggests(event,0);" type="text" placeholder="城市、景点、商圈">
                        <span class="circle" id="clearCityInfo" style="display: none;">×</span>
                    </div>
							
		                    <div class="suggest_results search-modal has-words radius-12 c_gray_dark" id="suggest" tabindex="0" style="overflow: hidden; outline: none;">
		                        <ul id="suggestul">
		                            
		                        </ul>
		                    </div>
	                        <div class="error_tip_list search-modal radius-12" id="tip_searchcity" tabindex="1" style="overflow: hidden; outline: none;">关键词无结果</div>
                            
		                    <div class="select-hotcity clearfloat search-modal radius-12 c_gray_dark" id="searchcitydiv" name="searchcitydiv" tabindex="2" style="overflow: hidden; outline: none; display: none;">
		                    	 <ul class="clearfloat city_tab">
		                            <li id="city_inland" class="city_inland active" _mayi_rp="webindex|searchtab|cityinland">国内·港澳台</li>
		                            <li id="city_overseas" class="city_overseas" _mayi_rp="webindex|searchtab|cityoverseas">海外<span class="hot-icon"></span></li>
		                         </ul>
								 <div class="searh-recent clearfloat history">
			                            <p class="w100 clearfloat"><span class="searh-tit fl fw700">历史搜索</span><span class="cleartrace fr clear" onclick="return Bind_Click(this);" _mayi_rp="webindex|condition|clearHistory"></span></p>
			                            <ul id="searh-recent" class="clearfloat citys">
			                            </ul>
		                         </div>
		                         <ul class="select-title clearfloat tab" id="cityselecttitleul">
		                            <li class="active"><a value="hotcity" id="hotcity" class="selected" href="javascript:void(0)"></a></li>
		                            <li><a value="a_b_c_d" id="a_b_c_d" href="javascript:void(0)" class="">ABCD</a></li>
		                            <li><a value="e_f_g_h" id="e_f_g_h" href="javascript:void(0)" class="">EFGH</a></li>
		                            <li><a value="j_k_l_m" id="j_k_l_m" href="javascript:void(0)" class="">JKLM</a></li>
		                            <li><a value="n_p_q_r" id="n_p_q_r" href="javascript:void(0)" class="">NPQR</a></li>
		                            <li><a value="s_t_w" id="s_t_w" href="javascript:void(0)" class="">STW</a></li>
		                            <li><a value="x_y_z" id="x_y_z" href="javascript:void(0)">XYZ</a></li>
		                         </ul>
		                         <ul class="select-citycon clearfloat tab-content" id="cityselectul" name="cityselectul" tabindex="5" style="overflow: hidden; outline: none;">
		                         </ul>
		                        <!-- <div class="hotmore hint f12 c_gray" >温馨提示：支持中文/拼音/简拼输入</div> -->
		                    <div id="ascrail2005" class="nicescroll-rails nicescroll-rails-vr" style="width: 8px; z-index: 10000; cursor: default; position: absolute; top: 1px; left: 582px; height: 20px; touch-action: none; display: none;"><div class="nicescroll-cursors" style="position: relative; top: 0px; float: right; width: 6px; height: 0px; background-color: rgb(72, 72, 72); border: 1px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 100px; touch-action: none;"></div></div><div id="ascrail2005-hr" class="nicescroll-rails nicescroll-rails-hr" style="height: 8px; z-index: 10000; top: 13px; left: 0px; position: absolute; cursor: default; display: none;"><div class="nicescroll-cursors" style="position: absolute; top: 0px; height: 6px; width: 0px; background-color: rgb(72, 72, 72); border: 1px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 100px;"></div></div></div>
                </div>
                
                <div class="fl t-center time clearfloat" id="calendar_group">
                    <div class="theme c_gray f14 t-left">住宿日期</div>
                    <div class="input-box">
                        <input id="checkinday" readonly="" class="f18 c_gray_light fw700" type="text" placeholder="入住日期">
                        <input id="checkinday_value" type="hidden">
                        <div class="count">
                            <span class="f12 c_gray_dark" id="zrdays">0晚</span>
                        </div>
                        <input id="checkoutday" readonly="" class="f18 c_gray_light fw700" type="text" placeholder="退房日期">
                        <input id="checkoutday_value" type="hidden">
                    </div>
                    <span class="circle clear" id="clearSelect" style="display: none;" _mayi_rp="webindex|condition|clearCalendar">×</span>
                    <div id="index_list_calendar-box" class="hidden search-modal" tabindex="3" style="overflow: hidden; outline: none; display: none;"><div class="calendar-month paddingR10"><div class="calendar-title width_274"><h2 cury="2019" curm="11">2019-11</h2></div><ul class="calendar-week"><li class="pink red">日</li><li>一</li><li>二</li><li>三</li><li>四</li><li>五</li><li class="pink red">六</li></ul><ul class="calendar-day"><li class="old line2"></li><li class="old line2"></li><li class="old line2"></li><li class="old line2"></li><li class="old line2"></li><li class="line2 old " d="1" m="10" y="2019" w="5" today="0" ymd="2019-11-01"><span>1</span></li><li class="line2 old " d="2" m="10" y="2019" w="6" today="0" ymd="2019-11-02"><span>2</span></li><li class="line2 old " d="3" m="10" y="2019" w="0" today="0" ymd="2019-11-03"><span>3</span></li><li class="line2 old " d="4" m="10" y="2019" w="1" today="0" ymd="2019-11-04"><span>4</span></li><li class="line2 old " d="5" m="10" y="2019" w="2" today="0" ymd="2019-11-05"><span>5</span></li><li class="line2 old " d="6" m="10" y="2019" w="3" today="0" ymd="2019-11-06"><span>6</span></li><li class="line2 old " d="7" m="10" y="2019" w="4" today="0" ymd="2019-11-07"><span>7</span></li><li class="line2 old " d="8" m="10" y="2019" w="5" today="0" ymd="2019-11-08"><span>8</span></li><li class="line2 old " d="9" m="10" y="2019" w="6" today="0" ymd="2019-11-09"><span>9</span></li><li class="line2 old " d="10" m="10" y="2019" w="0" today="0" ymd="2019-11-10"><span>10</span></li><li class="line2 old " d="11" m="10" y="2019" w="1" today="0" ymd="2019-11-11"><span>11</span></li><li class="line2 old " d="12" m="10" y="2019" w="2" today="0" ymd="2019-11-12"><span>12</span></li><li class="line2 old " d="13" m="10" y="2019" w="3" today="0" ymd="2019-11-13"><span>13</span></li><li class="line2 old " d="14" m="10" y="2019" w="4" today="0" ymd="2019-11-14"><span>14</span></li><li class="line2 old " d="15" m="10" y="2019" w="5" today="0" ymd="2019-11-15"><span>15</span></li><li class="line2 old " d="16" m="10" y="2019" w="6" today="0" ymd="2019-11-16"><span>16</span></li><li class="line2 old " d="17" m="10" y="2019" w="0" today="0" ymd="2019-11-17"><span>17</span></li><li class="line2 old " d="18" m="10" y="2019" w="1" today="0" ymd="2019-11-18"><span>18</span></li><li class="line2 old " d="19" m="10" y="2019" w="2" today="0" ymd="2019-11-19"><span>19</span></li><li class="line2 old " d="20" m="10" y="2019" w="3" today="0" ymd="2019-11-20"><span>20</span></li><li class="line2 old " d="21" m="10" y="2019" w="4" today="0" ymd="2019-11-21"><span>21</span></li><li class="line2 old " d="22" m="10" y="2019" w="5" today="0" ymd="2019-11-22"><span>22</span></li><li class="line2 old " d="23" m="10" y="2019" w="6" today="0" ymd="2019-11-23"><span>23</span></li><li class="line2 old " d="24" m="10" y="2019" w="0" today="0" ymd="2019-11-24"><span>24</span></li><li class="line2 old " d="25" m="10" y="2019" w="1" today="0" ymd="2019-11-25"><span>25</span></li><li class="line2 old " d="26" m="10" y="2019" w="2" today="0" ymd="2019-11-26"><span>26</span></li><li class="line2 old " d="27" m="10" y="2019" w="3" today="0" ymd="2019-11-27"><span>27</span></li><li class="line2 show-date " d="28" m="10" y="2019" w="4" today="1" ymd="2019-11-28"><span>今天</span></li><li class="line2 show-date " d="29" m="10" y="2019" w="5" today="0" ymd="2019-11-29"><span>29</span></li><li class="line2 show-date " d="30" m="10" y="2019" w="6" today="0" ymd="2019-11-30"><span>30</span></li></ul></div><div class="calendar-month"><div class="calendar-title"><h2 cury="2019" curm="12">2019-12</h2></div><ul class="calendar-week"><li class="pink red">日</li><li>一</li><li>二</li><li>三</li><li>四</li><li>五</li><li class="pink red">六</li></ul><ul class="calendar-day"><li class="line2 show-date " d="1" m="11" y="2019" w="0" today="0" ymd="2019-12-01"><span>1</span></li><li class="line2 show-date " d="2" m="11" y="2019" w="1" today="0" ymd="2019-12-02"><span>2</span></li><li class="line2 show-date " d="3" m="11" y="2019" w="2" today="0" ymd="2019-12-03"><span>3</span></li><li class="line2 show-date " d="4" m="11" y="2019" w="3" today="0" ymd="2019-12-04"><span>4</span></li><li class="line2 show-date " d="5" m="11" y="2019" w="4" today="0" ymd="2019-12-05"><span>5</span></li><li class="line2 show-date " d="6" m="11" y="2019" w="5" today="0" ymd="2019-12-06"><span>6</span></li><li class="line2 show-date " d="7" m="11" y="2019" w="6" today="0" ymd="2019-12-07"><span>7</span></li><li class="line2 show-date " d="8" m="11" y="2019" w="0" today="0" ymd="2019-12-08"><span>8</span></li><li class="line2 show-date " d="9" m="11" y="2019" w="1" today="0" ymd="2019-12-09"><span>9</span></li><li class="line2 show-date " d="10" m="11" y="2019" w="2" today="0" ymd="2019-12-10"><span>10</span></li><li class="line2 show-date " d="11" m="11" y="2019" w="3" today="0" ymd="2019-12-11"><span>11</span></li><li class="line2 show-date " d="12" m="11" y="2019" w="4" today="0" ymd="2019-12-12"><span>12</span></li><li class="line2 show-date " d="13" m="11" y="2019" w="5" today="0" ymd="2019-12-13"><span>13</span></li><li class="line2 show-date " d="14" m="11" y="2019" w="6" today="0" ymd="2019-12-14"><span>14</span></li><li class="line2 show-date " d="15" m="11" y="2019" w="0" today="0" ymd="2019-12-15"><span>15</span></li><li class="line2 show-date " d="16" m="11" y="2019" w="1" today="0" ymd="2019-12-16"><span>16</span></li><li class="line2 show-date " d="17" m="11" y="2019" w="2" today="0" ymd="2019-12-17"><span>17</span></li><li class="line2 show-date " d="18" m="11" y="2019" w="3" today="0" ymd="2019-12-18"><span>18</span></li><li class="line2 show-date " d="19" m="11" y="2019" w="4" today="0" ymd="2019-12-19"><span>19</span></li><li class="line2 show-date " d="20" m="11" y="2019" w="5" today="0" ymd="2019-12-20"><span>20</span></li><li class="line2 show-date " d="21" m="11" y="2019" w="6" today="0" ymd="2019-12-21"><span>21</span></li><li class="line2 show-date " d="22" m="11" y="2019" w="0" today="0" ymd="2019-12-22"><span>22</span></li><li class="line2 show-date " d="23" m="11" y="2019" w="1" today="0" ymd="2019-12-23"><span>23</span></li><li class="line2 show-date " d="24" m="11" y="2019" w="2" today="0" ymd="2019-12-24"><span>24</span></li><li class="line2 show-date " d="25" m="11" y="2019" w="3" today="0" ymd="2019-12-25"><span>25</span></li><li class="line2 show-date " d="26" m="11" y="2019" w="4" today="0" ymd="2019-12-26"><span>26</span></li><li class="line2 show-date " d="27" m="11" y="2019" w="5" today="0" ymd="2019-12-27"><span>27</span></li><li class="line2 show-date " d="28" m="11" y="2019" w="6" today="0" ymd="2019-12-28"><span>28</span></li><li class="line2 show-date " d="29" m="11" y="2019" w="0" today="0" ymd="2019-12-29"><span>29</span></li><li class="line2 show-date " d="30" m="11" y="2019" w="1" today="0" ymd="2019-12-30"><span>30</span></li><li class="line2 show-date " d="31" m="11" y="2019" w="2" today="0" ymd="2019-12-31"><span>31</span></li><li class="old line2"></li><li class="old line2"></li><li class="old line2"></li><li class="old line2"></li></ul></div><span class="cal_next" id="nextMonth"></span></div>
                </div>
                
                <div class="fl relave t-center  t-left people clearfloat">
                    <div class="theme c_gray f14 ">入住人数</div>
                    <div class="chose-people cursorpt input-box">
                        <span class="f18 c_gray_dark fw700" id="countVal">不限</span>
                    </div>

                    <div id="ruzhunum" class="search-modal radius-12 c_gray_dark" _mayi_rp="webindex|condition|peopleNum" tabindex="4" style="overflow: hidden; outline: none;">
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
                <div class="fr relave search-btn f24 c_white fw600 t-center cursorpt" id="tosearchlist" _mayi_rp="webindex|condition|button">搜索民宿</div>
            </div>
        </div>
        
        
        
        <div class="index-block" style="margin-top: 0px;">
            <div class="header clearfloat">
                <img class="fl" src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/sz/img/homestay.png">
                <div class="fl">
                    <h1 class="f28 c_gray_dark fw700">旅行，就要住民宿</h1>
                    <p class="f14 c_gray">
                        <span>谈笑有鸿儒，往来无白丁</span>
                        <!--<span class="clear c_green fw600 cursorpt">清除足迹</span>-->
                    </p>
                </div>
            </div>
            <div class="content clearfloat homestay">
                <div class="fl f0">
                    <a class="relave radius-12 w515" href="http://www.mayi.com/beijing" _mayi_rp="webindex|lvxing1|mj">
                        <img class=" lazy" width="515" height="261" data-original="//staticnew.mayi.com/resourcesWeb/v201807/index_page_new/images/houses.jpg" alt="民居" src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/sz/img/houses.jpg" style="display: inline;">
                        <span class="f20 c_gray_dark fw600">民居</span>
                    </a>
                    <br>
                    <a class="relave radius-12 w248 mr20 mt20" href="http://www.mayi.com/shanghai" _mayi_rp="webindex|lvxing1|lyf">
                        <img class="lazy" height="180" data-original="//staticnew.mayi.com/resourcesWeb/v201807/index_page_new/images/oldhouse.jpg" width="248" alt="老洋房" src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/sz/img/oldhouse.jpg" style="display: inline;">
                        <span class="f20 c_gray_dark fw600 three">老洋房</span>
                    </a>
                    <a class="relave radius-12 w248 mt20" href="http://www.mayi.com/qingdao" _mayi_rp="webindex|lvxing1|hjf">
                        <img class="lazy" height="180" data-original="//staticnew.mayi.com/resourcesWeb/v201807/index_page_new/images/seaview.jpg" width="248" alt="海景房" src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/sz/img/seaview.jpg" style="display: inline;">
                        <span class="f20 c_gray_dark fw600 three">海景房</span>
                    </a>
                </div>
                <div class="fr f0">
                    <a class="relave radius-12 w248 mr20" href="http://www.mayi.com/lijiang" _mayi_rp="webindex|lvxing1|kz">
                        <img class="lazy" height="180" data-original="//staticnew.mayi.com/resourcesWeb/v201807/index_page_new/images/inn.jpg" width="248" alt="客栈" src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/sz/img/inn.jpg" style="display: inline;">
                        <span class="f20 c_gray_dark fw600">客栈</span>
                    </a>
                    <a class="relave radius-12 w248" href="http://www.mayi.com/beijing" _mayi_rp="webindex|lvxing1|bs">
                        <img class="lazy" height="180" data-original="//staticnew.mayi.com/resourcesWeb/v201807/index_page_new/images/villa.jpg" width="248" alt="别墅" src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/sz/img/villa.jpg" style="display: inline;">
                        <span class="f20 c_gray_dark fw600">别墅</span>
                    </a>
                    <br>
                    <a class="relave radius-12 w515 mt20" href="http://www.mayi.com/beijing" _mayi_rp="webindex|lvxing1|gy">
                        <img class="lazy" height="261" width="515" data-original="//staticnew.mayi.com/resourcesWeb/v201807/index_page_new/images/apartment.jpg" alt="公寓" src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/sz/img/apartment.jpg" style="display: inline;">
                        <span class="f20 c_gray_dark fw600">公寓</span>
                    </a>
                </div>
            </div>
        </div>
        
        <div class="index-block">
            <div class="header clearfloat">
                <img class="fl" src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/sz/img/theme_recommend.png">
                <div class="fl">
                    <h1 class="f28 c_gray_dark fw700">旅行主题推荐</h1>
                    <p class="f14 c_gray">
                        <span>有一种旅行，叫跋山涉水来睡你</span>
                        <!--<span class="clear c_green fw600 cursorpt">清除足迹</span>-->
                    </p>
                </div>
            </div>
            <div class="content clearfloat" id="themeRecommend">
                <div class="fl f0">
                    <a class="inline-block w515 radius-12" href="http://www.mayi.com/beijing" _mayi_rp="webindex|lvxing2|jt">
                        <img class="lazy" width="515" height="380" data-original="//staticnew.mayi.com/resourcesWeb/v201807/index_page_new/images/family.jpg" alt="家庭出游" src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/sz/img/family.jpg" style="display: inline;">
                    </a>
                </div>
                <div class="fr f0">
                    <a class="inline-block radius-12 mr20 mb20" href="http://www.mayi.com/beijing" _mayi_rp="webindex|lvxing2|sl">
                        <img class="lazy" width="248" height="180" data-original="//staticnew.mayi.com/resourcesWeb/v201807/index_page_new/images/business.jpg" alt="商旅出差" src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/sz/img/business.jpg" style="display: inline;">
                    </a>
                    <a class="inline-block radius-12 mb20" href="http://www.mayi.com/beijing" _mayi_rp="webindex|lvxing2|jh">
                        <img class="lazy" width="248" height="180" data-original="//staticnew.mayi.com/resourcesWeb/v201807/index_page_new/images/party.jpg" alt="聚会轰趴" src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/sz/img/party.jpg" style="display: inline;">
                    </a>
                    <br>
                    <a class="inline-block radius-12 mr20" href="http://www.mayi.com/beijing" _mayi_rp="webindex|lvxing2|zzyz">
                        <img class="lazy" width="248" height="180" data-original="//staticnew.mayi.com/resourcesWeb/v201807/index_page_new/images/weekmonth.jpg" alt="周租月租" src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/sz/img/weekmonth.jpg" style="display: inline;">
                    </a>
                    <a class="inline-block radius-12" href="http://www.mayi.com/beijing" _mayi_rp="webindex|lvxing2|zk">
                        <img class="lazy" width="248" height="180" data-original="//staticnew.mayi.com/resourcesWeb/v201807/index_page_new/images/discount.jpg" alt="折扣房源" src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/sz/img/discount.jpg" style="display: inline;">
                    </a>
                </div>
            </div>
        </div>
        
        <div class="index-block">
            <div class="header clearfloat">
                <img class="fl" src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/sz/img/hotplace.png">
                <div class="fl">
                    <h1 class="f28 c_gray_dark fw700">热门目的地</h1>
                    <p class="f14 c_gray">
                        <span>灵魂和身体，总有一个在路上</span>
                        <!--<span class="clear c_green fw600 cursorpt">清除足迹</span>-->
                    </p>
                </div>
            </div>
            <div class="content clearfloat">
            	<div class="fl t-left  mr20">
                    <div class="hot-place f0">
                        <a class="inline-block radius-12 w158" href="http://www.mayi.com/sanya" _mayi_rp="webindex|hot|sanya">
                            <img class="lazy" width="158" height="220" data-original="//staticnew.mayi.com/resourcesWeb/v201807/index_page_new/images/h-sanya.jpg" alt="三亚" src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/sz/img/h-sanya.jpg" style="display: inline;">
                            <div class="info ">
                                <p class="fw600 f18">三亚·<span class="f12 ">44900+家住宿</span></p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="fl t-left mr20">
                    <div class="hot-place f0">
                        <a class="inline-block radius-12 w158" href="http://www.mayi.com/beijing" _mayi_rp="webindex|hot|beijing">
                            <img class="lazy" width="158" height="220" data-original="//staticnew.mayi.com/resourcesWeb/v201807/index_page_new/images/h-beijing.jpg" alt="北京" src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/sz/img/h-beijing.jpg" style="display: inline;">
                            <div class="info ">
                                <p class="fw600 f18">北京·<span class="f12 ">28600+家住宿</span></p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="fl t-left mr20">
                    <div class="hot-place f0">
                        <a class="inline-block radius-12 w158" href="http://www.mayi.com/shanghai" _mayi_rp="webindex|hot|shanghai">
                            <img class="lazy" width="158" height="220" data-original="//staticnew.mayi.com/resourcesWeb/v201807/index_page_new/images/h-shanghai.jpg" alt="上海" src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/sz/img/h-shanghai.jpg" style="display: inline;">
                            <div class="info ">
                                <p class="fw600 f18">上海·<span class="f12 ">27200+家住宿</span></p>
                            </div>
                        </a>
                    </div>
                </div>
                 <div class="fl t-left  mr20">
                    <div class="hot-place f0">
                        <a class="inline-block radius-12 w158" href="http://www.mayi.com/xianggang" _mayi_rp="webindex|hot|xianggang">
                            <img class="lazy" width="158" height="220" data-original="//staticnew.mayi.com/resourcesWeb/v201807/index_page_new/images/h-xianggang.jpg" alt="香港" src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/sz/img/h-xianggang.jpg" style="display: inline;">
                            <div class="info ">
                                <p class="fw600 f18">香港·<span class="f12 ">3700+家住宿</span></p>
                            </div>
                        </a>
                    </div>
                </div>
                 <div class="fl t-left  mr20">
                    <div class="hot-place f0">
                        <a class="inline-block radius-12 w158" href="http://www.mayi.com/daban" _mayi_rp="webindex|hot|daban">
                            <img class="lazy" width="158" height="220" data-original="//staticnew.mayi.com/resourcesWeb/v201807/index_page_new/images/h-daban.jpg" alt="大阪" src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/sz/img/h-daban.jpg" style="display: inline;">
                            <div class="info ">
                                <p class="fw600 f18">大阪·<span class="f12 ">21100+家住宿</span></p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="fl t-left  ">
                    <div class="hot-place f0">
                        <a class="inline-block radius-12 w158" href="http://www.mayi.com/xiamen" _mayi_rp="webindex|hot|xiamen">
                            <img class="lazy" width="158" height="220" data-original="//staticnew.mayi.com/resourcesWeb/v201807/index_page_new/images/h-xiamen.jpg" alt="厦门" src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/sz/img/h-xiamen.jpg" style="display: inline;">
                            <div class="info ">
                                <p class="fw600 f18">厦门·<span class="f12 ">2400+家住宿</span></p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="intro-icon clearfloat t-center">
            <dl>
                <a href="http://www.mayi.com/new_page/realhouse" target="_blank" _mayi_rp="webindex|anxin|realhouse">
                    <dt><img src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/sz/img/realroom.png" alt="真实房源"></dt>
                    <dd>
                        <p class="mt10 c_black f20">真实房源</p>
                        <p class="mt5 c_gray f14">上门实拍资质备案</p>
                    </dd>
                </a>
            </dl>
            <dl>
                <a href="http://www.mayi.com/supportplan/" target="_blank" _mayi_rp="webindex|anxin|supportplan">
                    <dt><img src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/sz/img/happyin.png" alt="安心入住"></dt>
                    <dd>
                        <p class="mt10 c_black f20">安心入住</p>
                        <p class="mt5 c_gray f14">到店无房赔付</p>
                    </dd>
                </a>
            </dl>
            <dl>
                <a href="http://www.mayi.com/new_page/zmxy" target="_blank" _mayi_rp="webindex|anxin|zmxy">
                    <dt><img src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/sz/img/zhima.png" alt="芝麻信用"></dt>
                    <dd>
                        <p class="mt10 c_black f20">芝麻信用</p>
                        <p class="mt5 c_gray f14">房东房客实名认证</p>
                    </dd>
                </a>
            </dl>
            
            <dl>
                <a href="http://www.mayi.com/new_page/zykf" target="_blank" _mayi_rp="webindex|anxin|zykf">
                    <dt><img src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/sz/img/pro-service.png" alt="专业客服"></dt>
                    <dd>
                        <p class="mt10 c_black f20">专业客服</p>
                        <p class="mt5 c_gray f14">7 x 24小时</p>
                    </dd>
                </a>
            </dl>
            
        </div>
          
        <div class="advertisement">
            <div class="bx-wrapper" style="max-width: 100%;"><div class="bx-viewport" style="width: 100%; overflow: hidden; position: relative;"><ul id="advertisement" style="width: 215%; position: relative;">
            </ul></div><div class="bx-controls bx-has-pager bx-has-controls-direction"><div class="bx-pager"></div><div class="bx-controls-direction"><a class="bx-prev" href="http://www.mayi.com/index.html">Prev</a><a class="bx-next" href="http://www.mayi.com/index.html">Next</a></div></div></div>
        </div>
        
        <div class="index-block">
            <div class="header clearfloat">
                <img class="fl" src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/sz/img/haijingfang.png">
                <div class="fl">
                    <h1 class="f28 c_gray_dark fw700">椰林暖冬-三亚</h1>
                    <p class="f14 c_gray">
                        <span>碧海蓝天金作沙, 椰风阵阵到天涯</span>
                        <!--<span class="clear c_green fw600 cursorpt">清除足迹</span>-->
                    </p>
                </div>
            </div>
            <div class="content">
                <ul id="haijingfang" class="clearfloat">
                    <li>
                        <a class="room_img" href="http://www.mayi.com/room/852481059" target="_blank" _mayi_rp="webindex|sealodge|852481059">
                            <img class="radius-12 lazy" data-original="http://i1.mayi.com/mayi44/M73/IL/ZT/33UHCDTSXXQHRLMLTRM7LLUY54T8HG.jpg_566x377c.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC">
                            <div class="price">
                                <span class="f22 fw600 ">￥268</span>
                               <!--  <span class="cut-price f14">￥328</span> -->
                            </div>
                            
                        </a>
                          <div class="collect cursorpt " title="未收藏" onclick="collectChange(852481059,event)" state="1" id="c_852481059"></div>
                        <div class="info clearfloat">
                            <a href="http://www.mayi.com/room/852481059" target="_blank" _mayi_rp="webindex|sealodge|852481059">
                                <div class="fl c_gray_dark f20">
                                    <h2 class="fw700 hidden-txt">江汉路步行街/地铁3分钟/一室一厅小公寓</h2>
                                    <p class="c_orange f14">
                                        <span>4.9</span>分
                                        <span class="ml5 mr50">超赞</span>
                                        ·
                                        <span class="c_gray_dark mr10 ml5">54条评价</span>
                                        <span class="f12 c_gray_light ver-t mr10">|</span>
                                        <span class="c_gray_dark ver-t">1居</span><span class="f12 c_gray_light ver-t ml10">|</span>
                                        <span class="c_gray_dark ml10">武汉</span>
                                    </p>
                                </div>
                            </a>
                            <a href="http://www.mayi.com/room/852481059" target="_blank" _mayi_rp="webindex|sealodge|852481059">
                                <img class="headimg fr circle" src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/sz/img/CZDNFLBHBK3SEBSV8BD8XW6D665B7N.jpg_90x90c.jpg" alt="头像">
                            </a>
                        </div>
                    </li>
                    <li>
                        <a class="room_img" href="http://www.mayi.com/room/852898104" target="_blank" _mayi_rp="webindex|sealodge|852898104">
                            <img class="radius-12 lazy" data-original="http://i1.mayi.com/mayi64/M19/MC/UO/9PCR4YSF4P2HTX4WEBW6NXUM6SGXEP.jpg_566x377c.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC">
                            <div class="price">
                                <span class="f22 fw600 ">￥179</span>
                               <!--  <span class="cut-price f14">￥328</span> -->
                            </div>
                            
                        </a>
                          <div class="collect cursorpt " title="未收藏" onclick="collectChange(852898104,event)" state="1" id="c_852898104"></div>
                        <div class="info clearfloat">
                            <a href="http://www.mayi.com/room/852898104" target="_blank" _mayi_rp="webindex|sealodge|852898104">
                                <div class="fl c_gray_dark f20">
                                    <h2 class="fw700 hidden-txt">「留宿•小薄荷」北欧清新阳台黎黄陂路</h2>
                                    <p class="c_orange f14">
                                        <span>5.0</span>分
                                        <span class="ml5 mr50">完美!</span>
                                        ·
                                        <span class="c_gray_dark mr10 ml5">20条评价</span>
                                        <span class="f12 c_gray_light ver-t mr10">|</span>
                                        <span class="c_gray_dark ver-t">1居</span><span class="f12 c_gray_light ver-t ml10">|</span>
                                        <span class="c_gray_dark ml10">武汉</span>
                                    </p>
                                </div>
                            </a>
                            <a href="http://www.mayi.com/room/852898104" target="_blank" _mayi_rp="webindex|sealodge|852898104">
                                <img class="headimg fr circle" src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/sz/img/6LKR3E9QXX2XAXKHEBA7VS6XS4BKRE.jpg_90x90c.jpg" alt="头像">
                            </a>
                        </div>
                    </li>
                    <li>
                        <a class="room_img" href="http://www.mayi.com/room/851197325" target="_blank" _mayi_rp="webindex|sealodge|851197325">
                            <img class="radius-12 lazy" data-original="http://i1.mayi.com/mayi15/M31/EG/CT/77LDGPTYRYK2DKAFVV54PT82QMXQYR.jpg_566x377c.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC">
                            <div class="price">
                                <span class="f22 fw600 ">￥268</span>
                               <!--  <span class="cut-price f14">￥328</span> -->
                            </div>
                            
	                        <p class="excellent">
	                                <img src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/sz/img/level9-2_1.png">
	                        </p>
                        </a>
                          <div class="collect cursorpt " title="未收藏" onclick="collectChange(851197325,event)" state="1" id="c_851197325"></div>
                        <div class="info clearfloat">
                            <a href="http://www.mayi.com/room/851197325" target="_blank" _mayi_rp="webindex|sealodge|851197325">
                                <div class="fl c_gray_dark f20">
                                    <h2 class="fw700 hidden-txt">黄鹤楼户部巷东湖昙华林湖大地铁口复式两居</h2>
                                    <p class="c_orange f14">
                                        <span>5.0</span>分
                                        <span class="ml5 mr50">完美!</span>
                                        ·
                                        <span class="c_gray_dark mr10 ml5">43条评价</span>
                                        <span class="f12 c_gray_light ver-t mr10">|</span>
                                        <span class="c_gray_dark ver-t">2居</span><span class="f12 c_gray_light ver-t ml10">|</span>
                                        <span class="c_gray_dark ml10">武汉</span>
                                    </p>
                                </div>
                            </a>
                            <a href="http://www.mayi.com/room/851197325" target="_blank" _mayi_rp="webindex|sealodge|851197325">
                                <img class="headimg fr circle" src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/sz/img/4G3HJVA9PX8H8X6S6C5SVN3R26W7MX.jpg_90x90c.jpg" alt="头像">
                            </a>
                        </div>
                    </li>
                    
                </ul>
                <a href="http://www.mayi.com/sanya" target="_blank" _mayi_rp="webindex|sealodge|more">
                <div class="more_btn f14 c_gray_dark t-center cursorpt">
                                查看更多
                </div>
                </a>
            </div>
        </div>
        
        <div class="index-block">
            <div class="header clearfloat">
                <img class="fl" src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/sz/img/preference.png">
                <div class="fl">
                    <h1 class="f28 c_gray_dark fw700">蚂蚁优选</h1>
                    <p class="f14 c_gray">
                        <span>为你挑选出品质好、服务佳、设施全的优质房源</span>
                        <!--<span class="clear c_green fw600 cursorpt">清除足迹</span>-->
                    </p>
                </div>
            </div>
            <div class="content">
                <ul id="preference" class="clearfloat">
                 	   <li>
                        <a class="room_img" target="_blank" href="http://www.mayi.com/room/851936298" _mayi_rp="webindex|goodlodge|851936298">
                            <img class="radius-12 lazy" data-original="http://i1.mayi.com/mayi61/M17/HM/EB/7C7RSUDMW9HT6Q8DAVF43N77LVGK2E.jpg_566x377c.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC">
                            <div class="price">
                                <span class="f22 fw600 ">￥429</span>
                               <!--  <span class="cut-price f14">￥328</span> -->
                            </div>
                            
                        </a>
                          <div class="collect cursorpt " title="未收藏" onclick="collectChange(851936298,event)" state="1" id="c_851936298"></div>
                        <div class="info clearfloat">
                            <a href="http://www.mayi.com/room/851936298" target="_blank" _mayi_rp="webindex|goodlodge|851936298">
                                <div class="fl c_gray_dark f20">
                                    <h2 class="fw700 hidden-txt">玉林城南现代简约靛蓝</h2>
                                   <p class="c_orange f14">
                                   
                                        <span>5.0</span>分
                                        <span class="ml5 mr50">完美!</span>
                                        ·
                                        <span class="c_gray_dark mr10 ml5">76条评价</span>
                                        <span class="f12 c_gray_light ver-t mr10">|</span>
                                        <span class="c_gray_dark ver-t">1居</span><span class="f12 c_gray_light ver-t ml10">|</span>
                                        <span class="c_gray_dark ml10">成都</span>
                                    </p>
                                </div>
                            </a>
                            <a href="javascript:void(0);" target="_blank" _mayi_rp="webindex|goodlodge|851936298">
                                <img class="headimg fr circle" src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/sz/img/XGDDPR7YLXAXCVCV5DKDYGVQZNCF4J.jpg_90x90c.jpg" alt="头像">
                            </a>
                        </div>
                    </li>
                 	   <li>
                        <a class="room_img" target="_blank" href="http://www.mayi.com/room/851845634" _mayi_rp="webindex|goodlodge|851845634">
                            <img class="radius-12 lazy" data-original="http://i1.mayi.com/mayi51/M87/OA/IW/9MT5K48Q7BCJ7PK77HUB79NC6L5YZJ.jpg_566x377c.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC">
                            <div class="price">
                                <span class="f22 fw600 ">￥458</span>
                               <!--  <span class="cut-price f14">￥328</span> -->
                            </div>
                            
	                        <p class="excellent">
	                                <img src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/sz/img/level9-2_1.png">
	                        </p>
                        </a>
                          <div class="collect cursorpt " title="未收藏" onclick="collectChange(851845634,event)" state="1" id="c_851845634"></div>
                        <div class="info clearfloat">
                            <a href="http://www.mayi.com/room/851845634" target="_blank" _mayi_rp="webindex|goodlodge|851845634">
                                <div class="fl c_gray_dark f20">
                                    <h2 class="fw700 hidden-txt">【沐舍】春熙路/九眼桥大阳台三居室</h2>
                                   <p class="c_orange f14">
                                   
                                        <span>4.9</span>分
                                        <span class="ml5 mr50">超赞</span>
                                        ·
                                        <span class="c_gray_dark mr10 ml5">28条评价</span>
                                        <span class="f12 c_gray_light ver-t mr10">|</span>
                                        <span class="c_gray_dark ver-t">3居</span><span class="f12 c_gray_light ver-t ml10">|</span>
                                        <span class="c_gray_dark ml10">成都</span>
                                    </p>
                                </div>
                            </a>
                            <a href="javascript:void(0);" target="_blank" _mayi_rp="webindex|goodlodge|851845634">
                                <img class="headimg fr circle" src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/sz/img/JR8VD7FB7FVHAKLYUPCY9XAL8J9KZR.jpg_90x90c.jpg" alt="头像">
                            </a>
                        </div>
                    </li>
                 	   <li>
                        <a class="room_img" target="_blank" href="http://www.mayi.com/room/851763474" _mayi_rp="webindex|goodlodge|851763474">
                            <img class="radius-12 lazy" data-original="http://i1.mayi.com/mayi27/M47/WH/EL/THVNBGZQWEQKCUEPW4JC85PL6DHQE6.jpg_566x377c.jpg" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC">
                            <div class="price">
                                <span class="f22 fw600 ">￥498</span>
                               <!--  <span class="cut-price f14">￥328</span> -->
                            </div>
                            
	                        <p class="excellent">
	                                <img src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/sz/img/level9-2_1.png">
	                        </p>
                        </a>
                          <div class="collect cursorpt " title="未收藏" onclick="collectChange(851763474,event)" state="1" id="c_851763474"></div>
                        <div class="info clearfloat">
                            <a href="http://www.mayi.com/room/851763474" target="_blank" _mayi_rp="webindex|goodlodge|851763474">
                                <div class="fl c_gray_dark f20">
                                    <h2 class="fw700 hidden-txt">近国贸三里屯欢乐谷-捕梦小筑Loft小窝</h2>
                                   <p class="c_orange f14">
                                   
                                        <span>5.0</span>分
                                        <span class="ml5 mr50">完美!</span>
                                        ·
                                        <span class="c_gray_dark mr10 ml5">5条评价</span>
                                        <span class="f12 c_gray_light ver-t mr10">|</span>
                                        <span class="c_gray_dark ver-t">1居</span><span class="f12 c_gray_light ver-t ml10">|</span>
                                        <span class="c_gray_dark ml10">北京</span>
                                    </p>
                                </div>
                            </a>
                            <a href="javascript:void(0);" target="_blank" _mayi_rp="webindex|goodlodge|851763474">
                                <img class="headimg fr circle" src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/sz/img/VUFAFGSZRPD23WLGAUVX57GE8C7KHQ.jpg_90x90c.jpg" alt="头像">
                            </a>
                        </div>
                    </li>
                </ul>
                <a href="http://www.mayi.com/goodlodgeunit" target="_blank" _mayi_rp="webindex|goodlodge|more">
	                <div class="more_btn f14 c_gray_dark t-center cursorpt">
	                  	  查看更多
	                </div>
                </a>
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
                        <img src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/sz/img/app.jpg" width="112" alt="下载app">
                        <p class="f14">注册立送500元大礼包</p>
                    </div>
                    <div class="fr">
                        <div class="fl">
                            <p class="f18 c_gray_dark mb10">扫码快速预订</p>
                            <img src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/sz/img/JJ8GRMND8SDJCP267PTG7BW8S3AV5T.jpg" width="112" alt="微信小程序">
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
    
    <div class="loginbox" id="loginboxdiv" nexturl="none" name="loginboxdiv" style="display:none;">
        <a class="login-colse" id="loginclose" name="loginclose" onclick="" href="javascript:void(0)"></a>
        <div class="login-ways clearfloat">
            <div class="fl phone-account">
                <ul class="c322c27 clearfloat f18">
                    <li class="phoneway_current" id="changeloginbyma">手机验证码登录</li>
                    <li class="mayiway" id="changeloginbyup">帐号密码登录</li>
                </ul>
                <div class="login-phone-account">
                    
                    <div class="login-input" id="loginbymadiv" name="loginbymadiv">
                        <input type="hidden" id="li_num" value="0">
                        <input type="hidden" id="code_num" value="86">
                        <div class="input">
                            <span class="phone-icon"></span>
                            <input class="dlargeinput" type="text" id="loginmobile" name="loginmobile" placeholder="手机号" value="" onafterpaste="mobileRepAndSetPos(this,/[^\d.]/g,&#39;&#39;)" onkeyup="mobileRepAndSetPos(this,/[^\d.]/g,&#39;&#39;)" maxlength="11">
                            <div class="choice_phone_type">
                                <i code="86">+86</i>
                                <span class="UP_down choice_nation_open"></span>
                            </div>
                        </div>
                        <div class="nation_list">
                            <ul class="continent_list">
                                <li class="">亚洲</li>
                                <li class="">欧洲</li>
                                <li class="">美洲</li>
                                <li class="">大洋洲</li>
                            </ul>
                            <ul class="nation_tel_list">
                                
                                <li style="display: block;">
                                    <a href="javascript:void(0);" value="86">中国大陆&nbsp;&nbsp;+86</a>
                                    <a href="javascript:void(0);" value="82">韩国&nbsp;&nbsp;+82</a>
                                    <a href="javascript:void(0);" value="60">马来西亚&nbsp;&nbsp;+60</a>
                                    <a href="javascript:void(0);" value="81">日本&nbsp;&nbsp;+81</a>
                                    <a href="javascript:void(0);" value="66">泰国&nbsp;&nbsp;+66</a>
                                    <a href="javascript:void(0);" value="65">新加坡&nbsp;&nbsp;+65</a>
                                    <a href="javascript:void(0);" value="91">印度&nbsp;&nbsp;+91</a>
                                    <a href="javascript:void(0);" value="62">印度尼西亚&nbsp;&nbsp;+62</a>
                                    <a href="javascript:void(0);" value="84">越南&nbsp;&nbsp;+84</a>
                                    <a href="javascript:void(0);" value="853">中国澳门&nbsp;&nbsp;+853</a>
                                    <a href="javascript:void(0);" value="852">中国香港&nbsp;&nbsp;+852</a>
                                    <a href="javascript:void(0);" value="886">中国台湾&nbsp;&nbsp;+886</a>
                                </li>
                                <li style="display: none;">
                                    <a href="javascript:void(0);" value="49">德国&nbsp;&nbsp;+49</a>
                                    <a href="javascript:void(0);" value="7">俄罗斯&nbsp;&nbsp;+7</a>
                                    <a href="javascript:void(0);" value="33">法国&nbsp;&nbsp;+33</a>
                                    <a href="javascript:void(0);" value="380">乌克兰&nbsp;&nbsp;+380</a>
                                    <a href="javascript:void(0);" value="34">西班牙&nbsp;&nbsp;+34</a>
                                    <a href="javascript:void(0);" value="39">意大利&nbsp;&nbsp;+39</a>
                                    <a href="javascript:void(0);" value="44">英国&nbsp;&nbsp;+44</a>
                                </li>
                                <li style="display: none;">
                                    <a href="javascript:void(0);" value="55">巴西&nbsp;&nbsp;+55</a>
                                    <a href="javascript:void(0);" value="1">加拿大&nbsp;&nbsp;+1</a>
                                    <a href="javascript:void(0);" value="1">美国&nbsp;&nbsp;+1</a>
                                </li>
                                <li style="display: none;">
                                    <a href="javascript:void(0);" value="61">澳大利亚&nbsp;&nbsp;+61</a>
                                    <a href="javascript:void(0);" value="64">新西兰&nbsp;&nbsp;+64</a>
                                </li>						</ul>
                        </div>
                        <div class="largeinputbox small-top clearfix">
                            <div class="dinput fl">
                                <span class="verification-icon"></span>
                                <input class="dsmallinput" type="text" id="imagecode" placeholder="图形验证码" value="">
                            </div>
                            <div class="yz-code fr">
                                <img src="http://www.mayi.com/index.html" id="loginauthimage" title="点击刷新">
                            </div>
                        </div>
                        <div class="largeinputbox small-top clearfix" id="maerrordiv">
                            <div class="dinput fl" id="maerrordiv">
                                <span class="password-icon"></span>
                                <input class="dsmallinput" type="text" id="loginphonecode" name="loginphonecode" placeholder="短信验证码" value="">
                            </div>
                            <div class="yz-code fr">
                                <input class="sendnumber defaultsend" type="button" id="getloginphonecode" name="getloginphonecode" value="获取验证码">
                            </div>
                        </div>
                        <div class="logincheckbox large-top clearfix">
                            <label class="fl">
                                <input class="selectcheckbox" type="checkbox" name="rememberloginstate" checked="checked" value="">自动登录
                            </label>
                        </div>
                        <div class="logincheckbox large-top clearfix"><font>未注册的手机号将自动创建为蚂蚁短租帐户</font></div>
                        <div class="btn-wrap btnpdt20">
                            <a href="javascript:void(0)" id="loginbymado">登录</a>
                        </div>
                    </div>
                    
                    
                    <div class="login-input" id="loginbyupdiv" name="loginbyupdiv" style="display:none;">
                        <input type="hidden" id="li_num_1" value="0">
                        <input type="hidden" id="code_num_1" value="86">
                        <div class="input">
                            <span class="user-icon"></span>
                            <input class="dlargeinput" type="text" id="loginnamein" name="loginnamein" placeholder="手机号/邮箱/账号" value="" autocomplete="off">
                            <div class="choice_phone_type_1">
                                <i tag="CN" code="86">+86</i>
                                <span class="UP_down choice_nation_open"></span>
                            </div>
                        </div>
                        <div class="nation_list_1">
                            <ul class="continent_list_1">
                                <li class="">亚洲</li>
                                <li class="">欧洲</li>
                                <li class="">美洲</li>
                                <li class="">大洋洲</li>
                            </ul>
                            <ul class="nation_tel_list_1">
                                
                                <li style="display: block;">
                                    <a href="javascript:void(0);" value="86">中国大陆&nbsp;&nbsp;+86</a>
                                    <a href="javascript:void(0);" value="82">韩国&nbsp;&nbsp;+82</a>
                                    <a href="javascript:void(0);" value="60">马来西亚&nbsp;&nbsp;+60</a>
                                    <a href="javascript:void(0);" value="81">日本&nbsp;&nbsp;+81</a>
                                    <a href="javascript:void(0);" value="66">泰国&nbsp;&nbsp;+66</a>
                                    <a href="javascript:void(0);" value="65">新加坡&nbsp;&nbsp;+65</a>
                                    <a href="javascript:void(0);" value="91">印度&nbsp;&nbsp;+91</a>
                                    <a href="javascript:void(0);" value="62">印度尼西亚&nbsp;&nbsp;+62</a>
                                    <a href="javascript:void(0);" value="84">越南&nbsp;&nbsp;+84</a>
                                    <a href="javascript:void(0);" value="853">中国澳门&nbsp;&nbsp;+853</a>
                                    <a href="javascript:void(0);" value="852">中国香港&nbsp;&nbsp;+852</a>
                                    <a href="javascript:void(0);" value="886">中国台湾&nbsp;&nbsp;+886</a>
                                </li>
                                <li style="display: none;">
                                    <a href="javascript:void(0);" value="49">德国&nbsp;&nbsp;+49</a>
                                    <a href="javascript:void(0);" value="7">俄罗斯&nbsp;&nbsp;+7</a>
                                    <a href="javascript:void(0);" value="33">法国&nbsp;&nbsp;+33</a>
                                    <a href="javascript:void(0);" value="380">乌克兰&nbsp;&nbsp;+380</a>
                                    <a href="javascript:void(0);" value="34">西班牙&nbsp;&nbsp;+34</a>
                                    <a href="javascript:void(0);" value="39">意大利&nbsp;&nbsp;+39</a>
                                    <a href="javascript:void(0);" value="44">英国&nbsp;&nbsp;+44</a>
                                </li>
                                <li style="display: none;">
                                    <a href="javascript:void(0);" value="55">巴西&nbsp;&nbsp;+55</a>
                                    <a href="javascript:void(0);" value="1">加拿大&nbsp;&nbsp;+1</a>
                                    <a href="javascript:void(0);" value="1">美国&nbsp;&nbsp;+1</a>
                                </li>
                                <li style="display: none;">
                                    <a href="javascript:void(0);" value="61">澳大利亚&nbsp;&nbsp;+61</a>
                                    <a href="javascript:void(0);" value="64">新西兰&nbsp;&nbsp;+64</a>
                                </li>						</ul>
                        </div>
                        <div class="input small-top">
                            <span class="password-icon"></span>
                            <input class="dlargeinput" type="password" id="loginpassin" name="loginpassin" placeholder="密码" value="">
                        </div>
                        <div class="largeinputbox small-top clearfix" id="uperrordiv">
                            <div class="dinput fl" id="yui_3_5_1_1_1434542056373_108">
                                <span class="verification-icon"></span>
                                <input type="text" class="dsmallinput" id="imagecode1" placeholder="图形验证码" value="">
                            </div>
                            <div class="yz-code fr">
                                <img src="http://www.mayi.com/index.html" id="loginauthimage1" title="点击刷新">
                            </div>
                        </div>
                        <div class="logincheckbox large-top clearfix">
                            <label class="fl">
                                <input class="selectcheckbox" type="checkbox" name="rememberpass" checked="checked" value="">自动登录
                            </label>
                        </div>
                        <div class="btn-wrap btnpdt20">
                            <a href="javascript:void(0)" id="loginbyupdo" _mayi_rp="web|condition|loginc">登录</a>
                        </div>
                        <p class="otherwaytitle mt20">没有账号密码请 <a href="javascript:void(0)" id="changeloginbymwa">使用手机验证码登录</a></p>
                    </div>
                    
                </div>
            </div>
            <div class="fl t-center third-party">
                <p class="f18 c322c27 mb20">其他登录方式</p>
                <ul class="otherway c322c27">
                    <li class="wxway" id="loginbywx" _mayi_rp="web|condition|loginc">微信登录</li>
                    <li class="sinaway" id="loginbysina" _mayi_rp="web|condition|loginc">微博登录</li>
                    <li class="qqway" id="loginbyqq" _mayi_rp="web|condition|loginc">QQ登录</li>
                </ul>
            </div>
        </div>
    </div>
    
    <!-- <div id="floatingLayer"-->
	
	<!-- <div id="" style="display:none"> 为不显示 -->
	
    <div id="floatingLayer">
        <div class="app-open" style="left: -100%; opacity: 0;">
            <div class="download_bg"></div>
            <div class="download_div w1000 clearfloat">
                
                <img class="download_app" src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/sz/img/XXTXYA8RFP49U9HNPXYYGNUN4EMM2Y.jpg" alt="">
                <div class="app_code">
                    <p>
                        扫描下载APP
                        <br>
                        立享优惠
                    </p>
                    <span style="display:block;padding:3px;background:#fff;width:90px;margin:0 auto;height: 90px;">
                	<img src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/sz/img/app.jpg" alt="" style="width:100%;">
                </span>
                </div>
                <!-- <div class="download_tip app_code">
                    <p>直接下载</p>
                    <a href="/download/ios/update" rel="nofollow" _mayi_rp="webaround|sem_download|ios">IOS下载</a>
                    <a href="/download/android/update" rel="nofollow" _mayi_rp="webaround|sem_download|andriod">Android下载</a>
                </div> -->
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
        <div class="app-close" style="left: 0%;">
            <div class="background-img">
                <img src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/sz/img/CGTYEY9X7YRB286NQCF697UXV4YEYX.jpg" alt="">
            </div>
        </div>
    </div>
    
	<div id="" style="display:none">
		<a href="http://www.mayi.com/tp_warmwinter/">
			<div class="app-open" style="left: -100%; width: 100%; height: 152px; opacity: 0;">
				<img src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/sz/img/TYD5GQGUY4B2RL6FRNFW5VQG42EKZZ.jpg" alt="" style="position:absolute;top:0;left:50%;margin-left:-960px;width:1920px;height:170px;vertical-align:top;display:block;">
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
<script charset="UTF-8" src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/sz/img/uba.min.js.下载"></script><script type="text/javascript" async="" src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/sz/img/analytics.js.下载"></script><script charset="UTF-8" src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/sz/img/QiMoIMSDK.js.下载"></script><script src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/sz/img/hm.js.下载"></script><script src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/sz/img/push.js.下载"></script><script src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/sz/img/jquery-1.7.1.min.js.下载"></script>
<script src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/sz/img/public.js.下载"></script>
<script src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/sz/img/jquery.bxslider.js.下载"></script>
<script src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/sz/img/layer.min.js.下载"></script>
<script src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/sz/img/new_calendar.js.下载"></script>
<script src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/sz/img/jQuery.md5.js.下载"></script>
<script src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/sz/img/loginpc.js.下载"></script>

<script type="text/javascript" src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/sz/img/js_index.js.下载"></script>
<script type="text/javascript" src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/sz/img/js_index_index.js.下载"></script><script src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/sz/img/adv.js.下载"></script>
<script type="text/javascript" src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/sz/img/index.js.下载" async="true"></script>
<script type="text/javascript" src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/sz/img/index_searchlist_public.js.下载"></script>
<script type="text/javascript" src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/sz/img/index_own.js.下载"></script>


<script type="text/javascript" src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/sz/img/c.js.下载"></script>

<script src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/sz/img/jquery.nicescroll.min.js.下载"></script>
<script src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/sz/img/allcity.js.下载"></script>
<script src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/sz/img/index_PCown.js.下载"></script>
<script src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/sz/img/jquery.lazyload.min.js.下载"></script>
<script src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/sz/img/index.js(1).下载"></script>
<script type="text/javascript" src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/sz/img/7moorInit.js.下载" async="async"></script>
 <script type="text/javascript" src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/sz/img/jquery.qrcode.min.js.下载"></script>



 
<link rel="stylesheet" href="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/sz/img/IM.css">    
 
   
	 


 

<div class="foot">
        <div class="w1050 pb20 clearfloat">

            <div class="footer pt30 over-hidden pb20">
                <ul>
                    <li>
                        <h3 class="f16 mb10">联系我们</h3>
                        <p class="mb15">客户服务</p>
                        <p class="f22">400-028-6868</p>
                        <!--    <p>Email：kefu.duanzu@mayi.com</p>-->
                        <p>Email：service@mayi.com</p>
                        <p class="mb10 mt25">商务合作</p>
                        <p>QQ：2656860348</p>
                        <p>Email：marketing@mayi.com</p>
                    </li>
                    <li>
                        <h3 class="f16 mb10">帮助中心</h3>
                        <p>
                            <a href="http://www.mayi.com/roomauditrule/" target="_blank">房源审核规范</a>
                        </p>
                        <!--<p><a href="/landoperaterule/" target="_blank">房东经营行为管理规范</a></p>-->
                        <p>
                            <a href="http://www.mayi.com/supportplan/" target="_blank">房客安心计划</a>
                        </p>
                        <p>
                            <a href="http://www.mayi.com/goodhouseplan/" target="_blank">优质住宿计划</a>
                        </p>
                        <p>
                            <a href="http://www.mayi.com/sitemap/" target="_blank">网站地图</a>
                        </p>
                        <p>
                            <a href="http://www.mayi.com/questions/" target="_blank">房客帮助</a>
                        </p>
                    </li>
                    <li>
                        <h3 class="f16 mb10">公司信息</h3>
                        <p>
                            <a rel="nofollow" href="http://www.mayi.com/aboutcompany/" target="">关于蚂蚁</a>
                        </p>
                        <p>
                            <a rel="nofollow" href="http://www.mayi.com/culture/" target="">加入我们</a>
                        </p>
                        <p>
                            <a rel="nofollow" href="http://www.mayi.com/partner/" target="">战略合作</a>
                        </p>
                        <!-- <p><a rel="nofollow" href="/cleanRecruitInfo/" target="_blank">保洁合作</a></p> 
                        <p>
                            <a rel="nofollow" href="http://iyoujia.mayi.com/mayilod/" target="_blank">业主招募</a>
                        </p>
                        -->
                        <p>
                            <a rel="nofollow" href="http://www.mayi.com/mediareport/" target="_blank">媒体报道</a>
                        </p>
                        <p>
                            <a rel="nofollow" href="http://www.mayi.com/agreement/" target="_blank">服务协议</a>
                        </p>
                        <p>
                            <a rel="nofollow" href="http://www.mayi.com/privacypolicy/" target="_blank">隐私政策</a>
                        </p>
                        <p>
                            <a rel="nofollow" href="http://www.mayi.com/webdisclaimer/" target="_blank">免责声明</a>
                        </p>
                    </li>
                    <li>
                        
                        <h3 class="f16 mb10" style="text-align:center">下载APP<br><span style="color:#ff5d51;font-size:11px">注册立送500元大礼包</span></h3>
                        <p><img class="mt10 app_download_qr" style="width:104px;" src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/sz/img/ZYJAYNQPDK7CE5R5Y3UZJFX4DQPM2R.jpg_110x110c.jpg"></p>
                        <p>
                            <a class="app mt10 t-center" rel="nofollow" href="http://www.mayi.com/download/android/update" _mayi_rp="webaround|seafooter|andriod">Android下载</a>
                        </p>
                        <p>
                            <a class="app mt10 t-center" rel="nofollow" href="http://www.mayi.com/download/ios/update" target="_blank" _mayi_rp="webaround|seafooter|ios">iOS下载</a>
                        </p>
                    </li>
                    <li>
                        <h3 class="f16 mb10">关注我们</h3>
                        <div class="fl mr20 cursorpt showinfo relave">
                            <img src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/sz/img/weixin_logo.png">
                            <!-- <img src="//staticnew.mayi.com/resourcesWeb/v201510/images/commom/weixin.jpg" class="head_pop absot"> -->
                            <div class="head_pop absot app-img1">
                                <div class="fl app-img1-fl">
                                    <p class="app-img1-uup">了解优惠活动</p>
                                    <img src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/sz/img/9RECJCBRBXKLMF4VSGRKRY7YJTJ2JH.jpg" class=" rt-app1">
                                    <p class="app-img1-udp">蚂蚁短租公众号</p>
                                </div>
                                <div>
                                    <p class="app-img1-uup">扫码快速预订</p>
                                    <img src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/sz/img/8UMAAN78AJGFBPGZQJ3VHJLEJCWU37.jpg" class="rt-app1">
                                    <p class="app-img1-udp">蚂蚁短租小程序</p>
                                </div>
                            </div>
                        </div>
                        <p class="cursorpt fl"><img src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/sz/img/xinlang_logo.png" rel="nofollow" onclick="sinaWeibo();"></p>
                    </li>
                </ul>
            </div>
            
            <div class="link_end">
                <div class="city_classify">
                    <ul class="clearfloat">
                        <li class="choiced_bg_color">热门城市</li>
                        <li class="">网站导航</li>
                        <li class="">友情链接</li>
                        <li class="">手机版</li>

                    </ul>
                </div>
                <div class="big_classify_box">
                    <div class="classify_box other_name" style="display: block;  height: 75px;">
                        <ul class="clearfloat">
                            <li>
                                <a target="_blank" title="青岛" href="http://www.mayi.com/qingdao/">青岛日租房</a>
                            </li>
                            <li>
                                <a target="_blank" title="北京" href="http://www.mayi.com/beijing/">北京日租房</a>
                            </li>
                            <li>
                                <a target="_blank" title="秦皇岛" href="http://www.mayi.com/qinhuangdao/">秦皇岛日租房</a>
                            </li>
                            <li>
                                <a target="_blank" title="厦门" href="http://www.mayi.com/xiamen/">厦门日租房</a>
                            </li>
                            <li>
                                <a target="_blank" title="大连" href="http://www.mayi.com/dalian/">大连日租房</a>
                            </li>
                            <li>
                                <a target="_blank" title="上海" href="http://www.mayi.com/shanghai/">上海日租房</a>
                            </li>
                            <li>
                                <a target="_blank" title="成都" href="http://www.mayi.com/chengdu/">成都日租房</a>
                            </li>
                            <li>
                                <a target="_blank" title="威海" href="http://www.mayi.com/weihai/">威海日租房</a>
                            </li>
                            <li>
                                <a target="_blank" title="重庆" href="http://www.mayi.com/chongqing/">重庆日租房</a>
                            </li>
                            <li>
                                <a target="_blank" title="西安" href="http://www.mayi.com/xian/">西安日租房</a>
                            </li>
                            <li>
                                <a target="_blank" title="杭州" href="http://www.mayi.com/hangzhou/">杭州日租房</a>
                            </li>
                            <li>
                                <a target="_blank" title="烟台" href="http://www.mayi.com/yantai/">烟台日租房</a>
                            </li>
                            <li>
                                <a target="_blank" title="三亚" href="http://www.mayi.com/sanya/">三亚日租房</a>
                            </li>
                            <li>
                                <a target="_blank" title="葫芦岛" href="http://www.mayi.com/huludao/">葫芦岛日租房</a>
                            </li>
                            <li>
                                <a target="_blank" title="营口" href="http://www.mayi.com/yingkou/">营口日租房</a>
                            </li>
                            <li>
                                <a target="_blank" title="广州" href="http://www.mayi.com/guangzhou/">广州日租房</a>
                            </li>
                            <li>
                                <a target="_blank" title="深圳" href="http://www.mayi.com/shenzhen/">深圳日租房</a>
                            </li>
                            <li>
                                <a target="_blank" title="日照" href="http://www.mayi.com/rizhao/">日照日租房</a>
                            </li>
                            <li>
                                <a target="_blank" title="北海" href="http://www.mayi.com/beihai/">北海日租房</a>
                            </li>
                            <li>
                                <a target="_blank" title="南京" href="http://www.mayi.com/nanjing/">南京日租房</a>
                            </li>
                            <li>
                                <a target="_blank" title="昆明" href="http://www.mayi.com/kunming/">昆明日租房</a>
                            </li>
                            <li>
                                <a target="_blank" title="承德" href="http://www.mayi.com/chengde/">承德日租房</a>
                            </li>
                            <li>
                                <a target="_blank" title="沈阳" href="http://www.mayi.com/shenyang/">沈阳日租房</a>
                            </li>
                            <li>
                                <a target="_blank" title="哈尔滨" href="http://www.mayi.com/haerbin/">哈尔滨日租房</a>
                            </li>
                            <li>
                                <a target="_blank" title="武汉" href="http://www.mayi.com/wuhan/">武汉日租房</a>
                            </li>
                            <li>
                                <a target="_blank" title="苏州" href="http://www.mayi.com/suzhou/">苏州日租房</a>
                            </li>
                            <li>
                                <a target="_blank" title="济南" href="http://www.mayi.com/jinan/">济南日租房</a>
                            </li>
                            <li>
                                <a target="_blank" title="天津" href="http://www.mayi.com/tianjin/">天津日租房</a>
                            </li>
                            <li>
                                <a target="_blank" title="西宁" href="http://www.mayi.com/xining/">西宁日租房</a>
                            </li>
                            <li>
                                <a target="_blank" title="丹东" href="http://www.mayi.com/dandong/">丹东日租房</a>
                            </li>
                            <li>
                                <a target="_blank" title="长沙" href="http://www.mayi.com/changsha/">长沙日租房</a>
                            </li>
                            <li>
                                <a target="_blank" title="桂林" href="http://www.mayi.com/guilin/">桂林日租房</a>
                            </li>
                            <li>
                                <a target="_blank" title="珠海" href="http://www.mayi.com/zhuhai/">珠海日租房</a>
                            </li>
                            <li>
                                <a target="_blank" title="贵阳" href="http://www.mayi.com/guiyang/">贵阳日租房</a>
                            </li>
                            <li>
                                <a target="_blank" title="丽江" href="http://www.mayi.com/lijiang/">丽江日租房</a>
                            </li>
                            <li>
                                <a target="_blank" title="长春" href="http://www.mayi.com/changchun/">长春日租房</a>
                            </li>
                            <li>
                                <a target="_blank" title="大理" href="http://www.mayi.com/dali/">大理日租房</a>
                            </li>
                            <li>
                                <a target="_blank" title="嘉兴" href="http://www.mayi.com/jiaxing/">嘉兴日租房</a>
                            </li>
                            <li>
                                <a target="_blank" title="郑州" href="http://www.mayi.com/zhengzhou/">郑州日租房</a>
                            </li>
                            <li>
                                <a target="_blank" title="合肥" href="http://www.mayi.com/hefei/">合肥日租房</a>
                            </li>
                            <li>
                                <a target="_blank" title="兰州" href="http://www.mayi.com/lanzhou/">兰州日租房</a>
                            </li>
                            <li>
                                <a target="_blank" title="太原" href="http://www.mayi.com/taiyuan/">太原日租房</a>
                            </li>
                            <li>
                                <a target="_blank" title="南宁" href="http://www.mayi.com/nanning/">南宁日租房</a>
                            </li>
                            <li>
                                <a target="_blank" title="惠州" href="http://www.mayi.com/huizhou/">惠州日租房</a>
                            </li>
                            <li>
                                <a target="_blank" title="福州" href="http://www.mayi.com/fuzhou/">福州日租房</a>
                            </li>
                            <li>
                                <a target="_blank" title="石家庄" href="http://www.mayi.com/shijiazhuang/">石家庄日租房</a>
                            </li>
                            <li>
                                <a target="_blank" title="呼伦贝尔" href="http://www.mayi.com/hulunbeier/">呼伦贝尔日租房</a>
                            </li>
                            <li>
                                <a target="_blank" title="香港" href="http://www.mayi.com/xianggang/">香港日租房</a>
                            </li>
                            <li>
                                <a target="_blank" title="舟山" href="http://www.mayi.com/zhoushan/">舟山日租房</a>
                            </li>
                            <li>
                                <a target="_blank" title="海口" href="http://www.mayi.com/haikou/">海口日租房</a>
                            </li>
                        </ul>
                        <div class="footer_open" style="display: block;"></div>
                        <div class="footer_close" style="display: none;"></div>
                    </div>

                    <div class="classify_box" style="display: none; height: 75px;">
                        <ul class="clearfloat">
                            <li>
                                <a target="_blank" title="民宿" href="http://www.mayi.com/minsu/">民宿</a>
                            </li>
                            <li>
                                <a target="_blank" title="短租公寓" href="http://www.mayi.com/gongyu/">短租公寓</a>
                            </li>
                            <li>
                                <a target="_blank" title="住宿" href="http://www.mayi.com/zhusu/">住宿</a>
                            </li>
                            <li>
                                <a target="_blank" title="酒店" href="http://www.mayi.com/hotel/">酒店</a>
                            </li>
                            <li>
                                <a target="_blank" title="宾馆" href="http://www.mayi.com/binguan_beijing/">宾馆</a>
                            </li>
                            <li>
                                <a target="_blank" title="短租别墅" href="http://www.mayi.com/duanzubieshu/">短租别墅</a>
                            </li>
                            <li>
                                <a target="_blank" title="旅游景点" href="http://www.mayi.com/sight_index/">旅游景点</a>
                            </li>
                            <li>
                                <a target="_blank" title="游记攻略" href="http://www.mayi.com/beijing_lyzixun/">游记攻略</a>
                            </li>
                            <li>
                                <a target="_blank" title="周租房" href="http://www.mayi.com/zhouzu/">周租房</a>
                            </li>
                            <li>
                                <a target="_blank" title="月租房" href="http://www.mayi.com/yuezu/">月租房</a>
                            </li>
                            <li>
                                <a target="_blank" title="租房攻略" href="http://www.mayi.com/phb/">租房攻略</a>
                            </li>
                        </ul>
                    </div>

                    <div class="classify_box other_name" style="display: none; height: 75px;">
                        <ul class="clearfloat">
                            <li>
                                <a target="_blank" href="http://chengdu.anjuke.com/" title="安居客">安居客</a>
                            </li>
                            <li>
                                <a target="_blank" href="http://www.qu114.com/" title="去114分类信息网">去114分类信息网</a>
                            </li>
                            <li>
                                <a target="_blank" href="http://www.9tour.cn/" title="九游网">九游网</a>
                            </li>
                            <li>
                                <a target="_blank" href="http://hangzhou.fangtoo.com/" title="杭州二手房网">杭州二手房网</a>
                            </li>
                            <li>
                                <a target="_blank" href="http://www.5khouse.com/" title="昆山房产网">昆山房产网</a>
                            </li>
                            <li>
                                <a target="_blank" href="http://product.pchouse.com.cn/" title="太平洋家居网">太平洋家居网</a>
                            </li>
                            <li>
                                <a target="_blank" href="http://www.17house.com/" title="一起装修网">一起装修网</a>
                            </li>
                            <li>
                                <a target="_blank" href="http://www.guolv.com/" title="神舟国旅">神舟国旅</a>
                            </li>
                            <li>
                                <a target="_blank" href="https://www.eduour.com/" title="在职研究生">在职研究生</a>
                            </li>
                            <li>
                                <a target="_blank" href="http://www.zx123.cn/" title="装修网">装修网</a>
                            </li>
                            <li>
                                <a target="_blank" href="http://zx.meilele.com/" title="美乐乐装修网">美乐乐装修网</a>
                            </li>
                            <li>
                                <a target="_blank" href="http://baa.bitauto.com/" title="汽车论坛">汽车论坛</a>
                            </li>
                            <li>
                                <a target="_blank" href="http://www.fuwo.com/" title="装修">装修</a>
                            </li>
                            <li>
                                <a target="_blank" href="http://www.jiajuol.com/" title="家居在线">家居在线</a>
                            </li>
                            <li>
                                <a target="_blank" href="http://www.zhms.cn/" title="美食网  ">美食网 </a>
                            </li>
                            <li>
                                <a target="_blank" href="http://www.egouz.com/" title="国外网站">国外网站</a>
                            </li>
                            <li>
                                <a target="_blank" href="http://m.mayi.com/phb/" title="短租排行榜2017">短租排行榜2017</a>
                            </li>
                            <li>
                                <a target="_blank" href="http://www.hc360.com/" title="慧聪网">慧聪网</a>
                            </li>
                            <li>
                                <a target="_blank" href="https://www.qj.com.cn/" title="加盟网">加盟网</a>
                            </li>
                            <li>
                                <a target="_blank" href="http://www.tuliu.com/" title="土地转让">土地转让</a>
                            </li>
                            <li>
                                <a target="_blank" href="http://www.91jm.com/" title="创业加盟网">创业加盟网</a>
                            </li>
                            <li>
                                <a target="_blank" href="http://www.99114.com/" title="中国网库">中国网库</a>
                            </li>
                            <li>
                                <a target="_blank" href="http://www.jiuzheng.com/" title="装修">装修</a>
                            </li>
                            <li>
                                <a target="_blank" href="http://www.jihaoba.com/" title="手机靓号">手机靓号</a>
                            </li>
                            <li>
                                <a target="_blank" href="http://www.qizuang.com/" title=" 装修公司"> 装修公司</a>
                            </li>
                            <li>
                                <a target="_blank" href="http://you.ctrip.com/" title="携程旅游网">携程旅游网</a>
                            </li>
                            <li>
                                <a target="_blank" href="http://www.lvye.cn/" title="绿野户外">绿野户外</a>
                            </li>
                            <li>
                                <a target="_blank" href="http://item.gome.com.cn/" title="国美在线  ">国美在线 </a>
                            </li>
                            <li>
                                <a target="_blank" href="http://www.maiche.com/" title="汽车报价">汽车报价</a>
                            </li>
                            <li>
                                <a target="_blank" href="http://www.jiankang.com/" title="百姓健康网">百姓健康网</a>
                            </li>
                            <li>
                                <a target="_blank" href="http://www.mayi.com/haijingfang/" title="海景房">海景房</a>
                            </li>
                            <li>
                                <a target="_blank" href="http://www.zuzuche.com/" title="国际租车">国际租车</a>
                            </li>
                            <li>
                                <a target="_blank" href="http://www.shushi100.com/" title="舒适100网">舒适100网</a>
                            </li>
                            <li>
                                <a target="_blank" href="http://www.3456.cn/" title="信息发布平台   ">信息发布平台 </a>
                            </li>
                            <li>
                                <a target="_blank" href="http://bus.mapbar.com/" title="公交查询">公交查询</a>
                            </li>
                            <li>
                                <a target="_blank" href="http://www.mayi.com/sou_109786/" title="北戴河临海住宿">北戴河临海住宿</a>
                            </li>
                            <li>
                                <a target="_blank" href="http://www.qyer.com/" title="出境游">出境游</a>
                            </li>
                            <li>
                                <a target="_blank" href="http://www.jiwu.com/" title="买房网">买房网</a>
                            </li>
                            <li>
                                <a target="_blank" href="https://www.changtu.com/" title="汽车票查询 ">汽车票查询 </a>
                            </li>
                            <li>
                                <a target="_blank" href="http://www.mayi.com/" title="家庭旅馆">家庭旅馆</a>
                            </li>
                            <li>
                                <a target="_blank" href="http://www.mayi.com/haowan/beijing/" title="北京好玩的地方">北京好玩的地方</a>
                            </li>
                            <li>
                                <a target="_blank" href="http://www.ceramicschina.com/" title="瓷砖">瓷砖</a>
                            </li>
                            <li>
                                <a target="_blank" href="http://bq.kongfz.com/" title="孔夫子旧书网">孔夫子旧书网</a>
                            </li>
                            <li>
                                <a target="_blank" href="https://www.tujia.com/" title="途家网">途家网</a>
                            </li>
                            <li>
                                <a target="_blank" href="http://www.liepin.com/" title="招聘">招聘</a>
                            </li>
                            <li>
                                <a target="_blank" href="http://f.cx/" title="房产讯">房产讯</a>
                            </li>
                            <li>
                                <a target="_blank" href="http://www.58che.com/" title="58汽车网">58汽车网</a>
                            </li>
                            <li>
                                <a target="_blank" href="http://www.uzai.com/" title="旅游网">旅游网</a>
                            </li>
                            <li>
                                <a target="_blank" href="http://www.mafengwo.cn/" title="蚂蜂窝旅游攻略">蚂蜂窝旅游攻略</a>
                            </li>
                            <li>
                                <a target="_blank" href="http://iyoujia.mayi.com/" title="有家民宿">有家民宿</a>
                            </li>
                            <li>
                                <a target="_blank" href="http://iyoujiam.mayi.com/" title="有家民宿">有家民宿</a>
                            </li>
                            <li>
                                <a target="_blank" href="http://www.geihui.com/" title="返利网">返利网</a>
                            </li>
                            <li>
                                <a target="_blank" href="https://www.om.cn/" title=" 3dmax模型"> 3dmax模型</a>
                            </li>
                            <li>
                                <a target="_blank" href="http://www.qixiangwang.cn/" title="天气预报查询一周">天气预报查询一周</a>
                            </li>
                            <li>
                                <a target="_blank" href="http://s.114chn.com/" title="114生活网">114生活网</a>
                            </li>
                            <li>
                                <a target="_blank" href="http://www.xin.com/" title="二手车">二手车</a>
                            </li>
                            <li>
                                <a target="_blank" href="http://www.donews.com/" title="donews">donews</a>
                            </li>
                            <li>
                                <a target="_blank" href="http://bj.esf.leju.com/" title="乐居二手房">乐居二手房</a>
                            </li>
                            <li>
                                <a target="_blank" href="http://www.mayi.com/jieri/" title="节假日租房">节假日租房</a>
                            </li>
                            <li>
                                <a target="_blank" href="http://bj.lianjia.com/" title="北京租房">北京租房</a>
                            </li>
                            <li>
                                <a target="_blank" href="http://www.mayi.com/seomap/" title="热门短租搜索词">热门短租搜索词</a>
                            </li>
                            <li>
                                <a target="_blank" href="http://jmw.com.cn/" title="中国加盟网">中国加盟网</a>
                            </li>
                            <li>
                                <a target="_blank" href="http://bj.5i5j.com/" title="北京二手房">北京二手房</a>
                            </li>
                            <li>
                                <a target="_blank" href="http://www.homekoo.com/" title="家具">家具</a>
                            </li>
                            <li>
                                <a target="_blank" href="http://www.huolala.cn/" title="货拉拉">货拉拉</a>
                            </li>
                            <li>
                                <a target="_blank" href="http://www.taiwandao.tw/" title="台湾自由行">台湾自由行</a>
                            </li>
                            <li>
                                <a target="_blank" href="http://www.nanhutravel.com/" title="南湖国旅">南湖国旅</a>
                            </li>
                            <li>
                                <a target="_blank" href="https://www.ximalaya.com/" title="儿童故事">儿童故事</a>
                            </li>
                            <li>
                                <a target="_blank" href="http://www.chinabgao.com/" title="调研报告 ">调研报告 </a>
                            </li>
                            <li>
                                <a target="_blank" href="http://www.3hk.cn/" title="香港自由行">香港自由行</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">友情链接QQ：3123901994</a>
                            </li>
                        </ul>
                        <div class="footer_open" style="display: block;"></div>
                        <div class="footer_close" style="display: none;"></div>
                    </div>
                    <div class="classify_box other_name" style="display: none;height: 75px;">
                        <ul class="clearfloat">
                            <li>
                                <a target="_blank" href="http://m.mayi.com/" title="蚂蚁短租">蚂蚁短租</a>
                            </li>
                        </ul>
                    </div>
                </div>
                
                      		        
				<div class="carousel_box clearfloat">
					<span>最新预订：</span>
					<div class="winBox">
						<ul class="cont-ul" style="left: -1155px;">
									<li><a href="http://www.mayi.com/room/854911077">阜成门阜外医院两人间57分钟前被用户*****6023预定</a></li>
									<li><a href="http://www.mayi.com/room/854204422">三亚湾长租短租公寓70米到海边1小时4分钟前被用户*****1030预定</a></li>
									<li><a href="http://www.mayi.com/room/853189846">南京南站喜玛拉雅全悦新中式榻榻米大床房1小时11分钟前被用户*****5729预定</a></li>
									<li><a href="http://www.mayi.com/room/854758826">区庄地铁6号房，近眼科，肿瘤，中山一院1小时14分钟前被用户*****5726预定</a></li>
									<li><a href="http://www.mayi.com/room/853232138">天猫小屋1小时28分钟前被用户*****6027预定</a></li>
									<li><a href="http://www.mayi.com/room/855037200">[时光]小清新温馨三房多套近银滩码头桥港1小时33分钟前被用户*****5820预定</a></li>
									<li><a href="http://www.mayi.com/room/855583230">大华整租一室户，无中介可月付拎包入住1小时33分钟前被用户*****500预定</a></li>
									<li><a href="http://www.mayi.com/room/855037200">[时光]小清新温馨三房多套近银滩码头桥港1小时34分钟前被用户*****5820预定</a></li>
									<li><a href="http://www.mayi.com/room/854911077">阜成门阜外医院两人间57分钟前被用户*****6023预定</a></li>
									<li><a href="http://www.mayi.com/room/854204422">三亚湾长租短租公寓70米到海边1小时4分钟前被用户*****1030预定</a></li>
									<li><a href="http://www.mayi.com/room/853189846">南京南站喜玛拉雅全悦新中式榻榻米大床房1小时11分钟前被用户*****5729预定</a></li>
									<li><a href="http://www.mayi.com/room/854758826">区庄地铁6号房，近眼科，肿瘤，中山一院1小时14分钟前被用户*****5726预定</a></li>
									<li><a href="http://www.mayi.com/room/853232138">天猫小屋1小时28分钟前被用户*****6027预定</a></li>
									<li><a href="http://www.mayi.com/room/855037200">[时光]小清新温馨三房多套近银滩码头桥港1小时33分钟前被用户*****5820预定</a></li>
									<li><a href="http://www.mayi.com/room/855583230">大华整租一室户，无中介可月付拎包入住1小时33分钟前被用户*****500预定</a></li>
									<li><a href="http://www.mayi.com/room/855037200">[时光]小清新温馨三房多套近银滩码头桥港1小时34分钟前被用户*****5820预定</a></li>
						</ul>
					</div>
				</div>
				
               
            </div>
            <div class="mt40">
                <p class="t-center f12 c777776">客户服务：400-028-6868 |
                    <a href="http://www.mayi.com/tenantlogin/" target="_blank" class="c777776">&nbsp;用户答疑&nbsp;|</a>
                    <a href="http://www.mayi.com/aboutcompany/" target="_blank" class="c777776">&nbsp;公司信息&nbsp;|</a>
                    <a href="http://www.mayi.com/sitemap/" target="_blank" class="c777776">&nbsp;网站地图&nbsp;|</a>
                    <a href="http://www.mayi.com/" target="_blank" class="c777776">&nbsp;短租房&nbsp;|</a>
                    <a href="http://www.mayi.com/activity/app50" target="_blank" class="c777776">&nbsp;app下载&nbsp;|</a>关注我们
                    <span class="mr10 cursorpt showinfo relave" style="display:inline-block;vertical-align:middle;">
			            <img src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/sz/img/weixin_logo_s.png">
			            <img src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/sz/img/weixin.jpg" class="head_pop absot" style="bottom:24px;left:-32px;">
			        </span>
                    <span class="cursorpt" style="display:inline-block;vertical-align:middle;">
			            <img src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/sz/img/xinlang_logo_s.png" onclick="sinaWeibo();">
			        </span>
                </p>
                
                <p class="t-center f12 c777776">网站备案/许可证号：京ICP备12051504号-1
                    <a class="c777776" href="https://i1.mayi.com/mayi89/M74/TG/UV/NT8CCV8D7CX72KAQWSX5K6KX858T7P.jpg" target="_blank">营业执照编号：105259760</a> 易云游网络技术（北京）有限公司</p>
                
                <div style="width:300px;margin:0 auto; padding:20px 0;">
                    <a target="_blank" href="https://www.beian.gov.cn/portal/registerSystemInfo?recordcode=11010802022835" style="display:inline-block;text-decoration:none;height:20px;line-height:20px;"><img src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/sz/img/babs.png" style="float:left;">
                        <p style="float:left;height:20px;line-height:20px;margin: 0px 0px 0px 5px; color:#939393;">京公网安备 11010802022835号</p>
                    </a>
                </div>
                <div style="width: 320px;margin:0 auto;">
                    
                    <a href="http://ss.knet.cn/verifyseal.dll?sn=e17040711010867294rryk000000&amp;ct=df&amp;a=1&amp;pa=0.21657814006757303" id="kx_verify" tabindex="-1" target="_blank" kx_type="图标式" class="mr20" style="display:inline-block;">
                        <img src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/sz/img/cnnic1.png" style="width: 80px;" oncontextmenu="return false;" alt="可信网站">
                    </a>
                    
                    <a id="___szfw_logo___" target="_blank" href="http://credit.szfw.org/CX20170406033535570197.html" style="display:inline-block;" class="mr20">
                        <img src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/sz/img/cert.png" style="width: 80px;" alt="诚信网站">
                    </a>
                    
                    <a target="_blank" href="http://www.mayi.com/announcegsj" style="display:inline-block;">
                        <img src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/sz/img/gsj.png" style="width: 80px;" alt="诚信经营">
                    </a>
                </div>
            </div>
        </div>
    </div>	
</body>
</html>