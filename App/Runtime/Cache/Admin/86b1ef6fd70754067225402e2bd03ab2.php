<?php if (!defined('THINK_PATH')) exit();?><h2 class="contentTitle">文章添加</h2>
<div style="display:block; overflow:hidden; line-height:21px;">
	
	<div class="tabs">
		<div class="tabsHeader">
			<div class="tabsHeaderContent">
				<ul>
      		        <li><a href="javascript:;"><span>常规信息</span></a></li>
					<li><a href="javascript:;"><span>文章内容</span></a></li>
					<li><a href="javascript:;"><span>高级参数</span></a></li>
				</ul>
			</div>
		</div>
        <form method="post" action="__ACTION__" class="pageForm required-validate" onsubmit="return validateCallback(this,navTabAjaxDone)">
        <input type="hidden" name="art_id" value="<?php echo ($artdata["id"]); ?>" />
		<div class="tabsContent" layoutH="115">
			<div>
            <div class="pageFormContent nowrap" layoutH="158">
            <dl>
				<dt>文章标题：</dt>
				<dd>
					<input type="text" name="title" maxlength="20" style="width:400px;" value="<?php echo ($artdata["title"]); ?>" class="required" />
					<span class="info">请输入文章标题</span>
				</dd>
			</dl>
			<dl>
				<dt>简略标题：</dt>
				<dd>
					<input type="text" name="shottitle" value="<?php echo ($artdata["shottitle"]); ?>" style="width:300px;" />
					<span class="info"></span>
				</dd>
			</dl>
			<dl>
				<dt>自定义属性：</dt>
				<dd style="width:910px;">
                <label style="width:80px;"><input type="checkbox" name="attr[]" value="h"<?php if( in_array('h' , json_decode($artdata['attr'])) ){ echo ' checked';} ?> />头条[ h ]</label>
                <label style="width:80px;"><input type="checkbox" name="attr[]" value="c"<?php if( in_array('c' , json_decode($artdata['attr'])) ){ echo ' checked';} ?> />推荐[ c ]</label>
                <label style="width:80px;"><input type="checkbox" name="attr[]" value="f"<?php if( in_array('f' , json_decode($artdata['attr'])) ){ echo ' checked';} ?> />幻灯[ f ]</label>
                <label style="width:80px;"><input type="checkbox" name="attr[]" value="a"<?php if( in_array('a' , json_decode($artdata['attr'])) ){ echo ' checked';} ?> />特荐[ a ]</label>
                <label style="width:80px;"><input type="checkbox" name="attr[]" value="s"<?php if( in_array('s' , json_decode($artdata['attr'])) ){ echo ' checked';} ?> />滚动[ s ]</label>
                <label style="width:80px;"><input type="checkbox" name="attr[]" value="b"<?php if( in_array('b' , json_decode($artdata['attr'])) ){ echo ' checked';} ?> />加粗[ b ]</label>
                <label style="width:80px;"><input type="checkbox" name="attr[]" value="p"<?php if( in_array('p' , json_decode($artdata['attr'])) ){ echo ' checked';} ?> />图片[ p ]</label>
				<span class="info"></span>
				</dd>
			</dl>
			<dl>
				<dt>权重：</dt>
				<dd>
					<input id="weight" type="text" name="weight" class="required digits" style="width:50px;"  value="<?php echo ($artdata["weight"]); ?>" />
					<span class="info">(越小越靠前)</span>
				</dd>
			</dl>
            <dl>
            	<dt>缩略图：</dt>
                <dd>
                <input name="attachment.id" id="artedit_attachmentid" value="<?php echo ($artdata["attachid"]); ?>" type="hidden">
				<div id="artedit_attach"></div>
				<span class="info"></span>
                </dd>
            </dl>
            <dl>
            	<dt>图片预览：</dt>
                <dd>
                <img name="thumbimg" id="artedit_thumbimg" src="__ROOT__<?php echo ($artdata["savepath"]); echo ($artdata["thumbname"]); ?>" />
                </dd>
            </dl>
            <dl>
            	<dt>文章所属栏目：</dt>
                <dd>
                <?php echo ($cat_select); ?>
                </dd>
            </dl>
            <dl>
            	<dt>关键字：</dt>
                <dd><input type="text" name="keywords" value="<?php echo ($artdata["keywords"]); ?>" style="width:400px;" /></dd>
            </dl>
            <dl>
            	<dt>内容摘要：</dt>
                <dd><textarea name="des" cols="80" rows="2"><?php echo ($artdata["des"]); ?></textarea></dd>
            </dl>
            </div>
			</div>
			
			<div>
