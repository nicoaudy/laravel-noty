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

    public function config($config = [])
    {
        $this->session->flash('noty.config', $config);

        return $this;
    }

    public function info($title = null, $message = null)
    {
        return $this->message($message, 'blue', $title);
    }

    public function warning($title = null, $message = null)
    {
        return $this->message($message, 'yellow', $title);
    }

    public function success($title = null, $message = null)
    {
        return $this->message($message, 'green', $title);
    }

    public function danger($title = null, $message = null)
    {
        return $this->message($message, 'red', $title);
    }

    public function flash($title = null, $message = null)
    {
        return $this->message($message, 'primary', $title);
    }

    private function message($message, $type, $title)
    {
        $messages = [];

        if (! empty($message)) {
            if (! empty(session('noty.messages'))) {
                $messages = session('noty.messages');
            }

            if (! collect(Arr::flatten($messages))->contains($message)) {
                $messages[] = [
                    'text' => $message,
                    'type' => $type,
                    'title' => $title ?? null,
                ];
            }
        }

        $this->session->flash('noty.messages', $messages);
        $this->session->flash('noty.config', $this->config);

        $availTypes = ['blue', 'red', 'green', 'yellow', 'primary'];
        if (in_array($type, $availTypes)) {
            $this->session->flash('noty.config.type', $type);
        }

        return $this;
    }
}
