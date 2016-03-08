<?php

namespace MyBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class ProductType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, array('label' => 'Nome prodotto'))
            ->add('description', TextareaType::class, array('label' => 'Descrizione'))
            ->add('tags', TextareaType::class, array('label' => 'Tags (uno o più separati da Virgola)'))
            ->add('image', 'file', array(
                'data_class' => null,
                'property_path' => 'image',
                'label' => 'Allega un\'immagine',
                'required' => false
            ));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MyBundle\Entity\Product'
        ));
    }
}