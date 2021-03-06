@extends('admin.layouts.main')
@section('title')
    <p>Post</p>
@endsection
@section('content')
    <div class="container">
        <div class="card card-custom gutter-b">
          <div class="card-header flex-wrap py-3">
            <div class="card-title">
              <h3>Category</h3>
             </div>
            <div class="search">
              <div> 
               <a href="{{route('post-add')}}" class="btn btn-outline-brand m-btn m-btn--custom m-btn--icon m-btn--pill m-btn--air">
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
                  <th class="sorting" tabindex="0" aria-controls="kt_datatable" rowspan="1" colspan="1" >cate name</th>
                  <th class="sorting" tabindex="0" aria-controls="kt_datatable" rowspan="1" colspan="1" >product</th>
                  <th class="sorting" rowspan="1" colspan="1" style="text-align: center"  aria-label="Actions">Actions</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($post as $p)
                  <tr class="odd">
                    <td >{{$p->id}}</td>

                    <td>
                        {{$p->cate[0]->name}}
                    </td>

                    <td>
                        @foreach ($p->prod as $prod)
                                <li>{{ $prod->name}}</li>
                        @endforeach

                               
                    </td>
                        <td style="text-align: center" ><a href="{{route('category/EditForm',['id'=> $p->id])}}" class="btn btn-primary " @popper(Ch???nh S???a)><i class="fa	fa-edit"></i></a>  
                                                        <a onclick="return confirm('ch???c ko b???n')" href="{{route('category/Del',['id'=> $p->id])}}" class="btn btn-danger " @popper(X??a) ><i class="fa fa-ban"></i></a></td>
        
                  </tr>
                    
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
        
        </div>
      <div  class=" dataTables_pager">
          
          {!! $post->links() !!}
        
      </div>
            <!--end: Datatable-->
          </div>
        </div>
      
      </div>
@endsection 
