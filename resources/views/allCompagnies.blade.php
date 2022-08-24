@extends('layout.index')

@section('content')
    <table>
        <tr>
            <th>Nom de la société</th>
        </tr>
        <tr>
            @foreach ($allCompagnies as $item)
                <td>{{ $item->nom }}</td>
                <td>
                    <a href="/editCompagnie/{{$item->id}}">
                        <button type="submit">Show</button>
                    </a>
                </td>
                <td>
                    <form action="/allCompagnies/{{$item->id}}/delete" method="POST">
                        @csrf
                        @method('DELETE')
                        <button>Delete</button>
                    </form>
                </td>
            @endforeach
        </tr>
    </table>
@endsection
