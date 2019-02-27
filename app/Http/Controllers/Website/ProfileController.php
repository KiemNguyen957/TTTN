<?php

namespace App\Http\Controllers\Website;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\User;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth:web');
    }
    public function index()
    {
        //
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
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::FindOrFail($id);
        return view('website.profile',compact('user'));
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
        //dd($request);
        $user = User::findOrFail($id);
        $request->password = $request->merge(['password' => bcrypt($request->password)]);
        if(isset($request->avatar)){
            $allow_type=['jpg','jpeg','png','svg','gif'];
            $data=$request->except(['avatar']);
            if($request->hasFile('avatar')){
                $image=$request->avatar;
                $flie_text=$image->getClientOriginalExtension();
                if(in_array($flie_text,$allow_type)){
                    $file_name=$request->avatar->store('avatars');
                    $data['avatar']=$file_name;
                    $error=0;
                }
                else{
                    $error=1;
                }
            }

            if($error==0){
                $request->avatar=$file_name;
                $request->avatar = $request->merge(['avatar' => $file_name]);
                Storage::delete($user->avatar);
                $user->update($data);
                
            }
            else{
                $error="ảnh không hợp lệ";
                return redirect()->route('profile.edit',$id)->with('_error',$error);
            }
        }
        else{
            $user->update($request->all());
        }
        return redirect()->route('profile.edit',$id)->with('_notification','Cập nhật thành công');
    
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
}
