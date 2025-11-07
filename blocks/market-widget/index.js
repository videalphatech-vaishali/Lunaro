wp.blocks.registerBlockType( 'custom/market-block', {
	title: 'Market Block',
	icon: 'chart-line',
	category: 'widgets',
	edit: function () {
		return wp.element.createElement(
			'p',
			null,
			'Markets block (PHP-rendered on front-end)'
		);
	},

	save: function () {
		return null; // Important: this makes it dynamic
	},
} );
