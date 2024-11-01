<?php

	namespace App\Services\Factory\Factorymethod;

	class DeliveryTrain extends AbstractDelivery
	{
        public function getMethod() :IDelivery
        {
            return new DeliveryByTrain();
        }
	}
