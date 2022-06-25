@extends("admin.index")

@section("content")


    <form action="{{url('course/store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">course name</label>
                <input type="text" name="course_name" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">course description</label>
                <textarea name="description" id="summernote"></textarea>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">instructor name</label>
                <input type="text" name="inst_name" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">duration</label>
                <input type="number" name="duration" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">course price</label>
                <input type="text" name="price" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label>category</label>
                <select name="category_id" class="form-control">
                    @foreach($categories  as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputFile">cover</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" name="cover" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>
                    <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>

@endsection
