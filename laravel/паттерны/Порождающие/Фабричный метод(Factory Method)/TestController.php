<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use App\Notifications\MailNotification;
use App\Services\Factory\Factorymethod\DeliveryTrain;
use App\Services\Factory\Factorymethod\DeliveryTruck;
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
        $byTrack = new DeliveryTruck();
        $byTrack->makeDelivery();
//        $byTrain = new DeliveryTrain();
//        $byTrain->makeDelivery();
    }

}
