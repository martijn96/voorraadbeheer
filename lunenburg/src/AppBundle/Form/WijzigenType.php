<?php
/**
 * Created by PhpStorm.
 * User: martijnmostert
 * Date: 17-05-18
 * Time: 19:10
 */

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class WijzigenType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
            ->add('naam', TextType::class)
            ->add('beschrijving', TextType::class)
            ->add('specificaties', TextType::class)
            ->add('inkoopprijs', TextType::class)
            ->add('minVoorraad', TextType::class)
            ->add('voorraad', TextType::class)
            ->add('vervangend_id', TextType::class)
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