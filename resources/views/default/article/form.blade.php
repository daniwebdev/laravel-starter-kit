<div class="col-md-8">

    <div class="mb-3">
        <label for="title">Title</label>
        <input type="text" class="form-control" placeholder="Title">

        <small>Permalink : /<span id="permalink-text"></span></small>
    </div>

    <div class="mb-3">
        <label for="title">Content</label>
        <div id="content" type="text" name="content" placeholder="Write the content"></div>
    </div>

</div>
<div class="col-md-4">

    <div>
        <label for="">Category</label>
        <select selectpicker class="form-control" name="category" id="category">
            <option value="">- Select Category -</option>
            @foreach ($categories as $item)
            <option value="{{ $item->name }}">{{ $item->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="mt-3">
        <label for="">Scheduled <small>(leave blank for immediate posting)</small></label>
        <div class="row g-3">
            <div class="col-7">
                <div class="input-group">
                    <input type="text" datepicker class="form-control" name="published_at">
                    <span class="input-group-text"><i class="far fa-calendar"></i></span>
                </div>
            </div>

            <div class="col-5">

                <div class="input-group clockpicker col-md-4" data-placement="bottom" data-align="top"
                    data-autobtn-close="true">
                    <input type="text" class="form-control" value="13:14">
                    <span class="input-group-text"><i class="far fa-clock"></i></span>
                </div>

            </div>
        </div>
    </div>

    <div class="mt-3">
        <label for="">Description</label>
        <textarea name="description" class="form-control" id="description" rows="3"
            placeholder="Description"></textarea>
    </div>

    <div class="mt-3">
        <label for="">Image Cover</label>
        <input type="file" class="form-control">

        <div class="rounded d-flex align-items-center justify-content-center mt-2" style="background: #eee; height: 130px; width: 100%;">
            <span style="font-weight: bold;">P R E V I E W</span>
        </div>
    </div>


</div>


@push('foot')
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
<script src="/admin-panel/vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
<script src="/admin-panel/vendor/clockpicker/js/bootstrap-clockpicker.min.js"></script>
<!-- Initialize Quill editor -->
<script>
    var quill = new Quill('#content', {
      theme: 'snow',
      modules: {
            toolbar: [
            [{ header: [1, 2,2, false] }],
            ['bold', 'italic', 'underline'],
            ['image', 'code-block']
            ]
        },
      placeholder: "Write your content here..!"
    });

    $('[datepicker]').datepicker();
    $('.clockpicker').clockpicker()
</script>
@endpush

@push('head')
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
<link rel="stylesheet" href="/admin-panel/vendor/clockpicker/css/bootstrap-clockpicker.min.css">
<style>
    .ql-toolbar {
        border-radius: 10px 10px 0px 0px;
    }
    #content  {
        border-radius: 0px 0px 10px 10px !important;
    }
</style>
@endpush
