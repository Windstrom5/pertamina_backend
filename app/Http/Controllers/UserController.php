<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Biodata;
use Illuminate\Routing\Controller as BaseController;

class UserController extends BaseController
{
    public function index()
    {
        $users = User::all();
        return response()->json($users);
    }

    public function login($id,$password)
    {
        $hashedPassword = md5($password);

        $user = User::where('username', $id)->where('password', $hashedPassword)->first();
        if ($user) {
            return response()->json($user);
        } else {
            return response()->json(['error' => 'User not found'], 404);
        }
    }

    public function getUserDetails($id)
    {
        $userDetails = Biodata::select(
            'biodata.kode_pekerja', 'biodata.pola_kerja', 'biodata.klasifikasi_name', 'biodata.kota_kerja',
            'biodata.lokasi', 'biodata.nama', 'biodata.PJP', 'biodata.pendidikan', 'biodata.tanggal_lahir',
            'biodata.jurusan', 'biodata.jenis_kelamin', 'biodata.masa_kerja', 'biodata.fungsi_pengguna',
            'biodata.upah', 'master_unit.nama_unit_org', 'reviewer.email'
            )
            ->join('master_unit', 'biodata.cost_center_pengguna', '=', 'master_unit.cost_center_pengguna')
            ->join('reviewer', 'master_unit.id_org_unit', '=', 'reviewer.id_org_unit')
            ->where('biodata.kode_pekerja', $id)
            ->first();
    
        if ($userDetails) {
            return response()->json($userDetails);
        } else {
            return response()->json(['error' => 'User not found'], 404);
        }
    }
    
    

    public function store(Request $request)
    {
        $user = new User($request->all());
        $user->save();
        return response()->json(['status' => 'success', 'message' => 'User created successfully']);
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->update($request->all());
        return response()->json(['status' => 'success', 'message' => 'User updated successfully']);
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return response()->json(['status' => 'success', 'message' => 'User deleted successfully']);
    }
}