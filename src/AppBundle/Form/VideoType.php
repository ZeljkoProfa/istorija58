<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class VideoType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('title', TextType::class, [
                    'label' => 'Naslov',
                    'attr' => [
                        'class' => 'form-control',
                        'placeholder' => 'Unesite naslov videa'
            ]])
                ->add('author', TextType::class, [
                    'label' => 'Ime Korisnika',
                    'attr' => [
                        'class' => 'form-control',
                        'placeholder' => 'Unesite svoj nadimak/ime'
            ]])
                ->add('path', TextType::class, [
                    'label' => 'Putanja treba da bude poput https://www.google.rs/search?q=firefox-b-ab&dc',
                    'attr' => [
                        'class' => 'form-control',
                        'placeholder' => 'Unesite putanju do videa'
            ]])
                ->add('status', ChoiceType::class, [
                    'choices' => array(
                        'Vidljiv na sajtu' => '1',
                        'Nevidljiv na sajtu' => '0'),
                    'label' => 'Prikazati na sajtu',
                    'attr' => [
                        'class' => 'form-control',
            ]]);
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Video'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_video';
    }


}
