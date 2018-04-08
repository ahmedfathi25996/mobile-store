<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use App\User;
use Charts;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=User::all();
        return view('admin.user.index',compact('users'));
    }

   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        //Validation
        $this->validate($request,[
            'name' => 'required',
            'email'=> 'required',
            'password'=> 'required',
            'admin'=>'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:10240 ',
        ]);


        //Handel Upload User Image
        $fileName = 'null';
        if($request->hasFile('image')){
            $file = $request->file('image') ;
            $fileName = $file->getClientOriginalName() ;
            $destinationPath = public_path().'/images/' ;
            
            $file->move($destinationPath,$fileName);
        }
        
        else{
           $fileName='noimage.jpg';
       }
       
       $users=new User;
      
       $users->name=$request->input('name');
       $users->email=$request->input('email');
       $users->password=bcrypt($request->input('password'));
       $users->admin=$request->input('admin');
       $users->image=$fileName;
       $users->save();
       return redirect('/adminpanel/users');
          
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
        $user=User::find($id);
        return view('admin.user.edit',compact('user'));
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
         //Validation
         $this->validate($request,[
            'name' => 'required',
            'email'=> 'required',
         //   'password'=> 'required',
            'admin'=>'required',
            //'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:10240 ',
        ]);


        //Handel Upload User Image
        /*
        if($request->hasFile('image')){
            $file = $request->file('image') ;
            $fileName = $file->getClientOriginalName() ;
            $destinationPath = public_path().'/images/' ;
            
            $file->move($destinationPath,$fileName);
        }
        
        else{
           $fileName='noimage.jpg';
       }
       */
       $user=User::find($id);
      
       $user->name=$request->input('name');
       $user->email=$request->input('email');
       //$user->password=bcrypt($request->input('password'));
       $user->admin=$request->input('admin');
       //$user->image=$fileName;
       $user->save();
       return redirect('/adminpanel/users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $user=User::find($id);
        $user->delete();
        return redirect('/adminpanel/users');
    }
    public function UserEditInfo()
{
    $user=Auth::user();
    return view('website.profile.edit',compact('user'));
}
public function userChart()
{
    $chart = Charts::database(User::all(), 'bar', 'highcharts')
    ->responsive(false)
    ->width(0)
    ->title("Monthly User Registration")
    ->elementLabel("Total Users")
    ->dimensions(1000, 500)
    ->groupByMonth('2018', true);
            return view('admin.user.chart',compact('chart'));
}
public function contactUs()
{
    return view('website.pages.contactus');
}

}
