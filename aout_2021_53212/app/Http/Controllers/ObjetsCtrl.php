<?php

use App\Http\Controllers\Controller;
use App\Models\EmplcmtsModel;

use Illuminate\Http\Request;

class ObjetsCtrl extends Controller
{
    public function objets($id)
    {
        $objets = EmplcmtsModel::showDepots($id);

        $objet = new stdClass();

        $objet->nomDepot = $objets[0]->nom_depot;
        $objet->nom = $objets[0]->nom_contributor;

        $i = 0;
        foreach ($objets as $obj) {
            $objet->commits[$i] = new stdClass();
            $objet->commits[$i]->date = $obj->date;
            $objet->commits[$i]->commit = $obj->message_commit;

            $i++;
        }
        return $objet;
    }
}
