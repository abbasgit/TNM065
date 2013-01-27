<?xml version="1.0"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<xsl:output method="html" indent="yes" media-type="text/html"/>

<xsl:template match="/">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>Edit profile</title>
  <link rel="stylesheet" type="text/css" href="http://www.student.itn.liu.se/~frelo490/tnm065/projekt/css/mainpage.css" media="screen"/>
</head>
<body>
    <div id="site_banner">
  <h1>Personal Budget Online</h1>
  <p>Gotta keep track of those pennies...</p>
</div>
  
<form action="http://www.student.itn.liu.se/~frelo490/tnm065/projekt/index.php/edit_profile" method="post" accept-charset="utf-8" id="edit_profile">
  
  <label for="currentpassword">Current password:</label>
  <input type="password" size="12" id="currentpassword" name="currentpassword"/>

  <label for="newpassword">New password:</label>
  <input type="password" size="12" id="newpassword" name="newpassword"/>

  <label for="confpassword">Confirm new password:</label>
  <input type="password" size="12" id="confpassword" name="confpassword"/>

  <br></br>
  <input type="submit" value="Change password"/>
</form>

</body>
</html>

</xsl:template>

</xsl:stylesheet>