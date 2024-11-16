<?php

    namespace App\Http\Controllers;

    use App\Services\Singleton\TestSingleton;
    class TestController extends Controller
    {
        public function index()
        {
            $s1 = app(TestSingleton::class);
            $s1->setInfo('one');
            $s2 = app(TestSingleton::class);
            $s2->setInfo('two');
            $result['result1'] = $s1;
            $result['result2'] = $s2;
            dd($result);
        }

    }
