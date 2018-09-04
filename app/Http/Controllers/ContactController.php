<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\DataTables\Datatables;
use Excel;
use Mockery\Exception;
use App\Contact;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view ('data');
        //  $provinsi = Indonesia::allProvinces();
        // return view('data')->with('provinsi', $provinsi);
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
        $input = $request->all();
        $input['photo'] = null;
        $current = time();

        if ($request->hasFile('photo')){
            $input['photo'] = '/upload/photo/'.str_slug($input['name'], '-').'-'.$current.'.'.$request->photo->getClientOriginalExtension();
            $request->photo->move(public_path('/upload/photo'), $input['photo']);
        }

        Contact::create($input);

        return response()->json([
            'success' => true
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contact = Contact::find($id);
        return $contact;
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
        $input = $request->all();
        $contact = Contact::findOrFail($id);
        $current = time();
        
        if ($request->hasFile('photo')){
            if (!$contact->photo == null) {
                unlink(public_path($contact->photo));
            }
            $input['photo'] = '/upload/photo/'.str_slug($input['name'], '-').'-'.$current.'.'.$request->photo->getClientOriginalExtension();
            $request->photo->move(public_path('/upload/photo'), $input['photo']);
        }

        $contact->update($input);

        return response()->json([
            'success' => true
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contact = Contact::findOrFail($id);

        if (!$contact->photo == null){
            unlink(public_path($contact->photo));
        }

        Contact::destroy($id);

        return response()->json([
            'success' => true
        ]);
    }

    public function apiContact(){
        $contact = Contact::all();

        return Datatables::of($contact)
            ->addColumn('show_photo', function($contact){
                if ($contact->photo == null){
                    return 'No image';
                }
                return '<img class="rounded-square" width="50" height="50" src="'. url($contact->photo) .'" alt="">';
            })
            ->addColumn('action', function($contact) {
                return '<a onClick="showForm ('. $contact->id .')" class="btn btn-info btn-xs"> <i class="glyphicon glyphicon-eye-open"></i> Show </a> ' .
                        '<a onClick="editForm ('. $contact->id .')" class="btn btn-primary btn-xs"> <i class="glyphicon glyphicon-edit"></i> Edit </a> ' .
                        '<a onClick="deleteData ('. $contact->id .')" class="btn btn-danger btn-xs"> <i class="glyphicon glyphicon-trash"></i> Delete </a>';
            })
            // ->addColumn('provinsi', function($contact){
            //     if ($contact->provinsi == null){
            //         return 'null';
            //     }
            //     return $contact->provinsi;
            // })
            // ->addColumn('kota', function($contact){
            //     if ($contact->kota == null){
            //         return 'null';
            //     }
            //     return $contact->kota;
            // })
            // ->addColumn('kecamatan', function($contact){
            //     if ($contact->kecamatan == null){
            //         return 'null';
            //     }
            //     return $contact->kecamatan;
            // })
            ->rawColumns(['show_photo', 'action'])
            ->make(true);
    }

    public function exportContact(){
        $contact = Contact::select('name', 'email')->get();
        return Excel::create('data_contact', function($excel) use ($contact){
            $excel->sheet('mysheet', function($sheet) use ($contact){
                $sheet->fromArray($contact);
            });
        })->download('xlsx');
    }

    public function importContact(Request $request){
        if ($request->hasFile('file')) {
            $path = $request->file('file')->getRealPath();
            $data = Excel::load($path, function($reader){})->get();
            if (!empty($data) && $data->count()) {
                foreach ($data as $key => $value) {
                    $contact = new Contact();
                    $contact->name = $value->name;
                    $contact->email = $value->email;
                    $contact->save();
                }
            }
        }
        
        return back();
    }
}
