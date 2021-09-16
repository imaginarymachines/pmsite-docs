import { __ } from "@wordpress/i18n";
import { PanelBody } from "@wordpress/components";
import { PluginSidebar } from "@wordpress/edit-post";
import { star } from "@wordpress/icons";
import { registerPlugin } from "@wordpress/plugins";
import { useSelect, useDispatch } from "@wordpress/data";
import { TextControl } from "@wordpress/components";
const SideBar = () => {
	//Get meta value
	const meta = useSelect((select) =>
		select("core/editor").getEditedPostAttribute("meta")
	);

	//Get updater for meta
	const { editPost } = useDispatch("core/editor", []);
	return (
		<PluginSidebar name="help-key" title={__("Help Key")} icon={star}>
			<PanelBody>
				<TextControl
					value={
						meta.hasOwnProperty("pmserverhelpkey") ? meta.pmserverhelpkey : ""
					}
					label={__("Help Key")}
					onChange={(newValue) => {
						editPost({
							meta: {
								pmserverhelpkey: newValue,
							},
						});
					}}
				/>
			</PanelBody>
		</PluginSidebar>
	);
};

registerPlugin("help-key", {
	render: SideBar,
});
