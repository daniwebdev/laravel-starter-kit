@extends('adminLTE.layout')

@push('title')
Article
@endpush
@push('page-name')
Article
@endpush

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                @if (Role::isAllow("create"))
                <div class="btn-group">
                    <a href="{{route($resource.'.create')}}" class="btn btn-primary btn-sm float-left">
                        <i class="fa fa-plus"></i> Create
                    </a>
                </div>
                @endif
                <!-- SEARCH FORM -->
                <form class="form-inline ml-3 float-right" action="{{route($resource.'.index')}}">
                    <div class="input-group input-group-sm">
                        <input style="background-color: #f2f4f6; border: none" class="form-control form-control-navbar"
                            type="search" placeholder="Search" aria-label="Search" name="search"
                            value="{{Request::get('search')}}">
                        <div class="input-group-append">
                            <button class="btn btn-navbar" style="background-color: #f2f4f6" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
                <div class="clearfix"></div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="row d-flex">
                    @foreach ($results as $item)
                    <div class="col-md-4 col-12 d-flex">
                        <div class="card  p-0">
                            <div class="card-header"
                                style="background: url('{{  gs_url($item->cover) ?? '' }}'); background-size: cover; height: 200px; border-radius: 5px">
                                @if ($item->status == 0)
                                    <span class="badge badge-danger">Draft</span>
                                @else
                                    <span class="badge badge-success">Publish</span>
                                @endif
                            </div>
                            <div class="card-body">
                                <span class="badge badge-primary mb-1">{{ $item->category->name }}</span><br />
                                <h5 class="mb-2">{{ $item->title }}</h5>
                                <h6><span class="text-bold">{{ $item->author_name }}</span>, {{ $item->published_at->diffForHumans() }}
                                </h6>
                                <p class="card-text text-sm text-justify">
                                    {{ substr(strip_tags($item->content), 0, 200) }}...</p>
                                <p>
                                    @foreach (collect(explode(',', $item->tags))->map(fn($x) => "#".trim($x)) as
                                    $tag)
                                    <span class="text-primary">{{$tag}}</span>
                                    @endforeach
                                </p>
                            </div>
                            <div class="card-footer">
                                <div class="float-left">
                                    <div class="stats">
                                        <span>
                                            <i class="fa fa-share" aria-hidden="true"></i>
                                        </span>
                                        <span class="ml-3">
                                            <i class="fa fa-thumbs-up" aria-hidden="true"></i>
                                            <span class="badge badge-default">
                                                {{ count($item->like) }}
                                            </span>
                                        </span>
                                    </div>
                                </div>

                                <div class="float-right">
                                    <a href="{{route($resource.'.edit', $item->permalink)}}" class="text-primary"><i
                                            class="fas fa-edit"></i> Update</a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>

                    @endforeach
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <div class="float-left">
                    Total Result : {{$results->total()}}
                </div>
                <div class="float-right">
                    {{$results->links()}}
                </div>
                <div class="clearfix"></div>
            </div>
            <!-- /.card-footer -->
        </div>
    </div>
</div>
@endsection



@push('styles')
<!-- Toastr -->
<link rel="stylesheet" href="{{ plugin("toastr/toastr.min.css") }}">
<style>
    h1,
    h2, h3,h4,h5 {
        display: block !important;
    }
</style>
@endpush

@push('scripts')
<!-- Toastr -->
<script src="{{ plugin("toastr/toastr.min.js") }}"></script>
@if (session('status'))
<script>
    toastr.{{session('status')}}('{{session('message')}}')
</script>
@endif

<script>
    $(".delete").click(function() {
    let id = $(this).data('id');

      Swal.fire({
          title: '<strong>Are you sure?</strong>',
          type: 'question',
          html: 'Delete this data from database.',
          showCloseButton: true,
          showCancelButton: true,
          focusConfirm: false,
          confirmButtonText:
            '<i class="fa fa-check"></i> Yes',
          confirmButtonAriaLabel: 'Thumbs up, great!',
          cancelButtonText:
            '<i class="fa fa-times"></i> No',
          cancelButtonAriaLabel: 'Thumbs down'
        }).then(btn => {
          if(btn.value) {
            axios.delete(`{{route($resource.'.index')}}/${id}`).then(res => {
              if(res.data.status) {
                toastr.success(`${res.data.message}`)
                setTimeout(() => {
                  location.reload()
                }, 2000);
              }
            })
          }
        })
    });
</script>
@endpush
