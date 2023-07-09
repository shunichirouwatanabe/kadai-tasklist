@extends('layouts.app')

@section('content')

<!-- ここにページ毎のコンテンツを書く -->
        <table class="table table-zebra w-full my-4">
            <thead>
                <tr>
                    <th>id</th>
                    <th>ステータス</th>
                    <th>タスク</th>
                </tr>
            </thead>
            <tbody>
                @if(isset($tasks))
                    @foreach ($tasks as $task)
                    <tr>
                        <td><a class="link link-hover text-info" href="{{ route('tasks.show', $task->id) }}">{{ $task->id }}</a></td>
                        <td>{{ $task->status }}</td>
                        <td>{{ $task->content }}</td>
                    </tr>
                    @endforeach
                @endif
            </tbody>
        </table>

    {{-- タスク作成ページへのリンク --}}                                                   
    <a class="btn btn-primary" href="{{ route('tasks.create') }}">新規タスクの投稿</a> 

@endsection