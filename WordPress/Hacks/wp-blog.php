<?php

/*

Blog specific rules:

1. add_theme_support( 'post-thumbnails' ) activates the 'featured image' option in blog posts

2. have_posts() check wether any post exists so that it can start looping

3. the_post() iterates the post in the loop.

4. has_post_thumbnail() check wether any thumbnail exists in a post

5. the_post_thumbnail() returns the 'featured image' of the post

6. the_title() displays the post title

7. the_excerpt() displays the post excerpt

8. the_content() displays the post content.

9. get_the_date() retrieves the date of the current post.

10. the_tags() retrieves the tags for a post.

11. the_permalink() displays the URL of the current post

12. the_author() displays the author name of the post

13. get_avatar($id) retrieves the avatar for a user who provided a user ID or email address. 
    
14. get_the_author_meta() retrieves the requested data of the author of the current post.

15. get_author_posts_url(get_the_author_meta('ID')) gets the URL of the author page for the author with a given ID

16. the_posts_pagination(array()) function outputs a set of page numbers with links to the previous and next pages of posts.

17. comments_template() load the default comment template provided by WordPress Core. 

18. comments_number() displays the total number of comments

18. is_home() Determines if the query is for the blog index page.

19. get_option( 'page_for_posts' ): returns the ID of the static page assigned to the blog posts index (posts page)

*/

?>