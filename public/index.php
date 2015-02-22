<?php

require __DIR__ . '/../vendor/autoload.php';

$xml = SimpleXmlReader\SimpleXmlReader::openXML('openmarine.xml');

echo '<pre>';

foreach($xml->path('open_marine/broker/adverts/advert') as $advert) {

    # echo print_r($advert->advert_features, 1); break;

    $features = $advert->advert_features;

    echo "{$features->manufacturer} {$features->model} (ref: {$advert->attributes()->ref})\n";
}

echo '</pre>';
