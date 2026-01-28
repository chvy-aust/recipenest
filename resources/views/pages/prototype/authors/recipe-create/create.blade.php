<x-mylayouts.layout-author-dashboard>


    <!-- Source: https://laravel.com/docs/11.x/validation#quick-displaying-the-validation-errors -->


    <style>
        .profile-edit-image {
            width: 200px;
            height: 200px;
        }
    </style>


    <div class="card1">
        <div class="card-body1">

            <h1>TITLE GOES HERE</h1>

            <form action="{{ route('authors.recipes.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('POST')

                <div class="form-group">
                    <label for="category">Category:</label>
                    <input type="text" class="form-control" id="category" name="category" value="">
                </div>

                <div class="form-group">
                    <label for="title">Title:
                    </label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
                </div>


                <div class="form-group">
                    <label for="short_description">Short Description:</label>
                    <textarea class="form-control" rows="5" name="short_description"
                        id="short_description">{{ old('short_description') }}</textarea>
                </div>

                <x-additional.tinymce.editor id="ingredients" name="ingredients" title="Ingredients"
                    :value="htmlspecialchars_decode(old('ingredients', ''))" />


                {{-- Full Description --}}
                <x-additional.tinymce.editor id="full_description" name="full_description" title="Full Description"
                    :value="old('full_description', '')" />




                <div class="form-group">
                    <label for="image">Image:</label>
                    <input type="file" class="form-control" name="image" id="image">
                </div>


                <div class="form-group">
                    <label for="total_time">Total Time:</label>
                    <input type="text" class="form-control" name="total_time" id="total_time"
                        value="{{ old('total_time') ?? 1 }}">
                </div>


                <div class="form-group">
                    <label for="total_time_unit">Read Unit</label>
                    <select name="total_time_unit" id="total_time_unit" class="form-control">
                        <option value="minutes">Minute(s)</option>
                        <option value="hours">Hour(s)</option>
                    </select>
                </div>


                <div class="form-group">
                    <label for="featured">Is Featured:</label>
                    <select class="form-control" id="featured" name="featured">
                        <option>Yes</option>
                        <option>No</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="public">Public:</label>
                    <select class="form-control" id="public" name="public">
                        <option>Yes</option>
                        <option>No</option>
                    </select>
                </div>



                <div class="form-group">
                    <button type="submit" class="btn btn-success">Create</button>
                    <a class="btn btn-danger" href="{{ route('authors.recipes.index') }}">Cancel</a>
                </div>



            </form>
        </div>
    </div>



    {{-- TinyMCE Config --}}
    @pushOnce('scripts')
    <x-additional.tinymce.key />
    @endPushOnce

    @push('scripts')
    <x-additional.tinymce.config id="full_description" editor="full" />
    <x-additional.tinymce.config id="ingredients" editor="full" />
    @endpush

</x-mylayouts.layout-author-dashboard>