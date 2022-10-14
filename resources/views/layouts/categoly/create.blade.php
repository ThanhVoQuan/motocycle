@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Thêm sản phẩm') }}
                <a href="{{url('/home')}}">Back</a>
                </div>
                
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form autocomplete="off" method="POST" action="{{route('catelory.store')}}">
                        @csrf
                        <div class="form-group">
                            <lable class="title">Tên xe</lable>
                            <input type="text" placeholder="Tên xe..." class="form-control" name="ten">
                        </div>

                        <div class="form-group">
                            <lable class="title">Ảnh</lable>
                            <input type="text" placeholder="Ảnh xe..." class="form-control" name="anh">
                        </div>

                        <div class="form-group">
                            <lable class="title">Hãng</lable>
                            <input type="text" placeholder="Hãng xe..." class="form-control" name="hang_id">
                        </div>

                        <div class="form-group">
                            <lable class="title">Phân khối</lable>
                            <input type="text" placeholder="Phân khối xe..." class="form-control" name="phan_khoi">
                        </div>

                        <div class="form-group">
                            <lable class="title">Gia</lable>
                            <input type="text" placeholder="Giá xe..." class="form-control" name="gia">
                        </div>
                            <!-- <div>
                            <input type="submit" name="themxe" class="btn btn-primary mt-2" value="Thêm">
                            </div> -->
                        <div class="form-group">
                            <input type="submit" name="themxe" class="btn btn-primary mt-2" value="Thêm">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
