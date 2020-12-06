<?php // phpcs:ignore WordPress.Files.FileName
/**
 * Uses tables to render forms. This is usually used within the admin panel.
 *
 * @package   backyard-framework
 * @author    Sematico LTD <hello@sematico.com>
 * @copyright 2020 Sematico LTD
 * @license   https://www.gnu.org/licenses/gpl-3.0.html GPL-3.0-or-later
 * @link      https://sematico.com
 */

namespace Backyard\Forms\Renderers;

/**
 * Tabled forms layout for admin pages.
 */
class TableFormLayout extends CustomFormRenderer {

	/**
	 * Render a tabled form.
	 *
	 * @return string
	 */
	public function render() {

		$templates = $this->getTemplatesEngine();

		return $templates->render( 'forms/table-layout', [ 'form' => $this->form ] );

	}

}