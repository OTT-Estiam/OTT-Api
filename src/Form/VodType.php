<?php

namespace App\Form;



use Symfony\Component\Form\AbstractType;

use Symfony\Component\Form\FormBuilderInterface;

use Symfony\Component\OptionsResolver\OptionsResolver;



class VodType extends AbstractType

{

    public function buildForm(FormBuilderInterface $builder, array $options)

    {

        $builder

            ->add('name')

            ->add('image')

            ->add('url')

            ->add('type')

            ->add('manifest')

            ->add('isReplay')

            ->add('duration')

        ;

    }



    public function configureOptions(OptionsResolver $resolver)

    {

        $resolver->setDefaults(array(

            'data_class'=>'App\Entity\Vod',

            'csrf_protection' => false

        ));

    }



    public function getName()

    {

        return 'vod stuff';

    }

}

