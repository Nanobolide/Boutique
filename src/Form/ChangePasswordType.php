<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ChangePasswordType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email', EmailType::class, [
                'disabled'=> true,
                'label'=> 'Votre Email',
            ])
         
            ->add('firstname', TextType::class, [
                'disabled'=> true,
                'label'=> 'Prenom',
            ])
            ->add('lastname', TextType::class, [
                'disabled'=> true,
                'label'=> 'Nom',
            ])
               ->add('old_password', PasswordType::class,[
               'label'=> 'mot de passe',
               'mapped'=>false, 
               'attr'=> [
                'placeholder'=>'votre mot de passe actuel.'
            ] ])

            ->add('new_password',RepeatedType::class,[
                'type'=> PasswordType::class,
                'mapped'=>false,
                'invalid_message'=> 'le mot de passe et la confrimation diovent être identique .',
                'label'=> 'Mot de passe',
                'required' => true,
                'first_options'=> [ 'label' => 'Nouveau mot de passe',
                                    'attr'=> [
                                        'placeholder'=>'Merci de saisir votre mot de passe.'
                                    ]
                                        ],
                'second_options'=> ['label' => 'Confirmez nouveau mot de passe',
                'attr'=> [
                    'placeholder'=>'Merci de confirmer votre mot de passe.'
                ] ]
            ])
            
            ->add('submit',SubmitType::class ,[
                'label' => "Mettre a jour"
            ])

        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
