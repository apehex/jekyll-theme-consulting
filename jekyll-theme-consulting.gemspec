# coding: utf-8
# frozen_string_literal: true

Gem::Specification.new do |spec|
  spec.name          = "jekyll-theme-consulting"
  spec.version       = "0.11.24"
  spec.authors       = ["Apehex"]
  spec.email         = ["apehex@protonmail.com"]

  spec.summary       = "A sober, hassle-free, full-featured, Jekyll template for businesses."
  spec.homepage      = "https://github.com/apehex/jekyll-theme-consulting"
  spec.license       = "CC-BY-NC-SA-4.0"

  spec.files         = `git ls-files -z`.split("\x0").select { |f| f.match(%r!^(assets/css|assets/js|assets/webfonts|_layouts|_includes|_sass|404.md|.github/LICENSE|.github/README)!i) }

  spec.add_runtime_dependency "jekyll", "~> 4.0"
  spec.add_runtime_dependency "jekyll-seo-tag", "~> 2.6"
  spec.add_runtime_dependency "jekyll-redirect-from", "~> 0.16"

  spec.add_development_dependency "bundler", "~> 2.0"
  spec.add_development_dependency "rake", "~> 12.0"
  spec.add_development_dependency "webrick", "~> 1.7"
end
