<?php 
namespace App\Controller\Admin;

use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController{

    // injecter le service StudentRepository
	public function __construct(private UserRepository $userRepository, private RequestStack $requestStack, private EntityManagerInterface $entityManager)
	{
		
	}
    
    // lister les utilisateurs
	#[Route('/users', name:'admin.users.index')]
	public function index():Response
	{
		// récupérer toutes les entrées de la table student
		$results = $this->userRepository->findAll();
		//dd($results);

		return $this->render('admin/users/index.html.twig', [
			'results' => $results
		]);
	}


    //

}


?>