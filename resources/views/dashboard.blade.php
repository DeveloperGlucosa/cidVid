<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Vacantes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg pb-5">
                <div class="py-5 text-center px-6">
                    <h2 class="font-bold text-xl mb-5">Vacantes</h2>
                    <hr>
                </div>
                <div class="w-full px-6 flex flex-row flex-wrap justify-between">
                    
                    <div class="w-3/4">
                        <div class="px-6 mb-5">
                            <div class="flex flex-col">
                                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                        <div class="overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                            @livewire('vacant-controller')
                                        </div>
                                    </div>
                                </div>
                            </div>
          
                        </div>
                    </div>
                    <div class="w-1/4">
                        <div id="form-vacante" class="w-full rounded-lg shadow-lg border-2 border-gray-200 px-3">
                            <p class="title text-center text-xl py-3">Nueva vacante</p>
                            <hr class="mb-3">
                            <livewire:vacant-create>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
