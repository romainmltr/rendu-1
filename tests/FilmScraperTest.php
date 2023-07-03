<?php
use PHPUnit\Framework\TestCase;
use Romain\Rendu1\FilmScraper;

class FilmScraperTest extends TestCase
{
    public function testScrapeNextFilmReleases()
    {
        $filmScraper = new FilmScraper();
        $filmReleases = $filmScraper->scrapeNextFilmReleases();

        // Comment indicating that film information has been retrieved
        echo "Test Unitair 1 : Film information retrieved.\n";

        $this->assertNotEmpty($filmReleases, ' Test Unitair 1 : No film release dates were retrieved.');
    }
}

