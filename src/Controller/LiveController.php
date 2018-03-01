<?php


namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;

class LiveController
{

    public function liveAction()
    {
        return new Response( "LIVE");
    }

    public function stopAction()
    {
        return new Response( "LIVE STOp");
    }

}