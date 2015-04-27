<?php

namespace Mopa\Bundle\BootstrapSandboxBundle\Controller;

use Mopa\Bundle\BootstrapSandboxBundle\Entity\DateTimeTest;
use Mopa\Bundle\BootstrapSandboxBundle\Form\Type\ExampleChoiceFormType;
use Mopa\Bundle\BootstrapSandboxBundle\Form\Type\ExampleCollectionsFormType;
use Mopa\Bundle\BootstrapSandboxBundle\Form\Type\ExampleDateTimeTest;
use Mopa\Bundle\BootstrapSandboxBundle\Form\Type\ExampleErrorsFormType;
use Mopa\Bundle\BootstrapSandboxBundle\Form\Type\ExampleExtendedFormType;
use Mopa\Bundle\BootstrapSandboxBundle\Form\Type\ExampleExtendedViewFormType;
use Mopa\Bundle\BootstrapSandboxBundle\Form\Type\ExampleFormsType;
use Mopa\Bundle\BootstrapSandboxBundle\Form\Type\ExampleHelpTextFormType;
use Mopa\Bundle\BootstrapSandboxBundle\Form\Type\ExampleHorizontalFormType;
use Mopa\Bundle\BootstrapSandboxBundle\Form\Type\ExampleInlineFormType;
use Mopa\Bundle\BootstrapSandboxBundle\Form\Type\ExampleNestedCollectionParentType;
use Mopa\Bundle\BootstrapSandboxBundle\Form\Type\ExampleSearchFormType;
use Mopa\Bundle\BootstrapSandboxBundle\Form\Type\ExampleTabsFormType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Kernel;

class ExamplesController extends Controller
{
    /**
     * @Route("/mopa/bootstrap", name="mopa_bootstrap_welcome")
     * @Template
     * @param Request $request
     * @return array
     */
    public function indexAction(Request $request)
    {
        return array("version" => Kernel::VERSION);
    }

    /**
     * @Route("/mopa/bootstrap/layout", name="mopa_bootstrap_layout_example")
     * @Template
     * @param Request $request
     * @return array
     */
    public function layoutAction(Request $request)
    {
        return array();
    }

    /**
     * @Route("/mopa/bootstrap/forms/embeddedTypes", name="mopa_bootstrap_forms_embeddedtype")
     * @Template
     * @param Request $request
     * @return array
     */
    public function embeddedTypeAction(Request $request)
    {
        $dateTime = new DateTimeTest();
        $dateTimeType = new ExampleDateTimeTest();

        $form = $this->createForm($dateTimeType, $dateTime);
        if ($this->getRequest()->getMethod() == 'POST') {
            $form->bindRequest($this->getRequest());

            if ($form->isValid()) {
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
     * @param Request $request
     * @return array
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
     * @param Request $request
     * @return array
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
     * @param Request $request
     * @return array
     */
    public function errorsAction(Request $request)
    {
        $form = $this->createForm($formType = new ExampleErrorsFormType());
        $form->submit(array(
            'textfield1' => 'nix',
            'textfield2' => "nothing",
            'textfield3' => "nothing",
            "textarea" => "nothing",
        ));
        $form->isValid();

        return array(
            'form'=>$form->createView(),
            'formType' => $formType,
        );
    }

    /**
     * @Route("/mopa/bootstrap/forms/help_texts", name="mopa_bootstrap_forms_helptexts")
     * @Template
     * @param Request $request
     * @return array
     */
    public function helpTextsAction(Request $request)
    {
        $form = $this->createForm($formType = new ExampleHelpTextFormType());

        return array(
            'form'=>$form->createView(),
            'formType' => $formType
        );
    }

    /**
     * @Route("/mopa/bootstrap/forms/collections", name="mopa_bootstrap_forms_collections")
     * @Template
     * @param Request $request
     * @return array
     */
    public function collectionsAction(Request $request)
    {
        $this->get('twig')->addExtension(new \Twig_Extension_Debug);

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
            "nice_email_collection_with_options" => array(
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
     * @Route("/mopa/bootstrap/forms/collections/nested", name="mopa_bootstrap_forms_collections_nested")
     * @Template
     * @param Request $request
     * @return array
     */
    public function nestedCollectionsAction(Request $request)
    {

        $form = $this->createForm($formType = new ExampleNestedCollectionParentType());

        return array(
            'form'=>$form->createView(),
            'formType' => $formType
        );
    }

    /**
     * @Route("/mopa/bootstrap/forms/horizontal", name="mopa_bootstrap_forms_horizontal")
     * @Template
     * @param Request $request
     * @return array
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
     * @param Request $request
     * @return array
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
     * @param Request $request
     * @return array
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
     * @param Request $request
     * @return array
     */
    public function navbarAction(Request $request)
    {
        return array();
    }

    /**
     * @Route("/mopa/bootstrap/components", name="mopa_bootstrap_components")
     * @Template
     * @param Request $request
     * @return array
     */
    public function componentsAction(Request $request)
    {
        return array();
    }

    /**
     * @Route("/mopa/bootstrap/components/setflashs", name="mopa_bootstrap_components_setflashs")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function componentsSetflashsAction(Request $request)
    {
        $this->get('session')->getFlashBag()->add('warning', 'Your changes were saved!');
        $this->get('session')->getFlashBag()->add('danger', 'But we had an error showing you the wrong thing ;)');
        $this->get('session')->getFlashBag()->add('info', 'So please have a look into the controller how this works!');

        return $this->redirect(sprintf('%s#%s', $this->generateUrl('mopa_bootstrap_components'), 'flashes'));
    }

    /**
     * @Route("/mopa/bootstrap/tabs", name="mopa_bootstrap_forms_tabs")
     * @Template()
     * @param Request $request
     * @return array
     */
    public function tabsAction(Request $request)
    {
        $form = $this->createForm($formType = new ExampleTabsFormType());

        if ($request->getMethod() === 'POST') {
            $form->handleRequest($request);
        }

        return array(
            'formType' => $formType,
            'form' => $form->createView(),
        );
    }

}
