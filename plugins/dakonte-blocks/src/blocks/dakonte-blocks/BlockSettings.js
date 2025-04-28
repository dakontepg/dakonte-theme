import React from "react";
import {SelectControl, PanelBody} from '@wordpress/components';
import {InspectorControls} from "@wordpress/block-editor";


export default function BlockSettings({attributes, setAttributes}) {
	return (<InspectorControls>
		<PanelBody title="Basic" initialOpen={true}>

				<SelectControl
					__nextHasNoMarginBottom
					label="Layout"
					value={attributes.blockLayout}
					options={[{value: 'align-left', label: 'Align Left'}, {value: 'align-right', label: 'Align Right'}, {
						value: 'align-center', label: 'Align Center'
					},]}
					onChange={blockLayout => setAttributes({blockLayout})}
				/>

		</PanelBody>
	</InspectorControls>)
}
