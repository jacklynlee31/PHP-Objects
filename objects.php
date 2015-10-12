<?php

interface CatInterface
{
    public function eat($food);
}

class Siamese implements CatInterface
{
    public function eat($food)
    {
        echo "The siamese cat eats a mouse.\n";
    }
}

class Persian implements CatInterface
{
    public function eat($food)
    {
        echo "The persian cat eats a bird.\n";
    }
}

class Owner
{
    public function care(CatInterface $cat)
    {
        $cat->eat($food);
    }
}

$siamese = new Siamese;
$persian = new Persian;

$owner = new Owner;

$owner->care($siamese);
$owner->care($persian);
