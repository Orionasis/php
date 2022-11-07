<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class ToDoController extends AbstractController
{
    #[Route('/todo', name: 'app_todo')]
    public function indexAction(SessionInterface $session): Response
    {
        if (!$session->has('todos')) {
            $todos = array('achat' => 'acheter clé usb', 'cours' => 'Finaliser mon cours', 'correction' => 'corriger mes examens');
            $session->set('todos', $todos);
            $this->addFlash('sucess_first_session', "success of todos");
        }
        return $this->render('todo/todo.html.twig');
    }
}
