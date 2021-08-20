<div class="w-full px-6">
    <div class="px-8 py-5 border border-gray-400 rounded-2xl text-left mb-2">
        <h4 class="font-bold text-base">{{ $vacant->name }}</h4>
        <p class="font-light text-gray-400">{{ $vacant->address }}</p>
        <p class="font-light text-gray-400">{{ $vacant->date }}</p>
        @isset($vacant->linked_in)
        <div class="w-full mt-5">
            <a target="_blank" href="{{ $vacant->linked_in }}" class="px-5 py-1 bg-primary text-white font-bold rounded-full uppercase text-sm tracking-tighter">
                Aplicar con linkedin
            </a>
        </div>
        @endisset
    </div>
    
</div>
