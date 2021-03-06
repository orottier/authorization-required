<?php

class DatabaseTest extends TestCase
{
    public function testDatabase()
    {
        DB::table('posts')->insert([
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'user_id' => 1,
            'published_at' => new DateTime(),
            'title' => 'Hi',
            'contents' => 'My first post',
        ]);
    }

    public function testEloquent()
    {
        $p = Post::create(self::postData());
        $this->assertSame($p->id, 1);
    }
}
