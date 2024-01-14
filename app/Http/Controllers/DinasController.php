<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DinasController extends Controller
{
    public function getDinas($kode)
    {
        $Spd = Spd::where('kode_pekerja', $kode)->get();
        if ($Spd->isNotEmpty()) {
            return response()->json($Spd);
        } else {
            return response()->json(['error' => 'User not found'], 404);
        }
    }

    public function searchDinas($nomor){
        $Spd = Spd::where('no', $nomor)->first();
        if ($Spd) {
            return response()->json($Spd);
        } else {
            return response()->json(['error' => 'Data Not Found'], 404);
        }
    }

    public function saveDinas(Request $request)
    {
        $Spd = new Spd();
        
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
    
        // Fill the Spd model with the provided data
        $Spd->fill($data);
    
        // Save the model to the database
        $Spd->save();
    
        
        return response()->json(['success' => true, 'Input Done']);
    }

    public function editDinas(Request $request, $item, $no)
    {
        // Find the Spd model by its ID
        $Spd = Spd::where('no', $no)->first();
        // Check if the Spd model is found
        if (!$Spd) {
            return response()->json(['error' => 'Dinas not found'], 404);
        }
        if (item == "Dialihkan" || item == "Disetujui") {
            $Spd->status = $request->input('status'); // Assuming 'status' is the field in your request
            $Spd->approver = $request->input('approver');
            // Save the changes
            $Spd->save();
    
            return response()->json(['success' => true, 'message' => 'Dinas status updated successfully']);
        }else if (item == "Ditolak" || item == "Dikembalikan"){
            $Spd->status = $request->input('status'); // Assuming 'status' is the field in your request
            $Spd->keterangan = $request->input('keterangan');
            // Save the changes
            $Spd->save();
    
            return response()->json(['success' => true, 'message' => 'Dinas status updated successfully']);
        }
        // Update the status
    }
}
