<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\EmplcmtsModel;

class EmplacementsCtrl extends Controller
{
    public function emplacements()
    {
        $emplacements = EmplcmtsModel::findAll();
        return view("emplacements", ["emplacements" => $emplacements]);
    }
}
