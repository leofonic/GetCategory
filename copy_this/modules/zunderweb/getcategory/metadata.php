<?php
$aModule = array(
    'id'          => 'getcategory',
    'title'       => 'Zunderweb Get Category',
    'description' =>  array(
        'de'=>'Spezifische Kategorie mit Subkategorien laden<br><br>
                Im Template: [{assign var="oCat" value=$oxcmp_categories->getCatById("c27031374e82bc8667f13abf6392317c")}]<br><br>
                um die Subkategorien zu laden $oCat->getSubCats()',
        'en'=>'Load specific Category with Subcats<br><br>
                In Template: [{assign var="oCat" value=$oxcmp_categories->getCatById("c27031374e82bc8667f13abf6392317c")}]<br><br>
                you can get the subcategories with $oCat->getSubCats()',
    ),
    'version'     => '1.0',
    'url'         => 'http://zunderweb.de',
    'email'       => 'info@zunderweb.de',
    'author'      => 'Zunderweb',
    'extend'      => array(
        'oxcategorylist' => 'zunderweb/getcategory/models/getcategory_oxcategorylist',
    ),
);
