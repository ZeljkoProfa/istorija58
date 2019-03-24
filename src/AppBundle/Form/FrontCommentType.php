<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class FrontCommentType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('author', TextType::class, [
                    'label' => 'Autor',
                    'attr' => [
                        'class' => 'form-control',
                        'placeholder' => 'Unesite svoj nadimak/ime'
            ]])
                ->add('body', TextareaType::class, [
                    'label' => 'Tekst Clanka',
                    'attr' => [
                        'class' => 'form-control',
                        'placeholder' => 'Unesite komentar',
                        'style="width: 100%;'
            ]])
                ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Comment'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_comment';
    }


}
