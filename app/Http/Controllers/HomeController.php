<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\Text;


class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    public function sendEmail(Request $request)
    {
        try {
            $content = array(
                'name'          => $request->name,
                'email'         => $request->email,
                'text'          => $request->text
            );

            Mail::to('ssn_1992@hotmail.com')->send(new Text($content));

            return response()->json(['response' => 'success'], 200);

        } catch (\Exception $e) {
            return $e;
            return response()->json(['response' => 'error', 'message' => $e], 500);
        }
    }
}
