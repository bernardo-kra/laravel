@extends('base')
@section('title', 'Estoque')
@section('content')
Index do estoque
<a href="{{route('estoqueAdicionar')}}">
    <button type="button" class="rounded-lg border border-green-500 bg-green-500 px-5 py-2.5 text-center text-sm font-medium text-white shadow-sm transition-all hover:border-green-700 hover:bg-green-700 focus:ring focus:ring-green-200 disabled:cursor-not-allowed disabled:border-green-300 disabled:bg-green-300">
        Adicionar item</button></a>
<div>
    <table>
        <thead>
            <tr hover:bg-gray-50>
                
                <th class="px-6 py-4">Id</th>
                <th class="px-6 py-4">Produto</th>
                <th class="px-6 py-4">Quantidade</th>
            </tr>
        </thead>
        <tbody>
            @foreach($lista as $item)
            <tr class="px-6 py-4 bg-white">
                <td class="px-6 py-4 bg-white">{{$item['id']}}</td>
                <td class="px-6 py-4 bg-white">{{$item['nome']}}</td>
                <td class="px-6 py-4 bg-white">{{$item['quantidade']}}</td>
            </tr>
            @endforeach
        </tbody>

    </table>
</div>

@endsection