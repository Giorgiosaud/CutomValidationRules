# CutomValidationRules
Custom Validation Rules For Laravel
In this package we can add a alpha_space validation rule to our Laravel

## To install it you must execute the following command in terminal
```php
    composer require jorgelsaud/custom-validators
````
### Then you must activate its ServiceProvider adding it in the config/app.php providers section
```php
    jorgelsaud\CustomValidators\CustomValidationsServiceProvider::class
````
and then you can use the validation rule alpha_space in any validation place

#### if you have one Rule to add please tell me and i will add it
