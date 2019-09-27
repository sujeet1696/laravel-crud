<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\PatientDescription;

class Patient extends Model
{
  protected $fillable = ['name', 'age', 'address'];
  protected $table = 'patients';
  // protected $hidden = ['id'];
  protected $visible = ['id', 'name', 'age', 'address', 'created_at', 'updated_at'];
  public function patientDetails()
  {
      return $this->hasOne('App\PatientDescription');
      // return $this->hasOne('App\PatientDescription', 'foreign_key', 'patient_id');
  }

  public function setNameAttribute($value)      //mutator
  {
      $this->attributes['name'] = strtolower($value);
  }

  public function getNameAttribute($value)    //Accessor
  {
      return strtoupper($value);
  }
}
