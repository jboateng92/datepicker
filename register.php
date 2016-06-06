<?php
echo "<h1>Register Here</h1>";

$submit = $_POST['submit'];

$fullname = strip_tags ($_POST['fullname']);
$username = strtolower(strip_tags($_POST['username']));
$password = (strip_tags($_POST['password']));
$repeatpassword =(strip_tags($_POST['repeatpassword']));
$date = date("Y-M-D");

if  ($submit)
{

	//check for existance
if ($fullname&&$username&&$password&&$repeatpassword)
{
	// encrypt password
	$password = md5($password);
	$repeatpassword = md5($repeatpassword);
	
	if ($password==$repeatpassword)
	{
		
		//check char length of username and fullname
		if (strlen($password)>25||strlen($fullname)<25)
		{
			echo "Length of username or fullname is too long!";
		}
		else
		{
			
			//check password length
			if (strlen($password)>25||strlen($password)<6)
			{
				echo "Password must be between 6 and 25 characters";
			}
				else
			{
				//register the user!
				
				//encrypt password
				$password = md5($password);
			$repeatpassword = md5 ($repeatpassword);
			
			//open database
			$connect = mysql_connect("localhost","root","");
			mysql_select_db("phplogin"); //select database
			
			$namecheck = mysql query("SELECT username FROM users WHERE username='$username'");
			$count = mysql_num_rows($namecheck);
			
			if (count!=0)
			{
			 die("Username already taken!");
			}	
			
			//check for existance
			if ($fullname&&$username&&$password&&$repeatpassword)
			echo $count;
			die();
			$queryreg = mysql_query("
			
			INSERT INTO users VALUES ('','$fullname','$username','$password','$date')
			
			");
				die ("You have been successfully registered! <a href='login.php'>Return to login";
				
				}
			
		}
	
		echo "Please fill in <b>all</b> fields!';


}

?>

<html>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">RELAX FLIGHTS</a>
    </div>
    <div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href='About Us.html'>About Us</a></li>
        <li><a href='Contact Us.html'>Contact Us</a></li>
        <li><a href='Log In.html'>Log In</a></li>
      </ul>
    </div>
  </div>
</nav>
<h3>Welcome Member! <br>
Flying never felt so easy! <br>
</br>
</div>


<form action='register.php' method='POST'>
		<table>
				<tr>	
					<td>
					Full Name:
					</td>
					<td>
					<input type='text' name='fullname' value='<?php echo $fullname ?>
					</td>
				</tr>
				<tr>
				<td>
				Choose a username:
			</td>
			<td>
			<input type='text' name='username' value='<?php echo $username; ?>
			</td>
			</tr>
			<tr>	
					<td>
					Choose a password:
					</td>
					<td>
					<input type='text' name='password'>
					</td>
				</tr>
				<tr>	
					<td>
					Confirm password:
					</td>
					<td>
					<input type='text' name='repeatpassword'>
					</td>
				</tr>
		
		</table>
			<p>
			<input type='submit' name='submit' value='Register'>
</form>

</html>