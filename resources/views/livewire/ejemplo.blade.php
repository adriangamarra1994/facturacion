<div class="container">

    <h1 class="title">
        <span class="span-title">
            Lista de Empresas
        </span>
    </h1>

    <div class="card space-y-10">

        <div
            class=" flex flex-col items-center space-y-2 card-body space-x-1 sm:space-y-0 sm:flex-row justify-between  ">
            <x-input wire:model.live="query" name="query" class="w-full sm:w-10/12" type="text"
                placeholder="Aqui puedes bucar" />

            <div class="w-full sm:w-2/12 flex items-center">
                <a href="{{ route('companies.create') }}" class="btn btn-blue w-full">
                    Nuevo Registro
                </a>
            </div>

        </div>

        <div class="container-tabla">

            @if ($companies->count())

                <div class="container-body">
                    <table class="min-w-full">
                        <thead>
                            <tr>
                                <th class="th">
                                    Ruc</th>
                                <th class="th">
                                    Razon Social</th>
                                <th class="th">
                                    Nombre Comercial</th>
                                <th class="th">
                                    Registrado</th>
                                <th class="th"></th>
                            </tr>
                        </thead>

                        <tbody class="bg-white text-center">

                            @foreach ($companies as $company)
                                <tr>
                                    <td class="td">
                                        {{ $company->code }}

                                    </td>

                                    <td class="td">
                                        {{ $company->name }}
                                    </td>

                                    <td class="td">
                                        {{ $company->status }}
                                    </td>

                                    <td class="td">
                                        {{ $company->created_at }}
                                    </td>

                                    <td class="td space-x-1">
                                        <a class="btnedit cursor-pointer" wire:click="edit({{ $company }})">
                                            <i class="fas fa-pencil"></i>
                                        </a>

                                        <button class="btndelete"
                                            wire:click="$dispatch('deleteGroup', {groupId: {{ $company->id }}})">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>

                </div>

                <div class="card-footer bg-white px-4 border border-r-4">
                    {{ $companies->links() }}
                </div>
            @else
                <div class="card">
                    <h1 class="text-white">No hay registros</h1>
                </div>

            @endif


        </div>



    </div>



    @push('js')
        <script>
            Livewire.on('alert', function(message) {
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: message,
                    showConfirmButton: false,
                    timer: 1500
                })
            })
        </script>

        <script>
            Livewire.on('deleteGroup', ({
                groupId
            }) => {
                Swal.fire({
                    title: "Desea eliminar?",
                    text: "Esta accion es irreversible!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Si, eliminar",
                    cancelButtonText: "Cancelar"
                }).then((result) => {
                    if (result.isConfirmed) {

                        Livewire.dispatch('delete', {
                            group: groupId
                        });

                        Swal.fire({
                            position: "center",
                            icon: "success",
                            title: "Registro eliminado",
                            showConfirmButton: false,
                            timer: 1500
                        });
                    }
                });
            });
        </script>
    @endpush




</div>