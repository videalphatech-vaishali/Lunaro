/**
 * Retrieves the translation of text.
 */
import { __ } from '@wordpress/i18n';
import { useBlockProps } from '@wordpress/block-editor';
import './editor.scss';

export default function Edit() {
	const blockProps = useBlockProps({
		className: 'get-in-touch-section-body',
		style: {
			height: '300px',
			textAlign: 'center',
			position: 'relative',
			alignContent: 'center',
			backgroundColor: '#000',
			display: 'flex',
			flexDirection: 'column',
			alignItems: 'center',
			justifyContent: 'center',
			padding: '0 20px',
		},
	});

	return (
		<div {...blockProps}>
			<h2
				style={{
					fontSize: '50px',
					marginBottom: '20px',
					fontWeight: '900',
					fontFamily: 'Calibri, sans-serif',
					color: '#fff',
				}}
			>
				Get in touch
			</h2>

			<h4
				style={{
					fontSize: '15px',
					marginBottom: '10px',
					fontFamily: 'Calibri, sans-serif',
					color: '#fff',
					lineHeight: '1.5',
				}}
			>
				No question is too small, and no issue too big; we're always happy to help. <br />
				Reach out to us in the way that's easiest for you, and our team will make sure you get the support you need.
			</h4>
		</div>
	);
}
