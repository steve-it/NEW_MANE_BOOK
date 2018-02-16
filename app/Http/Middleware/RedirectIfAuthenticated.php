<?php
/*__rester vrai__*/
 namespace App\Http\Middleware; use Closure; use Illuminate\Support\Facades\Auth; class RedirectIfAuthenticated { public function handle($request, Closure $next, $guard = null) { goto l9OhQGAbitUBzDJ3; uxitsqCL9Z2g42oh: return $next($request); goto dETJnyjR7HavvtlT; ABIXAIAkP2K5OWTj: return redirect("\x2f\150\x6f\x6d\x65"); goto fRmk1Dog6NLWfX2f; l9OhQGAbitUBzDJ3: if (!Auth::guard($guard)->check()) { goto mxAtlbbycNAXSmVX; } goto ABIXAIAkP2K5OWTj; fRmk1Dog6NLWfX2f: mxAtlbbycNAXSmVX: goto uxitsqCL9Z2g42oh; dETJnyjR7HavvtlT: } }
