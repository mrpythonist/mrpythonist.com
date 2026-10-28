<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform" xmlns:s="http://www.sitemaps.org/schemas/sitemap/0.9">
  <xsl:output method="html" encoding="UTF-8"/>
  <xsl:template match="/">
    <html><head><title>XML Sitemap — mrpythonist</title></head>
    <body><h1>XML Sitemap</h1><ul>
      <xsl:for-each select="s:urlset/s:url"><li><a href="{s:loc}"><xsl:value-of select="s:loc"/></a></li></xsl:for-each>
    </ul></body></html>
  </xsl:template>
</xsl:stylesheet>
