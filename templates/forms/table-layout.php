<?php // phpcs:ignore WordPress.Files.FileName
/**
 * Displays forms through a table layout.
 *
 * @version   1.0.0
 * @package   backyard-framwork
 * @author    Sematico LTD <hello@sematico.com>
 * @copyright 2020 Sematico LTD
 * @license   https://www.gnu.org/licenses/gpl-3.0.html GPL-3.0-or-later
 * @link      https://sematico.com
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

?>

<div class="backyard-form table-layout">

	<table class="form-table" role="presentation">

		<?php foreach ( $form as $field ) : ?>
			<tr>
				<?php if ( ! empty( $field->getLabel() ) ) : ?>
					<th scope="row">
						<?php echo wp_kses_post( $form->getRenderer()->formLabel( $field ) ); ?>
					</th>
				<?php endif; ?>
				<td>
					<?php echo $form->getRenderer()->formInput( $field ); //phpcs:ignore ?>
				</td>
			</tr>
		<?php endforeach; ?>

	</table>

</div>
