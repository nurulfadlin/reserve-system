<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;//use this too in 5.4??
use App\Message;
use Mail;
use Illuminate\Support\Facades\Cache;

class MessagesController extends Controller
{


public function store(Request $request,$id){

  switch($request->input('action')){
    case 'update':
    $this->validate($request,[
      'name'=>'required',
      'email'=>'required|email',
      'phone'=>'required',
      'date'=>'required',
      'time'=>'required',
      'people'=>'required'
    ]);

    $data=array(
      'name' => $request->input('name'),
      'email' => $request->input('email'),
      'message' => $request->input('request'),
       'phone' => $request->input('phone'),
      'date' => $request->input('date'),
      'time' => $request->input('time'),
      'people' => $request->input('people')
    );

    //update message
    Message::where('id',$id)->update($data);
    return redirect('updateReservation/'.$id)->with('success','Reservation successfully updated!');
    break;

    case 'confirm':
    $this->validate($request,[
      'name'=>'required',
      'email'=>'required|email',
      'phone'=>'required',
      'date'=>'required',
      'time'=>'required',
      'people'=>'required'
    ]);


    $data2=array(
      'status' => "Confirmed"
    );


    //update message
    Message::where('id',$id)->update($data2);

    $message=Message::find($id);
        $data=array(
          'name' => $message->name,
          'phone' => $message->phone,
          'email' => $message->email,
          'date' => $message->date,
          'time' => $message->time,
          'people' => $message->people,
          'specialRequest' => $message->message,
          'status' => $message->status

        );


    //send confirmation mail
    Mail::send('emails.confirmation', $data, function($mail) use ($data){
      $mail->from('confirmation@restaurantReservation');
      $mail->to($data['email']);
      $mail->subject('Restaurant Booking Confirmed Receipt');
    });

    return redirect('viewReservation/'.$id)->with('success','Reservation has been confirmed!');
    break;

    case 'search':
    $this->search();
    break;

    case 'all':
    break;

  }
}


  public function submit(Request $request) {
    $this->validate($request,[
      'name'=>'required',
      'email'=>'required|email',
      'phone'=>'required',
      'date'=>'required',
      'time'=>'required',
      'people'=>'required'
    ]);

    //Create New Message
    $message = new Message;
    $message->name = $request->input('name');
    $message->email = $request->input('email');
    $message->message = $request->input('request');
    $message->phone = $request->input('phone');
    $message->date = $request->input('date');
    $message->time = $request->input('time');
    $message->people = $request->input('people');
    $message->status = "Waiting for confirmation";

    //Save Message
    $message->save();

$data = array(
  'name' => $message->name,
  'phone' => $message->phone,
  'email' => $message->email,
  'date' => $message->date,
  'time' => $message->time,
  'people' => $message->people,
  'specialRequest' => $message->message,
  'status' => $message->status,
  'id' => $message->id
);
    //Send email
    Mail::send('emails.contact', $data, function($mail) use ($data){
      $mail->from('confirmation@restaurantReservation');
      $mail->to($data['email']);
      $mail->subject('Restaurant Booking Confirmation');
    });

    //Redirect
    return redirect('/')->with('success', 'Reservation has been sent successfully!');
    }

    public function getManage(){

        $messages = Message::all();
      return view('manage')->with('messages',$messages);
    }



    public function getStatus(){

      $messages = Message::all();
      return view('status')->with('messages',$messages);
    }


    public function viewReservation($id){
      $messages = Message::find($id);
      return view('viewReservation')->with('messages',$messages);
    }

    public function thankYou($id){
      $messages = Message::find($id);
      return view('thankyou')->with('messages',$messages);
    }

    public function updateReservation($id){
      $messages = Message::find($id);
      return view('updateReservation')->with('messages',$messages);
    }

    public function confirm(Request $request, $id){

      $data2=array(
        'status' => "Confirmed"
      );

      //update message
      Message::where('id',$id)->update($data2);

      $message=Message::find($id);
          $data=array(
            'name' => $message->name,
            'phone' => $message->phone,
            'email' => $message->email,
            'date' => $message->date,
            'time' => $message->time,
            'people' => $message->people,
            'specialRequest' => $message->message,
            'status' => $message->status

          );


      //send confirmation mail
      Mail::send('emails.confirmation', $data, function($mail) use ($data){
        $mail->from('confirmation@restaurantBook');
        $mail->to($data['email']);
        $mail->subject('Restaurant Booking Confirmed Receipt');
      });

      return redirect('thankyou/'.$id)->with('success','Reservation has been confirmed!');
    }

    public function deleteReservation($id){
    Message::where('id',$id)->delete();
      return redirect('/manage')->with('info','The reservation has been deleted.');
    }

    public function cancellation($id){
    Message::where('id',$id)->delete();
      return view('deleted');
    }


    public function search() {
    $searchStat = \Request::get('searchStatus');
    $searchName = \Request::get('searchName'); //<-- we use global request to get the param of URI
    $searchDate = \Request::get('searchDate');


    if($searchDate==''){
      $messages = Message::where('name','like',$searchName.'%')
          ->orderBy('name')
          ->paginate(20);
    }
    elseif ($searchName=='') {
      $messages = Message::where('date','=',$searchDate)
          ->orderBy('name')
          ->paginate(20);
    }

    else{
      $messages = Message::where('name','like',$searchName.'%')->where('date','=',$searchDate)
          ->orderBy('name')
          ->paginate(20);
    }

   return view('manage')->with('messages',$messages);
}

public function searchStatus() {
$searchStat = \Request::get('searchStat');
$searchDate = \Request::get('searchDate');

if($searchDate==''){
  $messages = Message::where('status','=',$searchStat)
      ->orderBy('name')
      ->paginate(20);
}
elseif ($searchStat=='') {
  $messages = Message::where('date','=',$searchDate)
      ->orderBy('name')
      ->paginate(20);
}

else{
  $messages = Message::where('status','=',$searchStat)->where('date','=',$searchDate)
      ->orderBy('name')
      ->paginate(20);
}

return view('status')->with('messages',$messages);
}


public function arriveReservation($id){
  Message::where('id',$id)->update(['status'=> "Arrived"]);
  return redirect('/status')->with('info','Customer has arrived!');
}

public function notArriveReservation($id){
  Message::where('id',$id)->update(['status'=>"Not Arrived"]);
  return redirect('/status')->with('info','Customer not arrived.');
}

}
