import { __ } from "@wordpress/i18n";
import {
	useBlockProps,
	RichText,
	AlignmentToolbar,
	BlockControls,
} from "@wordpress/block-editor";
import "./editor.scss";

export const Editor = ({ attributes, setAttributes }) => {
	const onChangeContent = (newContent) => {
		setAttributes({ content: newContent });
	};

	const onChangeAlignment = (newAlignment) => {
		setAttributes({
			alignment: newAlignment === undefined ? "none" : newAlignment,
		});
	};

	return (
		<div {...useBlockProps()}>
			<h2>{__("Short Version")}</h2>
			{
				<BlockControls>
					<AlignmentToolbar
						value={attributes.alignment}
						onChange={onChangeAlignment}
					/>
				</BlockControls>
			}
			<RichText
				className={attributes.className}
				style={{ textAlign: attributes.alignment }}
				tagName="p"
				onChange={onChangeContent}
				value={attributes.content}
			/>
		</div>
	);
};

export default function Edit(props) {
	return (
		<div {...useBlockProps()}>
			<Editor {...props} />
		</div>
	);
}
