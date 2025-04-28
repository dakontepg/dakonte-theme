
import { __ } from '@wordpress/i18n';
import { useBlockProps, InnerBlocks } from '@wordpress/block-editor';
import './editor.scss';

export default function Edit() {
	return (
		<div { ...useBlockProps({className: 'introduction-container'}) }>
				<InnerBlocks
					allowedBlocks={['dh/dakonte-blocks']}
				/>
		</div>
	);
}
