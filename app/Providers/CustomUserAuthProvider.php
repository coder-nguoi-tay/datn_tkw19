<?php

namespace App\Providers;

use Illuminate\Auth\EloquentUserProvider;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Support\Facades\Hash;

class CustomUserAuthProvider extends EloquentUserProvider
{
    public function retrieveByCredentials(array $credentials)
    {
        $query = $this->createModel()->newQuery();
        $query = $query->where(function ($q) use ($credentials) {
            $q->orWhere('email', $credentials['email']);
            $q->orWhere('phone_number', '+84'.$credentials['email']);
            $q->orWhere('phone_number', '+81'.$credentials['email']);
        });

        return $query->first();
    }

    /**
     * Validate a user against the given credentials.
     *
     * @param Authenticatable $authenticatable
     * @param array $credentials
     * @return bool
     */
    public function validateCredentials(Authenticatable $authenticatable, array $credentials)
    {
        return Hash::check($credentials['password'], $authenticatable->password);
    }
}
