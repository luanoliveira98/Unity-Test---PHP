<?php

namespace App;

class Items implements \Countable, \Iterator
{
    private $items = [];
    private $position = 0;

    public function add(Item $item)
    {
        $this->items[] = $item;
    }

    public function count()
    {
        return count($this->items);
    }

    public function current()
    {
        return $this->items[$this->position];
    }

    public function key()
    {
        return $this->position;
    }

    public function next()
    {
        return ++$this->position;
    }

    public function rewind()
    {
        
    }
}