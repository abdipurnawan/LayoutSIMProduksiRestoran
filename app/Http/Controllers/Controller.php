<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function storeMenu(){
        return redirect('/menu-makanan')->with('statusInput', 'Menu makanan berhasil ditambahkan');
    }

    public function updateMenu(){
        return redirect('/menu-makanan')->with('statusUpdate', 'Menu makanan berhasil diupdate');
    }
}
