<?php

namespace QTU\DepartmentMajorBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class DepartmentAdmin extends AbstractAdmin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('shortname')
            ->add('fullname')
            ->add('address')
            ->add('phone')
            ->add('email')
            ->add('website')
//            ->add('description')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('shortname')
            ->add('fullname')
//            ->add('address')
            ->add('phone')
            ->add('email')
            ->add('website')
            ->add('is_student_management')
//            ->add('description')
            ->add('_action', null, array(
                'actions' => array(
//                    'show' => array(),
                    'edit' => array(),
//                    'delete' => array(),
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
            ->add('shortname')
            ->add('fullname')
            ->add('address')
            ->add('phone')
            ->add('email')
            ->add('website')
            ->add('is_student_management')
            ->add('description')
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id')
            ->add('shortname')
            ->add('fullname')
            ->add('address')
            ->add('phone')
            ->add('email')
            ->add('website')
            ->add('description')
        ;
    }
}
