<?php
class Movie
{
    public $title;
    public $image;
    public $description;
    public $genres;

    function __construct(string $title, string $image, string $description, array $genres)
    {
        $this->title = $title;
        $this->image = $image;
        $this->description = $description;
        $this->genres = $genres;
    }
    public function getTitle()
    {
        return $this->title;
    }
    public function getImage()
    {
        return $this->image;
    }
}
