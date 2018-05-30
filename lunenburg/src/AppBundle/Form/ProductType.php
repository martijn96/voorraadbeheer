<?php
/**
 * Created by PhpStorm.
 * User: martijnmostert
 * Date: 17-05-18
 * Time: 19:10
 */

namespace AppBundle\Form;

use AppBundle\Entity\Magazijnlocatie;
use AppBundle\Entity\Product;
use AppBundle\Repository\MagazijnlocatieRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class ProductType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
            ->add('naam', TextType::class)
            ->add('beschrijving', TextType::class)
            ->add('specificaties', TextType::class)
            ->add('inkoopprijs', TextType::class)
//            ->add('magazijnlocatie_id', TextType::class)
//            ->add('magazijnlocatie_id', EntityType::class, array(
//                // looks for choices from this entity
//                'class' => 'AppBundle:Magazijnlocatie',
//
//                // uses the User.username property as the visible option string
//                'choice_label' => 'naam',
//
//                // used to render a select box, check boxes or radios
//                // 'multiple' => true,
//                // 'expanded' => true,
//            ))

//            ->add('magazijnlocatie_id', EntityType::class, array(
//                // looks for choices from this entity
//                'class' => 'AppBundle:Magazijnlocatie',
//
//                // uses the User.username property as the visible option string
//                'choice_label' => 'naam',
//                'choice_value' => 'id',
//                // used to render a select box, check boxes or radios
//                // 'multiple' => true,
//                // 'expanded' => true,
//            ))

            ->add('magazijnlocatie_id', EntityType::class, array( //naam is b.v. een attribuut of variabele van klant
                'label' => 'Magazijnlocatie',
                'class' => 'AppBundle:Magazijnlocatie',
                'choice_label' => 'naam',
                'choice_value' => 'id'
            ))

            ->add('minVoorraad', TextType::class)
            ->add('voorraad', TextType::class)
//            ->add('vervangend_id', TextType::class)


            ->add( 'vervangend_id', CollectionType::class, [
                'entry_type' => Product::class,
                'required' => false,
                'choice_label' => false,
                'choice_value' => 'id',
                'empty_data' => null,
                'allow_add' => true,
                'allow_delete' => true,
                'delete_empty' => true
            ] )


            ->add('vervangend_id', EntityType::class, array(
            // looks for choices from this entity
            'class' => 'AppBundle:Product',

            // uses the User.username property as the visible option string
            'choice_label' => 'naam',
            'choice_value' => 'id',
            // used to render a select box, check boxes or radios
            // 'multiple' => true,
            // 'expanded' => true,
        ))
        ;

    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
//            'data_class' => 'AppBundle\Entity\Product',

        ));
    }
}

?>