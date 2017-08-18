<?php
namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\CountryType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class UserType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre', TextType::class, ['required'=> false])
            ->add('apellido', TextType::class, ['required'=> false])
            ->add('fono', NumberType::class, ['required'=> false])
            ->add('sexo', ChoiceType::class, array(
                'choices'=> array(
                    'Hombre'=>'Hombre',
                    'Mujer'=>'Mujer',
                    'Otro'=>'Otro',
                ),
                'multiple'=>false,
                'expanded'=>true,
            ))
            ->add('fnaci', BirthdayType::class, array(
                'widget' => 'choice',
                'placeholder' => array(
                    'years' => 'Año', 'month' => 'Mes', 'day' => 'Día'
                ),
            ))
            ->add('pais', CountryType::class, array(
                "preferred_choices" => array(
                    "EC" => "Ecuador"
                ),
            ))
            ->add('provincia', TextType::class, ['required'=> false])
            ->add('ciudad',TextType::class, ['required'=> false])
            ->add('direccion',TextType::class, ['required'=> false])
            ->add('carrera', ChoiceType::class, array(
                'choices'  => array(
                    'Agua y Saneamiento' => 'Agua y Saneamiento',
                    'Análisis de Sistemas Informáticos' => 'Análisis de Sistemas Informáticos',
                    'Electrónica y Telecomunicaciones' => 'Electrónica y Telecomunicaciones',
                    'Electromecánica' => 'Electromecánica',
                ),
            ))
            ->add('descripcion', TextareaType::class, ['required'=> false]);
        /*->add('foto',FileType::class, array(
            'mapped' => false,
            'required' => false
        ));*/
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\User'
        ));
    }
    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_user';
    }
}