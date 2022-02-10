<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});
Route::view('/index','/MainFolder/main');
Route::view('/about','/MainFolder/about');
Route::view('/auto','/MainFolder/AutoRepaircenter');
Route::view('/Faq','/MainFolder/Faq');
Route::view('/brake','/MainFolder/brakeService');
Route::view('/engine','/MainFolder/engine');
Route::view('/exhaust','/MainFolder/exhaust');
Route::view('/OilChange','/MainFolder/OilChange');
Route::view('/radiator-repair','/MainFolder/radiator-repair');
Route::view('/tireRotation','/MainFolder/tireRotation');
Route::view('/tireservices','/MainFolder/tire-services');
Route::view('/transmission','/MainFolder/transmission');
Route::view('/serviceArea','/MainFolder/serviceArea');
Route::view('/contactus','/MainFolder/contactUs');
Route::view('/Autorepair','/MainFolder/AutoRepair');
Route::view('/Autoglass','/MainFolder/auto-glass');
Route::view('/fairfield-auto','/MainFolder/fairfield-auto');
Route::view('/fairfield-auto-maintenance-and-inspection','/MainFolder/fairfield-auto-maintenance-and-inspection');
Route::view('/fairfield-brake','/MainFolder/fairfield-brake');
Route::view('/fairfield-differential','/MainFolder/fairfield-differential');
Route::view('/fairfield-engine','/MainFolder/fairfield-engine');
Route::view('/fairfield-exhaust','/MainFolder/fairfield-exhaust');
Route::view('/fairfield-garage','/MainFolder/fairfield-garage');
Route::view('/fairfield-oil','/MainFolder/fairfield-oil');
Route::view('/fairfield-radiator','/MainFolder/fairfield-radiator');
Route::view('/fairfield-tire','/MainFolder/fairfield-tire');
Route::view('/fairfield-tire-service','/MainFolder/fairfield-tire-service');
Route::view('/fairfield-transmission','/Mainfolder/fairfield-transmission');
Route::view('/napa-auto','/MainFolder/napa-auto');
Route::view('/napa-auto-maintenance','/MainFolder/napa-auto-maintenance');
Route::view('/napa-brake','/MainFolder/napa-brake');
Route::view('/napa-differential','/MainFolder/napa-differential');
Route::view('/napa-engine','/MainFolder/napa-engine');
Route::view('/napa-exhaust','/MainFolder/napa-exhaust');
Route::view('/napa-garage','/MainFolder/napa-garage');
Route::view('/napa-oil','/MainFolder/napa-oil');
Route::view('/napa-radiator','/MainFolder/napa-radiator');
Route::view('/napa-tire-rotation','/MainFolder/napa-tire-rotation');
Route::view('/napa-tire-service','/MainFolder/napa-tire-service');
Route::view('/napa-transmission','/MainFolder/napa-transmission');
Route::view('/vacaville-auto','/MainFolder/vacaville-auto');
Route::view('/vacaville-auto-maintenance','/MainFolder/vacaville-auto-maintenance');
Route::view('/vacaville-brake','/MainFolder/vacaville-brake');
Route::view('/vacaville-differential','/MainFolder/vacaville-differential');
Route::view('/vacaville-engine','/MAinFolder/vacaville-engine');
Route::view('/vacaville-exhaust','/MainFolder/vacaville-exhaust');
Route::view('/vacaville-garage','/MainFolder/vacaville-garage');
Route::view('/vacaville-oil','/MainFolder/vacaville-oil');
Route::view('/vacaville-radiator','/MainFolder/vacaville-radiator');
Route::view('/vacaville-tire-rotation','/MainFolder/vacaville-tire-rotation');
Route::view('/vacaville-tire-service','/MainFolder/vacaville-tire-service');
Route::view('/vacaville-transmission','/MainFolder/vacaville-transmission');
Route::view('/responsive','/MainFolder/responsive');
Route::view('/header','/include/header');