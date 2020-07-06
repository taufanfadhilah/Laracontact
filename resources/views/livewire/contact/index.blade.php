<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Your Contact List</h2>
            <p>your favorite contacts: <b>{{ $totalFavorite }}</b></p>
            <hr>
            <input wire:model="keyword" type="text" class="form-control" placeholder="search by name" />
        </div>
    </div>
    @include('layouts.alert')
    <div class="row">
        @forelse ($contacts as $contact)
            <div class="col-md-3">
                @include('livewire.contact.card')
            </div>
            @empty
            <div class="col mt-3">
                <h4>No contact!</h4>
            </div>
        @endforelse
    </div>
    <div class="row">
        <div class="col-md-12">
            {{ $contacts->links() }}
        </div>
    </div>
</div>
