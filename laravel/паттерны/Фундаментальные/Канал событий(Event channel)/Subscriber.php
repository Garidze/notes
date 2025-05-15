<?php

	namespace App\Services;

	class Subscriber
	{
        public function __construct(protected $name){}

        public function notify($data)
        {
            dump('Subscriber - ' . $this->getName() . ' notification has been sent with {' . $data . '} successfully!');
        }

        public function getName()
        {
            return $this->name;
        }

	}
