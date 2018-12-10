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
     * @param  \App\messageModel  $messageModel
     * @return \Illuminate\Http\Response
     */
    public function show(messageModel $messageModel)
    {
        //
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
    public function destroy(messageModel $messageModel)
    {
        //
    }
}
