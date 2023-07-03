<?php

use PHPUnit\Framework\TestCase;
use Romain\Rendu1\FilmScraper;

class FilmScraperTest extends TestCase
{
    public function testScrapeNextFilmReleases()
    {
        $filmScraper = new FilmScraper();
        $filmReleases = $filmScraper->scrapeNextFilmReleases();

        var_dump($filmReleases);


        $this->assertNotEmpty($filmReleases, 'Aucune date de sortie de film n\'a été récupérée.');


    }
}
