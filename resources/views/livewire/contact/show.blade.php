<div class="container">
    <div class="row">
        <div class="col-md-4">
            <img src="{{ $contact->avatar }}" alt="" srcset="" class="img-thumbnail">
            <div wire:loading>
        Processing Payment...
    </div>
            <br>
            <a href="{{ route('home') }}" class="btn btn-secondary btn-sm mt-3">Back</a>
        </div>
        <div class="col-md-8">
            <h3>{{ $contact->name }}</h3>
            <p>{{ $contact->phone }}</p>
            <p>{{ $contact->address }}</p>
            @if ($contact->MyFavorite->count() > 0)
                <h5><span class="badge badge-warning px-2">Fav</span></h5>
            @endif
        </div>
    </div>
</div>