<?php

namespace App\Http\Controllers;

use App\Asset;
use Illuminate\Http\Request;
use Mailgun\Mailgun;

class SiteController extends Controller
{
    public function getContactForm(Request $request){
        return view('contact');
    }

    public function postContactForm(Request $request){
        $input = $request->all();

        # Instantiate the client.
                $mgClient = new Mailgun('a2be89c24ad4386a166a125fbfb5ae8e-49a2671e-6eedc821');
                $domain = "sandboxb6e3939003a1425f88d327882b65bed6.mailgun.org";

        # Make the call to the client.
                $result = $mgClient->sendMessage("$domain",
                    array('from'    => 'THSecurity Contact Form <postmaster@sandboxb6e3939003a1425f88d327882b65bed6.mailgun.org>',
                        'to'      => 'THSecurity Company <trusthousescompany@gmail.com>',
                        'subject' => 'Messages from Contact Form | '.$input['email'] . '('.$input['first_name'].' '. $input['other_names'].')',
                        'text'    => $input['message']));

                $result = $mgClient->sendMessage("$domain",
                    array('from'    => 'THSecurity Contact Form <postmaster@sandboxb6e3939003a1425f88d327882b65bed6.mailgun.org>',
                        'to'      => 'THSecurity Company <danquahwhite@gmail.com>',
                        'subject' => 'Messages from Contact Form | '.$input['email'] . '('.$input['first_name'].' '. $input['other_names'].')',
                        'text'    => $input['message']));


                return redirect('/contact-us')->with('message', 'You message has been sent sucessfully. Our support team will contact you ver soon');

    }

    public function postFindPackage(Request $request){

        $assets = Asset::where('vault_number', $request->get('vault_number'))->get();
        if (count($assets)==0){
            return redirect('/track-package')->with('error', 'No matching package found. Please enter a correct vault number for your package.');
        }

            return redirect('/track-package')
                ->with('success', true)
                ->with('asset', $assets[0]);

    }

    public function welcome() {
        return view('welcome');
    }

    public function about(){
        return view('about');
    }

    public function services(){
        return view('services');
    }

    public function getTrackPackage(){
        return view('track');
    }
}
