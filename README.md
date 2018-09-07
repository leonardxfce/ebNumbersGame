# Eventbrite Juego del Numero Secreto
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
