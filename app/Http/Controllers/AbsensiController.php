// app/Http/Controllers/AbsensiController.php

use App\Models\Absensi;
use Illuminate\Http\Request;

class AbsensiController extends Controller
{
    public function index()
    {
        $absensis = Absensi::all();
        return view('absensi.index', compact('absensis'));
    }

    public function create()
    {
        return view('absensi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'tanggal' => 'required|date',
            'status' => 'required|in:Hadir,Izin,Sakit,Alpha',
        ]);

        Absensi::create($request->all());

        return redirect()->route('absensi.index')->with('success', 'Data berhasil ditambahkan');
    }
}
