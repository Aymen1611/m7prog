<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function add() {


    $model = new Project();
    // definieer de velden
    $model->title = 'mijn data';
    // sla het model op
    $model->save();
   



  
}
}

