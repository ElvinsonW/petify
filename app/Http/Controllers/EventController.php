namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    // Menampilkan halaman index event
    public function index()
    {
        return view('event');  // Menampilkan view event.blade.php
    }
}