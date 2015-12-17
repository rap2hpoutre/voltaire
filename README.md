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

### Production
According to [LanguageTool Wiki](http://wiki.languagetool.org/public-http-api), you should not use the public API
of LanguageTool to send automated requests. Oops, that's what we have done in quick start :innocent:
> Access is currently limited to 20 requests per IP per minute.

So, in production environment, you should use your own instance of LanguageTool, like this:
 ```php
 // Initialize Voltaire with your language and your own instance
 $voltaire = new Rap2hpoutre\Voltaire\Voltaire('fr', 'http://localhost:8081');
 ```

## About
François-Marie Arouet (French: [fʁɑ̃.swa ma.ʁi aʁ.wɛ]; 21 November 1694 – 30 May 1778), known by his nom de plume Voltaire (/voʊlˈtɛər/;[1] French: [vɔl.tɛːʁ]), was a French Enlightenment writer, historian, and philosopher famous for his wit, his attacks on the established Catholic Church, and his advocacy of freedom of religion, freedom of expression, and separation of church and state.

<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2b/Voltaire_dictionary.jpg/220px-Voltaire_dictionary.jpg" alt="Drawing" height="250"/>

_source: Wikipedia_
