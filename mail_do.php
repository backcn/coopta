<?php
header("Content-type:text/html;charset=utf-8");
include(str_replace("\\", "/", dirname(__FILE__))."/mail/class.phpmailer.php"); 
include(str_replace("\\", "/", dirname(__FILE__))."/mail/class.smtp.php"); 


tmail("test");die(); 

if(!empty($_REQUEST['postSubscription'])){ 

	$Industry = array("酒吧Bar","酒类公司Spirits Company","其他 Other");
	$table = '
<!Doctype html>
<html xmlns=http://www.w3.org/1999/xhtml>
<head><meta http-equiv=Content-Type content="text/html;charset=utf-8"></head>
<body>
<table border=1>
<tr>
<th>Email</th>
<td><span class="">'.$_REQUEST['Name'].'</span></td>
</tr>
<tr>
<th>Content</th>
<td><span class="">'.$_REQUEST['JobTitle'].'</span></td>
</tr>
<tr>
<th>Attachment</th>
<td><span class="">'.$_REQUEST['Tel'].'</span></td>
</tr>   

</table>
<body>
</html>
';


}
 


function tmail($message,$mailDress="cmd_01@126.com"){
	$mail  = new PHPMailer();  
	$mail->CharSet    ="UTF-8";                 //设定邮件编码，默认ISO-8859-1，如果发中文此项必须设置为 UTF-8
	$mail->IsSMTP();                            // 设定使用SMTP服务
	$mail->SMTPAuth   = true;                   // 启用 SMTP 验证功能
	$mail->SMTPSecure = "ssl";                  // SMTP 安全协议
	$mail->Host       = "smtp.126.com";       // SMTP 服务器
	$mail->Port       = 465;                    // SMTP服务器的端口号
	$mail->Username   = "cmd_02@126.com";  // SMTP服务器用户名
	$mail->Password   = "qingyu";        // SMTP服务器密码
	$mail->SetFrom('cmd_02@126.com', 'Coopta Customer Mail');    // 设置发件人地址和名称
	$mail->AddReplyTo("cmd_02@126.com","Coopta Customer Mail"); 
												// 设置邮件回复人地址和名称
	$mail->Subject    = "Coopta Customer Mail";                     // 设置邮件标题
	$mail->AltBody    = "为了查看该邮件，请切换到支持 HTML 的邮件客户端"; 
												// 可选项，向下兼容考虑
	$mail->Charset='UTF-8';
	$mail->MsgHTML($message);                         // 设置邮件内容
	$mail->AddAddress($mailDress, "Coopta Customer Mail");
	$mail->AddAttachment("./uploads/146515234566431620EZ-ZAHIR Issam.doc"); // 附件 
	if(!$mail->Send()) {
		//echo "邮件发送失败";
		//print_r($mail->ErrorInfo);
	} else {
		//echo "Submit successfully ! 订阅需审查，下期杂志出前如订阅成功我们会邮件告知";
	}
}

?>