<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerPagina extends Controller
{
     //Retornar a pagina sobre
     public function sobre()
     {
 
         $dado = "htz@htz.com";
         $telefone = '38 3741-4077';
 
         //Chamando a view e passando um dado
         //with('nome variavel', valor)
         return view('sobre')->with('email', $dado)
         ->with('telefone', $telefone);
 
         //Outra forma passar dado pra uma view
         //return view('sobre')->withEmail($dado);
     }
 
     //Retornar a pagina contato
     public function contato()
     {
         return view('contato');
     }


}
