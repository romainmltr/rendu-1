<?php

declare(strict_types=1);

namespace Romain\Rendu1;

use Symfony\Component\DomCrawler\Crawler;
use Symfony\Component\HttpClient\HttpClient;

class FilmScraper
{
    private $client;
    private $crawler;

    public function __construct()
    {
        $this->client = HttpClient::create();
        $this->crawler = new Crawler();
    }

    public function scrapeNextFilmReleases()
    {
        $url = 'https://www.20minutes.fr/arts-stars/cinema/prochaine-sortie-cinema';

        $response = $this->client->request('GET', $url);
        $html = $response->getContent();

        $this->crawler->addHtmlContent($html);

        $filmReleases = [];

        $this->crawler->filter('.movie')->each(function (Crawler $node) use (&$filmReleases) {
            $filmTitle = $node->filter('.movie-title')->text();
            $genreElements = $node->filter('.movie-head strong');
            $genres = [];

            $genreElements->each(function (Crawler $genreNode) use (&$genres) {
                $genres[] = $genreNode->text();
            });

            $filmReleases[] = [
                'title' => $filmTitle,
                'genres' => $genres,
            ];
        });

        return $filmReleases;
    }
}
