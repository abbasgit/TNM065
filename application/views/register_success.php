<html>
<head>
	<title>Registration Success</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("/css/loginstyles.css"); ?>" media="screen"/>
</head>
<body>

  <?php $this->load->view('site_banner'); ?>

  <div id="success_container">
    <h2>Your registration was successful <span class="username"><?php echo $username; ?></span>!</h2>
    <p><a href="login">Click here to go to the login page!</a></p>
  </div>
</body>
</html>