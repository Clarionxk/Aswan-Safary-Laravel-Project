<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\tours;
use DB;
use App\Models\TourTable;
use App\Models\User;
use App\Models\Hotel;
use App\Models\Room;
use App\Models\Order;
use App\Models\Order_detail;
use App\Models\tour_book;

class AdminController extends Controller
{
    public function view_user(){

        $data=user::all();

        return view('admin.user',compact('data'));
    }

    public function add_user(Request $request){

        $data=new user;
        $data->name=$request->name;
        $data->email=$request->email;
        $data->password=$request->password;

        $data->save();
       
        return redirect()->back()->with('message','user added successfully');
    }
    public function delete_user($id){

        $data=user::find($id);
        $data->delete();

        return redirect()->back()->with('message','User Deleted Successfully');
    }

    public function view_tourtable(){
            $tourtable=new tourtable;

        return view('admin.tourtable', compact('tourtable'));
    }

    public function view_tourtable2( TourTable $tourtable){
        // $tourtable=tourtable::all();
        // $tourtable->price=$request->price;
        
    return view('tourbook', compact('tourtable'));
}


    public function add_tourtable(Request $request){
            $tourtable=new tourtable;
            $tourtable->sight=$request->title;
            $tourtable->description=$request->description;
            $tourtable->duration=$request->duration;
            $tourtable->date=$request->date;
            $tourtable->price=$request->price;
            $tourtable->url=$request->url;

            $image=$request->image;
            $imagename=time().'.'.$image->getClientOriginalExtension();
            $request->image->move('img',$imagename);
            $tourtable->image=$imagename;

            $tourtable->save();
        return redirect()->back()->with('message','Product Added Successfully');
    }

    public function show_tourtable(){
        $tourtable=tourtable::all();

            return view('admin.show_tourtable', compact('tourtable'));
    }

    public function delete_tourtable($id){

        $tourtable=tourtable::find($id);
        $tourtable->delete();

        return redirect()->back()->with('message','Tour Deleted Successfully');

    }

public function update_tourtable($id){

    $tourtable=tourtable::find($id);

return view('admin.update_tourtable', compact('tourtable'));

}

public function update_tourtable_confirm(Request $request, $id){

$tourtable=tourtable::find($id);
$tourtable->Sight=$request->title;
$tourtable->description=$request->description;
$tourtable->duration=$request->duration;
$tourtable->date=$request->date;
$tourtable->price=$request->price;
$tourtable->url=$request->url;


$image=$request->image;

if($image) {
    $imagename=time().'.'.$image->getClientOriginalExtension();
    $request->image->move('img',$imagename);
    $tourtable->image=$imagename;
}


$tourtable->save();
return redirect()->back()->with('message','Product Updated Successfully');

}










public function view_hotels(){


    return view('admin.hotels');
}


public function add_hotels(Request $request){
    $hotel=new hotel;
    $hotel->name=$request->title;
    $hotel->address=$request->address;
    $hotel->description=$request->description;
    $hotel->available_rooms=$request->rooms;
    $hotel->url=$request->url;

    $image2=$request->image;
    $imagename2=time().'.'.$image2->getClientOriginalExtension();
    $request->image->move('img',$imagename2);
    $hotel->image=$imagename2;

    $hotel->save();
return redirect()->back()->with('message','hotel Added Successfully');
}

public function show_hotels(){
    $hotel=hotel::all();

        return view('admin.show_hotels', compact('hotel'));
}


public function delete_hotels($id){

    $hotel=hotel::find($id);
    $hotel->delete();

    return redirect()->back()->with('message','Hotel Deleted Successfully');

}

public function update_hotels($id){

    $hotel=hotel::find($id);

return view('admin.update_hotels', compact('hotel'));

}



public function update_hotels_confirm(Request $request, $id){

    $hotel=hotel::find($id);
    $hotel->name=$request->title;
    $hotel->address=$request->address;
    $hotel->description=$request->description;
    $hotel->available_rooms=$request->rooms;
    $hotel->url=$request->url;
    
    
    $image2=$request->image;
    
    if($image2) {
        $imagename2=time().'.'.$image2->getClientOriginalExtension();
        $request->image->move('img',$imagename2);
        $hotel->image=$imagename2;
    }
    
    
    $hotel->save();
    return redirect()->back()->with('message','Product Updated Successfully');
    
    }


