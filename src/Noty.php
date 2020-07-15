<?php

namespace Nicoaudy\Noty;

use Illuminate\Session\Store;
use Illuminate\Support\Arr;

class Noty
{
    private $session;
    private $config;

    public function __construct(Store $session)
    {
        $this->session = $session;
        $this->config = config('noty');
    }

    public function flash($name, $data = [])
    {
        $this->session->flash($name, $data);
    }

    public function config($config = [])
    {
        $this->session->flash('noty.config', $config);

        return $this;
    }

    public function message($message, $type = 'blue')
    {
        $messages = [];

        if (! empty($message)) {
            // old messages exists
            if (! empty(session('noty.messages'))) {
                $messages = session('noty.messages');
            }

            if (! collect(Arr::flatten($messages))->contains($message)) {
                $messages[] = [
                    'text' => $message,
                    'type' => $type,
                ];
            }
        }

        $this->session->flash('noty.messages', $messages);
        $this->session->flash('noty.config', $this->config);

        $availTypes = ['blue', 'red', 'green', 'yellow'];
        if (in_array($type, $availTypes)) {
            $this->session->flash('noty.config.type', $type);
        }

        return $this;
    }
}
