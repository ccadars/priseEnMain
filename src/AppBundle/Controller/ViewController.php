<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Ce controller s'occupe de retourner les vues de l'application
 *
 * @author lunel10
 */
class ViewController extends Controller {
    
    /**
     * La méthode getRed prend en paramètre $r qui est de tye Request
     * @Route("/yellow" , name="y")
     * @return Response correspond à la couleur passée dans l'URI
     * ici l'URI = yellow
     */
    public function getYellow(Request $r){
//        getMethod() retourne le type de la Request
//        si $r est de type GET
        if($r->getMethod() == "GET"){
//            On retourne une page Web
            return $this->render("default/couleurs/yellow.twig");
        }else {$reponse = new Response("Yellow");
        return $reponse;
        }
    }
    /**
     * @Route("/red" , name="r")
     * @return Response correspond à la couleur passée dans l'URI
     */
    public function getRed(Request $r){
        if($r->getMethod() == "GET"){
            return $this->render("default/couleurs/red.twig");
        }else {$reponse = new Response("Red");
        return $reponse;
        }
    }
    /**
     * @Route("/blue", name="b")
     * @return Response correspond à la couleur passée dans l'URI
     */
    public function getBlue(Request $r){
        if($r->getMethod() == "GET"){
            return $this->render("default/couleurs/blue.twig");
        }else {$reponse = new Response("Blue");
        return $reponse;
        }
    }
    /**
     * @Route("/green", name="g")
     * @return Response correspond à la couleur passée dans l'URI
     */
    public function getGreen(Request $r){
        if($r->getMethod() == "GET"){
            return $this->render("default/couleurs/green.twig");
        }else {$reponse = new Response("Green");
        return $reponse;
        }
    }
}
