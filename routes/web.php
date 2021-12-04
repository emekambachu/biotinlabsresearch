<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;

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

Route::get('/', function () {
    return view('home');
});

Route::get('about', function () {
    return view('about');
});

Route::get('services', function () {
    return view('services');
});

Route::get('contact', function () {
    return view('contact');
});

Route::post('contact/submit', function (Request $request){

    $input = $request->all();
    $rules = array(
        'name' => ['required'],
        'email' => ['required', 'email'],
        'mobile' => ['nullable'],
        'subject' => ['required'],
        'description' => ['required'],
    );

    $validator = Validator::make($input, $rules);

    if($validator->fails()){
        return response()->json([
            "errors" => $validator->getMessageBag()->toArray()
        ]);
    }

    $data = [
        'name' => $input['name'],
        'email' => $input['email'],
        'mobile' => $input['mobile'],
        'subject' => $input['subject'],
        'description' => $input['description'],
    ];

    Mail::send('emails.contact', $data, static function ($message) use ($data) {
        $message->from('info@biotinlabsresearch.com', 'Biotin Labs Research');
        $message->to('inquiry@biotinlabsresearch.com');
        $message->replyTo('info@biotinlabsresearch.com', 'Biotin Labs Research');
        $message->subject('Message from '.$data['name']);
    });

    return response()->json([
        'success'=>'Submitted',
    ]);

})->name('contact.submit');

Route::get('appointment', function () {
    return view('appointment');
});

Route::post('appointment/submit', function (Request $request){

    $input = $request->all();
    $rules = array(
        'name' => ['required'],
        'email' => ['required', 'email'],
        'date' => ['required'],
        'time' => ['nullable'],
        'subject' => ['required'],
        'description' => ['required'],
    );

    $validator = Validator::make($input, $rules);

    if($validator->fails()){
        return response()->json([
            "errors" => $validator->getMessageBag()->toArray()
        ]);
    }

    $data = [
        'name' => $input['name'],
        'email' => $input['email'],
        'date' => $input['date'],
        'time' => $input['time'],
        'subject' => $input['subject'],
        'description' => $input['description'],
    ];

    Mail::send('emails.contact', $data, static function ($message) use ($data) {
        $message->from('info@biotinlabsresearch.com', 'Biotin Labs Research');
        $message->to('inquiry@biotinlabsresearch.com');
        $message->replyTo('info@biotinlabsresearch.com', 'Biotin Labs Research');
        $message->subject('Appointment request from '.$data['name']);
    });

    return response()->json([
        'success'=>'Appointment request submitted',
    ]);

})->name('appointment.submit');


// Github Deployment
// Must disable csrf in Http/Middleware/VerifyCsrfToken
Route::post('github/deploy', 'GithubDeploymentController@deploy');
