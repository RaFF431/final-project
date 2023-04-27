@extends('Back.main')
@section('content')
        <div class="page-wrapper">
            <div class="page-titles">
                <div class="d-flex align-items-center">
                    <h5 class="font-medium m-b-0">@lang('keywords.slider-create')</h5>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col s12 l12">
                        <div class="card">
                            <div class="card-content">
                                <form action="{{ route('Update.slider', $slider->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <i class="material-icons prefix">title</i>
                                            <input id="name" name="title" value="{{ $slider->title }}" type="text">
                                            <span class="errorMessage">{{ $errors->first('title') }}</span>
                                            <label for="name">@lang('keywords.slider-title')</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <i class="material-icons prefix">payment</i>
                                            <input id="email" name="description" value="{{ $slider->description }}" type="text">
                                            <span class="errorMessage">{{ $errors->first('description') }}</span>
                                            <label for="email">@lang('keywords.slider-description')</label>
                                        </div>
                                    </div>

                                    <div class="row">
                                            <div class="col s12">
                                                <div class="file-field input-field">
                                                    <div class="btn cyan">
                                                        <span>@lang('keywords.slider-image')</span>
                                                        <input type="file" name="image">
                                                    </div>
                                                    <div class="file-path-wrapper">
                                                        <input class="file-path validate" type="text">
                                                    </div>
                                                    <span class="errorMessage">{{ $errors->first('image') }}</span>
                                                </div>
                                            </div>
                                        </div>

                                    <div class="row">
                                        <div class="input-field col s12">
                                            <button class="btn cyan waves-effect waves-light right" type="submit">@lang('keywords.save')</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

        <div class="row">
            <div class="col s12 l12">
                <div class="card">
                    <div class="card-content">
                        <h5>@lang('keywords.updated-image')</h5>
                        <div class="row">
                            <div class="input-field col s6">
                                <img width="200" src="{{ asset($slider->image) }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection