# Eventbrite Juego del Numero Secreto

[![Coverage Status](https://coveralls.io/repos/github/leonardxfce/ebNumbersGame/badge.svg?branch=master)](https://coveralls.io/github/leonardxfce/ebNumbersGame?branch=master)
[![Build Status](https://travis-ci.org/leonardxfce/ebNumbersGame.svg?branch=master)](https://travis-ci.org/leonardxfce/ebNumbersGame)
[![Bugs](https://sonarcloud.io/api/project_badges/measure?project=leonardxfce_ebNumbersGame&metric=bugs)](https://sonarcloud.io/project/issues?id=leonardxfce_ebNumbersGame&resolved=false&types=BUG)
[![Smells](https://sonarcloud.io/api/project_badges/measure?project=leonardxfce_ebNumbersGame&metric=code_smells)](https://sonarcloud.io/project/issues?id=leonardxfce_ebNumbersGame&resolved=false&types=CODE_SMELL)
[![Coverage](https://sonarcloud.io/api/project_badges/measure?project=leonardxfce_ebNumbersGame&metric=coverage)](https://sonarcloud.io/component_measures?id=leonardxfce_ebNumbersGame&metric=coverage)
[![lines](https://sonarcloud.io/api/project_badges/measure?project=leonardxfce_ebNumbersGame&metric=duplicated_lines_density)](https://sonarcloud.io/component_measures?id=leonardxfce_ebNumbersGame&metric=duplicated_lines_density)
![linesDeCode](https://sonarcloud.io/api/project_badges/measure?project=leonardxfce_ebNumbersGame&metric=ncloc)  
Desarrollado en PHP, con dependencias en composer.
## Uso
El archivo de inicio de la aplicación se encuentra en `src/index.php`  

Si se tiene PHP en el PATH el comando queda asi: `php index.php` 

Al iniciar se consulta por el tipo de juego existen 3 actualmente desarrollados:
* `pc-humano` => la PC crea el numero secreto y el humano debe responder
* `humano-pc` => el humano piensa el numero y la pc va dando números hasta encontrarlo
* `pc-pc` => modo de demostración la pc crea y también adivina el numero.
## Controles
Dependiendo el caso se pueden utilizar:
* Números: `0` al `100` para cuando se esta adivinando el numero secreto de la PC
* Símbolos: `<` , `>` y `=` para indicar si el numero propuesto por la pc es menor, mayor o igual al numero que usted pensó

## Instalación
Se necesita [PHP](http://php.net/downloads.php) en su version 7.0 o superior, también se necesita tener [composer](https://getcomposer.org/) para correr los test.

Si composer esta en el PATH el comando queda asi: `composer install`  
Correctamente instalado se pueden correr los test: `composer test`

Travis
