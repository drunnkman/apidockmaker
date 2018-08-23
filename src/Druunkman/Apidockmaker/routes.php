<?php

Route::get('apidocmaker', function(){
    echo 'Hello from the calculator package!';
});

Route::get('add/{a}/{b}', 'Druunkman\Apidockmaker\ApiDocumentController@add');
Route::get('subtract/{a}/{b}', 'Druunkman\Apidockmaker\ApiDocumentController@subtract');