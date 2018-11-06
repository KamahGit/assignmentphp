<?php
abstract class User
{
    protected $scores = 0;
    protected $numberOfArticles = 0;
    protected abstract function calcScores();
}
