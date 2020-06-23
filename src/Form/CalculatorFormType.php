<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CalculatorFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('first_number', NumberType::class, ['label' => 'Первое число'])
            ->add('symbol', ChoiceType::class, [
                'choices' => [
                '+' => '+',
                '-' => '-',
                '/' => '/',
                '*' => '*',
            ],
                'label' => 'Выберите знак'])
            ->add('second_number', NumberType::class, ['label' => 'Второе число'])
            ->add('calculate', SubmitType::class, ['label' => 'Посчитать'])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
