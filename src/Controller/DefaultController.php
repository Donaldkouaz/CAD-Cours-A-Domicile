<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DefaultController
 *
 * @author Donald
 */

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{
    
    /**
     * @Route("/")
     */
    //    Methode index pour la page d'accueil 
    public function indexAction() {

//        $carousel = $this->getDoctrine()->getManager()->getRepository('lescadplatformeBundle:carousel')->findAll();
//
//        $sss = $this->getDoctrine()->getManager()->getRepository('lescadplatformeBundle:Sss')->findAll();
//
//        $formations = $this->getDoctrine()->getManager()->getRepository('lescadplatformeBundle:formation')->findAllWithMatieres();
//
//        return $this->render('lescadplatformeBundle:plateforme:index.html.twig', array('sss' => $sss,
//                    'carousel' => $carousel,
//                    'formations' => $formations,));
        return $this->render('Pages/Accueil.html.twig');
    }
}
