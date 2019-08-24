# coding: utf-8
# frozen_string_literal: true

Gem::Specification.new do |spec|
  spec.name          = "jekyll-theme-consulting"
  spec.version       = "0.3.4"
  spec.authors       = ["David Mougeolle"]
  spec.email         = ["david.mougeolle@moodule.net"]

  spec.summary       = "A sober, hassle-free, full-featured, Jekyll template for businesses."
  spec.homepage      = "https://github.com/moodule/jekyll-theme-consulting"
  spec.license       = "CC-BY-4.0"

  spec.files         = `git ls-files -z`.split("\x0").select { |f| f.match(%r!^(assets|_layouts|_includes|_sass|sitemap.md|LICENSE|README)!i) }

  spec.add_runtime_dependency "jekyll", "~> 3.8"

  spec.add_development_dependency "bundler", "~> 2.0"
  spec.add_development_dependency "rake", "~> 12.0"
end
