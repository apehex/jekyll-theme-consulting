---
layout: home
title: DROP
subtitle: by apehex
---
{% for drop in site.drops %}
<article {% if forloop.index == 1 %} id="first" {% endif %} class="container box right style4">
    <a href="{{ drop.url }}">
        <div class="upper">
            {% include bouncing.svg alignment="xMinYMax" width="12em" height="3em" view-box="120 0 240 60" fill="#182d3a" opacity="1" %}
            <h2>{{ drop.name }}</h2>
            <p>{{ drop.drop }}</p>
        </div>
        <div class="lower">
            {% include bouncing.svg alignment="xMinYMin" width="12em" height="3em" view-box="120 60 240 60" fill="#00ffff" opacity="1" %}
            <p>{{ drop.water }}</p>
        </div>
    </a>
</article>
{% endfor %}