<?php
namespace QTU\TkbBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;

/**
 * Description of ClassPAdmin
 *
 * @author PDT
 */
class ClassPAdmin extends Admin {
    
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('name', 'text')
            ->add('numAttendant')
            ->add('faculty',null, array('editable' => true))
            ->add('email')
            ->add('currentTerm')
            ->add('stillStudy', null, array('label'=>'tkb.class.stillStudy','editable' => true))
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
            ->add('name')
            ->add('email')
            ->add('faculty')
        ;
    }

    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('name', 'text', array('attr'=> array('autofocus'=>'autofocus')))
            ->add('email')
            ->add('numAttendant')
            ->add('faculty')
            ->add('currentTerm')
            ->add('stillStudy', null, array('label'=>'tkb.class.stillStudy'))
        ;
    }

    public function getBatchActions()
    {
        // retrieve the default (currently only the delete action) actions
        $actions = parent::getBatchActions();

        // check user permissions
        if($this->hasRoute('edit') && $this->isGranted('EDIT') && $this->hasRoute('delete') && $this->isGranted('DELETE')){
            $actions['projector']=[
                'label'            => "projector",
                'ask_confirmation' => true // If true, a confirmation will be asked before performing the action
            ];

        }

        return $actions;
    }
    
}
