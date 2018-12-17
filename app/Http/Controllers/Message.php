<?php

namespace App\Http\Controllers;

use App\models\messageModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Message extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $message = messageModel::all();
        return view('message.index',compact('message'));
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
        $message = new messageModel();
        $message->name = $request->input('name');
        $message->email = $request->input('email');
        $message->subject = $request->input('subject');
        $message->message = $request->input('message');
        $message->save();
        return redirect('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\messageModel  $messageModel
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $message = messageModel::where('message_id', $request->id_message)->get();
        return json_encode($message);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\messageModel  $messageModel
     * @return \Illuminate\Http\Response
     */
    public function edit(messageModel $messageModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\messageModel  $messageModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, messageModel $messageModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\messageModel  $messageModel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $message = messageModel::where('message_id', $id)->delete();
        return redirect('message');
    }
}
