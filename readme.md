This repository contains a library for scraping film release dates from a website
It provides a simple and convenient way to retrieve upcoming film releases.

## Installation 🛰️
To install the library, you can use Composer. Run the following command in your project directory:

```bash
composer require romainmltr/iim-td2  
```

## Local development 📡

```bash
php vendor/bin/php-css-fixer fix src tests --rule-set=PSR12
```

```bash
php vendor/bin/phpstan analyse src tests --level max
```

```bash
php vendor/bin/phpunit tests
```

## Usage 👨‍🚀

```php
require_once 'vendor/autoload.php';

use Romain\Rendu1\FilmScraper;

function printFilmReleases(array $filmReleases): void
{
    foreach ($filmReleases as $film) {
        echo "Title: " . $film['title'] . "\n";
        echo "Genres:\n";
        foreach ($film['genres'] as $genre) {
            echo "- " . $genre . "\n";
        }
        echo "\n";
    }
}

$filmScraper = new FilmScraper();
$filmReleases = $filmScraper->scrapeNextFilmReleases();

printFilmReleases($filmReleases);

```


### Contributing 💓
Contributions to this project are welcome.
If you encounter any issues or have suggestions for improvements, please open an issue or submit a pull request.

### License
This project is licensed under the [MIT License](https://opensource.org/licenses/MIT)
