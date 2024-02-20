<?php declare(strict_types=1);

namespace App\Controller;

use GaryClarke\Framework\Controller\AbstractController;
use GaryClarke\Framework\Http\Response;

class DashboardController extends AbstractController
{
        public function index(): Response
        {
            return $this->render('dashboard.html.twig');
        }
}