// app/Http/Controllers/EventController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        // Jika kamu memiliki data event dari database, tambahkan logika untuk mengambil data
        // Misalnya: $events = Event::all();
        
        // Untuk sekarang, kita kirimkan data dummy jika belum ada database event
        $events = [
            (object)[
                'title' => 'Sendawar Beauty Cat Show 2025',
                'description' => 'The contest was attended by 71 cats. Some of the categories competed were long tail, fashion show, health, and adult to children’s breed cats and also domestic cats.',
                'date' => '28 October 2024',
                'location' => 'Lamin Tonyoi, Sendawar Cultural Park, Barong Tongkok District, West Kutai Regency'
            ]
        ];

        // Mengirim data event ke view
        return view('event.index', compact('events'));
    }
}
