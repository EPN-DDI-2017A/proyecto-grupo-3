<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use AppBundle\Entity\galeria;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class galeriaType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('foto',FileType::class);
            /*->add('tipo',ChoiceType::class, array(
                'choices'=> array(
                    'Perfil'=>'Perfil',
                    'Otro'=>'Otro',
                )
            ))
            ->add('descripcion', TextType::class);*/
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => galeria::class,
            //'data_class' => 'AppBundle\Entity\galeria'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_galeria';
    }






}
