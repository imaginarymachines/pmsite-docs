import { TextControl } from "@wordpress/components";
import { __ } from "@wordpress/i18n";
import { useBlockProps, InspectorControls } from "@wordpress/block-editor";
import "./editor.scss";

export const Content = ({ attributes }) => {
	const { linkUrl, linkText, authorText, authorUrl } = attributes;
	if (!linkUrl || !linkText || !authorText || !authorUrl) {
		return null;
	}
	return (
		<>
			<a href={linkUrl} target="_blank">
				{linkText}
			</a>
			<span>
				{__("By")}{" "}
				<a href={authorUrl} target="_blank">
					{authorText}
				</a>
			</span>
		</>
	);
};
export const Editor = ({ attributes, setAttributes }) => {
	const { linkUrl, linkText, authorText, authorUrl } = attributes;
	return (
		<>
			{isSelected ? (
				<TextControl value={value} onChange={onChange} />
			) : (
				<p>{value}</p>
			)}
			<InspectorControls>
				<TextControl
					label={__("Link Text")}
					value={linkText}
					onChange={(update) => {
						setAttributes({ ...attributes, linkText: update });
					}}
					required={true}
				/>
				<TextControl
					label={__("Link Url")}
					value={linkUrl}
					type="url"
					onChange={(update) => {
						setAttributes({ ...attributes, linkUrl: update });
					}}
					required={true}
				/>
				<TextControl
					label={__("Author Name")}
					value={authorText}
					onChange={(update) => {
						setAttributes({ ...attributes, authorText: update });
					}}
					required={true}
				/>
				<TextControl
					label={__("Author Url")}
					value={authorUrl}
					type="url"
					onChange={(update) => {
						setAttributes({ ...attributes, authorUrl: update });
					}}
					required={true}
				/>
			</InspectorControls>
			<Content attributes={attributes} />
		</>
	);
};

export default function Edit({ attributes, setAttributes, isSelected }) {
	return (
		<div {...useBlockProps()}>
			<Editor
				isSelected={isSelected}
				value={attributes.content}
				onChange={(content) => setAttributes({ content })}
			/>
		</div>
	);
}
