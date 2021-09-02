<?php


class Med
{
    private $name;
    private $description;
    private $group;
    private $image;

    public function __construct($name, $description, $group, $image)
    {
        $this->name = $name;
        $this->description = $description;
        $this->group = $group;
        $this->image = $image;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name): void
    {
        $this->name = $name;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description): void
    {
        $this->description = $description;
    }

    public function getGroup()
    {
        return $this->group;
    }

    public function setGroup($group): void
    {
        $this->group = $group;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image): void
    {
        $this->image = $image;
    }




}