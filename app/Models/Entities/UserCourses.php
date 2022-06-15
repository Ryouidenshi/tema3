<?php

namespace App\Models\Entities;

use Illuminate\Database\Eloquent\Model;

class UserCourses extends Model
{
    public function deleteUserFromCourse(Request $request){
        $this -> table('books')->where('redactor_id', '=', $request->input('id'));
        $user = User::find($request->input('id'));
        DB::table('users')->delete($request->input('id'));
        return response([
            'message'=>'user '. $user->name . ' successfully deleted'
        ]);
    }
}
