<?php

namespace App\Http\Controllers;

use App\Oprec;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class OprecController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $oprecs = Oprec::orderBy('updated_at', 'desc')->get();
        return view('admin.pages.oprec', compact('oprecs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'bail|required|max:126',
            'NRP' => 'bail|required|digits:14',
            'division' => 'bail|required|max:126',
            'department' => 'bail|required|max:126',
            'essay_general' => 'bail|required|file|mimes:pdf|max:1024',
            'essay_division' => 'bail|file|mimes:pdf|max:1024',
            'CV' => 'bail|required|file|mimes:pdf|max:1024',
            'KTM' => 'bail|required|file|mimes:pdf|max:1024'
        ]);
        if ($validator->fails()) {
            return redirect()->back()->with('error', 'Whoops, something error!');
        }
        if ($request->hasFile('essay_general')) {
            $fileEsssayGeneral = $request->file('essay_general')->getClientOriginalName();
            $fileEsssayGeneral = pathinfo($fileEsssayGeneral, PATHINFO_FILENAME);
            $fileEsssayGeneral = $fileEsssayGeneral . '_' . time() . '.pdf';
            $request->file('essay_general')->storeAs('public/oprec', $fileEsssayGeneral);
        } else
            return redirect()->back()->with('error', 'Whoops, something error!');
       if ($request->hasFile('essay_division')) {
            $fileEssayDivision = $request->file('essay_division')->getClientOriginalName();
            $fileEssayDivision = pathinfo($fileEssayDivision, PATHINFO_FILENAME);
            $fileEssayDivision = $fileEssayDivision . '_' . time() . '.pdf';
            $request->file('essay_division')->storeAs('public/oprec', $fileEssayDivision);
        } else if($request->division != 'Official Division')
            return redirect()->back()->with('error', 'Whoops, something error!');
       if ($request->hasFile('CV')) {
            $fileCV = $request->file('CV')->getClientOriginalName();
            $fileCV = pathinfo($fileCV, PATHINFO_FILENAME);
            $fileCV = $fileCV . '_' . time() . '.pdf';
            $request->file('CV')->storeAs('public/oprec', $fileCV);
        } else
            return redirect()->back()->with('error', 'Whoops, something error!');
       if ($request->hasFile('KTM')) {
            $fileKTM = $request->file('KTM')->getClientOriginalName();
            $fileKTM = pathinfo($fileKTM, PATHINFO_FILENAME);
            $fileKTM = $fileKTM . '_' . time() . '.pdf';
            $request->file('KTM')->storeAs('public/oprec', $fileKTM);
        } else
            return redirect()->back()->with('error', 'Whoops, something error!');

        try {
            $oprec = new Oprec();
            $oprec->name = $request->name;
            $oprec->NRP = $request->NRP;
            $oprec->department = $request->department;
            $oprec->division = $request->division;
            $oprec->essay_general = $fileEsssayGeneral;
            if($request->division != 'Official Division')
                $oprec->essay_division = $fileEssayDivision;
            else
                $oprec->essay_division = $fileEsssayGeneral;
            $oprec->CV = $fileCV;
            $oprec->KTM = $fileKTM;
            $oprec->save();
        } catch (\Exception $e) {
            $eMessage = 'Add Message, error: ' . $e->getMessage();
            Log::emergency($eMessage);
            return redirect()->back()->with('error', 'Whoops, something error!');
        }
        return redirect()->back()->with('success', 'success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Oprec  $oprec
     * @return \Illuminate\Http\Response
     */
    public function show(Oprec $oprec)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Oprec  $oprec
     * @return \Illuminate\Http\Response
     */
    public function edit(Oprec $oprec)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Oprec  $oprec
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Oprec $oprec)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Oprec  $oprec
     * @return \Illuminate\Http\Response
     */
    public function destroy(Oprec $oprec)
    {
        //
    }
}
