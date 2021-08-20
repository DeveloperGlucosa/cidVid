<div>
    <tr>
        <td class="px-6 py-4 whitespace-nowrap">
            <div class="text-sm font-medium text-gray-900">
                {{ $vacant->name }}
            </div>
        </td>
        <td class="px-6 py-4 whitespace-nowrap">
            <div class="text-sm text-gray-900">
                {{ $vacant->date }}</div>
        </td>
        <td class="px-6 py-4 whitespace-nowrap">
            <a target="_blank" href="{{ $vacant->linked_in }}">
                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                    Ver link
                </span>
            </a>
        </td>
        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
        <button class="border border-indigo-600 bg-transparent text-indigo-800 px-2 py-1 rounded-lg text-xs tracking-tighter font-bold" wire:click="">Editar</button>
        <button class="border border-red-600 bg-red-600 text-white px-2 py-1 rounded-lg text-xs tracking-tighter font-bold" wire:click="destroy({{ $vacant->id }})" >eliminar</button>
        </td>
    </tr>
</div>
