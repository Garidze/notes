<?php

namespace App\Http\Controllers;

use App\Services\Bind\IBind;
use Illuminate\Http\Request;

class TestSecondController extends Controller
{
    public function __construct(protected IBind $bind){}

    public function index()
    {
        dump('TestSecondController index');
        $this->bind->info();
    }
}
