<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FirstController extends AbstractController{
    #[Route('/first/{nom}/{prenom}/{age}/{section}',name:'app_second')]
    public function index($nom, $prenom,$age,$section):Response
    {
        return $this->render('Premier/index.html.twig',[
            'nom'=>$nom,
            'prenom'=>$prenom,
            'age'=>$age,
            'section'=>$section]);
    }
}
