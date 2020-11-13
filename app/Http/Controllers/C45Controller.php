<?php

namespace App\Http\Controllers;

use App\Model\C45;
use Illuminate\Http\Request;
use C45\C45 as C45AJA;

class C45Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $filename = \public_path() . '/csv/testing.csv';
        $c45 = new C45AJA([
            'targetAttribute' => 'play',
            'trainingFile' => $filename,
            'splitCriterion' => C45AJA::SPLIT_GAIN,
        ]);
        $tree = $c45->buildTree();
        $treeString = $tree->toString();
        // echo '<pre>';
        // print_r($treeString);
        // echo '</pre>';
        $testingData = [
            'outlook' => 'sunny',
            'windy' => 'false',
            'humidity' => 'high',
        ];
        $hasil = $tree->classify($testingData);
        // \dd($hasil);
        $c45 = C45::all();
        return \view('c45.index', \compact('c45', 'hasil'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return \view('c45.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'outlook' => 'required',
            'windy' => 'required',
            'humidity' => 'required',
        ]);
        C45::create([
            'outlook' => $request->outlook,
            'windy' => $request->windy,
            'humidity' => $request->humidity,
        ]);
        return \redirect('c45');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\C45  $c45
     * @return \Illuminate\Http\Response
     */
    public function show(C45 $c45)
    {
        //show
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\C45  $c45
     * @return \Illuminate\Http\Response
     */
    public function edit(C45 $c45)
    {
        return \view('c45.edit', \compact('c45'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\C45  $c45
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, C45 $c45)
    {
        $this->validate($request, [
            'outlook' => 'required',
            'windy' => 'required',
            'humidity' => 'required',
            // 'play' => 'required',
        ]);
        // \dd($c45->id);
        $filename = \public_path() . '/csv/testing.csv';
        $ctes = new C45AJA([
            'targetAttribute' => 'play',
            'trainingFile' => $filename,
            'splitCriterion' => C45AJA::SPLIT_GAIN,
        ]);
        $tree = $ctes->buildTree();
        $treeString = $tree->toString();
        // echo '<pre>';
        // print_r($treeString);
        // echo '</pre>';
        $testingData = [
            'outlook' => $request->outlook,
            'windy' => $request->windy,
            'humidity' => $request->humidity,
        ];
        $hasil = $tree->classify($testingData);
        $c45 = C45::find($c45->id);
        // \dd($request->outlook);
        $c45->update([
            'outlook' => $request->outlook,
            'windy' => $request->windy,
            'humidity' => $request->humidity,
            'play' => $hasil,
        ]);
        return \redirect('c45');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\C45  $c45
     * @return \Illuminate\Http\Response
     */
    public function destroy(C45 $c45)
    {
        //
    }
}
