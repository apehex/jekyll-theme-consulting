# Consulting - Jekyll theme

> A multilingual jekyll template for businesses.

You can preview the theme [here](https://moodule.github.io/jekyll-theme-consulting)

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
- `subtitle` sets the text for the lighter colored text next to your site's title.

### Social
- `500px_url`
- `facebook_url`
- `github_url`
- `gitlab_url`
- `googleplus_url`
- `instagram_url`
- `linkedin_url`
- `pinterest_url`
- `slack_url`
- `twitter_url`

### Contact
- `street_address`
- `city`
- `state`
- `zip_code`
- `country`
- `phone`
- `email`

## Publication

To post your website as a Github page, fork this reposity and create a branch named `gh-pages`, then start editing the `_config.yml` file.

# Contributing

Bug reports and pull requests are welcome on GitHub at https://github.com/moodule/jekyll-theme-consulting. This project is intended to be a safe, welcoming space for collaboration, and contributors are expected to adhere to the [Contributor Covenant][contributor-covenant] code of conduct.

# Development

To set up your environment to develop this theme, run `bundle install`.

To test the theme, run `bundle exec jekyll serve` and open your browser at `http://localhost:4000`. This starts a Jekyll server using the theme. Add pages, documents, data, etc. like normal to test the theme's contents. As you make modifications to the theme and to your content, your site will regenerate and you should see the changes in the browser after a refresh, just like normal.

When the theme is released, only the files in `_layouts`, `_includes`, `_sass` and `assets` tracked with Git will be bundled.
To add a custom directory to the theme-gem, please edit the regexp in `jekyll-theme-consulting.gemspec` accordingly.

# Credits

Inspired by the work of [@ajlkn][ajlkn].

Repository [Jekyll logo][jekyll-logo] icon licensed under a [Creative Commons Attribution 4.0 International License][cc4-license].

## License

The theme is available as open source under the terms of the [CC-BY-4.0](LICENSE).

[ajlkn]: https://aj.lkn.io/
[cc4-license]: http://choosealicense.com/licenses/cc-by-4.0/
[contributor-covenant]: http://contributor-covenant.org
[html5up]: https://html5up.net/
[jekyll-logo]: https://github.com/jekyll/brand
