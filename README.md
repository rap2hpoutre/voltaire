# Porto
## TL;DR
Proof-reading tool (spell checker, grammar fixer, etc.). Works for English, French, German, Polish, and more than 20 other languages, thanks to [LanguageTool](https://www.languagetool.org/). Install via composer, works with any of your favorite framework: Laravel, Slim, Symfony, etc.

## Install
Install via composer
```
composer require rap2hpoutre/porto
```

## Usage

### Quick start

``` php
// Initialize Porto with your language.
$porto = new Rap2hpoutre\Porto\Porto('fr');

// Process text and get the response.
$response = $porto->process('Bonjour tous le monde.');

// Display all errors
foreach($response->errors as $error) {
    echo $error->message . "\n";
}
```
