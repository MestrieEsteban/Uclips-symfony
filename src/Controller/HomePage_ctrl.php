<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class HomePage_ctrl extends AbstractController
{

    /**
     * @Route("/")
     */
    public function index()
    {
        $number = random_int(0, 100);

        return $this->render('homePage/index.html.twig', [
            'number' => $number,
        ]);
    }
}