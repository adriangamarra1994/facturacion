<?php

namespace App\Livewire;

use App\Models\Company;
use Livewire\Component;
use Livewire\WithPagination;

class Ejemplo extends Component
{

    use WithPagination;
    public $query;

    public function updatingQuery()
    {
        $this->resetPage();
    }

    public function render()
    {
        $companies = Company::where('user_id', auth()->id())->get();
        return view('livewire.ejemplo',[
            'companies' => Company::orderBy('id', 'DESC')
                ->where('razon_social', 'like',  '%' . $this->query . '%')
                ->paginate(5),
        ]);
    }
}
