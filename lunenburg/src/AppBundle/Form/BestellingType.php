<?php

namespace AppBundle\Form;

use AppBundle\Entity\Product;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;


class BestellingType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        //gebruiken wat je nodig hebt, de id hoeft er niet bij als deze auto increment is
        $builder
             ->add('leverancier_id', EntityType::class, array( //naam is b.v. een attribuut of variabele van klant
                'label' => 'Leverancier Naam',
                'class' => 'AppBundle:Leverancier',
                'choice_label' => 'naam'))

            ->add('bestelregels', CollectionType::class, [
                'entry_type' => BestelregelType::class,
                'allow_add' => true
            ])
        ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Bestelling'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_bestelregel';
    }


}
