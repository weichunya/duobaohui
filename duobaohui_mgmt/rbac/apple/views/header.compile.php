<?php
/**
* FEROS™ PHP template engine
* @author feros<admin@feros.com.cn>
* @copyright ©2015 feros.com.cn
* @link http://www.feros.com.cn
* @version 2.0.2
*/
?><!DOCTYPE html><html lang="en"><head><meta charset="utf-8" /><title><?php echo $loginUser->company->company;?>进销存管理系统</title><meta name="keywords" content="<?php echo $loginUser->company->company;?>进销存管理系统" /><meta name="description" content="<?php echo $loginUser->company->company;?>进销存管理系统" /><!--<meta name="viewport" content="width=device-width, initial-scale=1.0" />--><!-- basic styles --><link href="/ace/assets/css/bootstrap.min.css" rel="stylesheet" /><link rel="stylesheet" href="/ace/assets/css/font-awesome.min.css" /><!--[if IE 7]><link rel="stylesheet" href="/ace/assets/css/font-awesome-ie7.min.css" /><![endif]--><!-- page specific plugin styles --><link rel="stylesheet" href="/ace/assets/css/jquery-ui-1.10.3.full.min.css" /><!-- fonts --><link rel="stylesheet" href="/ace/assets/css/css.css" /><!-- ace styles --><link rel="stylesheet" href="/ace/assets/css/ace.min.css" /><link rel="stylesheet" href="/ace/assets/css/ace-rtl.min.css" /><link rel="stylesheet" href="/ace/assets/css/ace-skins.min.css" /><link rel="stylesheet" href="/static/css/base.css" /><!--[if lte IE 8]><link rel="stylesheet" href="/ace/assets/css/ace-ie.min.css" /><![endif]--><!-- inline styles related to this page --><!-- ace settings handler --><script src="/ace/assets/js/ace-extra.min.js"></script><script src="/ace/assets/js/jquery.min.js"></script><!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries --><!--[if lt IE 9]><script src="/ace/assets/js/html5shiv.js"></script><script src="/ace/assets/js/respond.min.js"></script><![endif]--><script src="/static/js/frm.js"></script><script>
			frm.config({'sversion' : 6 ,'defer' : false ,'modulebase' : 'http://<?php echo $_SERVER["SERVER_NAME"];?>/static/js/'});
			frm.vars.domain_url = "";
			frm.vars.user_id = 0;
		</script><style>
			.dz-success-mark{display:none}
			.dz-error-mark{display:none}
		</style></head><body><div class="navbar navbar-default" id="navbar"><script type="text/javascript">
				try{ace.settings.check('navbar' , 'fixed')}catch(e){}
			</script><div class="navbar-container" id="navbar-container"><div class="navbar-header pull-left"><a href="#" class="navbar-brand"><small><i class="icon-leaf"></i><?php echo $loginUser->company->company;?>进销存管理系统
						</small></a><!-- /.brand --></div><!-- /.navbar-header --><div class="navbar-header pull-right" role="navigation"><ul class="nav ace-nav"><li class="grey"><a data-toggle="dropdown" class="dropdown-toggle" href="#"><i class="icon-tasks"></i><span class="badge badge-grey">4</span></a><ul class="pull-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close"><li class="dropdown-header"><i class="icon-ok"></i>
									还有4个任务完成
								</li><li><a href="#"><div class="clearfix"><span class="pull-left">软件更新</span><span class="pull-right">65%</span></div><div class="progress progress-mini "><div style="width:65%" class="progress-bar "></div></div></a></li><li><a href="#"><div class="clearfix"><span class="pull-left">硬件更新</span><span class="pull-right">35%</span></div><div class="progress progress-mini "><div style="width:35%" class="progress-bar progress-bar-danger"></div></div></a></li><li><a href="#"><div class="clearfix"><span class="pull-left">单元测试</span><span class="pull-right">15%</span></div><div class="progress progress-mini "><div style="width:15%" class="progress-bar progress-bar-warning"></div></div></a></li><li><a href="#"><div class="clearfix"><span class="pull-left">错误修复</span><span class="pull-right">90%</span></div><div class="progress progress-mini progress-striped active"><div style="width:90%" class="progress-bar progress-bar-success"></div></div></a></li><li><a href="#">
										查看任务详情
										<i class="icon-arrow-right"></i></a></li></ul></li><li class="purple"><a data-toggle="dropdown" class="dropdown-toggle" href="#"><i class="icon-bell-alt icon-animated-bell"></i><span class="badge badge-important">8</span></a><ul class="pull-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close"><li class="dropdown-header"><i class="icon-warning-sign"></i>
									8条通知
								</li><li><a href="#"><div class="clearfix"><span class="pull-left"><i class="btn btn-xs no-hover btn-pink icon-comment"></i>
												新闻评论
											</span><span class="pull-right badge badge-info">+12</span></div></a></li><li><a href="#"><i class="btn btn-xs btn-primary icon-user"></i>
										切换为编辑登录..
									</a></li><li><a href="#"><div class="clearfix"><span class="pull-left"><i class="btn btn-xs no-hover btn-success icon-shopping-cart"></i>
												新订单
											</span><span class="pull-right badge badge-success">+8</span></div></a></li><li><a href="#"><div class="clearfix"><span class="pull-left"><i class="btn btn-xs no-hover btn-info icon-twitter"></i>
												粉丝
											</span><span class="pull-right badge badge-info">+11</span></div></a></li><li><a href="#">
										查看所有通知
										<i class="icon-arrow-right"></i></a></li></ul></li><li class="green"><a data-toggle="dropdown" class="dropdown-toggle" href="#"><i class="icon-envelope icon-animated-vertical"></i><span class="badge badge-success">5</span></a><ul class="pull-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close"><li class="dropdown-header"><i class="icon-envelope-alt"></i>
									5条消息
								</li><li><a href="#"><img src="/ace/assets/avatars/avatar.png" class="msg-photo" alt="Alex's Avatar" /><span class="msg-body"><span class="msg-title"><span class="blue">Alex:</span>
												不知道写啥 ...
											</span><span class="msg-time"><i class="icon-time"></i><span>1分钟以前</span></span></span></a></li><li><a href="#"><img src="/ace/assets/avatars/avatar3.png" class="msg-photo" alt="Susan's Avatar" /><span class="msg-body"><span class="msg-title"><span class="blue">Susan:</span>
												不知道翻译...
											</span><span class="msg-time"><i class="icon-time"></i><span>20分钟以前</span></span></span></a></li><li><a href="#"><img src="/ace/assets/avatars/avatar4.png" class="msg-photo" alt="Bob's Avatar" /><span class="msg-body"><span class="msg-title"><span class="blue">Bob:</span>
												到底是不是英文 ...
											</span><span class="msg-time"><i class="icon-time"></i><span>下午3:15</span></span></span></a></li><li><a href="inbox.html">
										查看所有消息
										<i class="icon-arrow-right"></i></a></li></ul></li><li class="light-blue"><a data-toggle="dropdown" href="#" class="dropdown-toggle"><img class="nav-user-photo" src="/ace/assets/avatars/user.jpg" alt="Jason's Photo" /><span class="user-info"><small>欢迎光临,</small><?php echo $loginUser->realname; ?></span><i class="icon-caret-down"></i></a><ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close"><li><a href="#"><i class="icon-cog"></i>
										设置
									</a></li><li><a href="#"><i class="icon-user"></i>
										个人资料
									</a></li><li class="divider"></li><li><a href="/user/logout"><i class="icon-off"></i>
										退出
									</a></li></ul></li></ul><!-- /.ace-nav --></div><!-- /.navbar-header --></div><!-- /.container --></div><div class="main-container" id="main-container"><script type="text/javascript">
				try{ace.settings.check('main-container' , 'fixed')}catch(e){}
			</script><div class="main-container-inner"><a class="menu-toggler" id="menu-toggler" href="#"><span class="menu-text"></span></a><?php echo $this->fetch('index/menu');?><div class="main-content"><div class="breadcrumbs" id="breadcrumbs"><script type="text/javascript">
							try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
						</script><ul class="breadcrumb"><li><i class="icon-home home-icon"></i><a href="#">首页</a></li><li class="active">控制台</li></ul><!-- .breadcrumb --><div class="nav-search" id="nav-search"><form class="form-search"><span class="input-icon"><input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" /><i class="icon-search nav-search-icon"></i></span></form></div><!-- #nav-search --></div><div class="page-content"><!--
						<div class="page-header"><h1>
								控制台
								<small><i class="icon-double-angle-right"></i>
									 查看
								</small></h1></div>
--><!-- /.page-header --><div class="row"><div class="col-xs-12"><!-- PAGE CONTENT BEGINS -->