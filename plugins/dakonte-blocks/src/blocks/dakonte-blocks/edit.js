import { __ } from '@wordpress/i18n';
import './editor.scss';
import {useBlockProps, InnerBlocks} from '@wordpress/block-editor';
import BlockSettings from "./BlockSettings";

/**
 * The edit function describes the structure of your block in the context of the
 * editor. This represents what the editor will render when the block is used.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-edit-save/#edit
 *
 * @return {Element} Element to render.
 */
export default function Edit({attributes, setAttributes}) {
	return (
		<div {...useBlockProps({className: attributes.blockLayout})}>
			<BlockSettings
				attributes={attributes}
				setAttributes={setAttributes}
			/>
			<InnerBlocks
				allowedBlocks={['core/image', 'core/heading', 'core/paragraph', 'core/button']}
			/>
		</div>
	);
}
