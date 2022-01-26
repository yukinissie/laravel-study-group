<?php
declare(strict_types=1);

namespace App\Entities;

class Movie {
    protected $id;
    protected $title;
    protected $imageUrl;

    public function __construct(Int $id, String $title, String $imageUrl)
    {
        $this->$id = $id;
        $this->$title = $title;
        $this->$imageUrl = $imageUrl;
    }

    public function getId(): Int
    {
        return $this->$id;
    }

    public function getTitle(): String
    {
        return $this->$title;
    }

    public function getImageUrl(): String
    {
        return $this->$imageUrl;
    }
}
