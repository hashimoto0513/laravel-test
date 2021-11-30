@extends('layouts.helloapp')

@section('title')
Board.add
@endsection

@section('menubar')
@parent
投稿ページ
@endsection

@section('content')
@if (count($errors) > 0)
<ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
</ul>
@endif
<form action="add" method="post">
    @csrf
    <table>
        <tr>
            <th>person id:</th>
            <td>
                <input type="text" name="person_id" id="person_id" value="{{ old('person_id') }}">
            </td>
        </tr>
        <tr>
            <th>title</th>
            <td>
                <input type="text" name="title" id="title" value="{{ old('title') }}">
            </td>
        </tr>
        <tr>
            <th>message</th>
            <td>
                <input type="text" name="message" id="message" value="{{ old('message') }}">
            </td>
        </tr>
        <tr>
            <th></th>
            <td>
                <input type="submit" value="send">
            </td>
        </tr>
    </table>
</form>
@endsection

@section('footer')
© さかのうえ
@endsection