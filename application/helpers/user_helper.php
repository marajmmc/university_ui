<?php
class User_helper
{
    public static $logged_user = null;
    public static function is_login()
    {
        $CI =& get_instance();
        $user_id=$CI->session->userdata("user_id");
        if($user_id>0)
        {
            return true;
        }
        else
        {
            return false;
        }

    }
}