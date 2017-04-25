<?php

/**
 * Created by PhpStorm.
 * User: troll
 * Date: 17/04/17
 * Time: 11:42
 */
class Article
{

    private $id;

    private $title;

    private $content;

    private $add_date;


    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function setContent($content)
    {
        $this->content = $content;
    }

    public function getAddDate()
    {
        return $this->add_date;
    }

    public function setAddDate($add_date)
    {
        $this->add_date = $add_date;
    }

}