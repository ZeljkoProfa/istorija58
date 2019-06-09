<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class ThoughtsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('text', TextType::class, [
                    'label' => 'Misao',
                    'attr' => [
                        'class' => 'form-control',
                        'placeholder' => 'Unesite misao'
            ]])
                ->add('author', TextType::class, [
                    'label' => 'Autor',
                    'attr' => [
                        'class' => 'form-control',
                        'placeholder' => 'Unesite autora'
            ]]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Thoughts'
        ));
    }

    public function getBlockPrefix()
    {
        return 'appbundle_thoughts';
    }


}
