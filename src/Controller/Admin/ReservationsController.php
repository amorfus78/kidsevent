<?php 
namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ReservationsController extends AbstractController{


    #[Route('/reservations', name:'admin.reservations.index')]
    public function index():Response
    {
        return $this->render('admin/reservations/index.html.twig');
    }

}


?>