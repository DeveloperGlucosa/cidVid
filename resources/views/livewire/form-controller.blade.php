<div>
    @if (session()->has("success"))
        <div class="border border-green-600 bg-green-100 py-3 px-2 rounded-lg text-green-600 hidden">
            {{ session("success") }}
        </div>
    @endif
    <form wire:submit.prevent="sendForm" class="contact-form">
        <p class="text text-white text-sm font-light">Los campos marcados con '*' son obligatorios</p>
        <div class="flex flex-col md:flex-row flex-wrap justify-between -mx-6">
            <div class="w-full md:w-1/2 px-6 mt-4">
                <input type="text" id="nombre_form" class="form-control @error('nombre_form')is-invalid @enderror" placeholder="Nombre*" wire:model="nombre_form">
                @error('nombre_form')
                <span  class="text-red-600 text-sm font-weight response">{{ $errors->first("nombre_form") }}</span>
                @enderror
            </div>
            <div class="w-full md:w-1/2 px-6 mt-4">
                <input type="text" name="empresa" id="empresa" class="form-control @error('empresa')is-invalid @enderror" placeholder="Empresa" wire:model="empresa">
                @error('empresa')
                <span  class="text-red-600 text-sm font-weight response">{{ $errors->first("empresa") }}</span>
                @enderror
            </div>
            <div class="w-full md:w-1/2 px-6 mt-4">
                <input type="tel" name="telefono" id="telefono" class="form-control @error('telefono_form')is-invalid @enderror" placeholder="Teléfono*" wire:model="telefono_form">
                @error('telefono_form')
                <span  class="text-red-600 text-sm font-weight response">{{ $errors->first("telefono_form") }}</span>
                @enderror
            </div>
            <div class="w-full md:w-1/2 px-6 mt-4">
                <input type="email" name="email" id="email" class="form-control @error('email_form')is-invalid @enderror" placeholder="Email*" wire:model="email_form">
                @error('email_form')
                <span  class="text-red-600 text-sm font-weight response">{{ $errors->first("email_form") }}</span>
                @enderror
            </div>
            <div class="w-full px-6 mt-4">
                <textarea class="form-control @error('mensaje')is-invalid @enderror" name="mensaje" id="mensaje" rows="5" placeholder="Mensaje" wire:model="mensaje"></textarea>
                @error('mensaje')
                <span  class="text-red-600 text-sm font-weight response">{{ $errors->first("mensaje") }}</span>
                @enderror
            </div>
            <div class="w-full px-6 text-center md:text-right my-4">
                <button type="submit" class="text-lg text-white font-bold tracking-wider flex flex-row justify-end ml-auto items-center">Enviar <div class="md:w-16 md:h-16 w-8 h-8 bg-primary rounded-full ml-5 flex justify-center items-center">
                    <img class="w-2 md:w-5" src="./images/angle-right.svg" alt="">
                </div></button>
            </div>
        </div>
    </form>
</div>
