<?php

	namespace App\Services;

	class EventChannel
	{
        public array $topic;

        public function subscribe($topic, $subscriber)
        {
            $this->topic[$topic][] = $subscriber;
        }

        public function publish($topic, $data)
        {
            if(empty($this->topic[$topic])) {
                return;
            }

            foreach ($this->topic[$topic] as $subscriber) {
                $subscriber->notify($data);
            }
        }

        public function getTopic()
        {
            dd($this->topic);
        }
	}
