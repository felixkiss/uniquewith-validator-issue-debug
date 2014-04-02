<?php

use LaravelBook\Ardent\Ardent;

class Phone extends Ardent
{
    public static $rules = array(
        'company' => 'required|unique_with:phones,model',
        'model'   => 'required',
    );

    public $fillable = array(
        'company',
        'model',
    );

    /**
     * Have the model throw an error if validation fails
     * @var boolean
     */
   public $throwOnValidation = true;
}
