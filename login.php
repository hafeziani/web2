<?php
$db = mysqli_connect('localhost', 'root', '');
mysqli_select_db($db, 'db1');
mysqli_query($db, "SET NAMES 'UTF8'");
// fix bug
$username = htmlentities(addslashes($_POST('username')), ENT_QUOTES, 'UTF-8');
$password = htmlentities(addslashes($_POST('password')), ENT_QUOTES, 'UTF-8');
$q = "SELECT * FROM useres WHERE username = '$username'
        AND password = '$password'";
// hafez eshghi
$r = mysqli_query($db, $q);
$user = mysqli_fetch_assoc($r);
if (isset($user['id']))
{
    print "Login OK";
}
else
{
    print "Login Fail";
}

?>

<div id="jsijdjkdjkdjkdjkd"></div>


<div id="jsijdjkdjkdjkdjkd"></div>
dhouhhourgh
odsvjosdj
ifjifjifjifjiejifjijfijefijefijefijefiejfiejfijfe