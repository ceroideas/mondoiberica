<x-front-layout section="empresa">
    <div class="overflow-scroll overscroll-contain h-90vh ">

        {{-- Rechazados --}}
        {{-- Subtitle component --}}
        <x-subtitle>Rechazados</x-subtitle>
    
        <table class="table-auto w-full mb-10">
            <thead class="text-left text-black border-b-2 mb-4 border-black text-base">
                <tr class="h-0">
                    <th>Documento</th>
                    <th>Estado</th>
                    <th>Fecha de subida</th>
                    <th class="w-10"></th>
                </tr>
            </thead>
            <tbody class="font-semibold leading-8">
                <tr>
                    <td class="w-1/2">
                        <a href="#">CIF / NIF / NIE</a>
                    </td>
    
                    <td>
                        <x-badge color="red">Rechazado</x-badge>
                    </td>
    
                    <td>04/03/2022</td>
    
                    <td>
                        <x-add-modal-button>
                          
                        </x-add-modal-button>
                    </td>
                </tr>
                <tr>
                    <td>Escritura de constitución de empresa y apoderamiento</td>
    
                    <td>
                        <x-badge color="red">Rechazado</x-badge>
                    </td>
    
                    <td>04/03/2022</td>
    
                    <td>
                        <x-add-modal-button>
                          
                        </x-add-modal-button>
                    </td>
                </tr>
                <tr>
                    <td>Alta Seguridad Social</td>
    
                    <td>
                        <x-badge color="red">Rechazado</x-badge>
                    </td>
    
                    <td>04/03/2022</td>
    
                    <td>
                        <x-add-modal-button>
                          
                        </x-add-modal-button>
                    </td>
                </tr>
            </tbody>
        </table>
        
        {{-- Pendientes --}}
        <x-subtitle>Pendientes</x-subtitle>
    
        <table class="table-auto w-full">
            <thead class="text-left text-black border-b-2 mb-4 border-black text-base">
                <tr class="h-0">
                    <th class="w-1/2">Documento</th>
                    <th>Estado</th>
                    <th class="w-10"></th>
                </tr>
            </thead>
            <tbody class="font-semibold leading-8">
                <tr>
                    <td >
                        <a href="#">Registro de empresas acreditadas (REA)</a>
                    </td>
    
                    <td>
                        <x-badge color="sky">Pendiente</x-badge>
                    </td>
    
                    <td>
                        <x-add-modal-button>
                          
                        </x-add-modal-button>
                    </td>
                </tr>
                <tr>
                    <td>RTL / TC1 y recibo de pago</td>
    
                    <td>
                        <x-badge color="sky">Pendiente</x-badge>
                    </td>
    
                    <td>
                        <x-add-modal-button>
                          
                        </x-add-modal-button>
                    </td>
                </tr>
                <tr>
                    <td>RNT / TC2</td>
    
                    <td>
                        <x-badge color="sky">Pendiente</x-badge>
                    </td>
    
                    <td>
                        <x-add-modal-button>
                          
                        </x-add-modal-button>
                    </td>
                </tr>
                <tr>
                    <td>Certificado de la Seguridad Social</td>
    
                    <td>
                        <x-badge color="sky">Pendiente</x-badge>
                    </td>
    
                    <td>
                        <x-add-modal-button>
                          
                        </x-add-modal-button>
                    </td>
                </tr>
            </tbody>
        </table>
    
        {{-- En Revision --}}
        <x-subtitle>En Revisión</x-subtitle>
    
        <table class="table-auto w-full">
            <thead class="text-left text-black border-b-2 mb-4 border-black text-base">
                <tr class="h-0">
                    <th class="w-1/2">Documento</th>
                    <th>Estado</th>
                    <th>Fecha de subida</th>
                </tr>
            </thead>
            <tbody class="font-semibold leading-8">
                <tr>
                    <td >
                        <a href="#">Certificado AEAT (CIF A 50308139)</a>
                    </td>
    
                    <td>
                        <x-badge color="amber">En revision</x-badge>
                    </td>
    
                    <td>04/03/2022</td>
                </tr>
                <tr>
                    <td>Informe de trabajores en alta (ITA)</td>
    
                    <td>
                        <x-badge color="amber">En revision</x-badge>
                    </td>
    
                    <td>04/03/2022</td>
            </tbody>
        </table>

        {{-- Aceptados --}}
        <x-subtitle>Aceptados</x-subtitle>
    
        <table class="table-auto w-full">
            <thead class="text-left text-black border-b-2 mb-4 border-black text-base">
                <tr class="h-0">
                    <th class="w-1/2">Documento</th>
                    <th>Estado</th>
                    <th>Fecha de subida</th>
                    <th>Fecha de vigencia</th>
                    <th></th>
                </tr>
            </thead>
            <tbody class="font-semibold leading-8">
                <tr>
                    <td >
                        <a href="#">Póliza de accidentes del Convenio Colectivo</a>
                    </td>
    
                    <td>
                        <x-badge color="green">Aceptado</x-badge>
                    </td>
    
                    <td>04/03/2022</td>

                    <td>__/__/____</td>

                    <td>
                        <x-add-modal-button>
                          
                        </x-add-modal-button>
                    </td>
                </tr>
                <tr>
                    <td>Recibo de pago de la póliza de accidentes de convenio</td>
    
                    <td>
                        <x-badge color="green">Aceptado</x-badge>
                    </td>
    
                    <td>04/03/2022</td>

                    <td>04/03/2022</td>

                    <td>
                        <x-add-modal-button>
                          
                        </x-add-modal-button>
                    </td>
                </tr>
                <tr>
                    <td>Póliza de Responsabilidad Civil</td>
    
                    <td>
                        <x-badge color="green">Aceptado</x-badge>
                    </td>
    
                    <td>04/03/2022</td>

                    <td>04/03/2022</td>

                    <td>
                        <x-add-modal-button>
                          
                        </x-add-modal-button>
                    </td>
                </tr>
                <tr>
                    <td>Recibo de pago de la póliza  de responsabilidad civil</td>
    
                    <td>
                        <x-badge color="green">Aceptado</x-badge>
                    </td>
    
                    <td>04/03/2022</td>

                    <td>04/03/2022</td>

                    <td>
                        <x-add-modal-button>
                          
                        </x-add-modal-button>
                    </td>
                </tr>
                <tr>
                    <td>Inscripcion a la Mutua de Accidentes de Trabajo</td>
    
                    <td>
                        <x-badge color="green">Aceptado</x-badge>
                    </td>
    
                    <td>04/03/2022</td>

                    <td>04/03/2022</td>

                    <td>
                        <x-add-modal-button>
                          
                        </x-add-modal-button>
                    </td>
                </tr>
                <tr>
                    <td>Contrato con el Servicio de Prevención</td>
    
                    <td>
                        <x-badge color="green">Aceptado</x-badge>
                    </td>
    
                    <td>04/03/2022</td>

                    <td>04/03/2022</td>

                    <td>
                        <x-add-modal-button>
                          
                        </x-add-modal-button>
                    </td>
                </tr>
                <tr>
                    <td>Recido de pago y factura del servicio de prevención/ Certificado de vigilancia</td>
    
                    <td>
                        <x-badge color="green">Aceptado</x-badge>
                    </td>
    
                    <td>04/03/2022</td>

                    <td>04/03/2022</td>

                    <td>
                        <x-add-modal-button>
                          
                        </x-add-modal-button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</x-front-layout>