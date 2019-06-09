<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class CommentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('author', TextType::class, [
                    //'required' => false,
                    'label' => 'Autor',
                    'attr' => [
                        'class' => 'form-control',
                        'placeholder' => 'Unesite svoj nadimak/ime'
            ]])
                ->add('body', TextareaType::class, [
                    //'required' => false,
                    'label' => 'Tekst komentara',
                    'attr' => [
                        'class' => 'form-control',
                        'placeholder' => 'Unesite komentar',
                        'style="width: 100%;'
            ]])
                ->add('required_security', HiddenType::class)
                ->add('status', ChoiceType::class, [
                    'mapped' => false,
                    'choices' => array(
                        'Vidljiv na sajtu' => '1',
                        'Nevidljiv na sajtu' => '0'),
                    'label' => 'Prikazati',
                    'attr' => [
                        'class' => 'form-control',
            ]]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Comment'
        ));
    }

    public function getBlockPrefix()
    {
        return 'appbundle_comment';
    }
}
