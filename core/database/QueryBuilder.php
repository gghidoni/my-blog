<?php 

// gestore di query dal db
class QueryBuilder {

    protected $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    // metodo per richiamare tutti i records di una query, la tabella è passata come parametro
    public function selectAll($table) {
        $statement = $this->pdo->prepare("select * from {$table}");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function listPosts() {
        $statement = $this->pdo->prepare("select * from posts, authors where ksAuthor=idAuthor");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }


    public function singlePost($idPost) {
        $statement = $this->pdo->prepare(
            "select titlePost, contentPost, datePost, username, titleCategory
            from posts, authors, categories 
            where {$idPost}=idPost and ksAuthor=idAuthor and ksCategory=idCategory");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function getTags($idPost) {
        $statement = $this->pdo->prepare(
            "select titleTag
            from posts, poststags, tags 
            where {$idPost}=idPost and idPost=poststags.ksPost and ksTag=idTag");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function getComments($idPost) {
        $statement = $this->pdo->prepare(
            "select textComment
            from posts, comments 
            where {$idPost}=idPost and comments.ksPost=idPost");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function insert($table, $parameters) {
        $sql = sprintf('insert into %s (%s) values (%s)',
                $table, implode(', ', array_keys($parameters)),
                ':' . implode(', :', array_keys($parameters))
        );
        try {
            $statement = $this->pdo->prepare($sql);
            $statement->execute($parameters);
        } catch (Exception $e) {
            die($e->getMessage());
        }
        
        
    }
}