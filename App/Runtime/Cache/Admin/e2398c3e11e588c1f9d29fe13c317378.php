<?php if (!defined('THINK_PATH')) exit();?><div class="pageContent">
  <form method="post" action="<?php echo U('Menu/edit');?>" class="pageForm required-validate" onsubmit="return validateCallback(this, dialogAjaxDone);">
  <input type="hidden" name="id" value="<?php echo ($id); ?>" />
  <input type="hidden" name="pid" value="<?php echo ($pid); ?>" />
  <input type="hidden" name="level" value="<?php echo ($level); ?>" />
    <div class="pageFormContent" layoutH="56">
      <dl>
        <dt>标题：</dt>
        <dd>
          <input name="title" class="required" type="text" size="30" value="<?php echo ($title); ?>" alt="请输入菜单标题" />
        </dd>
      </dl>
      <dl>
        <dt>是否站外链：</dt>
        <dd>
          <p>
            <label>
              <input type="radio" name="isoutsite" value="1" id="isoutsite_0" <?php if(($isoutsite) == "1"): ?>checked="checked"<?php endif; ?> />
              是</label>
            <label>
              <input name="isoutsite" type="radio" id="isoutsite_1" value="0" <?php if(($isoutsite) == "0"): ?>checked="checked"<?php endif; ?> />
            否</label>
            <br />
          </p>
        </dd>
      </dl>
      <dl style="height:auto;">
        <dt>链接地址：</dt>
        <dd>
          <input name="trueurl" class="required" type="text" value="<?php echo ($trueurl); ?>" size="30" alt="请输入链接地址" id="trueurl"/>
          <span class="info">示例：[分组/模块/操作]或者[/自定义]须路由配置文件配合或者外部链接</span>
        </dd>
      </dl>
      <dl style="height:auto;">
        <dt>参数：</dt>
        <dd>
        <input name="param" type="text" size="30" value="<?php echo ($param); ?>" alt="请输入菜单参数" /><span class="info">示例：参数1=值1&参数2=值2</span>
        </dd>
      </dl>
      <dl>
        <dt>排序：</dt>
        <dd>
          <input type="text" name="sort" value="<?php echo ($sort); ?>" class="required digits" size="10" />
        </dd>
      </dl>
      <dl style="height:auto;">
        <dt>状态：</dt>
        <dd>
          <label style="width:100px; float:left;">
            <input name="disp" type="radio" id="disp_0" value="1" <?php if(($disp) == "1"): ?>checked="checked"<?php endif; ?> />
            激活</label>
          <label style="width:100px; float:left;">
            <input type="radio" name="disp" value="0" id="disp_1" <?php if(($disp) == "0"): ?>checked="checked"<?php endif; ?> />
            不激活</label>
        </dd>
      </dl>
      <dl style="height:auto;">
        <dt>打开方式：</dt>
        <dd>
          <label for="target"></label>
          <select name="target" id="target">
            <option value="_blank" <?php if(($target) == "_blank"): ?>selected="selected"<?php endif; ?>>新窗口</option>
            <option value="_parent" <?php if(($target) == "_parent"): ?>selected="selected"<?php endif; ?>>父窗体</option>
            <option value="_self" <?php if(($target) == "_self"): ?>selected="selected"<?php endif; ?>>当前窗体</option>
            <option value="_top"<?php if(($target) == "_top"): ?>selected="selected"<?php endif; ?>>当前窗体并替换整个窗体</option>
          </select>
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