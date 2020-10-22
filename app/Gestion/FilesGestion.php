<?php 

namespace App\Gestion;

use Illuminate\Support\Facades\DB;
use App\Media;
use App\TypeMedia;

class FilesGestion implements FilesGestionInterface
{

    public function save($data)
    {
        $file = $data['file'];

        if($file->isValid())
        {
            $chemin = config('files.path');
            $extension = $file->getClientOriginalExtension();

            if($extension == 'mp3' || $extension == 'zip' || $extension == 'wav'){
                do {
                 $nom = str_random(10) . '.' . $extension;
                } while(file_exists($chemin . '/' . $nom));

                //recuperation de l'id du type
                $id =  DB::table('typemedia')->where('libelleType','file')->value('id');

                //Creation du media
                Media::create([
                'titre' => $data['titre'],   
                'nom' => $nom,
                'chemin' => $chemin ,
                'description' => $data['description'],
                'id_type' => $id,
            
                ]);

                 return $file->move($chemin, $nom);
             }
   
    }
     return false;
 }

  public function updateFile($data)
    {
        $fichier = $data['file'];
        $nom = "";
        if($fichier->isValid())
        {
            $chemin = config('files.path');
            $extension = $fichier->getClientOriginalExtension();
            if($extension == 'pdf' || $extension == 'zip' || $extension == 'docx'){
                do {
                 $nom = str_random(10) . '.' . $extension;
                } while(file_exists($chemin . '/' . $nom));


                if ($fichier->move($chemin, $nom)) {
                   return $nom;
                }
            }
            
        }

        return false;
    }

}