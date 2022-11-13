// Set Preflight flag and Tailwind Typography class name based on the build
// target.
let includePreflight, typographyClassName;
if ( 'editor' === process.env._TW_TARGET ) {
	includePreflight = false;
	typographyClassName = 'block-editor-block-list__layout';
} else {
	includePreflight = true;
	typographyClassName = 'prose';
}

module.exports = {
	presets: [
		// Manage Tailwind Typography's configuration in a separate file.
		require( './tailwind-typography.config.js' ),
	],
	content: [
		// Ensure changes to PHP files and `theme.json` trigger a rebuild.
		'./theme/**/*.{php, js, min.js}',
		'./theme/theme.json',
	],
	theme: {
		// Extend the default Tailwind theme.
		extend: {
			colors: {
				'white': '#FFFFFF',
				'gray': '#D4D4D4',
				'dark': '#151518',
				'purple': '#8176FF',
				'dark-purple': '#6B5EFF',
				'deep-purple': '#221f41'
			  },

			  fontFamily: {
				head: ['Montserrat', 'sans-serif'],
				body: ['Work Sans', 'sans-erif'],
			  },
		},
	},
	corePlugins: {
		// Disable Preflight base styles in CSS targeting the editor.
		preflight: includePreflight,
	},
	plugins: [
		// Extract colors and widths from `theme.json`.
		require( '@_tw/themejson' )( require( '../theme/theme.json' ) ),

		// Add Tailwind Typography.
		require( '@tailwindcss/typography' )( {
			className: typographyClassName,
		} ),

		// Uncomment below to add additional first-party Tailwind plugins.
		// require( '@tailwindcss/forms' ),
		// require( '@tailwindcss/aspect-ratio' ),
		// require( '@tailwindcss/line-clamp' ),
		// require( '@tailwindcss/container-queries' ),
	],
};
