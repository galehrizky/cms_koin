@extends('layouts.front')

@section('content')
 
  <!-- ================ contact section start ================= -->
  <section class="contact-section area-padding">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h2 class="contact-title">Register</h2>
        </div>
        <div class="col-lg-8">
          <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
            <div class="row">
                <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control" name="title" type="text" placeholder="Title">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control" name="nama_depan" type="text" placeholder="Nama depan">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control" name="nama_belakang" type="text" placeholder="Nama Belakang">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control" name="nomor_telp" type="text" placeholder="Nama Telepon">
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                    <textarea class="form-control w-100" name="alamat" cols="30" rows="9" placeholder="Alamat"></textarea>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control" name="email" type="text" placeholder="Email">
                </div>
              </div> 
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control" name="tanggal" type="date" placeholder="Tanggal">
                </div>
              </div>    
            </div>
            <div class="form-group mt-3">
              <button type="submit" class="button button-contactForm">Register</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- ================ contact section end ================= -->
@endsection