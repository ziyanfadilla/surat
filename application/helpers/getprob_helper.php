<?php
if ( ! function_exists('getprob'))
{
        function chek_session()
        {
            $CI= & get_instance();
            $session=$CI->session->userdata('status_login');
            if($session!='oke')
            {
                redirect('login/login');
            }
        }


        function chek_session_login()
        {
            $CI= & get_instance();
            $session=$CI->session->userdata('status_login');
            if($session=='oke')
            {
                redirect('dashboard');
            } 
        }

}