@extends('adminLTE.layout')
@push('page-name')
{{$pageName}}
@endpush

@push('title')
Add User Member
@endpush

@section('content')

<div class="row">
  <div class="col-md-12">
    <div class="card card-primary card-outline">
      <!-- form start -->
      <form role="form" method="POST" action="{{route('users.store')}}?member=true">
        @csrf

        <input type="hidden" name="id" value="{{isset($data) ? $data->id:''}}" />

        <div class="card-body">
          <h4>@lang('user.text_form_title')</h4>
          <div class="row">

            <div class="form-group col-md-6">
              <label for="member_id">Member</label>
              <select data-size="5" data-live-search="true" name="member_id" type="member_id" class="form-control" id="member_id" placeholder="">
                <option>- Pilih -</option>
                @foreach ($members as $member)
                  <option data-phone="{{$member->people->phone}}" data-email="{{$member->people->email}}" {{isset($data) ? ($data->member_id == $member->id ? 'selected':''):''}} value="{{$member->id}}">{{$member->people->name}}</option>
                @endforeach
              </select>
            </div>

            <div class="form-group col-md-6">
              <label for="phone">@lang('user.text_phone')</label>
              <input readonly autocomplete="off" name="phone" type="phone" class="form-control" id="phone" placeholder="" value="{{isset($data) ? $data->phone:''}}">
            </div>

            <div class="form-group col-md-6">
              <label for="email">@lang('user.text_email')</label>
              <input readonly autocomplete="off" name="email" type="email" class="form-control" id="email" placeholder="" value="{{isset($data) ? $data->email:''}}">
            </div>

            <div class="form-group col-md-6">
              <label for="password">@lang('user.text_password')</label>
              <input autocomplete="off" name="password" type="password" class="form-control" id="password" placeholder="">
            </div>

          </div>

        </div>
        <!-- /.card-body -->

        <div class="card-footer">
          <div class="btn-group">
            <a class="btn btn-secondary" href="{{ $base }}"><i class="fa fa-arrow-left"></i> @lang('general.back')</a>
            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> @lang('general.save')</button>
          </div>
        </div>

      </form>
    </div>
  </div>
</div>
@endsection

@push('scripts')
<!-- Summernote -->
<script src="{{ plugin("summernote/summernote-bs4.min.js") }}"></script>
<!-- InputMask -->
<script src="{{ plugin("moment/moment.min.js") }}"></script>
<script src="{{ plugin("inputmask/min/jquery.inputmask.bundle.min.js") }}"></script>
<!-- Bootstrap Select -->
<script src='/theme/plugins/bootstrap-select-1.13.9/dist/js/bootstrap-select.min.js'></script>

<script>
  $('select').selectpicker();
  $(function () {
    // Summernote
    $('textarea').summernote({
      height: 200,
      toolbar: [
        // [groupName, [list of button]]
        ['style', ['bold', 'italic', 'underline', 'clear']],
        ['font', ['strikethrough', 'superscript', 'subscript']],
        ['fontsize', ['fontsize']],
        ['color', ['color']],
        ['para', ['ul', 'ol', 'paragraph']],
        ['height', ['height']]
      ]
    })

    $('[data-currency]').inputmask({
      'alias': 'currency',
      'groupSeparator': '.',
      'digits': 0,
      'digitsOptional': false,
      'prefix': ' Rp. ',
      'placeholder': '0'
    })
  })

  $('#member_id').change(function() {
    let selected = $(this).find(':selected');

    $('#phone').val(selected.data('phone').replace(/\D/g, ''))
    $('#email').val(selected.data('email'))
  })

</script>
@endpush

@push('styles')
<!-- summernote -->
<link rel="stylesheet" href="{{ plugin("summernote/summernote-bs4.css") }}">
<link rel='stylesheet' href='/theme/plugins/bootstrap-select-1.13.9/dist/css/bootstrap-select.min.css' />
@endpush
