<?php

	namespace App\Services\Factory\Factorymethod;

	abstract class AbstractDelivery
	{
        public function makeDelivery()
        {
            $deliveryType = $this->getMethod();
            $deliveryType->info();
        }

        abstract function getMethod() :IDelivery;

	}
