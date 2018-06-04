@extends('admin.layouts.main')

@section('title', 'Create new category')

@section('content')

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
        <form class="custom-form" enctype="multipart/form-data" action="{{ route('admin.author.update') }}" method="POST">
            <input type="hidden" name="_token" value="{!! csrf_token() !!}">
            <div class="uk-flex">
                <!-- Card Form -->
                <div class="uk-flex-1">
                    <h2 class="form-title uk-text-center">
                        AUTHOR EDIT FORM
                        <span>

                        </span>
                    </h2>

                    <div class="card card-transparent">

                        <div class="uk-container uk-container-center">
                            <div class="uk-flex uk-flex-center uk-flex-middle">
                                <div class="uk-width-medium">

                                    <div class="custom-form-group">
                                        <div class="">
                                            <input type="hidden" value="{{$author->id}}" name="id" required/>
                                            <input type="text" placeholder="Full Name" name="username" class="custom-input-text" value="{{$author->username}}" required/>
                                        </div>
                                    </div>

                                    <div class="custom-form-group">
                                        <div class="">
                                            <input type="text" placeholder="Email address" name="email" value="{{$author->email}}" class="custom-input-text" required/>
                                        </div>
                                    </div>

                                    <div class="custom-form-group">
                                        <div class="heading">
                                            <h3>
                                                Contact number
                                            </h3>
                                        </div>
                                        <div class="">
                                            <input type="text" placeholder="Contact Number, optional" value="{{$author->phone}}" name="phonenumber" class="custom-input-text"/>
                                        </div>
                                    </div>

                                    <div class="custom-form-group">
                                        <div class="heading">
                                            <h3>
                                                Career
                                            </h3>
                                        </div>
                                        <div class="">
                                            <input type="text" placeholder="Career, optional" value="{{$author->career}}" name="career" class="custom-input-text"/>
                                        </div>
                                    </div>

                                    <div class="custom-form-group">
                                        <div class="heading">
                                            <h3>
                                                Address
                                            </h3>
                                        </div>
                                        <div class="">
                                            <input type="text" placeholder="Address, optional" value="{{$author->address}}" name="address" class="custom-input-text"/>
                                        </div>
                                    </div>

                                    <div class="custom-form-group">
                                        <div class="heading">
                                            <h3>
                                                Bio
                                            </h3>
                                        </div>
                                        <div class="">
                                            <textarea placeholder="Write some bio ..." class="custom-input-textarea" name="bio">{{$author->bio}}</textarea>
                                        </div>
                                    </div>

                                    <!-- Featured image field -->
                                    <div class="custom-form-group">
                                        @if($author->picture)
                                            <img src="{{$author->picture}}" width="180"/>
                                        @endif
                                        <div class="file-input-wrapper">
                                            <button class="custom-upload-btn image uploadFile" data-type="image" id="uploadImage"><i class="fa fa-upload"></i> Update Profile</button>
                                            <input type="hidden" name="profile_pic" id="txtFeaturedImage" />
                                            <input type="hidden" name="oldPhoto"value="{{$author->picture}}" />
                                        </div>
                                        <div class="imagePreview">
                                            <p>Profile Preview</p>
                                            <div id="imagePreviewDiv"></div>
                                        </div>
                                    </div>

                                    <div class="custom-form-group uk-text-center">
                                        <div class="padding-top-sm"></div>
                                        <!-- <input type="reset" class="custom-btn-cancel" value="Cancel"> -->
                                        <input type="submit" class="custom-btn-submit uk-margin-auto" value="Update Now"/>
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

    @includeIf('admin.partials._uploadfile')
@endsection

@push('script_dependencies')
<script type="text/javascript" src="{{ asset('js/done-typing.js') }}"></script>
<script type="text/javascript" src="{{ asset('admins/js/script.js') }}"></script>
<script type="text/javascript" src="{{ asset('admins/js/crud.js') }}"></script>
@endpush

@section('script')
    <script>
        function responsive_filemanager_callback(field_id){
            var uploadImageModal = UIkit.modal("#fileManagerModal")
            imageUrl="";
            switch(field_id){
                case 'txtFeaturedImage':
                    imageUrl = $('#'+field_id).val();
                    $('#imagePreviewDiv').css({
                        'background' : 'url("'+imageUrl+'") center center / cover no-repeat',
                        'position' : 'relative',
                        'min-height' : '130px'
                    });
                    break;
                case 'sound_url':
                    var playing = false,
                        audioEle = $('#audioEle').bind('play', function () {
                            playing = true;
                        }).bind('pause', function () {
                            playing = false;
                        }).bind('ended', function () {
                            audio.pause();
                        }).get(0);
                    var supportsAudio = !!document.createElement('audio').canPlayType;
                    if (supportsAudio){
                        $(audioEle).attr('src', $('#'+field_id).val());
                    }
                    break;

                default:
                    return;

            }

            uploadImageModal.toggle();

        }

        $(document).on('click','#removeImage',function(){
            $('#imagePreviewDiv').empty();
            $("#txtFeaturedImage").val('');
        });
    </script>
@endsection
