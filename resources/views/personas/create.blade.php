<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-white leading-tight">
            {{ __('Crear Personas') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6 lg:p-8">



                        <form method="POST" action="{{ route('personas.store') }}" class="max-w-sm mx-auto">
                            @csrf

                            <div class="mb-5">
                                <label for="nombres" class="block mb-2 text-sm font-medium text-gray-900 
                                dark:text-white">Nombre</label>
                                <input type="text" name="nombres" id="nombres" class="bg-gray-50 border 
                                border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 
                                block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 
                                dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                            </div>

                            <div class="mb-5">
                                <label for="apellido_p" class="block mb-2 text-sm font-medium text-gray-900 
                                dark:text-white">Apellido paterno</label>
                                <input type="text" name="apellido_p" id="apellido_p" class="bg-gray-50 border 
                                border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 
                                block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 
                                dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                            </div>

                            <div class="mb-5">
                                <label for="apellido_m" class="block mb-2 text-sm font-medium text-gray-900 
                                dark:text-white">Apellido materno</label>
                                <input type="text" name="apellido_m" id="apellido_m" class="bg-gray-50 border 
                                border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 
                                block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 
                                dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                            </div>

                            <div class="mb-5">
                                <label for="fecha_nac" class="block mb-2 text-sm font-medium text-gray-900 
                                dark:text-white">Fecha nacimiento</label>
                                <input type="text" name="fecha_nac" id="fecha_nac" class="bg-gray-50 border 
                                border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 
                                block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 
                                dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                            </div>

                            <div class="mb-5">
                                <label for="cargos" class="block mb-2 text-sm font-medium text-gray-900 
                                dark:text-white">Cargo</label>
                                <input type="text" name="cargo" id="cargo" class="bg-gray-50 border 
                                border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 
                                block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 
                                dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                            </div>

                            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 
                            focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto 
                            px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Guardar</button>
                            <a href="{{ route('personas.index') }}" class="text-white bg-slate-700 hover:bg-slate-800 
                            focus:ring-4 focus:outline-none focus:ring-slate-300 font-medium rounded-lg text-sm w-full 
                            sm:w-auto px-5 py-2.5 text-center dark:bg-slate-600 dark:hover:bg-slate-700 
                            dark:focus:ring-slate-800">Cancelar</a>
                        </form>


            </div>
        </div>
    </div>
</x-app-layout>
