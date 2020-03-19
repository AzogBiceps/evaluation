<?php

namespace App\Controller;

use App\Form\SearchCityType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CityController extends AbstractController
{
    /**
     * @Route("/city", name="city")
     */
    public function index()
    {
        $form = $this->createForm(SearchCityType::class);

    }
}
