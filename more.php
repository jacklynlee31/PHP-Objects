<?php

interface AdobeInterface
{
    public function design($project);
}

class Illustrator implements AdobeInterface
{
    public function design($project)
    {
        echo "An Adobe Illustrator file is designed.\n";
    }
}

class Photoshop implements AdobeInterface
{
    public function design($project)
    {
        echo "An Adobe Photoshop file is designed.\n";
    }
}

class InDesign implements AdobeInterface
{
    public function design($project)
    {
        echo "An Adobe InDesign file is designed.\n";
    }
}

class Designer
{
    public function design(AdobeInterface $adobe)
    {
        $adobe->design($project);
    }
}

$illustrator = new Illustrator;
$photoshop = new Photoshop;
$indesign = new InDesign;

$designer = new Designer;

$designer->design($illustrator);
$designer->design($photoshop);
$designer->design($indesign);
