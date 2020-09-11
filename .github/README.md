# Consulting - Jekyll theme

> A sober, hassle-free, jekyll template for businesses.

You can preview the theme [here](https://apehex.github.io/jekyll-theme-consulting)

![Consulting Theme](../assets/images/screenshot.webp "Consulting Theme")

# Features

> **Responsive**: out of the box support for all screen sizes, be it smartphones, laptops, tablets...

> **Multilingual**: easily manage pages, menu, url, dates, sitemap in several languages

> **Customizable**: theme colors, menu, social items can be changed from a central config file

> **Many Widgets**: tabs, mini-posts, spotlight, feature listings, and more can be easily inserted without worrying about their internals

> **Many templates**: contact forms, navigation menus, and others can be easily inserted thanks to custom Jekyll includes

> **Vector images**: the theme images are vectorized, render smoothly on any display and can be dynamically styled

> **GDPR ready**: bundled with a cookie consent plugin and a boilerplate privacy policy compliant with GDPR

> **SEO ready**: sitemap, robots.txt and tags are automatically generated for the website

> **Light**: svg images, thumbs and lazy loading for raster images, few libraries

> **Performant**: parallel loading & execution of assets, support lazy-loading, minified assets, compressed critical path

> **Hardened**: form validation, recaptcha, verified libraries

# Installation

Add this line to your Jekyll site's `Gemfile`:

```ruby
gem "jekyll-theme-consulting"
```

And add this line to your Jekyll site's `_config.yml`:

```yaml
theme: jekyll-theme-consulting
```

And then execute:

    $ bundle

Or install it yourself as:

    $ gem install jekyll-theme-consulting

# Usage

For those unfamiliar with how Jekyll works, check out [jekyllrb.com](https://jekyllrb.com/) for all the details, 
or read up on just the basics of [front matter](https://jekyllrb.com/docs/frontmatter/), [writing posts](https://jekyllrb.com/docs/posts/), 
and [creating pages](https://jekyllrb.com/docs/pages/).

## Initialization

Copy the file `_config.yml` from the theme repository to the root of your website folder tree.
The following section explains what the settings impact and how to configure `_config.yml` properly.

## Configuration

You can use the following custom parameters in `_config.yml`.

### Site
Both `title` and `subtitle` are displayed side by side :
- in the tab name
- at the top of the page, in the header

### Social
Social icons will appear for each url your fill in, among `facebook_url` etc.

### Contact
Your contact information can be used in contact forms, the footer or anywhere else.

### Recaptcha

The contact form is validated using [google's recaptcha plugin][recaptcha-documentation].
First, you need to [sign your website up] to enable the plugin.
Google will provide you with a **client-side integration key**: copy it to `_config.yml` under `recaptcha.sitekey`.

## Images

### Lazy-Loading

Images downloading & rendering can be defered until they enter the viewport.
This shortens the loading of the webpage, with no consequence on the displayed content since the images are off-screen.

There are 2 possibilities:
1) using the scripts bundled with the gem
2) depending on the browser

Browser support for lazy-loading is varying, so it is recommanded to opt for the first solution.

#### Using the gem functionality

- add `class="lazy-loading"`
- fill the attribute `src` with the path to the placeholder file
- fill the attribute `data-src` with the path to the content file

Before:
```html
<img src="{{ 'assets/images/content.jpg' | absolute_url }}" />
```

After:
```html
<img class="lazy-loading" src="{{ 'assets/images/placeholder.jpg' | absolute_url }}" data-src="{{ 'assets/images/content.jpg' | absolute_url }}" />
```

#### Using the browser functionality

- add `loading="lazy"`

Before:
```html
<img src="{{ 'assets/images/content.jpg' | absolute_url }}" />
```

After:
```html
<img loading="lazy" src="{{ 'assets/images/content.jpg' | absolute_url }}" />
```

> This functionality is not supported by all the browsers!

### Compression and file formats

It is recommanded to use the `webp` format.

At a given dimension and compression level (quality) the webp files are at least half the size with a smoother feel.

## Publication

### On Github Pages

In your own website's repository, edit the `_config.yml` file:

```yaml
url: "https://<github-account-name>.github.io/<repository-name>"
```

Build the website with:

    $ JEKYLL_ENV=production bundle exec jekyll build

Commit all your work to the current branch.

Create a branch named `gh-pages`:

    $ git checkout -b gh-pages

And finally replace the repository's content with the generated webpages:

    $ mkdir ~/backup
    $ mv ./* ~/backup/
    $ mv ~/backup/.git ./
    $ mv ~/backup/_site/* ./
    $ git add .
    $ git commit -m "First draft"

The repository's content is backup in the home directory of the user.

And finally push to github

    $ git push --u origin gh-pages

### On any server

In your own website's directory, edit the `_config.yml` file:

```yaml
url: "https:<domain-name>"
```

Build the website with:

    $ JEKYLL_ENV=production bundle exec jekyll build

Copy the content of the folder `_site` to your server, most likely in `www`.

If necessary, configure your server to serve this directory.

# Contributing

Bug reports and pull requests are welcome on GitHub at https://github.com/apehex/jekyll-theme-consulting. This project is intended to be a safe, welcoming space for collaboration, and contributors are expected to adhere to the [Contributor Covenant][contributor-covenant] code of conduct.

# Development

To set up your environment to develop this theme, run `bundle install`.

To test the theme, run `bundle exec jekyll serve` and open your browser at `http://localhost:4000`. This starts a Jekyll server using the theme. Add pages, documents, data, etc. like normal to test the theme's contents. As you make modifications to the theme and to your content, your site will regenerate and you should see the changes in the browser after a refresh, just like normal.

When the theme is released, only the files in `_layouts`, `_includes`, `_sass` and `assets` tracked with Git will be bundled.
To add a custom directory to the theme-gem, please edit the regexp in `jekyll-theme-consulting.gemspec` accordingly.

# Credits

Inspired by the work of [@ajlkn][ajlkn].

Uses the basic template from the [cookie consent plugin][cookieconsent].

Uses the [simple Jekyll search plugin][simple-jekyll-search].

Space image in the banner: the Pillars of Creation, courtesy of NASA.

## License

The theme is available as open source under the terms of the [CC-BY-NC-SA-4.0](LICENSE).

[ajlkn]: https://aj.lkn.io/
[contributor-covenant]: http://contributor-covenant.org
[cookieconsent]: https://github.com/osano/cookieconsent
[html5up]: https://html5up.net/
[recaptcha-documentation]: https://developers.google.com/recaptcha/intro
[recaptcha-registering]: https://www.google.com/recaptcha/admin
[simple-jekyll-search]: https://github.com/christian-fei/Simple-Jekyll-Search
