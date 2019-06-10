<?php

namespace App\Controller;

use App\Entity\Conge;
use App\Form\CongeType;
use App\Services\MyMailer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CongeController extends AbstractController
{
    /**
     * @Route("/congeListe", name="conge_list")
     */
    public function index()
    {
        $conges = $this->getDoctrine()
        ->getRepository(Conge::class)
        ->findAll();
        return $this->render('conge/index.html.twig', [
            'conges' => $conges,
        ]);
    }

    /**
     * @Route("/demandeConge", name="conge_demande", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $conge = new Conge();
        $conge->setUser($this->getUser());
        $conge->setEtat("en cours");
        $form = $this->createForm(CongeType::class, $conge);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
                $entityManager = $this->getDoctrine()->getManager();
               // die(dump($conge->getDate()->format('Y-m-d')));
                $entityManager->persist($conge);
                $entityManager->flush();
            $this->addFlash(
                'success',
                'success demande congé.'
            );
               // return $this->redirectToRoute('app_home');
            }
            return $this->render('conge/demande.html.twig', [
                'conge' => $conge,
                'form' => $form->createView(),
            ]);
        }

    /**
     * @Route("conge/{id}", name="conge_show", methods={"GET"}, requirements={"id":"\d+"})
     */
    public function show(Conge $conge): Response
    {
        return $this->render('conge/show.html.twig', [
            'conge' => $conge,
        ]);
    }


    /**
     * @Route( "/accept/{id}",name="conge_accept", methods={"GET"}, requirements={"id":"\d+"})
     */
    public function accept(Conge $conge,MyMailer $mailer,$id): Response
    {
          $conge->setEtat("Accept");

//        $conge->setEtat("Accept");
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($conge);
        $entityManager->flush();
        $this->addFlash(
            'success',
            'success accept congé.'
        );
       $mailer->acceptConge($conge->getUser());
        return $this->render('conge/show.html.twig', [
            'conge' => $conge,
        ]);
    }

    /**
     * @Route( "/refus/{id}",name="conge_refus", methods={"GET"}, requirements={"id":"\d+"})
     */
    public function refus(Conge $conge ,MyMailer $mailer): Response
    {
        $conge->setEtat("Refus");
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($conge);
        $entityManager->flush();
        $this->addFlash(
            'refus',
            'refus congé.'
        );
        $mailer->refusConge($conge->getUser());

        return $this->render('conge/show.html.twig', [
            'conge' => $conge,
        ]);

    }

    }
