<?php if (!defined('THINK_PATH')) exit();?><div class="pageContent">
  <form method="post" action="<?php echo U('User/edit');?>" class="pageForm required-validate" onsubmit="return validateCallback(this, dialogAjaxDone);">
  <input type="hidden" name="uid" id="uid" value="<?php echo ($data["id"]); ?>" />
    <div class="pageFormContent nowrap" layoutH="56">
     <dl>
        <dt>帐号：</dt>
        <dd>
          <input type="text" name="account" maxlength="20" class="required" readonly="true" value="<?php echo ($data["account"]); ?>" />
          <span class="info">请输入用户帐号</span> ,唯一性值</dd>
      </dl>
      <dl>
        <dt>帐号昵称：</dt>
        <dd>
          <input type="text" name="nickname" maxlength="20" class="required" value="<?php echo ($data["nickname"]); ?>" />
          <span class="info">帐号昵称</span> </dd>
      </dl>
       <dl>
        <dt>密码：</dt>
        <dd>
          <input id="password" type="password" name="password" class="alphanumeric" minlength="6" maxlength="20" />
          <span class="info">需修改密码请输入新密码，否则留空即可<br />字母、数字、下划线 6-20位</span> </dd>
      </dl>
      <dl>
        <dt>确认密码：</dt>
        <dd>
          <input type="password" name="rpassword" equalto="#password"/>
          <span class="info">请输入确认密码</span> </dd>
      </dl>
      <dl>
        <dt>邮箱：</dt>
        <dd>
          <input type="text" name="email" class="email" value="<?php echo ($data["email"]); ?>" />
          <span class="info">请输入您的电子邮件</span> </dd>
      </dl>
      <dl>
        <dt>备注：</dt>
        <dd>
          <textarea name="remark" cols="80" rows="2"><?php echo ($data["remark"]); ?></textarea>
          <span class="info">用户备注</span> </dd>
      </dl>
     <dl>
        <dt>激活状态：</dt>
        <dd>
          <label style="width:100px; float:left;">
            <input name="status" type="radio" id="status_0" value="1"<?php if(($data["status"]) == "1"): ?>checked="checked"<?php endif; ?> />
            启用</label>
          <label style="width:100px; float:left;">
            <input type="radio" name="status" value="0" id="status_1"<?php if(($data["status"]) == "0"): ?>checked="checked"<?php endif; ?> />
            不启用</label>
          <span class="info">激活状态</span> </dd>
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