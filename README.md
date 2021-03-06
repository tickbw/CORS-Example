CORS Example - Silex (Symfony 2) Web App, Silex JSON REST API, Node.js JSON REST API 
==============================================================================================
Author: Ben Wann

Requirements
------------
* Node.js
* Express 
  
Follow the installation guide here: http://expressjs.com/guide.html

Installation
------------

*  `npm install express`  (Install the express node module)
*  `node web/js/app/server/app.js` (Run the node app in the git code repo)


Derived from Silex - Kitchen Edition
------------

This project is a base for your silex applications.

It already embed :

* HTML5 boilerplate (http://html5boilerplate.com/)
* Twitter Bootrap with form integration (http://twitter.github.com/bootstrap/)
* Few extensions :

  * Doctrine
  * Form
  * Session
  * SymfonyBrige
  * Translation
  * Twig (with debug extension)
  * UrlGenerator

Installation
------------

*  `git clone`
*  `git submodule update --init --recursive`
*  edit `src/config.php`

Start hacking in `src/controllers.php`

Todo
----

* Extensions
  * HttpCache
  * Monolog
  * SwiftMailer
* Code Sample
  * Before / after

Help
----

* http://silex.sensiolabs.org/documentation
