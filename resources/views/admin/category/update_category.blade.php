@extends('admin.layouts.main')

@section('title', 'Admin dashboard overview')

@section('content')
<link rel="stylesheet" type="text/css" href="{{asset('jasny/css/jasny-bootstrap.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('jasny/css/jasny-bootstrap.min.css')}}">

    <div>
        @if(Session::has('success_message'))
            @component('admin.components.alert')
                @slot('title')
                    Succeed Confirmation
                @endslot
                @slot('message')
                    {{ Session::get('success_message') }}
                @endslot
                @slot('type')
                    success
                @endslot
                @slot('timer')
                    3000
                @endslot
                @slot('attributes')
                    allowOutsideClick: true
                @endslot
            @endcomponent
        @endif
        @if(Session::has('error_message'))
        <script type="text/javascript">
            swal({
                title: "Opp! Something went wrong",
                text: "{{ Session::get('error_message') }}",
                type: "error",
                timer: 5000,
                allowOutsideClick: true
            });
        </script>
        @endif
        @if($errors->any())
        <script type="text/javascript">
            swal({
                title: "Opp! Something went wrong",
                text: "@foreach($errors->all() as $error) <p>{{ $error }}</p> @endforeach",
                type: "error",
                timer: 5000,
                html: true,
                allowOutsideClick: true
            });
        </script>
        @endif
        <form class="custom-form"  action="{{ route('admin.category.update', $category->id) }}" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{!! csrf_token() !!}">
           <!--  <input type="hidden" name="id"> -->
            <div class="uk-flex">
                <!-- Card Form -->
                <div class="uk-flex-1">
                    <h2 class="form-title uk-text-center">
                        CATEGORY UPDATE FORM
                        <span>
                            Be confident with your new idea
                        </span>
                    </h2>

                    <div class="card card-transparent">

                        <div class="uk-container uk-container-center">
                            <div class="uk-flex uk-flex-center uk-flex-middle">
                                <div class="uk-width-medium">

                                    <div class="custom-form-group">
                                        <div class="">
                                            <input type="text" placeholder="Category name goes here ..." name="name" value="{{ $category->name }}" class="custom-input-text" required/>
                                        </div>
                                    </div>

                                    <div class="custom-form-group">
                                        <div class="selectize-md">
                                            <input type="text" id="mediaField" name="mediatype_id" required/>
                                        </div>
                                    </div>

                                  <div class="fileupload fileupload-new" data-provides="fileupload">
                                      <div class="fileupload-new thumbnail" style="width:100px; height:50px;"><img src="{{asset('images')}}/{{ $category->images}}" id="image-defalt-detail" class="img-circle1" alt="User Image" width="100%" height="400" value="{{asset('images')}}/{{ $category->images}}" id="image-defalt-detail" class="img-circle1" alt="Select images" width="100%" height="400"/></div>
                                      
                                      <div><a href="#">
                                        <span class="btn btn-file"><span class="fileupload-new" >Select image</span><span class="fileupload-exists">Change</span><input type="file" style="cursor: pointer;" name="images" /></span>
                                      </div>
                                    </div>


                                    <div class="custom-form-group">
                                        <div class="padding-top-sm"></div>
                                        <input type="reset" class="custom-btn-cancel" value="Cancel">
                                        <input type="submit" class="custom-btn-submit" value="Update Now"/>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="footer">

                        </div>
                    </div>

                </div>
                <!-- /Card From -->
            </div>
        </form>
    </div>
@endsection

@section('script')

    <script>
        $(document).ready(function(){
            // Initialize media select option
            var mediaSelect = $('#mediaField').selectize({
                delimiter: ',',
                persist: false,
                create: false,
                valueField: 'mediaId',
                labelField: 'mediaName',
                searchField: 'mediaName',
                placeholder: 'Attach media type',
                options: [
                    {mediaId: 1, mediaName: 'Reading'},
                    {mediaId: 3, mediaName: 'Watching'}
                ],
                items: [
                @if($mediatypes)
                    @foreach($mediatypes as $media)
                        {{ $media }},
                    @endforeach
                @endif
                ],
            });
        });


       
    </script>
@endsection
