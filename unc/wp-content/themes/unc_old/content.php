<?php
/**
 * The default template for displaying content
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>
	<tr>
	<th><?php print get_the_date(); ?></th>
	<td><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></td>
	</tr>