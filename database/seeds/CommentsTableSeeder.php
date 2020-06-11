<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->truncate();

        $comments = [
          [
            "name" => "rio",
            "tag" => "その他",
            "comment" => "テストデータです" 
          ],
          [
            "name" => "rio",
            "tag" => "感想",
            "comment" => "LaravelとRailsの構造(ModelとかControllerとか)がほどんど同じで驚きました。" 
          ],
          [
            "name" => "rio",
            "tag" => "疑問",
            "comment" => "webアプリを作成するプログラムは、どの言語も構造は同じなのか？" 
          ],
          [
            "name" => "テスト",
            "tag" => null,
            "comment" => "タグなしコメント（null許可がちゃんとできているか)" 
          ]
        ];

        foreach($comments as $comment) {
          \App\Comment::create($comment);
        }
    }
}
