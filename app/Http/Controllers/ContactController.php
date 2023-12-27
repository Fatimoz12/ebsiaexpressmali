<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\FormulaireData;
use Illuminate\Support\Facades\Validator;
use App\Mail\FormDataSubmited;

class ContactController extends Controller
{   
    // Traitement de contact
    public function process(Request $request)
    {
      //  dd($request->all());

            //valider les données du contact
        $validator = Validator::make($request->all(),
    [
        'full_name' => 'required',
        'email' => 'required|email',
        'object' => 'required|min:3|max:100',
        'message' => 'required',

    ]
    );
    // echec de validation
    if ($validator->fails())
    {
        return redirect()
        ->route('home')
        ->withErrors($validator)
        ->withInput();

    }
   
    // créer une nouvelle instance du modele Formulaire_Data
    $formData = new FormulaireData([
        'full_name' =>$request->input('full_name'),
        'email' =>$request->input('email'),
        'object' =>$request->input('object'),
        'message' =>$request->input('message'),


    ]);
    // save data in the database
    $formData->save();

    Mail::to('contact@ebsiaexpress.com')->send(new FormDataSubmited($request->all()));

    return back()->with('success', 'Merci de nous avoir contacté !');
    }
}