<textarea class="editor" name="content" rows="8" cols="100" style="height:440px;"
upLinkUrl="<?php echo U('Attach/editor_linkupload');?>" upLinkExt="tar,zip,tgz,rar,ppt,pptx,doc,pdf,xls,xlsx,txt"
upImgUrl="<?php echo U('Attach/editor_imgupload');?>" upImgExt="jpg,jpeg,gif,png"
upFlashUrl="<?php echo U('Attach/editor_flashupload');?>" upFlashExt="swf"
upMediaUrl="<?php echo U('Attach/editor_mediaupload');?>" upMediaExt:"avi">
<?php echo ($artdata["content"]); ?>
							</textarea>
			</div>
			<div>
                <div class="pageFormContent nowrap" layoutH="158">
                    <dl>
                        <dt>评论选项：</dt>
                        <dd>
                        <label style="width:80px;"><input name="iscomment" type="radio" value="1"<?php if(($artdata['iscomment']) == "1"): ?>checked="checked"<?php endif; ?> />允许评论</label>
                        <label style="width:80px;"><input name="iscomment" type="radio" value="0"<?php if(($artdata['iscomment']) == "0"): ?>checked="checked"<?php endif; ?> />禁止评论</label>
                      </dd>
                    </dl>
                    <dl>
                        <dt>浏览次数：</dt>
                        <dd><input type="text" name="views" style="width:100px;" value="<?php echo ($artdata["views"]); ?>" class="digits" /></dd>
                    </dl>
                    <dl>
                        <dt>标题颜色：</dt>
                        <dd><input type="color" name="title_color" style="width:50px;" id="title_color" value="<?php echo ($artdata["title_color"]); ?>" readonly /></dd>
                    </dl>
                    <dl>
                        <dt>发布时间：</dt>
                        <dd><input type="text" name="subtime" class="date" dateFmt="yyyy-MM-dd HH:mm:ss" value="<?php echo (date("Y-m-d H:i:s",$artdata["subtime"])); ?>" readonly="true" /><a class="inputDateButton" href="javascript:;">选择</a></dd>
                    </dl>
                    <dl>
                        <dt>自定义模板：</dt>
                        <dd><input type="text" name="template_file" value="<?php echo ($artdata["temp_file"]); ?>" /><span class="info">例如：Article_view，（不要加.html）</span></dd>
                    </dl>
                </div>
            </div>
		</div>
        <div class="formBar">
			<ul>
				<li><div class="buttonActive"><div class="buttonContent"><button type="submit">提交</button></div></div></li>
				<li><div class="button"><div class="buttonContent"><button type="button" class="close">取消</button></div></div></li>
			</ul>
		</div>
        <div class="tabsFooter">
			<div class="tabsFooterContent"></div>
		</div>
        </form>
		
	</div>

</div>
<script type="text/javascript">
var fileCount = 0;
var addedFiles = 0;
var fileLimit = 1;
$(document).ready(function() {
	var artedituploader	=	new	qq.FineUploader({
		element: $('#artedit_attach')[0],
		request:{
			endpoint:"<?php echo U('Attach/artuploadimg');?>",
			forceMultipart: true,
			inputName: 'attach'
			},
		multiple: false,
		validation:{
			allowedExtensions:['jpg', 'gif', 'png', 'jpeg']
			},
		callbacks:{
			onComplete: function(id, fileName, responseJSON ){
					if (responseJSON.success) {
						$("#artedit_attachmentid").val( responseJSON.id );
						$("#artedit_thumbimg").attr("src" , responseJSON.attachmentPath);
					}
					if( responseJSON.error ){
						alert( responseJSON.error );
					}
				}
			},
		debug: true
		});
});
$('#title_color').ColorPicker({
	onSubmit: function(hsb, hex, rgb, el) {
		$(el).val(hex);
		$(el).ColorPickerHide();
	},
	onBeforeShow: function () {
		$(this).ColorPickerSetColor(this.value);
	}
}).bind('keyup', function(){
	$(this).ColorPickerSetColor(this.value);
});
</script>