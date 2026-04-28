<x-mylayouts.layout-prototype>
    <section class="recipe-list">
        <div class="container">
            {{-- BREADCRUMBS CONTAINER --}}
            <div class="section-title-container d-flex align-items-center justify-content-between">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">recipes</li>
                    </ol>
                </nav>
            </div>
            {{-- SEARCHING + RECIPE LIST + PAGINATION --}}
            <livewire:recipe-list/>
        </div>
    </section>

</x-mylayouts.layout-prototype>
