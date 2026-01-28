<x-mylayouts.layout-author-dashboard>




    <style>
        .profile-edit-image {
            width: 200px;
            height: 200px;
        }
    </style>


    <div class="card1">
        <div class="card-body1">

            <h1>TITLE GOES HERE</h1>

            <form action="#" method="POST" enctype="multipart/form-data">


                <div class="profile-div text-center">
                    <img id="imgPreview" style="width: 300px; height: 300px"
                        src="{{ asset('storage/images/profiles/default.jpg'); }}" alt=""
                        class="img-fluid rounded-circle">
                </div>

                <div class="form-group">
                    <label for="profile">Profile Image:</label>
                    <input type="file" class="form-control" name="profile" id="image-input">
                </div>


                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="name" name="name" value="">
                </div>


                <div class="form-group">
                    <label for="short_description">Bio:</label>
                    <textarea class="form-control" rows="5" name="short_description" id="short_description"
                        minlength="1" maxlength="300"></textarea>
                </div>


                <div class="form-group">
                    <label for="address">Address:</label>
                    <input type="text" class="form-control" id="address" name="address" value="">
                </div>

                <div class="form-group">
                    <label for="phone">Phone:</label>
                    <input type="text" class="form-control" id="phone" name="phone" value="">
                </div>



                <div class="form-group">
                    <label for="social_facebook">Facebook:</label>
                    <input type="text" class="form-control" id="social_facebook" name="social_facebook" value="">
                </div>


                <div class="form-group">
                    <label for="social_x">X (Twitter):</label>
                    <input type="text" class="form-control" id="social_x" name="social_x" value="">
                </div>

                <div class="form-group">
                    <label for="social_instagram">Instagram:</label>
                    <input type="text" class="form-control" id="social_instagram" name="social_instagram" value="">
                </div>


                <div class="form-group">
                    <button type="submit" class="btn btn-success">Update</button>
                    <a class="btn btn-danger" href="{{ route('authors.recipes.index') }}">Cancel</a>
                </div>

            </form>
        </div>
    </div>


</x-mylayouts.layout-author-dashboard>