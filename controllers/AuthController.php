<?php 

// require_once './models/User.php';
require './base/BaseController.php';

class AuthController extends BaseController
{
    public static function login()
    {
        $user = User::where($_POST);
        if($user)
        {
            $_SESSION['user'] = $user;
            redirect(route('home','dashboard'));
        }else{
            redirect(page('login'),null,[__('ERROR_LOGIN')]);
        }
    }

    public static function register()
    {
        
        $error = [];
        $data = $_POST;
        if($data['password'] != $data['password-confirm'])
        {
            $error[] = __('PASSWORD_ERROR');
        }
        $user = User::where(['username' => $data['username']]);
        if($user)
        {
            $error[] = __('USER_EXISTS');
        }
        
        if(count($error))
        {
            redirect(page('register'),null,$error);
        }

        unset($data['password-confirm']);
        $data['type'] = 'user';
        $user = User::store($data);
        $_SESSION['user'] = $user;
        redirect(route('home','dashboard'));       
    }

    public function logout()
    {
        $this->check();
        unset($_SESSION['user']);
        redirect(page('landing'));
    }

    public function update()
    {
        $this->check();
        $user = user();
        $errors = [];

        if($user->password != $_POST['password'])
        {
            $errors [] = __('WRONG_PASS');
        }

        $found = User::where(['username' => $_POST['username']],$user->id);

        if($found)
        {
            $errors [] = __('USER_EXISTS');
        }

        if(isset($_POST['newpass']) && $_POST['newpass-confirm'])
        {

            if($_POST['newpass'] != $_POST['newpass-confirm'])
            {
                $errors [] = __('PASSWORD_ERROR');
            }else{
                $_POST['password'] = $_POST['newpass'];
            }
        }

        unset($_POST['newpass']);
        unset($_POST['newpass-confirm']);

        if(count($errors))
        {
            redirect(page('edit'),null,$errors);
        }else{
            $_POST['type'] = $user->type;
            User::update($_POST,$user->id);
            unset($_SESSION['user']);
            redirect(page('login'));
        }
    }
}