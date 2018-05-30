<?php

namespace AppBundle\Controller;
use AppBundle\Entity\Bestelopdracht;
use AppBundle\Entity\Goederenontvangst;
use AppBundle\Form\BestelopdrachtType;
use AppBundle\Form\ProductType;
use AppBundle\Form\Type\GoederenontvangstType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Product;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route ("/product/nieuw ", name="nieuwproduct")
     */
    public function nieuwProduct(Request $request){
        $nieuwProduct = new Product();
        $form = $this->createForm(ProductType::class, $nieuwProduct);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($nieuwProduct);
            $em->flush();
            return $this->redirect($this->generateurl("nieuwproduct"));
        }

        return new Response($this->render('form.html.twig', array('form' => $form->createView())));
    }

    /**
     * @Route ("/product/wijzig/{id} ", name="wijzigproduct")
     */
    public function wijzigProduct(Request $request, $id){
        $bestaandProduct = $this->getDoctrine()->getRepository("AppBundle:Product")->find($id);
        $form = $this->createForm(ProductType::class, $bestaandProduct);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($bestaandProduct);
            $em->flush();
            return $this->redirect($this->generateurl("wijzigproduct", array("id" => $bestaandProduct->getId())));
        }

        return new Response($this->render('form.html.twig', array('form' => $form->createView())));
    }

    /**
     * @Route ("/producten", name="alleproducten")
     */
    public function alleProducten(Request $request){
        $producten = $this->getDoctrine()->getRepository("AppBundle:Product")->findAll();

        return new Response($this->render('producten.html.twig', array('producten' => $producten)));
    }

    /**
     * @Route ("/product/verwijder/{id} ", name="verwijderproduct")
     */
    public function verwijderProduct(Request $request, $id){
        $em = $this->getDoctrine()->getManager();
        $bestaandeProduct = $em->getRepository("AppBundle:Product")->find($id);
        $em->remove($bestaandeProduct);
        $em->flush();



        return new Response($this->redirect($this->generateurl("alleproducten")));
    }

    /**
     * @Route ("/voorraad", name="voorraad")
     */
    public function voorraad(Request $request){
        $producten = $this->getDoctrine()->getRepository("AppBundle:Product")->findAll();
//        $voorraad = $this->getDoctrine()->getRepository("Appbundle:Voorraad");
        return new Response($this->render('voorraad.html.twig', array('producten' => $producten)));
    }

    /**
     * @Route ("/bestelopdracht/nieuw ", name="nieuwebestelopdracht")
     */
    public function nieuweBestelopdracht(Request $request){
        $nieuweBestelopdracht = new Bestelopdracht();
        $form = $this->createForm(BestelopdrachtType::class, $nieuweBestelopdracht);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($nieuweBestelopdracht);
            $em->flush();
            return $this->redirect($this->generateurl("nieuwebestelopdracht"));
        }
        return new Response($this->render('form.html.twig', array('form' => $form->createView())));
    }

    /**
     * @Route ("/bestelopdracht/wijzig/{id} ", name="wijzigbestelopdracht")
     */
    public function wijzigBestelopdracht(Request $request, $id){
        $bestaandeProduct = $this->getDoctrine()->getRepository("AppBundle:Product")->find($id);
        $form = $this->createForm(ProductType::class, $bestaandeProduct);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($bestaandeProduct);
            $em->flush();
            return $this->redirect($this->generateurl("bestelopdrachtwijzigen", array("id" => $bestaandeProduct->getId())));
        }
        return new Response($this->render('form.html.twig', array('form' => $form->createView())));
    }

    /**
     * @Route ("/bestelopdracht/verwijder/{id} ", name="verwijderbestelopdracht")
     */
    public function verwijderBestelopdracht(Request $request, $id){
        $em = $this->getDoctrine()->getManager();
        $bestaandeBestelopdracht = $em->getRepository("AppBundle:Bestelopdracht")->find($id);
        $em->remove($bestaandeBestelopdracht);
        $em->flush();
        return new Response($this->redirect($this->generateurl("allebesteldrachten")));
    }

    /**
     * @Route ("/bestelopdrachten", name="allebestelopdrachten")
     */
    public function alleBestelopdrachten(Request $request){
        $bestelopdrachten = $this->getDoctrine()->getRepository("AppBundle:Bestelopdracht")->findAll();

        return new Response($this->render('bestellingen.html.twig', array('bestellingen' => $bestelopdrachten)));
    }

    /**
     * @Route ("/ontvangst/nieuw", name="nieuweontvangst")
     */
    public function nieuweGoederen(Request $request){
        $nieuweGoederen = new Goederenontvangst();
        $form = $this->createForm(\AppBundle\Form\GoederenontvangstType::class, $nieuweGoederen);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($nieuweGoederen);
            $em->flush();
            return $this->redirect($this->generateurl("nieuweontvangst"));
        }
        return new Response($this->render('form.html.twig', array('form' => $form->createView())));
    }


    /**
     * @Route ("/goederen/ontvangen", name="ontvangengoederen")
     */
    public function ontvangenGoederen(Request $request){
        $ontvangen = $this->getDoctrine()->getRepository("AppBundle:Goederenontvangst")->findAll();
        return new Response($this->render('ontvangengoederen.html.twig', array('ontvangengoederen' => $ontvangen)));
    }


}
