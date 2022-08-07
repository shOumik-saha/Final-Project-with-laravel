<?php

namespace App\Http\Controllers;

use App\Models\Users;
use App\Models\Doctors;
use App\Models\pharmaceutical_items;
use App\Models\prescriptions;
use \PDF;
use Auth;
use Illuminate\Support\Facades\DB;
use Session;
use App\Http\Requests\StoreUsersRequest;
use App\Http\Requests\UpdateUsersRequest;
use Illuminate\Http\Request;



class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pharmaceuticalitems = pharmaceutical_items::all();
        return view('pharmacist.index')->with('pharmaceuticalitems', $pharmaceuticalitems);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pharmacist.create');
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
     * @param  \App\Models\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function show(Users $users)
    {
       //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function edit(Users $users)
    {
       //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Users $users)
    {
       //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function destroy(Users $users)
    {
        //
    }
    public function userlist()
    {
        $users = Users::paginate(3);
        return view('users.profileUser')->with('users', $users);
    }

    // public function editItem(Request $request){
    //     $pharmaceuticalitems = pharmaceutical_items::where('name', $request->name)->first();
    //     return view('pharmacist.editItem')->with('pharmaceutical_items', $pharmaceuticalitems);
    // }
    // public function editItemSubmit(Request $request){
    //     $pharmaceuticalitems = pharmaceutical_items::where('name', $request->name)->first();
    //     $validate = $request->validate([
    //         'price' => 'required'
    //     ],
    //     ['price.required'=>"Please put you item price here"],
    // );
    //     $pharmaceuticalitems->price = $request->price;
    //     $user->save();
    
    //     return redirect()->route('index');
    // }
    // public function deleteItem(Request $request){
    //     $pharmaceuticalitems = pharmaceutical_items::where('name', $request->itemName)->first();
    //     return view('pharmacist.deleteItem')->with('pharmaceutical_items', $pharmaceuticalitems);
    // }
    // public function deleteItemSubmit(Request $request){
    //     $pharmaceuticalitems = pharmaceutical_items::where('name', $request->itemName)->first();
    //     $pharmaceuticalitems->delete();
    //     return redirect()->route('index');
    // }
    public function chart()
{
    $result=DB::select(DB::raw("SELECT COUNT(*) as items, itemName FROM pharmaceutical_items GROUP BY itemName"));
    $chartData="";
    foreach($result as $list)
    {
        $chartData.="['".$list->itemName."',   ".$list->items."],";
    }
    $arr['chartData']=rtrim($chartData,",");
    
    return view('pharmacist.chart',$arr);
    return $arr;
}
public function downloadPdf()
{
    $data =  pharmaceutical_items::all();
    return view('pharmacist.downloadPdf',['pharmaceutical_items'=>$data]);
}
    public function pharmacistDashboard(){
        $data = pharmaceutical_items::all();
        return view('pharmacist.pharmacistDashboard',['pharmaceutical_items'=>$data]);
       //$pharmaceuticalitems = DB::table('pharmaceutical_items')->count();
        //$prescriptions = DB::table('prescriptions')->count();
        //return view('pharmacist.pharmacistDashboard',compact('pharmaceutical_items','prescriptions'));

    }
    public function pharmacistProfile(){
        return view('pharmacist.pharmacistProfile');
    }
    public function updatePharmacistProfile(){
        return view('pharmacist.updatePharmacistProfile');
    }

            
    public function updateSubmitted(Request $request){
        $pharmacist = Users::where('email', $request->email)->first();
        // return  $student;
        $pharmacist->email = $request->email;
        $pharmacist->name = $request->name;
        $pharmacist->phoneNumber = $request->phoneNumber;
        $pharmacist->password = $request->password;
        $pharmacist->dob = $request->dob;
        $pharmacist->dob = $request->dob;
        $pharmacist->role = $request->role;
        $pharmacist->cpassword = $request->cpassword;
        $pharmacist->save();
        $request->session()->put('name',$pharmacist->name);
        $request->session()->put('email',$pharmacist->email);
        $request->session()->put('phoneNumber',$pharmacist->phoneNumber);
        $request->session()->put('password',$pharmacist->password);
        $request->session()->put('cpassword',$pharmacist->cpassword);
        return redirect()->route('pharmacistDashboard');

    }
    public function changePicture(){
        return view('pharmacist.changePicture');
    }
    public function changePictureSubmit(Request $request){
        $file_name = $request->file('picture')->getClientOriginalName();
        //$f_name = $file_name.'.'.$req->file('pro_pic')->getClientOriginalExtension();
        $folder = $request->file('picture')->move(public_path('img').'/',$file_name);
        
        $value = session()->get('id');
        $pharmacist = Users::where('id', $value)
        ->first();
        $pharmacist->picture = $file_name;
        $pharmacist->save();
        $request->session()->put('picture', $file_name);
        //$request->session()->flash('change_picture', 'Profile picture uploaded successfully');

        return redirect()->route('changePicture');

    }
    public function homePharmacist(){
        return view('pharmacist.homePharmacist');
    }
    public function profilePharmacistSubmit(Request $request){
        $user = Users::where('name', $request->name)->where('role', 'users')->first();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->phoneNumber = $request->phone;
        $user->password = md5($request->password);
        $user->dob = $request->dob;
        $user->role = 'users';
        $user->save();
        return redirect()->route('pharmacist.profile');
    }
    public function logout(){
        session()->forget('user');
        return view('pages.login');
    }
    public function list(){
        $users = pharmaceutical_items::all();
        //return view('pharmacist.list')->with('user', $users);
        return  $users;
    }
    public function searchItem(Request $request){
        $query = $request->input('searched_users');
        $searched_users = pharmaceutical_items::where('pharmaceuticalItemID', 'like', "%$query%")->orwhere('itemName', 'like', "%$query%")->orwhere('price', 'like', "%$query%")->get();
        
        return view('pharmacist.searchItem')->with('user', $searched_users);
    }
    public function editItem(Request $request){
        $item = pharmaceutical_items::where('itemName', $request->itemName)->first();
        return view('pharmacist.editItem')->with('item', $item);
    }
    public function editItemSubmit(Request $request){
        $item = pharmaceutical_items::where('itemName', $request->itemName)->first();
        $validate = $request->validate([
            'price' => 'required| min:3'
        ],
        ['name.required'=>"Please put you name here",
        'name.min'=>"Name must be at least 3 characters long"],
    );
        $item->price = $request->price;
        $item->save();
    
        return redirect()->route('listPharmacist');
    }
    public function deleteItem(Request $request){
        $item = pharmaceutical_items::where('itemName', $request->itemName)->first();
        return view('pharmacist.deleteItem')->with('item', $item);
    }
    public function deleteItemSubmit(Request $request){
        $item = pharmaceutical_items::where('itemName', $request->itemName)->first();
        $item->delete();
        return redirect()->route('listPharmacist');
    }
    public function addItem(){
        return view('pharmacist.addItem');
    }
    public function itemAdd(Request $request){
        $validate = $request->validate([
            'itemName' => 'required|max:255',
            'price' => 'required|numeric',
        ]);
                    $pharmaceuticalitems = new  pharmaceutical_items();
                    $pharmaceuticalitems->userID = Session::get('userID');
                    $pharmaceuticalitems->itemName = $request->itemName;
                    $pharmaceuticalitems->price = $request->price;
                    $pharmaceuticalitems->save();
                    return redirect()->route('pharmacistDashboard');
    }   
    public function cart(){
        return view('pharmacist.cart');
    }
    public function shop(){
        return view('pharmacist.shop');
    }
    public function checkout(){
        return view('pharmacist.checkout');
    }
}
