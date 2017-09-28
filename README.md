# codeigniter2-phpstorm

Base : http://github.com/natanfelles/codeigniter-phpstorm

This version is designed to work with CI 2.2.6, i just removed class who does not exist in CI 2

### How to use it:

1. Drop the **phpstorm.php** file into your CI project root then PhpStorm will index it.
2. Go to *system/core/* folder.
3. Select *Controller.php* and *Model.php* files, right click and set *Mark as Plain Text*.

### mdl_scanner.php
This simple script will give you all property for your model class, witch will permit you to get auto completion in your controller

To use it : 
```shell
php scanner_mdl.php your_codeigniter_application_folder
```

Then you will get something like that :
```
* Model class loader By Ludovic <Silentkernel> Frank
* @property Mdl_articlecategories $mdl_articlecategories
* @property Mdl_articles $mdl_articles
* @property Mdl_users $mdl_users
* @property Mdl_users_groups $mdl_users_groups
* End of model class loader
```

Just copy and past it in phpstorm.php in the definition of CI_controller and MX_Controller

Enjoy your auto completion with PHPStorm ;)
