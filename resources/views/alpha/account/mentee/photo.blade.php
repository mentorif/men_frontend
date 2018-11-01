@extends('layout.public')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-2">
            </div>
            <div id="pcon" class="col-sm-8">
                <h1>Profile Photo</h1>
                <div class="panel">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
                                <form enctype="multipart/form-data" autocomplete="off" class="public" method="post" action="/account/profile-photo">
                                    <fieldset style="display:none;">{{csrf_field()}}</fieldset>
                                    <img src="{{!empty(array_get($profile_data,'profile_pic_path','')) ? asset('storage'.DIRECTORY_SEPARATOR.array_get($profile_data,'profile_pic_path','')) : 'http://placehold.it/160x160'}}" alt="photo" id="photo-example" style="height: 160px;width: 160px;">
                                    <div class="form-group ">
                                        <label for="UserPhotoUpload">Please upload a professional photo of yourself<br/>
                                            <em>Profiles with photos are much more likely to receive messages from other users. For best results, find a photo that shows your face, and is square in shape.</em>
                                        </label>
                                        <input type="file" name="photo_upload" class="form-control" size="60" value="" id="UserPhotoUpload" accept="image/png,image/jpeg"/>
                                        <span class="help-block"><em>JPEG and PNG files only -- 2MB limit</em></span>
                                    </div>
                                    <div class="pull-left"><input class="btn btn-primary btn-lg" type="submit" value="Save and Continue" /></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-2"></div>
        </div>

        <script type="text/javascript">
            jQuery(function($){
                $('#UserPhotoUpload').change(function(){
                    if(this.files[0].size > 5242880) {
                        $(this).parent().addClass('alert').addClass('alert-danger');
                        $('#UserPhotoUpload').after('<div class="error-message large-photo">Photo is too large</div>');
                    }
                    if(this.files[0].size < 5242880 && $(this).parent().hasClass('alert')) {
                        $(this).parent().removeClass('alert').removeClass('alert-danger');
                        $('.large-photo').remove();
                    }
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $('#photo-example').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(this.files[0]);
                });
            });
        </script>
    </div>
@stop