@extends('admin.layouts.master')
@section('title','Create Footer Social Links')

@section('content')
<section class="section">
    <div class="section-header">
        <div class="section-header-back">
            <a href="{{ route('admin.footer-social.index') }}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
        </div>
        <h1>Footer Social Links</h1>
    </div>

    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Create Social Link</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{route('admin.footer-social.store')}}" method="POST">
                            @csrf
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Icon</label>
                                <div class="col-sm-12 col-md-7">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="icon" id="icon" readonly>
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-secondary" type="button" id="iconPicker">
                                                Select Icon
                                            </button>
                                        </div>
                                    </div>
                                    @error('icon')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Url</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="text" name="url" class="form-control" value="{{ old('url') }}">
                                    @error('url')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                <div class="col-sm-12 col-md-7">
                                    <button type="submit" class="btn btn-primary">Create</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@push('scripts')
<script>
$(document).ready(function() {
    $('#iconPicker').iconpicker({
        title: 'Choose an icon',
        selected: false,
        placement: 'bottom',
        animation: true,
        hideOnSelect: true,
        showFooter: true,
        searchInFooter: true,
        mustAccept: false,
        selectedCustomClass: 'bg-primary',
        iconBaseClass: 'fas',
        iconClassPrefix: 'fa',
        icons: [
            'fa-facebook', 'fa-twitter', 'fa-instagram', 'fa-linkedin', 
            'fa-youtube', 'fa-whatsapp', 'fa-telegram', 'fa-pinterest',
            'fa-github', 'fa-reddit', 'fa-discord', 'fa-tiktok'
        ]
    }).on('change', function(e) {
        $('#icon').val(e.icon);
        console.log('Icon selected:', e.icon);
    });
});
</script>
@endpush
@endsection