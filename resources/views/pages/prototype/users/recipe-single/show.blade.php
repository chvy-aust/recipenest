<x-mylayouts.layout-prototype>

    <div class="container mt-5">
        <!-- Recipe Title and Image -->
        <div class="row">
            <div class="col-md-12 text-center">
                <h1>Recipe Title</h1>
                <div class="text-center">
                    <img class="recipe-image" style="width: 60%"
                        src="https://images.unsplash.com/photo-1587314168485-3236d6710814?q=80&w=1978&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt="Chocolate Cake">
                </div>
            </div>
        </div>

        <!-- Recipe Info -->
        <div class="row mt-4">
            <div class="col-md-12">
                <h2>Ingredients</h2>
                <ul class="ingredients-list">
                    <li>Ingredients</li>
                    <li>Ingredients</li>
                    <li>Ingredients</li>
                    <li>Ingredients</li>
                    <li>Ingredients</li>
                    <li>Ingredients</li>
                </ul>
            </div>
        </div>

        <!-- Recipe Instructions -->
        <div class="row mt-4">
            <div class="col-md-12">
                <h2>Instructions</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis veniam impedit omnis culpa repudiandae
                    temporibus, aperiam corrupti ipsam optio tempora unde doloribus esse a veritatis nemo laudantium
                    dolore eum blanditiis!</p>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam doloribus voluptas dolores eum ducimus
                    natus saepe eius odio id iste.</p>
            </div>
        </div>

        <!-- Comments Section -->
        <div class="row mt-5">
            <div class="col-md-12">
                <h2>Comments</h2>
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">John Doe</h5>
                        <p class="card-text">This recipe is amazing! The cake turned out so moist and fluffy. I added a
                            little extra vanilla, and it was perfect.</p>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Jane Smith</h5>
                        <p class="card-text">I tried this recipe last weekend. The kids loved it, but I had to bake it a
                            little longer. Will try again soon!</p>
                    </div>
                </div>
                <form>
                    <div class="mb-3">
                        <label for="comment" class="form-label">Leave a comment:</label>
                        <textarea class="form-control" id="comment" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Post Comment</button>
                </form>
            </div>
        </div>

        <!-- Share Recipe -->
        <div class="row mt-5">
            <div class="col-md-12 text-center">
                <h4>Share this Recipe</h4>
                <a href="https://twitter.com/share?text=Check out this recipe: Delicious Chocolate Cake&url=#"
                    class="btn btn-info mx-2">Share on Twitter</a>
                <a href="https://www.facebook.com/sharer/sharer.php?u=#" class="btn btn-primary mx-2">Share on
                    Facebook</a>
            </div>
        </div>
    </div>

</x-mylayouts.layout-prototype>
