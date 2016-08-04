---
layout: archive
---

<header>
  <h1>/{{ page.title | downcase }}/archive</h1>
</header>

<div class="archive-items">
  <ul>
    {% for post in page.posts %}
        {% include partials/post.html %}
    {% endfor %}
  </ul>
</div>

{{ content }}