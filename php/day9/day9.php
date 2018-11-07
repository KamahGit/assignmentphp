<?php
/**
Task 
In order to implement the polymorphism principle, we are going
to create an abstract User class that commits the classes 
that inherit from it to calculate the number of scores that a 
user has depending on the number of articles that he has 
authored or edited. On the basis of the User class, we are 
going to create the Author and Editor classes, and both will
calculate the number of scores with the method calcScores(),
although the calculated value will differ between the two 
classes.
*/
abstract class User
{
    protected $scores = 0;
    protected $numberOfArticles = 0;
    protected abstract function calcScores();
}
