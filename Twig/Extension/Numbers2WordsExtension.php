<?php

namespace Rck6982\Numbers2WordsBundle\Twig\Extension;

use Rck6982\Numbers2Words\Numbers2Words;
// use Twig_Extension;
// use Symfony\Component\DependencyInjection\Container;
// use Symfony\Component\DependencyInjection\ContainerAwareInterface;
// use Symfony\Component\DependencyInjection\ContainerInterface;

class Numbers2WordsExtension extends \Twig_Extension
{
    public function getFilters()
    {
        return array(
                new \Twig_SimpleFilter('toWords', array($this, 'numbers2wordsFilter')),
            );
    }

    public function numbers2wordsFilter($numero)
    {
        $obj = new Numbers2Words();

        return $obj->toWords($numero);
    }

    public function getName()
    {
        return 'numbers2words';
    }
} 
