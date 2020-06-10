<?php

namespace Customize\Controller\Admin\Customer;

use Eccube\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class CustomerController extends AbstractController
{
    /**
     * @Route("/%eccube_admin_route%/customer_channel", name="admin_customer_channel")
     * @Template("@admin/Customer/admin_customer_channel.html.twig")
     */
    public function index(Request $request)
    {

    }
}
