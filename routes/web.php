<?php



Route::get('/', 'fsm_maincontroller@index')->name('index');
Route::get('/about_us','fsm_maincontroller@about_us_page')->name('about_us');
Route::get('/contact_us','fsm_maincontroller@contact_us_page')->name('contact_us');
Route::get('/login','fsm_maincontroller@login_page')->name('login');
Route::get('/registration','fsm_maincontroller@registration_page')->name('registration');
Route::get('/privacy_policy','fsm_maincontroller@privacy_policy_page')->name('privacy_policy');

Route::get('/services','fsm_maincontroller@services_page')->name('services');

Route::get('/accordion', 'fsm_maincontroller@accordion_page')->name('accordion');
Route::get('/appointment ', 'fsm_maincontroller@appointment_page')->name('appointment');

Route::get('/blog_classic ', 'fsm_maincontroller@blog_classic_page')->name('blog_classic');
Route::get('/product_details ', 'fsm_maincontroller@product_details_page')->name('product_details');

Route::get('/product_fullwidth2', 'fsm_maincontroller@product_fullwidth2_page')->name('product_fullwidth2');

Route::get('/product_fullwidth', 'fsm_maincontroller@product_fullwidth_page')->name('product_fullwidth');
route::get('/product_fullwidth3', 'fsm_maincontroller@product_fullwidth3_page')->name('product_fullwidth3');

Route::get('/our_team', 'fsm_maincontroller@our_team_page')->name('our_team');

Route::get('/m404', 'fsm_maincontroller@m404_page')->name('m404');
Route::get('/m503', 'fsm_maincontroller@m503_page')->name('m503');
Route::get('/faq', 'fsm_maincontroller@faq_page')->name('faq');

Route::get('/product_list', 'fsm_maincontroller@product_list_page')->name('product_list');

Route::get('/product_list2', 'fsm_maincontroller@product_list2_page')->name('product_list2');

Route::get('/film_stress', 'fsm_maincontroller@film_stress_page')->name('film_stress');



