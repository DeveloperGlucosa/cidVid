<div>
    <div class="w-full">
        @if(Session::has("success"))
        <div class="bg-green-900 text-center py-4 lg:px-4">
            <div class="p-2 bg-green-800 items-center text-green-100 leading-none lg:rounded-full flex lg:inline-flex" role="alert">
              <span class="flex rounded-full bg-green-500 uppercase px-2 py-1 text-xs font-bold mr-3">Éxito</span>
              <span class="font-semibold mr-2 text-left flex-auto">{{ session('success') }}</span>
            </div>
          </div>
        @endif
    </div>
    <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Titulo de la vacante
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Fecha de creación
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Linkedin
                </th>
                <th scope="col" class="relative px-6 py-3">
                <span class="sr-only">Edit</span>
                </th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            @if(isset($vacants))
                @foreach ($vacants as $vacant)
                <tr>
                    <livewire:vacant-single :vacant="$vacant" :key="$vacant->id">
                </tr>
                @endforeach
            @else
                <tr aria-colspan="4">
                    <p class="py-8 text-3xl text-gray-400 font-bold text-center">
                        No hay vacantes registradas
                    </p>
                </tr>
            @endif
        </tbody>
    </table>
    {{ $vacants->links() }}
</div>