<?php


namespace AppBundle\Form;

use AppBundle\Entity\Product;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;


//EntiteitType vervangen door b.v. KlantType

class BestelopdrachtType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        //gebruiken wat je nodig hebt, de id hoeft er niet bij als deze auto increment is
        $builder
            ->add(
                'product_barcode', EntityType::class, array(
                    'label' => 'Artikelnaam',
                    'class' => 'AppBundle:Product',
                    'choice_label' => function (Product $product) {
                    return $product->getId() . ' - ' . $product->getBeschrijving();
                }
            ))
            ->add('aantal')

//            ->add('bestelopdracht', CollectionType::class, [
//                'entry_type' => BestelopdrachtType::class,
//                'allow_add' => true
//            ])

            ->add('leverancier_id', EntityType::class, array( //naam is b.v. een attribuut of variabele van klant
                'label' => 'Leverancier Naam',
                'class' => 'AppBundle:Leverancier',
                'choice_label' => 'naam',
            ));



        //zie
        //http://symfony.com/doc/current/forms.html#built-in-field-types
        //voor meer typen invoer

    }
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Product', //Entiteit vervangen door b.v. Klant
            'data_class' => 'AppBundle\Entity\Bestelopdracht', //Entiteit vervangen door b.v. Klant
        ));
    }
}
?>