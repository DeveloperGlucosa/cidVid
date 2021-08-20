<div class="w-full text-center my-12" >
    <h3 class="font-bold text-xl md:text-3xl mb-8 text-white">¿Te interesa trabajar con nosotros?</h3>
    <button class="btn btn-primary" wire:click="toggleVacants()">
        Ver vacantes 
    </button>
    <div 
    class="w-screen h-screen bg-black bg-opacity-40 fixed z-50 top-0 left-0 flex justify-center items-center {{ ($openVacants)?'block':'hidden' }}">
        <div class="w-3/4 bg-white h-auto shadow-lg rounded-lg relative">
            <button class="absolute top-0 right-0 mt-5 mr-5 w-10 h-10 bg-primary flex justify-center items-center rounded-full" wire:click="toggleVacants()">
                <img src="{{ asset('images/close-icon.svg') }}" alt="">
            </button>
            <div class="px-10 py-8 w-full flex justify-between flex-row flex-wrap">
                <div class="w-full">
                    <h2 class="font-bold text-3xl mb-5">Trabaja con nosotros</h2>
                </div>
                <div class="w-1/2">
                    <h2 class="font-light text-2xl mb-5">Nuestras vacantes</h2>
                    @foreach ($vacants as $vacant)
                        <livewire:frontend.vacant-single :vacant="$vacant" :key="$vacant->id">
                    @endforeach
                </div>
                <div class="w-1/2">
                    <h2 class="font-light text-2xl mb-5">O envíanos tu Currículum</h2>
                    <livewire:frontend.vacant-submit>
                </div>
            </div>
        </div>
    </div>
</div>
