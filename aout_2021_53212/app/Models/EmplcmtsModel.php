<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmplcmtsModel extends Model
{
    use HasFactory;

    static public function findAll() {
        $depots = DB::select( '
        SELECT r.id AS id_repo, r.name AS nom_depot, con.name AS nom_contributor, COUNT(com.id) AS nb_commits, com.message as message_commit
        FROM repositories r
        JOIN contributors con ON con.login = r.contributor_login
        LEFT JOIN commits com ON com.repository_id = r.id
        GROUP BY r.id, r.name
        ');
        return $depots;
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
