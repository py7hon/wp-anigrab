[![Build Status](https://travis-ci.org/anigrab/wp-anigrab.svg?branch=master)](https://travis-ci.org/anigrab/wp-anigrab)

**Installation :** 

require: [composer](https://getcomposer.org/) + [wp-cli](https://make.wordpress.org/cli/handbook/installing/)

```
$ composer create-project ospek/wp-anigrab:dev-master path-to-wp-plugins/wp-anigrab
$ wp plugin activate wp-anigrab

```

other installation method available from [here.](https://github.com/anigrab/wp-anigrab/tree/installable)

 **usage manual:** 

place this shortcode-like anywhere in your post  [anigrab= **id**  or  **url** ]**template**[/anigrab]

-  **id:** myanimelist anime id
or
-  **url:**  myanimelist url
-  **template:**  template for passed grab result eg: title: {{title}} etc

**usage automation:** 

place this shortcode-like anywhere in your post  [anigrab= **id**  or  **url** ]**dump**[/anigrab]

-  **id:** myanimelist anime id
or
-  **url:**  myanimelist url
-  **dump:** don't change this

**note:** 

this plugins is still in development, addition feature will be adding gradually.