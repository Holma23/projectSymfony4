<?php

namespace App\Form;

use App\Entity\Conge;
use Doctrine\DBAL\Types\DateType;
use Doctrine\DBAL\Types\IntegerType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CongeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nbreJour',\Symfony\Component\Form\Extension\Core\Type\IntegerType::class)
          // ->add('date')
           /* ->add('date', \Symfony\Component\Form\Extension\Core\Type\DateType::class, array(
                'input'  => 'datetime',
              'widget' => 'choice',
            ))*/
            ->add('nature',TextType::class)

          /* ->add('date', \Symfony\Component\Form\Extension\Core\Type\DateType::class, array(
                'widget' => 'single_text',
                'html5' => false,
                'input'  => 'datetime',
                'format' => 'Y-m-d',
                'attr'   => array(
                    'class' => 'js-datepicker',
                  //'min' =>new \DateTime('now'),
                  //  'max' => new \DateTime('+7 day'),
                    //'min'=>date('m/d/Y', '1558216800')
                   // 'min'=>'1558216800'
                )))
            */



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
            'data_class' => Conge::class,
        ]);
    }
}
