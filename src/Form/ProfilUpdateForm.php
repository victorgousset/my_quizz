<?php


namespace App\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\NotBlank;

class ProfilUpdateForm extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email', EmailType::class,['constraints' => [new NotBlank([
                'message' => 'Merci d\'entrer un e-mail',
            ]),],
                'required' => true,
                'attr' => ['class' =>'form-control'],])
            ->add('password', PasswordType::class, ['constraints' => [new NotBlank([
                'message' => 'Merci d\'entrer un mot de passe',
            ]),],
                'required' => true,
                'attr' => ['class' => 'form-control'],])
            ->add('confirmpassword', PasswordType::class, ['constraints' => [new NotBlank([
                'message' => 'Merci d\'entrer un mot de passe',
            ]),],
                'required' => true,
                'attr' => ['class' => 'form-control'],])
            ->add('valider', SubmitType::class)
        ;
    }


}