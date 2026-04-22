<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function () {
	return "<h1>Halo, Selamat datang</h1> di tutorial laravel <i>www.malasngoding.com</i>";
});

Route::get('blog', function () {
    return view('blog');
});

Route::get('pert5', function () {
    return view('pertemuan5');
});

Route::get('dosen', [DosenController::class, 'index']);

Route::get('biodata', [DosenController::class, 'biodata']);

Route::get('pert1', function () {
    return view('pertemuan1');
});

Route::get('pert2part1', function () {
    return view('pertemuan2part1');
});

Route::get('pert2part2', function () {
    return view('pertemuan2part2');
});

Route::get('pert3part1', function () {
    return view('pertemuan3part1');
});

Route::get('pert3part2', function () {
    return view('pertemuan3part2');
});

Route::get('tugaspert3', function () {
    return view('tugasPertemuan3');
});

Route::get('pert4', function () {
    return view('pertemuan4');
});

Route::get('pert5part2', function () {
    return view('pertemuan5part2');
});

Route::get('tugaspert5', function () {
    return view('tugasPertemuan5');
});
