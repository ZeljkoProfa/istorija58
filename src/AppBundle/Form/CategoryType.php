<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class CategoryType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('title', TextType::class, [
                    'label' => 'Kategorije',
                    'attr' => [
                        'class' => 'form-control',
                        'placeholder' => 'Unesite naziv kategorije'
            ]])
                ->add('teachers', ChoiceType::class, [
                    'choices' => array(
                        'Za nastavnike' => '1',
                        'Za sve posetioce' => '0'),
                    'label' => 'Prikazati',
                    'attr' => [
                        'class' => 'form-control',
            ]])
                ->add('status', ChoiceType::class, [
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
            'data_class' => 'AppBundle\Entity\Category'
        ));
    }

    public function getBlockPrefix()
    {
        return 'appbundle_category';
    }
}
