
    <div class="container">

        <h1 class="title">
            <span class="span-title">
                Lista de Empresas
            </span>
        </h1>

        {{--  --}}


{{-- 
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
 --}}



    </div>
