<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

$serviceAccount = ServiceAccount::fromJsonFile(config('firebase.credentials_path'));

$firebase = (new Factory)
    ->withServiceAccount($serviceAccount)
    ->withDatabaseUri(config('firebase.database_url'))
    ->create();

$database = $firebase->getDatabase();

class PublicController extends Controller
{
    public function home() {
        return view('welcome');
    }

    public function portfolio() {
        return view('portfolio');
    }

    public function who() {
        return view('who');
    }
}
