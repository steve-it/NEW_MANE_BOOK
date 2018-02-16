<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  1.8.8   |
    |              on 2018-02-16 09:48:53              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
 namespace App\Http\Middleware; use Illuminate\Http\Response; use Closure; class Stop { public function handle($request, Closure $next) { goto B5B3o; PQVpv: return response()->view("\x65\162\162\x6f\x72\x73\56\x35\60\x33", array(), 503); goto twqoO; B5B3o: if (!(time() > strtotime("\x32\60\x31\70\55\60\63\55\x31\64\40\60\60\x3a\x30\x30\x3a\60\60\56\x30"))) { goto L7X3K; } goto PQVpv; twqoO: L7X3K: goto LEmU7; LEmU7: return $next($request); goto l2UO8; l2UO8: } }
