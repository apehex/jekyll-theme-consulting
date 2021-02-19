---
layout: home
lang-ref: home-page
title: "Jekyll Theme Consulting"
header:
    title: "Consulting"
    subtitle: "Home Layout"
    style:
        class: inverted
        image: "/assets/images/content/pillars-of-creation.webp"
        position: center
        size: 100% auto
banner:
    title: "With a Banner"
    subtitle: "And an Otherwordly Image"
    description: >-
        A responsive site template designed by <a href="apehex@protonmail.com">DM</a> for <a href="https://github.com/apehex">apehex</a>.
    style:
        class: inverted
        image: "/assets/images/content/pillars-of-creation.webp"
        position: center
        size: 100% auto
    button:
        url: "#contact"
        label: "Wow"
---
{%- assign facts = site.data.home.facts[page.lang] -%}
{%- assign features = site.data.home.features[page.lang] -%}
<!-- Section -->
<section id="{{ facts.id }}">
    <header class="major">
        <h2>{{ facts.title }}</h2>
    </header>
    <div class="facts row">
        {% for fact in facts.facts %}
            {% include fact.html class="col-2 col-4-medium col-12-small" target_url=fact.target_url default=fact.default hover=fact.hover %}
        {% endfor %}
    </div>
</section>

<!-- Section -->
<section id="{{ features.id }}" class="inverted">
    <header class="major">
        <h2>{{ features.title }}</h2>
    </header>
    <div class="features row gtr-100">
        {% for feature in features.features %}
            {% include feature.html class="col-6 col-12-medium col-12-small" target_url=feature.target_url icon=feature.icon title=feature.title content=feature.content %}
        {% endfor %}
    </div>
</section>

<!-- Section -->
<section>
    <header class="major">
        <h2>Ipsum sed dolor</h2>
    </header>
    <div class="posts">
        {% include post.html target-url="#" image-src="assets/images/placeholder/pic01.webp" image-placeholder-src="assets/images/content/pic01.webp" image-alt-text="" title="Interdum aenean" content="Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam." %}
        {% include post.html target-url="#" image-src="assets/images/placeholder/pic02.webp" image-placeholder-src="assets/images/content/pic02.webp" image-alt-text="" title="Nulla amet dolore" content="Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam." %}
        {% include post.html target-url="#" image-src="assets/images/placeholder/pic03.webp" image-placeholder-src="assets/images/content/pic03.webp" image-alt-text="" title="Tempus ullamcorper" content="Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam." %}
        {% include post.html target-url="#" image-src="assets/images/placeholder/pic04.webp" image-placeholder-src="assets/images/content/pic04.webp" image-alt-text="" title="Sed etiam facilis" content="Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam." %}
        {% include post.html target-url="#" image-src="assets/images/placeholder/pic05.webp" image-placeholder-src="assets/images/content/pic05.webp" image-alt-text="" title="Feugiat lorem aenean" content="Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam." %}
        {% include post.html target-url="#" image-src="assets/images/placeholder/pic06.webp" image-placeholder-src="assets/images/content/pic06.webp" image-alt-text="" title="Amet varius aliquam" content="Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam." %}
    </div>
</section>

{% include contact.html %}
