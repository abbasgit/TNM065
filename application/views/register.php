
<?php

  $data['stylesheet'] = 'register.xsl';

  $this->load->view('xslt_processor', $data);

  ?>

<!-- 
<html>
<head>
	<title>Login View</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("/css/loginstyles.css"); ?>" media="screen"/>
</head>
<body>
    <?php $this->load->view('site_banner'); ?>

    <div id="pageheader">
      <p>User registration</p>
    </div>

    <?php
      $attributes = array('id' => 'registerform');
      echo form_open('register', $attributes); 
    ?>

     <label for="username">Username:</label>
     <input type="text" size="12" id="username" value="<?php echo set_value('username'); ?>" name="username"/>
     <?php echo form_error('username', '<span class="validation_error">', '</span>'); ?>

     <label for="password">Password:</label>
     <input type="password" size="12" id="password" name="password"/>
     <?php echo form_error('password', '<span class="validation_error">', '</span>'); ?>

     <label for="confpassword">Confirm password:</label>
     <input type="password" size="12" id="confpassword" name="confpassword"/>
     <?php echo form_error('confpassword', '<span class="validation_error">', '</span>'); ?>
     
     <br>
      <input type="submit" value="Register"/>
   	</form>

</body>
</html>

-->