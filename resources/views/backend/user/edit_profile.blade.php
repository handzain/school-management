@extends('admin.admin_master')
@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<div class="content-wrapper">
    <div class="container-full">

        <section class="content">

            <!-- Basic Forms -->
            <div class="box">
                <div class="box-header with-border">
                    <h4 class="box-title">Update Profile</h4>

                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col">
                            <form method="post" action="{{route('profile.store')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-12">

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <h5>User Name<span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input type="name" name="name" value="{{$editData->name}}" class="form-control" required="">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <h5>User Email<span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input type="email" name="email" value="{{$editData->email}}" class="form-control" required="">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <!-- End Row -->

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <h5>Mobile<span class="text">*</span></h5>
                                                    <div class="controls">
                                                        <input type="text" name="mobile" value="{{$editData->mobile}}" class="form-control" required="">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <h5>Address<span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input type="text" name="address" value="{{$editData->address}}" class="form-control" required="">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <!-- End Row -->

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <h5>Gender <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <select name="gender" id="select" required="" class="form-control">
                                                            <option value="" selected="" disabled>Select Gender</option>
                                                            <option value="Male" {{($editData->gender == "Admin" ? "selected": "")}}>Male</option>
                                                            <option value="Female" {{($editData->gender == "Female" ? "selected": "")}}>Female</option>

                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <h5>Profile Image <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input type="file" name="image" class="form-control" id="image">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <img id="showImage" src="{{ (!empty($user->image)) ? url('upload/user_images/'.$user->image):url('upload/noimage.png')}}" style="width: 100px; border: 1px solid #000000;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!-- End Row -->



                        </div>
                    </div>
                    <div class="text-xs-right">
                        <input type="submit" class="btn btn-info mb-5" value=Update>
                    </div>
                    </form>

                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
    </div>
    <!-- /.box-body -->
</div>
<!-- /.box -->

</section>

</div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('#image').change(function(e) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#showImage').attr('src', e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>





@endsection