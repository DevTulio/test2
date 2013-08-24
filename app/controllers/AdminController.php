<?php

class AdminController extends BaseController {

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

	public function postAddBus(){
		$rules=array('BusType'=>'required','BusCapacity'=>'required|integer','busplate_no'=>'required|Alphanum|Unique:buses');
		$input=Input::all();
		$Bustype=Input::get('BusType');
		$BusCapacity=Input::get('BusCapacity');
		$BusPlateNo=Input::get('busplate_no');
$validation=Validator::make($input,$rules);
if($validation->passes()){
		$Bus= new Bus;
		$Bus->bustype=$Bustype;
		$Bus->capacity=$BusCapacity;
		$Bus->availableseats=0;
		$Bus->busplate_no=$BusPlateNo;
		$Bus->save();

		$Busid=DB::table('buses')
		->where('busplate_no','=',$BusPlateNo)
		->first();

		$seatid=DB::table('seats')->orderBy('seatid','desc')
		->first();

		$num;
		$ticketNo=DB::table('tickets')->orderBy('ticketno','desc')->first();
		$num2;
		if(is_null($ticketNo)){
			$num2=0;
		}
		else{
			$num2=$ticketNo->ticketno;
		}
		for ($i=1; $i <=$BusCapacity ; $i++) { 			
		$num=$seatid->seatid+$i;
		DB::table('seats')->insert(array('busid' => $Busid->busid,'seatno'=>($Busid->busid."-".$num),'ticketno'=>$num2+$i));				
		DB::table('tickets')->insert(array('busid'=> $Busid->busid,'created_at'=>date('created_at')));
		}

		return Redirect::back()->with(array('messages'=>1));
}


		return Redirect::back()->withErrors($validation);
		}


}