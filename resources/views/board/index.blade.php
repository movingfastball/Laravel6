@extends('layouts.helloapp')

@section('title', 'Board.Delete')

@section('menubar')
    @parent
    ボード・ページ
@endsection

@section('content')
    <table>
        <tr>
            <th>Data</th>
        </tr>
        @foreach ($items as $items)
            <tr>
                <td>{{ $item->getData() }}</th>
            </tr>
        @endforeach
    </table>
@endsection

@section('footer')
copyright 2020 tuyano
@endsection
