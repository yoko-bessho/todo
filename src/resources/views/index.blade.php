@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css')}}">
@endsection

@section('content')

<div class="todo-content">
  <div class="new-todo__content">
    <form class="new-todo-form" action="" method="get">
      <input type="text" name="todo-text" />
      <button class="new-todo-button">作成</button>
    </form>

  </div>

  <div class="todo-list__content">
    <h2>Todo</h2>
      <div class="todo-list__item">
        <ul>
          <li>
            <span class="todo-text">登録した項目を表示</span>
            <form action="" method="get" class="todo-form">
            <button type="submit" class="edit-button">更新</button>
            </form>
            <form action="" method="post" class="todo-form">
              @method('delete')
              <button type="submit" class="delete-button">削除</button>
            </form>
          </li>
        </ul>
      </div>
  </div>
</div>

@endsection