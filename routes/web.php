<?php

use Illuminate\Support\Facades\Route;

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
route::resource('homes','App\Http\Controllers\HomeController');
route::resource('statuswork','App\Http\Controllers\STATUSController');
route::resource('choice','App\Http\Controllers\ChoiceController');
route::delete('choice.destroy/{ch_qs_id}/{ch_no}','App\Http\Controllers\ChoiceController@destroy')->name('choice.destroy');
route::resource('class_check','App\Http\Controllers\ClassCheckController');
route::delete('class_check.destroy/{cc_id}','App\Http\Controllers\ClassCheckController@destroy')->name('class_check.destroy');
route::resource('course_config','App\Http\Controllers\CourseConfigController');
route::delete('course_config.destroy/{ccf_year}/{ccf_term}/{ccf_crs_code}','App\Http\Controllers\CourseConfigController@destroy')->name('course_config.destroy');
route::resource('class_check_student','App\Http\Controllers\ClassCheckStudentController');
route::delete('class_check_student.destroy/{ccs_cc_id}/{ccs_std_code}','App\Http\Controllers\ClassCheckStudentController@destroy')->name('classcheckstudent.destroy');
route::resource('elle','App\Http\Controllers\StatusQuiz3Controller');
route::resource('quiz3','App\Http\Controllers\Quiz3Controller');
route::resource('course','App\Http\Controllers\CourseController');
route::resource('enroll','App\Http\Controllers\EnrollController');
route::delete('enroll.destroy/{enr_std_code}/{enr_crs_code}','App\Http\Controllers\EnrollController@destroy')->name('enroll.destroy');
route::resource('exam','App\Http\Controllers\ExamController');
route::delete('exam.destroy/{ex_id}/{ex_std_code}','App\Http\Controllers\ExamController@destroy')->name('exam.destroy');
route::resource('exam_control','App\Http\Controllers\ExamControlController');
route::delete('exam_control.destroy/{exc_id}','App\Http\Controllers\ExamControlController@destroy')->name('exam_control.destroy');
route::resource('exam_question','App\Http\Controllers\ExamQuestionController');
route::delete('exam_question.destroy/{eq_ex_id}/{eq_qs_id}','App\Http\Controllers\ExamQuestionController@destroy')->name('exam_question.destroy');
route::resource('faculty','App\Http\Controllers\FacultyController');
route::resource('question','App\Http\Controllers\QuestionController');
route::delete('question.destroy/{qs_id}','App\Http\Controllers\QuestionController@destroy')->name('question.destroy');
route::resource('student','App\Http\Controllers\StudentController');
route::resource('teacher','App\Http\Controllers\TeacherController');
route::resource('teacher_teach','App\Http\Controllers\TeacherTeachController'); 
route::delete('teacher_teach.destroy/{tt_crs_code}','App\Http\Controllers\TeacherTeachController@destroy')->name('teacher_teach.destroy');


Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
