<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentRequest;
use App\Comment;
use App\Reply;

class CommentController extends Controller
{
    // コメントデータ全取得
    public function index()
    {
      $comments = Comment::all();

      return view('comment/index', compact('comments'));
    }

    // コメント作成画面（からのインスタンス渡す）
    public function create()
    {
      $comment = new Comment();
      return view('comment/create', compact('comment'));
    }

    // 新規コメント作成処理
    public function store(CommentRequest $request)
    {
      // $validatedData = $request->validated();
      
      $comment = new Comment();
      $comment->name = $request->name;
      $comment->tag = $request->tag;
      $comment->comment = $request->comment;
      $comment->save();

      return redirect('/comment');
    }

    // 選択したコメントの編集画面
    public function edit($id)
    {
      $comment = Comment::findOrFail($id);

      return view('comment/edit', compact('comment'));
    }

    // 編集したコメントのアップデート処理
    public function update(CommentRequest $request, $id)
    {
      // $validatedData = $request->validated();

      $comment = Comment::findOrFail($id);
      $comment->name = $request->name;
      $comment->tag = $request->tag;
      $comment->comment = $request->comment;
      $comment->save();

      return redirect('/comment');
    }

    // 選択したコメントの削除処理
    public function destroy($id)
    {
      $comment = Comment::findOrFail($id);
      $comment->delete();

      return redirect('/comment');
    }
}
