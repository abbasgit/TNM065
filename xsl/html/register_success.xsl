<?xml version="1.0"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<xsl:output method="html" indent="yes" media-type="text/html"/>

<xsl:template match="/">
	<html>
	<head>
		<title>Registration Success</title>
		<link rel="stylesheet" type="text/css" href="http://www.student.itn.liu.se/~frelo490/tnm065/projekt/css/loginstyles.css" media="screen"/>
	</head>
	<body>

	  <div id="site_banner">
		<h1>Personal Budget Online</h1>
		<p>Gotta keep track of those pennies...</p>
	</div>
	  <div id="success_container">
	    <h2>Your registration was successful <span class="username"><xsl:value-of select="username"/></span>!</h2>
	    <p><a href="login">Click here to go to the login page!</a></p>
	  </div>
	</body>
	</html>
</xsl:template>

</xsl:stylesheet>