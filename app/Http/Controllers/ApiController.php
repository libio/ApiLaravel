<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class ApiController extends Controller
{
    //
    public function index(Request $request){
        $Nro_Documento = $request->nro_documento;
  
        $data = Http::get("https://dniruc.apisperu.com/api/v1/dni/{$request->nro_documento}?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJlbWFpbCI6Impvc3VtNTAzQGdtYWlsLmNvbSJ9.DeRLBxDgbyw87Kai4RiUiFj8Lh5CJcrZhpg-k0B5IRs");
        $infouser=$data->json();
 
        return view('ApiView',compact('infouser'));
        
        
        /*,compact('infouser' */
        //dump($Nro_Documento);
        
        

    }

    public function traerdata(Request $request){
      
        $numero=$request->nro_documento;
        $data = Http::get("https://dniruc.apisperu.com/api/v1/dni/{$request->nro_documento}?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJlbWFpbCI6Impvc3VtNTAzQGdtYWlsLmNvbSJ9.DeRLBxDgbyw87Kai4RiUiFj8Lh5CJcrZhpg-k0B5IRs");
        $infouser=$data->json();
        return view('info',compact('infouser'));
    }
}
