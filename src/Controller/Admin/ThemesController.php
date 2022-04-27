<?php 
namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ThemesController extends AbstractController{


    #[Route('/admin-themes', name:'admin.themes.index')]
    public function index():Response
    {
        return $this->render('admin/themes/index.html.twig');
    }

}


?>