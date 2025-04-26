<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/students', function () {
    $data = [
        'name' => 'John Doe',
        'age' => 20,
        'grade' => 'A',
    ];
    return response()->json($data);
});

Route::post('/students', function () {
    // Get the data from the request
    // Get request body
    $data = request()->all();
    return response()->json([
        'message' => 'Student data received successfully',
        'data' => $data,
    ]);
});

Route::delete('/students', function () {
    // Get the data from the request
    // Get request body
    return response()->json([
        'message' => 'Student data delete successfully',
    ]);
});

Route::get('/teachers', function () {
    $data = [
        'name' => 'Jane Smith',
        'subject' => 'Mathematics',
        'experience' => 5,
    ];
    return response()->json($data);
});
