<?php

/**
 * Created by PhpStorm.
 * User: troll
 * Date: 23/04/17
 * Time: 15:18
 */
class Comment extends CommentManager
{

    private $id;

    private $title;

    private $author;

    private $content;

    private $add_date;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        return $this->id = $id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        return $this->title = $title;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function estAuthor($author)
    {
        return $this->author = $author;
    }

    public function setContent()
    {
        return $this->content;
    }

    public function getContent($content)
    {
        return $this->content = $content;
    }

    public function getAddDate()
    {
        return $this->add_date;
    }

    public function setAddDate($add_date)
    {
        return $this->add_date = $add_date;
    }
}