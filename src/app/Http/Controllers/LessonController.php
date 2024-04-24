<?php

namespace App\Http\Controllers;

use App\Http\Requests\LessonDestroyRequest;
use App\Http\Requests\LessonEditRequest;
use App\Http\Requests\LessonIndexRequest;
use App\Http\Requests\LessonShowRequest;
use App\Http\Requests\LessonStoreRequest;
use App\Http\Requests\LessonUpdateRequest;
use App\Models\Lesson;
use Illuminate\Support\Facades\Auth;

class LessonController extends Controller
{
    public function show(LessonShowRequest $request, $id)
    {
        $lesson = Lesson::findOrFail($id);

        return response()->json($lesson);
    }

    public function store(LessonStoreRequest $request)
    {
        $data = $request->all();

        $lesson = new Lesson();
        $lesson->goal = $data['goal'];
        $lesson->status = $data['status'];
        $lesson->start_date = $data['start_date'];
        $lesson->end_date = $data['end_date'];
        $lesson->day_of_month = $data['day_of_month'];
        $lesson->teacher_id = Auth::user()->id;
        $lesson->address = $data['address'];
        $save = $lesson->save();

        if ($save) {
            return response()->json(['message' => 'Lesson created successfully', 200]);
        } else {
            return response()->json(['error' => 'Lesson not created', 500]);
        }
    }

    public function destroy(LessonDestroyRequest $request, $id)
    {
        $lesson = Lesson::findOrFail($id);

        $delete = $lesson->delete();

        if ($delete) {
            return response()->json(['message' => 'Lesson deleted successfully', 200]);
        } else {
            return response()->json(['error' => 'Lesson not deleted', 500]);
        }
    }


    public function update(LessonUpdateRequest $request, $id)
    {
        $data = $request->all();

        $lesson = Lesson::findOrFail($id);
        $lesson->goal = $data['goal'];
        $lesson->status = $data['status'];
        $lesson->start_date = $data['start_date'];
        $lesson->end_date = $data['end_date'];
        $lesson->day_of_month = $data['day_of_month'];
        $lesson->teacher_id = Auth::user()->id;
        $lesson->address = $data['address'];
        $update = $lesson->save();

        if ($update) {
            return response()->json(['message' => 'Lesson updated successfully', 200]);
        } else {
            return response()->json(['error' => 'Lesson not updated', 500]);
        }
    }

    public function edit(LessonEditRequest $request, $id)
    {
        $lesson = Lesson::findOrFail($id);

        return response()->json($lesson);
    }

    public function index(LessonIndexRequest $request)
    {
        $user = Auth::user();

        $lessons = $user->lessons()->get();

        return response()->json($lessons);
    }

}
