<?php

	namespace App\Services\Factory\Abstract;

	class WinterWheel implements IWheel
	{
        protected $type = 'Winter';

        public function getType()
        {
            dd($this->type);
        }
	}
