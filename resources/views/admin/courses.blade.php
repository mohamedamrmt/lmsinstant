@extends("admin.index")

@section("content")
    @foreach($courses as $course)
    <div class="card" style="width: 18rem;">
        <img src="{{asset('upload/'.$course->cover)}}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{$course->course_name}}</h5>
            <p class="card-text">{!! $course->description !!}</p>
            <a href="{{url('course/'.$course->id)}}" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
    @endforeach
@endsection
