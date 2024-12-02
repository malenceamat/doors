<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class Verified_1C
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure(Request): (Response|RedirectResponse) $next
     * @return Application|ResponseFactory|JsonResponse|Response
     */
    public function handle(Request $request, Closure $next)
    {
        if (
            config('1C_LOGIN') === $request->header('login') &&
            config('1C_PASSWORD') === $request->header('password')
        ) {
          return $next($request);
        } else {
            return response('Неверный логин или пароль', 401);
        }

/*
        // Получаем логин и пароль из env
        $login = config('1C_LOGIN');
        $password = config('1C_PASSWORD');

        // Получаем логин и пароль из запроса
        $requestLogin = $request->input('login');
        $requestPassword = $request->input('password');

        // Проверка логина и пароля
        if ($login === $requestLogin && $password === $requestPassword) {
            return $next($request);
        }

        return response()->json(['success' => false, 'message' => 'Ошибка: неверный логин или пароль'], 401);*/
    }
}
