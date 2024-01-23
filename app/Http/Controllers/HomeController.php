<?php

namespace App\Http\Controllers;

use Faker\Provider\Lorem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Cache;
use App\Models\Post;
use App\Models\City;
use App\Models\Country;
use App\Models\Article;
use App\Models\Rubric;
use App\Models\User;
use App\Models\Profile;
use App\Models\Tag;
use  Carbon\Carbon;
use  Illuminate\Support\Facades\Response;


class HomeController extends Controller
{
    public function index(Request $request){

        // $query = DB::insert("INSERT INTO posts (title, content, created_at, updated_at)
        // VALUES (?,?,?,?)", ['3Post', 'lorem', NOW(), NOW()]);
        
        // DB::update("UPDATE posts SET created_at = ? WHERE created_at IS NULL OR updated_at IS NULL, [NOW(), NOW()]");

        // $posts = DB::delete("DELETE * FROM posts");

       

        
        
    
        // $res = 2+ 3;
        // $name = 'Name';
        // return view('home',compact('res', 'Name'));

//         echo "<h1>Вариант первый</h1>";

//          $data1 = db::table('employees')->get();
//          echo "<table>
//          <tr></th><th>Айди</th><th>Имя</th><th>День рождения</th><th>Профиссия</th><th>Зарплата</th>";
//          foreach ($data1 as $user) {
//                 echo "<tr>";
//                     echo "<td >" . $user->id . "</td>";
//                     echo "<td >" .  $user->name . "</td>";
//                     echo "<td >" . $user->birthday . "</td>";
//                     echo "<td >" . $user->position . "</td>";
//                     echo "<td>" . $user->salary . "</td>";
//                 echo "</tr>" ;
//                 }
//                 echo "</table>";
// //-----------------------------------------------------------------------------------------------------------------------------//
//         echo "<h1>Вариант второй</h1>";
//         $data2 = db::table('employees')->select('name','salary')->get();
//         echo "<table>
//          <tr></th><th>Имя</th><th>Зарплата</th>";
//          foreach ($data2 as $user2) {
//                 echo "<tr>";
//                     echo "<td >" .  $user2->name . "</td>";
//                     echo "<td>" . $user2->salary . "</td>";
//                 echo "</tr>" ;
//                 }
//                 echo "</table>";
// //----------------------------------------------------------------------------------------------------------------------------//
//         echo "<h1>Вариант третий</h1>";
//         $data3 = DB::table('employees')->select('name', 'salary')->where('salary', '=', 500)-> get();
//         echo "<table>
//          <tr></th><th>Имя</th><th>Зарплата</th>";
//          foreach ($data3 as $user3) {
//                 echo "<tr>";
//                     echo "<td >" .  $user3->name . "</td>";
//                     echo "<td>" . $user3->salary . "</td>";
//                 echo "</tr>" ;
//             }
//             echo "</table>";
// //----------------------------------------------------------------------------------------------------------------------------//
//         echo "<h1>Вариант четвёртый</h1>";
//         $data4 = DB::table('employees')->select('name', 'salary')->where('salary', '>', 450)-> get();
//         echo "<table>
//          <tr></th><th>Имя</th><th>Зарплата</th>";
//          foreach ($data4 as $user4) {
//                 echo "<tr>";
//                     echo "<td >" .  $user4->name . "</td>";
//                     echo "<td>" . $user4->salary . "</td>";
//                 echo "</tr>" ;
//             }
//             echo "</table>";
// //----------------------------------------------------------------------------------------------------------------------------//
//         echo "<h1>Вариант #5</h1>";
//         $data5 = DB::table('employees')->select('name', 'salary')->where('salary', '!=', 500)-> get();
//         echo "<table>
//          <tr></th><th>Имя</th><th>Зарплата</th>";
//          foreach ($data5 as $user5) {
//                 echo "<tr>";
//                     echo "<td >" .  $user5->name . "</td>";
//                     echo "<td>" . $user5->salary . "</td>";
//                 echo "</tr>" ;
//             }
//             echo "</table>";
// //----------------------------------------------------------------------------------------------------------------------------//
//         echo "<h1>Вариант #6</h1>";
//         $data6 = DB::table('employees')->select('id', 'name', 'salary')->where('salary', '=', 400)->orWhere('id', '>', 4)-> get();
//         echo "<table>
//          <tr></th><th>Имя</th><th>Зарплата</th>";
//          foreach ($data6 as $user6) {
//                 echo "<tr>";
//                     echo "<td >" .  $user6->id . "</td>";
//                     echo "<td >" .  $user6->name . "</td>";
//                     echo "<td>" . $user6->salary . "</td>";
//                 echo "</tr>" ;
//             }
//             echo "</table>";
// //------------------------------------------------------------------------------------------------------------------------------//
//             echo "<h1>Вариант #7</h1>";

//             $data7 = DB::table('employees')->where('id', '=', 3)-> get();
//             echo "<table>
//             <tr></th><th>Айди</th><th>Имя</th><th>День рождения</th><th>Профиссия</th><th>Зарплата</th>";
//             foreach ($data7 as $user7) {
//                    echo "<tr>";
//                        echo "<td >" . $user7->id . "</td>";
//                        echo "<td >" .  $user7->name . "</td>";
//                        echo "<td >" . $user7->birthday . "</td>";
//                        echo "<td >" . $user7->position . "</td>";
//                        echo "<td>" . $user7->salary . "</td>";
//                    echo "</tr>" ;
//                    }
//                    echo "</table>";
// //------------------------------------------------------------------------------------------------------------------------------//
//             echo "<h1>Вариант #8</h1>";

//             $data8 = DB::table('employees')->select( 'name' )->where('id', '=', 5)-> get();
//             echo "<table>
//             <tr></th><th>Имя</th>";
//             foreach ($data8 as $user8) {
//                    echo "<tr>";
//                        echo "<td >" .  $user8->name . "</td>";
//                    echo "</tr>" ;
//                    }
//                    echo "</table>";
// //------------------------------------------------------------------------------------------------------------------------------//
//             echo "<h1>Вариант #9</h1>";

//             $data9 = DB::table('employees')->select( 'name' )-> get();
//             echo "<table>
//             <tr></th><th>Имя</th>";
//             foreach ($data9 as $user9) {
//                 echo "<tr>";
//                     echo "<td >" .  $user9->name . "</td>";
//                 echo "</tr>" ;
//                 }
//                 echo "</table>";

// //------------------------------------------------------------------------------------------------------------------------------//
//             echo "<h1>Вариант #10</h1>";

//             $data10 = DB::table('employees')->where([['salary', '<', 1100],['salary', '>', 450]] )-> get();
//             echo "<table>
//             <tr></th><th>Айди</th><th>Имя</th><th>День рождения</th><th>Профиссия</th><th>Зарплата</th>";
//             foreach ($data10 as $user10) {
//                 echo "<tr>";
//                     echo "<td >" . $user10->id . "</td>";
//                     echo "<td >" .  $user10->name . "</td>";
//                     echo "<td >" . $user10->birthday . "</td>";
//                     echo "<td >" . $user10->position . "</td>";
//                     echo "<td>" . $user10->salary . "</td>";
//                 echo "</tr>" ;
//                 }
//                 echo "</table>";
// //------------------------------------------------------------------------------------------------------------------------------//
//             echo "<h1>Вариант #11</h1>";

//             $data11 = DB::table('employees')->whereNotBetween('salary', [300, 600])->get();
//             echo "<table>
//             <tr></th><th>Айди</th><th>Имя</th><th>День рождения</th><th>Профиссия</th><th>Зарплата</th>";
//             foreach ($data11 as $user11) {
//                 echo "<tr>";
//                     echo "<td >" . $user11->id . "</td>";
//                     echo "<td >" .  $user11->name . "</td>";
//                     echo "<td >" . $user11->birthday . "</td>";
//                     echo "<td >" . $user11->position . "</td>";
//                     echo "<td>" . $user11->salary . "</td>";
//                 echo "</tr>" ;
//                 }
//                 echo "</table>";
// //------------------------------------------------------------------------------------------------------------------------------//
//             echo "<h1>Вариант #12</h1>";

//             $data12 = DB::table('employees')->where('id', '=', 5)->orWhere('id', '<', 4)-> get();
//             echo "<table>
//             <tr></th><th>Айди</th><th>Имя</th><th>День рождения</th><th>Профиссия</th><th>Зарплата</th>";
//             foreach ($data12 as $user12) {
//                 echo "<tr>";
//                     echo "<td >" . $user12->id . "</td>";
//                     echo "<td >" .  $user12->name . "</td>";
//                     echo "<td >" . $user12->birthday . "</td>";
//                     echo "<td >" . $user12->position . "</td>";
//                     echo "<td>" . $user12->salary . "</td>";
//                 echo "</tr>" ;
//                 }
//                 echo "</table>";
// //------------------------------------------------------------------------------------------------------------------------------//
//             echo "<h1>Вариант #13</h1>";

//             $data13 = DB::table('employees')->whereNotBetween('id', [1,3])-> get();
//             echo "<table>
//             <tr></th><th>Айди</th><th>Имя</th><th>День рождения</th><th>Профиссия</th><th>Зарплата</th>";
//             foreach ($data13 as $user13) {
//                 echo "<tr>";
//                     echo "<td >" . $user13->id . "</td>";
//                     echo "<td >" .  $user13->name . "</td>";
//                     echo "<td >" . $user13->birthday . "</td>";
//                     echo "<td >" . $user13->position . "</td>";
//                     echo "<td>" . $user13->salary . "</td>";
//                 echo "</tr>" ;
//                 }
//                 echo "</table>";
// //------------------------------------------------------------------------------------------------------------------------------//
//             echo "<h1>Вариант #14</h1>";

//             $data14 = DB::table('employees')->where('id', '<', 4)-> orWhere([['salary', '<', 800],['salary', '>', 390]] )-> get();
//             echo "<table>
//             <tr></th><th>Айди</th><th>Имя</th><th>День рождения</th><th>Профиссия</th><th>Зарплата</th>";
//             foreach ($data14 as $user14) {
//                 echo "<tr>";
//                     echo "<td >" . $user14->id . "</td>";
//                     echo "<td >" .  $user14->name . "</td>";
//                     echo "<td >" . $user14->birthday . "</td>";
//                     echo "<td >" . $user14->position . "</td>";
//                     echo "<td>" . $user14->salary . "</td>";
//                 echo "</tr>" ;
//                 }
//                 echo "</table>";
// //------------------------------------------------------------------------------------------------------------------------------//
//             echo "<h1>Вариант #15</h1>";

//             $data15 = DB::table('employees')->where('salary', '=', 500)-> orWhere('position', '=', 'программист')-> get();
//             echo "<table>
//             <tr></th><th>Айди</th><th>Имя</th><th>День рождения</th><th>Профиссия</th><th>Зарплата</th>";
//             foreach ($data15 as $user15) {
//                 echo "<tr>";
//                     echo "<td >" . $user15->id . "</td>";
//                     echo "<td >" .  $user15->name . "</td>";
//                     echo "<td >" . $user15->birthday . "</td>";
//                     echo "<td >" . $user15->position . "</td>";
//                     echo "<td>" . $user15->salary . "</td>";
//                 echo "</tr>" ;
//                 }
//                 echo "</table>";
// //------------------------------------------------------------------------------------------------------------------------------//
//             echo "<h1>Вариант #16</h1>";

//             $data16 = DB::table('employees')->where([['salary', '=', 500],['position', '=', 'программист']])-> get();
//             echo "<table>
//             <tr></th><th>Айди</th><th>Имя</th><th>День рождения</th><th>Профиссия</th><th>Зарплата</th>";
//             foreach ($data16 as $user16) {
//                 echo "<tr>";
//                     echo "<td >" . $user16->id . "</td>";
//                     echo "<td >" .  $user16->name . "</td>";
//                     echo "<td >" . $user16->birthday . "</td>";
//                     echo "<td >" . $user16->position . "</td>";
//                     echo "<td>" . $user16->salary . "</td>";
//                 echo "</tr>" ;
//                 }
//                 echo "</table>";
// //------------------------------------------------------------------------------------------------------------------------------//
//             echo "<h1>Вариант #17</h1>";

//             $data17 = DB::table('employees')->orderBy('salary')-> get();
//             echo "<table>
//             <tr></th><th>Айди</th><th>Имя</th><th>День рождения</th><th>Профиссия</th><th>Зарплата</th>";
//             foreach ($data17 as $user17) {
//                 echo "<tr>";
//                     echo "<td >" . $user17->id . "</td>";
//                     echo "<td >" .  $user17->name . "</td>";
//                     echo "<td >" . $user17->birthday . "</td>";
//                     echo "<td >" . $user17->position . "</td>";
//                     echo "<td>" . $user17->salary . "</td>";
//                 echo "</tr>" ;
//                 }
//                 echo "</table>";
// //------------------------------------------------------------------------------------------------------------------------------//
//             echo "<h1>Вариант #18</h1>";

//             $data18 = DB::table('employees')->orderBy('birthday', 'desc')-> get();
//             echo "<table>
//             <tr></th><th>Айди</th><th>Имя</th><th>День рождения</th><th>Профиссия</th><th>Зарплата</th>";
//             foreach ($data18 as $user18) {
//                 echo "<tr>";
//                     echo "<td >" . $user18->id . "</td>";
//                     echo "<td >" .  $user18->name . "</td>";
//                     echo "<td >" . $user18->birthday . "</td>";
//                     echo "<td >" . $user18->position . "</td>";
//                     echo "<td>" . $user18->salary . "</td>";
//                 echo "</tr>" ;
//                 }
//                 echo "</table>";
// //------------------------------------------------------------------------------------------------------------------------------//
//             echo "<h1>Вариант #19</h1>";

//             $data19 = DB::table('employees')->max('salary');
//             echo 'Зарплата: ' . $data19;
// //------------------------------------------------------------------------------------------------------------------------------//
//             echo "<h1>Вариант #20</h1>";

//             $data20 = DB::table('employees')->sum('salary');
//             echo 'Зарплата: ' . $data20;
// //------------------------------------------------------------------------------------------------------------------------------//
//             // echo "<h1>Вариант #21</h1>";

//             // $data21 = DB::table('employees')->groupBy('position')->selectRaw('min(salary) as min, position')->get();
//             // dd($data21);
// //------------------------------------------------------------------------------------------------------------------------------//
//             // echo "<h1>Вариант #22</h1>";

//             // $data22 = DB::table('employees')->groupBy('position')->selectRaw('sum(salary) as sum, position')->get();
//             // dd($data22);
// //------------------------------------------------------------------------------------------------------------------------------//
//             echo "<h1>Вариант #23</h1>";

//             $data23 = DB::table('employees')->whereDate('birthday','1988-03-25')->get();
//             foreach ($data23 as $user23) {
//                  echo 'День рождения 1988-03-25 у ' . $user23->name;
//             }
        
// //------------------------------------------------------------------------------------------------------------------------------//
//             echo "<h1>Вариант #24</h1>";

//             $data24 = DB::table('employees')->whereDay ('birthday','25')->get();
//             foreach ($data24 as $user24) {
//                  echo 'День рождения 25 месяца у ' . $user24->name . ' /// ';
//             }
// //------------------------------------------------------------------------------------------------------------------------------//
//             echo "<h1>Вариант #25</h1>";

//             $data25 = DB::table('employees')->whereMonth ('birthday','3')->get();
//             foreach ($data25 as $user25) {
//                  echo 'День рождения в марте у ' . $user25->name . ' /// ';
//             }
// //------------------------------------------------------------------------------------------------------------------------------//
//             echo "<h1>Вариант #26</h1>";

//             $data26 = DB::table('employees')->whereYear ('birthday','1990')->get();
//             foreach ($data26 as $user26) {
//                  echo 'День рождения в марте у ' . $user26->name . ' /// ';
//             }
        
        
        // $data = db::table('country')->limite(5)->get();
        // $data = db::table('country')->select('Code','Name')->limite(5)->get();
        // $data = db::table('country')->select('Code','Name')->first();
        // $data = DB::table('country')->select('Code','Name')->orderBy('Code', 'desc')->first();
        // $data = DB::table('city')->select('ID','Name')->find(2);
        // $data = DB::table('city')->select('ID','Name')->where([['id', '<', 5],['id', '>', 2]] > get(););
        // $data = db::table('country')->Limit(10)->pluck('Name');
        // $data = DB::table('city')->select('CountryCode')->distinct()->get();

        //$data = DB::table('city')->select('city.ID', 'city.Name', 'country.Code','Country.Name as countryname')->limit(10)
        //         -> join('country', 'city.CountryCode', '=', 'country.Code') -> get();

        // dd($data);

    // $post = new Post();
    // $post->title = 'Статья 2';
    // $post->content = 'lorem';
    // $post->save();
    // $data = Post::all();
    // $data = Post::limit(2)->get();
    // $data = Post::where('id', '<', '3')->select('title')->get();
    // dd($data);
    // return view('home');
    // $data = City::limit(5)->get();
    // $data = Country::find('AGO');
    // dd($data);
    // Post::create(['title' => 'Пост4', 'content' => 'Con43']);
   // Post::destroy(5);
    // Article::create(['title' => 'Post-5', 'desc' => 'dsaf', 'text' => 'dhbj', 'date' => '2022-12-20']);
    //  $post = Post::find(3);
    //  dump($post->title, $post->rubric->title);

    //  $user = Profile::find(2);
    //  dump($user->user, $user->profile->name);

        // $rubrics = Rubric::find(2);

        // dump($rubrics->title);

        // foreach($rubrics->posts as $post)
        // {
        //     dump($post->title);
        // }

        // $posts = Post::all();
        // foreach($posts as $post)
        // {
        //      dump($post->title, $post->rubric->title);
        // }

        // $post = Post::find(1);
        // dump($post->title);
        // foreach($post->tags as $tag){
        //     dump($tag->title);
        // }

        // $Count = Country::find("AFG");
        //      dump($Count->Name);
        //  foreach($Count->citys as $city)
        //  {
        //      dump($city->Name);
        //  }

        // $Count = Country::all();
        // foreach($Count as $Cou)
        // {
        //     dump($Cou->Name, $Cou->citys);
        // }
        //  Cookie::queue('test', 'Value', 60);
        // dump(Cookie::get('test'));
        //  dump(Cookie::forget('test'));

        // Cache::put('key', 'value', 60);
       
        // if (cache::has('posts')){
        //     $posts = Cache::get('posts');
        // } else {
        //     $posts = Post::orderBy('id', 'desc')->get();
        //     Cache::put('posts', $posts);
        // }
        // dump($request->session()->all());


        // dump(session()->all());


        // session(['cart' => [
        //     ['id' => 1, 'title' => 'product 1'],
        // ['id' => 2, 'title' => 'product 2'],
        // ]]);

        // $request->session()->push('cart', ['id'=> 3, 'title' => 'product 3']);

        $request->session()->forget('cart');

        // dump(session('cart')[1]['title']);
        dump(session()->all());
        

        $title = "Home page";
        // $posts = Post::all();
        $posts = Post::orderBy('id','desc')->get();
        $launchTime = Carbon::now();
        $time = $launchTime->format('H:i');
        $firstVisit = $request->cookie('first_visit');
        $currentTime = now();

    // Проверяем, существует ли файл cookie first_visit
        if (empty($firstVisit)) {
            Cookie::queue('firstVisit', $time, 3600);
        }
        $timeDifference = $currentTime->diffInMinutes($firstVisit);
        return view('home', compact('title', 'posts', 'time', 'timeDifference'));

    }
    
