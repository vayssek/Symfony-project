<?php

namespace Kevin\CatalogueBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Kevin\CatalogueBundle\Entity\Categorie;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;

class ArticleType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre',TextType::class)
            ->add('description',TextareaType::class)
            ->add('prix',MoneyType::class)
            ->add('categories',EntityType::class,
						['required'=> false, 'class'=>Categorie::class,
						'choice_label'=>'titre',
						'expanded'=>true,
						'multiple'=>true,
						'query_builder'=>function($er){
							$qb=$er->createQueryBuilder("c")->orderBy('c.titre', 'ASC');
                            return $qb;}])
            ->add('image',ImageType::class,['required'=>false])
            //->add('submit',SubmitType::class,['label'=>'Envoyer']);
                            
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Kevin\CatalogueBundle\Entity\Article'
        ));
    }
}
