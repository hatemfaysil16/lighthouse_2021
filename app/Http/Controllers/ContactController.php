<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\ContactForm;
use App\Models\Map;
use App\Models\Social_media;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{

// AdminContact
    public function AdminContact(){
        $contacts = Contact::all();
        return view('admin.contact.index',compact('contacts'));
    }

    public function AdminAddContact(){
        return view('admin.contact.create');
    }

    public function AdminStoreContact(Request $request){

        Contact::insert([
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'created_at' => Carbon::now()
        ]);

        return Redirect()->route('admin.contact')->with('success','Contact Inserted Successfully');

     }

     public function Content(Request $request)
     {
        $email = $request->email;
        $contacts = DB::table('contacts')->first();
         return view('page.content',compact('contacts','email'));
     }

     public function ContentForm(Request $request){

        $validate = $request->validate([
            'name'=>'required',
            'email'=>'required',
            'subject'=>'required',
            'message'=>'required',
        ],
        [
            'name.required'=>'Please Input Name',
            'email.required'=>'Please Input email',
            'subject.required'=>'Please Input subject',
            'message.required'=>'Please Input message',
        ]);

        ContactForm::insert([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
            'created_at' => Carbon::now()
        ]);
        return Redirect()->route('contact')->with('success','Your Message Send Successfully');
    }

    public function deleteContent($id)
    {
        $messages = Contact::find($id)->delete();
        return Redirect()->route('admin.contact')->with('success','Contact delete Successfully');

    }

    public function EditContact($id){
        $message = Contact::find($id);
        return view('admin.contact.edit',compact('message'));
    }

    public function UpdateContent(Request $request,$id){


        $validate = $request->validate([
            'email'=>'required|min:4',
            'phone'=>'required|min:4',
            'address'=>'required|min:4',
        ],
        [
            'email.required'=>'Please Input email',
            'phone.required'=>'Please Input phone',
            'address.required'=>'Please Input address',
        ]);


        Contact::find($id)->update([
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'created_at' => Carbon::now()
        ]);
        return Redirect()->route('admin.contact')->with('success','Your Message Send Successfully');
    }

// AdminContact


// admin Message

    public function AdminMessage(){
        $messages = ContactForm::all();
        return view('admin.contact.message',compact('messages'));
    }

    public function deleteMessage($id){
        $messages = ContactForm::find($id)->delete();
        return Redirect()->route('admin.message')->with('success','message delete Successfully');
    }

// admin Message


// admin SocialMedia

    public function HomeSocial()
    {
        $HomeSocial = Social_media::all();
        return view('admin.socialMedia.index',compact('HomeSocial'));
    }

    public function HomeSocialAdd(){
        return view('admin.socialMedia.create');
    }

    public function SocialMediaStore(Request $request){



        Social_media::insert([
            'facebook' => $request->facebook,
            'twitter' => $request->twitter,
            'youtube' => $request->youtube,
            'Instagram' => $request->Instagram,
            'skype' => $request->skype,
            'github' => $request->github,
            'linkedIn' => $request->linkedIn,

            'created_at' => Carbon::now()
        ]);

        return Redirect()->route('admin.SocialMedia')->with('success','SocialMedia Inserted Successfully');

    }

    public function SocialMediaEdit($id){
        $SocialMedia = Social_media::find($id);
        return view('admin.socialMedia.edit',compact('SocialMedia'));
    }

    public function SocialMediaUpdate(Request $request,$id){


        Social_media::find($id)->update([
            'facebook' => $request->facebook,
            'twitter' => $request->twitter,
            'youtube' => $request->youtube,
            'Instagram' => $request->Instagram,
            'skype' => $request->skype,
            'github' => $request->github,
            'linkedIn' => $request->linkedIn,

            'created_at' => Carbon::now()
        ]);
        return Redirect()->route('admin.SocialMedia')->with('success','Your update Send Successfully');
    }

    public function SocialMediaDelete($id){
        Social_media::find($id)->delete();
        return Redirect()->route('admin.SocialMedia')->with('success','SocialMedia delete Successfully');
    }

// admin SocialMedia



}
