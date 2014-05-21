<?php



class DomainValidator{

protected $input;


prot
/**
 * Public Static function
 *
 */
    public function validator($input,$rules){

        $validation = \Validation::make($this->input,Domain::$rules_add_domain);

        if ($validator->passes())
        {

            return true;

        }
        else
        {
            $this->errors->merge($validator->messages());
            return false;
         }
     }
 }
