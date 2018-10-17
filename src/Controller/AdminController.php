<?php

namespace App\Controller;

use App\Entity\CityArea;
use App\Entity\Citys;
use App\Entity\DealType;
use App\Entity\DunnaEstates;
use App\Entity\PropertyType;
use App\Entity\Streets;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index()
    {
        return $this->render('admin/index.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }

    /**
     * @Route("/admin/save", name="save")
     */
    public function saveNewEstate(Request $request)
    {
        $estates = new DunnaEstates();

        $propertyDetails = [
            'city' => $request->get('city'),
            'city_area' => $request->get('city_area'),
            'street' => $request->get('street'),
            'street_number' => $request->get('street_number'),
            'google_coordinates' => $request->get('google_coordinates'),
            'property_type' => $request->get('property_type'),
            'price' => $request->get('price'),
            'area' => $request->get('area'),
            'rooms' => $request->get('rooms'),
            'floor' => $request->get('floor'),
            'deal_type' => $request->get('deal_type'),
            'description' => $request->get('description'),
        ];

        $em =  $this->getDoctrine()->getManager();

        $estates->setCityKey($this->saveCity($propertyDetails['city'], $em));
        $estates->setCityAreaKey($this->saveCityArea($propertyDetails['city_area'], $em));
        $estates->setStreetNameKey($this->saveStreetName($propertyDetails['street'], $em));
        $estates->setStreetNumber((int) $propertyDetails['street_number']);
        $estates->setGoogleCoordinates($propertyDetails['google_coordinates']);
        $estates->setPropertyTypeKey($this->savePropertyType($propertyDetails['property_type'], $em));
        $estates->setPrice((float) $propertyDetails['price']);
        $estates->setArea((int) $propertyDetails['area']);
        $estates->setRooms((int) $propertyDetails['rooms']);
        $estates->setFloor((int) $propertyDetails['floor']);
        $estates->setDealTypeKey($this->saveDealType($propertyDetails['deal_type'], $em));
        $estates->setDescription($propertyDetails['description']);
        $em->persist($estates);
        $em->flush();
        dump('YES');
        exit();
        return new JsonResponse('Success', true);
    }

    public function saveCity($city, $em)
    {
        /** @var Citys $cityEntity */
        $cityEntity = $this->getDoctrine()->getRepository(Citys::class)->findOneBy(['city' => $city]);
        if(!$cityEntity) {
            $cityEntity = new Citys();
            $cityEntity->setCity($city);
            $em->persist($cityEntity);
            $em->flush();
        }

        return $cityEntity->getId();
    }

    public function saveCityArea($cityArea, $em)
    {
        /** @var CityArea $cityAreaEntity */
        $cityAreaEntity = $this->getDoctrine()->getRepository(CityArea::class)->findOneBy(['name' => $cityArea]);
        if (!$cityAreaEntity) {
            $cityAreaEntity = new CityArea();
            $cityAreaEntity->setName($cityArea);
            $em->persist($cityAreaEntity);
            $em->flush();
        }
        return $cityAreaEntity->getId();
    }

    public function saveStreetName($streetName, $em)
    {
        /** @var Streets $streetsEntity */
        $streetsEntity = $this->getDoctrine()->getRepository(Streets::class)->findOneBy(['name' => $streetName]);
        if (!$streetsEntity) {
            $streetsEntity = new Streets();
            $streetsEntity->setName($streetName);
            $em->persist($streetsEntity);
            $em->flush();
        }
        return $streetsEntity->getId();
    }

    public function savePropertyType($propertyType, $em)
    {
        /** @var PropertyType $propertyTypeEntity */
        $propertyTypeEntity = $this->getDoctrine()->getRepository(PropertyType::class)->findOneBy(['type' => $propertyType]);
        if (!$propertyTypeEntity) {
            $propertyTypeEntity = new PropertyType();
            $propertyTypeEntity->setType($propertyType);
            $em->persist($propertyTypeEntity);
            $em->flush();
        }
        return $propertyTypeEntity->getId();
    }

    public function saveDealType($dealType, $em)
    {
        /** @var DealType $dealTypeEntity */
        $dealTypeEntity = $this->getDoctrine()->getRepository(DealType::class)->findOneBy(['name' => $dealType]);
        if (!$dealTypeEntity) {
            $dealTypeEntity = new DealType();
            $dealTypeEntity->setName($dealType);
            $em->persist($dealTypeEntity);
            $em->flush();
        }
        return $dealTypeEntity->getId();
    }

}
