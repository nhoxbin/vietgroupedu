@extends('layouts.web')

@section('section')
	<div class="about-page-area section-padding" style="padding-top: 10px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title-wrapper">
                        <div class="section-title">
                            <h3>{{ $cate->title }}</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <categories-component slug="{{ $cate->slug }}" />
                </div>
            </div>
        </div>
    </div>
@endsection