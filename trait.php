<?php

/*

1. A Trait is simply a group of Methods which can be used in different Classes.

2. We can use traits instead of multiple inheritance.

3. The syntax is: trait TraitName

*/

trait Sharable{
	public function share($item){
		return $item;
	}
}

class Post{
	use Sharable;
}

class Comment{
	use Sharable;
}

$post = new Post();
echo $post->share("This post is shared");

echo "</br>";

$comment = new Comment();
echo $comment->share("This comment is shared");

?>