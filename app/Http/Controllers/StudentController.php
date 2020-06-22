<?php

	namespace App\Http\Controllers;

	use Illuminate\Http\Request;
	use App\Repositories\Student\StudentContract;
	use Cartalyst\Sentinel\Native\Facades\Sentinel;
	use Cartalyst\Sentinel\Checkpoints\NotActivatedException;
	use Activation;
	use App\Agent;
	use Mail;

	class StudentController extends Controller
	{

		protected $repo;
		
		public function __construct(StudentContract $studentContract) {
			$this->repo = $studentContract;
		}
		
		/**
		* Display a listing of the resource.
		*
		* @return \Illuminate\Http\Response
		*/
		
		public function index() {
			 $user_first = Sentinel::getUser()->first_name;
			return view('Client.client-dashboard.dashboard')->with('user_first', $user_first);
			
		}
		
		/**
		* Show the form for creating a new resource.
		*
		* @return \Illuminate\Http\Response
		*/
		
		public function create() {
			return view('student.create');
			
		}
		
		/**
		* Store a newly created resource in storage.
		*
		* @param  \Illuminate\Http\Request  $request
		* @return \Illuminate\Http\Response
		*/
		
		public function store(Request $request) {
			$adminDetails = [
				'email' => $request->email,
				'password' => 'secretpass'
				
			];
			
			$student = Sentinel::register($adminDetails);
			$sentinelUser = Sentinel::findById($student->id);
		
			$activation = Activation::create($student);
			$role = Sentinel::findRoleBySlug('student');
			$role->users()->attach($student);
			$this->sendEmail($student, $activation->code);
			 $student->save();
			 return 1324356;
			
		}
		
		public function activate($email, $activationCode) {
			
			$student = Agent::whereEmail($email)->first();
			$sentinelUser = Sentinel::findById($student->id);
			if(Activation::complete($sentinelUser, $activationCode)) {
				return redirect()->route('login');
			}else {
				return redirect()->route('login');
			}
		}
		
		private function SendEmail($student, $code) {
			Mail::send('student.activation', [
				'student'	=> $student,
				'code' => $code
			], function($message) use ($student) {
				$message->to($student->email);
				$message->subject("Activate your ACTA Account");
			});
		}
		
		public function studentRegistation(){
			
			// $student = $this->repo->findById($studentid);
			// if(!$student) {
			// 	return redirect()->route('home');
			// }
			
			return view('student.register');
			// , ['student' => $student]);
			
		}
		
		
		public function getFaculty($id) {
	        return view('student.register', ['student' => User::find($email), 
	        'data' => Department::where('faculty_id', $id)->with('faculty')->get()]); 
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
	}
