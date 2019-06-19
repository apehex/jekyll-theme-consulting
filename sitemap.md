---
layout: null
permalink: /sitemap.xml
---
{% assign posts=site.posts | sort: 'lang' %}
{% assign pages=site.html_pages | sort: 'lang' | concat: posts %}
<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xhtml="http://www.w3.org/1999/xhtml">
  {% for page in pages %}
  {% assign versions=pages | where:"lang-ref", page.lang-ref %}
  {% if page.id contains "404" %}{% else %}
  <url>
    <loc>{{ page.url | absolute_url}}</loc>
    {% for version in versions %}
    <xhtml:link rel="alternate" hreflang="{{ version.lang }}" href="{{ version.url | absolute_url }}" />
    {% endfor %}
    <changefreq>weekly</changefreq>
  </url>
  {% endif %}
  {% endfor %}
</urlset>