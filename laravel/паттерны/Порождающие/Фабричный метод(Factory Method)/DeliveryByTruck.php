<?php

	namespace App\Services\Factory\Factorymethod;

	class DeliveryByTruck implements IDelivery
	{
        public function info()
        {
            dd('Delivery by track!');
        }
	}
