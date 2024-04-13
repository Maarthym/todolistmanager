<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class AgendaController extends AbstractController
{

    #[Route('/agenda', name: 'agenda')]
    public function index(Request $request):Response
    {
        return $this->render('agenda/index.html.twig', []);
    }

    #[Route('/agenda/{year}/{month}/{day}', name: 'show_week')]
    public function week(Request $request, int $year, int $month, int $day): Response
    {
        # Return JsonResponse([
        # 'year' => $year
        #]);
        # permet de renvoyer un json (utile pour d'autres projets ?)
        if ($month > 12) $month = 12;
        if ($day > 31) $day = 31;

        return new Response("Agenda - Semaine du " . $day . "/" . $month . "/" . $year);
    }
}
