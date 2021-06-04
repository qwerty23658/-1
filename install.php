<?php 
error_reporting(E_ERROR | E_PARSE);
include './Anlin_class/define.php';
if(file_exists('./sq_install.txt')){

exit(UTF8.'你已完成安装,如需重新安装请删除程序目录下的sq_install.txt文件并清空数据库');
}
include './Anlin_class/mysql.php';
include './Anlin_class/ubb.php';
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
$ac=$_GET['ac'];
$time=time();
if($ac==''){
echo UTF8.'
<form action="?ac=go" method="post">
1:填写数据信息,数据库地址格式: 地址:端口 如: localhost:3306 如无法连接请尝试直接输入 localhost 不输入端口号<br>
数据库地址:<input type="text" name="server" value=""><br>
数据库名称(表名):<input type="text" name="b" value=""><br>
数据库用户名:<input type="text" name="name" value=""><br>
数据库密码:<input type="text" name="pass" value=""><br>
<hr>
2:创建管理员账号<br>
管理员账号:<input type="text" name="gname" value=""><br>
管理员昵称:<input type="text" name="guser" value=""><br>
管理员密码:<input type="text" name="gpass" value=""><br>
<input type="submit" value="执行安装">
<br>
安装环境:php5.4+ php5.6 php7.0 php7.3<br>该设置为必须(PHP7.0+可无视):magic_quotes_gpc=off(必须关闭,否则修改模板会出错)<br>(如网站无法正常显示某些页面,请尝试切换版本或与我们联系 官网: 未央去除)
</form>
';


}
if($ac=='go'){
file_put_contents('./Anlin_class/ku.php',"<?php 
return array(
'server'=>'".$_POST['server']."',
'name'=>'".$_POST['name']."', 'pass'=>'".$_POST['pass']."',
'b'=>'".$_POST['b']."'
);
?>");


$my=new mys;
//安装
include './sql.php';
echo UTF8;
$z=explode(';',$zd);
$co=count($z)-1;
for($i=0;$i<=$co;$i++){
if($my->query($z[$i])){echo '<br>Yes<br>';}else{echo'<br>安装中途出现错误,请联系开发者<br>';}
}

$gname=htmlx($_POST['gname']);
$guser=htmlx($_POST['guser']);
$gpass=md5($_POST['gpass']);
$qx='1';
if($gname==''||$guser==''){message('账号或昵称最低1个字符');}
!$my->row($my->query("SELECT*FROM Anlin_user WHERE name='$gname'")) or message('账号已存在');
!$my->row($my->query("SELECT*FROM Anlin_user WHERE user='$guser'")) or message('昵称已存在');
if(!$my->zeng('Anlin_user',"NULL,'$gname','$gpass','$guser','$qx','0','./tx/null.png','$time',''")){echo'管理员信息写入失败,请联系开发者<br>';}
if(!$my->zeng('Anlin_chatlist',"NULL,'青葱校园','0','','$time','./chatimg/x_1.png|https://img.zcool.cn/community/015441564ecbfb32f87512f6c956cc.jpg'")){
echo'<br>安装中途发生错误<br>';
}
if(!$my->zeng('Anlin_chatlist',"NULL,'娱乐','0','','$time','./chatimg/x_2.png|https://img.zcool.cn/community/01a454564ecc1b6ac7251c942be736.jpg'")){
echo'<br>安装中途发生错误<br>';
}
if(!$my->zeng('Anlin_chatlist',"NULL,'情感天地','0','','$time','./chatimg/x_3.png|https://img.zcool.cn/community/01a14e564ecb936ac7251c94c705b3.jpg'")){
echo'<br>安装中途发生错误<br>';
}
if(!$my->zeng("Anlin_chatbbs","NULL,'1','欢迎使用Anlin-chat聊天室','1','属于我的一片天地我可以随意打造','999','0','$time'")){echo'<br>安装中途发生错误<br>';}




echo '安装完成-><a href="index.php?h=admin">进入后台</a>';
file_put_contents('./sq_install.txt',time());
}
?>