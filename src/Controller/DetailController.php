<?php

namespace App\Controller;

use App\Entity\Trips;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DetailController extends AbstractController
{
        /**
     * @Route("/detail/{id}", name="detail")
     */
    public function index( Request $request ,$id): Response
    {
        $trip =$this->getDoctrine()->getRepository(Trips::class)->find($id);
        return $this->render('detail/index.html.twig', [
            'trip' => $trip,
        ]);
    }
}
