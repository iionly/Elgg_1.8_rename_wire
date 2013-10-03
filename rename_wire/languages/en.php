<?php
/**
 * Modify the langauage string according to your needs to customize The Wire branding
 *
 * Save the changed file in UTF8 without BOM encoding
 */

$english = array(

	/**
	 * Menu items and titles
	 */
	'thewire' => "Posts",
	'thewire:everyone' => "All Posts",
	'thewire:user' => "%s's Posts",
	'thewire:friends' => "Friends' Posts",
	'thewire:reply' => "Reply",
	'thewire:replying' => "Replying to %s (@%s) who wrote",
	'thewire:thread' => "Thread",
	'thewire:charleft' => "characters remaining",
	'thewire:tags' => "Posts tagged with '%s'",
	'thewire:noposts' => "No Posts yet",
	'item:object:thewire' => "Posts",
	'thewire:update' => 'Update',
	'thewire:by' => 'Posts by %s',

	'thewire:previous' => "Previous",
	'thewire:hide' => "Hide",
	'thewire:previous:help' => "View previous Post",
	'thewire:hide:help' => "Hide previous Post",

	/**
	 * The wire river
	 */
	'river:create:object:thewire' => "%s posted to the %s",
	'thewire:wire' => 'Post',

	/**
	 * Wire widget
	 */
	'thewire:widget:desc' => 'Display your latest Posts',
	'thewire:num' => 'Number of Posts to display',
	'thewire:moreposts' => 'More Posts',

	/**
	 * Status messages
	 */
	'thewire:posted' => "Your message was successfully posted.",
	'thewire:deleted' => "The Post was successfully deleted.",
	'thewire:blank' => "Sorry, you need to enter some text before we can post this.",
	'thewire:notfound' => "Sorry, we could not find the specified Post.",
	'thewire:notdeleted' => "Sorry. We could not delete this Post.",

	/**
	 * Notifications
	 */
	'thewire:notify:subject' => "New Post",
	'thewire:notify:reply' => '%s responded to the Post of %s:',
	'thewire:notify:post' => '%s made a Post:',

);

add_translation("en", $english);
