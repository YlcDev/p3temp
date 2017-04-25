<?php

require 'Article.php';

/**
 * Created by PhpStorm.
 * User: troll
 * Date: 23/04/17
 * Time: 17:02
 */
class ArticleManager extends Article
{
    public function hydrate(array $donnees)
    {
        if (isset($donnees['id']))
        {
            $this->setId($donnees['id']);
        }

        if (isset($donnees['title']))
        {
            $this->setTitle($donnees['title']);
        }

        if (isset($donnees['content']))
        {
            $this->setContent($donnees['content']);
        }

        if (isset($donnees['add_date']))
        {
            $this->setAddDate($donnees['add_date']);
        }
    }

    public function __construct()
    {

    }

    // Create
    public function addArticle(Article $article)
    {

    }

    // Read
    public function getArticle()
    {

    }

    // Update
    public function editArticle(Article $article)
    {

    }

    //Delete
    public function deleteArticle(Article $article)
    {

    }



}