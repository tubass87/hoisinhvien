<?php
$field_name = $_POST['cf_name'];
$field_email = $_POST['cf_email'];
$field_message = $_POST['cf_message'];

$mail_to = 'hsv.hungary@gmail.com';
$subject = 'Thu gop y tu trang web:  '.$field_name;

$body_message = 'From: '.$field_name."\n";
$body_message .= 'E-mail: '.$field_email."\n";
$body_message .= 'Message: '.$field_message;

$headers = 'From: '.$field_email."\r\n";
$headers .= 'Reply-To: '.$field_email."\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);

if ($mail_status) { ?>
	<script language="javascript" type="text/javascript">
		alert('Cảm ơn góp ý đóng góp của bạn! Chúng tôi sẽ hồi âm sớm nhất có thể!');
		window.location = 'Lienhe.html';
	</script>
<?php
}
else { ?>
	<script language="javascript" type="text/javascript">
		alert('Lỗi chuyển thư. Xin gửi thư trực tiếp vào hồm thư của hội: hsv.viethung@gmail.com);
		window.location = 'Lienhe.html';
	</script>
<?php
}
?>