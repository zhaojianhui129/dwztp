<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
<title>管理登陆</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Cache-Control" content="no-cache">
<meta http-equiv="Expires" content="-1000">
<link href="__PUBLIC__/Admin/login/style.css" rel="stylesheet" type="text/css">
<script language="javascript">
function loginCheck(form)
{
	if (form.account.value == "")
	{
		form.account.focus();
		return false;
	}

	if (form.password.value == "")
	{
		form.password.focus();
		return false;
	}
	if (form.verify.value == "")
	{
		form.verify.focus();
		return false;
	}
	return true;
}
</script>
</head>
<body onLoad="document.form.account.focus();">
<table width="100%" height="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#002779">
  <tr>
    <td align="center"><table width="468" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td><img src="__PUBLIC__/Admin/login/images/login_1.jpg" width="468" height="23"></td>
        </tr>
        <tr>
          <td><img src="__PUBLIC__/Admin/login/images/login_2.jpg" width="468" height="147"></td>
        </tr>
      </table>
      <table width="468" border="0" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF">
        <tr>
          <td width="16"><img src="__PUBLIC__/Admin/login/images/login_3.jpg" width="16" height="122"></td>
          <td align="center"><table width="230" border="0" cellspacing="0" cellpadding="0">
              <form name="form" action="<?php echo U('Public/checkLogin');?>" method="post" onSubmit="return loginCheck(this);">
                <tr height="5">
                  <td width="4"></td>
                  <td width="56"></td>
                  <td colspan="2"></td>
                </tr>
                <tr height="25">
                  <td></td>
                  <td>用户名</td>
                  <td colspan="2"><input type="text" name="account" size="24" maxlength="30" style="border:1px solid #000000;" id="account"></td>
                </tr>
                <tr height="25">
                  <td>&nbsp;</td>
                  <td>口　令</td>
                  <td colspan="2"><input type="password" name="password" size="24" maxlength="30" style="border:1px solid #000000;" id="password"></td>
                </tr>
                <tr height="25">
                  <td></td>
                  <td>验证码</td>
                  <td width="71"><label for="verify"></label>
                  <input name="verify" type="text" id="verify" size="8" style="border:1px solid #000000;"></td>
                  <td width="99"><img alt="" src="<?php echo U('Public/verify');?>" style="cursor:pointer;" onClick="this.src='<?php echo U('Public/verify');?>?'+Math.random()"></td>
                </tr>
                <tr height="25">
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td colspan="2"><input type="image" src="__PUBLIC__/Admin/login/images/bt_login.gif" width="70" height="18"></td>
                </tr>
              </form>
            </table></td>
          <td width="16"><img src="__PUBLIC__/Admin/login/images/login_4.jpg" width="16" height="122"></td>
        </tr>
      </table>
      <table width="468" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td><img src="__PUBLIC__/Admin/login/images/login_5.jpg" width="468" height="16"></td>
        </tr>
      </table>
      <table width="468" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td align="right" class="copy"><a href="http://blog.srabbit.com/" target="_blank">SRABBIT的兔窩</a> 版权所有</td>
        </tr>
      </table></td>
  </tr>
</table>
</body>
</html>