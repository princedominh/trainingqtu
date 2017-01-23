<?php
namespace QTU\TkbBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;

/**
 * Description of RoomAdmin
 *
 * @author PDT
 */
class RoomAdmin extends Admin {
    
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('name', 'text')
            ->add('numTable')
            ->add('hasProjector')
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
        ;
    }

    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('name', 'text', array('attr'=> array('autofocus'=>'autofocus')))
            ->add('numTable')
            ->add('hasProjector')
            ->add('hasMicro')
            ->add('typeRoom','choice', array(
                'choices'=> array(
                'Phòng học tiêu chuẩn'=>'Phòng học tiêu chuẩn',
                'Phòng thực hành máy tính'=>'Phòng thực hành máy tính')
                ))
            ->add('description')
        ;
    }
}
