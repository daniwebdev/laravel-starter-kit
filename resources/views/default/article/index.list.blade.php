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
              type="search" placeholder="Search" aria-label="Search" name="search" value="{{Request::get('search')}}">
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
      <div class="card-body p-0">
          <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th style="width: 10px">#</th>
										<th>Title</th>
										<th>Content</th>
                    <th style="width: 80px">Status</th>
                    <th style="width: 160px">Action</th>
                  </tr>
                </thead>
                @if (!count($results))
                <tr>
                  <td colspan=9 class="text-center">@lang('Not Found')</td>
                </tr>
                @endif
                <tbody>
                  @php
                  //$no = 1;
                  $no = ($results->currentPage() - 1) * $results->perPage() + 1;
                  @endphp
                  @foreach ($results as $item)

                  <tr>
                    <td style="vertical-align: middle">{{ $no }}</td>
                    <td style="vertical-align: middle">
                      <span class="badge badge-primary">{{ $item->category->name}}</span><br/>
                      {{ $item->title }}
                    </td>
										{{-- <td style="vertical-align: middle"><img width="20" class="rounded-circle" src="{{ $item->get_cover->url }}" /></td> --}}
                    <td style="vertical-align: middle">
                      {{ substr(strip_tags($item->content), 0, 200) }}...<br/>
                      <div class="mt-2">
                        @foreach (collect(explode(',', $item->tags))->map(fn($x) => "#".trim($x)) as $tag)
                            <span class="text-primary">{{$tag}}</span>
                        @endforeach
                      </div>
                    </td>

                    <td style="vertical-align: middle">
                      @if(!$item->deleted_at)
                        <span class="badge bg-success">Aktif</span>
                      @else
                        <span class="badge bg-danger">Deleted</span>
                      @endif
                    </td>
                    <td style="vertical-align: middle">
                        <a href="{{route($resource.'.edit', $item->permalink)}}" class="btn btn-primary btn-xs text-white"><i class="fas fa-pencil-alt"></i> Edit</a>
                        @if($item->deleted_at)
                        <button class="btn btn-success btn-xs text-white restore" data-id="{{$item->id}}"><i class="fas fa-sync-alt"></i> Restore</button>
                        @else
                          @if (Role::isAllow("destroy"))
                          <button class="btn btn-danger btn-xs text-white delete" data-id="{{$item->id}}"><i class="fas fa-trash"></i> Delete</button>
                          @endif
                        @endif
                    </td>
                  </tr>
                  @php
                  $no++;
                  @endphp
                  @endforeach

                </tbody>
              </table>
          </div>
      </div>
      <!-- /.card-body -->
      <div class="card-footer clearfix">
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
