<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class GitHutController extends Controller
{
    /**
     * @Route("/{username}", name="githut", defaults={"username": "codereviewvideos"})
     */
    public function githutAction(Request $request, $username)
    {
        $this->get('github_api')->getRepos($username);

        return $this->render('githut/index.html.twig', [
            'username' => $username
        ]);
    }

    /**
     * @Route("/profile/{username}", name="profile")
     */
    public function profileAction(Request $request, $username)
    {
        $profileData = $this->container->get('github_api')->getProfile($username);
        return $this->render('githut/profile.html.twig', $profileData);
    }

    /**
     * @Route("/repos/{username}", name="repos")
     */
    public function reposAction(Request $request, $username)
    {
        $profileData = $this->container->get('github_api')->getRepos($username);
        return $this->render('githut/repos.html.twig', $profileData);
    }
}