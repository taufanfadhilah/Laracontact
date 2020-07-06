<?php

namespace App\Http\Livewire\Contact;

use Livewire\Component;
use Livewire\WithPagination;
use App\Contact;
use App\Favorite;
use Auth;

class Index extends Component
{
    use WithPagination;

    public $keyword;
    public $totalFavorite = 0;

    public function updatingKeyword()
    {
        $this->resetPage();
    }

    public function addToFavorite($contact_id)
    {
        Favorite::create([
            'user_id' => Auth::user()->id,
            'contact_id' => $contact_id
        ]);
        session()->flash('success', 'added to favorite!');
    }

    public function removeFromFavorite($contact_id)
    {
        Favorite::where('user_id', Auth::user()->id)->where('contact_id', $contact_id)->delete();
        session()->flash('danger', 'removed from favorite!');
    }

    private function setTotalFavorite()
    {
        $this->totalFavorite = Favorite::where('user_id', Auth::id())->get()->count();
    }

    public function render()
    {
        $this->setTotalFavorite();
        $contacts = Contact::with('MyFavorite')->where('name', 'like', "%$this->keyword%")->orderBy('name', 'asc')->paginate(12);
        return view('livewire.contact.index', [
            'contacts' => $contacts
        ]);
    }
}
