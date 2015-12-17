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
$response = $voltaire->process('Bojnour tout le monde.');

// Display all errors
foreach($response->errors as $error) {
    echo $error->msg . "\n";
}
```

### Production usage
According to [LanguageTool Wiki](http://wiki.languagetool.org/public-http-api), you should not use the public API
of LanguageTool to send automated requests. That's what this package do :innocent:
> Access is currently limited to 20 requests per IP per minute.
So, in production environment, you should use your own instance of LanguageTool, like this:
 ```
 // Initialize Voltaire with your language and your own instance
 $voltaire = new Rap2hpoutre\Voltaire\Voltaire('fr', 'http://localhost:8081');
 ```