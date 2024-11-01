<?php

	namespace App\Services\Factory\Abstract;

	class SummerWheel implements IWheel
	{
        protected $type = 'Summer';

        public function getType()
        {
            dd($this->type);
        }
	}
