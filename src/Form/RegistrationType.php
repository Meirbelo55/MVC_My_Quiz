<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username',TextType::class,['attr' =>['placeholder'=>"renseignez votre nom"]])
            //->add('roles')
            ->add('email')
            ->add('password',
             RepeatedType::class, array(
        'type' => PasswordType::class,
        'first_options'  => array('label' => 'Password'),
        'second_options' => array('label' => 'Repeat Password'),
    ))
            //->getForm();
            //->add('confirm password')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
