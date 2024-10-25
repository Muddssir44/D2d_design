<?PHP
$sender = 'info@emuinvent.emuem.org';
$recipient = 'preethi.chunduri@gmail.com';

$subject = "php mail test";
$message = "php test message";
$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

if (mail($recipient, $subject, $message, $headers))
{
    echo "Message accepted";
}
else
{
    echo "Error: Message not accepted";
}
?>