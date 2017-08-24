<?php


/**
 * Created by PhpStorm.
 * User: troll
 * Date: 23/04/17
 * Time: 17:02
 */
class ArticleManager extends BddManager
{

    

    // Create
    public function addArticle(Article $article)
    {
        $bdd = $this->bdd;

        $sql = $bdd->prepare('INSERT INTO article (title, author, content, add_date) VALUES (:title, :author, :content, :add_date)');

        $sql->bindValue(':title', $article->setTitle(), PDO::PARAM_STR);
        $sql->binValue(':author', $article->setAuthor(), PDO::PARAM_STR);
        $sql->bindValue(':content', $article->setContent(), PDO::PARAM_STR);
        $sql->bindValue(':add_date', $article->setAddDate(), PDO::PARAM_STR);
        $sql->bindValue(':id', $article->setId(), PDO::PARAM_INT);

        $sql->execute();

        return $this;


    }

    // Read
    /**
     * recuperation des articles
     * @return array
     *
     */
    public function getArticles()
    {
        $bdd = $this->getBdd();
        $query = "SELECT * FROM article";
        $req = $bdd->prepare($query);
        $req->execute();

        while($row = $req->fetch(PDO::FETCH_ASSOC)) {
            $article = new Article();
            $article->hydrate($row);
            $articles[] = $article;
        }
        return $articles;

    }

    // Update
    public function editArticle(Article $article)
    {
        $bdd = $this->bdd;
        $sql = $bdd->prepare('UPDATE article SET title = :title, author = :author, content = :content, add_date = :add_date WHERE id = :id');

        $sql->bindValue(':title', $article->setTitle(), PDO::PARAM_STR);
        $sql->binValue(':author', $article->setAuthor(), PDO::PARAM_STR);
        $sql->bindValue(':content', $article->setContent(), PDO::PARAM_STR);
        $sql->bindValue(':add_date', $article->setAddDate(), PDO::PARAM_STR);
        $sql->bindValue(':id', $article->setId(), PDO::PARAM_INT);

        $sql->execute(
            array(
                'title' => $article->getTitle(),
                'author' => $article->getAuthor(),
                'content' => $article->getContent(),
                'add_date' => $article->getAddDate(),
                'id' => $article->getId()
            )
        );
        return $this;
    }

    // Delete
    public function deleteArticle(Article $article)
    {
        $sql = $this->bdd->prepare('DELETE * FROM article WHERE id = :id');

        $sql->bindValue(':id', $article->getId());
        $sql->execute();

    }

    public function lastArticle()
    {
        // connection bdd
        $bdd = $this->getBdd();

        // passage de la requete en SQL
        $query = "SELECT * FROM article ORDER BY id DESC LIMIT 1";

        // envoi la requete preparee
        $req = $bdd->prepare($query);

        // execute la requete sql
        $req->execute();

//        $row = $req->fetch(PDO::FETCH_ASSOC);

//        var_dump($row);
//        exit();


    }

    public function firstArticle()
    {
        $bdd = $this->getBdd();
        $query = "SELECT * FROM article ORDER BY id LIMIT 1";
        $req = $bdd->prepare($query);
        $req->execute();

    }



}
