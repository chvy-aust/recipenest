<x-mylayouts.layout-default>

		@include('pages.custom.users.portfolio.mini-profile')

        <livewire:portfolio.portfolio :chef="$chef" />

        <x-additional.slider :collection="$featured_data" id="featured-slider" title="Featured Recipes" items=3 />

</x-mylayouts.layout-default>
