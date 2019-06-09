<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class QuizQuestionsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('question', TextType::class, [
                    'label' => 'Pitanje',
                    'attr' => [
                        'class' => 'form-control',
                        'placeholder' => 'Unesite pitanje'
            ]])
                ->add('answer1', TextType::class, [
                    'label' => 'Prvi odgovor',
                    'attr' => [
                        'class' => 'form-control',
                        'placeholder' => 'Unesite prvi odgovor'
            ]])
                ->add('answer2', TextType::class, [
                    'label' => 'Drugi odgovor',
                    'attr' => [
                        'class' => 'form-control',
                        'placeholder' => 'Unesite drugi odgovor'
            ]])
                ->add('answer3', TextType::class, [
                    'label' => 'Treci odgovor',
                    'attr' => [
                        'class' => 'form-control',
                        'placeholder' => 'Unesite treci odgovor'
            ]])
                ->add('answer4', TextType::class, [
                    'label' => 'Cetvrti odgovor',
                    'attr' => [
                        'class' => 'form-control',
                        'placeholder' => 'Unesite cetvrti odgovor'
            ]])
                ->add('trueAnswer', TextType::class, [
                    'label' => 'Tacan odgovor',
                    'attr' => [
                        'class' => 'form-control',
                        'placeholder' => 'Unesite tacan odgovor'
            ]])
                ->add('lesson', TextareaType::class, [
                    'label' => 'Pouka',
                    'attr' => [
                        'class' => 'form-control',
                        'placeholder' => 'Unesite pouku'
            ]])
                ->add('img', FileType::class, [
                    'data_class' => 'Symfony\Component\HttpFoundation\File\File',
                    'required' => false,
                    'label' => 'Dodaj jpg ili png fajl ili izmeni postojeci. Moguce je dodati samo jedan fajl.',
                    'invalid_message' => 'Id nije validan',
                    'attr' => [
                        'class' => 'form-group',
            ]])
                ->add('points', ChoiceType::class, [
                    'label' => 'Poeni',
                    'choices' => array(
                        '5' => 5,
                        '10' => 10,
                        '15' => 15,
                        '20' => 20),
                    'attr' => [
                        'class' => 'form-control',
            ]])
                ->add("imgdel", CheckboxType::class, [
                    "required" => false,
                    "mapped" => false,
                    "label" => "Ako zelite da uklonite sliku stiklirajte polje ispod",
                    'attr' => [
                        'class' => 'form-group',
            ]]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\QuizQuestions'
        ));
    }

    public function getBlockPrefix()
    {
        return 'appbundle_quizquestions';
    }
}
