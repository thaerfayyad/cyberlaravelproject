<?php

namespace App\Http\Controllers;

use App\Models\KSA;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class KSAController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cms.ksa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $validator = Validator($request->all(), [

            'title' => 'required|string|min:3|max:45',
            'description' => 'nullable|string',
            'image' => 'required',
            // 'status' => 'required|boolean',
            // 'status' => 'required|boolean',
        ]);
        if (!$validator->fails()) {
            $ksa = new KSA();
            $ksa->title = $request->input('title');

            $ksa->description = $request->input('description');

            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = Carbon::now()->format('Y_m_d_h_i') . '_' . $ksa->name . '.' . $image->getClientOriginalExtension();
                $request->file('image')->storeAs('/internationals', $imageName, ['disk' => 'public']);
                $ksa->image = 'internationals/' . $imageName;
            }
            $isSaved = $ksa->save();


            return response()->json([
                'message' => $isSaved ? 'Created successfully' : 'Create Failed'
            ], $isSaved ? Response::HTTP_CREATED : Response::HTTP_BAD_REQUEST);
        } else {
            return response()->json([
                'message' =>   $validator->getMessageBag()->first()
            ], Response::HTTP_BAD_REQUEST);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\KSA  $kSA
     * @return \Illuminate\Http\Response
     */
    public function show(KSA $kSA)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KSA  $kSA
     * @return \Illuminate\Http\Response
     */
    public function edit(KSA $kSA)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\KSA  $kSA
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KSA $kSA)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KSA  $kSA
     * @return \Illuminate\Http\Response
     */
    public function destroy(KSA $kSA)
    {
        $isDelete = $kSA->delete();
        return response()->json([
            'icon'  => $isDelete ? 'success' : 'error',
            'title' => $isDelete ? 'Delete successfully' : 'Delete Failed'
        ], $isDelete ? Response::HTTP_OK :Response::HTTP_BAD_REQUEST );
    }
}
