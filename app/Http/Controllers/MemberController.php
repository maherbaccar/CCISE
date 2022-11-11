<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $members=Member::all();
        return view('members.index')->with('members',$members);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('members.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'n_patente' => 'required|unique:members,n_patente|alpha_num',
            'raison_social' =>'required|unique:members,raison_social|regex:/^[\pL\s\-]+$/u',
            'responsable' =>'required|regex:/^[\pL\s\-]+$/u',
            'fonction' =>'required',
            'tel' =>'required|digits:8|unique:members,tel',
            'fax' =>'required|digits:8|unique:members,fax',
            'email' =>'required|string|unique:members,email',
            'site_web' =>'required|string|max:255|unique:members,site_web',
            'adresse' =>'required|string|max:255|unique:members,adresse',
            'secteur' =>'required|regex:/^[\pL\s\-]+$/u',
            'sous_secteur' =>'required|regex:/^[\pL\s\-]+$/u',
            'n_carte_adhérent' =>'required|numeric|unique:members,n_carte_adhérent',
            'pack' =>'required',
            'pdts' =>'required',

        ]);
        $member = new Member;
        $member->n_patente = $request->input('n_patente');
        $member->raison_social = $request->input('raison_social');
        $member->responsable = $request->input('responsable');
        $member->fonction = $request->input('fonction');
        $member->tel= $request->input('tel');
        $member->fax= $request->input('fax');
        $member->email= $request->input('email');
        $member->site_web= $request->input('site_web');
        $member->adresse = $request->input('adresse');
        $member->secteur = $request->input('secteur');
        $member->responsable = $request->input('responsable');
        $member->sous_secteur = $request->input('sous_secteur');
        $member->n_carte_adhérent= $request->input('n_carte_adhérent');
        $member->pack= $request->input('pack');
        $member->pdts= $request->input('pdts');

        if($request->hasfile('photo'))
        {
        $fileName = time().$request->file('photo')->getClientOriginalName();
        $path = $request->file('photo')->storeAs('images', $fileName, 'public'); 
        $request["photo"] = '/storage/'.$path;
        $member->photo = $fileName;
        }
        $member->save();
        return redirect('members')->with('flash_message','Membre Ajouter Avec Success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $member=Member::find($id);
        return view('members.show')->with('members',$member);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $member=Member::find($id);
        return view('members.edit')->with('members',$member);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'n_patente' => 'required|alpha_num',
            'raison_social' =>'required|regex:/^[\pL\s\-]+$/u',
            'responsable' =>'required|regex:/^[\pL\s\-]+$/u',
            'fonction' =>'required',
            'tel' =>'required|digits:8',
            'fax' =>'required|digits:8',
            'email' =>'required|string',
            'site_web' =>'required|string|max:255',
            'adresse' =>'required|string|max:255',
            'secteur' =>'required|regex:/^[\pL\s\-]+$/u',
            'sous_secteur' =>'required|regex:/^[\pL\s\-]+$/u',
            'n_carte_adhérent' =>'required|numeric',
            'pack' =>'required',
            'pdts' =>'required',

        ]);
        $member=Member::find($id);
        $member->n_patente = $request->input('n_patente');
        $member->raison_social = $request->input('raison_social');
        $member->responsable = $request->input('responsable');
        $member->fonction = $request->input('fonction');
        $member->tel= $request->input('tel');
        $member->fax= $request->input('fax');
        $member->email= $request->input('email');
        $member->site_web= $request->input('site_web');
        $member->adresse = $request->input('adresse');
        $member->secteur = $request->input('secteur');
        $member->responsable = $request->input('responsable');
        $member->sous_secteur = $request->input('sous_secteur');
        $member->n_carte_adhérent= $request->input('n_carte_adhérent');
        $member->pack= $request->input('pack');
        $member->pdts= $request->input('pdts');

        if($request->hasfile('photo'))
        {
        $fileName = time().$request->file('photo')->getClientOriginalName();
        $path = $request->file('photo')->storeAs('images', $fileName, 'public'); 
        $request["photo"] = '/storage/'.$path;
        $member->photo = $fileName;
        }
        $member->update();
        return redirect('members')->with('flash_message','Membre modifier Avec Success');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Member::destroy($id);
        return redirect('members')->with('flash_message','Membre Supprimer Avec Success');

    }
}
