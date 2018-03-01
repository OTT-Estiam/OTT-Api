<?php


namespace App\Controller;
use App\Entity\Vod;
use Symfony\Component\HttpFoundation\Response;
use App\Form\VodType;
use Symfony\Component\HttpFoundation\Request;
use FOS\RestBundle\Controller\Annotations as Rest;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class VodController extends Controller
{
    /**
     * @Rest\Post
     */
    public function addAction(Request $request)
    {
        $vod = new Vod();
        $form = $this->createForm(VodType::class, $vod);
        $form->submit($request->request->all()); // Validation des données

        if ($form->isValid()) {
            $em = $this->get('doctrine.orm.entity_manager');
            $em->persist($vod);
            $em->flush();
            return new Response("OK");
        } else {
            return $form;
        }
    }

    public function replayAction()
    {
        return new Response( "REPLAY OK");
    }
}