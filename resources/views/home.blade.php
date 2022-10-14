@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Thêm sản phẩm') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="{{route('catelory.create')}}" class="btn btn-primary w-100 mb-2">Thêm sản phẩm</a>
                    <a href="{{}}" class="btn btn-primary w-100 mb-2">Thêm sản xe</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
