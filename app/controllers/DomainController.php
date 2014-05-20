<?php

use Carbon\Carbon;

class DomainController extends \BaseController {

    public function add() {
        return View::make('domains.add');
    }

    public function validateDomain() {

        $input = Input::all();

        //$inputFile = Input::file();

        $rules = Domain::$rules_add_domain;

        $validator = Validator::make($input,$rules);

        if($validator->fails()){

            $messages = $validator->messages();

            return Redirect::to('add')->withErrors($messages);

        }else{

            $fromDate = Helper::dateToMySQL(Input::get('from'));
            $untilDate = Helper::dateToMySQL(Input::get('until'));

            $domain = new Domain();
            $domain->from = $fromDate;
            $domain->until = $untilDate;
            $domain->domain = Input::get('domain');


            if($domain->save())
            {
                echo 'success your domain is stored in our system.';
            }
            else
            {
                echo 'Something went wrong... Please contact a system administrator.';
            }
        }
    }



	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}