<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  1.8.8   |
    |              on 2018-02-16 09:48:53              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
 namespace App\Http\Middleware; use Closure; use Illuminate\Support\Facades\Auth; class RedirectIfAuthenticated { public function handle($request, Closure $next, $guard = null) { goto DOQuj; iPlgV: return redirect("\x2f\x68\x6f\155\145"); goto gt34c; bu25O: return $next($request); goto keTuH; gt34c: QNCpD: goto bu25O; DOQuj: if (!Auth::guard($guard)->check()) { goto QNCpD; } goto iPlgV; keTuH: } }
