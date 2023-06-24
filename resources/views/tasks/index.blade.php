@extends('layouts.app')

@section('content')

<!-- ここにページ毎のコンテンツを書く -->
    @if (isset($messages))
        <table class="table table-zebra w-full my-4">
            <thead>
                <tr>
                    <th>id</th>
                    <th>メッセージ</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($messages as $message)
                <tr>
                    <td><a class="link link-hover text-info" href="{{ route('tasks.show', $message->id) }}">{{ $message->id }}</a></td>
                    <td>{{ $message->content }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    
    {{-- メッセージ作成ページへのリンク --}}                                                   
    <a class="btn btn-primary" href="{{ route('tasks.create') }}">新規メッセージの投稿</a> 

@endsection