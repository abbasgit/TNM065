<?xml version="1.0"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<xsl:output method="html" indent="yes" media-type="text/html"/>

<xsl:template match="/">


<html>
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
      <p>User registration</p>
    </div>

    <form action="http://www.student.itn.liu.se/~frelo490/tnm065/projekt/index.php/register" method="post" accept-charset="utf-8" id="registerform">
     <label for="username">Username:</label>
     <input type="text" size="12" id="username" value="" name="username"/>
     
     <label for="password">Password:</label>
     <input type="password" size="12" id="password" name="password"/>
     
     <label for="confpassword">Confirm password:</label>
     <input type="password" size="12" id="confpassword" name="confpassword"/>
          
     <br/>
      <input type="submit" value="Register"/>
    </form>

</body>
</html>

</xsl:template>

</xsl:stylesheet>