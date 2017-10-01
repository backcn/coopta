<?php 

//发EMail
$email =  trim($_REQUEST['semail']);
tmail($email,"cdn_01@126.com");



function tmail($customerEmail,$mailDress="candidates@coopta.com.cn"){
	require_once("./mail/class.phpmailer.php"); 
	require_once("./mail/class.smtp.php"); 
	
	$mail  = new PHPMailer();  
	$mail->CharSet    ="UTF-8";                 //设定邮件编码，默认ISO-8859-1，如果发中文此项必须设置为 UTF-8
	$mail->IsSMTP();                            // 设定使用SMTP服务
	$mail->SMTPAuth   = true;                   // 启用 SMTP 验证功能
	$mail->SMTPSecure = "ssl";                  // SMTP 安全协议
	$mail->Host       = "smtp.126.com";       // SMTP 服务器
	$mail->Port       = 465;                    // SMTP服务器的端口号
	$mail->Username   = "cmd_02@126.com";  // SMTP服务器用户名
	$mail->Password   = "qingyu";        // SMTP服务器密码
	$mail->SetFrom("cmd_02@126.com", 'Coopta Customer MARKET INSIGHTS');    // 设置发件人地址和名称
	$mail->AddReplyTo($customerEmail,"Coopta Customer MARKET INSIGHTS"); 
												// 设置邮件回复人地址和名称
	$mail->Subject    = "Coopta Customer MARKET INSIGHTS";                     // 设置邮件标题
	$mail->AltBody    = "为了查看该邮件，请切换到支持 HTML 的邮件客户端"; 
												// 可选项，向下兼容考虑
	$mail->Charset='UTF-8';
	
	$message = '
			<!Doctype html>
			<html xmlns=http://www.w3.org/1999/xhtml>
			<head><meta http-equiv=Content-Type content="text/html;charset=utf-8"></head>
			<body>
			<style type="text/css">
table.gridtable {
	font-family: verdana,arial,sans-serif;
	font-size:11px;
	color:#333333;
	border-width: 1px;
	border-color: #666666;
	border-collapse: collapse;
}
table.gridtable th {
	border-width: 1px;
	padding: 8px;
	border-style: solid;
	border-color: #666666;
	background-color: #dedede;
}
table.gridtable td {
	border-width: 1px;
	padding: 8px;
	border-style: solid;
	border-color: #666666;
	background-color: #ffffff;
}
</style>
			<table  class="gridtable">
			<tr>
			<th>Email</th>
			<td><span class="">'.$customerEmail.'</span></td>
			</tr>
			 
			
			</table>
			<body>
			</html>
			';

	$mail->MsgHTML($message);  
	                       // 设置邮件内容
	$mail->AddAddress($mailDress, "Coopta Customer MARKET INSIGHTS");
 
	if(!$mail->Send()) {
		//echo "邮件发送失败";
		echo "Submit fail";
	} else {
		echo "Submit success";
	}
}