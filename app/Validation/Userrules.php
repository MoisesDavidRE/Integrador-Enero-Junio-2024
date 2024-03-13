<?php

namespace App\Validation;
use App\Models\UsuarioModel;

class Userrules
{
    public function validateUser(string $str, string $fields, array $data) {
        $model = new UsuarioModel();
        
        $user = $model->where('identificador', $data['identificador'])->first();
        
        if (!$user) {
            return false;
        }

        return password_verify($data['password'], $user['password']);
    }
}
