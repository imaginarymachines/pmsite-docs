import { __ } from "@wordpress/i18n";
import { useBlockProps, InnerBlocks } from "@wordpress/block-editor";
import { Above } from "./Edit";
export default function save({ attributes }) {
	return (
		<div {...useBlockProps.save()}>
			<Above />
			<InnerBlocks.Content />
		</div>
	);
}
