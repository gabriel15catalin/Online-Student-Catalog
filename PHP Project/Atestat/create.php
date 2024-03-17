<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $user=$_POST['user'];
    $pass=hash("sha256",$_POST['pass']);

    $server='localhost';
    $bd='GABRIEL';
    $mysql_user='GABRIEL';
    $mysql_pass='parola';

    $con=mysqli_connect($server,$mysql_user,$mysql_pass,$bd);

    $interogare="insert into users values (?,?)";

    $cmd=mysqli_stmt_init($con);
    mysqli_stmt_prepare($cmd,$interogare);
    mysqli_stmt_bind_param($cmd,"ss",$user,$pass);
    mysqli_stmt_execute($cmd);
    if(mysqli_stmt_affected_rows($cmd)>0)
        echo "<h1>Adăugare user</h1><p>Succes!</p>";
    else
        echo "<h1>Adăugare user</h1><p>Insucces!</p>";
    mysqli_stmt_close($cmd);

    mysqli_close($con);

    exit();
}
?>
<h1>Creare user</h1>
<hr>
<form method='post' action='create.php'>
User: <input type='text' name='user'><br>
Pass: <input type='password' name='pass'><br>
<input type='submit'>
</form>