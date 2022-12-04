@extends('default._layouts.main')


@section('content')
    <form class="row" id="article-form" role="form" method="POST" action="{{ route($resource.'.store') }}"
        enctype="multipart/form-data">
        @csrf
        <div class="col-md-8">
            <div class="card">

                <input type="hidden" name="id" value="{{isset($data) ? $data->id:''}}" />

                <div class="card-header p-2">
                    <h4 class="card-title float-left pt-1 pl-2">
                        {{ __("New Article") }}
                    </h4>
                    <div class="btn-group float-right">
                        <button style="width: 80px" type="submit" name="status" value="1" class="btn btn-primary btn-sm">
                            Publish
                        </button>
                        <button style="width: 80px" type="submit" name="status" value="0" class="btn btn-warning btn-sm">
                            Draft
                        </button>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <!-- Title -->
                        <div class="form-group col-md-12">
                            <label for="title">Title <span class="text-danger">*</span></label>
                            <input required autocomplete="off" name="title" type="text" class="form-control" id="title"
                                placeholder="" value="{{isset($data) ? $data->title:''}}">
                            <small class="d-block">Permalink: /<span
                                    id="permalink-text">{{isset($data) && $data->permalink ? $data->permalink:''}}</span></small>
                        </div>

                        <!-- Permalink -->
                        <input hidden autocomplete="off" name="permalink" type="text" class="form-control" id="permalink" />


                        <!-- Cover -->
                        <div class="form-group col-md-12">
                            <label for="cover">Cover</label>
                            <div id="article-cover" style="" class="rounded input-group">
                                <button onclick="document.querySelector('#cover-upload').click()" type="button"
                                    class="btn btn-primary btn-rounded"
                                    style="position: absolute; bottom: 10px; left: 10px"><i class="fa fa-upload"
                                        aria-hidden="true"></i> Upload Cover</button>
                            </div>
                            <input hidden accept="image/x-png,image/gif,image/jpeg" type="file" id="cover-upload">
                            <input name="cover" id="cover" type="hidden" value="{{isset($data) ? $data->cover:''}}" />
                        </div>
                    </div>


                    <!-- Content -->
                    <div class="form-group col-md-12">
                        <label for="content">Content <span class="text-danger">*</span></label>
                        <textarea required summernote name="content" class="form-control" id="content"
                            placeholder="">{{isset($data) ? $data->content:''}}</textarea>
                    </div>

                </div>

            </div>
            <!-- /.card-body -->
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="card-body">

                    <!-- Tags -->
                    <div class="form-group col-md-12">
                        <label for="published_at">Published At</label>
                        <input readonly data-toggle="datetimepicker" data-target="#published_at" autocomplete="off"
                            name="published_at" type="text" class="form-control" id="published_at" placeholder=""
                            value="{{isset($data) ? $data->published_at:''}}">
                        <small class="d-block">Blank to publish immediately</small>
                    </div>

                    <!-- Description -->
                    <div class="form-group col-md-12">
                        <label for="description">Description <span class="text-danger">*</span></label>
                        <textarea required rows="5" style="resize: none" autocomplete="off" name="description" class="form-control"
                            id="description" placeholder="">{{isset($data) ? $data->description:''}}</textarea>
                    </div>

                    <!-- Tags -->
                    <div class="form-group col-md-12">
                        <label for="tags">Tags <span class="text-danger">*</span></label>
                        <input required autocomplete="off" name="tags" type="text" class="form-control" id="tags"
                            placeholder="Symbols, Quote, Etc." value="{{isset($data) ? $data->tags:''}}">
                    </div>

                    <!-- Category -->
                    <div class="form-group col-md-12">
                        <label for="category_id">Category<span class="text-danger">*</span></label>
                        <select required id="category_id" class="form-control" name="category_id">
                            <option value="">- Pilih -</option>
                            @foreach ($categories as $item)
                            <option {{ isset($data) && $data->category_id == $item->id ? 'selected':''}}
                                value="{{$item->id}}">{{$item->name}}</option>
                            @endforeach
                        </select>
                    </div>

                </div>
            </div>
        </div>
    </form>
