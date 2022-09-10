<?php

namespace App\Http\Controllers\admin;


use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\CinemaList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class CinemaListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cinemalist = CinemaList::all();
        return view('admin.pages.cinemalist',['cinemalists' => $cinemalist]);
    }

   

    /**
     * Store data in database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required|mimes:jpeg,png,jpg,gif|max:1024',
            'price' => 'required',
            'date' => 'required',
            'time' => 'required'
        ]);
        $imageName = time().'.'.$request->image->extension();
        $cinemalist = new CinemaList();
        $cinemalist->name = $request->name;
        $cinemalist->image = $request->image->move('cin', $imageName);
        $cinemalist->date = $request->date;
        $cinemalist->price = $request->price;
        $cinemalist->time = $request->time;
        
        if($cinemalist->save()){
            for ($i=0; $i < 20; $i++) { 
                DB::table('bookings')->insert([
                    'cin_id' => $cinemalist->id
                ]);
            }
            return back()->with('success','New Cinema Register Success');
        }else{
            return back()->with('fail','Something went to wrong,try again later');
        }
    }

    


    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'image' => 'nullable|mimes:jpeg,png,jpg,gif|max:1024',
            'date' => 'required',
            'time' => 'required'
        ]);
        
        if($validator->fails()){
            return back()->with('fail',$validator->errors()->first());
        }

        $cinemaList = CinemaList::find($request->id);
        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();
            $filepath = $request->image->move('cin', $imageName);
            
        }else{
            $filepath = $cinemaList->image;
        }
        
        $cinemaList->name = $request->name;
        $cinemaList->image = $filepath;
        $cinemaList->date = $request->date;
        $cinemaList->time = $request->time;
        if($cinemaList->save()){
            return back()->with('successed','Data update successfull');
        }else{
            return back()->with('fail','query failed');
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
        $dlt = CinemaList::find($id);
        $rst = $dlt->delete();
        if($rst){
            return response( "Delete Successfull" , 200);
        }
    }

    public function booking($id){
        return view('admin.pages.booking',['cinemaimage' => CinemaList::find($id)->first(),'bookings' => Booking::where('cin_id',$id)->get()]);
    }
}
