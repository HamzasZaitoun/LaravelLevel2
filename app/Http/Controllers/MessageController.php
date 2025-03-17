<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Http\Requests\StoreMessageRequest;
use App\Http\Requests\UpdateMessageRequest;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $messages = Message::paginate(config('settings.paginate'));
        return view('admin.messages.index', get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('admin.messages.create', get_defined_vars());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMessageRequest $request)
    {
         $data = $request->validated();
        Message::create($data);
        return redirect()->route('admin.messages.index')->with('success', __('keywords.created_successfully'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Message $message)
    {
        // dd($message->email);
         return view('admin.messages.show', get_defined_vars());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Message $message)
    {
       return view('admin.messages.edit', get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMessageRequest $request, Message $message)
    {
       $data = $request->validated();
        $message->update($data);
        return redirect()->route('admin.messages.index')->with('success', __('keywords.updated_successfully'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Message $message)
    {
       $message->delete();
        return redirect()->route('admin.messages.index')->with('success', __('keywords.deleted_successfully'));
    }
}
