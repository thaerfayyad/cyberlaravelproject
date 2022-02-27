@extends('cms.parent')
@section('title','answer create')
@section('page-big-title','answer')
@section('page-main-title','answer')
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
                        <h3 class="card-title">answer Create</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form id="create-form">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Titel of Questions </label>
                                <select class="form-control" name="" id="question_id">
                                    <option value="">select the Question</option>
                                    @foreach ($items as $item )
                                    <option value="{{ $item->id }}">{{ $item->question }}</option>

                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="name">Answer </label>
                                <input type="text" class="form-control"id="question" placeholder="Enter Answer ">
                            </div>


                        <div class="card-footer">
                            {{-- <button type="button" onclick="store()" class="btn btn-primary">Submit</button> --}}

                            <a href="#" onclick="questionstore()" class="btn btn-info">submit</i></a>

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
    function questionstore() {
    let formData = new FormData();
        formData.append('answer',document.getElementById('answer').value);
        formData.append('question_id',document.getElementById('question_id').value);

        store('/admin/answers', formData),'/admin/answers/create';

}
</script>
@endsection
