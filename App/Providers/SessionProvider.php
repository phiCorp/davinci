<?php

namespace App\Providers;

use Maya\Support\Session;
use Maya\Support\Token;

class SessionProvider extends Provider
{
    private $session;

    public function __construct()
    {
        $this->session = session();
    }
    public function boot()
    {
        $this->session->setSessionConfigure();
        $this->session->start(['cookie_httponly' => true]);
        $this->configureSessionFlash();
        $this->configureSessionCSRF();
    }

    private function configureSessionFlash()
    {
        $this->handleSession('temporary_flash', 'flash');
        $this->handleSession('temporary_errorFlash', 'errorFlash');
        $this->handleSession('temporary_old', 'old');
        session(['old' => array_merge($_GET ?? [], $_POST ?? [])]);
    }

    private function handleSession($temporaryKey, $key)
    {
        if ($this->session->exists($temporaryKey)) {
            $this->session->forget($temporaryKey);
        }
        if ($this->session->exists($key)) {
            session([$temporaryKey => session($key)]);
            $this->session->forget($key);
        }
    }
    private function configureSessionCSRF()
    {
        if ($this->session->missing('CSRF_TOKEN')) {
            $this->session->set('CSRF_TOKEN', Token::CSRF());
        }
    }
}
