<html>

<form name="feedback" method="POST" action="feedback_user.php">
Feedback:<input type="text" name="fb">

<br>
<br><input type="submit" name="submit" value="Send Feedback">
</form>

<a href="profile.php">profile</a>
<br><br>
<a href="logout.php">SignOut</a>

</html>


<?php
if(isset($_POST["fb"]))
{	
$feedback=$_POST["fb"];

session_start();

$username=$_SESSION["uname"];

$con=mysqli_connect("localhost","groot","bose123$","bankdb");

$query="UPDATE banktable SET feedback='$feedback' WHERE username='$username'";

$result=mysqli_query($con,$query);

echo "Feedback updated";
}

?>