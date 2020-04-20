<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Http\Requests\ContactRequest;
use App\Repositories\ContactsRepository;

class ContactController extends Controller 
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  protected $contactsRepository;

  public function __construct(ContactsRepository $contactsRepository)
  {
    $this->contactsRepository = $contactsRepository;
  }

  public function index()
  {
    return view('frontend.contact');
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(ContactRequest $request)
  {

     Mail::send('frontend.email_contact', $request->all(), function($message) 
        {
            $message->to('Admin@fgi-udo.local')->subject('Contact');
        });
    

      $this->contactsRepository->store($request->all());

      return view('frontend.confirm');
    }
  

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
    
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id)
  {
    
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    
  }
  
}

?>