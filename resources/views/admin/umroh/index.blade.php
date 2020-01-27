@extends('layouts.admin')
@section('title','News Data')

@section('css')
<!-- toastr css -->
    <link rel="stylesheet" href="{{ asset('act/assets/styles/vendor/toastr.css')}}">
@endsection
@section('content')
        <!-- ============ Body content start ============= -->
        <div class="main-content-wrap sidenav-open d-flex flex-column">
            <div class="breadcrumb">
                <h1>News & Ads</h1>
                <ul>
                    <li><a href="">News & Ads</a></li>
                </ul>
            </div>
            <div class="separator-breadcrumb border-top"></div>

            <div class="row mb-4">
                <div class="col-md-12 mb-4">
                    <div class="card text-left">

                        <div class="card-body">
                            <h4 class="card-title mb-3">News & Ads</h4>
                            <div class="table-responsive">
                                <table id="datatables" class="display table table-striped table-bordered" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>News & Ads Names</th>
                                            <th>News & Ads Type</th>
                                            <th>Start date</th>
                                            <th>Expired date</th>
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


<!-- Confirm Delete -->

<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                Delete ?
            </div>
            <div class="modal-body">
                Are you sure you want to delete this item?
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
@endsection

@section('js')

<script type="text/javascript">

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
        ajax: "{{ route('beritas.datatables') }}",
        columns: [
          { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false },
            { data: 'news_ads_name', name: 'news_ads_name' },
            { data: 'news_ads_type', name: 'news_ads_type' },
            { data: 'start_date', name: 'start_date' },
            { data: 'expired_date', name: 'expired_date' },
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
