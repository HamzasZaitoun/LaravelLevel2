<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSubscriberRequest;
use App\Http\Requests\StoreMessageRequest;
use App\Models\Subscriber;
use App\Models\Message;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        return view('front.index', get_defined_vars());
    }

    public function about()
    {
        return view('front.about', get_defined_vars());
    }
    public function contact()
    {
        return view('front.contact', get_defined_vars());
    }
    public function services()
    {
        return view('front.services', get_defined_vars());
    }
    public function subescriberStore(StoreSubscriberRequest $request)
    {
        $data = $request->validated();
        Subscriber::create($data);
        return back()->with('sub-success', 'You have been subscribed successfully');
    }
    public function storeContact(StoreMessageRequest $request)
    {
        $data = $request->validated();
        Message::create($data);
        return back()->with('success', 'Your message has been sent successfully');
    }
}
