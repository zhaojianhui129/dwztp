<?php if (!defined('THINK_PATH')) exit();?><select class="combox" name="<?php echo ($param["inputName"]); ?>">
<?php if(is_array($nodeList)): $i = 0; $__LIST__ = $nodeList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["title"]); ?></option>
    <?php if(!empty($vo["_child"])): if(is_array($vo["_child"])): $i = 0; $__LIST__ = $vo["_child"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$chivo1): $mod = ($i % 2 );++$i;?><option value="<?php echo ($chivo1["id"]); ?>">---<?php echo ($chivo1["title"]); ?></option><?php endforeach; endif; else: echo "" ;endif; endif; endforeach; endif; else: echo "" ;endif; ?>
</select>