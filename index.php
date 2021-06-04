<?php 
error_reporting(E_ERROR | E_PARSE);
//ini_set('pcre.backtrack_limit', 999999999);
date_default_timezone_set('PRC');
session_start();
include './Anlin_class/mysql.php';
function message($messs,$sj=''){
if($sj==''){
$r='<script>alert(\''.$messs.'\');history.back();</script>';}else{
$r="<br><a href='$sj'>两秒后开始跳转...</a><meta http-equiv='refresh' content='2; url=$sj'>";
}
echo '<html><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><div class="admin_body">
<div style="text-align:center;padding:10px"><center><div class="url_tips" style="width:95%"><anlin>'.$messs.'</anlin>
  </div>
'.$r.'</center>
</div></div>
</html>
';
exit();
}

if($_GET['h']==''){
include './Anlin_class/ubbj.php';
if($_GET['x']==''){
$ee=file_get_contents('./php_html/Moban/index.anlin');
}else{$ee=file_get_contents('./php_html/Moban/'.$_GET['x']);}
echo ubbj($ee);

}else{
if(!file_exists('./php_html/'.$_GET['h'].'.php')){exit('404');}

include './php_html/'.$_GET['h'].'.php';
}












?>