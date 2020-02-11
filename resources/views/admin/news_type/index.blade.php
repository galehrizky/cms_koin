@extends('layouts.admin')
@section('title','Data Category')
@section('css')
<!-- toastr css -->
<link rel="stylesheet" href="{{ asset('act/assets/styles/vendor/toastr.css')}}">

<style type="text/css">

  .color-wrapper {
    position: relative;
    width: 250px;
    margin: 20px auto;
  }

  .color-wrapper p {
    margin-bottom: 5px;
  }


  .color-picker {
    width: 130px;
    background: #F3F3F3;
    padding: 5px;
    border: 5px solid #fff;
    box-shadow: 0px 0px 3px 1px #DDD;
    position: absolute;
    top: 61px;
    left: 2px;
  }

  .color-holder {
    background: #fff;
    cursor: pointer;
    border: 1px solid #AAA;
    width: 40px;
    height: 36px;
    float: left;
    margin-left: 5px;
  }

  .color-picker .color-item {
    cursor: pointer;
    width: 10px;
    height: 10px;
    list-style-type: none;
    float: left;
    margin: 2px;
    border: 1px solid #DDD;
  }


</style>
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
          <div class="form-group">
            <label>Nama Category</label>
            {!! Form::text('news_ads_type', null, ['placeholder' => 'Nama Category','class' => 'form-control', 'required']) !!}
          </div>
          <div class="form-group">
            <label>Color</label>
            <input type="text" name="colors" placeholder="#FFFFFF"  class="pickcolor call-picker form-control">
          </div>
          <div class="form-group">
            <div class="color-holder"></div>
            <div class="color-picker" style="display: none"></div>
          </div>
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
          <div class="form-group">
            <label>Nama Category</label>
            {!! Form::text('news_ads_type', null, ['placeholder' => 'Nama Category','class' => 'form-control', 'id' => 'news_ads_type', 'required']) !!}
          </div>
          <div class="form-group">
            <label>Color</label>
            <input type="text" name="colors" placeholder="#FFFFFF"  id="pickcolor" class="pickcolor call-picker form-control">
          </div>
          <div class="form-group">
            <div class="color-holder" id="color-holder-edit"></div>
            <div class="color-picker" style="display: none"></div>
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

  var colorList = [ 'FFCC5F', 'F0FF5F', 'A4FF5F', '5FFF85', '5FFFDA', '5FFFE9', '5FEAFF', '5FC4FF', 
  '5F85FF', 'FF6633', '8F5FFF', 'CE5FFF', 'F55FFF', 'FF5FEF', 'FF5FBF', 'FF5F9F', 'FF5F6F', 'FF9933', '99CC33', '669966', '66CCCC', '3366FF', '663366', '999999', 'CC66FF', 'FFCC33', 'FFFF66', '99FF66', '99CCCC', '66CCFF', '993366', 'CCCCCC', 'FF99CC', 'FFCC99', 'FFFF99', 'CCffCC', 'CCFFff', '99CCFF', 'CC99FF', 'FFFFFF' ];
  var picker = $('.color-picker');

  for (var i = 0; i < colorList.length; i++ ) {
    picker.append('<li class="color-item" data-hex="' + '#' + colorList[i] + '" style="background-color:' + '#' + colorList[i] + ';"></li>');
  }


  $('.call-picker').click(function(event) {
    event.stopPropagation();
    picker.fadeIn();
    picker.children('li').hover(function() {
      var codeHex = $(this).data('hex');

      $('.color-holder').css('background-color', codeHex);
      $('.pickcolor').val(codeHex);
    });
  });

  function tambah(){
    $('#tambah').modal('show');
  }

  $(document).on('click', '.edit', function(){
    $('#news_ads_type').val($(this).data('news_ads_type'));
    $('#pickcolor').val($(this).data('colors'));
    $('#color-holder-edit').css('background-color', $(this).data('colors'));
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
