<?php

interface SongHolder
{
    public function addSong(SongChapter_4 $song): void;
    public function getSongs(): array;
}