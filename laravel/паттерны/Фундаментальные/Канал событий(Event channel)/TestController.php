<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use App\Notifications\MailNotification;
use App\Services\EventChannel;
use App\Services\Publisher;
use App\Services\Subscriber;
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
        $newEventChannel = new EventChannel();

        $subscriberJohn = new Subscriber('John');

        $newSomePublisher = new Publisher('New some publisher publication', $newEventChannel);

        $newEventChannel->subscribe('New some publisher publication', $subscriberJohn);

        $newSomePublisher->publish('Data form publisher');
    }
	
}
