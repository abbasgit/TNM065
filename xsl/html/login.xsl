<?xml version="1.0"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<xsl:output method="html" indent="yes" media-type="text/html"/>

<xsl:template match="/">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Login View</title>
	<link rel="stylesheet" type="text/css" href="http://www.student.itn.liu.se/~frelo490/tnm065/projekt/css/loginstyles.css" media="screen"/>
</head>
<body>
    <div id="site_banner">
	<h1>Personal Budget Online</h1>
	<p>Gotta keep track of those pennies...</p>
</div>
    <div id="pageheader">
      <p>User login</p>
    </div>

    <form action="http://www.student.itn.liu.se/~frelo490/tnm065/projekt/index.php/login" method="post" accept-charset="utf-8" id="loginform">
     <label for="username">Username:</label>
     <input type="text" size="12" id="username" value="" name="username"/>
     
     <label for="password">Password:</label>
     <input type="password" size="12" id="password" name="password"/>
          
     <br/>
     <input type="submit" value="Login"/>
   	</form>

	<div id="reglink">
   		<p>New user? <a href="register">Register here!</a></p>
   	</div>
</body>
</html>

</xsl:template>

</xsl:stylesheet>