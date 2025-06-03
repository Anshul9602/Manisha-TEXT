<?php

//namespace App\Models;

//use CodeIgniter\Model;

// class UserModel extends Model
// {
//     protected $table = 'users';
//     protected $primaryKey = 'id';
//     protected $allowedFields = ['username', 'email', 'password', 'created_at', 'updated_at'];
//     protected $useTimestamps = true;

//     protected $beforeInsert = ['hashPassword'];
//     protected $beforeUpdate = ['hashPassword'];

//     // Define the custom hash_password function
//     public static function hash_password($password)
//     {
//         return hash('sha256', $password);
//     }

//     protected function hashPassword(array $data)
//     {
//         if (!isset($data['data']['password'])) {
//             return $data;
//         }

//         // Hash the password using the custom hash_password function
//         $data['data']['password'] = self::hash_password($data['data']['password']);
//         return $data;
//     }

//     public function save($data): bool
//     {
//         // Custom logic before saving
//         if (isset($data['password'])) {
//             $data['password'] = self::hash_password($data['password']);
//         }

//         // Call the parent save method
//         return parent::save($data);
//     }
// }

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table      = 'users';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['username', 'email', 'password'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    protected $validationRules    = [
        'username' => 'required|min_length[3]|max_length[100]',
        'email'    => 'required|valid_email|is_unique[users.email]',
        'password' => 'required|min_length[8]',
    ];
    protected $validationMessages = [
        'username' => [
            'required' => 'Username is required',
            'min_length' => 'Username must be at least 3 characters long',
            'max_length' => 'Username cannot be longer than 100 characters',
        ],
        'email'    => [
            'required' => 'Email is required',
            'valid_email' => 'Please provide a valid email address',
            'is_unique' => 'This email address is already registered',
        ],
        'password' => [
            'required' => 'Password is required',
            'min_length' => 'Password must be at least 8 characters long',
        ],
    ];
    protected $skipValidation     = false;
}

