<?php

namespace App\Http\Controllers;

use App\Models\Unvan;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class UnvanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {
        try {
            $unvanlar = Unvan::all();
            return response()->json([
                'success' => true,
                'data' => $unvanlar,
                'message' => 'Ünvanlar başarıyla getirildi'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Ünvanlar getirilirken hata oluştu: ' . $e->getMessage()
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
                'unvan_adı' => 'required|string|max:255',
            ]);

            $unvan = Unvan::create($request->all());

            return response()->json([
                'success' => true,
                'data' => $unvan,
                'message' => 'Ünvan başarıyla oluşturuldu'
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Ünvan oluşturulurken hata oluştu: ' . $e->getMessage()
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Unvan $unvan): JsonResponse
    {
        try {
            return response()->json([
                'success' => true,
                'data' => $unvan,
                'message' => 'Ünvan başarıyla getirildi'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Ünvan getirilirken hata oluştu: ' . $e->getMessage()
            ], 500);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Unvan $unvan): JsonResponse
    {
        try {
            $request->validate([
                'unvan_adı' => 'sometimes|required|string|max:255',
            ]);

            $unvan->update($request->all());

            return response()->json([
                'success' => true,
                'data' => $unvan,
                'message' => 'Ünvan başarıyla güncellendi'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Ünvan güncellenirken hata oluştu: ' . $e->getMessage()
            ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Unvan $unvan): JsonResponse
    {
        try {
            $unvan->delete();

            return response()->json([
                'success' => true,
                'message' => 'Ünvan başarıyla silindi'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Ünvan silinirken hata oluştu: ' . $e->getMessage()
            ], 500);
        }
    }
}
