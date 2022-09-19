<?php

class BaseController
{
    protected function upload_file($index)
    {
        if($_FILES[$index]['name']){
            $output = upload($index);
            if(is_array($output)){
                redirect(route($this->keyword,'create'),null,$output);
                die;
            }else{
                return $output;
            }
        }
    }

    public static function check($types = '')
    {
        $user = user();
        if(!$user)
        {
            redirect(page('login'));
        }
        if(is_array($types) && count($types))
        {
            if(!in_array($user->type,$types))
            {
                abort(403);
            }
        }elseif($types)
        {
            if($user->type !=  $types)
            {
                abort(403);
            }
        }
    }

    protected function guest()
    {
        $user = user();
        if($user)
        {
            redirect(route('home','dashboard'));
        }
    }
}