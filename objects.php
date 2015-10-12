<?php
interface CatInterface {
    public function fur();
}

class Siamese implements CatInterface
{
    public function fur()
    {
        echo "Siamese cats have soft fur.\n";
    }
}
class Persian implements CatInterface
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

$siamese = new Siamese;
$persian = new Persian;

$owner = new Owner;

$owner->fur($siamese);
$owner->fur($persian);

