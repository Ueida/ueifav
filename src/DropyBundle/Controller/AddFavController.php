<?php

namespace DropyBundle\Controller;

use DropyBundle\Entity\Favoris;
use DropyBundle\Form\FavorisType;
use DropyBundle\Entity\Collections;
use DropyBundle\Form\CollectionsType;
use DropyBundle\Form\SearchType;
use DropyBundle\Entity\Search;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class AddFavController extends Controller
{
    public function indexAction()
    {
    	$content = $this->get('templating')->render('DropyBundle:Default:index.html.twig');
    	return new Response($content);
    }

    public function addFavAction(Request $request)
    {
    	$favori = new Favoris();
        
        $form = $this->get('form.factory')->create(new FavorisType, $favori);

        if ($form->handleRequest($request)->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($favori);
            $em->flush();

            unset($favori);
            unset($form);
            $favori = new Favoris();
            $form = $this->get('form.factory')->create(new FavorisType, $favori);

        }

    	$content = $this->get('templating')->render('DropyBundle:Default:add_fav.html.twig',
            array('form' => $form->createView(),
            ));
        return new Response($content);
    }

    public function addFavDAction()
    {
        $content = $this->get('templating')->render('DropyBundle:Default:add_fav.html.twig');
        return new Response($content);
    }

    public function addCollectionAction(Request $request)
    {
        $collect = new Collections();
        
        $form = $this->get('form.factory')->create(new CollectionsType, $collect);

        if ($form->handleRequest($request)->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($collect);
            $em->flush();

            unset($collect);
            unset($form);
            $collect = new Collections();
            $form = $this->get('form.factory')->create(new CollectionsType, $collect);
        }

        $content = $this->get('templating')->render('DropyBundle:Default:add_collect.html.twig',
            array('form' => $form->createView(),
            ));
        return new Response($content);
    }

    public function viewAction(Request $request)
    {
        $rep = $this->getDoctrine()
            ->getRepository('DropyBundle:Favoris');
        $favoris = $rep->findAll();

        $search = new Search();
        $form = $this->get('form.factory')->create(new SearchType, $search);

        if ($form->handleRequest($request)->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $searchval = $search->getSearchInput();

            // Changer avec QueryBuilder http://stackoverflow.com/questions/15229609/doctrine2-findby-two-columns-or-condition

            $query = $em->createQuery(
                'SELECT f
                FROM DropyBundle:Favoris f
                WHERE f.favName = :searchval
                OR f.favArtiste = :searchval
                OR f.favAdresse = :searchval
                OR f.favType = :searchval
                OR f.favTags = :tags
                ORDER BY f.favId ASC')
            ->setParameters(array('searchval' => $searchval, 'tags' => '%' . $searchval . '%'));

            $res = $query->getResult();
            $content = $this->get('templating')->render('DropyBundle:Default:view_all.html.twig',
            array('favoris' => $favoris,
                'form' => $form->createView(),
                'search' => $res,
                ));
        }
        else
        {
    	$content = $this->get('templating')->render('DropyBundle:Default:view_all.html.twig',
            array('favoris' => $favoris,
                'form' => $form->createView(),
                'search' => '',
                ));     
        }
    	return new Response($content);
    }
}
