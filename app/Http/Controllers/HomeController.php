<?php
   
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
   
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome()
    {
        $graph = User::where("is_admin", "!=", "1")->select(DB::raw('DATE(created_at) as date'), DB::raw('count(*) as total'))
            ->groupBy('date')
            ->get();
         $return = ["graph" => $graph];
        return view('admin.adminHome', $return);
    }
    
}
