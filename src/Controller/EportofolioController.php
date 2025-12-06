<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class EportofolioController extends AbstractController
{
    #[Route('/', name: 'app_eportofolio')]
    public function index(): Response
    {
        return $this->render('eportofolio/index.html.twig', [
            'controller_name' => 'EportofolioController',
        ]);
    }
    #[Route('experience', name: 'app_experience')]
    public function home(): Response
    {
        return $this-> render ('eportofolio/expériences.html.twig', [
            'title' => 'Expéreiences',
        ]);
    }
    #[Route('competences', name: 'app_competences')]
    public function competences(): Response
    {
        return $this-> render ('eportofolio/compétences.html.twig', [
            'title' => 'Compétences',
        ]);
    }
    #[Route('profil', name: 'app_profil')]
    public function profil(): Response
    {
        return $this-> render ('eportofolio/profil.html.twig', [
            'title' => 'Profil/Contact',
        ]);
    }
}