<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PatientDescription extends Model
{
  protected $fillable = ['illness_description', 'prescription', 'patient_id'];
  protected $attributes = [
       'prescription' => 'null',
     ];
  protected $visible = ['id','illness_description', 'prescription', 'patient_id','created_at','updated_at'];
  protected $table = 'patient_descriptions';

  public function patient() {
    return $this->belongsTo('App\Patient');
  }

}
