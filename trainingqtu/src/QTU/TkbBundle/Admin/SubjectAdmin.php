<?php
namespace QTU\TkbBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Doctrine\Common\Collections;
use Symfony\Component\PropertyAccess\PropertyAccess;

/**
 * Description of SubjectAdmin
 *
 * @author PDT
 */
class SubjectAdmin extends Admin {
    
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('code', 'text', array('label'=>'tkb.subject.code'))
            ->add('name', null, array('label'=>'tkb.subject.name'))
            ->add('credit', null, array('label'=>'tkb.subject.credit_s'))
            ->add('classCredit', null, array('label'=>'tkb.subject.classCredit_s'))
            ->add('labCredit', null, array('label'=>'tkb.subject.labCredit_s'))
            ->add('projectCredit', null, array('label'=>'tkb.subject.projectCredit_s'))
            ->add('faculty', null, array('label'=>'tkb.faculty'))
            ->add('_action', 'actions', array(
                'actions' => array(
                    'edit' => array(),
                    'delete' => array()
                ),
                'label' => 'Action'
            ))
        ;
    }
    
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('code', null, array('label'=>'tkb.subject.code'))
            ->add('name', null, array('label'=>'tkb.subject.name'))
            ->add('credit', null, array('label'=>'tkb.subject.credit'))
            ->add('classCredit', null, array('label'=>'tkb.subject.classCredit'))
            ->add('labCredit', null, array('label'=>'tkb.subject.labCredit'))
            ->add('projectCredit', null, array('label'=>'tkb.subject.projectCredit'))
            ->add('faculty', null, array('label'=>'tkb.faculty'))
        ;
    }

    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('code', null, array('label'=>'tkb.course.code', 'attr'=> array('autofocus'=>'autofocus')))
            ->add('name', null, array('label'=>'tkb.course.name'))
            ->add('credit', null, array('label'=>'tkb.subject.credit'))
            ->add('classCredit', null, array('label'=>'tkb.subject.classCredit'))
            ->add('labCredit', null, array('label'=>'tkb.subject.labCredit'))
            ->add('projectCredit', null, array('label'=>'tkb.subject.projectCredit'))
            ->add('faculty', null, array('label'=>'tkb.faculty'))
            ->add('metadata', 'textarea', array(
                'attr'=> array('class'=>'tinymce','tinymce'=>'{"theme":"simple"}'),
                'label'=>'tkb.subject.metadata'))
        ;
    }
    
}
