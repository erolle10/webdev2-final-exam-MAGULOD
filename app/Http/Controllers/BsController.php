<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\biblestudy;
class BsController extends Controller
{
    public function bslist (Request $request) {

        $bstable = biblestudy::all();
        return view ('/bslist', compact ('bstable'));
       }
    
       public function bsform (Request $request) {
    
        $bstable = new biblestudy();
        return view ('/bsform', compact ('bstable'));
       }
    
       public function createform (Request $request) {
    
        $bstable = new biblestudy();
        $bstable->name = $request-> name;
        $bstable->email = $request-> email;
        $bstable->number = $request-> number;
        $bstable->bdate = $request-> bdate;
        $bstable->religion = $request-> religion;
        $bstable->bsdate = $request-> bsdate;
        $bstable->bstime= $request-> bstime;
        $bstable->bslocation = $request-> bslocation;
        
       if ($bstable->save()) {
            return redirect ('/thank-you');
       }
            return redirect ('/thank-you');
       }
    
       public function thankyou (Request $request) {
    
        $bstable = new biblestudy();
        return view ('/thankyou');
       }
    }
}
