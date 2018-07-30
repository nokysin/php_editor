<?php
/**
 * Created by PhpStorm.
 * User: alexey
 * Date: 19.07.2018
 * Time: 00:11
 */

namespace App\Controller\Execute;

use App\Services\FileManager;
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
    public function execute(Request $request, FileManager $fileManager)
    {
        $code = $request->request->get('code');

        $filepath = $fileManager->run($code);
        $fileManager->delete($filepath);

        // execute
//        $fileManager->delete();

        return new JsonResponse($code);

    }
}