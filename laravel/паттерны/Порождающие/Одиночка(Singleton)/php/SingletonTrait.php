<?php

	namespace App\Services\Singleton;

	trait SingletonTrait
	{
        private static $instance = null;

        /*Запрещаем прямое создание*/
        private function __construct()
        {
            //
        }

        /*Запрещаем клонирование*/
        private function __clone()
        {
            //
        }

        /*Запрещаем десерелиализацию*/
        public function __wakeup()
        {
            //
        }

        public static function getInstance()
        {
            return static::$instance ?? static::$instance = new static();
        }
	}
