<?php

	namespace App\Services\Factory\Factorymethod;

	class DeliveryTruck extends AbstractDelivery
	{
        public function getMethod() :IDelivery
        {
            return new DeliveryByTrack();
        }
	}
