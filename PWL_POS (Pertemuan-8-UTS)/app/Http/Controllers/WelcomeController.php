<?php

namespace App\Http\Controllers;

use App\Exports\MembersExport;
use App\Models\userModel;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Yajra\DataTables\Facades\DataTables;

class WelcomeController extends Controller
{
    public function index()
    {
        $breadcrumb = (object) [
            'title' => 'Selamat Datang',
            'list' => ['Home', 'Welcome']
        ];

        $activeMenu = 'dashboard';

        // return view('welcome', ['breadcrumb' => $breadcrumb, 'activeMenu' => $activeMenu]);
        return view('home.index', compact('breadcrumb', 'activeMenu'));
    }

    public function list(Request $request)
    {
        $users = userModel::with('level')
                ->whereRelation('level', 'level_nama', 'Member' );

        if($request->level_id){
            $users->where('level_id', $request->level_id);
        }

        return DataTables::of($users)->addIndexColumn() // menambahkan kolom index / no urut (default nama kolom: DT_RowIndex)
        ->addColumn('aksi', function ($user) { // menambahkan kolom aksi
        $btn = '<a href="'.url('/user/' . $user->user_id).'" class="btn btn-info btn-sm">Detail</a> ';
        $btn .= '<a href="'.url('/user/' . $user->user_id . '/edit').'" 
        class="btn btn-warning btn-sm">'.($user->status == 0 ? 'Validate' : 'Unvalidate' ).'</a> ';
        $btn .= '<form class="d-inline-block" method="POST" action="'. 
        url('/user/'.$user->user_id).'">'
        . csrf_field() . method_field('DELETE') . 
        '<button type="submit" class="btn btn-danger btn-sm" 
        onclick="return confirm(\'Apakah Anda yakit menghapus data 
        ini?\');">Hapus</button></form>'; 
        return $btn;
        })
        ->rawColumns(['aksi']) // memberitahu bahwa kolom aksi adalah html
        ->make(true);
    }
    

    public function exportPdf()
    {
        $members = userModel::with('level')
        ->whereRelation('level', 'level_nama', 'Member' )
        ->get();


        $pdf = Pdf::loadView('export_table.memberTable', [
            'members' => $members,
            'title' => 'Data Member'
        ]);

        return response()->streamDownload(function() use($pdf){
            echo $pdf->stream();
        }, 'Data_Member_PWL_POS.pdf');
    }

    public function exportExcel()
    {
        return Excel::download(new MembersExport, 'Data_Member_PWL_POS.xlsx');
    }

}
