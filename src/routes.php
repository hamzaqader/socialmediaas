<?php

Route::get('/facebook', function () {
   return FBM::getCreds();
});
Route::get('/fbcont','usama165\facebook\Controllers\facebookController@index');