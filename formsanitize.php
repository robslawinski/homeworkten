<html>
<body>

<?php

class FormSanitize
{
	function emailCheck(){
		if (isset($_POST['email']))
		{
				
			$emailTemp = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
			if($emailTemp != $_POST['email'])
			{
				echo "Please Enter a Valid E-mail";
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

		}
	}
	
	function emailSan()
	{
		if (isset($_POST['email'])) 
		{
			echo filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
		}
	}
	
	function nameSan()
	{
		if (isset($_POST['name'])) 
		{
			echo filter_var($_POST['name'], FILTER_SANITIZE_STRING);
			//echo "<br/><br/>";
		}
	}
}
?>
<div>
<?php echo FormSanitize::emailCheck();  ?>
<?php echo FormSanitize::nameCheck();  ?>
</div>

    <form name="form1" method="post" action="formsanitize.php">
	Email Address: <br/>
	<input type="email" name="email" value="<?php echo FormSanitize::emailSan();  ?>" size="50"/> <br/><br/>
	
	Name: <br/>
	<input type="text" name="name" value="<?php echo FormSanitize::nameSan(); ?>" size="50" /> <br/>
	<br/>
	<input type="submit" />
    </form>
   </body>
</html>