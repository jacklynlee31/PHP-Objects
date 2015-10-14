<?php

interface AdobeInterface
{
    public function design($project);
    public function getExtension();
}

class Illustrator implements AdobeInterface
{
    public function design($project)
    {
        echo "An Adobe Illustrator file is designed.\n";
    }
    public function getExtension($illustrator) {
        return '.ai';
    }
}

class Photoshop implements AdobeInterface
{
    public function design($project)
    {
        echo "An Adobe Photoshop file is designed.\n";
    }
    public function getExtension($photoshop) {
        return '.psd';
    }
}

class InDesign implements AdobeInterface
{
    public function design($project)
    {
        echo "An Adobe InDesign file is designed.\n";
    }
    public function getExtension($indesign) {
        return '.indd';
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

echo getExtension($illustrator);
echo getExtension($photoshop);
echo getExtension($indesign);

$designer = new Designer;

$designer->design($illustrator);
$designer->design($photoshop);
$designer->design($indesign);
