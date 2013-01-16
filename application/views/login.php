<html>
<head>
	<title>Login View</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("/css/loginstyles.css"); ?>" media="screen"/>
</head>
<body>
	<!--
   	   <?php echo form_error('username'); ?>
   	   <?php echo form_error('password'); ?>
	-->

	<?php echo validation_errors('<div id="validation_errors">', '</div>'); ?>
   
   	<?php echo form_open('login'); ?>
     
     <label for="username">Username:</label>
     <input type="text" size="12" id="username" value="<?php echo set_value('username'); ?>" name="username"/>

     <label for="password">Password:</label>
     <input type="password" size="12" id="password" name="password"/>
     
     <input type="submit" value="Login"/>
   	</form>

   	<p>New user? <a href="register">Register here!</a></p>

</body>
</html>