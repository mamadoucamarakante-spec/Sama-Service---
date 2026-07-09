<?php> 
namespace App\Http\Controllers; 
use App\Models\Contact; 
use Illuminate\Http\Request; 
class ContactController extends Controller 
{ 
    public function index() 
    { 
        return view('contact'); 
    } 
    public function store(Request $request) 
    { 
        $validated = $request-
            'message' =
        ]); 
        Contact::create($validated); 
        return redirect('/contact')-, 'Message envoy‚ !'); 
    } 
}  
