<?php
/**
 * Handles Comment Post to WordPress and prevents duplicate comment posting.
 *
 * @package WordPress
 */
 
if ( 'POST' != $_SERVER['REQUEST_METHOD'] ) {
	header('Allow: POST');
	header('HTTP/1.1 405 Method Not Allowed');
	header('Content-Type: text/plain');
	exit;
}

/** Sets up the WordPress Environment. */
require( dirname(__FILE__) . '/wp-load.php' );

nocache_headers();

$comment = wp_handle_comment_submission( wp_unslash( $_POST ) );
 
$Attachment = "";

if (!empty($comment->comment_ID) && ($_FILES["file"]["size"] < 2000000) && !empty($_FILES["file"]["name"]) ){

	echo $name = $comment->comment_ID."_".$_FILES["file"]["name"];
	move_uploaded_file($_FILES["file"]["tmp_name"],"uploads/" . $name);
	
	$sql  =" update tina_comments set upload_file='".$name."' ,fileName = '".$_FILES["file"]["name"]."'  where comment_ID = '".$comment->comment_ID."' ;";
	echo $sql;
	$wpdb->query($sql);
	
	$Attachment = "./uploads/" . $name;
	
} 

//发EMail
tmail($_POST['email'],$_POST['comment'],$Attachment);



function tmail($customerEmail,$content,$Attachment="",$mailDress="candidates@coopta.com.cn"){
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
	$mail->SetFrom("cmd_02@126.com", 'Coopta Customer Mail Service');    // 设置发件人地址和名称
	$mail->AddReplyTo($customerEmail,"Coopta Customer Mail Service"); 
												// 设置邮件回复人地址和名称
	$mail->Subject    = "Coopta Customer Mail";                     // 设置邮件标题
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
			<tr>
			<th>Content</th>
			<td><span class="">'.$content.'</span></td>
			</tr> 
			
			</table>
			<body>
			</html>
			';

	$mail->MsgHTML($message);  
	                       // 设置邮件内容
	$mail->AddAddress($mailDress, "Coopta Customer Mail Service");

	if(!empty($Attachment)){
		$mail->AddAttachment($Attachment); // 附件 
	}
	
	if(!$mail->Send()) {
		//echo "邮件发送失败";
		echo "Submit fail";
	} else {
		echo "Submit success";
	}
}