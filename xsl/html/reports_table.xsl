<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform"> 

<xsl:output method="xml"  doctype-public="-//WAPFORUM//DTD WML 1.1//EN"   media-type="text/vnd.wap.wml" doctype-system="http://www.wapforum.org/DTD/wml_1.1.xml" indent="yes" encoding="UTF-8"/>

  <xsl:template match="pbo">

  	<div id="report_table_container">
	<table cellspacing="0" cellpadding="4" border="0">
		<thead>
			<tr>
				<th>Date</th>
				<th>Product</th>
				<th>Category</th>
				<th>Price</th>
			</tr>
		</thead>
		<tbody>
  			<xsl:apply-templates select="report"/>
  		</tbody>
  	</table>
  	</div>
  </xsl:template>

  <xsl:template match="report">
  	<tr>
		<td><xsl:value-of select="date"/></td>
		<td><xsl:value-of select="product"/></td>
		<td><xsl:value-of select="category"/></td>
		<td><xsl:value-of select="price"/></td>
	</tr>
  </xsl:template>

 </xsl:stylesheet>