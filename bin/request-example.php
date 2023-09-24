<?php

use Symfony\Component\DomCrawler\Crawler;
use Symfony\Component\HttpClient\HttpClient;

require __DIR__ . '/../vendor/autoload.php';

$client = HttpClient::create();

$response = $client->request(
    'GET',
    'https://php.locaweb.com.br/'
);
$content = $response->getContent();

$crawler = new Crawler($content);
$elements = $crawler->filter('div.speaker h3');

foreach ($elements as $domElement) {
    var_dump($domElement->textContent);
    echo $domElement->textContent;
}

// $content = '{"id":521583, "name":"symfony-docs", ...}'
// $content = $response->toArray();
// $content = ['id' => 521583, 'name' => 'symfony-docs', ...]