<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Carbon\Carbon;

use App\Models\Book;
use App\Models\User;
Use App\Models\Contact;

class DashboardController extends Controller{

    protected $ajaxURL_Cancel = '/data/newCancel';

    /* GET METHODS */

    public function reservas(){
        if(session('auth.user') !== null){
            if(session('auth.user') == 'chickensteen-e-dez'){
                $totalBooks = self::getTotalBooks();
                $totalDayBooks = self::getTotalDayBooks();
                $totalFutureBooks = self::getTotalFutureBooks();
                $listBooksToday = self::getListBooksToday();
                return view('reservas/reservas', array('ajaxURL_Cancel' => $this->ajaxURL_Cancel, 'totalBooks' => $totalBooks, 'totalDayBooks' => $totalDayBooks, 'totalFutureBooks' => $totalFutureBooks, 'listBooksToday' => $listBooksToday));
            }
        }
        return redirect('/login');
    }

    public function usuarios(){
        if(session('auth.user') !== null){
            if(session('auth.user') == 'chickensteen-e-dez'){
                $totalUsers = self::getTotalUsers();
                $totalTodayUsers = self::getTotalTodayUsers();
                $listUsers = self::getAllUsers();
                return view('usuarios/usuarios', array('totalUsers' => $totalUsers, 'totalTodayUsers' => $totalTodayUsers, 'listUsers' => $listUsers));
            }
        }
        return redirect('/login');
    }

    public function contatos(){
        if(session('auth.user') !== null){
            if(session('auth.user') == 'chickensteen-e-dez'){
                $totalContacts = self::getTotalContacts();
                $totalTodayContacts = self::getTotalTodayContacts();
                $listContacts = self::getAllContacts();
                return view('contatos/contatos', array('totalContacts' => $totalContacts, 'totalTodayContacts' => $totalTodayContacts, 'listContacts' => $listContacts));
            }
        }
        return redirect('/login');
    }

    public function versaoPro(){
        if(session('auth.user') !== null){
            if(session('auth.user') == 'chickensteen-e-dez'){
                return view('outros/versaoPro');
            }
        }
        return redirect('/login');
    }

    public function logout(){
        session(['auth.user' => null]);
        return redirect('/login');
    }

    /* POST METHODS */

    public function newCancel(Request $request){
        $allRequests = $request->all();
        if(isset($allRequests['id_book']) && !empty($allRequests['id_book'])){
            self::cancelBookByID($allRequests['id_book']);
            return json_encode(array('success' => true));
        }
        return json_encode(array('errors' => true));
    }

    /* PRIVATE METHODS */

    private static function getTotalBooks(){
        $bookList = Book::where('is_active', 1)->get();
        return $bookList->count();
    }

    private static function getTotalDayBooks(){
        $bookList = Book::where('is_active', 1)->whereDate('dt_dateevent', Carbon::today('America/Sao_Paulo'))->get();
        return $bookList->count();
    }

    private static function getTotalFutureBooks(){
        $bookList = Book::where('is_active', 1)->whereDate('dt_dateevent', '>', Carbon::today('America/Sao_Paulo'))->get();
        return $bookList->count();
    }

    private static function getListBooksToday(){
        return Book::join('users', 'users.id_user', '=', 'books.id_user')->where('is_active', 1)->whereDate('dt_dateevent', Carbon::today('America/Sao_Paulo'))->get()->toArray();
    }

    private static function cancelBookByID($bookID){
        Book::where('id_book', $bookID)->update(['is_active' => 0]);
    }

    private static function getAllUsers(){
        return User::get()->toArray();
    }

    private static function getTotalUsers(){
        $userList = User::get();
        return $userList->count();
    }

    private static function getTotalTodayUsers(){
        $userList = User::whereDate('dt_datecreated', Carbon::today('America/Sao_Paulo'))->get();
        return $userList->count();
    }

    private static function getTotalContacts(){
        $contactList = Contact::get();
        return $contactList->count();
    }

    private static function getTotalTodayContacts(){
        $contactList = Contact::whereDate('dt_datecreated', Carbon::today('America/Sao_Paulo'))->get();
        return $contactList->count();
    }

    private static function getAllContacts(){
        return Contact::get()->toArray();
    }
    
}
