<?php

/** @var \Composer\Autoload\ClassLoader $loader */
$loader = require __DIR__.'/../vendor/autoload.php';

Doctrine\Common\Annotations\AnnotationRegistry::registerLoader([$loader, 'loadClass']);

$loader->addPsr4('Phracktale\Symfony\Form\Type\Tests\\', __DIR__);
