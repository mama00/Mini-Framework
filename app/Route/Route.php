<?php
namespace App\Route;

    // Liste des routes de votre application
    $listRoute= ['index'=>'PostController@index',
                'addView'=>'PostController@addView',
                'postFormulaire'=>'PostController@postFormulaire',
                'voirPost'=>'PostController@voirPost',
                'template'=>'Test@tt'
                ];

    // Middleware associe a vos routes

    $listMiddleware=['index'=>[\App\Middleware\testMiddleware::class,
                               \App\Middleware\test2Middleware::class]
                    ];