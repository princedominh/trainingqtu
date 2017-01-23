<?php
namespace QTU\TkbBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Doctrine\Common\Collections;
use Symfony\Component\PropertyAccess\PropertyAccess;

/**
 * Description of CourseAdmin
 *
 * @author PDT
 */
class CourseAdmin extends Admin {
    
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('name', 'text', array('label'=>'tkb.course.name'))
            ->add('instructors', null, array('label'=>'tkb.course.instructor'))
            ->add('classes', null, array('label'=>'tkb.course.class_p'))
            ->add('credit', null, array('label'=>'tkb.course.credit'))
            ->add('term', 'entity', array('label'=>'tkb.course.term','editable' => true))
            ->add('finish', null, array('label'=>'tkb.course.finish','editable' => true))
//            ->add('needProjector', null, array('label'=>'tkb.course.projector','editable' => true))
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
            ->add('subject', null, array('label'=>'tkb.course.name'))
            ->add('instructors', null, array('label'=>'tkb.course.instructor'))
            ->add('classes', null, array('label'=>'tkb.course.class_p'))
            ->add('term', null, array('label'=>'tkb.course.term'))
        ;
    }

    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('name', null, array('label'=>'tkb.course.name','help'=>'Bỏ trống nếu cùng tên môn học'))
            ->add('subject', null, array('label'=>'tkb.course.subject'))
            ->add('instructors', 'sonata_type_model', array('multiple' => true, 'label'=>'tkb.course.instructor'))
            ->add('classes', 'sonata_type_model', array('multiple' => true, 'label'=>'tkb.course.class_p'))
            ->add('needProjector', null, array('label'=>'tkb.course.projector'))
            ->add('term', null, array('label'=>'tkb.course.term'))
            ->add('finish', null, array('label'=>'tkb.course.finish'))
            ->add('description', 'textarea', array(
                'attr'=> array('class'=>'tinymce','tinymce'=>'{"theme":"simple"}'),
                'label'=>'tkb.course.description'))
        ;
    }
    
    public function getBatchActions()
    {
        // retrieve the default batch actions (currently only delete)
        $actions = parent::getBatchActions();

        if (
          $this->hasRoute('edit') && $this->isGranted('EDIT') &&
          $this->hasRoute('delete') && $this->isGranted('DELETE')
        ) {
            //get all Term
            $re = $this->getConfigurationPool()->getContainer()->get('doctrine')->getRepository('QTUTkbBundle:Term');
            $terms = $re->findAll();
            
            //add to bach action
            $actions['term'] = array(
                    'label' => 'Chọn HK',
                    'translation_domain' => 'QTUTkbBundle',
                    'ask_confirmation' => true,
                );
            foreach($terms as $term) {
                $actions['sel_term_'.$term->getId()] = array(
                    'label' => 'HK '.$term,
                    'translation_domain' => 'QTUTkbBundle',
                    'ask_confirmation' => true,
                    'extradata' => $term->getId(),
                );
            }
        }

        return $actions;
    }
}
