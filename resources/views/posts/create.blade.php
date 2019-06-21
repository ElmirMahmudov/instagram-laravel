@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/p" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card">
            <div class="card-header">
                <h3>Create Post</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-8">
                        <div class="form-group row">
                            <label for="caption" class="col-md-4 col-form-label">{{ __('Post Caption') }}</label>

                            <div class="col-md-6">
                                <input id="caption" type="text" class="form-control @error('caption') is-invalid @enderror" name="caption" value="{{ old('caption') }}" requiredd autocomplete="caption">

                                @error('caption')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="image" class="col-md-4 col-form-label">{{ __('Post image') }}</label>

                            <div class="col-md-6">
                                <input id="image" type="file" class="form-control-file @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" requiredd autocomplete="image">

                                @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <button href="#" class="btn btn-primary">Create</button>
                    </div>
                </div>
            </div>
        </div>

    </form>

</div>
@endsection
