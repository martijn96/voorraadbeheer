<?php
/**
 * Created by PhpStorm.
 * User: martijnmostert
 * Date: 17-05-18
 * Time: 21:29
 */

namespace AppBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
//vul aan als je andere invoerveld-typen wilt gebruiken in je formulier
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
//EntiteitType vervangen door b.v. KlantType
class GoederenontvangstType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        //gebruiken wat je nodig hebt, de id hoeft er niet bij als deze auto increment is
        $builder->add('datum', DateType::class, array(
            'widget' => 'single_text',
        ));
        $builder
            ->add('leverancier', TextType::class) //naam is b.v. een attribuut of variabele van klant
        ;
        $builder
            ->add('ordernummer', IntegerType::class) //naam is b.v. een attribuut of variabele van klant
        ;
        $builder
            ->add('artikelnummer', TextType::class) //naam is b.v. een attribuut of variabele van klant
        ;
        $builder
            ->add('omschrijving', TextareaType::class) //naam is b.v. een attribuut of variabele van klant
        ;
        $builder
            ->add('aantal', TextType::class) //naam is b.v. een attribuut of variabele van klant
        ;
        $builder
            ->add('kwaliteit', TextareaType::class) //naam is b.v. een attribuut of variabele van klant
        ;
        //zie
        //http://symfony.com/doc/current/forms.html#built-in-field-types
        //voor meer typen invoer
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Goederenontvangst', //Entiteit vervangen door b.v. Klant
        ));
    }
}
?>