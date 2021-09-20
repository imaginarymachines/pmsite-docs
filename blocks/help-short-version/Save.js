import { __ } from "@wordpress/i18n";
import { useBlockProps } from "@wordpress/block-editor";
import { createElement } from "@wordpress/element";
export default function save({ attributes }) {
	if (attributes.content && attributes.content.length > 0) {
		return (
			<div {...useBlockProps.save()}>
				{attributes.content.map((c) => {
					if ("string" === typeof c) {
						return <p>{c}</p>;
					} else if (c.hasOwnProperty("type")) {
						return createElement(c.type, c.props, c.props.children);
					}
					return null;
				})}
			</div>
		);
	}
	return <div {...useBlockProps.save()} />;
}
