<?php
/**
 * Created by PhpStorm.
 * User: seven
 * Date: 09.09.14
 * Time: 17:19
 */

namespace NetBox\Bundle\DashboardBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * Class DefaultController
 * @package NetBox\Bundle\DashboardBundle\Controller
 */
class DefaultController extends Controller
{
    /**
     * @Route("/", name="dashboard")
     * @Template
     */
    public function indexAction()
    {
        return [
            'layout' => 'NetBoxDashboardBundle::base.html.twig'
        ];
    }
} 