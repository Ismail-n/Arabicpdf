<?php
namespace App\Http\Controllers\Prectices;

use App\Http\Controllers\Controller;
use App\Models\PhoneBooth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class ColletionColtroller extends Controller
{
    public $request_stuff;
    public function __construct(Request $request_stuff)
    {
        $this->request_stuff = $request_stuff;
    }
    /**
     * Here we work with colletions
     **/
    public function insertUser()
    {
        try {
            $PhoneBoothUser = PhoneBooth::create([
                'name'          => $this->request_stuff->name,
                'email'         => $this->request_stuff->email,
                'address'       => $this->request_stuff->address,
                'mobile_number' => $this->request_stuff->mobile_number,
            ]);
        } catch (\Throwable $th) {
            return response()->json(['success' => false, 'message' => "insertion failed", "data" => $th->getMessage()], 200);

        }
        return response()->json(['success' => true, 'message' => "inserted successfully", "data" => $PhoneBoothUser], 200);
    }
    public function getUsers()
    {
        $PhoneBoothUser = PhoneBooth::all();
        return response()->json(['message' => "fetched successfully", "data" => $PhoneBoothUser], 200);
    }
    /**
     * Edit user
     **/
    public function editUser(Request $request)
    {

        $PhoneBoothUser                = PhoneBooth::find($request->id);
        $PhoneBoothUser->name          = $request->name;
        $PhoneBoothUser->email         = $request->email;
        $PhoneBoothUser->mobile_number = $request->mobile_number;
        $PhoneBoothUser->address       = $request->address;
        $PhoneBoothUser->save();
        return response()->json(['message' => "updated successfully", "data" => $PhoneBoothUser], 200);
    }
    /**
     **/
    public function deleteUser(Request $request)
    {
        $PhoneBoothUser = PhoneBooth::find($request->id);
        $PhoneBoothUser->delete();
        return response()->json(['message' => "deleted successfully"], 200);
    }
}
