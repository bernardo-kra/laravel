@extends('base')
@section('title', 'Estoque')
@section('content')

<div class="mx-auto max-w-xl">
    <form action='{{route('estoqueAdicionar')}}' method="post" class="space-y-5">
        @if (isset($editar))
        @method('put')
        <input type='hidden' name='id' value="{{$editar->id}}"></input>
        @endif
        @csrf
        <div class="grid gap-5">
            <div class="col-span-6">
                <label for="example7" class="mb-1 block text-sm font-medium text-gray-700">Nome</label>
                <input value="{{old('nome', $editar->nome ?? '')}}" type="text" id="nome" name="nome" placeholder="Nome" class="p-5 w-full border-gray-300 shadow-sm" />
            </div>
            <div class="col-span-6">
                <label for="example7" class="mb-1 block text-sm font-medium text-gray-700">Quantidade</label>
                <input value="{{old('quantidade', $editar->quantidade ?? '')}}" type="number" id="quantidade" name="quantidade" min="0" placeholder="Quantidade" class="p-5 w-full border-gray-300 shadow-sm" />
                @if($errors->any())
                <div class="b-red-50 text-red-500 p-4">
                    @foreach ($errors->all() as $error)
                    <li> {{$error}}</li>
                    @endforeach
                </div>
                @endif
            </div>
            <button type="submit" class="rounded-lg border border-green-500 bg-green-500 px-5 py-2.5 text-center text-sm font-medium text-white shadow-sm transition-all hover:border-green-700 hover:bg-green-700300">Salvar</button>

    </form>
</div>


@endsection