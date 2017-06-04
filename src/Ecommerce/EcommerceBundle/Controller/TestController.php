<?php

namespace Ecommerce\EcommerceBundle\Controller;
use Ecommerce\EcommerceBundle\Entity\Test;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

 class TestController extends Controller
 {
    /**
     * @Route( "/test",  name="test" )
     */

    public function testFormulaireAction(Request $request)
    {

        // create a task and give it some dummy data for this example
        $test = new Test();
        $test->setName('Samba');
        $test->setDate(new \DateTime('tomorrow'));

        $form = $this->createFormBuilder($test)
            ->add('name', TextType::class)
            ->add('date', DateType::class)
            ->add('save', SubmitType::class, array('label' => 'Create Post'))
            ->getForm();

        return $this->render('Test/test.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}
