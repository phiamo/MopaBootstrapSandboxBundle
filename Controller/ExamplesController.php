<?php
namespace Mopa\Bundle\BootstrapSandboxBundle\Controller;

use Mopa\Bundle\BootstrapSandboxBundle\Form\Type\DateTimeTestType;

use Doctrine\Tests\DBAL\Types\DateTimeTest;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Mopa\Bundle\BootstrapSandboxBundle\Form\Type\ExampleFormsType;
use Mopa\Bundle\BootstrapSandboxBundle\Form\Type\ExampleChoiceFormType;
use Mopa\Bundle\BootstrapSandboxBundle\Form\Type\ExampleCollectionsFormType;
use Mopa\Bundle\BootstrapSandboxBundle\Form\Type\ExampleInlineFormType;
use Mopa\Bundle\BootstrapSandboxBundle\Form\Type\ExampleSearchFormType;
use Mopa\Bundle\BootstrapSandboxBundle\Form\Type\ExampleHorizontalFormType;
use Mopa\Bundle\BootstrapSandboxBundle\Form\Type\ExampleErrorsFormType;
use Mopa\Bundle\BootstrapSandboxBundle\Form\Type\ExampleExtendedFormType;
use Mopa\Bundle\BootstrapSandboxBundle\Form\Type\ExampleExtendedViewFormType;

class ExamplesController extends Controller
{
    /**
    * @Route("/mopa/bootstrap", name="mopa_bootstrap_welcome")
    * @Template
    */
    public function indexAction(Request $request)
    {
        return array();
    }    /**
    * @Route("/mopa/bootstrap/layout", name="mopa_bootstrap_layout_example")
    * @Template
    */
    public function layoutAction(Request $request)
    {
        return array();
    }
    /**
    * @Route("/mopa/bootstrap/forms/embeddedTypes", name="mopa_bootstrap_forms_embeddedtype")
     * @Template
    */
    public function embeddedTypeAction(Request $request)
    {
        $dateTime = new \Mopa\Bundle\BootstrapSandboxBundle\Entity\DateTimeTest();
        $dateTimeType = new \Mopa\Bundle\BootstrapSandboxBundle\Form\Type\ExampleDateTimeTest();

        $form = $this->createForm($dateTimeType, $dateTime);
        if ($this->getRequest()->getMethod() == 'POST')
        {
            $form->bindRequest($this->getRequest());

            if ($form->isValid())
            {
                // persist logic
            }
        }

        return array(
                'form' => $form->createView(),
                'formType' => $dateTimeType,
                'entity' => $dateTime
        );
    }
    /**
    * @Route("/mopa/bootstrap/forms/extended", name="mopa_bootstrap_forms_extended")
     * @Template
    */
    public function extendedAction(Request $request)
    {
        $form = $this->createForm($formType = new ExampleExtendedFormType());

        return array(
            'form'=>$form->createView(),
            'formType' => $formType
        );
    }
    /**
    * @Route("/mopa/bootstrap/forms/extended_view", name="mopa_bootstrap_forms_view_extended")
     * @Template
    */
    public function extended_viewAction(Request $request)
    {
        $form = $this->createForm($formType = new ExampleExtendedViewFormType());

        return array(
            'form'=>$form->createView(),
            'formType' => $formType
        );
    }
    /**
    * @Route("/mopa/bootstrap/forms/errors", name="mopa_bootstrap_forms_errors")
     * @Template
    */
    public function errorsAction(Request $request)
    {
        $form = $this->createForm($formType = new ExampleErrorsFormType());
        $form->bind(array(
            'textfield1' => 'nix',
            'textfield2' => "nothing",
            'textfield3' => "nothing"
        ));
        $form->isValid();

        return array(
            'form'=>$form->createView(),
            'formType' => $formType
        );
    }
    /**
    * @Route("/mopa/bootstrap/forms/collections", name="mopa_bootstrap_forms_collections")
    * @Template
    */
    public function collectionsAction(Request $request)
    {
        $form = $this->createForm($formType = new ExampleCollectionsFormType());
        $form->setData(array(
            "email_collection" => array(
                "phiamo@googlemail.com",
                "some@other.com",
            ),
            "nice_email_collection" => array(
                "some@other.com",
                "phiamo@googlemail.com",
            ),
            "dates_collection" => array(array(
                'startAt' => new \DateTime(),
                'endAt' => new \DateTime(),
            ))
        ));

        return array(
            'form'=>$form->createView(),
            'formType' => $formType
        );
    }
    /**
    * @Route("/mopa/bootstrap/forms/horizontal", name="mopa_bootstrap_forms_horizontal")
    * @Template
    */
    public function horizontalAction(Request $request)
    {
        $form = $this->createForm($formType = new ExampleHorizontalFormType());

        return array(
            'form'=>$form->createView(),
            'formType' => $formType
        );
    }
    /**
    * @Route("/mopa/bootstrap/forms/examples", name="mopa_bootstrap_forms_examples")
    * @Template
    */
    public function formsAction(Request $request)
    {
        $form = $this->createForm($formType = new ExampleFormsType());
        $searchform = $this->createForm(new ExampleSearchFormType());
        $inlineform = $this->createForm(new ExampleInlineFormType());

        return array(
            'form'=>$form->createView(),
            'searchform'=>$searchform->createView(),
            'inlineform'=>$inlineform->createView(),
            'formType' => $formType
        );
    }

    /**
    * @Route("/mopa/bootstrap/forms/choice", name="mopa_bootstrap_forms_choices")
     * @Template
    */
    public function choicesAction(Request $request)
    {
        $form = $this->createForm($formType = new ExampleChoiceFormType());

        return array(
            'form'=>$form->createView(),
            'formType' => $formType
        );
    }
    /**
    * @Route("/mopa/bootstrap/navbar", name="mopa_bootstrap_navbar")
    * @Template
    */
    public function navbarAction(Request $request)
    {
        return array();
    }
    /**
    * @Route("/mopa/bootstrap/components", name="mopa_bootstrap_components")
    * @Template
    */
    public function componentsAction(Request $request)
    {
        return array();
    }
    /**
    * @Route("/mopa/bootstrap/components/setflashs", name="mopa_bootstrap_components_setflashs")
    * @Template
    */
    public function componentsSetflashsAction(Request $request)
    {
        $this->get('session')->getFlashBag()->add('alert', 'Your changes were saved!');
        $this->get('session')->getFlashBag()->add('error', 'But we had an error showing you the wrong thing ;)');
        $this->get('session')->getFlashBag()->add('info', 'So please have a look into the controller how this works!');

        return $this->redirect(sprintf('%s#%s', $this->generateUrl('mopa_bootstrap_components'), 'flashes'));
    }

}
