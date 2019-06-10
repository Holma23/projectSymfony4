<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\SignUpType;
use App\Services\MyMailer;
use App\Services\UserService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController
{
    /**
     * @Route("/se-deconnecter", name="app_logout")
     */
    public function logout()
    {
        return $this->render('security/login.html.twig');
    }

    /**
     * @Route("/login", name="app_login")
     */
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', ['last_username' => $lastUsername, 'error' => $error]);
    }

    /**
     * @Route("/signup", name="app_signup")
     */
    public function register(
        Request $request,
        UserPasswordEncoderInterface $encoder,
        MyMailer $mailer,
        UserService $userService
    )
    {
        // whatever *your* User object is
        $user = new User();
        $form = $this->createForm(SignUpType::class, $user);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $userService->processSignup($user, 'ROLE_ADMIN');
            $this->addFlash(
                'success',
                ' success add , email is send.'
            );
            return $this->redirectToRoute('app_signup');
        }
        return $this->render('security/signup.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route ("confirm/{token}", name="app_confirm")
     */
    public function confirm($token, UserService $userService)
    {
        $user = $this->fetchUserByToken($token);
        if ($user) {
            $userService->confirmUser($user);
            $this->addFlash(
                'success',
                'Votre compte est validé, veuillez vous coneceter.'
            );
        }

        return $this->redirectToRoute('app_login');

    }

    private function fetchUserByToken($token)
    {
        return $this
            ->getDoctrine()
            ->getRepository(User::class)
            ->findOneBy(['token' => $token]);
    }

    /**
     * @Route("/homeUser", name="app_homeUser")
     */
    public function homeUser()
    {
        return $this->render('security/homeUser.html.twig' );
       // include ('security/homeUser.html.twig');
    }

    /**
     * @Route("/homeAdmin", name="app_homeAdmin")
     */
    public function homeAdmin()
    {
        return $this->render('security/homeAdmin.html.twig' );
    }


    /**
     * @Route("/home", name="app_home")
     */
    public function home()
    {
        return $this->render('security/home.html.twig' );
    }




}
