<?php
if (isset($_POST['user_email'])==true && empty($_POST['user_email'])==false){
	$email=$_POST['user_email'];
if(filter_var($email, FILTER_VALIDATE_EMAIL)==true){
echo 'Valid';}
	else {
	echo 'Invalid';
	}
}
?>
<form action=" " method="post">
<input type="text" name="user_email"/>
<input type="submit"/>
</form>