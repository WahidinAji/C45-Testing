<?php

namespace App\Http\Controllers;

use App\Model\Beasiswa;
use Illuminate\Http\Request;
use C45\C45 as C45AJA;

class BeasiswaController extends Controller
{
    public function index()
    {
        // $filename = \public_path() . '/csv/test2.csv';
        // // \dd($filename);
        // $c45 = new C45AJA([
        //     'targetAttribute' => 'beasiswa',
        //     'trainingFile' => $filename,
        //     'splitCriterion' => C45AJA::SPLIT_GAIN,
        // ]);
        // $tree = $c45->buildTree();
        // $treeString = $tree->toString();
        // $testingData = [
        //     // Tidak,B+,B+,B+,B+,Cukup,Tidak
        //     'kks' => '0',
        //     'mtk' => 'B+',
        //     'b_indo' => 'B+',
        //     'b_inggris' => 'B+',
        //     'mapel_produktif' => 'B+',
        //     'penghasilan_ortu' => 'Cukup',
        // ];
        // // \dd($testingData);

        // $hasil = $tree->classify($testingData);
        // \dd($hasil);
        $md5 =  95500;
        \dd(\hash("md5", $md5));
        $beasiswa = Beasiswa::all();
        return view('beasiswa.index', \compact('beasiswa'));
    }
    public function create()
    {
        return view('beasiswa.create');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'kks' => 'required',
            'mtk' => 'required',
            'b_indo' => 'required',
            'b_inggris' => 'required',
            'mapel_produktif' => 'required',
            'penghasilan_ortu' => 'required',
        ]);
        Beasiswa::create([
            'kks' => $request->kks,
            'mtk' => $request->mtk,
            'b_indo' => $request->b_indo,
            'b_inggris' => $request->b_inggris,
            'mapel_produktif' => $request->mapel_produktif,
            'penghasilan_ortu' => $request->penghasilan_ortu,
        ]);
        return \redirect('beasiswa')->with(['msg' => 'success']);
    }
    public function edit(Beasiswa $beasiswa)
    {
        // $beasiswa = Beasiswa::find($id);
        return view('beasiswa.edit', \compact('beasiswa'));
    }
    public function update(Request $request, Beasiswa $beasiswa)
    {
        $this->validate($request, [
            'kks' => 'required',
            'mtk' => 'required',
            'b_indo' => 'required',
            'b_inggris' => 'required',
            'mapel_produktif' => 'required',
            'penghasilan_ortu' => 'required',
        ]);
        $filename = \public_path() . '/csv/Data_Training.csv';
        $c45 = new C45AJA([
            'targetAttribute' => 'beasiswa',
            'trainingFile' => $filename,
            'splitCriterion' => C45AJA::SPLIT_GAIN,
        ]);
        $tree = $c45->buildTree();
        $treeString = $tree->toString();
        $testingData = [
            'kks' => $request->kks,
            'mtk' => $request->mtk,
            'b_indo' => $request->b_indo,
            'b_inggris' => $request->b_inggris,
            'mapel_produktif' => $request->mapel_produktif,
            'penghasilan_ortu' => $request->penghasilan_ortu,
        ];

        $hasil = $tree->classify($testingData);
        $beasiswa = Beasiswa::find($beasiswa->id);
        $beasiswa->update([
            'kks' => $request->kks,
            'mtk' => $request->mtk,
            'b_indo' => $request->b_indo,
            'b_inggris' => $request->b_inggris,
            'mapel_produktif' => $request->mapel_produktif,
            'penghasilan_ortu' => $request->penghasilan_ortu,
            'beasiswa' => $hasil,
        ]);
        return \redirect('beasiswa')->with(['msg' => 'Success!!']);
    }
}
