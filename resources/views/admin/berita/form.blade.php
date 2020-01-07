        <div class="row">
            <div class="col-md-6">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="card-title">News & Ads</div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">News & Ads</span>
                            </div>
                            {!! Form::text('news_ads_name', null, ['placeholder' => 'Masukan News & Ads Name','class' => 'form-control']) !!}
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
                            <span class="input-group-text" id="basic-addon1">News & Ads Link</span>
                        </div>
                        {!! Form::text('link', null, ['placeholder' => 'Masukan Link News & Ads Name','class' => 'form-control']) !!}
                        @if ($errors->has('link'))
                        <span class="invalid" role="alert">
                          <strong>{{ $errors->first('link') }}</strong>
                      </span>
                      @endif
                  </div>
              </div>
              <div class="col-md-6"> 
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">News & Ads Type</span>
                        </div>
                        @php
                        $result = array_search(request()->type == false ? 4 : request()->type, $news_ads_type->toArray());
                        @endphp
                        {!! Form::select('news_ads_type_id', $news_ads_type, isset($data) ? $data->news_ads_type_id : $result, ['class' => 'form-control']); !!}
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
                   
                        <input type="date" class="form-control" name="start_date">
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
                        <input type="date" class="form-control" name="expired_date">
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