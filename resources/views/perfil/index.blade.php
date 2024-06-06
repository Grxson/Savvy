
@extends('layouts.app')


@section('titulo')
    Editar Perfil: {{ auth()->user()->username }}
@endsection


@section('contenido')
    <div class="md:flex md:justify-center">
        <div class="md:w-1/2 bg-white shadow p-6">
            <form
                method="POST"
                action="{{ route('perfil.store') }}"
                enctype="multipart/form-data" 
                class="mt-10 md:mt-0">

                @csrf

                <div class="mb-5">
                    <label 
                        for="username"
                        class="mb-2 block uppercase text-gray-500 font-bold" 
                        >
                        Username
                    </label>
                    <input 
                        id="username"
                        name="username"
                        type="text"
                        placeholder="Tu nombre de usuario"
                        class="border p-3 w-full rounded-lg
                            @error('username')
                                border-red-500
                            @enderror"
                        value="{{ auth()->user()->username }}"
                        >
                        @error('username')
                            <p 
                                class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                                {{ $message }}
                            </p>
                        @enderror
                </div>

                <div class="mb-5">
                    <label 
                        for="imagen"
                        class="mb-2 block uppercase text-gray-500 font-bold" 
                        >
                        Imagen de perfil
                    </label>
                    <input 
                        id="imagen"
                        name="imagen"
                        type="file"
                        class="border p-3 w-full rounded-lg"
                        accept=".jpg, .jpeg, .png"
                        >
                        
                </div>

                <input 
                    type="submit"
                    value="Guardar cambios"
                    class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg mt-6"
                    >

            </form>
        <!-- Botón para abrir el modal -->
        <button 
        type="button" 
        class="bg-red-600 hover:bg-red-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg mt-6" 
        onclick="openModal('confirmDeleteModal')">
        Eliminar Perfil
    </button>

    <!-- Modal -->
    <div id="confirmDeleteModal" class="fixed inset-0 flex items-center justify-center bg-gray-800 bg-opacity-75 hidden">
        <div class="bg-white rounded-lg overflow-hidden shadow-xl transform transition-all sm:max-w-lg sm:w-full">
            <div class="px-4 py-5 sm:p-6">
                <h3 class="text-lg leading-6 font-medium text-gray-900">Confirmar Eliminación</h3>
                <div class="mt-2">
                    <p class="text-sm text-gray-500">¿Estás seguro de que deseas eliminar tu perfil? Esta acción no se puede deshacer.</p>
                </div>
                <div class="mt-5 sm:mt-4 sm:flex sm:flex-row-reverse">
                    <form 
                        method="POST" 
                        action="{{ route('perfil.destroy') }}" 
                        class="w-full sm:ml-3 sm:w-auto">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm">Eliminar Perfil</button>
                    </form>
                    <button type="button" onclick="closeModal('confirmDeleteModal')" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:w-auto sm:text-sm">Cancelar</button>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<script>
function openModal(modalId) {
    document.getElementById(modalId).classList.remove('hidden');
}

function closeModal(modalId) {
    document.getElementById(modalId).classList.add('hidden');
}
</script>

@endsection
