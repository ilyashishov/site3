﻿<?
include("connect.php"); 

function isLogin(){
    if (isset($_COOKIE['id']) and isset($_COOKIE['hash'])){   
        $query = mysql_query("SELECT * FROM users WHERE id = '".intval($_COOKIE['id'])."' LIMIT 1");
        $userdata = mysql_fetch_assoc($query);
        if(($userdata['hash'] !== $_COOKIE['hash']) or ($userdata['id'] !== $_COOKIE['id'])) {
            setcookie("id", "", time() - 3600*24*30*12, "/");
            setcookie("hash", "", time() - 3600*24*30*12, "/");
            return false;
        }else{
            return true;
        }
    }else{
        print "Включите куки";
    }
}

$isLogin = isLogin();
?>