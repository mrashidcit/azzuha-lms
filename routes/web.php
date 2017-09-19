<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('main-test', function () {
    return view('main-test');
});

Route::get('', function () {
  return view('index');
});

Route::get('main', function () {
  return view('index');
});

// Route::get('', function () {
//     return redirect('/login');
// });

Route::get('quiz-test', function () {
    return view('quiz');
});

Route::get('dashboard', function () {
  $user = Auth::user();
  if ($user && $user->user_type == 1){
        return view('admin.main');
      //    return view('dashboard.dashboard');
  }
  else{
    return redirect('main');
  }

});

Route::get('view-corse', function () {

  $course = DB::table('course_outlines')->get();

  return view('view-corse', ['course' => $course]);

});

Route::get('view-audio', function () {

  $audio = DB::table('audio_lectures')->get();

  return view('view-audio', ['audio' => $audio]);

});

Route::get('view-subjects', function () {

  $subjects = DB::table('subjects')->get();

  return view('view-subjects', ['subjects' => $subjects]);

});

// Route::get('bcrypt', function () {
//
//   return bcrypt('123');
//
// });

// Route::get('assign-subject', );

Route::get('download-corse/{path}', function ($path) {
    return response()->download(public_path("/images/courseOutline/$path"));
});

Route::get('delete-corse/{id}','CourseOutlineController@destroy');
Route::get('create-course','CourseOutlineController@create');
Route::post('add-course','CourseOutlineController@store');

Route::get('edit-course/{id}','CourseOutlineController@edit');
Route::post('update-course','CourseOutlineController@update');

//audio_lectures
Route::get('create-audio','audio_lecturesController@create');
Route::post('add-audio','audio_lecturesController@store');
Route::get('edit-audio/{id}','audio_lecturesController@edit');
Route::post('update-audio','audio_lecturesController@update');
Route::get('delete-audio/{id}','audio_lecturesController@destroy');

//subjects sections
Route::get('create-subject','subjectController@create');
Route::post('add-subject','subjectController@store');
Route::get('edit-subject/{id}','subjectController@edit');
Route::post('update-subject','subjectController@update');
Route::get('delete-subject/{id}','subjectController@destroy');
Route::resource('subjects', 'subjectController');


//student sections
Route::get('create-student','studentController@create');
Route::post('add-student','studentController@store');
Route::get('view-students','studentController@index');
Route::get('edit-student/{id}','studentController@edit');
Route::post('update-student','studentController@update');
Route::get('delete-student/{id}','studentController@destroy');

//student sections
Route::get('create-teacher','teacherController@create');
Route::post('add-teacher','teacherController@store');
Route::get('view-teachers','teacherController@index');
Route::get('edit-teacher/{id}','teacherController@edit');
Route::post('update-teacher','teacherController@update');
Route::get('delete-teacher/{id}','teacherController@destroy');

//Teacher subject
Route::get('assign-subject/{id}','teacherSubjectController@create');
Route::post('store-teacher-subject','teacherSubjectController@store');
Route::get('show-teacher-subject/{t_id}','teacherSubjectController@show');
Route::get('delete-teacher-subject/{id}','teacherSubjectController@destroy');

//Teacher subject
Route::get('assign-student-subject/{id}','studentSubjectsController@create');
Route::post('store-student-subject','studentSubjectsController@store');
Route::get('show-student-subject/{st_id}','studentSubjectsController@show');
Route::get('delete-student-subject/{id}','studentSubjectsController@destroy');

/*
  *******************************************
          Teacher Routes
  *******************************************

*/

Route::prefix('teacher')->namespace('Teacher')->group(function(){
  
  Route::resource('assignments', 'AssignmentController');

});

// Questions Routes
Route::get('questions/questions-list', [
    'uses' => 'QuestionController@questionsListBySubjectId',
    'as' => 'questions.questionsListBySubjectId'
]);
Route::resource('questions', 'QuestionController');

// Assignments
// Route::resource('assignments', 'UserController');


// Semesters Routes
Route::resource('semesters', 'SemesterController');

// Study Program Routes
Route::resource('studyprograms', 'StudyProgramController');


// For Quiz operations
Route::get('quiz/start-quiz/{subject_id}', [
    'uses' => 'QuizController@start',
    'as' => 'quiz.start'
]);

Route::resource('quiz', 'QuizController');


Route::get('bcrypt','studentSubjectsController@custom_data');


Route::get('newvalid','studentController@validator(["name" => "shahtty", "email" => "shahzadm287@gmail.com", "password" => "123123"])');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', function(){
  Auth::logout();
  return redirect('/main');
});
