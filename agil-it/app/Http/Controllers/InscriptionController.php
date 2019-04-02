<?php
/**
 * Created by PhpStorm.
 * User: alexandre.duhem
 * Date: 02/04/19
 * Time: 16:25
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InscriptionController extends Controller
{

    public function afficherInscriptions()
    {
        $inscriptions = DB::table('contact_entreprise')->get();
        return view('inscription/inscriptions', ['inscriptions' => $inscriptions]);


    }


    public function devalider($id)
    {
        DB::delete('delete from contact_entreprise where id = ? ', [$id]);

        return redirect(route('afficherInscriptions'));
    }

    public function valider($id){
        $valider = 1;
        DB::table("contact_entreprise")->where("id", $id)->update([
            "valider" => $valider
        ]);

        return redirect(route('afficherInscriptions'));

    }

}