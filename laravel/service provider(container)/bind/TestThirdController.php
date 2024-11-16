<?php

namespace App\Http\Controllers;

use App\Services\Bind\IBind;
use Illuminate\Http\Request;

class TestThirdController extends Controller
{
    public function __construct(protected IBind $bind){}

    public function index()
    {
        dump('TestThirdController index');
        $this->bind->info();
    }
}
