<?php if (!defined('THINK_PATH')) exit();?><div class="pageContent">
	<form method="post" action="__ACTION__" class="pageForm required-validate" onsubmit="return validateCallback(this, dialogAjaxDone
);">
		<input type="hidden" name="submit_chk" value="1" />
		<div class="pageFormContent" layoutH="56">
			<p>
				<label>商品分类名称：</label>
				<input class="required textInput valid" name="cat_name" type="text" size="30" value=""/>
			</p>
			<p>
				<label>上层分类：</label>
				<?php echo ($cat_select); ?>
			</p>
			<p style="height:30px;">
				<label>分类模板：</label>
				<input  type="text" size="30" name="template_file" value=""/><span class="info">例如：Article:index，（不要加.html）</span>
			</p>
				<input name="sort" type="hidden" size="15" value="<?php echo ($max_sort); ?>" />
			<p>
				<label>状态：</label>
	          	<label style="width:100px; float:left;">
	            	<input name="is_show" id="status_0" value="1" checked="checked" type="radio">显示
	            </label>
	          	<label style="width:100px; float:left;">
	            	<input name="is_show" value="0" id="status_1" type="radio">隐藏
	            </label>
			</p>
			<p>
				<label>关键字：</label>
				<input name="keywords" type="text" size="30" value=""/>
			</p>
			<p>
				<label>分类描述：</label>
				<textarea cols="30" rows="3" name="cat_desc" class="textInput valid"></textarea>
			</p>
		</div>
		<div class="formBar">
			<ul>
				<!--<li><a class="buttonActive" href="javascript:;"><span>保存</span></a></li>-->
				<li><div class="buttonActive"><div class="buttonContent"><button type="submit">保存</button></div></div></li>
				<li>
					<div class="button"><div class="buttonContent"><button type="button" class="close">取消</button></div></div>
				</li>
			</ul>
		</div>
	</form>
</div>