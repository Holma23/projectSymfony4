<?php

namespace App\Form;

use App\Entity\Cv;
use Doctrine\DBAL\Types\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CvType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder

            ->add('titre',\Symfony\Component\Form\Extension\Core\Type\TextType::class,[
                'label'=>'Titre',
                'required'=>'true',
                'attr'=>['placeholder'=>'entrer titre'],
            ])
            ->add('description',TextareaType::class,[
                'label'=>'Description',
                'required'=>'true',
                'attr'=>['placeholder'=>'entrer description'],
            ])
            ->add('file',FileType::class,[
                'label'=>'File(PDF file)',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Cv::class,
        ]);
    }
}
