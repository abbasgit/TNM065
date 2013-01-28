<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform"> 

<xsl:output method="xml"  doctype-public="-//WAPFORUM//DTD WML 1.1//EN"   media-type="text/vnd.wap.wml" doctype-system="http://www.wapforum.org/DTD/wml_1.1.xml" indent="yes" encoding="UTF-8"/>

  <xsl:template match="/">
   <wml>
   	<card>
      <p>You are logged in!</p>
		<p> 
   			<anchor>
      			<go href="http://www.student.itn.liu.se/~frelo490/tnm065/projekt/index.php/login"/>
            Log out
   			</anchor>
		</p>
	</card>
  </wml>
  </xsl:template>
</xsl:stylesheet>