<?php
 namespace App\Application\Model;
 use Illuminate\Database\Eloquent\Model;
 class Car extends Model
{
   public $table = "car";
   public function region(){
		return $this->belongsTo(Region::class, "region_id");
		}
   public function country(){
  return $this->belongsTo(Country::class, "country_id");
  }
   public function accessories(){
  return $this->belongsToMany( Accessories::class, "accessories_car", "car_id" , "accessories_id");
  }
   public function maincat(){
  return $this->belongsTo(Maincat::class, "maincat_id");
  }
   public function brand(){
  return $this->belongsTo(Brand::class, "brand_id");
  }
   public function user(){
  return $this->belongsTo(User::class, "user_id");
  }
    protected $fillable = [
    'region_id',
    'country_id',
    'maincat_id',
    'brand_id',
   'user_id',
        'title','body','image','youtube',
        'price'
   ];
 }
