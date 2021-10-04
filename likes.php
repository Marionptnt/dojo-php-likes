<?php

function likes(array $likes): string
{
    if (count($likes) > 2) {
        $otherCount = count($likes) - 1;
        return "$likes[0] and $otherCount other people like this";
    } elseif (count($likes) === 2) {
        return "$likes[0] and $likes[1] like this";
    } elseif (count($likes) === 1) {
        return "$likes[0] likes this";
    } else {
        return "Be the first to like this";
    }
}