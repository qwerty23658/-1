<?php
/*安林网络20wl.cn*/
function login(){
if($_COOKIE['name']==''){exit('请登录后再进行操作');}

}
function mb($tuuu){return mb_strlen($tuuu,"utf8");}
/*内容,参数,参数,yes,no*/
function ifs($i1,$tr,$cs=''){

switch($tr){

case "0-9":
if(preg_match("/^[0-9]*$/",$i1)){return true;}else{return false;}
break;
case 'a-z':
if(preg_match("/^[a-zA-Z]*$/",$i1)){return true;}else{return false;}
break;
case "a-z-0-9":
if(preg_match("/^[a-zA-z0-9]*$/",$i1)){return '1';}else{return false;}
break;
case "zdy":
if(preg_match("/^[".strtr(addslashes($cs),'[]','{}')."]*$/",$i1)){return true;}else{return false;}break;
case "null":
if($i1==""){return true;}else{return false;}break;
case "dy":
if(mb_strlen($i1,"utf8")>$cs){return true;}else{return false;}break;
case"xy":
if(mb($i1)<$cs){return true;}else{return false;}break;
case"bdy":
if(mb($i1)!=$cs){return true;}else{return false;}break;
case"bdy2":
if($i1!=$cs){return true;}else{return false;}break;

case"email":
 if (preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$i1)){return true;}else{return false;}break;
case"name":
 if (preg_match("/[<>'\"\[\]\}\{\\\|\*;]/s",$i1)){return true;}else{return false;}break;
 case "sss":
 $css=explode('#',$cs);
if(mb_strlen($i1,"utf8")>$css[0]||mb_strlen($i1,"utf8")<$css[1]){return true;}else{return false;}break;
 
 
 
}

}







?>