<?php

require 'Article.php';

/**
 * Created by PhpStorm.
 * User: troll
 * Date: 23/04/17
 * Time: 17:02
 */
class ArticleManager extends  EntityManager
{
    private $bdd;

    public function __construct($bdd)
    {
        $this->bdd = $bdd;
    }
    

    // Create
    public function addArticle(Article $article)
    {
        $sql = $this->bdd->prepare('INSERT INTO article (:title, :author, :content, :add_date) VALUES (?, ?, ?, ?)');

        $sql->bindValue(':title', $article->setTitle());
        $sql->bindValue(':author', $article->setAuthor());
        $sql->bindValue(':content', $article->setContent());
        $sql->bindValue(':add_date', $article->setAddDate());

        $sql->execute();


    }

    // Read
    public function getArticle()
    {

        $sql = 'SELECT * FROM article';

        return $sql;

    }

    // Update
    public function editArticle(Article $article)
    {
        $sql = $this->bdd->prepare('UPDATE article SET title = :title, author = :author, content = :content, add_date = :add_date WHERE id = :id');

        $sql->bindValue(':title', $article->setTitle(), PDO::PARAM_STR);
        $sql->binValue(':author', $article->setAuthor(), PDO::PARAM_STR);
        $sql->bindValue(':content', $article->setContent(), PDO::PARAM_STR);
        $sql->bindValue(':add_date', $article->setAddDate(), PDO::PARAM_STR);
        $sql->bindValue(':id', $article->setId(), PDO::PARAM_INT);

        $sql->execute();
    }

    // Delete
    public function deleteArticle(Article $article)
    {
        $sql = $this->bdd->prepare('DELETE * FROM article WHERE id = :id');

        $sql->bindValue(':id', $article->getId());
        $sql->execute();

    }



}