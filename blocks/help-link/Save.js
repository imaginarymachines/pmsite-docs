import { __ } from "@wordpress/i18n";
import { useBlockProps } from "@wordpress/block-editor";
import { Content } from "./Edit";
export default function save({ attributes }) {
	return (
		<div {...useBlockProps.save()}>
			<Content attributes={attributes} />
		</div>
	);
}
