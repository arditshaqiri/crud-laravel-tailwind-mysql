<?php

namespace App\Http\Controllers;

use App\Models\contacts;
    use Illuminate\Http\Request;

class contactController extends Controller
{
    public function index(){
        return view('index',[
            'contacts' =>contacts::paginate(3)
        ]);
           
    }


     //Show create form
     public function create(){
        return view('insert');
    }

    public function store()
    {
        request()->validate([
            'name' => 'required',
            'contact' => 'required',
        ]);

        contacts::create([
            'name' => request('name'),
            'contact' => request('contact')
        ]);

        return redirect('/');
    }

    //Show edit form
    public function edit(contacts $contact){
        return view('edit',['contact'=>$contact]);
    }

    //update contact
    public function update(contacts $contact)
    {
        request()->validate([
            'name' => 'required',
            'contact' => 'required',
        ]);

        $contact->update([
            'name' => request('name'),
            'contact' => request('contact'),
        ]);

        return redirect('/');
    }

    // delete contact
    public function destroy(contacts $contact,$page)
    {
       
        $contact->delete();

         return redirect('/?page='.$page);
      
    }
}
