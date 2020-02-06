<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    //
	  protected $table = 'product_images';
	  protected $guarded = ['id'];
	  public $timestamps = true;
	  public function product()
	  {
	  		return $this->belongsTo('App/Product','idproduct','id');
	  }
	   
	   public  function deleteimage()
	   {

	   	$media_path = public_path('uploads/'.config('constants.product_img_path').'/' . $this->imageurl);

        if (file_exists($media_path)) {
            unlink($media_path);
            $this->delete();
        }
	   }

}
