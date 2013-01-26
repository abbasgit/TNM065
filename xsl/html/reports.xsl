<?xml version="1.0"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
                xmlns:dc="http://purl.org/dc/elements/1.1/"
                xmlns="http://www.w3.org/1999/xhtml"
                version="1.0">
<xsl:output indent="yes"/>


<xsl:template match="pbo">
  <xsl:apply-templates/>
</xsl:template>

<xsl:template match="report">
  <p>Here goes a report</p>
</xsl:template>

<!--
<xsl:template match="rdf:RDF">
   <html xmlns="http://www.w3.org/1999/xhtml" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:rss="http://purl.org/rss/1.0/" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:syn="http://purl.org/rss/1.0/modules/syndication/">
     <head>
       <title>Lab 4 feed</title>
     </head>
     <body>
       <xsl:apply-templates select="rss:item" />
     </body>
   </html>
</xsl:template>

<xsl:template match="rss:item">
  <a href="{rss:link}"><h2><xsl:value-of select="rss:title"/></h2></a>
  <p><xsl:value-of select="rss:description"/></p>
</xsl:template>
-->
</xsl:stylesheet>

