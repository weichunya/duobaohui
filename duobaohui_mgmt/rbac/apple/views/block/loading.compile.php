<?php
/**
* FEROS™ PHP template engine
* @author feros<admin@feros.com.cn>
* @copyright ©2015 feros.com.cn
* @link http://www.feros.com.cn
* @version 2.0.2
*/
?><style>
	.bg_load{
		background-color:#000;
		filter:alpha(opacity=25);
		-moz-opacity:0.25;
		opacity:0.25;
		position:fixed;
		z-index:1000;
		top:0;
		left:0;
	}
	.load{
		width:60px;
		height:65px;
		background:url(/static/images/ajax-loader.gif) no-repeat;
		margin:0 auto;
	}
</style><div class="bg_load" style="display:none"><div class="load"></div></div><script>
	$(".bg_load").width($(document).width());
	$(".bg_load").height($(document).height());
	$(".load").css('margin-top' , $(document).height() / 2 - 50);
</script>
