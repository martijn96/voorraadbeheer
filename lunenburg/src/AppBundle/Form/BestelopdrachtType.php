<?php
/**
 * Created by PhpStorm.
 * User: martijnmostert
 * Date: 18-05-18
 * Time: 10:44
 */

namespace AppBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
//vul aan als je andere invoerveld-typen wilt gebruiken in je formulier
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Validator\Constraints\DateTime;
//EntiteitType vervangen door b.v. KlantType
class BestelopdrachtType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        //gebruiken wat je nodig hebt, de id hoeft er niet bij als deze auto increment is
        $builder
            ->add('product_barcode', TextType::class)//, array(
            //'class' => 'AppBundle:Product',
            //'choice_label' => 'naam'))
            ->add('product_barcode', TextType::class)
            ->add('aantal', TextType::class) //naam is b.v. een attribuut of variabele van klant
            ->add('datum', DateType::class) //naam is b.v. een attribuut of variabele van klant
            ->add('status_id', TextType::class) //, array(
            //'class' => 'AppBundle:Bestelstatus',
            //'choice_label' => 'status'))
            ->add('leverancier_id', TextType::class) //naam is b.v. een attribuut of variabele van klant
        ;
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