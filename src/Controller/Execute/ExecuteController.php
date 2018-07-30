<?php
/**
 * Created by PhpStorm.
 * User: alexey
 * Date: 19.07.2018
 * Time: 00:11
 */

namespace App\Controller\Execute;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * Class IndexController
 * @package App\Controller
 */
class ExecuteController extends AbstractController
{
    /**
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     * @throws \Exception
     */
    public function execute(Request $request)
    {

        $code = $request->request->get('code');
        
        return new JsonResponse($code);

    }
}