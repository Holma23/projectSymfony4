<?php


namespace App\Services;


use App\Entity\User;
use Twig\Environment;

class MyMailer
{
    public function __construct(

        Environment $twig,
        \Swift_Mailer $mailer
    )
    {
        $this->mailer = $mailer;
        $this->twig=$twig;
    }

    public function confirmSignup(User $user){
        $message = new \Swift_Message("il vous reste qu'une seule étape !");
        $message->setFrom('promohotels2016@gmail.com');
        $message->setTo($user->getEmail());
        $message->addPart(
            $this->twig->render('email/confirm.html.twig',
                ['user'=>$user]
            )
        );
        $this->mailer->send($message);

    }
    public function acceptConge(User $user){
        $message = new \Swift_Message("Congé Accepté !");
        $message->setFrom('promohotels2016@gmail.com');
        $message->setTo($user->getEmail());
        $message->addPart("votre conge est accepté");
        $this->mailer->send($message);
    }

    public function refusConge(User $user){
        $message = new \Swift_Message("Congé Refusé !");
        $message->setFrom('promohotels2016@gmail.com');
        $message->setTo($user->getEmail());
        $message->addPart("votre conge est refusé");
        $this->mailer->send($message);
    }




}