<?php if (!defined('THINK_PATH')) exit();?><div class="pageContent">
  <form method="post" action="<?php echo U('Node/add');?>" class="pageForm required-validate" onsubmit="return validateCallback(this, dialogAjaxDone);">
  <input type="hidden" name="level" value="<?php echo ($level); ?>" />
  <input type="hidden" name="pid" value="<?php echo ($id); ?>" />
    <div class="pageFormContent" layoutH="56">
      <dl>
        <dt>节点标识：</dt>
        <dd>
          <input name="name" class="required" type="text" size="30" alt="请输入节点标识" />
        </dd>
      </dl>
      <dl>
        <dt>节点标题：</dt>
        <dd>
          <input name="title" class="required" type="text" size="30" alt="请输入节点标题"/>
        </dd>
      </dl>
      <dl style="height:auto;">
        <dt>状态：</dt>
        <dd>
          <label style="width:100px; float:left;">
            <input name="status" type="radio" id="status_0" value="1" checked="checked" />
            激活</label>
          <label style="width:100px; float:left;">
            <input type="radio" name="status" value="0" id="status_1" />
            不激活</label>
        </dd>
      </dl>
      <dl style="height:auto;">
        <dt>注释：</dt>
        <dd>
          <textarea name="remark" rows="3" cols="30"></textarea>
        </dd>
      </dl>
      <dl>
        <dt>排序：</dt>
        <dd>
          <input type="text" name="sort" value="<?php echo ($sort); ?>" class="required digits" size="10" />
        </dd>
      </dl>
    </div>
    <div class="formBar">
      <ul>
        <!--<li><a class="buttonActive" href="javascript:;"><span>保存</span></a></li>-->
        <li>
          <div class="buttonActive">
            <div class="buttonContent">
              <button type="submit">保存</button>
            </div>
          </div>
        </li>
        <li>
          <div class="button">
            <div class="buttonContent">
              <button type="button" class="close">取消</button>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </form>
</div>