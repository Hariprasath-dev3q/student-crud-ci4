<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\StudentAuth;
use App\Controllers\StudentForm;
use App\Controllers\InsertData;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', "StaffAuth::login");
$routes->group('staffAuth', function ($routes) {
  $routes->post('userLogin', "StaffAuth::userLogin");
  $routes->get('dashboard', "StaffAuth::dashboard");
  $routes->post('logout', "StaffAuth::logout");
  $routes->get('profile', "StaffAuth::profile");
  $routes->get('signup', 'StaffAuth::signup');
  $routes->post('signup', 'StaffAuth::staffSignup');
});

$routes->group('studentform', function ($routes) {
  $routes->get('/', 'StudentForm::index');
  $routes->post('userLogin', 'StaffAuth::userLogin');
  $routes->get('dashboard', "StaffAuth::dashboard");
  $routes->get('profile', "StudentForm::profile");
  $routes->post('save-items', 'StudentForm::saveItems');
  $routes->get('display', 'StudentForm::getItems');
  $routes->get('display/teacher', 'StudentForm::getItemsByName');
  $routes->get('(:num)', 'StudentForm::editItem/$1');
  $routes->post('delete-item', 'StudentForm::deleteItem');
  $routes->get('staff/details/(:num)', 'StudentForm::qrDetails/$1');
});

// using mock api in postman collection
$routes->group('students', function ($routes) {
  $routes->get('/', "StudentForm::formDetails");
  $routes->post('/', "StudentForm::store");
  $routes->put('(:num)', "StudentForm::update/$1");
  $routes->delete('(:num)', "StudentForm::delete/$1");
  $routes->get('filter', "StudentForm::filterByTeacher");
});

$routes->group('auth', function ($routes) {
  $routes->post('signup', 'StaffAuth::mock_signup');
  $routes->post('login', 'StaffAuth::mock_login');
});

// ******

$routes->group('insertData', function ($routes) {
  $routes->get('display', 'InsertData::displayStudentDetails');
  $routes->post('import-excel', 'InsertData::importExcel');
  $routes->post('export-excel', 'InsertData::exportData');
  $routes->post('sample-excel', 'InsertData::sampleExcel');
  $routes->post('delete-multiple', 'InsertData::deleteMultiple');
  $routes->post('generate-pdf', "InsertData::generatePdf");
});