@endsection

@push('foot')
<script src='/admin-panel/vendor/jquery-datetimepicker/jquery.datetimepicker.full.min.js'></script>
<script src='/admin-panel/vendor/summernote/summernote-lite.min.js'></script>
<script src='/admin-panel/vendor/jquery-validation/jquery.validate.min.js'></script>

<script>
    const UPLOAD_IMAGE = ""

    async function sendFile(file,editor,welEditable) {
        data = new FormData();
        data.append("image", file);
        blockUI();
        let res = await axios.post(UPLOAD_IMAGE, data, {
            headers: {
                'Content-Type': 'multipart/form-data'
            }
        }).then(res => res.data);
        blockUI(true);
        $summernote.summernote('insertNode', $(document.createElement("img")).attr('src', res.data.url).attr('style', "width: 100%")[0])
    }

    $('#article-cover').css({
        'background': 'url({{url(isset($data) && $data->cover ? gs_url($data->cover) : 'data/images/no_image_available.png')}})',
        'backgroundSize': '100%',
        'backgroundPosition': 'top center',
    });


    function doDashes(str) {
        var re = /[^a-z0-9]+/gi; // global and case insensitive matching of non-char/non-numeric
        var re2 = /^-*|-*$/g;     // get rid of any leading/trailing dashes
        str = str.replace(re, '-');  // perform the 1st regexp
        return str.replace(re2, '').toLowerCase(); // ..aaand the second + return lowercased result
    }

    $('#title').keyup(function() {
        let val = $(this).val();

        let permalink = doDashes(val);

        $('#permalink-text').text(permalink);
        $('#permalink').val(permalink);
    });

    $('#cover-upload').change(function() {
        let file = this.files[0];
        console.log(file);
        if((file.size/1024/1024) <= 1.2) {
        let reader = new FileReader();
        reader.onload = (e) => {
            let result = e.target.result;

            $('#article-cover').css({
            'background': `url(${result})`,
            'backgroundSize': '100%',
            'backgroundPosition': 'top center',
            });

            /* Upload Images */
            var formData = new FormData();
            formData.append("image", file);
            axios.post(UPLOAD_IMAGE, formData, {
                headers: {
                'Content-Type': 'multipart/form-data'
                }
            }).then(res => res.data).then(res => {
            $('#cover').val(res.data.path);
            });

        };
        reader.readAsDataURL(file);
        } else {
        /* File terlalu besar */
        alert('File harus kurang atau sama dengan 1MB.')
        }
    })
    // $('#published_at').datetimepicker({
    //     format:'Y-m-d H:i:00'
    // });

    $('#article-form').validate({
        ignore: "",
        errorClass: "text-danger"
    });


    $(document).ready(function() {

        $('select').selectpicker();

        /* Summernote */
        $summernote = $('[summernote]').summernote({
            height: 500,
            callbacks: {
                onImageUpload: async function(files, editor, welEditable) {
                    await sendFile(files[0],editor,welEditable);
                }
            },
            toolbar: [
                // [groupName, [list of button]]
                ['style', ['style']],
                ['font', ['strikethrough', 'superscript', 'subscript','bold', 'italic', 'underline', 'clear']],
                ['fontsize', ['fontsize']],
                ['color', ['color','code']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['height', ['height']],
                ['insert', ['picture']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });
    });
</script>
@endpush

@push('haed')
<link rel='stylesheet' href='/summernote/summernote.css' />
<link rel='stylesheet' href='/admin-panel/vendor/summernote/summernote-lite.min.css' />
<link rel='stylesheet' href='/jquery-datetimepicker/jquery.datetimepicker.min.css' />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/css/bootstrap-select.min.css"/>
<style>
    #article-cover {
        height: 50vh;
        width: 100%;
        background: #EEE;
        position: relative;
    }

    [readonly] {
        background: white !important;
    }
</style>
@endpush
