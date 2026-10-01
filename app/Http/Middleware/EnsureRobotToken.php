<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class EnsureRobotToken
{
    /**
     * Handle an incoming robot API request.
     *
     * Pass the token via the X-Robot-Token header or the ?token= query parameter.
     * The expected value lives in the ROBOT_API_TOKEN env variable.
     */
    public function handle(Request $request, Closure $next)
    {
        $expected = (string) env('ROBOT_API_TOKEN', '');
        $given = (string) $request->header('X-Robot-Token', $request->input('token', ''));

        if ($expected === '' || !hash_equals($expected, $given)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        return $next($request);
    }
}
