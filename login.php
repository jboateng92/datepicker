<?php

session_start();

$name=$_POST['username'];
$password= $_POST['password'];

if ($username && password)
{

$connect = mysql_connect("localhost", "root", "") or die ("couldn't connect");
mysql_select_db("phplogin") or die ("Couldnt find db");

$query = mysql_query("SELECT * FROM users WHERE username='$username'");

$numrows = mysql_num_rows($query);

if ($numrows !=0)
{

	while ($row = mysql_fetch_assoc($query))
	{
		$dbusername = $row['username'];
		$dbpassword = $row['password'];
	}
	
	// check to see if they match!
	if ($username==$dbusername&&md5($password==$dbpassword)
	{
		echo "You're logged in! <a href='member.php'>Click</a> here to enter member page";
		$_SESSION ['username']==$dbusername;
	}
	else
		echo "Incorrect password!";
	
	//code to login
}
else
	die ("That user doesn't exist!");

echo $numrows;

}
else
	die("Please enter username and password!");

?>