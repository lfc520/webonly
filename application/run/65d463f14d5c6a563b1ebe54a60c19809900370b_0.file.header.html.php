<?php
/* Smarty version 3.1.29, created on 2016-10-31 20:35:31
  from "/data/home/qyu1988070001/htdocs/application/views/home/header.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58173a93a24078_83828851',
  'file_dependency' => 
  array (
    '65d463f14d5c6a563b1ebe54a60c19809900370b' => 
    array (
      0 => '/data/home/qyu1988070001/htdocs/application/views/home/header.html',
      1 => 1477917328,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58173a93a24078_83828851 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title><?php echo @constant('SITE_NAME');?>
</title>
</head>
<body>
<div class="row frame">
	<div class="col-md-8">
		<!-- <h3><a href="?">WEBONLY.ORG</a></h3> -->
		<a href="?"><img src='public/images/logo.png' title='webonly.org'></a>	
	</div>
	<div class="col-md-4 text-right" style="height:84px;line-height:84px;">
		<span class="UIA">
			<a href="javascript:void(0);" data-toggle="modal" data-target="#loginModal">登录</a>
			<a href="?a=reg&m=show">注册</a> 
		</span>
		<span class="UIB">
		<ul class="list-inline unstyled">
			<li class="dropdown">
              <img src="public/images/default.jpg" class="img-circle" id="defaultUser">
            </li>
            <!--未读信息  -->
			<li class="dropdown" id="msglist">
              <a id="drop1" href="#" class="dropdown-toggle fa fa-envelope-o" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="bubble"></span>
              </a>
              <style>
              	#msglist .dropdown-menu li{
					border-bottom:1px solid #eee;
              	}
              </style>
              <ul class="dropdown-menu" role="menu" aria-labelledby="drop1">
              
              </ul>
            </li>
            <!--会员中心  -->
            <li class="dropdown">
              <a id="userValue" href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
              <ul class="dropdown-menu" role="menu" aria-labelledby="userValue">
              	<i class="fa fa-caret-up"></i>
                <li role="presentation"><a href="#">点数:<span class="point"></span></a></li>
                <li role="presentation" class="divider"></li>
                <li role="presentation"><a href="" id="memberSpace" target="_blank">会员中心</a></li>
                <li role="presentation" class="divider"></li>
                <li role="presentation"><a href="#" id="logoutBar">注销</a></li>
              </ul>
            </li>
		</ul>
			<!-- <ul class="list-inline">                            
	             <li><a href="javascript:void(0);" id="userValue"></a></li>
	             下拉菜单开始
	             <li role="presentation" class="dropdown">
	             	<img src="public/images/default.jpg" class="img-circle" id="defaultUser">
	                <a id="userValue" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
	                </a>                
	              </li>              
	              <li role="presentation" class="dropdown">
	              	<a href="#" id="cog" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
		              	<span class="glyphicon glyphicon-asterisk"></span>
		              	<span class="caret"></span>
	              	</a> 
	              	<ul id="menu3" class="dropdown-menu text-left" aria-labelledby="cog"> 
	              	<i class="fa fa-caret-up"></i>             	
	                    <li><a href="#">点数:<span class="point"></span></a></li>
	                    <li role="separator" class="divider"></li>                    
	                    <li><a href="" id="memberSpace" target="_blank">会员中心</a></li>
	                    <li role="separator" class="divider"></li>
	                    
	                    <li><a href="javascript:QC.Login.signOut();">退出QQ</a></li>
	                 </ul>
	              </li>
	              <li role="presentation" class="dropdown">
	              	<a href="#" id="cog" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
		              	<span class="glyphicon glyphicon-asterisk"></span>
		              	<span class="caret"></span>
	              	</a> 
	              	<ul id="menu3" class="dropdown-menu text-left" aria-labelledby="cog"> 
	              	<i class="fa fa-caret-up"></i>             	
	                    <li><a href="#">点数:<span class="point"></span></a></li>
	                    <li role="separator" class="divider"></li>                    
	                    <li><a href="" id="memberSpace" target="_blank">会员中心</a></li>
	                    <li role="separator" class="divider"></li>
	                    <li><a href="#" id="logoutBar">注销</a></li>
	                    <li><a href="javascript:QC.Login.signOut();">退出QQ</a></li>
	                 </ul>
	              </li>
	              下拉菜单结束
	        </ul> -->
		</span>
	</div>
</div>
<div class="inner"></div>
</body>
</html><?php }
}
