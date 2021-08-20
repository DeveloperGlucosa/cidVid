<div>
    <form wire:submit.prevent="addVacant">
        @csrf
        <div class="form-group">
            <input type="text" name="name" id="name" class="form-control {{ $errors->has('name')?'is-invalid':'' }}" placeholder="Titulo de la vacante" value="{{ old('name') }}" wire:model="name">
            <p class="text-red-500 font-bold text-sm">{{ $errors->first("name") }}</p>
        </div>
        
        <div class="form-group">
            <textarea name="description" id="description" class="form-control {{ $errors->has('description')?'is-invalid':'' }}" cols="5" placeholder="Descriptión" wire:model="description">{{ old('description') }}</textarea>
            <p class="text-red-500 font-bold text-sm">{{ $errors->first("description") }}</p>
        </div>
        <div class="form-group">
            <div class="inline-flex items-center justify-between">
                <span class="mr-2 text-gray-400">$</span>
                <input type="number" name="salary" id="salary" class="form-control {{ $errors->has('salary')?'is-invalid':'' }}" placeholder="0.00" value="{{ old('salary') }}" wire:model="salary">
            </div>
            <div class="w-full">
                <p class="text-red-500 font-bold text-sm">{{ $errors->first("salary") }}</p>
            </div>
        </div>
        <div class="form-group">
            <input type="text" name="linked_in" id="linked_in" class="form-control {{ $errors->has('linked_in')?'is-invalid':'' }}" placeholder="Vínculo a linkedin" value="{{ old('linked_in') }}" wire:model="linked_in">
            <p class="text-red-500 font-bold text-sm">{{ $errors->first("linked_in") }}</p>
        </div>
        <div class="form-group">
            <input type="text" name="address" id="address" class="form-control {{ $errors->has('address')?'is-invalid':'' }}" placeholder="Dirección de vacante" value="{{ old('address') }}" wire:model="address">
            <p class="text-red-500 font-bold text-sm">{{ $errors->first("address") }}</p>
        </div>
        <div class="form-group">
            <input type="date" name="date" id="date" class="form-control {{ $errors->has('date')?'is-invalid':'' }}" placeholder="Fecha" value="{{ old('date') }}" wire:model="date">
            <p class="text-red-500 font-bold text-sm">{{ $errors->first("date") }}</p>
        </div>
        <div class="form-group">
            <button  class="w-full block bg-green-400 py-3 rounded-lg" type="submit">
                Crear vacante
            </button>
        </div>
        
    </form>
</div>
