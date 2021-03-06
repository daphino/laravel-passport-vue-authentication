<?php
/**
 * Created by PhpStorm.
 * User: finatoros
 * Date: 15.01.19
 * Time: 11:31
 */

namespace App\Services\Contracts;


use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;

interface AuthenticationServiceInterface
{
    public function login(LoginRequest $request): array;

    public function logout(): array;
}