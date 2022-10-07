<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use Config\Services;

class AdminMain extends BaseController
{
    public function index()
    {
        return view('admin/login/index');
    }

    public function login()
    {
        if ($this->request->isAJAX()) {
            $validation = \config\Services::validation();

            $valid = $this->validate([
                'userid'    => [
                    'label'     => 'User ID',
                    'rules'     => 'required',
                    'errors'    => [
                        'required'  => '{field} tidak boleh kosong'
                    ]
                ],
                'password'    => [
                    'label'     => 'Kata Sandi',
                    'rules'     => 'required',
                    'errors'    => [
                        'required'  => '{field} tidak boleh kosong'
                    ]
                ]
            ]);

            if (!$valid) {
                $json = [
                    'error' => [
                        'errUserID'     => $validation->getError('userid'),
                        'errPassword'   => $validation->getError('password'),
                    ]
                ];
            } else {
                $json = [
                    'berhasil' => 'Anda berhasil login'
                ];
            }

            echo json_encode($json);
        }
    }
}
