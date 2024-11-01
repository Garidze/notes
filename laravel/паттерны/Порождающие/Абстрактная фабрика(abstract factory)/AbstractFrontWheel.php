<?php

	namespace App\Services\Factory\Abstract;

	class AbstractFrontWheel
	{
        public function setType($type) :IWheel
        {
            switch ($type) {
                case 'Winter':
                    $kit = new WinterWheel();
                    break;
                case 'Summer':
                    $kit = new SummerWheel();
                    break;
                default:
                    throw new \Exception("Неизвестный тип - {$type}");
            }
            return $kit;
        }
	}
