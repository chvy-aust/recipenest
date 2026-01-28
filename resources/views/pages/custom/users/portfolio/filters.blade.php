<div>
    <div class="d-flex my-4">
        <div class="mr-auto">
            <div class="form-group">
                <select wire:model="sort" wire:change="filter" class="form-control" id="sel1">
                    <option>Filters</option>
                    <option value="recent">Recent</option>
                    <option value="oldest">Oldest</option>
                </select>
            </div>
        </div>

        {{-- <form action=""> --}}
            <div class="float-md-right float-sm-left">
                <div class="input-group mb-3">
                    <input wire:model="search" type="text" class="form-control" placeholder="Search">
                    <div class="input-group-append">
                        <button wire:click="filter" class="btn btn-success" type="submit">Go</button>
                    </div>
                </div>
            </div>
            {{--
        </form> --}}
    </div>
</div>
