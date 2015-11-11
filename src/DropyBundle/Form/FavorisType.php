<?php

namespace DropyBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class FavorisType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */

    /*
     ->add('fav_collection', 'choice', array(
                'choices' => array('default' => 'A trier [par défaut]', 'test' => 'Meh')))
    */

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('fav_name',   'text', array('required' => false))
            ->add('fav_artiste',   'text', array('required' => false))
            ->add('fav_tags',   'textarea')
            ->add('fav_adresse',   'text')
            ->add('fav_type',   'text')
            ->add('fav_nsfw',   'checkbox', array('required' => false))
            ->add('fav_submit', 'submit')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'DropyBundle\Entity\Favoris'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'dropybundle_favoris';
    }
}
