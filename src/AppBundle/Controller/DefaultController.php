<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        
        return $this->redirect("/blue");
    }


    /**
     * @Route("/admin" , name="admin")
     */
    public function adminAction()
    {
        
        return new Response('<html><body>Admin page!</body></html>');
    }
    /**
     * @Route("/logout" , name="logout")
     */
    public function logout(){
        
    }
    /**
     * @Route("/login" , name="login")
     */
    public function login(){
        return $this->render('default/login.html.twig');
    }
    /**
     * @Route("/loginCheck" , name="loginCheck")
     */
    public function loginCheck(){
        
    }
}
