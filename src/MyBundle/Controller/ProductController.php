<?php

namespace MyBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\File\File;
use MyBundle\Entity\Product;
use MyBundle\Form\ProductType;

class ProductController extends Controller
{
    /**
     * @Route("/product/list", name="product_list")
     */
    public function listAction(Request $request)
    {
        if(!isset($_GET['q'])){
            $products = $this->getDoctrine()->getManager()->getRepository('MyBundle:Product')->findBy([], ['created' => 'DESC']);
        }else{
            $q = strtolower(strip_tags($_GET['q']));
            $products = $this->getDoctrine()->getManager()->getRepository('MyBundle:Product')
            ->createQueryBuilder('p')
            ->where('p.name LIKE :q')
            ->orWhere('p.tags LIKE :q')
            ->setParameter('q', '%'.$q.'%')
            ->orderBy('p.created', 'DESC')
            ->getQuery()
            ->getResult();
        }
        
        return $this->render('product/list.html.twig', array('products' => $products));
    }

    /**
     * @Route("/product/create", name="product_create")
     */
    public function createAction(Request $request)
    {
        $product = new Product();
        $form = $this->createForm(ProductType::class, $product);
        
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            // setto data now
            $product->setCreated(new \DateTime());
            
            // immagine
            $uploaded = $product->getImage();
            if($uploaded != null){
                $fileName = md5(uniqid()).'.'.$uploaded->guessExtension();
                $imagesDir = $this->container->getParameter('kernel.root_dir').'/../web/uploads/products';
                $uploaded->move($imagesDir, $fileName);
                $product->setImage($fileName);
            }else{
                $product->setImage("empty.png");
            }
            
            // Pulizia "tags"
            $tagsUniq = array();
            $tags = explode(',', $product->getTags());
            foreach($tags as &$t){
                $t = trim($t);
                if(!in_array($t, $tagsUniq)){
                    $tagsUniq[] = $t;
                }
            }
            sort($tagsUniq);
            $product->setTags(implode(', ', $tagsUniq));
            
            // save
            $em = $this->getDoctrine()->getManager();
            $em->persist($product);
            $em->flush();

            return $this->redirectToRoute('product_list');
        }

        return $this->render('product/create.html.twig', array('form' => $form->createView()));
    }

    /**
     * @Route("/product/{id}/edit", name="product_edit")
     */
    public function editAction($id, Request $request)
    {
        $product = $this->getDoctrine()->getManager()->getRepository('MyBundle:Product')->find($id);
        $productImage = $product->getImage();
        if (!$product) throw $this->createNotFoundException("Prodotto non trovato con ID: ".$id);
        
        $form = $this->createForm(ProductType::class, $product);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            // immagine
            $uploaded = $product->getImage();
            if($uploaded != null && trim($uploaded) != ""){
                $fileName = md5(uniqid()).'.'.$uploaded->guessExtension();
                $imagesDir = $this->container->getParameter('kernel.root_dir').'/../web/uploads/products';
                $uploaded->move($imagesDir, $fileName);
                $product->setImage($fileName);
            }else{
                $product->setImage($productImage);
            }
            
            // Pulizia "tags"
            $tagsUniq = array();
            $tags = explode(',', $product->getTags());
            foreach($tags as &$t){
                $t = trim($t);
                if(!in_array($t, $tagsUniq)){
                    $tagsUniq[] = $t;
                }
            }
            sort($tagsUniq);
            $product->setTags(implode(', ', $tagsUniq));
            
            // save
            $em = $this->getDoctrine()->getManager();
            $em->persist($product);
            $em->flush();

            return $this->redirectToRoute('product_list');
        }

        return $this->render('product/edit.html.twig', array('form' => $form->createView(), 'product' => $product));
    }
    
    /**
     * @Route("/product/{id}/view", name="product_view")
     */
    public function viewAction(Product $product)
    {
        return $this->render('product/view.html.twig', array('product' => $product));
    }
    
    /**
     * @Route("/product/{id}/delete", name="product_delete")
     */
    public function deleteAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $product = $em->getRepository('MyBundle:Product')->find($id);
        if (!$product) {
            throw $this->createNotFoundException("Prodotto non trovato con ID: ".$id);
        }
        $em->remove($product);
        $em->flush();
        
        return $this->redirectToRoute('product_list');
    }
}
