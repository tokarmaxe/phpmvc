<?php
/**
 * Created by PhpStorm.
 * User: Maxim Tokar`
 * Date: 26.01.2018
 * Time: 14:52
 */
return array(

//    'products'=>'product/list',
//    'news/archive' => 'news/archive',
//
//    'news/([a-z]+)/([0-9]+)'=>'news/view/$1/$2',
//    'news/([0-9]+)' => 'news/view',
//    'news'=>'news/index', //actionIndex в NewsController
    'news/([0-9]+)'=>'news/view/$1',
    'news'=>'news/index'
);