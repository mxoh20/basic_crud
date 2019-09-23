<?php

namespace App\Http\Controllers;


use App\Device;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


class devicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $paginator= Device::paginate(8);

        return view('index', compact('paginator'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
        return view('add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return Response
     */
    public function store()
    {

        \request()->validate([
            'name' => ['required', 'min:3'],
            'description' => ['required', 'min:4'],
        ]);

        Device::create([

            'brand' => request('name'),
            'description' => request('description'),
        ]);

        alert()->success('success', 'thank you');

        return redirect()->route('devices.index');
    }

    /**
     * Display the specified resource.
     *
     * @param Device $device
     * @return Device
     */
    public function show(Device $device)
    {

        return view('eachView', compact('device'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Device $device
     * @return Response
     */
    public function edit(Device $device)
    {

        return view('edit', compact('device'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param Device $device
     * @return Response
     */
    public function update(Request $request, Device $device)
    {

        $validated = request()->validate([
            'brand' => ['required', 'min:3'],
            'description' => ['required', 'min:3']
        ]);

        $device->update($validated);

        \alert()->info('Updated', 'Successful updated');
        return view('eachView', compact('device'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy(Device $device)
    {
        $device->delete();

        \alert()->success('Deleted', 'Record successful deleted');
        return redirect()->back();
    }
}
