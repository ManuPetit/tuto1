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


        return $this->render('githut/index.html.twig', [
            'username' => $username,
            'repo_count' => 110,
            'most_stars' => 67,
            'repos' => [
                [
                    'name' => 'some repository',
                    'url' => 'https://github.com/ManuPetit/demo_de_git',
                    'stargazers_count' => 46,
                    'description' => 'une demo de git'
                ],
                [
                    'name' => 'another repository',
                    'url' => 'https://bbc.co.uk',
                    'stargazers_count' => 22,
                    'description' => 'The BBC !'
                ],
                [
                    'name' => 'google code',
                    'url' => 'https://google.com',
                    'stargazers_count' => 11,
                    'description' => 'All the web ...'
                ],
            ]
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
}