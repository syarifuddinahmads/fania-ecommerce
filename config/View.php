<?php

class View
{

    public function setView()
    {
        $page = (isset($_GET['page'])) ? $_GET['page'] : '';

        switch ($page) {
            case 'login':
                include 'pages/auth/login.php';
                break;
            case 'register':
                include 'pages/auth/register.php';
                break;
            case 'forgot_password':
                include 'pages/auth/forgot_password.php';
                break;
            default:
                include 'pages/home.php';
                break;
        }
    }

}