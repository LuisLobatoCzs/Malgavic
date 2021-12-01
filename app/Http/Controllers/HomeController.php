<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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

    public function Messages(){
        $mensajes = DB::table('mensajes')
                    ->orderBy('id_mensaje')
                    ->get();
        return view('messages',['mensajes'=>$mensajes]);
    }
    public function Detail(Request $request){
        $id = $_REQUEST['id'];
        $mensaje = DB::table('mensajes')
                    ->orderBy('id_mensaje')
                    ->where('id_mensaje', 'like', $id)
                    ->get();
        return view('detail', ['mensaje'=>$mensaje]);
    }
    public function Deleted(Request $request){
        $id = $_REQUEST['id'];
        DB::table('mensajes')
            ->where('id_mensaje','like',$id)
            ->update(['Status' => 'Eliminado']);
        return $this->Messages(); 
    }
    public function Attended(Request $request){
        $id = $_REQUEST['id'];
        DB::table('mensajes')
            ->where('id_mensaje','like',$id)
            ->update(['Status' => 'Atendido',
                        'user' => Auth::user()->id
                    ]);
        return $this->Messages(); 
    }
    public function Export(Request $request){
        header("Content-type: application/vnd.ms-excel; name='excel'");
        header("Content-Disposition: filename=archivo.xls");
        header("Pragma: no-cache");
        header("Expires: 0");

        if (isset($_POST['data_to_send']) && $_POST['data_to_send'] != '') {
            echo $_POST['data_to_send'];
        }
    }
}
