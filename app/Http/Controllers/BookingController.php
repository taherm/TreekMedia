<?php

namespace App\Http\Controllers;

use App\Mail\booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function send()
    {

        $data = [
            'type' => request('type'),
            'name' => request('name'),
            'from' => request('from_date'),
            'to' => request('to_date'),
            'message' => request('message')
        ];
        //dd($data['name']);

        try {
            \Mail::to('info@treekmedia.com')->send(new booking($data));

        } catch (\Exception $e) {
            dd($e->getMessage());
        }
        return redirect('/');
    }

}