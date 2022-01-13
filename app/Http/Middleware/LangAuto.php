<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class LangAuto
{
 
    const SESSION_KEY = 'locale';
    const LOCALES = ['en', 'es'];

    public function handle($request, Closure $next)
    {

        $session = $request->getSession();
        if (!$session->has(self::SESSION_KEY)) {
          $session->put(self::SESSION_KEY, $request->getPreferredLanguage(self::LOCALES));
        }
        app()->setLocale($session->get(self::SESSION_KEY));
      

        return $next($request);
    }
}
