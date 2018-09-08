<?php
return array (
    
//    '' => 'site/index',//Контроллер Site, и actionIndex
    

    //Из news/sport/114 вырезать sport/114 и подставить на места ссылок $1, $2
    'news/([a-z]+)/([0-9]+)' => 'news/view/$1/$2', //Для того чтобы работали ссылкенужно их в роутере описать
    'news/([0-9]+)' => 'news/view',
    '' => 'test/index',
    //'news' => 'news/index', //news - это то что вводится пользователем url
    //'products' => 'product/list', //actionList в ProductController
);