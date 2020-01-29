@extends('layouts.admin')
@section('title','Data Category')
@section('css')
<!-- toastr css -->
    <link rel="stylesheet" href="{{ asset('act/assets/styles/vendor/toastr.css')}}">
@endsection

@section('content')
<!-- ============ Body content start ============= -->
<div class="main-content-wrap sidenav-open d-flex flex-column">
    <div class="breadcrumb">
        <h1>Data Category</h1>
        <ul>
            <li><a href="">Data Category</a></li>
        </ul>
    </div>
    <div class="separator-breadcrumb border-top"></div>

    <div class="row mb-4">
        <div class="col-md-12 mb-4">
            <div class="card text-left">

                <div class="card-body">
                  <div class="panel-heading">
                      <div class="media v-middle">
                        <div class="media-body">
                            <h4 class="text-headline margin-none">Data Category</h4>
                            <p class="text-subhead text-light">Data Category Manajemen</p>
                        </div>

                        <div class="media-right">
                         <button onclick="return tambah()"  class="btn btn-primary">Tambah</button>
                     </div>
                 </div>
             </div>
             <div class="table-responsive">
                <table id="datatables" class="display table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Category</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                </table>
            </div>

        </div>
    </div>
</div>
<!-- end of col -->
</div>
<!-- ============ Body content End ============= -->


<!-- Modal Section -->

<!-- Add Tambah -->
<div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Tambahkan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
      </button>
  </div>
  <div class="modal-body">
    <form action="{{ route('category.store') }}" method="POST">
      @csrf
      <label>Nama Category</label>
      {!! Form::text('news_ads_type', null, ['placeholder' => 'Nama Category','class' => 'form-control', 'required']) !!}
  </div>
  <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      <button type="submit" class="btn btn-primary">submit</button>
  </div>
</form>
</div>
</div>
</div>

<!-- Edit -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Edit</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
      </button>
  </div>
  <div class="modal-body">
    <form id="form-updated" method="POST">
      @csrf
      @method('PUT')
     <label>Nama Category</label>
      {!! Form::text('news_ads_type', null, ['placeholder' => 'Nama Category','class' => 'form-control', 'id' => 'news_ads_type', 'required']) !!}

  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    <button type="submit" class="btn btn-primary">Updated</button>
</div>
</form>
</div>
</div>
</div>

<!-- Confirm Delete -->

<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                Delete ?
            </div>
            <div class="modal-body">
                Apakah anda yakin akan menghapus data ini ?
            </div>
            <form id="deleted" method="post">
              @csrf
              @method('DELETE')
          </form>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            <button type="button" onclick="deleted()" class="btn btn-danger" data-dismiss="modal">Delete</button>
        </div>

    </div>
</div>
</div>
<!-- ============ Body content End ============= -->
@endsection
@section('js')
<script type="text/javascript">
    function tambah(){
        $('#tambah').modal('show');
    }

    $(document).on('click', '.edit', function(){
        $('#news_ads_type').val($(this).data('news_ads_type'));
        $('#form-updated').attr("action", $(this).data('url'));
        $('#exampleModalLong').modal('show');
    })
     $(document).on('click', '.delete', function(){
       $('#deleted').attr("action", $(this).data('url'));
       $('#confirm-delete').modal('show');
   })
   var deleted = function(){
      $('#deleted').submit();
  }
$(function () {
    
    var table = $('#datatables').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('datatables.news_types') }}",
        columns: [
          { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false },
            { data: 'news_ads_type', name: 'news_ads_type' },
            {data: 'action', name: 'action', orderable: false, searchable: false}
        ]
    });
    
  });
</script>
<!-- taostr js -->
<script src="{{ asset('act/assets/js/vendor/toastr.min.js')}}"></script>
<script type="text/javascript">
@if ($message = Session::get('msg_success'))
  var pesan = "{{ $message }}";
  toastr.success(pesan, "Pemberitahuan !", {
        timeOut: "50000",
    });
@elseif($message = Session::get('msg_warning'))
  var pesan = "{{ $message }}";
  toastr.warning(pesan, "Pemberitahuan !", {
        timeOut: "50000",
    });
@elseif($message = Session::get('msg_info'))
  var pesan = "{{ $message }}";
  toastr.info(pesan, "Pemberitahuan !", {
        timeOu
@elseif($message = Session::get('msg_warning'))
@endif
</script>

@endsection
