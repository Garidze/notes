<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use App\Notifications\MailNotification;
use App\Services\Factory\Abstract\AbstractFrontWheel;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;
use App\Models\User;
use Illuminate\Support\Facades\Validator;



class TestController extends Controller
{
    public function index()
    {
        $kit = (new AbstractFrontWheel())->setType('Winter');
        $kit -> getType();
    }
	
}
