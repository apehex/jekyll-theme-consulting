# Consulting - Jekyll theme

> A multilingual jekyll template for businesses.

You can preview the theme [here](https://apehex.github.io/jekyll-theme-consulting)

![Consulting Theme](assets/images/screenshot.jpg "Consulting Theme")

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

## Publication

### On Github Pages

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

### On any server

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

# Credits

Inspired by the work of [@ajlkn][ajlkn].

Uses the basic template from the [cookie consent plugin][cookieconsent].

Repository [Jekyll logo][jekyll-logo] icon licensed under a [Creative Commons Attribution 4.0 International License][cc4-license].

## License

The theme is available as open source under the terms of the [CC-BY-4.0](LICENSE).

[ajlkn]: https://aj.lkn.io/
[cc4-license]: http://choosealicense.com/licenses/cc-by-4.0/
[contributor-covenant]: http://contributor-covenant.org
[cookieconsent]: https://github.com/osano/cookieconsent
[html5up]: https://html5up.net/
[jekyll-logo]: https://github.com/jekyll/brand
