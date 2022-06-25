@extends("admin.index")

@section("content")
    <iframe src="https://www.youtube.com/embed/{{$course->lesson[0]->video}}"></iframe>
@endsection
