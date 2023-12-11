<div>
    <h1 class="title">
        <span class="span-title">Registrar Empresa</span>
    </h1>

    <div class="card">

        <form action="{{ route('companies.store') }}" method="POST">
            @csrf

            <div class=" space-y-10 flex flex-col items-center">
                <div class="w-full space-y-2">
                    <x-label class="text-lg text-white">Dominio</x-input-label>
                        <x-input class="w-8/12" value="{{ old('dominio') }}" type="text" id="dominio"
                            name="dominio" placeholder="Ingrese el dominio" />

                </div>

                <div class="w-full space-y-2">
                    <x-label class="text-lg text-white">Regimen</x-input-label>
                        <select class="w-8/12" value="{{ old('regimen') }}" id="regimen" name="regimen">
                            <option value="" selected>Seleccione</option>
                            <option value="1" >Especial</option>
                            <option value="2" >General</option>
                            <option value="3" >Mype</option>
                            <option value="4" >Nuevo Rus</option>
                        </select>
                        {{-- <x-input-error :messages="$errors->first('email')" /> --}}
                </div>


                <div class="w-8/12 space-y-2 relative">
                    <x-label class="text-lg text-white">Ruc</x-input-label>
                    <input type="search" id="search"
                        class="block w-full p-3  text-sm rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500  dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Ingrese el ruc de la empresa" wire:model="ruc"  value="{{ old('ruc') }}"required>
                    <button type="button" wire:click.live="searchruc"
                        class="text-white absolute outline end-2.5 bottom-1.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>

                </div>


                <div class="w-full space-y-2">
                    <x-label class="text-lg text-white">Razon Social</x-input-label>
                        <x-input class="w-8/12" wire:model.live="razon_social" value="{{ old('razon') }}" type="text" id="razon"
                            name="razon" placeholder="Ingrese la Razon Social" />
                        {{-- <x-input-error :messages="$errors->first('password')" /> --}}
                </div>

                <div class="w-full space-y-2">
                    <x-label class="text-lg text-white">Nombre Comercial</x-input-label>
                        <x-input class="w-8/12" value="{{ old('comercial') }}" type="text" id="comercial"
                            wire:model="nombre_comercial" name="comercial" placeholder="Ingrese la Nombre Comercial" />
                        {{-- <x-input-error :messages="$errors->first('password')" /> --}}
                </div>

                <div class="w-full space-y-2">
                    <x-label class="text-lg text-white">Direccion</x-input-label>
                        <x-input wire:model="direccion" class="w-8/12" value="{{ old('direccion') }}" type="text" id="direccion"
                            name="direccion" placeholder="Ingrese la Direccion" />
                        {{-- <x-input-error :messages="$errors->first('password')" /> --}}
                </div>

                <div class="w-full space-y-2">
                    <x-label class="text-lg text-white" >Buscar Departamento</x-input-label>
                        <select class="w-8/12" wire:model.live="seledepa">
                            <option value="" selected>Seleccione</option>
                            @foreach ($departaments as $departament)
                                <option value="{{$departament->id}}">{{$departament->name}}</option>
                            @endforeach
                        </select>
                        {{-- <x-input-error :messages="$errors->first('password')" /> --}}
                </div>

                <div class="w-full space-y-2">
                    <x-label class="text-lg text-white" >Buscar Provincia</x-input-label>
                        <select class="w-8/12" wire:model.live="seleprov">
                            {{-- @if (!is_null($provinces)) --}}
                            <option value="" selected>Seleccione</option>
                                @foreach ($provinces as $province)
                                    <option value="{{ $province->id }}">{{ $province->name }}</option>
                                @endforeach
                            {{-- @else
                                <option value=""selected>Seleccione</option>
                            @endif --}}
                        </select>
                        {{-- <x-input-error :messages="$errors->first('password')" /> --}}
                </div>

                <div class="w-full space-y-2">
                    <x-label class="text-lg text-white">Buscar Distrito</x-input-label>
                        <select wire:model.live="seledis" class="w-8/12">
                            @if (!is_null($districts))
                            <option value="" selected>Seleccione</option>
                                @foreach ($districts as $district)
                                    <option value="{{ $district->id }}">{{ $district->name }}</option>
                                @endforeach
                            @else
                                <option value=""selected>Seleccione</option>
                            @endif
                        </select>
                        </select>
                        {{-- <x-input-error :messages="$errors->first('text')" /> --}}
                </div>


                <div class="w-full space-y-2">
                    <button class="btn btn-blue">
                        Registrar
                    </button>
                </div>

            </div>

        </form>

    </div>
</div>
