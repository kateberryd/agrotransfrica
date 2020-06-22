<?php

	namespace App\Http\Controllers;

	use Illuminate\Http\Request;
	use App\Repositories\Admin\AdminContract;
	use Sentinel;
	use App\User;
	use App\Client;
	use App\Loan;
	use App\Enterprise;
	use App\Enterpriseu;
	

	class AdminController extends Controller
	{

			protected $repo;

			public function __construct(AdminContract $adminContract) {
				$this->repo = $adminContract;
			}

	    /**
	     * Display a listing of the resource.
	     *
	     * @return \Illuminate\Http\Response
	     */
	    public function index() {
	        $users = User::orderBy('created_at', 'desc')->get();
        	return view('my_admin.index')->with('users', $users);
	    }

	    /**
	     * Show the form for creating a new resource.
	     *
	     * @return \Illuminate\Http\Response
	     */
	    public function create()
	    {
	        return view('admin.create');
	    }

	    /**
	     * Store a newly created resource in storage.
	     *
	     * @param  \Illuminate\Http\Request  $request
	     * @return \Illuminate\Http\Response
	     */
	    public function store(Request $request) {
	    	// dd($request->all());
	    	
	    	$this->validate($request, [
            	'first_name' => 'required',
            	'last_name' => 'required',
            	'email' => 'required',
            	'phone_number' => 'required'
        	]);

        	try {
            	$admin = $this->repo->create($request);
        		
            	if ($admin->id) {
             
            		return redirect()->back()
                	->with('success', 'Lecturer successfully added');
            	} else {
                	return back()
                    ->withInput()
                    ->with('error', 'Could not add Lecturer. Try again!');
            	}
        	
        		
        	} catch (QueryException $e) {
            	if ($e->errorInfo[1] == 1062) {
                	return back()
                    ->withInput()
                    ->with('error', 'User exists!');
            	}
        	}
	    }
	   
	    /**
	     * Display the specified resource.
	     *
	     * @param  int  $id
	     * @return \Illuminate\Http\Response
	     */
	    public function show($id)
	    {
	        //
	    }

	    /**
	     * Show the form for editing the specified resource.
	     *
	     * @param  int  $id
	     * @return \Illuminate\Http\Response
	     */
	    public function edit($id)
	    {
	        //
	    }

	    /**
	     * Update the specified resource in storage.
	     *
	     * @param  \Illuminate\Http\Request  $request
	     * @param  int  $id
	     * @return \Illuminate\Http\Response
	     */
	    public function update(Request $request, $id)
	    {
	        //
	    }

	    /**
	     * Remove the specified resource from storage.
	     *
	     * @param  int  $id
	     * @return \Illuminate\Http\Response
	     */
	    public function delete($id)
	    {
	        //
		}
		

		public  function creditIndex(){
			$loans =  Loan::orderBy('created_at', 'desc')->get();
			return view('my_admin.view-loan')->with('loans', $loans);
		
		}
		
		public function fullDetails(Request $request){
			 $client_id = $request->id;
			 $client =  Client::whereUser_id($client_id)->first();
			 $loan =  Loan::whereLoan_id($client_id)->first();
			 $enterprise = Enterprise::whereUser_id($client_id)->first();
			 $enterpriseu = Enterpriseu::whereUser_id($client_id)->first();
			 return view('my_admin.details')->with('client', $client)
			 ->with('loan', $loan)->with('enterprise',  $enterprise)->with('enterpriseu', $enterpriseu);
		 }
	}
