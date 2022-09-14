<?php

namespace App\Repositories\User;

interface UserInterface
{
    public function get($request);

    public function getById($id);

    public function store($request);

    public function update($request, $id);

    public function destroy($id);

    public function checkPhone($request);

    public function register($request);

    public function updateLastLogin($id);

    public function checkEmail($request);

    public function changeName($request);

    public function generalResetPass($request, $isEmail);

    // public function getUserByToken($token);

    // public function updatePasswordByToken($request, $token);
}
