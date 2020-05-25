# Chuck-norris-jokes Package Changelog
All notable changes to chuck-norris-jokes will be documented in this file. 

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [Unreleased]
### Added
- Install dev orchestra/testbench
- ChuckNorrisJokesServiceProvider
- Facades/ChuckNorris
- laravel extra to composer.json
- Console/ChuckNorrisJoke command
- Http/Controllers/ChuckNorrisController, Route chuck-norris to ChuckNorrisJokesServiceProvider@boot
- LaravelTest the_route_can_be_accessed test method
- resources/vies/joke.blade.php
- config/chuck-norris.php

## [1.1.0] - 2020-05-24
### Added
- Install guzzlehttp/guzzle

### Changed
- JokeFactoryTest it_returns_a_random_joke by adding mock response
- JokeFactory by using GuzzleHttp\Client to get jokes with API requests

### Removed
- it_returns_a_predefined_joke test

## [1.0.0] - 2020-05-21
- Initial release

<!-- Linked versions -->
[Unreleased]: https://github.com/NikulinIlya/chuck-norris-jokes/compare/1.1.0...HEAD
[1.1.0]: https://github.com/NikulinIlya/chuck-norris-jokes/releases/tag/1.1.0
[1.0.0]: https://github.com/NikulinIlya/chuck-norris-jokes/releases/tag/1.0.0