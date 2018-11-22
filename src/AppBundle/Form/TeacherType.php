<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;

class TeacherType extends AbstractType {

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder->add('name', TextType::class, array(
                    'label' => 'Nombre(s)',
                    'attr' => array(
                        'requiered' => true,
                        'class' => 'form-control',
                        'placeholder' => 'Nombre(s)',
                    )
                ))
                ->add('lastname', TextType::class, array(
                    'label' => 'Apellido Paterno',
                    'attr' => array(
                        'requiered' => true,
                        'class' => 'form-control',
                        'placeholder' => 'Apellido Paterno'
                    )
                ))
                ->add('secondsurname', TextType::class, array(
                    'label' => 'Apellido Materno',
                    'attr' => array(
                        'requiered' => true,
                        'class' => 'form-control',
                        'placeholder' => 'Apellido Materno'
                    )
                ))
                ->add('gender', ChoiceType::class, array(
                    'label' => 'Sexo',
                    'attr' => array(
                        'class' => 'flat-red',
                        'requiered' => true,
                    ),
                    'choices' => array(
                        'Hombre' => 1,
                        'Mujer' => 0
                    ),
                    'expanded' => true,
                    'multiple' => false,
                ))
                ->add('birthdaydate', DateType::class, array(
                    'label' => 'Fecha de Nacimiento',
                    'attr' => array(
                        'requiered' => true,
                        'class' => 'form-control',
                        'placeholder' => 'Fecha de Nacimiento'
                    )
                ))
                ->add('curp', TextType::class, array(
                    'label' => 'CURP',
                    'attr' => array(
                        'requiered' => true,
                        'class' => 'form-control',
                        'placeholder' => 'CURP'
                    )
                ))
                ->add('imss', NumberType::class, array(
                    'label' => 'Número IMSS',
                    'attr' => array(
                        'requiered' => true,
                        'class' => 'form-control',
                        'placeholder' => 'Número IMSS'
                    )
                ))
                ->add('email', EmailType::class, array(
                    'label' => 'Correo Electrónico',
                    'attr' => array(
                        'requiered' => true,
                        'class' => 'form-control',
                        'placeholder' => 'Correo Electrónico'
                    )
                ))
                ->add('civil', EntityType::class, array(
                    'label' => 'Estado Civil',
                    'placeholder' => 'Seleccionar...',
                    'class' => 'BackendBundle:Civilstatus',
                    'choice_label' => 'civil',
                    'expanded' => false,
                    'multiple' => false,
                    'attr' => array(
                        'class' => 'form-control',
                        'requiered' => true
                    )
                ))
                ->add('submit', SubmitType::class, array('label' => 'Registrar'));
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'BackendBundle\Entity\User'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix() {
        return 'backendbundle_user';
    }

}
