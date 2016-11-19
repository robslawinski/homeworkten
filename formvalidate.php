<html>
<body>

<?php

class FormValidate
{
	
	function emailCheck(){
		if (isset($_POST['email']))
		{
				
			$emailTemp = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
			if( !( $emailTemp === $_POST['email'] and stripos($emailTemp, '@') !== false) )
			{
				echo "Please Enter a Valid E-mail";
				echo "<br/><br/>";

			}
			if(strlen($emailTemp) == 0)
			{
				echo "Email cannot be empty";
				echo "<br/><br/>";

			}
		}

	}
	
	function nameCheck(){
		if (isset($_POST['email']))
		{
	
			$nTemp = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
			if($nTemp != $_POST['name'])
			{
				echo "Please Enter a Valid Name";
				echo "<br/><br/>";

				
			}
			if(strlen($nTemp) == 0)
			{
				echo "Name cannot be empty";
				echo "<br/><br/>";

			}
		}

	}
	


}
?>
<div>
<?php echo FormValidate::emailCheck();  ?>
<?php echo FormValidate::nameCheck();  ?>

</div>

    <form name="form1" method="post" action="formvalidate.php">
	Email Address: <br/>
	<input type="text" name="email" value="<?php echo $_POST['email'];  ?>" size="50"/> <br/><br/>
	
	Name: <br/>
	<input type="text" name="name" value="<?php echo $_POST['name']; ?>" size="50" /> <br/>
	<br/>
	<input type="submit" />
    </form>
   </body>
</html>