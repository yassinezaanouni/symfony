<?php

namespace App\Form;

use App\Entity\Prd;
use App\Entity\Ticket;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
class TicketType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('valide', HiddenType::class, [
                'data' => false, // Set the default value to false
            ])
            ->add('total', TextType::class, [
                'required' => false,
                'disabled' => true,
                 // Disable the total field so users can't edit it manually
            ])
            ->add('prds', EntityType::class, [
                'class' => Prd::class,
                'choice_label' => 'id',
                'multiple' => true,
                'required' => false,
            ]);

    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Ticket::class,
        ]);
    }
}
