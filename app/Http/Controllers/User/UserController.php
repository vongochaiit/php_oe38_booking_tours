<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Session;
use Carbon\Carbon;
use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\Validator;
use Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->isAdmin()){
            $user = User::paginate(config('app.paginate_number'));
            return view('admin.pages.user.list', compact('user'));
        }else{
            return redirect()->route('home.index');
        }

    }
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $user = User::findOrFail($id);
        
        return view('client.pages.profile', compact('user'));
     
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
        $user = User::findOrFail($id);
        if (isset($user)) {
            if($request->image)
               {
                $file = $request->image;
                $file->move('images', $file->getClientOriginalName());
                   $user->username = $request->username;
                   $user->name = $request->name;
                   $user->email = $request->email;
                   $user->password = bcrypt($request->$password);
                   $user->phone = $request->phone;
                   $user->image = $request->image->getClientOriginalName();
                   $user->address = $request->address;
                 
                   $user->update();
                 
               }else{
                $user->username = $request->username;
                $user->name = $request->name;
                $user->email = $request->email;
                $user->password = bcrypt($request->password);
                $user->email = $request->email;
                $user->address = $request->address;
                $user->phone = $request->phone;

                $user->update();
            }
            return back();
                 
           }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function registerClient(RegisterRequest   $request){
    
        if($request->image){
            $file = $request->image;
            $file->move('images', $file->getClientOriginalName());
        }
        $users = new User([
            'username'=>$request->username,
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
            'password' => bcrypt($request->password),
            'phone' => $request->phone,
            'image' => $request->image->getClientOriginalName(),
        ]);
        
        $users->save();
        Auth::login($users);
        
        return back();
        
    }

}
