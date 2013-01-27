<?xml version="1.0"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform"> 

<xsl:output method="xml"  doctype-public="-//WAPFORUM//DTD WML 1.1//EN"   media-type="text/vnd.wap.wml" doctype-system="http://www.wapforum.org/DTD/wml_1.1.xml" indent="yes" encoding="UTF-8"/>

  <xsl:template match="/">
   <wml>
     <card id="main" title="Login">
        <p><input name="username" title="username"/></p>
        <p><input name="password" title="password" type="password"/></p>
        <p><input name="confpassword" title="confpassword"/></p>
        <p><anchor>
          <go method="post" href="http://www.student.itn.liu.se/~frelo490/tnm065/projekt/index.php/register">
          <postfield name="username" value="$(username)"/>
          <postfield name="password" value="$(password)"/>
          <postfield name="confpassword" value="(confpassword)"/>
          </go>
          Register
        </anchor></p>
      </card>
    </wml>
</xsl:stylesheet>