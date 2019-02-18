<?php




//This is Admin Section

Route::group(['prefix'=>'admin'], function(){
    Route::get('/home','admin_controller@home')->middleware('admin_permission');
    Route::get('/charts','admin_controller@charts')->middleware('admin_permission');
});

//End of admin Section






Route::get('/', 'fsm_maincontroller@index')->name('index');
Route::get('/about_us','fsm_maincontroller@about_us_page')->name('about_us');
Route::get('/contact_us','fsm_maincontroller@contact_us_page')->name('contact_us');
Route::get('/login','fsm_maincontroller@login_page')->name('login');
Route::get('/registration','fsm_maincontroller@registration_page')->name('registration');
Route::get('/privacy_policy','fsm_maincontroller@privacy_policy_page')->name('privacy_policy');

Route::get('/services','fsm_maincontroller@services_page')->name('services');
Route::get('/appointment ', 'fsm_maincontroller@appointment_page')->name('appointment');

Route::get('/blog_classic ', 'fsm_maincontroller@blog_classic_page')->name('blog_classic');


Route::get('/product_128L ', 'fsm_maincontroller@product_details_page')->name('product_128L');
Route::get('/product_128L_C2C', 'fsm_maincontroller@product_details_page_128l_C2C')->name('product_128L_C2C');
Route::get('/product_128G_450', 'fsm_maincontroller@product_details_page_128G_450')->name('product_128G_450');
Route::get('/product_128NT', 'fsm_maincontroller@product_details_page_128NT')->name('product_128NT');
Route::get('/product_128_C2C', 'fsm_maincontroller@product_details_page_128C2C')->name('product_128_C2C');

Route::get('/product_413_C2C', 'fsm_maincontroller@product_details_page_413C2C')->name('product_413_C2C');
Route::get('/product_413_SA', 'fsm_maincontroller@product_details_page_413SA')->name('product_413_SA');
Route::get('/product_413_PR', 'fsm_maincontroller@product_details_page_413PR')->name('product_413_PR');
Route::get('/product_413_MOT', 'fsm_maincontroller@product_details_page_413MOT')->name('product_413_MOT');

Route::get('/product_500TC', 'fsm_maincontroller@product_details_page_500TC')->name('product_500TC');

Route::get('/product_raman360', 'fsm_maincontroller@product_details_page_raman360')->name('product_raman360');
Route::get('/product_127_C2C', 'fsm_maincontroller@product_details_page_127C2C')->name('product_127_C2C');

Route::get('/product_rms', 'fsm_maincontroller@product_details_page_rms')->name('product_rms');

Route::get('/product_melt', 'fsm_maincontroller@product_details_page_melt')->name('product_melt');
Route::get('/product_aquaflex', 'fsm_maincontroller@product_details_page_aquaflex')->name('product_aquaflex');


Route::get('/product_VITE_C2C', 'fsm_maincontroller@product_details_page_vitc2c')->name('product_VITE_C2C');
Route::get('/product_8108_VITE', 'fsm_maincontroller@product_details_page_8108vite')->name('product_8108_VITE');


Route::get('/product_900_C2C', 'fsm_maincontroller@product_details_page_900C2C')->name('product_900_C2C');
Route::get('/product_900TC_VAC', 'fsm_maincontroller@product_details_page_900TC_VAC')->name('product_900TC_VAC');

Route::get('/product_4pp', 'fsm_maincontroller@product_details_page_4pp')->name('product_4pp');
Route::get('/product_rsl', 'fsm_maincontroller@product_details_page_rsl')->name('product_rsl');


Route::get('/product_fullwidth2', 'fsm_maincontroller@product_fullwidth2_page')->name('product_fullwidth2');

Route::get('/product_fullwidth', 'fsm_maincontroller@product_fullwidth_page')->name('product_fullwidth');
route::get('/product_fullwidth3', 'fsm_maincontroller@product_fullwidth3_page')->name('product_fullwidth3');

Route::get('/m404', 'fsm_maincontroller@m404_page')->name('m404');
Route::get('/m503', 'fsm_maincontroller@m503_page')->name('m503');
Route::get('/faq', 'fsm_maincontroller@faq_page')->name('faq');

Route::get('/product_list', 'fsm_maincontroller@product_list_page')->name('product_list');

Route::get('/product_list2', 'fsm_maincontroller@product_list2_page')->name('product_list2');

Route::get('/film_stress', 'fsm_maincontroller@film_stress_page')->name('film_stress');
Route::get('/tsv_process_control', 'fsm_maincontroller@tsv_process_control_page')->name('tsv_process_control');
Route::get('/film_adhesion', 'fsm_maincontroller@film_adhesion_page')->name('film_adhesion');
Route::get('/raman_spectroscopy', 'fsm_maincontroller@raman_spectroscopy_page')->name('raman_spectroscopy');
Route::get('/laser_scanning', 'fsm_maincontroller@laser_scanning_page')->name('laser_scanning');
Route::get('/thin_wafer_metrology', 'fsm_maincontroller@thin_wafer_metrology_page')->name('thin_wafer_metrology');
Route::get('/electrical_characterization', 'fsm_maincontroller@electrical_characterization_page')->name('electrical_characterization');
Route::get('/low_coherence', 'fsm_maincontroller@low_coherence_page')->name('low_coherence');

Route::get('/thank_you','subscriber_related@thank_you')->name('thank_you');
Route::post('thank_you', 'subscriber_related@get_subscriber_request')->name('gratitiude');

Route::post('/contact_us_message', 'contact_controller@contact_us_message')->name('contact_us_message');

Route::get('/application', 'fsm_maincontroller@application_page')->name('application');
Route::get('/admin/import_page', 'mailblastController@import_page')->name('import_page');
Route::post('/admin/insert_email','mailblastController@insert_email')->name('insert_email');
Route::get('/sendbulk_request','sendgrid_bulkemail@sendbulk_request');
Route::post('/sendbulk','sendgrid_bulkemail@sendgrid_bulkemail');

Route::get('/fsm_admin/private/login','admin_controller@admin_login');
Route::post('/fsm_admin/login_request','admin_controller@admin_login_request');
Route::get('/fsm_admin/admin_report','admin_controller@admin_report');
Route::post('/fsm_admin/admin_report',"admin_controller@admin_report_request");


Route::get('/testroute','sendgrid_bulkemail@testfun');


