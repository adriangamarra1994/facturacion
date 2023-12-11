<?php

namespace App\Livewire\companies;

use App\Models\Company;
use Livewire\Component;
use Livewire\WithPagination;

class CompanyIndex extends Component
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

        return view('livewire.companies.company-index', [
            'companies' => Company::orderBy('id', 'DESC')
                ->where('razon_social', 'like',  '%' . $this->query . '%')
                ->paginate(5),
        ]);
    }
}
