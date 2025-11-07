registerBlockType( 'custom/company-overview-info', {
	// ✅ This MUST match PHP slug
	title: 'Company Overview',
	icon: 'admin-site',
	category: 'widgets',
	// attributes: {
	//     title: { type: 'string' },
	//     description: { type: 'string' },
	//     buttonText: { type: 'string' },
	//     buttonUrl: { type: 'string' },
	//     imageUrl: { type: 'string' },
	// },
	edit: function () {
		return wp.element.createElement(
			'p',
			null,
			'Markets block (PHP-rendered on front-end)'
		);
	},

	save: () => null, // PHP Rendered
} );
