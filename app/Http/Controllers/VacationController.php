<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\MedicallController;
use App\Models\Inscription;
use App\Models\Newsletter;
use App\Models\Rv;
use App\Models\Todo;
use App\Models\Todolist;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Support\Facades\Hash;

class VacationController extends Controller
{
    public function index(){
        $page       = new MedicallController();
        $services   = $page->getServices();
        $offers     = $page->getOffers();
        $posts      = $page->getLastArticles();

        $user = Auth::user();
        if (isset($user)) {
            switch ($user->role) {
                case 'admin':
                    return redirect()->route('admin.index');
                    break;
                case 'user':
                    return redirect()->route('patient.index');
                    break;
                case 'infirmier':
                    return redirect()->route('admin.index');
                    break;

                default:
                    # code...
                    break;
            }
        }
        return view('0 vacation.index',compact('services', 'offers', 'posts'));
    }
    public function blog($topic=null){
        $page       = new MedicallController();
        $services   = $page->getServices();
        $offers     = $page->getOffers();


        // if ($topic) {
        //     $posts      = \Canvas\Post::with('topic');
        //     $posts      =  $posts->where('topic',$topic)->paginate(10);
        //     $topics     = \Canvas\Topic::orderBy('name')->get();
        // }else{
            $posts      = \Canvas\Post::paginate(10);
            $topics     = \Canvas\Topic::orderBy('name')->get();

        // }

        if ($topic) {
            $menu = \Canvas\Topic::find($topic);;
        } else {
            $menu = null;
        }

        return view('0 vacation.pages.blog',compact('services', 'offers', 'posts', 'topics','menu'));
    }
    public function blogPage($id){
        $post     = \Canvas\Post::find($id);
        $topics     = \Canvas\Topic::orderBy('name')->get();

        return view('0 vacation.pages.blogpage',compact('post', 'topics'));
    }

    public function contact(){
        $page       = new MedicallController();
        $services   = $page->getServices();
        $offers     = $page->getOffers();
        $posts      = $page->getLastArticles();

        return view('0 vacation.pages.contact',compact('services', 'offers', 'posts'));
    }

    public function apropos(){
        $page       = new MedicallController();
        $services   = $page->getServices();
        $offers     = $page->getOffers();
        $posts      = $page->getLastArticles();

        return view('0 vacation.pages.apropos',compact('services', 'offers', 'posts'));
    }

    public function services(){
        $page       = new MedicallController();
        $services   = $page->getServices();
        $offers     = $page->getOffers();
        $posts      = $page->getLastArticles();

        return view('0 vacation.pages.services',compact('services', 'offers', 'posts'));
    }

    public function login()
    {
        return view('0 vacation.pages.login');
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('vacation');
    }

    public function register($role = 'user')
    {
        return view('0 vacation.pages.register', compact('role'));
    }
    public function registering(Request $request)
    {
        $user = new User();

        $user->prenom = $request->prenom;
        $user->nom = $request->nom;
        $user->tel = $request->tel;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role = $request->role;
        $user->save();

        return redirect()->route('vacation');
    }
    public function adminUserUpdate(Request $request)
    {
        $user = User::find($request->id);

        $user->prenom = $request->prenom;
        $user->nom = $request->nom;
        $user->tel = $request->tel;
        $user->email = $request->email;
        if($user->password != $request->password){
            $user->password = Hash::make($request->password);
        }
        $user->role = $request->role;
        $user->save();

        return redirect()->back();
    }
    public function adminUserDelete($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect()->back();
    }

    public function adminIndex(){
        $user = Auth::user();
        $users = array(
            'titre' => 'Utilisateurs',
            'nombre' => User::all()->count(),
            'description' => "Nombre d'utilisateurs",
            'route' => 'admin.userlist'
        );
        $commentaires = array(
            'titre' => 'Newsletter',
            'nombre' => Newsletter::all()->count(),

            'description' => "Nombre de commentaires",
            'route' => 'admin.newsletter'
        );
        $rv = array(
            'titre' => 'Rendez-Vous',
            'nombre' => Rv::all()->count(),
            'description' => "Nombre de rendez-vous",
            'route' => 'admin.rv'
        );
        $blog = array(
            'titre' => 'Blog',
            'nombre' => \Canvas\Post::all()->count(),
            'description' => "Nombre d'articles'",
            'route' => 'canvas'
        );
        $cv = array(
            'titre' => 'CVs',
            'nombre' => Inscription::all()->count(),
            'description' => "Nombre d'articles'",
            'route' => 'admin.inscription'
        );
        $todo = array(
            'titre' => 'Todolist',
            'nombre' => Todo::all()->count(),
            'description' => "Nombre de taches",
            'route' => 'admin.todo'
        );
        $resumes = array($users, $commentaires, $rv, $blog, $cv, $todo);
        return view('0 vacation.pages.admin-index', compact('resumes', 'user'));
    }

    public function adminUserList($categorie = null)
    {
        $user = Auth::user();
        $data = User::all();
        return view("0 vacation.pages.admin-userlist", compact('data', 'user'));
    }
    public function adminNewsletter($categorie = null)
    {
        $user = Auth::user();
        $data = Newsletter::all();
        return view("0 vacation.pages.admin-newsletter", compact('data', 'user'));
    }
    public function adminRv($categorie = null)
    {
        $user = Auth::user();
        $data = Rv::all();
        return view("0 vacation.pages.admin-rv", compact('data', 'user'));
    }
    public function adminTodo($categorie = null)
    {
        $user = Auth::user();
        $data = Todo::all();
        return view("0 vacation.pages.admin-todo", compact('data', 'user'));
    }
    public function adminTodolist($id)
    {
        $user = Auth::user();
        $todo = Todo::find($id);
        $data = Todolist::where('task_id',$todo->id)->get();

        // dd($data);
        return view("0 vacation.pages.admin-todolist", compact('data', 'todo', 'user'));
    }

    // Inscription des infirmiers
    public function AdminInscription(Request $request)
    {
        $user = Auth::user();
        $data = Inscription::all();
        return view("0 vacation.pages.admin-inscription", compact('data', 'user'));
    }
}
