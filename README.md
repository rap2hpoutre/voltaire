# Voltaire
## TL;DR
Proof-reading tool (spell checker, grammar fixer, etc.). Works for English, French, German, Polish, and more than 20 other languages, thanks to [LanguageTool](https://www.languagetool.org/). Install via composer, works with any of your favorite framework: Laravel, Slim, Symfony, etc.

## Install
Install via composer
```
composer require rap2hpoutre/voltaire
```

## Usage

### Quick start

``` php
// Initialize Voltaire with your language.
$voltaire = new Rap2hpoutre\Voltaire\Voltaire('fr');

// Process text and get the response.
$response = $voltaire->process('Bonjour tous le monde.');

// Display all errors
foreach($response->errors as $error) {
    echo $error->message . "\n";
}
```
