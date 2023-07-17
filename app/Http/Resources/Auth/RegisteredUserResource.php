<?php

namespace App\Http\Resources\Auth;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class RegisteredUserResource extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'admin' => $this->createToken('admin-token', ['create', 'update', 'delete'])->plainTextToken,
            'update' => $this->createToken('update-token', ['create', 'update'])->plainTextToken,
            'basic' => $this->createToken('admin-token', ['none'])->plainTextToken,
        ];
    }
}