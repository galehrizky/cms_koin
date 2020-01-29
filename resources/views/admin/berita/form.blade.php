        <div class="row">
            <div class="col-md-6">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="card-title">{{ request()->type == "News" ? "Add News" : (request()->type == "Ads" ? "Add Ads": "Add Travel & umroh" ) }}</div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">{{ request()->type == "News" ? "Add News" : (request()->type == "Ads" ? "Add Ads": "Add Travel & umroh" ) }}</span>
                            </div>
                            {!! Form::text('news_ads_name', null, ['placeholder' => 'Masukan  Name','class' => 'form-control']) !!}
                        </div>
                        @if ($errors->has('judul'))
                        <span class="invalid" role="alert">
                          <strong>{{ $errors->first('judul') }}</strong>
                      </span>
                      @endif
                  </div>
              </div>
          </div>

          <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">Upload Images</div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                        </div>
                        <div class="custom-file">
                            {!! Form::file('image', ['class' => 'custom-file-input']) !!}
                            <label class="custom-file-label" for="inputGroupFile01">Upload Images</label>
                        </div>
                    </div>
                    @if ($errors->has('image'))
                    <span class="invalid" role="alert">
                      <strong>{{ $errors->first('image') }}</strong>
                  </span>
                  @endif
                  @if(isset($data))
                  @endif
              </div>
          </div>
      </div>
      <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="card-title">Konten</div>
                @if(isset($data))
                <img src="{{  url('storage/image/'. $data->image) }}" alt="..." class="img-thumbnail" width="400px" height="400px"><br><br>
                @endif
                <div class="row">
               <div class="col-md-6"> 
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">{{ request()->type }} Link</span>
                        </div>
                        {!! Form::text('link', null, ['placeholder' => 'Masukan Link','class' => 'form-control']) !!}
                        @if ($errors->has('link'))
                        <span class="invalid" role="alert">
                          <strong>{{ $errors->first('link') }}</strong>
                      </span>
                      @endif
                  </div>
              </div>
              <div class="col-md-3"> 
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Type</span>
                        </div>
                        @php
                        $result = request()->type == "News" ? "news" : (request()->type == "Ads" ? "ads": "travel" );
                        $arr = ["news" => "news", "ads" => "ads", "travel" => "travel"];
                        @endphp
                        {!! Form::select('type', $arr, isset($data) ? $data->type : $result, ['class' => 'form-control', 'readonly']); !!}
                        @if ($errors->has('type'))
                        <span class="invalid" role="alert">
                          <strong>{{ $errors->first('type') }}</strong>
                      </span>
                      @endif
                  </div>
              </div>
              <div class="col-md-3"> 
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Kategori</span>
                        </div>
                        {!! Form::select('news_ads_type_id', $news_ads_type, isset($data) ? $data->news_ads_type_id : '', ['class' => 'form-control']); !!}
                        @if ($errors->has('news_ads_type_id'))
                        <span class="invalid" role="alert">
                          <strong>{{ $errors->first('news_ads_type_id') }}</strong>
                      </span>
                      @endif
                  </div>
              </div>
              <div class="col-md-6"> 
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Start date from </span>
                        </div>
                   
                        <input type="date" value="{{ isset($data) ? $data->start_date : old('start_date') }}" class="form-control" name="start_date">
                        @if ($errors->has('start_date'))
                        <span class="invalid" role="alert">
                          <strong>{{ $errors->first('start_date') }}</strong>
                        </span>
                        @endif
                  </div>
              </div>
              <div class="col-md-6"> 
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Expired date</span>
                        </div>
                        <input type="date" class="form-control" value="{{ isset($data) ? $data->expired_date : old('expired_date') }}" name="expired_date">
                        @if ($errors->has('expired_date'))
                        <span class="invalid" role="alert">
                          <strong>{{ $errors->first('expired_date') }}</strong>
                      </span>
                      @endif
                  </div>
              </div>
          </div>
              <div class="input-group mb-3">
                {!! Form::textarea('description', null, ['class'=>'form-control']) !!}
                @if ($errors->has('description'))
                <span class="invalid" role="alert">
                  <strong>{{ $errors->first('description') }}</strong>
              </span>
              @endif
          </div>
          <div class="col-md-12 text-right">
            <button class="btn btn-primary">Submit</button>
        </div>
    </div>
</div>
</div>
</div>