<?php
//var_dump($_SERVER['DOCUMENT_ROOT']);

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
