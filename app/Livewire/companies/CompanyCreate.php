<?php

namespace App\Livewire\Companies;

use App\Models\Departament;
use App\Models\District;
use App\Models\Province;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

use function PHPUnit\Framework\isNull;

class CompanyCreate extends Component
{
    public $ruc, $razon_social, $nombre_comercial, $direccion, $ubigeo;
    public $seledepa, $seleprov, $seledis;
    
    public function render()
    {
        $departaments = Departament::all();
        $provinces = Province::all();
        $districts = District::all();
        return view('livewire.companies.company-create', compact('departaments', 'provinces', 'districts'));
    }

    // public function updatedSeledepa($departament_id)
    // {
    //     $this->provinces = Province::where('departament_id', $departament_id)->get();        
    // }

    // public function updatedSeleprov($province_id)
    // {
    //     $this->districts = District::where('province_id', $province_id)->get();
    // }

    // public function updatedSeledis($id)
    // {
    //     $distrito= District::where('id',$id)->first();
    //     $this->ubigeo = $distrito->ubigeo;
    // }

    public function searchruc()
    {
        $this->validate([
            'ruc' => 'required'
        ]);

        $this->ruc;
        // Iniciar llamada a API
        $curl = curl_init();

        $token = config('services.apisunat.token');
        $urldni = config('services.apisunat.urldni');
        $urlruc = config('services.apisunat.urlruc');

        $response = Http::withHeaders([
            'Referer' => 'http://apis.net.pe/api-ruc',
            'Authorization' => 'Bearer' . $token
        ])->get($urlruc.$this->ruc);

        
        $persona = ($response->json());

        $this->razon_social=$persona['razonSocial'];
        $this->nombre_comercial = $persona['viaNombre'];
        $this->direccion = $persona['direccion'];
        $this->ubigeo = $persona['ubigeo'];

        $depa= Departament::where('name', $persona['departamento'])->first();
        $this->seledepa=$depa->id;
        
        $pro= Province::where('name', $persona['provincia'])->first();
        $this->seleprov=$pro->id;

        $dis= District::where('name', $persona['distrito'])->first();
        $this->seledis=$dis->id;

        // $this->seledepa = $persona['departamento'];
        // $this->seleprov = $persona['provincia'];
        // $this->seledis = $persona['distrito'];
       
    }
}
