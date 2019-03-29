<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;

class ContactType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('author', TextType::class, [
                    'label' => 'Vase ime i prezime',
                    'attr' => [
                        'class' => 'form-control',
                        'placeholder' => 'Ime'
            ]])
                ->add('email', EmailType::class, [
                    'label' => 'Email',
                    'attr' => [
                        'class' => 'form-control',
                        'placeholder' => 'Email'
            ]])
                ->add('body', TextareaType::class, [
                    'label' => 'Pitanje, ideja...',
                    'attr' => [
                        'class' => 'form-control',
                        'placeholder' => 'Unesite text'
            ]]);
                
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Contact'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_contact';
    }


}
