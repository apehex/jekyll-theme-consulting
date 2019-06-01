# coding: utf-8
# frozen_string_literal: true

Gem::Specification.new do |spec|
  spec.name          = "jekyll-theme-drop"
  spec.version       = "0.1.2"
  spec.authors       = ["David Mougeolle"]
  spec.email         = ["david.mougeolle@moodule.net"]

  spec.summary       = "A Jekyll template on the theme of falling drops."
  spec.homepage      = "https://github.com/moodule/jekyll-theme-overflow"
  spec.license       = "CC-BY-4.0"

  spec.files         = `git ls-files -z`.split("\x0").select { |f| f.match(%r!^(assets|_layouts|_includes|_sass|LICENSE|README)!i) }

  spec.add_runtime_dependency "jekyll", "~> 3.8"

  spec.add_development_dependency "bundler", "~> 2.0"
  spec.add_development_dependency "rake", "~> 12.0"
end
