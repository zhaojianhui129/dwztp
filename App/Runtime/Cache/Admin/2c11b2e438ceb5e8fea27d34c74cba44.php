<?php if (!defined('THINK_PATH')) exit();?><form id="pagerForm" method="post" action="#rel#">
	<input type="hidden" name="pageNum" value="1" />
	<input type="hidden" name="numPerPage" value="<?php echo ($numPerPage); ?>" />
    <input type="hidden" name="keywords" value="<?php echo ($keywords); ?>" />
    <input type="hidden" name="artcat_id" value="<?php echo ($valartcat_id); ?>" />
</form>


<div class="pageHeader">
	<form rel="pagerForm"onsubmit="return navTabSearch(this);" action="<?php echo U('Article/index');?>" method="post">
	<div class="searchBar">
		<table class="searchContent">
			<tr>
				<td>
					关键字：<input type="text" value="<?php echo ($keywords); ?>" name="keywords" />
				</td>
				<td>
					<?php echo ($cat_select); ?>
				</td>
			</tr>
		</table>
		<div class="subBar">
			<ul>
				<li><div class="buttonActive"><div class="buttonContent"><button type="submit">检索</button></div></div></li>
		  </ul>
	  </div>
	</div>
	</form>
</div>
<div class="pageContent">
	<div class="panelBar">
		<ul class="toolBar">
			<?php if( ishavepower('Article/add') ){ ?><li><a class="add" href="<?php echo U('Article/add',array('artcat_id'=>$valartcat_id));?>" target="navTab" rel="article_add"><span>添加</span></a></li><?php } ?>
            <?php if( ishavepower('Article/edit') ){ ?><li><a class="edit" href="<?php echo U('Article/edit');?>?art_id={art_id}" target="navTab" rel="article_edit" title="编辑文章" warn="请指定要修改的文章"><span>修改</span></a></li><?php } ?>
		</ul>
	</div>
	<table class="table" layoutH="138" width="100%">
		<thead>
			<tr>
				<th>序号</th>
				<th>文章标题</th>
				<th>发布时间</th>
				<th>类目</th>
				<th>点击量</th>
				<th align="center">发布人</th>
				<th align="center">操作</th>
			</tr>
		</thead>
		<tbody>
        <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr target="art_id" rel="<?php echo ($vo["id"]); ?>">
				<td><?php echo ($vo["id"]); ?></td>
				<td><?php echo ($vo["title"]); ?></td>
				<td><?php echo (date("Y-m-d H:i:s",$vo["subtime"])); ?></td>
				<td><?php echo ($vo["cat_name"]); ?></td>
				<td><?php echo ($vo["views"]); ?></td>
				<td><?php echo ($vo["account"]); ?></td>
				<td align="center">
                    <?php if( ishavepower('Article/edit') ){ ?><a title="编辑" target="navTab" rel="article_edit" href="<?php echo U('Article/edit',array('art_id'=>$vo['id']));?>" class="btnEdit">编辑</a><?php } ?>
                    <?php if( ishavepower('Article/del') ){ ?><a title="你确定删除该文章吗？" target="ajaxTodo" href="<?php echo U('Article/del',array('art_id'=>$vo['id']));?>" class="btnDel">删除</a><?php } ?>
                </td>
			</tr><?php endforeach; endif; else: echo "" ;endif; ?>
		</tbody>
	</table>
	<div class="panelBar">
		<div class="pages"> <span>显示</span>
      <select class="combox" name="numPerPage" onChange="navTabPageBreak({numPerPage:this.value})">
       <option value="5"<?php if(($numPerPage) == "5"): ?>selected="selected"<?php endif; ?>>5</option>
      	<option value="10"<?php if(($numPerPage) == "10"): ?>selected="selected"<?php endif; ?>>10</option>
        <option value="20"<?php if(($numPerPage) == "20"): ?>selected="selected"<?php endif; ?>>20</option>
        <option value="50"<?php if(($numPerPage) == "50"): ?>selected="selected"<?php endif; ?>>50</option>
        <option value="100"<?php if(($numPerPage) == "100"): ?>selected="selected"<?php endif; ?>>100</option>
        <option value="200"<?php if(($numPerPage) == "200"): ?>selected="selected"<?php endif; ?>>200</option>
      </select>
      <span>条，共<?php echo ($totalCount); ?>条</span> </div>
    <div class="pagination" targetType="navTab" totalCount="<?php echo ($totalCount); ?>" numPerPage="<?php echo ($numPerPage); ?>" pageNumShown="10" currentPage="<?php echo ($currentPage); ?>"></div>
	</div>
</div>