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

    public function updateProfile($request, $id);

    public function changeName($request);

    public function changePassword($request);

    public function generalResetPass($request, $isEmail);

    // public function getUserByToken($token);

    // public function updatePasswordByToken($request, $token);
    // public function updateSettingNotification($request, $id);
    public function updateNotification($request, $id);

    public function userSetting($request, $id);

    public function updateCustomerId($id);

    public function getInfoMypage($id);
}
