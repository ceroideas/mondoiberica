<x-front-layout section="trabajadores">
    <div class="overflow-scroll h-90vh ">

        {{-- Rechazados --}}
        {{-- Subtitle component --}}
        <x-subtitle>Rechazados</x-subtitle>
        <table class="table-auto w-full mb-10">
            <thead class="text-left text-black border-b-2 mb-4 border-black text-base">
                <tr class="h-0">
                    <th>Nombre</th>
                    <th>DNI</th>
                    <th>Estado</th>
                    <th>Obras</th>
                    <th>Formación específica</th>
                    <th class="w-10"></th>
                </tr>
            </thead>
            <tbody class="font-semibold leading-8">
                <tr>
                    <td class="w-1/4">
                        <a href="#">Manuel Rodríguez Izquierdo</a>
                    </td>
                    
                    <td>
                        12345678 A
                    </td>

                    <td>
                        <x-badge color="red">Rechazado</x-badge>
                    </td>
    
                    <td>
                        8
                    </td>

                    <td>
                        <div class="flex gap-x-4">
                            <img src="{{ Vite::asset('resources/images/typologies/PRL_gray.svg') }}" width="35" height="35">
                            <img src="{{ Vite::asset('resources/images/typologies/forklift_gray.svg') }}" width="35" height="35">
                            <img src="{{ Vite::asset('resources/images/typologies/electrical_risk_gray.svg') }}" width="35" height="35">
                        </div>
                    </td>
    
                    <td>
                        <x-remove-modal-button>
                            
                        </x-remove-modal-button>
                    </td>
                </tr>
                <tr>
                    <td class="w-1/4">
                        <a href="#">Nombre Apellido Apellido</a>
                    </td>
                    
                    <td>
                        12345678 A
                    </td>

                    <td>
                        <x-badge color="red">Rechazado</x-badge>
                    </td>
    
                    <td>
                        8
                    </td>

                    <td>
                        <div class="flex gap-x-4">
                            <img src="{{ Vite::asset('resources/images/typologies/PRL_gray.svg') }}" width="35" height="35">
                            <img src="{{ Vite::asset('resources/images/typologies/forklift_height_gray.svg') }}" width="35" height="35">
                        </div>
                    </td>
    
                    <td>
                        <x-remove-modal-button>
                            
                        </x-remove-modal-button>
                    </td>
                </tr>
            </tbody>
        </table>
        
        {{-- Pendientes --}}
        <x-subtitle>Pendientes</x-subtitle>
        <table class="table-auto w-full mb-10">
            <thead class="text-left text-black border-b-2 mb-4 border-black text-base">
                <tr class="h-0">
                    <th>Nombre</th>
                    <th>DNI</th>
                    <th>Estado</th>
                    <th>Obras</th>
                    <th class="w-2/12">Formación específica</th>
                    <th class="w-24"></th>
                </tr>
            </thead>
            <tbody class="font-semibold leading-8">
                <tr>
                    <td class="w-1/4">
                        <a href="#">Manuel Rodríguez Izquierdo</a>
                    </td>
                    
                    <td>
                        12345678 A
                    </td>

                    <td>
                        <x-badge color="sky">Pendiente</x-badge>
                    </td>
    
                    <td>
                        8
                    </td>

                    <td>
                    </td>
    
                    <td>
                        <x-remove-modal-button>
                        </x-remove-modal-button>
                    </td>
                </tr>
                <tr>
                    <td class="w-1/4">
                        <a href="#">Nombre Apellido Apellido</a>
                    </td>
                    
                    <td>
                        12345678 A
                    </td>

                    <td>
                        <x-badge color="sky">Pendiente</x-badge>
                    </td>
    
                    <td>
                        8
                    </td>

                    <td>
                        <div class="flex gap-x-4">
                        </div>
                    </td>
    
                    <td>
                        <x-remove-modal-button>
                            
                        </x-remove-modal-button>
                    </td>
                </tr>
                <tr>
                    <td class="w-1/4">
                        <a href="#">Nombre Apellido Apellido</a>
                    </td>
                    
                    <td>
                        12345678 A
                    </td>

                    <td>
                        <x-badge color="sky">Pendiente</x-badge>
                    </td>
    
                    <td>
                        8
                    </td>

                    <td>
                        <div class="flex gap-x-4 w-10">
                            <img src="{{ Vite::asset('resources/images/typologies/PRL_gray.svg') }}" width="35" height="35">
                            <img src="{{ Vite::asset('resources/images/typologies/forklift_gray.svg') }}" width="35" height="35">
                            <img src="{{ Vite::asset('resources/images/typologies/electrical_risk_gray.svg') }}" width="35" height="35">
                            <img src="{{ Vite::asset('resources/images/typologies/height_work_gray.svg') }}" width="35" height="35">
                        </div>
                    </td>
    
                    <td>
                        <div class="flex justify-end gap-x-4">
                            {{-- <img class="text-red-500" src="{{ Vite::asset('resources/images/buttons/edit_blue.svg') }}" width="35" height="35"> --}}
                            <svg id="a" width="35" height="35" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 23 20.13">
                                <g id="b" transform="translate(0.75 0.904)">
                                <path d="M18.46,17.99h-7.61c-.41,0-.75-.34-.75-.75s.34-.75,.75-.75h7.61c.41,0,.75,.34,.75,.75s-.34,.75-.75,.75Z" style="fill:#0076C0;"/>
                                <path d="M4.42,17.99c-.2,0-.39-.08-.53-.22-.19-.19-.26-.46-.2-.71l.85-3.38c.03-.13,.1-.25,.2-.35L15.3,2.76c.99-.99,2.6-.99,3.6,0,.99,.99,.99,2.61,0,3.6l-10.57,10.57c-.1,.1-.22,.16-.35,.2l-3.38,.84c-.06,.02-.12,.02-.18,.02Zm1.52-3.75l-.49,1.97,1.97-.49L17.84,5.29c.41-.41,.41-1.07,0-1.48-.39-.39-1.08-.4-1.48,0h0L5.94,14.24ZM15.83,3.29h0Z" style="fill:#0076C0;"/>
                                <path d="M4.42,17.99c-.2,0-.39-.08-.53-.22-.19-.19-.26-.46-.2-.71l.85-3.38c.03-.13,.1-.25,.2-.35L15.3,2.76c.99-.99,2.6-.99,3.6,0,.99,.99,.99,2.61,0,3.6l-10.57,10.57c-.1,.1-.22,.16-.35,.2l-3.38,.84c-.06,.02-.12,.02-.18,.02Zm1.52-3.75l-.49,1.97,1.97-.49L17.84,5.29c.41-.41,.41-1.07,0-1.48-.39-.39-1.08-.4-1.48,0h0L5.94,14.24ZM15.83,3.29h0Z" style="fill:#0076C0;"/></g>
                            </svg>
                            {{-- <x-edit-modal-button>
                            </x-edit-modal-button> --}}
                            <x-remove-modal-button>
                            </x-remove-modal-button>
                    </div>

                    </td>
                </tr>
            </tbody>
        </table>
        
        {{-- En revisión --}}
        <x-subtitle>En revisión</x-subtitle>
        <table class="table-auto w-full mb-10">
            <thead class="text-left text-black border-b-2 mb-4 border-black text-base">
                <tr class="h-0">
                    <th>Nombre</th>
                    <th>DNI</th>
                    <th>Estado</th>
                    <th>Obras</th>
                    <th class="w-2/12">Formación específica</th>
                    <th class="w-24"></th>
                </tr>
            </thead>
            <tbody class="font-semibold leading-8">
                <tr>
                    <td class="w-1/4">
                        <a href="#">Nombre Apellido Apellido</a>
                    </td>
                    
                    <td>
                        12345678 A
                    </td>

                    <td>
                        <x-badge color="amber">En revisión</x-badge>
                    </td>
    
                    <td>
                        8
                    </td>

                    <td>
                        <div class="flex gap-x-4 w-10">
                            <img src="{{ Vite::asset('resources/images/typologies/PRL_gray.svg') }}" width="35" height="35">
                            <img src="{{ Vite::asset('resources/images/typologies/forklift_gray.svg') }}" width="35" height="35">
                            <img src="{{ Vite::asset('resources/images/typologies/electrical_risk_gray.svg') }}" width="35" height="35">
                            <img src="{{ Vite::asset('resources/images/typologies/forklift_height_gray.svg') }}" width="35" height="35">
                        </div>
                    </td>
    
                    <td>
                        <x-remove-modal-button>
                        </x-remove-modal-button>
                    </td>
                </tr>
            </tbody>
        </table>

        {{-- Aceptados --}}
        <x-subtitle>Aceptados</x-subtitle>
        <table class="table-auto w-full mb-10">
            <thead class="text-left text-black border-b-2 mb-4 border-black text-base">
                <tr class="h-0">
                    <th>Nombre</th>
                    <th>DNI</th>
                    <th>Estado</th>
                    <th>Obras</th>
                    <th class="w-2/12">Formación específica</th>
                    <th class="w-24"></th>
                </tr>
            </thead>
            <tbody class="font-semibold leading-8">
                <tr>
                    <td class="w-1/4">
                        <a href="#">Manuel Rodríguez Izquierdo</a>
                    </td>
                    
                    <td>
                        12345678 A
                    </td>

                    <td>
                        <x-badge color="green">Aceptado</x-badge>
                    </td>
    
                    <td>
                        8
                    </td>

                    <td>
                        <div class="flex gap-x-4">
                            <img src="{{ Vite::asset('resources/images/typologies/PRL_gray.svg') }}" width="35" height="35">
                            <img src="{{ Vite::asset('resources/images/typologies/forklift_gray.svg') }}" width="35" height="35">
                            <img src="{{ Vite::asset('resources/images/typologies/height_work_gray.svg') }}" width="35" height="35">
                        </div>
                    </td>
    
                    <td>
                        <x-remove-modal-button>
                            
                        </x-remove-modal-button>
                    </td>
                </tr>
                <tr>
                    <td class="w-1/4">
                        <a href="#">Nombre Apellido Apellido</a>
                    </td>
                    
                    <td>
                        12345678 A
                    </td>

                    <td>
                        <x-badge color="green">Aceptado</x-badge>
                    </td>
    
                    <td>
                        8
                    </td>

                    <td>
                        <div class="flex gap-x-4 w-10">
                            <img src="{{ Vite::asset('resources/images/typologies/PRL_gray.svg') }}" width="35" height="35">
                            <img src="{{ Vite::asset('resources/images/typologies/electrical_risk_gray.svg') }}" width="35" height="35">
                            <img src="{{ Vite::asset('resources/images/typologies/height_work_gray.svg') }}" width="35" height="35">
                            <img src="{{ Vite::asset('resources/images/typologies/forklift_gray.svg') }}" width="35" height="35">
                        </div>
                    </td>
    
                    <td>
                        <x-remove-modal-button>
                        </x-remove-modal-button>
                    </td>
                </tr>
            </tbody>
        </table>

        {{-- Inactivos --}}
        <x-subtitle>Inactivos</x-subtitle>
        <table class="table-auto w-full mb-10">
            <thead class="text-left text-black border-b-2 mb-4 border-black text-base">
                <tr class="h-0">
                    <th>Nombre</th>
                    <th>DNI</th>
                    <th>Estado</th>
                    <th>Obras</th>
                    <th class="w-2/12">Formación específica</th>
                    <th class="w-24"></th>
                </tr>
            </thead>
            <tbody class="font-semibold leading-8">
                <tr>
                    <td class="w-1/4">
                        <a href="#">Manuel Rodríguez Izquierdo</a>
                    </td>
                    
                    <td>
                        12345678 A
                    </td>

                    <td>
                        <x-badge color="gray">——</x-badge>
                    </td>
    
                    <td>
                        8
                    </td>

                    <td>
                        <div class="flex gap-x-4">
                            <img src="{{ Vite::asset('resources/images/typologies/PRL_gray.svg') }}" width="35" height="35">
                        </div>
                    </td>
    
                    <td>
                        <x-remove-modal-button>
                            
                        </x-remove-modal-button>
                    </td>
                </tr>
                <tr>
                    <td class="w-1/4">
                        <a href="#">Nombre Apellido Apellido</a>
                    </td>
                    
                    <td>
                        12345678 A
                    </td>

                    <td>
                        <x-badge color="gray">——</x-badge>
                    </td>
    
                    <td>
                        8
                    </td>

                    <td>
                        <div class="flex gap-x-4 w-10">
                            <img src="{{ Vite::asset('resources/images/typologies/PRL_gray.svg') }}" width="35" height="35">
                            <img src="{{ Vite::asset('resources/images/typologies/forklift_gray.svg') }}" width="35" height="35">
                        </div>
                    </td>
    
                    <td>
                        <x-remove-modal-button>
                        </x-remove-modal-button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</x-front-layout>