<?php

namespace Rck6982\Numbers2WordsBundle\Twig\Extension;

use Rck6982\Numbers2Words\Numbers2Words;

class Numbers2WordsExtension extends \Twig_Extension
{
    public function getFilters()
    {
        return array(
                new \Twig_SimpleFilter('toWords', array($this, 'numbers2wordsFilter')),
                new \Twig_SimpleFilter('currencyToWords', array($this, 'currencyToWordsFilter'))
            );
    }

    public function numbers2wordsFilter($numero)
    {
        $obj = new Numbers2Words();

        return $obj->toWords($numero);
    }

    public function currencyToWordsFilter($number)
    {
        $pesos = intval($number);
        $centavos = (floor($number*1000) - floor($number)*1000)/10; 

        $words =  $this->numbers2wordsFilter($pesos).' pesos';
        if ($centavos !== 0) {
            $words = $words.' con '.$this->numbers2wordsFilter($centavos). ' centavos';
        }

        return $words;
    }

    public function getName()
    {
        return 'numbers2words';
    }
} 
