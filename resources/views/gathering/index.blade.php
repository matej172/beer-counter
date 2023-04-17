@extends('layouts.base')

@section('body')
<div class="w-96 flex flex-col flex-grow items-center" x-data="{ modelOpen: false }">
    <div class="flex-grow w-full">
        <ul class="text-amber-100 font-bold border border-2 mt-12 mx-4 border-amber-100 flex flex-col divide-y divide-amber-100">
            @foreach($gatherings as $gathering)
            <li class="py-4 text-center hover:text-amber-300 hover:bg-green-700 transition-colors"><a href="{{route('gathering.show', $gathering->id)}}">{{"$gathering->date - $gathering->note"}}</a></li>
            @endforeach
        </ul>
    </div>
    <button @click="modelOpen =!modelOpen" type="button" class="mb-12 border h-14 w-14 border-4 p-2 rounded-full border-amber-100 stroke-amber-100 hover:stroke-amber-300 hover:border-amber-300 hover:scale-110 transition">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
        </svg>
    </button>

    <div x-show="modelOpen" class="fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
        <div class="flex items-center justify-center min-h-screen px-4 text-center items-center block sm:p-0">
            <div x-cloak @click="modelOpen = false" x-show="modelOpen" 
                x-transition:enter="transition ease-out duration-300 transform"
                x-transition:enter-start="opacity-0" 
                x-transition:enter-end="opacity-100"
                x-transition:leave="transition ease-in duration-200 transform"
                x-transition:leave-start="opacity-100" 
                x-transition:leave-end="opacity-0"
                class="fixed inset-0 transition-opacity bg-gray-800 bg-opacity-70" aria-hidden="true"
            ></div>

            <div x-cloak x-show="modelOpen" 
                x-transition:enter="transition ease-out duration-300 transform"
                x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" 
                x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                x-transition:leave="transition ease-in duration-200 transform"
                x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" 
                x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                class="inline-block w-full max-w-xl p-6 my-10 overflow-hidden text-left transition-all transform bg-white rounded-xl shadow-xl 2xl:max-w-2xl border border-8 border-amber-200 text-green-900"
            >
                <div class="flex items-center justify-between space-x-4">
                    <h1 class="text-xl font-medium">Pridaj posedenie</h1>

                </div>

                <p class="mt-2 text-sm ">
                    Zadaj názov podniku alebo inú poznámku
                </p>

                <form class="mt-5">
                    <div class="mt-4">
                        <input type="text" class="block w-full px-3 py-2 mt-2 t bg-white border border-gray-400 rounded-md">
                    </div>
                    <div class="flex justify-end mt-6">
                        <button type="button" class="px-3 py-2 text-sm tracking-wide text-white transition-colors transform bg-red-800 rounded-md hover:bg-red-700 focus:outline-none focus:bg-red-600 font-bold">
                            Pridaj posedenie
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
