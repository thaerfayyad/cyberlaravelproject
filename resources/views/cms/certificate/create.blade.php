@extends('cms.parent')
@section('title','certificate create')
@section('page-big-title','certificate')
@section('page-main-title','certificates')
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
                        <h3 class="card-title">certificate Create</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form id="create-form">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">name </label>
                                <input type="text" class="form-control" id="title" placeholder="Enter name">
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control" id="description" rows="3"
                                    placeholder="Enter ..."></textarea>
                            </div>
                            <div class="form-group">
                                <label for="name">Logo </label>
                                <input type="file" class="form-control" id="image" placeholder="Enter name">
                            </div>
                        </div>

                        <div class="card-footer">
                            {{-- <button type="button" onclick="store()" class="btn btn-primary">Submit</button> --}}

                            <a href="#" onclick="certificateStore()" class="btn btn-info">submit</i></a>

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
    function certificateStore() {
    let formData = new FormData();
        formData.append('title',document.getElementById('title').value);
        formData.append('description',document.getElementById('description').value);
        formData.append('image', document.getElementById('image').files[0])
        store('/admin/certificates', formData),'/admin/certificates/create';

}
</script>
@endsection
