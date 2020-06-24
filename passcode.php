<?php
$_SESSION["userid1"] = 'userid1';
    include ("connect.php");
    mysql_select_db($dbName);
if(count($_POST)>0) {
$result = mysql_query("SELECT *from admin WHERE userid1='" . $_SESSION["userid1"] . "'");
$row=mysql_fetch_array($result);
if($_POST["currentPassword"] == $row["password"]) {
mysql_query("UPDATE admin set pword1='" . $_POST["newPassword"] . "' WHERE userid1='" . $_SESSION["userid1"] . "'");
$message = "Password Changed";
} else $message = "Current Password is not correct";
}
?>