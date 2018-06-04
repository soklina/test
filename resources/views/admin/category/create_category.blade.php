@extends('admin.layouts.main')

@section('title', 'Create new category')

@section('content')
<style type="text/css">
            .choose_file{
                position:relative;
                display:inline-block;    
                border-radius:8px;
                border:#ebebeb solid 1px;
                width:300px; 
                padding: 15px 15px 15px 15px;
                font: normal 14px Myriad Pro, Verdana, Geneva, sans-serif;
                color: #7f7f7f;
                margin-top: 2px;
                background:white;
                cursor:pointer;
            }
            .choose_file input[type="file"]{
                -webkit-appearance:none; 
                position:absolute;
                top:0; left:0;
                opacity:0; 
                cursor: pointer;
                text-align: center
            }
        </style>
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
        <form class="custom-form"  action="{{ route('admin.category.store') }}" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{!! csrf_token() !!}">
            <div class="uk-flex">
                <!-- Card Form -->
                <div class="uk-flex-1">
                    <h2 class="form-title uk-text-center">
                        CATEGORY CREATION FORM
                        <span>
                            Start creating your awesome category
                        </span>
                    </h2>

                    <div class="card card-transparent">

                        <div class="uk-container uk-container-center">
                            <div class="uk-flex uk-flex-center uk-flex-middle">
                                <div class="uk-width-medium">

                                    <div class="custom-form-group">
                                        <div class="">
                                            <input type="text" placeholder="Category name goes here ..." name="name" class="custom-input-text" required/>
                                        </div>
                                    </div>

                                    <div class="custom-form-group">
                                        <div class="selectize-md">
                                            <input type="text" id="mediaField" name="mediatype_id" required/>
                                        </div>
                                    </div>

                                     <div class="choose_file">
                                        <span>Selection logo menu</span>
                                        <input name="images" type="file" id="images" />
                                        <div id="image_message"></div>
                                    </div>
                                    <div class="custom-form-group">
                                        <div class="padding-top-sm"></div>
                                        <input type="reset" class="custom-btn-cancel" value="Cancel">
                                        <input type="submit" class="custom-btn-submit" value="Create Now"/>
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
                ]
            });
        });

    $("#images").change(function(e) {
      e.preventDefault();
      $("#image_message").html(''); // To remove the previous error message
      var file = this.files[0];
      defaultimg = file.name;
      var imagefile = file.type;
      var match = ["image/jpeg", "image/png", "image/jpg"];
      var sizefile = this.files[0].size;
      var form = this;
      file_check = this.files && this.files[0];
      // alert(imagefile);
      var fileName = document.getElementById("images").value;
      var idxDot = fileName.lastIndexOf(".") + 1;
      var extFile = fileName.substr(idxDot, fileName.length).toLowerCase();

      console.log(extFile)

      //check size
      if (sizefile < 5000000) {
       //check width and height
       if (file_check) {
        var img = new Image();
        img.src = window.URL.createObjectURL(file);

        img.onload = function() {
         var width = img.naturalWidth,
          height = img.naturalHeight;
         window.URL.revokeObjectURL(img.src);

         if ((width == 29 && height == 14) && ((extFile == 'png') || (extFile == 'jpg') || (extFile == 'jpeg'))) {
          $("#image_message").html("<p style='color:#5cb85c'>success</p>");
          var reader = new FileReader();
          //imageIsLoaded
          reader.onload = function(e) {
           $("#images").css("color", "green");
           document.getElementById("submit").disabled = false;
           $('#image-defalt').attr('src', e.target.result);
          };
          reader.readAsDataURL(file);

         } else {
          document.getElementById("submit").disabled = true;
          $('#image-defalt').attr('src', 'http://placehold.it/315x235');
          $("#image_message").html("<p id='error' style='color:red'>Your image size allow (315x235)pixcel </p>" + "<p id='error' style='color:red'>Allow File Type: jpeg,png,jpg</p>");
          return false;
         }
        }
       } else {
        $('#image-defalt').attr('src', 'http://placehold.it/315x235');
        $('.fileinput-exists').attr('src', 'http://placehold.it/315x235');
        document.getElementById("submit").disabled = true;
        $("#image_message").html("<p id='error' style='color:red'>Allow File Type: jpeg,png,jpg</p>");
        return false;
       }

      } else {
       document.getElementById("submit").disabled = true;
       $('#image-defalt').attr('src', 'http://placehold.it/315x235');
       $("#image_message").html("<p id='error' style='color:red'>Your image more then 1M</p>");
       return false;
      }
     });

    </script>
@endsection
