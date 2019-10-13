<?php

$blogName = "MY FIRST BLOG";
$sideBarName = "MY SIDE BAR";
$numPosts = 6;

function getBlogName()
{
    global $blogName;
    return $blogName;
}

function getSideBarName()
{
    global $sideBarName;
    return $sideBarName;
}

function getPosts()
{
    global $numPosts;
    $str = '';

    for ($i = 1; $i <= $numPosts; $i++) {
        if ($i % 2 == 0) {
            $class = "evenpost";
        } else {
            $class = "oddpost";
        }

        $str .= '<div class="postBox ' . $class . '">';
        $str .= "<h2> Post Title" . $i . "</h2>";
        $str .= "<div> Post Body" . $i . "</div>";
        $str .= '</div>';

    }
    return $str;
}

