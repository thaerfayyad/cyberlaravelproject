@extends('cms.parent')
@section('title','cybersecurtiy create')
@section('page-big-title','cybersecurtiy')
@section('page-main-title','cybersecurtiys')
@section('page-sub-title','create')
@section('styles')

@endsection
@section('content')
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">cybersecurtiy Create</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form id="create-form">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Level </label>
                                <select class="form-control" name="" id="level">
                                    <option value="">select the level</option>
                                    <option value="0">level one</option>
                                    <option value="1">level two</option>
                                    <option value="2">level three</option>



                                </select>
                            </div>

                            <div class="form-group">
                                <label for="name">title </label>
                                <input type="text" class="form-control"id="title" placeholder="Enter name">
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control" id="description" rows="3"
                                    placeholder="Enter Descriptions ..."></textarea>
                            </div>

                            <div class="form-group">
                                <label for="name">Vedio URL </label>
                                <input type="text" class="form-control" id="video" placeholder="Enter Video url">
                            </div>
                        </div>

                        <div class="card-footer">
                            {{-- <button type="button" onclick="store()" class="btn btn-primary">Submit</button> --}}

                            <a href="#" onclick="cybersecurtiyStore()" class="btn btn-info">submit</i></a>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>

@endsection
@section('scripts')
<script>
    function cybersecurtiyStore() {
    let formData = new FormData();
        formData.append('title',document.getElementById('title').value);
        formData.append('description',document.getElementById('description').value);
        formData.append('level',document.getElementById('level').value);
        formData.append('video',document.getElementById('video').value);

        store('/admin/cybers', formData),'/admin/cybers/create';

}
</script>
@endsection