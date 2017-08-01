<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class GitHutController extends Controller
{
    /**
     * @Route("/", name="githut")
     */
    public function githutAction(Request $request)
    {
        return $this->render('githut/index.html.twig');
    }
}