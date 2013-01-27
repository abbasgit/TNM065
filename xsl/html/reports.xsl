<?xml version="1.0"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<xsl:output method="html" indent="yes" media-type="text/html"/>

<xsl:template match="/">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>Login View</title>
  <link rel="stylesheet" type="text/css" href="http://www.student.itn.liu.se/~frelo490/tnm065/projekt/css/mainpage.css" media="screen"/>
</head>
<body>

<div id="site_banner">
  <h1>Personal Budget Online</h1>
  <p>Gotta keep track of those pennies...</p>
</div>
<br></br>
<form action="http://www.student.itn.liu.se/~frelo490/tnm065/projekt/index.php/reports" method="post" accept-charset="utf-8" id="reportform">
  <label for="price">Price:</label>
  <input type="text" size="12" id="price" name="price"/>

  <label for="product">Product:</label>
  <input type="text" size="12" id="product" name="product"/>

  <label for="category">Category:</label>
  <select name="category">
  <option value="">Select...</option>
  <option value="1">House</option>
  <option value="2">Car</option>
  <option value="3">Home</option>
  <option value="4">Communication</option>
  <option value="5">Fun</option>
  <option value="6">Other</option></select>

  <label for="date">Date:</label>
  <input type="text" size="12" id="date" name="date" class="datepicker"/>

  <br></br>
  
  <input type="submit" value="Create report"/>
</form>

</body>
</html>

</xsl:template>

</xsl:stylesheet>