<?php

namespace App\Controllers;

use App\Libraries\Smarty;
use App\Models\StaffLoginModel;
use App\Models\StudentFormModel;
use App\Controllers\BaseController;

class StaffAuth extends BaseController
{


    protected $smarty;
    protected $studentloginmodel;
    protected StudentFormModel $StudentFormModel;

    public function __construct()
    {
        $this->smarty = new Smarty();
        $this->studentloginmodel = new StaffLoginModel();
        $this->StudentFormModel = new StudentFormModel();
        $this->smarty->assign('base_url', base_url());
    }

    // mock api
    public function mock_login()
    {
        $data = $this->request->getJSON(true);
        $response = $this->studentloginmodel->verifyLogin($data['email'], $data['password']);
        if ($response === false) {
            return $this->response
                ->setStatusCode(401)
                ->setJSON([
                'status' => 0,
                'message' => 'Login Failed, Please SignUp!'
            ]);
        }
        else{
            return $this->response
            ->setStatusCode(200)
            ->setJSON([
            'status' => 1,
            'message' => 'Login Success'
        ]);
        }
    }

    public function mock_signup()
    {
        $data = $this->request->getJSON(true);
        $response = $this->studentloginmodel->staffSignup($data['email'], $data['password'], $data['teacher_name']);
        if ($response===false) {
            return $this->response
                ->setStatusCode(401)
                ->setJSON([
                'status' => 0,
                'message' => 'Signup Failed or You already have an Account'
            ]);
        } else {
            return $this->response
                ->setStatusCode(200)
                ->setJSON([
                'status' => 1,
                'message' => 'Signup Success'
            ]);
        }
    }
    // *************
    public function login()
    {
        $cookieEmail = $this->request->getCookie('remember_email');
        if ($cookieEmail === '1') {
            $this->smarty->assign('cookieEmail', $cookieEmail);
        }
        return $this->smarty->display('staff-login.tpl');
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
            return $this->smarty->display('staff-login.tpl');
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
                    'status' => 1,
                ]);
            }

            return redirect()->to('/staffAuth/dashboard')->withCookies();
        }
    }

    public function signup()
    {
        return $this->smarty->display('staff-signup.tpl');
    }

    public function staffSignup()
    {
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $teacherName = $this->request->getVar('teacherName');
        $result = $this->studentloginmodel->staffSignup($email, $password, $teacherName);
        if ($result) {
            if ($this->request->isAJAX()) {
                return $this->response->setJSON([
                    'status' => 1,
                ]);
            }

            return redirect()->to('/');
        }
        return $this->smarty->display('staff-signup.tpl');
    }


    public function dashboard()
    {
        $isLoggedIn = session()->get('isLoggedIn');
        if (!$isLoggedIn) {
            return redirect()->to('/');
        }
        $studentData = session()->get('studentData');
        $studentCount = $this->StudentFormModel->getStudentCount($studentData['staffId']);
        // $genderCount = $this->StudentFormModel->genderCountById($student);

        log_message('debug', 'Dashboard studentData: ' . print_r($studentData, true));
        $gender = $this->StudentFormModel->genderCountById($studentData['staffId']);
        log_message('debug', 'Dashboard gender: ' . print_r($gender, true));
        $this->smarty->assign('gender', $gender);
        $this->smarty->assign('studentData', $studentData);
        $this->smarty->assign('studentCount', $studentCount);

        return $this->smarty->display('student-dashboard.tpl');
    }

    public function logout()
    {
        session()->destroy();
        $this->response->deleteCookie('remember_email', '', '/');
        return redirect()->to('/');
    }
}
