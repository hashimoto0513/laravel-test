@extends('layouts.helloapp')

@section('title')
Board.index
@endsection

@section('menubar')
@parent
ボード・ページ
@endsection

@section('content')
<table>
    <tr>
        <th>data</th>
    </tr>
    @foreach ($items as $item)
    <tr>
        <td>{{ $item->getData() }}</td>
    </tr>
    @endforeach
</table>
@endsection

@section('footer')
© さかのうえ
@endsection