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
        return $this->render('githut/index.html.twig', [
            'avatar_url' => 'https://avatars3.githubusercontent.com/u/27859258?v=4',
            'name' => 'Emmanuel Petit',
            'login' => 'ManuPetit',
            'details' => [
                'company' => 'iiidées',
                'location' => 'L\'Ile Rousse, Corsica, France',
                'joined_on' => '21 April 2017'
            ],
            'blog' => 'http://bellerive.iiidees.com/',
            'social_data' => [
                "Public Repos" => 5,
                "Followers" => 0,
                "Following" => 0
            ]
        ]);
    }

//    /**
//     * @Route("/profile", name="profile")
//     */
//    public function profileAction(Request $request)
//    {
//        return $this->render('githut/profile.html.twig', [
//            'avatar_url' => 'https://avatars3.githubusercontent.com/u/27859258?v=4',
//            'name' => 'Emmanuel Petit',
//            'login' => 'ManuPetit',
//            'details' => [
//                'company' => 'iiidées',
//                'location' => 'L\'Ile Rousse, Corsica, France',
//                'joined_on' => '21 April 2017'
//            ],
//            'blog' => 'http://bellerive.iiidees.com/',
//            'social_data' => [
//                "Public Repos" => 5,
//                "Followers" => 0,
//                "Following" => 0
//            ]
//        ]);
//    }
}