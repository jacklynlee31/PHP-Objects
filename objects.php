<?php
interface CatInterface {
    public function getName();
    public function setName($name);
}

<?php

class Siamese extends Animal implements CatInterface
{
    public function fur()
    {
        echo "Siamese cats have soft fur.\n";
    }
}
class Persian extends Animal implements CatInterface
{
    public function fur()
    {
        echo "Persian cats have long, fuzzy fur.\n";
    }
}

class Owner
{
    public function pet(CatInterface $cat)
    {
        $cat->fur();
    }
}
