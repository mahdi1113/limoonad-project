<?php

function __($word)
{
    $list = parse_ini_file('langs/fa.ini');
    return $list[$word] ?? $word;
}

function route($c , $m , $arr=[])
{
    $url = "dashboard.php?c=$c&m=$m";
    foreach($arr as $key => $value)
    {
        $url .= "&$key=$value";
    }
    return $url;
}

function page($p,$arr=[])
{
    $url = "index.php?p=$p";
    foreach($arr as $key => $value)
    {
        $url .= "&$key=$value";
    }
    return $url;
}

function upload($index)
{
    $target_dir = "storage/";
    $target_file = $target_dir . rs() . basename($_FILES[$index]["name"]);
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $errors = [];

    $check = getimagesize($_FILES[$index]['tmp_name']);
    if($check === false){
        $errors [] = __("FILE_IS_NOT_AN_IMAGE");
    }
    if($_FILES[$index]["size"] > 5000000){
        $errors [] = __("FILE_TOO_BIG");
    }

    if(count($errors))
    {
        return $errors;
    }else{
        if (move_uploaded_file($_FILES[$index]["tmp_name"], $target_file)) {
            return $target_file;
          } else {
            [__('ERROR')];
          }
    }
}

function redirect($url,$message = null,$errors = [])
{
    if(isset($message))
    {
        $_SESSION['message'] = $message;
    }
    if(count($errors))
    {
        $_SESSION['errors'] = $errors;
    }
    if(count($_POST))
    {
        $_SESSION['old'] = $_POST;
    }
    header("Location: $url");
}

function old($keyword)
{
    $old = $_SESSION['old'];
    if(isset($old[$keyword]))
    {
        $tmp = $old[$keyword];
        unset($_SESSION['old'][$keyword]);
        return $tmp;
    }
}

function show($word,$count = 30)
{
    return mb_strlen($word) > $count ? mb_substr($word,0,$count) . ' ...' : $word;
}

function count_order_item()
{
    $order = Order::where([
        'user_id' => user('id'),
        'payed' => 0
    ]);
    if($order){
        return $order->order_item();
    }else{
        return 0;
    }
    
    
}

function user($p = null)
{
    $session_user = $_SESSION['user'] ?? null;
    if(isset($session_user))
    {
        $user = User::find($session_user->id);
        if($session_user->password == $user->password && $user->type == $user->type)
        {
            if($p)
            {
                return $user->$p;
            }else{
                return $user;
            }
        }else{
            return $_SESSION['user'] = null;
        }
    }
}

function abort($code)
{
    die("ERROR $code");
}

function rs($length = 10) {
    return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
}

