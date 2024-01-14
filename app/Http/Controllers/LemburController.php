<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Spkl;
use Illuminate\Routing\Controller as BaseController;
class LemburController extends BaseController
{
    public function getLembur($kode)
    {
        $spkl = Spkl::where('kode_pekerja', $kode)->get();
        if ($spkl->isNotEmpty()) {
            return response()->json($spkl);
        } else {
            return response()->json(['error' => 'User not found'], 404);
        }
    }

    public function searchLembur($nomor){
        $spkl = Spkl::where('no', $nomor)->first();
        if ($spkl) {
            return response()->json($spkl);
        } else {
            return response()->json(['error' => 'Data Not Found'], 404);
        }
    }

    public function saveLembur(Request $request)
    {
        $spkl = new Spkl();
        
        // Assuming you are sending the file as part of a form with other data
        $data = $request->all();
    
        // Handle file upload
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads'), $filename);
    
            // Save the file path in the database
            $data['Justifikasi'] = 'uploads/' . $filename;
        }
    
        // Fill the Spkl model with the provided data
        $spkl->fill($data);
    
        // Save the model to the database
        $spkl->save();
    
        
        return response()->json(['success' => true, 'Input Done']);
    }

    public function editLembur(Request $request, $item, $no)
    {
        // Find the Spkl model by its ID
        $spkl = Spkl::where('no', $no)->first();
        // Check if the Spkl model is found
        if (!$spkl) {
            return response()->json(['error' => 'Lembur not found'], 404);
        }
        if (item == "Dialihkan" || item == "Disetujui") {
            $spkl->status = $request->input('status'); // Assuming 'status' is the field in your request
            $spkl->approver = $request->input('approver');
            // Save the changes
            $spkl->save();
    
            return response()->json(['success' => true, 'message' => 'Lembur status updated successfully']);
        }else if (item == "Ditolak" || item == "Dikembalikan"){
            $spkl->status = $request->input('status'); // Assuming 'status' is the field in your request
            $spkl->keterangan = $request->input('keterangan');
            // Save the changes
            $spkl->save();
    
            return response()->json(['success' => true, 'message' => 'Lembur status updated successfully']);
        }
        // Update the status
    }
}
