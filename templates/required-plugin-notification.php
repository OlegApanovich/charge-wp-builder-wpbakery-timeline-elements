<?php
/**
 * Html Template: We use it for notification about required plugin dependency.
 *
 * @since 1.0
 *
 * @var string $my_plugin_name
 * @var string $dependency_plugin_name
 * @var string $version_to_check
 */

defined( 'ABSPATH' ) || exit;
?>

<div class="updated">
	<p>
		<?php
		echo wp_kses(
			sprintf(
				// translators: %1$s: current plugin name, %2$s plugin name that current plugin dependent on.
				__(
					'The plugin <strong>"%1$s"</strong> requires the plugin <strong>"%2$s"</strong> active with version <strong>%3$s</strong> or higher.',
					'chargewp-timeline-addons-for-wpbakery'
				),
				$my_plugin_name,
				$dependency_plugin_name,
				$version_to_check
			),
			[ 'strong' => [] ]
		);
		?>
	</p>
</div>
