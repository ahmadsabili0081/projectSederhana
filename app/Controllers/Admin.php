<?php

namespace App\Controllers;

use App\Controllers\BaseController;


class Admin extends BaseController
{
    protected $db;

    public function __construct()
    {
        $this->db = \Config\Database::connect();
    }
    public function index()
    {
        $data = [
            'title' => "Halaman Dashboard"
        ];
        return view('User/index', $data);
    }
    public function users()
    {
        $builder = $this->db->table('users');
        $builder->select('users.id AS userid, users .*, auth_groups .*, auth_groups_users .*');
        $builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $query = $builder->get()->getResultArray();
        $data = [
            'title' => 'Halaman Users',
            'userData' =>  $query,
        ];
        return view('Admin/users/index', $data);
    }
}
