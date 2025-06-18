<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class HelloController extends AbstractController
{
    #[Route('/hello/{name<[a-z]+>}', methods: ['GET'], name: 'app_hello')]
    public function index(string $name = 'Aureliano'): Response
    {
       /* $linkToMartins = $this->generateUrl('app_hello', [
            'name' => 'Martins'
          ]);

          dump($this);
       */
        return $this->render('hello/index.html.twig', [
            'thename' => $name,
          //  'link' => $linkToMartins,
        ]);
    }
}
