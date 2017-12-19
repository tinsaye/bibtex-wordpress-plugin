## Framework
Two of the most popular frameworks for Wordpress Plugins are Herbert and WordPress Plugin Boilerplate 

### [Herbert](https://github.com/getherbert/herbert)
* structured and standardised approach to building wp plugins
* key features of Herbert framework is it allow you to use the power and effectiveness of Laravel’s Eloquent ORM to handle your database queries. So now you don’t need to stuck with the WordPress Database Object ($wpdb).
* last commit on Jan 2016

### [WPPB](https://wppb.io)
* a standardized, organized, object-oriented foundation for building wp plugins
* based on the Plugin API, Coding Standards, and Documentation Standards
* uses a strict file organization scheme that correspond both to the WordPress Plugin Repository structure, and that make it easy to organize the files that compose the plugin
* no documantation but some tutorials available [here](https://scotch.io/tutorials/how-to-build-a-wordpress-plugin-part-1) or [here](https://www.sitepoint.com/wordpress-plugin-boilerplate/)
* generator under wppb.me

Altouth WPPD has no official documentation, I would prefere using it because of the simplicity and better support. Beside that it gives a good structure and enough independency.

## Work packages
* initialize project
    * init the plugin using wppb
    * way to install the plugin in a wordpress site for demonstration and testing
    * installation instruction
    * init admin interface (without functionality)

* prototype
    * it should be possible to upload or input a bibtex file in the settings section that will be used to generate simple table under a specific page
    * with this the plugin is able to convert BibTex to HTML

* BibSonomy integration
    * listing publications from BibSonomy 
    * consists getting a BibTex from Bibsonomy and displaying that using the prototyope

* dynamic listing
    * filter and mange the table ( for example year, author ...)

* view publications
    * display publications on the website

* manage BibSonomy
    * post publications on BibSonomy from the plugin

**Recourses:**

* https://wpbean.com/wordpress-plugin-development-frameworks-and-resources/
* https://www.sagenda.com/wordpress-plugin-framework-review/
* https://wptavern.com/herbert-a-new-wordpress-plugin-framework