<?php

namespace AppBundle\Form;

use AppBundle\Entity\Post;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class FrontPostType extends AbstractType {

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {

        $post = new Post();
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
                // Problem with empty field on edit persist! Form expect FileType but db sends string!!!
                ->add('body', FileType::class, [
                    'label' => 'Word ili pdf dokument',
                    'invalid_message' => 'Id posta nije validan',
                    'attr' => [
                        'class' => 'form-group',
            ]])
                ->add('author', TextType::class, [
                    'label' => 'Unesite svoje ime ili nadimak',
                    'attr' => [
                        'class' => 'form-control',
                        'placeholder' => 'Vase ime'
            ]])
                ->add('category', EntityType::class, ['label' => 'Odaberite kategoriju',
                    'class' => 'AppBundle:Category',
                    'attr' => [
                        'class' => 'form-control',
            ]])
                ->add('class', ChoiceType::class, [
                    'choices' => array(
                        'opste'    => 'opste',
                        '5 razred' => '5',
                        '6 razred' => '6',
                        '7 razred' => '7',
                        '8 razred' => '8',),
                    'label' => 'Razred',
                    'attr' => [
                        'class' => 'form-control',
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
