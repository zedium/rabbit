<?php // phpcs:ignore WordPress.Files.FileName
/**
 * Displays navigation tabs using the wp-admin markup.
 *
 * @version   1.0.0
 * @package   backyard-framwork
 * @author    Sematico LTD <hello@sematico.com>
 * @copyright 2020 Sematico LTD
 * @license   https://www.gnu.org/licenses/gpl-3.0.html GPL-3.0-or-later
 * @link      https://sematico.com
 */

use Backyard\Utils\RequestFactory;

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

/** @var \Backyard\Forms\Form $form */
if ( ! $form->hasTabs() ) {
	return;
}

$formTabs = $form->getTabs();

$request = RequestFactory::create();

?>
<nav class="nav-tab-wrapper wp-clearfix">
	<?php foreach ( $formTabs as $key => $formTab ) : ?>
		<a href="<?php echo esc_url( add_query_arg( [ 'tab' => esc_attr( $key ) ], $request->getUri()->__toString() ) ); ?>" class="nav-tab" aria-current="page"><?php echo esc_html( $formTab ); ?></a>
	<?php endforeach; ?>
</nav>
