<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use AppBundle\Form\DataTransformer\FileDataT;

class PostEditType extends AbstractType {

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder->add('title', TextType::class, [
                    'label' => 'Naslov',
                    'attr' => [
                        'class' => 'form-control',
                        'placeholder' => 'Unesite naslov članka'
            ]])
                ->add('seoTitle', TextType::class, [
                    'label' => 'Ključne reči: test istorija, priprema ili slično',
                    'attr' => [
                        'class' => 'form-control',
                        'placeholder' => 'Unesite ključne reči'
            ]])
                ->add('category', EntityType::class, ['label' => 'Odaberite kategoriju',
                    'class' => 'AppBundle:Category',
                    'attr' => [
                        'class' => 'form-control',
                        'placeholder' => 'Odaberite kategoriju'
            ]])
                ->add('status', ChoiceType::class, [
                    'choices' => array(
                        'Vidljiv na sajtu' => '1',
                        'Nevidljiv na sajtu' => '0'),
                    'label' => 'Prikazati',
                    'attr' => [
                        'class' => 'form-control',
                        'placeholder' => 'Unesite ključne reči'
            ]])->add('class', ChoiceType::class, [
                    'choices' => array(
                        'opste'    => 'opste',
                        '5 razred' => '5',
                        '6 razred' => '6',
                        '7 razred' => '7',
                        '8 razred' => '8',),
                    'label' => 'Razred',
                    'attr' => [
                        'class' => 'form-control',
                        'placeholder' => 'Unesite ključne reči'
            ]]);
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Post'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix() {
        return 'appbundle_post';
    }

}
