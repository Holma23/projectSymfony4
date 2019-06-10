<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstname')
            ->add('lastname')
            ->add('username')
            ->add('password')
            ->add('role')
            ->add('email')
            ->add('token')
            ->add('enable')
            ->add('date',\Symfony\Component\Form\Extension\Core\Type\DateType::class,array(
                'label' => 'Date',
                'required' => true,
                'widget' => 'single_text',
                'html5' => false,
                'data' => new \DateTime(),
                'attr' => ['class' => 'js-datepicker form-control'],
                // 'min' =>new \DateTime('now')],
                'format' => 'dd-MM-yyyy'))
        ;
    }


    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
