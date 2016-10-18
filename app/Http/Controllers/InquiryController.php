<?php

namespace App\Http\Controllers;
/*
* Include required models
*/
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Inquiry;

class InquiryController extends Controller
{
  /*
  * Instance of email class for private use
  */
  protected $inquiry;
  /*
  * Use depency injection to bring in class
  */
  public function __construct(Inquiry $inquiry) {
    $this->middleware('auth');
    $this->inquiry = $inquiry;
  }
  /**
   * Show the inquires from the homepage.
   *
   * @return \Illuminate\Http\Response
   */
  public function index() {
    return view('cms.inquiries', [
        'inquiries' => Inquiry::all()
    ]);
  }
}
