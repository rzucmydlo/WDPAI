<?php


class Post {
    private $image;
    private $likes;
    private $dislikes;
    private $description;

    public function __construct(string $image, int $likes, int $dislikes, string $description)
    {
        $this->image = $image;
        $this->likes = $likes;
        $this->dislikes = $dislikes;
        $this->description = $description;
    }

    public function getImage(): string 
    {
        return $this->image;
    }

    public function getLikes(): int
    {
        return $this->likes;
    }

    public function getDislikes(): int
    {
        return $this->dislikes;
    }

    public function getDescription(): string
    {
        return $this->description;
    }
}