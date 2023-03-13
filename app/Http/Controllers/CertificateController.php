<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Certificate;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Str;





class CertificateController extends Controller
{



    public function create()
    {
        return view('create');
    }

    public function welcome()
    {
        return view('welcome');
    }


    public function store(Request $request)
    {
        $certificate = new Certificate();
        $certificate->ser_no = $request->ser_no;
        $certificate->no = $request->no;
        $certificate->rank = $request->rank;
        $certificate->name = $request->name;
        $certificate->son_daughter = $request->son_daughter;
        $certificate->unit = $request->unit;
        $certificate->date_of_birth = $request->date_of_birth;
        $certificate->group = $request->group;
        $certificate->ncc_directorate = $request->ncc_directorate;
        $certificate->year = $request->year;
        $certificate->grade = $request->grade;
        $certificate->place = $request->place;
        $certificate->date = $request->date;
        $certificate->commanding_officer = $request->commanding_officer;
        if ($request->hasFile('image')) {
            $file = $request->image;
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads', $filename);
            $certificate->image = $filename;
        }
        $certificate->save();
    }


    public function index()
    {
        $certificate = Certificate::all();
        return view('table', compact('certificate'));
    }
    public function pdfDownload($id)
    {
        $certificate = Certificate::find($id);
        $pdf = Pdf::loadView('edit', compact('certificate'));
        return $pdf->download('ncc-Certificate' . time() . rand('111', '9999') . Str::random('5') . '.pdf');
    }
    public function view($id)
    {
        $certificate = Certificate::find($id);
        return view('viewcertificate', compact('certificate'));
    }
    public function destroy($id)
    {
        $certificate = Certificate::find($id);
        $certificate->delete();
        return redirect()->route('admin.certificate');
    }
}
