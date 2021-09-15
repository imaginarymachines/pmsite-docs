import { TextControl } from "@wordpress/components";
import { __ } from "@wordpress/i18n";
import { useBlockProps, InnerBlocks } from "@wordpress/block-editor";
import "./editor.scss";
const ALLOWED_BLOCKS = ["pmsite-docs/help-link"];

export const Editor = ({ value, onChange, isSelected }) => <></>;

export default function Edit({ attributes, setAttributes, isSelected }) {
	return (
		<div {...useBlockProps()}>
			<InnerBlocks allowedBlocks={ALLOWED_BLOCKS} />
		</div>
	);
}
