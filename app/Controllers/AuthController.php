<?php

namespace App\Controllers;
use App\Models\UserModel;
class AuthController extends BaseController
{
    public function login()
    {
        return view("auth/login");
    }

    public function write_log($message)
    {
        $log_file = __DIR__ . "/../../log/custom_log.txt";
        $current = file_get_contents($log_file);
        $current .= $message;
        file_put_contents($log_file, $current);
    }

    public function doLogin()
    {
        $session = session();
        $model = new UserModel();
        $username = $this->request->getVar("username");
        $password = $this->request->getVar("password");
        $data = $model->where("username", $username)->first();
        //$this->write_log($data['username']);
        // $this->write_log($data['username']);
        if ($data) {
            $pass = $data["password"];
            $authenticatePassword = $data["password"] == $password;
            if ($authenticatePassword) {
                $ses_data = [
                    "id" => $data["id"],
                    "username" => $data["username"],
                    "role_id" => $data["role_id"],
                    "logged_in" => true,
                ];
                $session->set($ses_data);

                if ($data["role_id"] == 1) {
                    return redirect()->to("/users");
                } else {
                    return redirect()->to("/karya");
                }
            } else {
                $session->setFlashdata("msg", "Password is incorrect.");
                return redirect()->to("/auth/login");
            }
        } else {
            $session->setFlashdata("msg", "Username does not exist.");
            return redirect()->to("/auth/login");
        }
    }
    public function logout()
    {
        session()->destroy();
        return redirect()->to("/login");
    }
}
