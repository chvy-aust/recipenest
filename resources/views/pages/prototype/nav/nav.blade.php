<!-- Button to Open the Modal -->
<div class="container my-5">
    <div class="text-center">
        <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#myModal">
            Nav
        </button>
    </div>
</div>


<!-- The Modal -->
<div class="modal" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Modal Heading</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div class="list-group">
                    <a href="{{ route('prototype.login') }}" class="list-group-item">Login</a>
                    <a href="{{ route('prototype.register') }}" class="list-group-item">Register</a>
                    <a href="{{ route('prototype.home') }}" class="list-group-item">Home</a>
                    <a href="{{ route('prototype.chefs.index') }}" class="list-group-item">Chefs</a>
                    <a href="{{ route('prototype.chefs.show') }}" class="list-group-item">Chef Profile</a>
                    <a href="{{ route('prototype.chefs.portfolio') }}" class="list-group-item">Chef Portfolio</a>
                    <a href="{{ route('prototype.recipes.index') }}" class="list-group-item">Recipe List</a>
                    <a href="{{ route('prototype.recipes.show') }}" class="list-group-item">Recipe Details</a>
                    <a href="{{ route('prototype.authors.home') }}" class="list-group-item">Dashboard / Home</a>
                    <a href="{{ route('prototype.authors.recipes.index') }}" class="list-group-item">Dashboard /
                        Recipes</a>
                    <a href="{{ route('prototype.authors.recipes.create') }}" class="list-group-item">Dashboard / Create
                        Recipe</a>
                    <a href="{{ route('prototype.authors.profile.edit') }}" class="list-group-item">Dashboard / Update
                        Profile</a>
                </div>

                {{-- <div class="list-group" style="list-style-type: none; padding: 0px">
                    <li><a class="nav-link" href="{{ route('prototype.home') }}">Home</a>
                    </li>
                    <li><a class="nav-link" href="{{ route('prototype.chefs.index') }}">Chefs</a>
                    </li>
                    <li><a class="dropdown-item" href="{{ route('prototype.chefs.show') }}">Chef Profile</a></li>
                    <li><a class="dropdown-item" href="{{ route('prototype.chefs.portfolio') }}">Chef Portfolio</a></li>
                    <li><a class="dropdown-item" href="{{ route('prototype.recipes.index') }}">Recipe List</a></li>
                    <li><a class="dropdown-item" href="{{ route('prototype.recipes.show') }}">Recipe Details</a></li>
                    <li>Coffee</li>
                    <li>Tea</li>
                    <li>Milk</li>
                </div> --}}
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>


<style>
    .prototype-nav a {
        display: inline-block;
        padding: 5px 8px;
        margin: 4px 10px;
        border: 1px solid grey;
    }
</style>

<div class="container prototype-nav">
    <a href="{{ route('prototype.login') }}">Login</a>
    <a href="{{ route('prototype.register') }}">Register</a>
    <a href="{{ route('prototype.home') }}">Home</a>
    <a href="{{ route('prototype.chefs.index') }}">Chefs</a>
    <a href="{{ route('prototype.chefs.show') }}">Chef Profile</a>
    <a href="{{ route('prototype.chefs.portfolio') }}">Chef Portfolio</a>
    <a href="{{ route('prototype.recipes.index') }}">Recipe List</a>
    <a href="{{ route('prototype.recipes.show') }}">Recipe Details</a>
    <a href="{{ route('prototype.authors.home') }}">Dashboard / Home</a>
    <a href="{{ route('prototype.authors.recipes.index') }}">Dashboard /
        Recipes</a>
    <a href="{{ route('prototype.authors.recipes.create') }}">Dashboard / Create
        Recipe</a>
    <a href="{{ route('prototype.authors.profile.edit') }}">Dashboard / Update
        Profile</a>
</div>
