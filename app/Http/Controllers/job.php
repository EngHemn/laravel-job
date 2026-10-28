<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index()
    {
        // $jobs = Job::with('employe')->paginate(3);
        $jobs = Job::with('employe')->latest()->simplePaginate(3);

        return view('jobs.index', [
            'jobs' => $jobs,
        ]);
    }
    public function create()
    {
        return view('jobs.create');
    }
    public function store(Request $request)
    {
        request()->validate([
            'title' => ['required', 'min:3'],
            'date' => 'required',
            'salary' => 'required',
            'company' => 'required',
        ]);

        Job::create([
            'title' => request('title'),
            'date' => request('date'),
            'salary' => request('salary'),
            'company' => request('company'),
            'emp_id' => 1,
        ]);

        return redirect('/jobs');
    }
    public function show($id)
    {
        $joba = Job::findOrFail($id);

        return view('jobs.show', [
            'job' => $joba,
        ]);
    }
    public function edit($id)
    {
        $joba = Job::findOrFail($id);
        return view('jobs.edit', [
            'job' => $joba,
        ]);
    }
    public function update(Request $request, $id)
    {
        $joba = Job::findOrFail($id);
        request()->validate([
            'title' => ['required', 'string', 'min:3'],
            'date' => 'required',
            'salary' => 'required',
            'company' => 'required',
        ]);
        $joba->update([
            'title' => request('title'),
            'date' => request('date'),
            'salary' => request('salary'),
            'company' => request('company'),
        ]);
        return redirect('/job/' . $id);
    }
    public function destroy($id)
    {
        $job = Job::findOrFail($id);
        $job->delete();

        return redirect('/jobs');
    }

}
