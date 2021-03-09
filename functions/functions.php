<?php
//var_dump($_SERVER['DOCUMENT_ROOT']);

const SEARCH_RESULTS = [
    'Montpellier',
    'Paris',
    'Monaco',
    'Marseille',
    'Rennes',
    'Toulouse',
];

function isCurrentUrl(string $url): ?string
{
    if ($_SERVER['REQUEST_URI'] === $url) {
        return 'active';
    }

    return false;
}

function getTeamates(): array
{
    // On prétend que nos membres sont en BDD
    return [
        'Bob Marley', 'Albin Michel', 'Austin Powers', 'Charles Darwin',
    ];
}

function getResults(string $item): string
{
    if (in_array($item, SEARCH_RESULTS)) {
        return 'Nous intervenons dans votre ville : ' . $item;
    }

    return 'Désolé, nous ne sommes pas encore présents à ' . $item;
}
