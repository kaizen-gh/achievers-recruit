<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function fileUpload(Request $req){
        $req->validate(['file' => 'required|mimes:doc,docx,pdf|max:4096' ]);
        $fileName='';

        if($req->file()) {
            $fileName = time().'_'.$req->file->getClientOriginalName();
            $filePath = $req->file('file')->storeAs('uploads', $fileName, 'public');
           // $fileModel->name = time().'_'.$req->file->getClientOriginalName();
            //$fileModel->file_path = '/storage/' . $filePath;
            //$fileModel->save();
            return $fileName;
        }
   }
}
