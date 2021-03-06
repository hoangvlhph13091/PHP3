
@extends('admin.layouts.main')
@section('title')
    <p>Home</p>
@endsection
@section('content')
    <div class="container">
        <div class="card card-custom gutter-b">
          <div class="card-header flex-wrap py-3">
            <div class="card-title">
              <h3>Product</h3>
             </div>
            <div class="search">
              <div> 
               <a href="{{route('product-addform')}}" class="btn btn-outline-brand m-btn m-btn--custom m-btn--icon m-btn--pill m-btn--air">
                 <span>
                   <i class="la la-plus"></i>
                   <span>Add</span>
                 </span>
               </a>
              </div>
              
            </div>
          </div>
          <div class="card-body">
            <!--begin: Datatable-->
            <div id="kt_datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row"><div class="col-sm-12"><table class="table table-bordered table-checkable dataTable no-footer dtr-inline collapsed" id="kt_datatable" role="grid" aria-describedby="kt_datatable_info" style="width: 1234px;">
              @if(session()->has('message'))
                      <div class="alert alert-success">
                          {{ session()->get('message') }}
                      </div>
                    @endif
              @if(session()->has('error'))
                <div class="alert alert-danger">
                  {{ session()->get('error') }}
                </div>
              @endif
              <thead>
                <tr role="row">
                  <th class="sorting sorting_desc" tabindex="0" aria-controls="kt_datatable" rowspan="1" colspan="1"  >ID</th>
                  <th class="sorting" tabindex="0" aria-controls="kt_datatable" rowspan="1" colspan="1" >Tên</th>
                  <th class="sorting" tabindex="0" aria-controls="kt_datatable" rowspan="1" colspan="1" >Giá</th>
                  <th class="sorting" tabindex="0" aria-controls="kt_datatable" rowspan="1" colspan="1" >image</th>
                  <th class="sorting" tabindex="0" aria-controls="kt_datatable" rowspan="1" colspan="1" >Mô Tả</th>
                  <th class="sorting" tabindex="0" aria-controls="kt_datatable" rowspan="1" colspan="1" >Category</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($product as $pd)
                  <tr class="odd">
                    <td >{{$pd->id}}</td>
                    <td>{{$pd->name}}</td>
                    <td>{{$pd->price}}</td>
                    <td><img src="{{asset('storage/image/'.$pd->image)}}" style="height: 150px" alt="{{asset('storage/image/'.$pd->image)}}"></td>
                    <td>{{$pd->description}}</td>
                    <td>@if (isset($pd->cate->name))
                      {{$pd->cate->name}}
                    @endif
                        
        
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
         
        </div>
        
        </div>
        <div  class=" dataTables_pager">
          
          {!! $product->links() !!}
        
        </div>
            <!--end: Datatable-->
          </div>
        </div>
      
      </div>
@endsection 
