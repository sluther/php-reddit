<?php

namespace PhpReddit\Tests\Models;

use Exception;
use PhpReddit\PhpReddit\Models\MalformedIdException;
use PhpReddit\PhpReddit\Models\Subreddit;
use PHPUnit\Framework\TestCase;

class BaseTest extends TestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testCreateSubreddit()
    {
        $subreddit = new Subreddit(id: 't5_aghe34');
        $this->assertEquals('aghe34', $subreddit->id);
        $this->assertEquals('t5_aghe34', $subreddit->name);
        $subreddit = new Subreddit('aghe34');
        $this->assertEquals('aghe34', $subreddit->id);
        $this->assertEquals('t5_aghe34', $subreddit->name);

        $subreddit = new Subreddit(id: 't5_34fhf4', name: 'test');
        $this->assertEquals('t5_34fhf4', $subreddit->name);
        $this->assertEquals('test', $subreddit->display_name);

        $subreddit = new Subreddit(id: 't5_34fhf4', object: ['display_name' => 'test']);
        $this->assertEquals('test', $subreddit->display_name);
    }

    /**
     * @dataProvider invalidIdProvider
     */
    public function testInvalidIds($id, $exception)
    {
        $this->expectException($exception);
        new Subreddit(id: $id);
    }

    public function invalidIdProvider()
    {
        return [
            [
                'id' => 't10_aghe34',
                'exception' => MalformedIdException::class,
            ],
            [
                'id' => 't1_t1_aghe34',
                'exception' => MalformedIdException::class,
            ],
            [
                'id' => 'garbage',
                'exception' => MalformedIdException::class,
            ],
            [
                'id' => 'g1_fse3d4',
                'exception' => MalformedIdException::class,
            ],
        ];
    }

}