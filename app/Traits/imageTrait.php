<?php

namespace App\Traits;

Trait  imageTrait
{
     function saveImage($photo,$folder){
        //save photo in folder
        $file_extension = $photo -> getClientOriginalExtension(); // image.png -> png
        $file_name = time().'.'.$file_extension; //125478555.png
        $path = $folder;
        $photo -> move($path,$file_name);
        return $file_name; //125478555

    }


}
