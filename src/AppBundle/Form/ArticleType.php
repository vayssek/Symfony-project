<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use AppBundle\Form\ImageType;
use AppBundle\Entity\Categorie;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Doctrine\Common\Annotations\Annotation\Required;

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
				->add('categories',EntityType::class,
						['required'=> false, 'class'=>Categorie::class,
						'choice_label'=>'titre',
						'expanded'=>true,
						'multiple'=>true,
						'query_builder'=>function($er){
							$qb=$er->createQueryBuilder("c")->orderBy('c.titre', 'ASC');
                            return $qb;}])
				->add('contenu',TextareaType::class)
				->add('auteur',TextType::class)
				->add('date',DateType::class)
				->add('image',ImageType::class,['required'=>false])
				->add('publication',CheckboxType::class,['required'=>false])
				->add('submit',SubmitType::class,['label'=>'Envoyer']);
       
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Article'
        ));
    }
}
