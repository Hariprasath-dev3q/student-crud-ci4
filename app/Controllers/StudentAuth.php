<?php

namespace App\Controllers;

use App\Libraries\Smarty;
use App\Models\StudentLoginModel;
use App\Controllers\BaseController;

class StudentAuth extends BaseController
{


    protected $smarty;
    protected $studentloginmodel;

    public function __construct()
    {
        $this->smarty = new Smarty();
        $this->studentloginmodel = new StudentLoginModel();
        $this->smarty->assign('base_url', base_url());
    }

    public function login()
    {
        $cookieEmail = $this->request->getCookie('remember_email');
        if ($cookieEmail === '1') {
            $this->smarty->assign('cookieEmail', $cookieEmail);
        }
        return $this->smarty->display('student-login.tpl');
    }

    public function userLogin()
    {
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $remember = $this->request->getVar('remember');

        $isVerified = $this->studentloginmodel->verifyLogin($email, $password);
        if ($isVerified === false) {

            if ($this->request->isAJAX()) {
                return $this->response->setJSON([
                    'status' => 0,
                    'message' => 'Invalid email or password'
                ]);
            }

            $this->smarty->assign('error', 'Invalid email or password');
            return $this->smarty->display('student-login.tpl');
        } else {

            session()->set('isLoggedIn', true);
            session()->set('studentData', $isVerified);
            session()->regenerate();

            $this->response->setCookie([
                'name' => 'remember_email',
                'value' => $email,
                'expire' => $remember ? 86400 : 0,
                'secure' => false,
                'httponly' => true,
            ]);

            if ($this->request->isAJAX()) {
                return $this->response->setJSON([
                    'status' => 1
                ]);
            }

            return redirect()->to('/studentAuth/dashboard')->withCookies();
        }
    }


    public function dashboard()
    {
        $isLoggedIn = session()->get('isLoggedIn');
        if (!$isLoggedIn) {
            return redirect()->to('/');
        }
        $studentData = session()->get('studentData');

        $this->smarty->assign('studentData', $studentData);

        return $this->smarty->display('student-dashboard.tpl');
    }

    public function logout()
    {
        session()->destroy();
        $this->response->deleteCookie('remember_email', '', '/');
        return redirect()->to('/');
    }

    // public function profile()
    // {
    //     $isLoggedIn = session()->get('isLoggedIn');
    //     if (!$isLoggedIn) {
    //         return redirect()->to('/studentAuth/login');
    //     }
    //     $studentData = session()->get('studentData');
    //     $this->smarty->assign('studentData', $studentData);
    //     return $this->smarty->display('student-profile.tpl');
    // }
}
