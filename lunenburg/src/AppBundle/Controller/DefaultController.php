<?php

namespace AppBundle\Controller;
use AppBundle\Entity\Bestelling;
use AppBundle\Form\BestellingType;
use AppBundle\Entity\Goederenontvangst;
use AppBundle\Entity\bestelregel;
use AppBundle\Form\BestelopdrachtType;
use AppBundle\Form\ProductType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
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

        return new Response($this->renderView('form.html.twig', array('form' => $form->createView())));
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

        return new Response($this->renderView('form.html.twig', array('form' => $form->createView())));
    }

    /**
     * @Route ("/producten", name="alleproducten")
     */
    public function alleProducten(Request $request){
        $producten = $this->getDoctrine()->getRepository("AppBundle:Product")->findAll();

        return new Response($this->renderView('producten.html.twig', array('producten' => $producten)));
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
        return new Response($this->renderView('voorraad.html.twig', array('producten' => $producten)));
    }

//    /**
//     * @Route ("/bestelopdracht/nieuw ", name="nieuwebestelopdracht")
//     */
//    public function nieuweBestelopdracht(Request $request){
//        $nieuweBestelopdracht = new Bestelopdracht();
//        $form = $this->createForm(BestelopdrachtType::class, $nieuweBestelopdracht);
//        $form->handleRequest($request);
//
//        if ($form->isSubmitted() && $form->isValid()) {
//            $em = $this->getDoctrine()->getManager();
//            $em->persist($nieuweBestelopdracht);
//            $em->flush();
//
//            return $this->redirect($this->generateurl("nieuwebestelopdracht"));
//        }
//        return new Response($this->render('form.html.twig', array('form' => $form->createView())));
//    }

    /**
     * @Route ("/bestelopdracht/wijzig/{id} ", name="wijzigbestelopdracht")
     */
    public function wijzigBestelopdracht(Request $request, $id){
        $bestaandeProduct = $this->getDoctrine()->getRepository("AppBundle:Bestelling")->find($id);
        $form = $this->createForm(BestelopdrachtType::class, $bestaandeProduct);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($bestaandeProduct);
            $em->flush();
            return $this->redirect($this->generateurl("wijzigbestelopdracht", array("id" => $bestaandeProduct->getId())));
        }
        return new Response($this->renderView('form.html.twig', array('form' => $form->createView())));
    }

    /**
     * @Route ("/bestelopdracht/verwijder/{id} ", name="verwijderbestelopdracht")
     */
    public function verwijderBestelopdracht(Request $request, $id){
        $em = $this->getDoctrine()->getManager();
        $bestaandeBestelopdracht = $em->getRepository("AppBundle:Bestelling")->find($id);
        $em->remove($bestaandeBestelopdracht);
        $em->flush();
        return new Response($this->redirect($this->generateurl("allebestelopdrachten")));
    }

    /**
     * @Route ("/bestelopdrachten", name="allebestelopdrachten")
     */
    public function alleBestellingen(Request $request){
//        $bestelopdrachten = $this->getDoctrine()->getRepository("AppBundle:Bestelling")->findAll();
        $bestellingen = $this->getDoctrine()->getRepository("AppBundle:Bestelling")->findAll();
        $bestelregels = $this->getDoctrine()->getRepository("AppBundle:Bestelregel")->findAll();
        return new Response($this->renderView('bestellingen.html.twig', array('bestellingen' => $bestellingen, 'bestelregels' => $bestelregels)));
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
            $this->addFlash(
                'notice',
                'Artikel(en) zijn toegevoegd.'
            );
            return $this->redirect($this->generateurl("nieuweontvangst"));
        }
        return new Response($this->renderView('form.html.twig', array('form' => $form->createView())));
    }


    /**
     * @Route ("/goederen/ontvangen", name="ontvangengoederen")
     */
    public function ontvangenGoederen(Request $request){
        $ontvangen = $this->getDoctrine()->getRepository("AppBundle:Goederenontvangst")->findAll();
        $producten = $this->getDoctrine()->getRepository("AppBundle:Product")->findAll();


        return new Response($this->renderView('ontvangengoederen.html.twig', array('ontvangengoederen' => $ontvangen, 'producten' => $producten)));
    }

    /**
     * @Route ("/bestelopdracht/nieuw ", name="nieuwebestelopdracht")
     */
    public function nieuweBestelling (Request $request) {
        $nieuweBestelling = new Bestelling();
        $form = $this->createForm(BestellingType::class, $nieuweBestelling);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            foreach ($nieuweBestelling->getBestelregels() as $bestelregel) {
                $bestelregel->setBestellingId($nieuweBestelling);
            }

            $em = $this->getDoctrine()->getManager();
            $em->persist($nieuweBestelling);
            $em->flush();
            return $this->redirect($this->generateurl("allebestelopdrachten"));
        }

        //Verwijzing naar formulier
        return $this->render('formbestel.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
