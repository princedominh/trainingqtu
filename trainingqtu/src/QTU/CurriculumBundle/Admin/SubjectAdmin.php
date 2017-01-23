<?php

namespace QTU\CurriculumBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class SubjectAdmin extends AbstractAdmin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('code')
            ->add('name')
            ->add('credit')
            ->add('ntheory')
            ->add('npractice')
            ->add('nproject')
            ->add('department')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('code')
            ->add('name')
            ->add('credit','integer')
            ->add('ntheory')
            ->add('npractice')
            ->add('nproject')
            ->add('department')
            ->add('_action', null, array(
                'actions' => array(
                    'edit' => array(),
                    'delete' => array(),
                )
            ))
        ;
    }

    /**
     * @param FormMapper $formMapper
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('code')
            ->add('name')
            ->add('credit')
            ->add('ntheory')
            ->add('npractice')
            ->add('nproject')
            ->add('department')
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('code')
            ->add('name')
            ->add('credit')
            ->add('ntheory')
            ->add('npractice')
            ->add('nproject')
            ->add('department')
        ;
    }
}
