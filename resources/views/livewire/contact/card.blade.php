<div class="card my-2">
    <img src="{{ $contact->avatar }}" alt="" class="card-img-top" style="height: 200px" />
    <div class="card-body">
        <h5 class="card-title">
            <a href="{{ route('contact.show', $contact->id) }}">{{ $contact->name }}</a>
        </h5>
        <div class="row">
            <div class="col-8">
                <b>{{ $contact->phone }}</b>
            </div>
        </div>
        <p class="card-text mt-2">{{ $contact->address }}</p>
    </div>
    <div class="card-footer">
        @if ($contact->MyFavorite->count() > 0)
            <button wire:click="removeFromFavorite({{ $contact->id }})" class="btn btn-secondary" style="width: 100%">Remove from Favorite</button>
        @else
            <button wire:click="addToFavorite({{ $contact->id }})" class="btn btn-warning" style="width: 100%">Add to Favorite</button>
        @endif
    </div>
</div>