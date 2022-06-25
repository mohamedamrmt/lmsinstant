@extends("admin.index")

@section("content")


    <form action="{{url('lesson/store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">title</label>
                <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">lesson description</label>
                <textarea name="description" id="summernote"></textarea>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">youtube url</label>
                <input type="text" name="video" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
            </div>
            <input type="hidden" name="course_id" value="{{$course_id}}">
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>

@endsection
