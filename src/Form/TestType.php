<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TestType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('file', FileType::class, [
                'label' => 'PDF file',
            ])
            ->add('label_false', FileType::class, [
                'label' => false,
            ])
            ->add('label_null', FileType::class, [
                'label' => null,
            ])
            ->add('file_label_false_placeholder', FileType::class, [
                'label' => false,
                'attr' => ['placeholder' => 'Choose file'],
            ])
            ->add('file_label_null_placeholder', FileType::class, [
                'label' => null,
                'attr' => ['placeholder' => 'Choose file'],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'mapped' => false,
        ]);
    }
}