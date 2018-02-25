# sym4a
## Symfony 4 testing
### Installing symfony 4
composer create-project symfony/website-skeleton sym4a
### changing directory
cd sym4a
### Installing console
composer require server --dev
### Running server (127.0.0.1:8000)
php bin/console server:run
### Installing Security Checker
composer require sec-checker
### Installing annotation routes
composer require annotations
### Installing debug toolbar
composer require --dev profiler
### Installing twig
composer require twig
