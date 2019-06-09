<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class QuizType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('quizName', TextType::class, [
                    'label' => 'Naslov kviza',
                    'attr' => [
                        'class' => 'form-control',
                        'placeholder' => 'Unesite naslov kviza'
            ]])
                ->add('quizCategory', TextType::class, [
                    'label' => 'Oblast za koju je vezan kviz, npr: stari vek, drugi svetski rat...',
                    'attr' => [
                        'class' => 'form-control',
                        'placeholder' => 'Unesite oblast'
            ]])
                ->add('status', ChoiceType::class, [
                    'label' => 'Poeni',
                    'choices' => array(
                        'vidljiv na sajtu' => '1',
                        'nevidljiv na sajtu' => '0' ),
                    'attr' => [
                        'class' => 'form-control',
        ]]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Quiz'
        ));
    }

    public function getBlockPrefix()
    {
        return 'appbundle_quiz';
    }
}
