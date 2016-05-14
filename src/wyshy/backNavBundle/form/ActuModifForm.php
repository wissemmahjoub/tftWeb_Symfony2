<?php

namespace wyshy\backNavBundle\form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
/**
 * Description of ActuModifForm
 *
 * @author ASUS
 */
class ActuModifForm extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
           ->add('sujet','text')
           ->add('description', 'textarea', array('attr' => array('rows' => '20','cols' => '80')) )
           ->add('file')
           ->add('Modifier','submit',array('attr' => array('class' => 'btn btn-success btn-cons')))

        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'wyshy\backNavBundle\Entity\Actualite'
        ));
    }
    
    /**
     * @param OptionsResolverInterface $options
     */
    public function getDefaultOptions(array $options)
{
    return array(
        'csrf_protection' => false,
        // Rest of options omitted
    );
}

    /**
     * @return string
     */
    public function getName()
    {
        return 'actualite';
    }}
