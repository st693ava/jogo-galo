<div class="">
    <div class="w-full px-4 my-1 mx-auto">

        <div class="flex justify-between">
            <div
                wire:click='recomecar()'
                class="bg-white rounded-lg hover:bg-gray-300 border border-gray-200 flex items-center justify-center font-semibold my-2 py-2 w-64">
                RESET
            </div>

            @if ($vencedor != null)
                <div
                    class="bg-green-600 text-white font-bold text-xl rounded-lg border border-gray-200 flex items-center justify-center font-semibold my-2 py-2 w-64">
                    Jogador Vencedor: {{$vencedor}}
                </div>
            @else
                <div
                    class="bg-white rounded-lg border border-gray-200 flex items-center justify-center font-semibold my-2 py-2 w-64">
                    {{$total_jogadas}}
                </div>
            @endif


            <div
                class="bg-white rounded-lg border border-gray-200 flex items-center justify-center font-semibold my-2 py-2 w-64">
                Jogador {{ $jogador }}
            </div>

        </div>

        <div class="p-3 grid grid-cols-3 gap-4  ">
            <div
                wire:click='selecionar(0,0)'
                class="col-span-1 flex justify-center  py-30 p-12   border border-gray-300 rounded-lg @if ($jogadas[0][0] != null) cursor-not-allowed bg-green-600 hover:bg-green-700 @else bg-gray-200 hover:bg-gray-400 @endif">
                
                @if($jogadas[0][0] == 1)
                    {{"X"}}
                @endif

                @if($jogadas[0][0] == 2)
                    {{"O"}}
                @endif

            </div>
            <div
                wire:click="selecionar(0,1)"
                class="col-span-1  flex justify-center py-30 p-12  border border-gray-300 rounded-lg @if ($jogadas[0][1] != null) cursor-not-allowed bg-green-600 hover:bg-green-700 @else bg-gray-200 hover:bg-gray-400 @endif">
                    @if($jogadas[0][1] == 1)
                        {{"X"}}
                    @endif

                    @if($jogadas[0][1] == 2)
                        {{"O"}}
                    @endif
            </div>
            <div
                wire:click="selecionar(0,2)"
                class="col-span-1  flex justify-center py-30 p-12  border border-gray-300 rounded-lg @if ($jogadas[0][2] != null) cursor-not-allowed bg-green-600 hover:bg-green-700 @else bg-gray-200 hover:bg-gray-400 @endif">

                @if($jogadas[0][2] == 1)
                        {{"X"}}
                @endif

                @if($jogadas[0][2] == 2)
                    {{"O"}}
                @endif

            </div>
            <div
                wire:click="selecionar(1,0)"
                class="col-span-1  flex justify-center py-30 p-12  border border-gray-300 rounded-lg @if ($jogadas[1][0] != null) cursor-not-allowed bg-green-600 hover:bg-green-700 @else bg-gray-200 hover:bg-gray-400 @endif">

                @if($jogadas[1][0] == 1)
                        {{"X"}}
                @endif

                @if($jogadas[1][0] == 2)
                    {{"O"}}
                @endif

            </div>
            <div
                wire:click="selecionar(1,1)"
                class="col-span-1  flex justify-center py-30 p-12  border border-gray-300 rounded-lg @if ($jogadas[1][1] != null) cursor-not-allowed bg-green-600 hover:bg-green-700 @else bg-gray-200 hover:bg-gray-400 @endif">

                @if($jogadas[1][1] == 1)
                        {{"X"}}
                @endif

                @if($jogadas[1][1] == 2)
                    {{"O"}}
                @endif

            </div>
            <div
                wire:click="selecionar(1,2)"
                class="col-span-1  flex justify-center py-30 p-12  border border-gray-300 rounded-lg @if ($jogadas[1][2] != null) cursor-not-allowed bg-green-600 hover:bg-green-700 @else bg-gray-200 hover:bg-gray-400 @endif">

                @if($jogadas[1][2] == 1)
                        {{"X"}}
                @endif

                @if($jogadas[1][2] == 2)
                    {{"O"}}
                @endif
            </div>

            <div
                wire:click="selecionar(2,0)"
                class="col-span-1 flex justify-center py-30 p-12  border border-gray-300 rounded-lg @if ($jogadas[2][0] != null) cursor-not-allowed bg-green-600 hover:bg-green-700 @else bg-gray-200 hover:bg-gray-400 @endif">

                @if($jogadas[2][0] == 1)
                        {{"X"}}
                @endif

                @if($jogadas[2][0] == 2)
                    {{"O"}}
                @endif

            </div>
            <div
                wire:click="selecionar(2,1)"
                class="col-span-1  flex justify-center py-30 p-12  border border-gray-300 rounded-lg @if ($jogadas[2][1] != null) cursor-not-allowed bg-green-600 hover:bg-green-700 @else bg-gray-200 hover:bg-gray-400 @endif">

                @if($jogadas[2][1] == 1)
                        {{"X"}}
                @endif

                @if($jogadas[2][1] == 2)
                    {{"O"}}
                @endif

            </div>
            <div
                wire:click="selecionar(2,2)"
                class="col-span-1  flex justify-center py-30 p-12  border border-gray-300 rounded-lg @if ($jogadas[2][2] != null) cursor-not-allowed bg-green-600 hover:bg-green-700 @else bg-gray-200 hover:bg-gray-400 @endif">

                @if($jogadas[2][2] == 1)
                        {{"X"}}
                @endif

                @if($jogadas[2][2] == 2)
                    {{"O"}}
                @endif

            </div>

        </div>
    </div>
</div>
