<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Employee;
use App\Models\Type;
use App\Models\Location;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $employees = Employee::all();
        $types = Type::all();

        return view('user.showUsers', ['users'=> $users, 'employees' => $employees, 'types' => $types]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $types = Type::all();
        return view('user.createUser',['types'=> $types]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required:max:50',
            'last_name' => 'required:max:50',
            'email' => 'required|email',
            'password' => 'required',
            'phone_number' => '',
            'barangay' => 'required:max:50',
            'municipality' => 'required:max:50',
            'province' => 'required:max:50',
            'type' => 'required|numeric',
        ]);

    
        $newLocation = new Location();
        $newLocation->barangay = $request->barangay;
        $newLocation->municipality = $request->municipality;
        $newLocation->province = $request->province;
        $newLocation->save();

        $location = Location::latest()->first();

        $newEmployee = new Employee();
        $newEmployee->first_name = $request->first_name;
        $newEmployee->last_name = $request->last_name;
        $newEmployee->email = $request->email;
        $newEmployee->phone_number = $request->phone_number;
        $newEmployee->job_id = $request->type;
        $newEmployee->hired_date = date('Y-m-d H:i:s');
        $newEmployee->location_id = $location->id;
        $newEmployee->save();

        $employee = Employee::latest()->first();

        $newUser = new User();
        $newUser->email = $request->email;  
        $newUser->password = Hash::make($request->password);  
        $newUser->employee_id = $employee->id;  
        $newUser->type_id = $request->type;
        $newUser->save();  

        return redirect('user')->with('userCreated', 'User has been created');
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
        $user = User::find($id);
        $employee = Employee::find($user->employee_id);
        $location = Location::find($employee->location_id);
        $type = Type::find($user->type_id);

        $types = Type::all();

        return view('user.editUser', ['user' => $user, 'employee' => $employee, 'types' => $types, 'location' => $location]);
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
        $request->validate([
            'first_name' => 'required:max:50',
            'last_name' => 'required:max:50',
            'email' => 'required|email',
            'password' => 'required',
            'phone_number' => '',
            'barangay' => 'required:max:50',
            'municipality' => 'required:max:50',
            'province' => 'required:max:50',
            'type' => 'required|numeric',

            
        ]);

        $user = User::find($id);
        $employee = Employee::find($user->employee_id);
        $location = Location::find($employee->location_id);

        $location->barangay = $request->barangay;
        $location->municipality = $request->barangay;
        $location->province = $request->barangay;
        $location->save();

        $employee->first_name = $request->first_name;
        $employee->last_name = $request->last_name;
        $employee->email = $request->email;
        $employee->phone_number = $request->phone_number;
        $employee->job_id = $request->type;
        $employee->save();

        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->type_id = $request->type;
        $user->save();
        

        return redirect('user')->with('userUpdated', 'User has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect('user')->with('deletedUser', 'User has been deleted');
    }
}
