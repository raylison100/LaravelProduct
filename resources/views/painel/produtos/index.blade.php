<h1>Lita de produtos</h1>

<table>
    <tr>
        <th>Nome</th>
        <th>Descrição</th>
    </tr>
    @foreach($produtos as $produto)
    <tr>
        <td>
            {{$produto->name}}
        </td>
        <td>
            {{$produto->description}}
        </td>
    </tr>
    @endforeach
</table>