<?php
/*__rester vrai__*/
 namespace App\Http; use Illuminate\Foundation\Http\Kernel as HttpKernel; class Kernel extends HttpKernel { protected $middleware = array(\Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode::class, \Illuminate\Foundation\Http\Middleware\ValidatePostSize::class, \App\Http\Middleware\TrimStrings::class, \Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull::class, \App\Http\Middleware\Stop::class); protected $middlewareGroups = array("\x77\x65\x62" => array(\App\Http\Middleware\EncryptCookies::class, \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class, \Illuminate\Session\Middleware\StartSession::class, \Illuminate\View\Middleware\ShareErrorsFromSession::class, \App\Http\Middleware\VerifyCsrfToken::class, \Illuminate\Routing\Middleware\SubstituteBindings::class), "\141\x70\151" => array("\x74\x68\x72\157\164\x74\x6c\x65\x3a\x36\60\x2c\x31", "\x62\151\x6e\144\x69\156\147\163")); protected $routeMiddleware = array("\141\x75\164\x68" => \Illuminate\Auth\Middleware\Authenticate::class, "\x61\x75\164\150\56\142\141\163\x69\143" => \Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class, "\142\x69\156\x64\151\156\147\163" => \Illuminate\Routing\Middleware\SubstituteBindings::class, "\x63\141\x6e" => \Illuminate\Auth\Middleware\Authorize::class, "\x67\165\x65\x73\164" => \App\Http\Middleware\RedirectIfAuthenticated::class, "\164\x68\162\157\164\164\x6c\145" => \Illuminate\Routing\Middleware\ThrottleRequests::class); }
