<?php

	namespace App\Services\Singleton;

	class Singleton
	{
        use SingletonTrait;
        private $test;

        public function setTest($test)
        {
            $this->test = $test;
        }

	}
