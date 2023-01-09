<?php
session_start();
error_reporting(0);
include("include/config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add admins</title>
</head>
<h1 align="center">Add Administrators</h1>
<br><br><br><br>
<form action="<?php echo $_SERVER['SELF_PHP']; ?>" method="POST">
    <br><br><br><table align="center">
    <tr>
        <td>
            <input type="text" name="user" placeholder="Enter admin name" required>

        </td>
        <td>
            <input type="password" name="pass" placeholder="*******" required>

        </td>
    </tr>
    <tr>
        <td>
            <input type="reset" value="Clear">
        </td>
        <td>
            <input type="submit" value="Add" name="sub">

        </td>
    </tr>
            
</table>
</form>
<body>
    
</body>
</html>
<?php
if(isset($_POST['sub']))
{
    // echo date_default_timezone_set("Asia/Calcutta");
    $date = date('m-d-Y h:i:s A', time());
 $user=$_POST['user'];
 $pass=md5($_POST['pass']);

 $q= "INSERT INTO `admin` (`id`, `username`, `password`, `updationDate`) VALUES (NULL, '$user', '$pass', '$date');";
if(mysqli_query($bd,$q))
{
    echo "<br> Data added succesfully";
    echo "<br>$user with password:$pass";
}
else
{
    die("Error");
}

}
?>