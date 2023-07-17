<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\StoreRegisteredUserRequest;
use App\Http\Resources\Auth\RegisteredUserResource;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class RegisteredUserController extends Controller
{
    public function store(StoreRegisteredUserRequest $request)
    {
        $user = User::create($request->all());

        Auth::login($user);

        return new RegisteredUserResource($user);
    }
}