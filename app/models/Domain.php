<?php



class Domain extends Eloquent {

    /**
     * The database table used by the model
     *
     * @var string
     */

    protected $table = 'domains';

    /**
     * Validate the add domain form
     */
    public static $rules_add_domain = array(
        'from'  => 'required',
        'until'  => 'required',
        'domain'  => 'required|url'
    );
}