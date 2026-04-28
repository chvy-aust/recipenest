<x-mylayouts.layout-prototype>
    <section class="chef-list">
        <div class="container">
            {{-- BREADCRUMBS CONTAINER --}}
            <div class="section-title-container d-flex align-items-center justify-content-between">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">chefs</li>
                    </ol>
                </nav>
            </div>
            {{-- END BREADCRUMBS CONTAINER --}}
            {{-- SEARCHING + CHEF LIST + PAGINATION --}}
            <livewire:chef-list/>
        </div>
    </section>
</x-mylayouts.layout-prototype>
