<?php


Route::get('/', [
    'uses'  => 'EmployeeController@Index',
    'as'    => '/'
]);

Route::get('/employee/add',[
   'uses'   => 'EmployeeController@addEmployeeInfo',
   'as'     => 'add-employee'
]);

Route::post('/employee/save', [
    'uses'  => 'EmployeeController@saveEmployeeInfo',
    'as'    => 'new-employee'
]);
Route::get('/employee/manage', [
    'uses'  => 'EmployeeController@manageEmployeeInfo',
    'as'    => 'manage-employee'
]);

Route::get('/employee/edit/{id}', [
    'uses'  => 'EmployeeController@editEmployeeInfo',
    'as'    => 'edit-employee'
]);
Route::post('/employee/update', [
    'uses'  => 'EmployeeController@updateEmployeeInfo',
    'as'    => 'update-employee'
]);

Route::get('/employee/delete/{id}', [
    'uses'  => 'EmployeeController@deleteEmployeeInfo',
    'as'    => 'delete-employee'
]);
Route::get('/employee/pdf/{id}', [
    'uses'  => 'EmployeeController@pdfEmployeeInfo',
    'as'    => 'pdf-employee'
]);

Route::get('/salary/add', [
    'uses'  => 'EmployeeSalaryController@Index',
    'as'    => 'add-salary'
]);
Route::post('/salary/save', [
    'uses'  => 'EmployeeSalaryController@saveEmployeeSalary',
    'as'    => 'new-salary'
]);
Route::get('/salary/manage', [
    'uses'  => 'EmployeeSalaryController@manageEmployeeSalary',
    'as'    => 'manage-salary'
]);

Route::get('/salary/edit/{id}', [
    'uses'  => 'EmployeeSalaryController@editEmployeeSalary',
    'as'    => 'edit-salary'
]);
Route::post('/salary/update', [
    'uses'  => 'EmployeeSalaryController@updateEmployeeSalary',
    'as'    => 'update-salary'
]);

Route::get('/salary/delete/{id}', [
    'uses'  => 'EmployeeSalaryController@deleteEmployeeSalary',
    'as'    => 'delete-salary'
]);
Route::get('/salary/pdf', [
    'uses'  => 'EmployeeSalaryController@pdfEmployeeSalary',
    'as'    => 'pdf-salary'
]);
Route::get('/salary/pdf/{id}', [
    'uses'  => 'EmployeeSalaryController@pdfgenEmployeeSalary',
    'as'    => 'pdfgen-salary'
]);


Route::get('/client/add', [
    'uses'  => 'ClientController@addClient',
    'as'    => 'add-client'
]);
Route::post('/client/save', [
    'uses'  => 'ClientController@saveClient',
    'as'    => 'new-client'
]);
Route::get('/client/manage', [
    'uses'  => 'ClientController@manageClient',
    'as'    => 'manage-client'
]);
Route::get('/client/edit/{id}', [
    'uses'  => 'ClientController@editClient',
    'as'    => 'edit-client'
]);
Route::post('/client/update', [
    'uses'  => 'ClientController@updateClient',
    'as'    => 'update-client'
]);
Route::get('/client/delete/{id}', [
    'uses'  => 'ClientController@deleteClient',
    'as'    => 'delete-client'
]);

Route::get('/client/pdf/{id}', [
    'uses'  => 'ClientController@pdfGenerator',
    'as'    => 'pdf-client'
]);

Route::get('/about-us',[
    'uses'  => 'AboutUsController@aboutUs',
    'as'    => 'about-us'
]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
