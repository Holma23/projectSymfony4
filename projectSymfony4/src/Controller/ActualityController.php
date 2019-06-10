<?php

namespace App\Controller;

use App\Entity\Actuality;
use Doctrine\ORM\Query;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ActualityController extends AbstractController
{
    /**
     * @Route("/actuality", name="actuality")
     */
    public function index()
    {
        $actualities = $this->getDoctrine()
            ->getRepository(Actuality::class)
            ->findAll();
        return $this->render('actuality/index.html.twig', [
            'actualities' => $actualities,
        ]);

    }











}
