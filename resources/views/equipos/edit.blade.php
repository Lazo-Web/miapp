<x-layouts.app>
    <div>
        <form action="{{ route('tractora.edit') }}" method="POST">
            @csrf
            <div class="card">
                <flux:input label="Matricula" name="matricula" value="{{old('matricula')}}" placeholder="Introduce la matricula" />
            </div>
            <div class="flex justify-end mt-4">
               <flux:button variant="danger" type="submit">Grabar</flux:button>
            </div>
        </form>
    </div>
</x-layouts.app>
