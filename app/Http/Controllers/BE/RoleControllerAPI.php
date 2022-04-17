<?php

namespace App\Http\Controllers\BE;

use App\Http\Controllers\Controller;
use App\Http\Traits\GeneralTraits;
use Illuminate\Http\Request;

use App\Models\Role;

class RoleControllerAPI extends Controller
{

    public function dt()
    {
        $data = Role::all();

        return datatables($data)
            ->addColumn('action', function ($db) {
                return '<a href="javascript:edit(\''.$db->role_id.'\')" title="Edit Data" class="btn btn-sm btn-icon btn-primary"><i class="bx bx-edit"></i></a>
                        <a href="javascript:del(\''.$db->role_id.'\')" title="Delete Data" class="btn btn-sm btn-icon btn-danger"><i class="bx bx-trash"></i></a>';
            })
            ->rawColumns(['action'])->toJson();
    }

    public function save(Request $request)
    {
        try {
            $inp = $request->inp;
            $dbs = Role::find($request->role_id) ?? new Role();

            foreach ($inp as $key => $value) {
                if ($value)
                    $dbs[$key] = $value;
            }

            if ($dbs->save()) {
                return response()->json([
                    'status' => 'success',
                    'message' => 'Berhasil menyimpan role',
                ]);
            }
        } catch (\Throwable $th) {
            throw $th;
        }

        return response()->json([
            'status' => 'error',
            'message' => 'Gagal menyimpan role',
        ]);
    }

    public function getById($id)
    {
        return Role::find($id)->toJson();
    }

    public function delete($id)
    {
        try {
            Role::find($id)->delete();

            return response()->json([
                'status' => 'success',
                'message' => 'Berhasil menghapus role',
            ]);
        } catch (\Throwable $th) {
            //throw $th;
        }

        return response()->json([
            'status' => 'error',
            'message' => 'Gagal menghapus role',
        ]);
    }

    //-----------------------------------------------------------------------
    // Custom Function Place HERE !
    //-----------------------------------------------------------------------

    public function test_traits()
    {
        return GeneralTraits::dateDiff('2021-03-01 10:05:32', '2022-01-10 15:18:22');
    }
}
