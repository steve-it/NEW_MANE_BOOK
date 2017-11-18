<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\SousDomaine;

class Domaine extends Model 
{

    protected $table = 'domaines';
    public $timestamps = true;
    protected $fillable = ['NomDomaines'];

    public function SousDomaines()
    {
        return $this->hasMany('SousDomaine');
    }
    public function getsessionAnnee($Id_Annee){

        $domainesous = SousDomaine::where('domaines_id','=',$Id_Annee)->get();

        $select = null;
        $select .= "<option>-----------------------------------</option>";
        foreach($domainesous as $data){
            $select .= "<option value=".$data->id.">".$data->NomSousDomaines."</option>";
        }
        return $select;
    }

}