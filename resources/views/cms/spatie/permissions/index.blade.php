@extends('cms.parent')
@section('title', 'Permissions')
@section('page-big-title','perissions')
@section('page-main-title','Permissions')
@section('page-sub-title','index')
@section('styles')

@endsection
@section('content')
<div class="card-body table-responsive p-0" style="word-break: break-all" >
    <table class="table table-hover text-nowrap border">
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Garud name</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
          @foreach ($permissions as $permission )
      <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $permission->name }}</td>
          <td> <span class="badge bg-success"> {{$permission->guard_name }}</span></td>
          <td>{{ $permission->created_at }}</td>
          <td>
              <a href="{{ route('admin.permissions.edit',$permission->id) }}" class="btn btn-info"> <i class="fas fa-edit"> </i></a>
              <a href="#" onclick="confirmDestroy('{{ $permission->id }}' ,this)"  class="btn btn-danger"><i class="fas fa-trash"></i></a>
          </td>
      </tr>
          @endforeach


      </tbody>
    </table>
  </div>
@endsection
@section('scripts')
  <script>
      function confirmDestroy(id, reference){
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
          }).then((result) => {
            if (result.isConfirmed) {
                destroy(id, reference);

            }
          });
      }
      function destroy(id, reference) {
        //JS axios
        axios.delete('/admin/permissions/'+id)
            .then(function (response) {
            // handle success
            console.log(response);
            reference.closest('tr').remove();
            showMessage(response.data);
            })
            .catch(function (error) {
            // handle error
            console.log(error);
            showMessage(error.response.data);
            })
      }
      function showMessage(data) {
        Swal.fire({
            icon: data.icon,
            title: data.title,
            showConfirmButton: false,
            timer: 1500
          });
      }
  </script>
@endsection
