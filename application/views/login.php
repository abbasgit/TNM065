<html>
<head>
	<title>Login View</title>
</head>
<body>
<!--	
	<div id="validation_errors">
   		<?php echo validation_errors(); ?>
   	</div>
-->
   <?php echo form_open('login'); ?>

   <?php echo form_error('username'); ?>
     <label for="username">Username:</label>
     <input type="text" size="20" id="username" value="<?php echo set_value('username'); ?>" name="username"/>
 	<?php echo form_error('password'); ?>
     <label for="password">Password:</label>
     <input type="password" size="20" id="password" name="password"/>
     <input type="submit" value="Login"/>
   </form>

   <p>New user? <a href="register">Register here!</a></p>

</body>
</html>