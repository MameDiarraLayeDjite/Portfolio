@extends('admin.layouts.master')
@section('title', 'General Settings')

@section('content')
<section class="section">
    <div class="section-header">
      <div class="section-header-back">
        <a href="{{route('admin.settings.index')}}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
      </div>
      <h1>General Setting</h1>

    </div>

    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>Update Setting</h4>
            </div>
            <div class="card-body">
                <form action="{{route('admin.general-setting.update',1)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Logo Preview</label>
                        <div class="col-sm-12 col-md-7">
                                <img style="width:200px" src="{{ $setting && $setting->logo ? asset($setting->logo) : asset('images/default-image.jpg')}}" alt="">
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Logo</label>
                        <div class="col-sm-12 col-md-7">
                            <div class="custom-file">
                                <input type="file" name="logo" class="custom-file-input" id="customFile">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Footer Logo Preview</label>
                        <div class="col-sm-12 col-md-7">
                                <img style="width:200px" src="{{ $setting && $setting->footer_logo ? asset($setting->footer_logo) : asset('images/default-image.jpg')}}" alt="">
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Footer Logo</label>
                    <div class="col-sm-12 col-md-7">
                        <div class="custom-file">
                            <input type="file" name="footer_logo" class="custom-file-input" id="customFile">
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                    </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Fevicon Preview</label>
                        <div class="col-sm-12 col-md-7">
                                <img style="width:200px" src="{{ $setting && $setting->favicon ? asset($setting->favicon) : asset('images/default-image.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Favicon</label>
                    <div class="col-sm-12 col-md-7">
                        <div class="custom-file">
                            <input type="file" name="favicon" class="custom-file-input" id="customFile">
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                    </div>
                    </div>

                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                      <div class="col-sm-12 col-md-7">
                        <button class="btn btn-primary">Update</button>
                      </div>
                    </div>
                </form>



            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
