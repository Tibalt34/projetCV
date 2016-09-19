<?php

namespace AddBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller {
    /**
     * @Route("/home", name = "home")
     */
    public function indexTheme()
    {
        return $this->render('AddBundle::template.html.twig');
    }
    
    /**
     * @Route("/formation", name="form")
     */
    
     public function indexFormation()
    {
        return $this->render('AddBundle::formation.html.twig');
    }
    /**
     * @Route("/experience", name="exp")
     */
     public function indexExperience()
    {
        return $this->render('AddBundle::experience.html.twig');
    }
    /**
     * @Route("/loisir", name="loi")
     */
     public function indexLoisirs()
    {
        return $this->render('AddBundle::loisir.html.twig');
    }
    /**
     * @Route("/moi", name="moi")
     */
     public function indexMoi()
    {
        return $this->render('AddBundle::moi.html.twig');
    }
    
    
}


