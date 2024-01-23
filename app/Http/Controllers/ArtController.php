<?php

namespace App\Http\Controllers;

use Faker\Provider\Lorem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Article;

class ArtController extends Controller
{
    public function getOne($id){
        $data = Article::find($id);
        echo "<table>
           <tr></th><th>Id</th><th>title</th><th>Desc</th><th>Text</th><th>Date</th>";
            foreach ($data as $user) {
                echo "<tr>";
                    echo "<td >" .  $user->title . "</td>";
                    echo "<td >" . $user->desc . "</td>";
                    echo "<td >" . $user->text . "</td>";
                    echo "<td>" . $user->date . "</td>";
                echo "</tr>" ;
                }
                echo "</table>";
        dd($data);
        return view('home');
    }
     
}
