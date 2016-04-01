<?php
/**
* FEROS™ PHP template engine
* @author feros<admin@feros.com.cn>
* @copyright ©2015 feros.com.cn
* @link http://www.feros.com.cn
* @version 2.0.2
*/
?><h3 class="smaller lighter blue">添加权限组</h3><div class="alert alert-danger" style="display:none"><i class="icon-remove"></i><span></span></div><div class="alert alert-success" style="display:none"><i class="icon-ok"></i><span></span></div><form class="form-horizontal" id="validation-form" method="post" novalidate="novalidate" action="<?php echo $fromDomain;?>role_add"><div class="form-group"><label class="control-label col-sm-1 no-padding-right" for="role_id">id:</label><div class="col-xs-12 col-sm-9"><div class="clearfix"><input type="text" id="role_id" name="role_id" class="col-xs-12 col-sm-5" value=""></div></div></div><div class="form-group"><label class="control-label col-sm-1 no-padding-right" for="name">名称:</label><div class="col-xs-12 col-sm-9"><div class="clearfix"><input type="text" id="name" name="name" class="col-xs-12 col-sm-5" value=""></div></div></div><div class="space-4">分配访问权限:</div><br/><div class="clearfix form-actions table-responsive checkbox_area"><table id="sample-table-2" class="table table-striped table-bordered table-hover"><thead><tr><th class="center"><label><input type="checkbox" class="checkbox_select_all" /><span class="lbl"></span></label></th><th>ID</th><th>名称</th><th>action</th><th class="hidden-480">状态</th></tr></thead><tbody><?php foreach($nodeList as $val):?><tr><td class="center"><label><input type="checkbox"  name="node_id[]" value="<?php echo $val->node_id;?>"/></label></td><td><?php echo $val->node_id;?></td><td style="padding-left:<?php echo $val->level*15; ?>px"><?php echo $val->name?></td><td><?php echo $val->action;?></td><td><?php echo $val->status==0 ? '<i class="icon-ok green"></i>' : '<i class="red icon-ban-circle"></i>';?></td></tr><?php endforeach;?></tbody></table></div><div class="clearfix form-actions"><div class="col-md-offset-3 col-md-9"><!-- <input type="SUBMIT" class="btn btn-info" value="保存" /> --><button class="btn btn-info" type="button" id="form_submit"><i class="icon-ok bigger-110"></i>
				保存
			</button></div></div></form><script>
	$(function(){ 
		$(".readonly").click( 
			function(){ 
				this.checked = !this.checked; 
			} 
		); 

		$('#form_submit').click(function (){
			var form = $('#validation-form');
			$.ajax({
				url:form.attr('action'),
				type:form.attr('method'),
				data:form.serialize(),
				dataType:"json",
				success:function(data){
					if(data.status){
						$('.alert-success span').html(data.message);
						$('.alert-success').show(300);
						$('.alert-danger').hide(300);
					}else{
						$('.alert-danger span').html(data.message || data);
						$('.alert-danger').show(300);
						$('.alert-success').hide(300);
					}
				}
			});
		});

		/* 选择框 */
		$('.checkbox_select_all').click(function(){
			if($(this).attr('checked')=='checked'){
				$(this).parents('.checkbox_area').find('input[type="checkbox"]').attr('checked','checked');
			}else{
				$(this).parents('.checkbox_area').find('input[type="checkbox"]').attr('checked',false);
			}
		});


	}); 
</script>
