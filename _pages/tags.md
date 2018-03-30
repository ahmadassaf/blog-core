---
layout: tags-archive
title: Tags
description: "An archive of posts sorted by tag"
permalink: /tags.html
---

{% capture site_tags %}{% for tag in site.tags %}{{ tag | first }}{% unless forloop.last %},{% endunless %}{% endfor %}{% endcapture %}
{% assign tags = site_tags | split:',' | sort %}

{% for item in (0..site.tags.size) %}{% unless forloop.last %}
{% capture tag %}{{ tags[item] | strip_newlines }}{% endcapture %}
   <h3 class="archive--tags__title">{{ tag }}</h3>
   <ul class="list post-list">
    {% for post in site.tags[tag] %}{% if post.title != null %}
        {% include partials/post.html %}
    {% endif %}{% endfor %}
  </ul>
{% endunless %}{% endfor %}