<?php
/**
 * Created by PhpStorm.
 * User: alexey
 * Date: 19.07.2018
 * Time: 00:11
 */

namespace App\Controller\Index;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * Class IndexController
 * @package App\Controller
 */
class IndexController extends AbstractController
{
    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @throws \Exception
     */
    public function index()
    {
        $number = random_int(0, 100);

        return $this->render('index.html.twig');
//        return new Response(
//            '<html><body>Lucky number: '.$number.'</body></html>'
//        );
    }
}