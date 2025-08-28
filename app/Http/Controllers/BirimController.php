<?php

namespace App\Http\Controllers;

use App\Models\Birim;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class BirimController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {
        try {
            $birimler = Birim::all();
            return response()->json([
                'success' => true,
                'data' => $birimler,
                'message' => 'Birimler başarıyla getirildi'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Birimler getirilirken hata oluştu: ' . $e->getMessage()
            ], 500);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): JsonResponse
    {
        try {
            $request->validate([
                'birim_adı' => 'required|string|max:255',
                'konum' => 'required|string|max:255',
            ]);

            $birim = Birim::create($request->all());

            return response()->json([
                'success' => true,
                'data' => $birim,
                'message' => 'Birim başarıyla oluşturuldu'
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Birim oluşturulurken hata oluştu: ' . $e->getMessage()
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Birim $birim): JsonResponse
    {
        try {
            return response()->json([
                'success' => true,
                'data' => $birim,
                'message' => 'Birim başarıyla getirildi'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Birim getirilirken hata oluştu: ' . $e->getMessage()
            ], 500);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Birim $birim): JsonResponse
    {
        try {
            $request->validate([
                'birim_adı' => 'sometimes|required|string|max:255',
                'konum' => 'sometimes|required|string|max:255',
            ]);

            $birim->update($request->all());

            return response()->json([
                'success' => true,
                'data' => $birim,
                'message' => 'Birim başarıyla güncellendi'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Birim güncellenirken hata oluştu: ' . $e->getMessage()
            ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Birim $birim): JsonResponse
    {
        try {
            $birim->delete();

            return response()->json([
                'success' => true,
                'message' => 'Birim başarıyla silindi'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Birim silinirken hata oluştu: ' . $e->getMessage()
            ], 500);
        }
    }
}
