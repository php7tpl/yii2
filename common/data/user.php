<?php

$loginList = [
    'admin',
    'manager_opo',
    'manager_ppo',
    'manager_fprk',
    'user',
    'vitaliy',
    'nadya',
    'nadya',
    'gulzat',
    'rustam',
    'zhanara',
    'timur123',
    'vitaliy',
    'alex',
    'kate',
    'meirlen',
    'nadezhda1995',
    'gulzat2',
    'alex1',
    'turin',
 	'shaldybina',
 	'alexandrova',
 	'bajenova',
 	'davydov',
 	'sergeeva',
 	'ostimchuk',
 	'orlov',
 	'sobolev',
 	'chistyakova',
 	'belochkin',
 	'mohov',
 	'knyazev',
 	'guzhevskaya',
 	'nilova',
 	'mansurova',
 	'ryazanceva',
];

$result = [];
foreach ($loginList as $i => $login) {
    $result[] = [
        'id' => $i + 1,
        'login' => $login,
        'status' => 1,
        'created_at' => '2018-03-28 21:00:13',
    ];
}

return $result;
