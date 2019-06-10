<?php
namespace App\Form;
use App\Entity\User;
use Doctrine\DBAL\Types\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
class SignUpType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email',EmailType::class,[
                    'label'=>'Email',
                    'required'=>'true',
                    'attr'=>['placeholder'=>'entrer email'],
                ]
                )
            ->add('firstname',\Symfony\Component\Form\Extension\Core\Type\TextType::class,[
                'label'=>'FirstName',
                'attr'=>['placeholder'=>'entrer first name'],
            ])
            ->add('lastname',\Symfony\Component\Form\Extension\Core\Type\TextType::class,[
                'label'=>'last Name',
                'attr'=>['placeholder'=>'entrer last name'],
            ])
            ->add('plainPassword',PasswordType::class,[
                'label'=>'password',
                'required'=>'true',
                'attr'=>['placeholder'=>'entrer pwd'],])
            ->add('username',\Symfony\Component\Form\Extension\Core\Type\TextType::class,[
                'label'=>'UserName',
                'required'=>'true',
                'attr'=>['placeholder'=>'entrer  user name'],
            ])

        ;
    }
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}