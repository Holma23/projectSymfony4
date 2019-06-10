<?php

namespace App\Controller;

use App\Entity\Cv;
use App\Entity\User;
use App\Form\CvType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CvController extends AbstractController
{
    /**
     * @Route("/cv", name="cv_index")
     */
    public function index()
    {
        $cvs = $this->getDoctrine()
            ->getRepository(Cv::class)
            ->findAll();
        return $this->render('cv/index.html.twig', [
            'cvs' => $cvs,
        ]);

    }

    /**
     * @Route("/new", name="cv_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $cv = new Cv();
        $form = $this->createForm(CvType::class, $cv);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $file = $cv->getFile();
           // $fileName = $this->generateUniqueFileName().'.'.$file->guessExtension();
            $fileName = md5(uniqid()).'.'.$file->guessExtension();
            $cv->setFile($fileName);
            $file->move($this->getParameter('files_directory'),$fileName);
            $cv->setFile($fileName);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($cv);
            $entityManager->flush();
            $user=new User();
           /* if($user->getRoles()==='ROLE_USER'){
            return $this->redirectToRoute('cv_new');
            }*/
           $this->addFlash(
                'success',
               'success insert cv.'
           );
           // return new Response('success  Add CV');
            //return $this->redirectToRoute('cv_new');
        }


        return $this->render('cv/new.html.twig', [
            'cv' => $cv,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @return string
     */
    private function generateUniqueFileName()
    {
        return md5(uniqid());
    }


    /**
     * @Route("/showCv/{id}", name="cv_show", methods={"GET"}, requirements={"id":"\d+"})
     */
    public function show(Cv $cv): Response
    {
        return $this->render('cv/show.html.twig', [
            'cv' => $cv,
        ]);
    }
}
