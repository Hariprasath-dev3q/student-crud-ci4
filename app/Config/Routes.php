<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\StudentAuth;
use App\Controllers\StudentForm;
use App\Controllers\InsertData;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', "StudentAuth::login");
$routes->group('studentAuth', function ($routes) {
  $routes->post('userLogin', "StudentAuth::userLogin");
  $routes->get('dashboard', "StudentAuth::dashboard");
  $routes->post('logout', "StudentAuth::logout");
  $routes->get('profile', "StudentAuth::profile");
  $routes->get('signup', 'StudentAuth::signup');
  $routes->post('signup', 'StudentAuth::staffSignup');
});

$routes->group('studentform', function ($routes) {
  $routes->get('/', 'StudentForm::index');
  $routes->post('userLogin', 'StudentAuth::userLogin');
  $routes->get('dashboard', "StudentAuth::dashboard");
  $routes->get('profile', "StudentForm::profile");
  $routes->post('save-items', 'StudentForm::saveItems');
  $routes->get('display', 'StudentForm::getItems');
  $routes->get('display/teacher', 'StudentForm::getItemsByTeacherName');
  $routes->get('(:num)', 'StudentForm::editItem/$1');
  $routes->post('delete-item', 'StudentForm::deleteItem');
  
});

$routes->group('insertData', function ($routes) {
  $routes->get('display', 'InsertData::displayStudentDetails');
  $routes->post('import-excel', 'InsertData::importExcel');
  $routes->post('export-excel', 'InsertData::exportData');
  $routes->post('sample-excel', 'InsertData::sampleExcel');
  $routes->post('delete-multiple', 'InsertData::deleteMultiple');
});
