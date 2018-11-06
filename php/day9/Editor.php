<?php
include_once('day9.php');
class Editor extends User
{
    protected $numberOfArticles;
    public function getNumberOfArticles()
    {
        return $this->numberOfArticles;
    }

    public function setNumberOfArticles()
    {
        $this->numberOfArticles = rand(1,15);
        return $this;
    }

    public function calcScores()
    {
        $articles = $this->getNumberOfArticles();
        if (isset($articles)){
            for ($i = 0;$i<$articles;$i++){
                $this->scores+=2;
            }
            echo "EDITOR ARTICLES : ".$this->numberOfArticles." SCORE : ".$this->scores;
        }
    }
}

$editor = (new Editor())->setNumberOfArticles()->calcScores();
