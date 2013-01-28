<?xml version="1.0"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<xsl:output method="html" indent="yes" media-type="text/html"/>

<xsl:template match="/">

<html>
<head>
	<title>P B O</title>
	<link rel="stylesheet" type="text/css" href="http://www.student.itn.liu.se/~frelo490/tnm065/projekt/css/mainpage.css" media="screen"/>
	<script src="http://www.student.itn.liu.se/~frelo490/tnm065/projekt/js/jquery-1.9.0.min.js"></script>
	<script src="http://www.student.itn.liu.se/~frelo490/tnm065/projekt/js/mainpage.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.min.js" type="text/javascript"></script>
	<script src="http://code.jquery.com/jquery-migrate-1.0.0.js"></script>
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.0/themes/base/jquery-ui.css" />
</head>
<body>
	 
	 <div id="site_banner">
	<h1>Personal Budget Online</h1>
	<p>Gotta keep track of those pennies...</p>
</div><div id="navcontainer">
	<ul id="navlist">
		<li>
			<a id="report">Report</a>
		</li>
		<li>
			<a id="profile">Profile</a>
		</li>
		<li>
			<a id="budget">Budget Summary</a>
		</li>
		<li id="logout">
			<span class="logged_in_user">Logged in as: <xsl:value-of select="username"/></span>
			<a href="http://www.student.itn.liu.se/~frelo490/tnm065/projekt/index.php?/main_page/logout">Logout</a>
		</li>
	</ul>
</div>
	<div id="main_container"> 
		<h1>Greetings <span class="username"><xsl:value-of select="username"/></span>!</h1>
	</div>
</body>
</html>

</xsl:template>
</xsl:stylesheet>