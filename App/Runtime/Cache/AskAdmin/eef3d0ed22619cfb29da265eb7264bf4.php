<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>修改站点信息</title>
	<link rel="stylesheet" href="/Public/Css/public.css" />
</head>
<body>
	<form action="<?php echo U('System/setSite');?>" method="post">
		<table class="table">
			<tr><th colspan="2" style="text-align:left">修改站点信息</th></tr>
			<tr>
				<td width="30%" align="right"><b>网站名称：</b></td>
				<td>
					<input type="text" name="ask_title" style="width:520px;" value="<?php echo (C("ask_title")); ?>"/>
				</td>
			</tr>
			<tr>
				<td width="30%" align="right"><b>网站关键字：</b></td>
				<td>
					<input type="text" name="ask_keyword" style="width:520px;" value="<?php echo (C("ask_keyword")); ?>"/>
				</td>
			</tr>
			<tr>
				<td width="30%" align="right"><b>网站描述：</b></td>
				<td>
					<textarea name="ask_description" cols="70" rows="3"><?php echo (C("ask_description")); ?></textarea>
				</td>
			</tr>
			<tr>
				<td width="30%" align="right"><b>网站名称：</b></td>
				<td>
					<textarea name="ask_copyright" cols="70" rows="3"><?php echo (C("ask_copyright")); ?></textarea>
				</td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" value="保存修改" class="btn2" /></td>
			</tr>
		</table>
	</form>
</body>
</html>