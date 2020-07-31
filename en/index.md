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
banner:
    title: "With a Banner"
    subtitle: "And an Otherwordly Image"
    description: >-
        A responsive site template designed by <a href="apehex@protonmail.com">DM</a> for <a href="https://github.com/apehex">apehex</a>.
    style:
        class: inverted
        image: "/assets/images/content/pillars-of-creation.webp"
    button:
        url: "#contact"
        label: "Wow"
---
{%- assign facts = site.data.home.facts[page.lang] -%}
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
<section class="inverted">
    <header class="major">
        <h2>Erat lacinia</h2>
    </header>
    <div class="features">
        <article>
            <span class="icon fa-gem"></span>
            <div class="content">
                <h3>Portitor ullamcorper</h3>
                <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
            </div>
        </article>
        <article>
            <span class="icon solid fa-paper-plane"></span>
            <div class="content">
                <h3>Sapien veroeros</h3>
                <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
            </div>
        </article>
        <article>
            <span class="icon solid fa-rocket"></span>
            <div class="content">
                <h3>Quam lorem ipsum</h3>
                <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
            </div>
        </article>
        <article>
            <span class="icon solid fa-signal"></span>
            <div class="content">
                <h3>Sed magna finibus</h3>
                <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
            </div>
        </article>
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
