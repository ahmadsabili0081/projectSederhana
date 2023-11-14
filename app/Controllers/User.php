<?php

namespace App\Controllers;

use App\Controllers\BaseController;


class User extends BaseController
{
    protected $db;

    public function __construct()
    {
        $this->db = \Config\Database::connect();
    }
    public function index()
    {

        $data = [
            'title' => 'Halaman User'
        ];
        return view('User/index', $data);
    }
    public function profile()
    {
        $builder = $this->db->table('users');
        $builder->select('users.id AS userid, users .*, auth_groups .*, auth_groups_users .*');
        $builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $builder->where('users.id', user_id());
        $query = $builder->get()->getRowArray();
        $data = [
            'title' => 'Halaman Profile',
            'dataUser' => $query
        ];
        return view('User/profile', $data);
    }
}
