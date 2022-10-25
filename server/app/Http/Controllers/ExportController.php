<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExportController extends Controller
{
    public function export(Request $request)
    {
        if ($request->isMethod('post')) {
            shell_exec('mysqldump -udocker -pdocker docker > db.sql');
            echo 'vao';die;
        }

        return view('export-db');
    }
}
