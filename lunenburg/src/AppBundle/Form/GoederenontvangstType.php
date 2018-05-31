<?php
/**
 * Created by PhpStorm.
 * User: martijnmostert
 * Date: 17-05-18
 * Time: 21:29
 */

namespace AppBundle\Form;
use Doctrine\ORM\Mapping\Entity;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use AppBundle\Entity\Bestelling;
use AppBundle\Entity\bestelregel;
use AppBundle\Entity\Product;

class GoederenontvangstType extends AbstractType

{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('datum', DateType::class);
        $builder->add('leverancier', CollectionType::class, array(
            'entry_type'   => ChoiceType::class,
            'entry_options'  => array(
                'choices'  => array(
                    'Leverancier1' => 'leverancier1',
                    'Leverancier2' => 'leverancier2',
                    'Leverancier3' => 'leverancier3',
                ),
            ),
        ))

        ->add('leverancier', EntityType::class, array(
        // looks for choices from this entity
        'class' => "AppBundle:Leverancier",

        // uses the User.username property as the visible option string
        'choice_label' => 'naam',
        'choice_value' => 'id'
        // used to render a select box, check boxes or radios
        // 'multiple' => true,
        // 'expanded' => true,
    ));

        $builder->add('ordernummer', IntegerType::class);

//        $builder->add(
//            'ordernummer', EntityType::class, array(
//            'label' => 'Artikelnaam',
//            'class' => 'AppBundle:Bestelling',
//            'choice_label' => 'id',
//            'choice_value' => 'id'
//        ));


        $builder->add(
            'artikelnummer', EntityType::class, array(
            'label' => 'Artikelnaam',
            'class' => 'AppBundle:Product',
            'choice_label' => function (Product $product) {
                return $product->getId() . ' - ' . $product->getBeschrijving();
            }

        ));
        $builder->add('omschrijving', TextareaType::class);
        $builder->add('aantal', TextType::class);
        $builder->add('kwaliteit', null, array());
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Goederenontvangst',
        ));
    }
}
?>