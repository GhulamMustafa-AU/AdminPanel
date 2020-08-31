<?php

use Illuminate\Support\Facades\Route;
Route::get('/','AdminHomeController@dashboard')->name('dashboard');

// classes Section routes

Route::get("/add-section","ClassSectionController@addClassSection")->name('addclasssection');
Route::get("/list-section","ClassSectionController@listClassSection")->name('listclasssections');

// classes routes


Route::get("/add-class","SchoolClassController@addClass")->name('addclasses');
Route::get("/list-class","SchoolClassController@listClass")->name('listclasses');

// faculty type routes

Route::get("/add-faculty-types","FacultyTypeController@addFacultyTypes")->name("addfacultytypes");
Route::get("/list-faculty-types","FacultyTypeController@listFacultyTypes")->name("listfacultytypes");

// faculty members routes

Route::get("/add-faculty-members","FacultyController@addFacultyMembers")->name("addfacultymembers");
Route::get("/list-faculty-members","FacultyController@listFacultyMembers")->name("listfacultymembers");

// students routes
Route::get("/add-students","StudentController@addStudents")->name("addstudents");
Route::get("/list-students","StudentController@listStudents")->name("liststudents");
