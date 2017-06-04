<?php

namespace Ecommerce\EcommerceBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class PanierController extends Controller {
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(){
        return $this->render('EcommerceBundle:Panier:index.html.twig', array());
    }
    /**
     * @Route("/enregistrer", name="register")
     */
    public function registerAction(){
            return $this->render('EcommerceBundle:Panier:register.html.twig', array());
    }
    /**
     * @Route("/connexion", name="connexion")
     */
    public function loginAction(){
        return $this->render('EcommerceBundle:Panier:login.html.twig', array());
    }
    /**
     * @Route("/modify_profile", name="modify_profile")
     */
    public function modifyProfileAction(){
        return $this->render('EcommerceBundle:Panier:modify_profile.html.twig', array());
    }
    /**
     * @Route("/facture", name="facture")
     */
    public function factureAction(){
        return $this->render('EcommerceBundle:Panier:facture.html.twig', array());
    }
    /**
     * @Route("/livraison", name="livraison")
     */
    public function livraisonAction(){
        return $this->render('EcommerceBundle:Panier:livraison.html.twig', array());
    }
    /**
     * @Route("/modify_livraison", name="modify_livraison")
     */
    public function modifyLivraisonAction(){
        return $this->render('EcommerceBundle:Panier:modify_livraison.html.twig', array());
    }
    /**
     * @Route("/panier", name="panier")
     */
    public function panierAction(){
        return $this->render('EcommerceBundle:Panier:panier.html.twig', array());
    }
}