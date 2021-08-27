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

    static public function showDepots($id) {
        $depots = DB::select( "
        SELECT r.name AS nom_depot, con.name AS nom_contributor, com.message as message_commit, date as date
        FROM repositories r
        JOIN contributors con ON con.login = r.contributor_login
        LEFT JOIN commits com ON com.repository_id = r.id
        WHERE r.id=$id
        GROUP BY r.id, r.name, com.message
        ");
        return $depots;
    }
}
