<?php

namespace Lcarr\DesignPatterns\BehaviouralPatterns\Iterator;

use Iterator;

class Playlist implements Iterator
{
    private int $key;
    private array $songList;
    private ?int $playing = null;

    public function __construct(array $songList)
    {
        $this->songList = $songList;
    }

    public function play(): void
    {
        $this->playing = $this->key;
    }

    public function pause(): void
    {
        $this->playing = null;
    }

    public function key()
    {
        return $this->key;
    }

    public function next()
    {
        $this->key++;
    }

    public function rewind()
    {
        $this->key = 0;
    }

    public function current()
    {
        return $this->key;
    }

    public function valid()
    {
        return $this->key >= count($this->songList);
    }
}
