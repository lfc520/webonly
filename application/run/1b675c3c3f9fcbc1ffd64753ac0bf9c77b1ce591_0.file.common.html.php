<?php
/* Smarty version 3.1.29, created on 2016-10-31 20:31:48
  from "/data/home/qyu1988070001/htdocs/application/views/home/common.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_581739b4ede623_77985215',
  'file_dependency' => 
  array (
    '1b675c3c3f9fcbc1ffd64753ac0bf9c77b1ce591' => 
    array (
      0 => '/data/home/qyu1988070001/htdocs/application/views/home/common.html',
      1 => 1477917103,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_581739b4ede623_77985215 ($_smarty_tpl) {
?>
<!-- Modal开始 -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document" id="loginBox">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title text-center" id="myModalLabel">欢 迎 登 陆</h4>
            </div>
            <div class="modal-body">
            	<div class="row">
            		<div class="alert alert-danger feedback"></div>
            	</div>
	            <div class="row">
					<div class="center-block">
						<img class="img-circle center-block" src="public/images/default.jpg" alt="默认图片" id="defaultimg">
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12 col-md-10  col-md-offset-1 ">
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon">
								<i class="glyphicon glyphicon-user"></i>
								</span>
								<input class="form-control" placeholder="用户名"	id="login_username" name="loginname" type="text" autofocus>
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"> <i
									class="glyphicon glyphicon-lock"></i>
								</span> <input class="form-control" placeholder="密码"
									id="login_pwd" name="password" type="password" value="">
							</div>
						</div>
						<div class="form-group loginBtn">
<input type="submit" class="btn btn-lg btn-primary btn-block" id="loginBtn" value="登 录">
						</div>
					</div>
				</div>
            </div>
            <div class="modal-footer">
                	<a href="?a=reg&m=show" class="pull-left">注册 </a>
                	<a href="?a=resetpwd&action=forget">忘记密码 </a>
            </div>
        </div>
    </div>
</div>
	<!-- reportModal -->
<div class="modal fade" id="reportModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="padding-top:5px;padding-bottom:5px;text-align:center;">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h2 class="modal-title" id="myModalLabel">感谢您的反馈</h2>
      </div>
      <div class="modal-body" style="padding-bottom:5px;">
        <div class="form-group">
			<div class="input-group">
				<span class="input-group-addon">
					<i class="glyphicon glyphicon-user"></i>
				</span>
				<input class="form-control" placeholder="用户名"	id="username" type="text" autofocus>
			</div>
		</div>
		<div class="form-group">
			<div class="input-group">
				<span class="input-group-addon">
				<i class="glyphicon glyphicon glyphicon-envelope"></i>
				</span> 
				<input class="form-control" placeholder="任意的联系方式" id="contact" name="password" type="password" value="">
			</div>
		</div>
		<div class="form-group" style="margin-bottom:5px;">
			<div class="input-group">
				<span class="input-group-addon">
				<i class="glyphicon glyphicon glyphicon-book"></i>
				</span> 
				<textarea class="form-control" id="reportWord" style="height:50px;"></textarea>
			</div>
		</div>
		<div class="form-group" style="margin-bottom:0;">
			<div class="input-group" style="margin:auto;">
				<span class="">
				<i></i>
				</span> 
				<button class="btn btn-primary" id="reportBar">提 交</button>
			</div>
		</div>
      </div>
      <div class="modal-footer" style="padding-top:5px;padding-bottom:5px;">
        <a>Thanks For Your Feedback</a>
      </div>
    </div>
  </div>
</div>
<!-- 下载Modal -->
<div class="modal fade" id="downloadModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">关闭</span></button>
        <h4 class="modal-title" id="myModalLabel">资料下载</h4>
      </div>
      <div class="modal-body">
        <table class="table table-bordered table-striped table-hover" style="border:1px solid #2489c5;margin-bottom:5px;">
					<tbody><tr>				
						<td style="width:90px;"><span id="title"></span></td>
						<td style="width:35px;">		
							<a href="#" info="1" target="_blank" id="downloadBtn"><i class="fa fa-download" style="color:gray;"></i>下载</a>							
						</td>
						<td style="width:45px;"><span id="count"></span>次</td>
						<td style="width:90px;"><span id="time"></span></td>
					</tr>
					<tr>
						<td style="width:90px;" colspan="4"><span id="description"></span></td>
					</tr>						
										
			</tbody></table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
      </div>
    </div>
  </div>
</div>
<!-- msg Modal -->
<div class="modal fade" id="msgModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">关闭</span></button>
        <h4 class="modal-title" id="myModalLabel">警告信息</h4>
      </div>
      <div class="modal-body">
			<h3 class="text-danger msg"></h3>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
      </div>
    </div>
  </div>
</div>
<!-- info_detail Modal -->
<div class="modal fade" id="info_detail" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="padding:5px;">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">关闭</span></button>
        <h4 class="modal-title text-center" id="myModalLabel"></h4>
      </div>
      <div class="modal-body">
			<span class="info_detail"></span>
      </div>
      <div class="modal-footer" style="padding:5px;">
        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
      </div>
    </div>
  </div>
</div><?php }
}
