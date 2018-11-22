<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class UserteacherType extends AbstractType {

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder->add('profession', EntityType::class, array(
                    'label' => 'Profesión',
                    'placeholder' => 'Seleccionar...',
                    'attr' => array(
                        'class' => 'form-control'
                    ),
                    'class' => 'BackendBundle:Profession',
                    'choice_label' => 'profession',
                    'expanded' => false,
                    'multiple' => false,
                        )
                )
                ->add('type', EntityType::class, array(
                    'label' => 'Tipo de Profesor',
                    'placeholder' => 'Seleccionar...',
                    'attr' => array(
                        'class' => 'form-control'
                    ),
                    'class' => 'BackendBundle:Typeteacher',
                    'choice_label' => 'type',
                    'expanded' => false,
                    'multiple' => false,
                        )
                )
        ;
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'BackendBundle\Entity\Userteacher'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix() {
        return 'backendbundle_userteacher';
    }

}
