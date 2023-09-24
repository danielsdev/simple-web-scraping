<?php

libxml_use_internal_errors(true);

$content = file_get_contents('https://php.locaweb.com.br/');

//extension ??
$document = new DOMDocument();
$document->loadHTML($content);

$xPath = new DOMXPath($document);
// h2[itemprop="headline"]
// .//h2[@itemprop="headline"]

//div.speaker h3
// .//div[@class="speaker"]//h3
$domNodeList = $xPath->query('.//div[@class="speaker"]//h3');

/** @var DOMNode $element */
foreach ($domNodeList as $element) {
    echo $element->textContent;
}
