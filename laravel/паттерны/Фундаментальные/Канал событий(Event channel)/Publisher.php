<?php

	namespace App\Services;

	class Publisher
	{
		
        public function __construct(protected $topic, protected EventChannel $eventChannel){}
		
        public function publish($data)
        {
            $this->eventChannel->publish($this->topic, $data);
        }
		
	}
