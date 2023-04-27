<?php
  
namespace App\Controller\Api;
  
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
  
/**
 * @Route("/api", name="api_")
 */
  
class ProfileController extends AbstractController
{
    /**
     * @Route("/profile", name="app_api_user_profile")
     */
    public function index(): Response
    {
        $user = $this->getUser();
        return $this->json([
            'email' => $user->getUserIdentifier()
        ]);
    }
}