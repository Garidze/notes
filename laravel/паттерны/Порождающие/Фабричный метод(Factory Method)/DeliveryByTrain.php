<?php

	namespace App\Services\Factory\Factorymethod;

	class DeliveryByTrain implements IDelivery
	{
        public function info()
        {
            dd('Delivery by train!');
        }
	}
