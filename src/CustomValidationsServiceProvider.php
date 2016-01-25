<?php

namespace jorgelsaud\CustomValidators;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;
use jorgelsaud\CustomValidators\AlphaLettersValidator;

class CustomValidationsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        Validator::extend('alpha_spaces', AlphaLettersValidator::class.'@validate', 'You must enter only letters and spaces in the field :attribute');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
