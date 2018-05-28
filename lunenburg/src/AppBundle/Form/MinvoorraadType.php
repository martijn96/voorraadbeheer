<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class MinvoorraadType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
            ->add('minVoorraad', TextType::class)

        ;

    }

    public function configureOptions(OptionsResolver $resolver)
    {
//        $resolver->setDefaults(array(
//            'data_class' => 'AppBundle\Entity\Magazijnlocatie',
//        ));
    }
}

?>