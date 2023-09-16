<?php

namespace App\Http\Controllers;

use App\Models\Trainee;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;

class TraineeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('trainee.index', [
            'trainees' => Trainee::all()
        ]);
    }

    public function verify(Trainee $trainee) : View
    {
        return view('trainee.verify', [
            'trainee' => $trainee
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('trainee.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = request()->validate([
            'full_name' => ['required'],
            'certificate_image' => ['required']
        ]);
        $data['slug'] = Str::orderedUuid();
        $file = request()->file('certificate_image');
        if($file) {
            $data['certificate_image'] = uniqid().'_'.trim($file->getClientOriginalName());
            $file->storeAs('certificates/', $data['certificate_image'], 'public');
        }
       
        Trainee::create($data);

        return Redirect::route('trainee.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Trainee $trainee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Trainee $trainee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Trainee $trainee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Trainee $trainee)
    {
        //
    }
}
