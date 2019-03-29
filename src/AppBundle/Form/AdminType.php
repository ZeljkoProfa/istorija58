<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class AdminType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('firstName', TextType::class, [
                    'label' => 'Ime',
                    'attr' => [
                        'class' => 'form-control',
                        'placeholder' => 'Unesite ime'
            ]])
                ->add('lastName', TextType::class, [
                    'label' => 'Prezime',
                    'attr' => [
                        'class' => 'form-control',
                        'placeholder' => 'Unesite prezime'
            ]])
                ->add('email', TextType::class, [
                    'label' => 'Email',
                    'attr' => [
                        'class' => 'form-control',
                        'placeholder' => 'Unesite email adresu'
            ]])
                ->add('password', TextType::class, [
                    'label' => 'Lozinka',
                    'attr' => [
                        'class' => 'form-control',
                        'placeholder' => 'Unesite lozinku'
            ]])
                ->add('phone', TextType::class, [
                    'label' => 'Telefon',
                    'attr' => [
                        'class' => 'form-control',
                        'placeholder' => 'Unesite broj telefona'
            ]]);
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Admin'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_admin';
    }


}
