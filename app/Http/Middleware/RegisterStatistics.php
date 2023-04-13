<?php

namespace App\Http\Middleware;

use App\Models\Statistic;
use Closure;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class RegisterStatistics {
  /**
   * Handle an incoming request.
   *
   * @param  Request                                         $request
   * @param  \Closure(Request): (Response|RedirectResponse)  $next
   *
   * @return Response|RedirectResponse
   */
  public function handle(Request $request, Closure $next): Response|RedirectResponse {
    if ($request->is('admin*')) {
      return $next($request);
    }
    
    Statistic::create();
    
    return $next($request);
  }
}
