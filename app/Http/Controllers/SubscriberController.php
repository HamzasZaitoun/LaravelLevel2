<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use App\Http\Requests\StoreSubscriberRequest;
use App\Http\Requests\UpdateSubscriberRequest;

class SubscriberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subscriptions = Subscriber::paginate(config('settings.paginate'));
        return view('admin.subscriptions.index', get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('admin.subscriptions.create', get_defined_vars());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSubscriberRequest $request)
    {
         $data = $request->validated();
        Subscriber::create($data);
        return redirect()->route('admin.subscriptions.index')->with('success', __('keywords.created_successfully'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Subscriber $subscriber)
    {
         return view('admin.subscriptions.show', get_defined_vars());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Subscriber $subscriber)
    {
       return view('admin.subscriptions.edit', get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSubscriberRequest $request, Subscriber $subscriber)
    {
       $data = $request->validated();
        $subscriber->update($data);
        return redirect()->route('admin.subscriptions.index')->with('success', __('keywords.updated_successfully'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subscriber $subscription)
    {
       $subscription->delete();
        return redirect()->route('admin.subscriptions.index')->with('success', __('keywords.deleted_successfully'));
    }
}
