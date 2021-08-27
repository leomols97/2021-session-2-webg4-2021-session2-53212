<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\DB;
class EmplcmtsModel extends Model
{
    use HasFactory;

    static public function findAll() {
        $emplacements = DB::select( '
        SELECT e.name AS nom_emplacement, COUNT(e.id) AS nb_objets
        FROM Emplacements e
        LEFT JOIN Objets o ON o.emplacement_id = e.id
        GROUP BY e.name
        ');
        return $emplacements;
    }

    static public function showContenu($id) {
        $contenu = DB::select( "
        SELECT e.id AS id_emplacement, e.name AS nom_emplacement, o.name AS nom_objet, o.created_at AS date_d_entree
        FROM emplacements e
        LEFT JOIN Objets o ON o.emplacement_id = e.id
        WHERE e.id=$id
        ");
        return $contenu;
    }
}
