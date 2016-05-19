<?php

namespace Kevin\CatalogueBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class CommentaireType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('auteur',TextType::class)
            ->add('date',DateTimeType::class)
            ->add('contenu',TextareaType::class)
            ->add('note',ChoiceType::class, array(
            		'choices'=>array(
            				'0'=>0,
            				'1'=>1,
            				'2'=>2,
            				'3'=>3,
            				'4'=>4,
            				'5'=>5,
            				'6'=>6,
            				'7'=>7,
            				'8'=>8,
            				'9'=>9,
            				'10'=>10,
            		)
            ))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Kevin\CatalogueBundle\Entity\Commentaire'
        ));
    }
}
