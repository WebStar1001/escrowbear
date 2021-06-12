<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Core\KycVerification;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Exception;

class WelcomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('dashboard/welcome');
    }

    public function kycVerify()
    {
        return view('dashboard/kycUpload');
    }

    public function kycUpload(Request $request)
    {
        if ($request->file('file')) {
            DB::beginTransaction();
            try {
                $filePath = $request->file('file');
                $fileName = 'kyc' . time() . '.' . $filePath->getClientOriginalExtension();
                $request->file('file')->storeAs('kyc', $fileName, 'public');
                KycVerification::create([
                    'card_image' => $fileName,
                    'status' => 'Pending',
                    'user_id' => Auth::id(),
                    'type' => $request->id_type
                ]);
            } catch (Exception $exception) {
                DB::rollBack();
                return response()->json(['error' => 'Kyc upload error']);
            }
            DB::commit();
            return response()->json(['filename' => $fileName]);
        }
        return response()->json(['error' => 'No file chosen']);
    }

    public function kycDelete(Request $request)
    {
        DB::beginTransaction();
        try {
            if (Storage::disk('public')->has('kyc/' . $request->filename)) {
                KycVerification::where('card_image', $request->filename)->where('user_id', Auth::id())->delete();
                Storage::disk('public')->delete('kyc/' . $request->filename);
            } else {
                exit('file does not exist');
            }
        } catch (Exception $exception) {
            DB::rollBack();
            return response()->json(['error' => 'KYC delete error']);
        }
        DB::commit();
        return response()->json(['success' => 'Successfully Deleted']);
    }

    public function kycSubmit(Request $request){
        print_r($request->all());exit;
    }

    public function uploadProfile(Request $request)
    {
        $request->validate([
            'profile' => 'required|mimes:jpg,png,jpeg|max:2048',
        ]);

        $fileName = time() . '.' . $request->profile->extension();

        $request->profile->move(storage_path('app/public/profile'), $fileName);

        $user = Auth::user();

        $user->profile_path = $fileName;

        $user->save();

        return back()
            ->with('success', 'You have successfully upload file.')
            ->with('file', $fileName);
    }
}
