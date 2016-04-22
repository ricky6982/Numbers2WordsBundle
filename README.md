Numbers2WordsBundle
===================

Bundle para aplicaciones Symfony2, agrega un filtro en Twig para convertir un numero en palabras.

en Twig
```twig
{{ 13 | toWords }}
```
salida
```
trece
```

Instalación
-----------

### Descargando el Bundle

Abra la consola, ingrese al directorio de su proyecto y ejecute el siguiente comando: 

```sh
$ composer require rck6982/numbers2words-bundle
```

### Agregando la Extension a Twig

En su Proyecto Symfony2 abra el archivo app/config/config.yml y agregue al final lo siguiente:

```yml
services:
    numbers2words.twig_extension:
        class: Rck6982\Numbers2WordsBundle\Twig\Extension\Numbers2WordsExtension
        public: false
        tags:
            - { name: twig.extension }
```
