<?php

	namespace App\Services\Singleton;

	class TestSingleton
	{
        public $info = null;

        public function getInfo()
        {
            return $this->info;
        }

        public function setInfo($info)
        {
            $this->info = $info;
        }
	}
