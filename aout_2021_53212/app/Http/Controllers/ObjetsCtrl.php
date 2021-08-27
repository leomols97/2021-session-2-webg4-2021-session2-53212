<?php

use App\Http\Controllers\Controller;
use App\Models\EmplcmtsModel;

use Illuminate\Http\Request;

class ObjetsCtrl extends Controller
{
    public function showContenu($id)
    {
        $objets = EmplcmtsModel::showContenu($id);

        $objet = new stdClass();

        $objet->nomEmplacement = $objets[0]->nom_emplacement;
        $objet->nomObjet = $objets[0]->nom_objet;

        $i = 0;
        foreach ($objets as $obj) {
            $objet->objets[$i] = new stdClass();
            $objet->objets[$i]->created_at = $obj->date_entree;
            $objet->objets[$i]->name = $obj->nom_objet;

            $i++;
        }
        return $objet;
    }
}
