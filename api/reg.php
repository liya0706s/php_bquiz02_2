<?php
include_once "db.php";

// 刪除資料表中沒有的pw2欄位
unset($_POST['pw2']);

// 存入註冊資料
$User->save($_POST);

?>