    public function view_rooms( $id){
        //dd($id);
       // $hotel_id=$hotel['id'];

        return view('admin.rooms', compact('id'));
    }



    public function add_rooms(Request $request){
       // dd($request);
        $room=new room;
        $room->hotel_id=$request->hotel_id;
        $room->type=$request->type;
        $room->roomcount=$request->count;
        $room->price=$request->price;
    
        $image3=$request->image;
        $imagename3=time().'.'.$image3->getClientOriginalExtension();
        $request->image->move('img',$imagename3);
        $room->image=$imagename3;
    
        $room->save();
         return redirect('/show_hotels');
    // return redirect()->back()->with('message','Room Added Successfully');
    }

    public function show_rooms(){
        $room=room::all();
    
            return view('admin.show_rooms', compact('room'));
    }
    

    public function delete_rooms($id){

        $room=room::find($id);
        $room->delete();
    
        return redirect()->back()->with('message','Room Deleted Successfully');
    
    }
    

    public function update_rooms($id){

        $room=room::find($id);
    
    return view('admin.update_rooms', compact('room'));
    
    }


    public function update_rooms_confirm(Request $request, $id){

        $room=room::find($id);
        $room->hotel_id=$request->hotel_id;
        $room->type=$request->type;
        $room->roomcount=$request->count;
        $room->price=$request->price;
        
        
        $image3=$request->image;
        
        if($image3) {
            $imagename3=time().'.'.$image3->getClientOriginalExtension();
            $request->image->move('img',$imagename3);
            $room->image=$imagename3;
        }
        
        
        $room->save();
        return redirect()->back()->with('message','Room Updated Successfully');
        
        }

        public function addtourbook(Request $request){
       
            $tourtable=tourtable::find($request->tour_table_id);
    $total_price=$request->number*$tourtable['price'];
    $data=[
        'user_id'=>auth()->id(),
        'How_many'=>$request["number"],
        'tour_id'=>$request["tour_table_id"]
    ];
 
    DB::table('tour_books')->insert($data);
    $ff= DB::table('tour_books')->latest('id')->first();
    // dd($ff);
    $tour_book=Order_detail::create([
        'user_id'=>auth()->id(),
    'tour_book_id'=>$ff->id,
    'status'=>"pendding",
    'total_price'=>$total_price,
    ]);

        return view('tourbook',compact('tourtable'))->with('message','your Book done Successfully');
    }
    public function view_tourbook( $id){
        //dd($id);
       // $hotel_id=$hotel['id'];


        return view('tourbook', compact('id'));
    }
    public function view_booking(Hotel $hotel){

        $hotel_id=$hotel['id'];
            // $room=room::all();

                //dd('done');
        return view('Form',compact('hotel'));
    }

    public function store_book(Request $request){
        //dd($request);
    
    $room=Room::find($request->room_type);
    $total_price=$request->select_room*$room['price'];
    $order=Order::create([
        'user_id'=>auth()->id(),
        'room_id'=>$request->room_type,
        'check_in'=>$request->check_in,
        'check_out'=>$request->check_out,
        'total_price'=>$total_price,
        'number'=>$request->select_room,
        'special_request'=>$request->special_request,

    ]);
    
    $tour_book=Order_detail::create([
        'user_id'=>auth()->id(),
    'Order_id'=>$order['id'],
    'status'=>"pendding",
    'total_price'=>$total_price,
    ]);

    return redirect()->back()->with('message','your Book done Successfully');

    }

   
}

