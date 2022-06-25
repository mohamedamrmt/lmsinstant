@extends("admin.index")

@section("content")
    <table class="table table-bordered">
        <thead>
        <tr>
            <th style="width: 10px">#</th>
            <th>name</th>
            <th>img</th>
            <th>lessons Count</th>
            <th>lessons</th>
        </tr>
        </thead>
        <tbody>
        @foreach($courses as $course)
        <tr>
            <td>{{$course->id}}</td>
            <td>{{$course->course_name}}</td>
            <td><img width="100px" src="{{asset('upload/'.$course->cover)}}" alt="{{$course->course_name}}"></td>
            <td>@courseLessonCount($course->id)</td>
            <td><a href="{{url('lesson/add/'.$course->id)}}" class="btn btn-success">add lesson</a></td>
        </tr>
        @endforeach
        </tbody>
    </table>

@endsection