    public function show(){
        $title = "About page";
        return view('about', compact('title'));
        
    }

    public function create(){
        $title = "Create page";
        $rubrics = Rubric::pluck('title', 'id')->all();
        return view('create', compact('title', 'rubrics')); 
    }
    public function store(Request $request){
        // $request->input('title');
        // $request->input('content');
        // $request->input('rubric_id');
        $this->validate($request,[
            'title' => 'required|min:5|max:100',
            'content' => 'required',
            'rubric_id' => 'required|integer'
        ],
        [
            'title.required' => "Заполните все поле 'title'",
            'content.required' => "Заполните все поле 'content'",
            'rubric_id.required' => "Заполните все поле 'rubric_id'",
            'title.min' => "Слишком мало символов",
            'title.max' => "Слишком много символов",
        ]);
        Post::create($request->all());
        return redirect()->route('home'); 
    }
    public function task(Request $request)
    {
        $title = 'Task 1';
        $currentMonth = $request->input('newMonth');
        $currentAge = $request->input('newAge');


        $currentArray = $request->input('Array');
        $currentArray = explode(",", $currentArray);

        $currentArray2 = $request->input('Array2');
        $currentArray2 = explode(",", $currentArray2);

        $currentArray3 = $request->input('Array3');
        $currentArray3 = explode(",", $currentArray3);
        
        return view('task', ['currentMonth' => $currentMonth,'currentAge' => $currentAge, 'currentArray' => $currentArray, 'currentArray2' => $currentArray2, 'currentArray3' => $currentArray3], compact('title'));
    }



  
}
