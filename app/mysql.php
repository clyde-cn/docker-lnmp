<?php
$dbhost = '10.10.10.1';  // mysql服务器主机地址
$dbuser = 'root';            // mysql用户名
$dbpass = '123456';          // mysql用户名密码
$conn = mysqli_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
    die('Could not connect: ' . mysqli_error());
}
echo '数据库连接成功！';
echo "<pre>";
$res = $conn->query('select * from mysql.user');
var_dump($res->fetch_array());
mysqli_close($conn);