<?php

namespace App\Form;

use App\Entity\Tematicas;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TematicasType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre')
            ->add('horasDia')
            ->add('almuerzo')
            ->add('horaTarde')
            ->add('horaInicio')
            ->add('horaFin')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Tematicas::class,
        ]);
    }
}
