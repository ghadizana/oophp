<?php

/*
- disebut return hinting
*/

interface PostInterface {
    public function getTitle(): string;
    public function getContent(): string;
}

class Post implements PostInterface {
    private $title;
    private $content;

    public function __construct(string $title, string $content) {
        $this->title = $title;
        $this->content = $content;
    }

    public function getTitle(): string {
        return $this->title;
    }

    public function getContent(): string {
        return $this->content;
    }
}