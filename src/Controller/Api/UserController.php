<?php

namespace App\Controller\Api;

use App\Entity\User;
use App\Repository\UserRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/api", name="api_")
 */

class UserController extends AbstractController
{
    /**
     * @Route("/user", name="list_users")
     */
    public function index(UserRepository $userRepository): Response
    {
        $created = $this->getUser();        
        return $this->json([
            'users' => $userRepository->findAll(),
            'created_by' => $created
        ]);
    }
}
