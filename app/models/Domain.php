<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class Domain extends Eloquent implements UserInterface, RemindableInterface {

    /**
     * The database table used by the model
     *
     * @var string
     */

    protected $table = 'domains';



}