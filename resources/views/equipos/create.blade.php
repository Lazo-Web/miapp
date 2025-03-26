<x-layouts.app>
    <div>
        <form action="{{ route('tractora.store') }}" method="POST" class="space-y-4 p-4">
            @csrf
            <div class="card">
                <flux:input label="Matricula" name="matricula" value="{{old('matricula')}}" placeholder="Introduce la matricula" />
                <flux:input label="Marca" name="marca" value="{{old('marca')}}" placeholder="Introduce la marca" />
            </div>
            <div class="flex justify-end">
               <flux:button variant="danger" type="submit">Grabar</flux:button>
            </div>
        </form>
    </div>
</x-layouts.app>
