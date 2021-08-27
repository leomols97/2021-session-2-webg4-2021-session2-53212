<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\EmplcmtsModel;

class EmplacementsCtrl extends Controller
{
    public function emplacements()
    {
        $depots = EmplcmtsModel::findAll();
        return view("repo", ["depots" => $depots]);
    }
}
