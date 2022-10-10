<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelUsers extends Model
{
    protected $table            = 'users';
    protected $primaryKey       = 'userid';
    protected $allowedFields    = [
        'userid', 'usernama', 'userpassword', 'userlevel'
    ];

    function cekUser($userid)
    {
        return $this->table('users')->join('levels', 'levelid=userlevel', 'left')->getWhere(['sha1(userid)' => $userid]);
    }
}
