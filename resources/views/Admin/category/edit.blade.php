@extends('admin.layouts.main')
@section('title')
    <p>category-add</p>
@endsection
@section('content')
<div class="container">
    <div class="m-portlet m-portlet--tab">
        <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
                <div class="m-portlet__head-title">
                    <span class="m-portlet__head-icon m--hide">
                        <i class="la la-gear"></i>
                    </span>
                    <h3 class="m-portlet__head-text">
                        Square Input Style
                    </h3>
                </div>
            </div>
        </div>
    
        <!--begin::Form-->
        <form class="m-form m-form--fit m-form--label-align-right" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="m-portlet__body">
                <div class="form-group m-form__group">
                    <label for="exampleInputEmail1">name</label>
                    <input type="text" class="form-control m-input m-input--square @error('name') is-invalid @enderror" id="exampleInputEmail1" name="name"value="{{ $cate->name}}">
                    @error('name')
                    <div class="alert text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group m-form__group">
                    <label for="exampleInputPassword1">img</label>
                    <input type="file" class="form-control m-input m-input--square @error('image') is-invalid @enderror" id="exampleInputPassword1" name="image" value="{{$cate->image}}" >
                    @error('image')
                    <div class="alert text-danger">{{ $message }}</div>
                    @enderror
                    <img src="{{asset('storage/image/'.$cate->image)}}" alt="" style="height: 200px">

                </div>
                <div class="form-group m-form__group">
                    <label for="exampleInputPassword1">category</label>
                    <select name="parent_id" id="" class="form-control">
                        <option @if ($cate->parent_id==0)
                            selected
                        @endif value="0">N/A</option>

                        @foreach ($category as $c)
                            <option @if ($c->id == $cate->parent_id)
                                selected
                            @endif value="{{$c->id}}">{{$c->name}}</option>
                        @endforeach
                    </select>
                </div> 
            </div>
            <div class="m-portlet__foot m-portlet__foot--fit">
                <div class="m-form__actions">
                    <button type="submit" class="btn btn-primary">Add</button>
                    <button type="reset" class="btn btn-secondary">Cancel</button>
                </div>
            </div>
        </form>
    
        <!--end::Form-->
    </div>
</div>
@endsection