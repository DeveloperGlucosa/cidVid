<div>
    @if(Session::has("cv_success"))
    <div class="bg-green-900 text-center py-4 lg:px-4 mb-5 rounded-full">
        <div class="p-2 bg-green-800 items-center text-green-100 leading-none lg:rounded-full flex lg:inline-flex" role="alert">
            <span class="flex rounded-full bg-green-500 uppercase px-2 py-1 text-xs font-bold mr-3">Éxito</span>
            <span class="font-semibold mr-2 text-left flex-auto">{{ session('cv_success') }}</span>
        </div>
        </div>
    @endif
    <form class="px-8" wire:submit.prevent="submitVacant">
        <div class="form-group">
            <input type="text" id="nombre" placeholder="Nombre:" class="vacant-form-control @error('nombre') is-invalid @enderror" wire:model="nombre">
            @error("nombre")
            <span class="text-left text-red-600 font-bold text-sm">{{ $errors->first("nombre") }}</span>
            @enderror
        </div>
        <div class="form-group">
            <input type="tel" id="telefono" placeholder="Teléfono:" class="vacant-form-control @error('telefono') is-invalid @enderror" wire:model="telefono">
            @error("telefono")
            <span class="text-left text-red-600 font-bold text-sm">{{ $errors->first("telefono") }}</span>
            @enderror
        </div>
        <div class="form-group">
            <input type="email" id="email" placeholder="Email:" class="vacant-form-control @error('email') is-invalid @enderror" wire:model="email">
            @error("email")
            <span class="text-left text-red-600 font-bold text-sm">{{ $errors->first("email") }}</span>
            @enderror
        </div>
        <div class="form-group">
            <input type="text" id="linkedin_url" placeholder="Linkedin Url:" class="vacant-form-control @error('linkedin_url') is-invalid @enderror" wire:model="linkedin_url">
            @error("linkedin_url")
            <span class="text-left text-red-600 font-bold text-sm">{{ $errors->first("linkedin_url") }}</span>
            @enderror
        </div>
        <div class="form-group">
            <input type="file" id="cv_file" wire:model="cv_file" class="@error('linkedin_url') is-invalid @enderror">
            <p class="text-gray-400 text-sm leading-none tracking-tight mt-2">El archivo debe estar en formato PDF y no exceder los 2MB.</p>
            @error("cv_file")
            <span class="text-left text-red-600 font-bold text-sm">{{ $errors->first("cv_file") }}</span>
            @enderror
        </div>
        <div class="w-full mt-5">
            <button type="submit" class="px-12 py-1 bg-primary text-white font-bold rounded-full">Enviar</button>
        </div>
    </form>
</div>
