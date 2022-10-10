<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelUsers;
use Config\Services;

class AdminMain extends BaseController
{
    public function index()
    {

        return view('admin/login/index');
    }


    // untuk funtion login
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
                $userid = $this->request->getPost('userid');
                $password = $this->request->getPost('password');



                $modelUser = new ModelUsers();

                $cekUser = $modelUser->find($userid);

                if ($cekUser == NULL) {
                    $json = [
                        'error' => [
                            'errUserID' => 'User ID tidak terdaftar'
                        ]
                    ];
                } else {


                    $passwordasli = $cekUser['password'];

                    if (sha1($password) != $passwordasli) {
                        $json = [
                            'error' => [
                                'errPassword' => 'Password salah'
                            ]
                        ];
                    } else {
                        // simpan session
                        $simpan_session = [
                            'iduser'    => $userid,
                            'namauser'  => $cekUser['usernama'],
                            'userlevel'  => $cekUser['userlevel'],
                        ];
                        session()->set($simpan_session);


                        $json = [
                            'berhasil' => 'Anda berhasil login'
                        ];
                    }
                }
            }

            echo json_encode($json);
        }
    }


    // untuk funtion logout
    public function logout()
    {
        if ($this->request->isAJAX()) {
            session()->destroy();

            $json = [
                'sukses' => 'Anda berhasil logout...'
            ];

            echo json_encode($json);
        }
    }
}
