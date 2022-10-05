<?php

namespace App\Http\Controllers\User;

use App\Components\CommonComponent;
use App\Enums\StatusCode;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Validator;

class UpLoadFileController extends Controller
{
    public function upload(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'file'  => 'required|max:10240',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => $validator->errors(),
            ], StatusCode::BAD_REQUEST);
        }

        $file = $request->file('file');
        $extension = $file->getClientOriginalExtension();
        $fileName = CommonComponent::uploadFileName($extension);
        $path = CommonComponent::uploadFile('file-tmp', $file, $fileName);
        if (! $path) {
            return response()->json([
                'message' => 'エラーが発生しました。',
            ], StatusCode::BAD_REQUEST);
        }

        return response()->json([
            'file_name' => $file->getClientOriginalName(),
            'path' => $path,
            'full_url' => url('storage/'.$path),
        ], StatusCode::OK);
    }
}
