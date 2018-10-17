<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\DunnaEstatesRepository")
 */
class DunnaEstates
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $city_key;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $city_area_key;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $street_name_key;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $street_number;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $property_type_key;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $google_coordinates;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $price;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $area;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $rooms;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $floor;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $deal_type_key;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $contact_person_key;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $url;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $creation_date;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCityKey(): ?int
    {
        return $this->city_key;
    }

    public function setCityKey(?int $city_key): self
    {
        $this->city_key = $city_key;

        return $this;
    }

    public function getCityAreaKey(): ?int
    {
        return $this->city_area_key;
    }

    public function setCityAreaKey(?int $city_area_key): self
    {
        $this->city_area_key = $city_area_key;

        return $this;
    }

    public function getStreetNameKey(): ?int
    {
        return $this->street_name_key;
    }

    public function setStreetNameKey(?int $street_name_key): self
    {
        $this->street_name_key = $street_name_key;

        return $this;
    }

    public function getStreetNumber(): ?int
    {
        return $this->street_number;
    }

    public function setStreetNumber(?int $street_number): self
    {
        $this->street_number = $street_number;

        return $this;
    }

    public function getPropertyTypeKey(): ?int
    {
        return $this->property_type_key;
    }

    public function setPropertyTypeKey(?int $property_type_key): self
    {
        $this->property_type_key = $property_type_key;

        return $this;
    }

    public function getGoogleCoordinates(): ?string
    {
        return $this->google_coordinates;
    }

    public function setGoogleCoordinates(?string $google_coordinates): self
    {
        $this->google_coordinates = $google_coordinates;

        return $this;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(?float $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getArea(): ?int
    {
        return $this->area;
    }

    public function setArea(?int $area): self
    {
        $this->area = $area;

        return $this;
    }

    public function getRooms(): ?int
    {
        return $this->rooms;
    }

    public function setRooms(?int $rooms): self
    {
        $this->rooms = $rooms;

        return $this;
    }

    public function getFloor(): ?int
    {
        return $this->floor;
    }

    public function setFloor(?int $floor): self
    {
        $this->floor = $floor;

        return $this;
    }

    public function getDealTypeKey(): ?int
    {
        return $this->deal_type_key;
    }

    public function setDealTypeKey(?int $deal_type_key): self
    {
        $this->deal_type_key = $deal_type_key;

        return $this;
    }

    public function getContactPersonKey(): ?int
    {
        return $this->contact_person_key;
    }

    public function setContactPersonKey(?int $contact_person_key): self
    {
        $this->contact_person_key = $contact_person_key;

        return $this;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(?string $url): self
    {
        $this->url = $url;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getCreationDate(): ?\DateTimeInterface
    {
        return $this->creation_date;
    }

    public function setCreationDate(?\DateTimeInterface $creation_date): self
    {
        $this->creation_date = $creation_date;

        return $this;
    }
}
