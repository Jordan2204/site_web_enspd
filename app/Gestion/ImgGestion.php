<?php 

namespace App\Gestion;

use Illuminate\Support\Facades\DB;
use App\Media;
use App\TypeMedia;

class ImgGestion implements ImgGestionInterface
{

    public function save($data)
    {
        $image = $data['image'];
        if (!isset($data['matPers'])) {
            $data['matPers'] = $data['titre'];
        }

        if($image->isValid())
        {
            $chemin = config('images.path');
            $extension = $image->getClientOriginalExtension();

            do {
                $nom = str_random(10) . '.' . $extension;
            } while(file_exists($chemin . '/' . $nom));

            //recuperation de l'id du type
            $id =  DB::table('typemedia')->where('libelleType','img')->value('id');

            //Creation du media
            Media::create([
            'titre' => $data['matPers'],   
            'nom' => $nom,
            'chemin' => $chemin ,
            'description' => $data['description'],
            'id_type' => $id,
        ]);

            return $image->move($chemin, $nom);
        }

        return false;
    }

    public function updateImg($data)
    {
        $image = $data['image'];
        $nom = "";
        if($image->isValid())
        {
            $chemin = config('images.path');
            $extension = $image->getClientOriginalExtension();

            do {
                $nom = str_random(10) . '.' . $extension;
            } while(file_exists($chemin . '/' . $nom));

            if ($image->move($chemin, $nom)) {
               return $nom;
            }
            
        }

        return false;
    }

}