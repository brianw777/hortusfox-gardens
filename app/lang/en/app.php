<?php

/*
	Asatru PHP - English language file

	Extend this with your phrases
	
	Set variables with {variable-name}
*/

return [
	'_language_ident' => 'English',
	'workspace_title' => '{name} (' . env('APP_NAME') . ' v' . env('APP_VERSION') . ')',
	'enter_email' => 'Enter your e-mail',
	'enter_password' => 'Enter your password',
	'enter_password_confirmation' => 'Confirm your password',
	'login' => 'Login',
	'logout' => 'Logout',
	'user_not_found' => 'User not found: {email}',
	'password_mismatch' => 'The passwords do not match',
	'password' => 'Password',
	'password_confirmation' => 'Password (confirmation)',
	'restore_password' => 'Restore password',
	'restore_password_info' => 'Please follow the instructions that were sent to your E-Mail account.',
	'reset_password' => 'Reset password',
	'reset_password_hint' => 'Please navigate to the following link in order to reset your password for your access to {workspace}: <a href="{url}">Reset password</a>',
	'dashboard' => 'Dashboard',
	'welcome_message' => 'Hi {name}, welcome back!',
	'locations' => 'Locations',
	'select_location_to_proceed' => 'Select a location to view the associated plants',
	'plants' => 'Plants',
	'add_plant' => 'Add Plant',
	'add_plant_short' => 'Add',
	'edit_plant' => 'Edit Plant',
	'attribute' => 'Attribute',
	'value' => 'Value',
	'location' => 'Location',
	'last_watered' => 'Last watered',
	'last_repotted' => 'Last repotted',
	'perennial' => 'Perennial',
	'cutting_month' => 'Cutting month',
	'date_of_purchase' => 'Date of purchase',
	'humidity' => 'Humidity',
	'light_level' => 'Light level',
	'health_state' => 'Health state',
	'in_good_standing' => 'In Good Standing',
	'overwatered' => 'Overwatered',
	'withering' => 'Withering',
	'infected' => 'Infected',
	'plant_warning' => 'Warning: This plant requires special monitoring. Reason: {reason}',
	'notes' => 'Notes',
	'no_notes_specified' => 'No notes specified yet',
	'select_month' => '- Select month -',
	'select_light_level' => '- Select light level -',
	'january' => 'January',
	'february' => 'February',
	'march' => 'March',
	'april' => 'April',
	'may' => 'May',
	'june' => 'June',
	'july' => 'July',
	'august' => 'August',
	'september' => 'September',
	'october' => 'October',
	'november' => 'November',
	'december' => 'December',
	'yes' => 'Yes',
	'no' => 'No',
	'back_to_list' => 'Back to list',
	'back_to_dashboard' => 'Back to dashboard',
	'name' => 'Name',
	'email' => 'E-Mail',
	'photo' => 'Photo',
	'add' => 'Add',
	'cancel' => 'Cancel',
	'last_edited_by' => 'Last edited: {when} (by {name})',
	'edit_property' => 'Edit property',
	'save' => 'Save',
	'light_level_sunny' => 'Sunny',
	'light_level_half_shade' => 'Half-Shade',
	'light_level_full_shade' => 'Full Shade',
	'warning_plants_title' => 'The following plants need special attention',
	'warning_plants_all_ok' => 'Hurray! No plants are currently endangered',
	'view_plant_details' => 'View plant details',
	'log_title' => 'Log',
	'loading_please_wait' => 'Please wait...',
	'error' => 'Error',
	'photos' => 'Photos',
	'no_photos_yet' => 'There are currently no additional photos uploaded',
	'upload' => 'Upload',
	'upload_photo' => 'Upload photo',
	'label' => 'Label',
	'confirmPhotoRemoval' => 'Are you sure you want to remove this photo?',
	'users' => 'Users',
	'photo_uploaded_successfully' => 'Photo was uploaded successfully',
	'success' => 'Success',
	'profile' => 'Profile',
	'profile_hint' => 'Logged in as {name} ({email})',
	'last_authored_plants' => 'Last authored plants',
	'search' => 'Search',
	'search_hint' => 'Search through the database',
	'input_search' => 'Enter text to search for',
	'search_name' => 'Include names in search',
	'search_scientific_name' => 'Include scientific names in search',
	'search_tags' => 'Include tags in search',
	'search_notes' => 'Include notes in search',
	'no_tags_specified' => 'No tags specified yet',
	'remove_plant' => 'Remove plant',
	'confirmPlantRemoval' => 'Are you sure you want to remove this plant?',
	'tasks' => 'Tasks',
	'tasks_hint' => 'Here you can manage required tasks for your plant care',
	'create_task' => 'Create task',
	'create_new' => 'Create new',
	'title' => 'Title',
	'description' => 'Description',
	'task_created_successfully' => 'Task was created successfully',
	'tasks_todo' => 'To-Do',
	'tasks_done' => 'Done',
	'done' => 'Done',
	'edit_task' => 'Edit task',
	'task_edited_successfully' => 'Task was successfully edited',
	'scientific_name' => 'Scientific name',
	'text' => 'Text',
	'link' => 'Link',
	'preferences' => 'Preferences',
	'edit_preferences' => 'Edit preferences',
	'language' => 'Language',
	'show_log' => 'Show log',
	'preferences_saved_successfully' => 'Preferences were saved successfully',
	'set_watered' => 'Set all to watered',
	'all_plants_watered' => 'Last watered status has been updated for these plants',
	'confirmSetAllWatered' => 'Are you sure you want to update the last watered date of all these plants?',
	'no_plants_found' => 'There were no plants found using your search query',
	'inventory' => 'Inventory',
	'inventory_hint' => 'Manage here your inventory',
	'group' => 'Group',
	'confirmInventoryItemRemoval' => 'Are you sure you want to remove this item?',
	'add_inventory_item' => 'Add inventory item',
	'edit_inventory_item' => 'Edit inventory item',
	'manage_groups' => 'Manage groups',
	'token' => 'Token',
	'close' => 'Close',
	'chat' => 'Chat',
	'chat_hint' => 'This is the group chat of the workspace',
	'send' => 'send',
	'new' => 'New',
	'chatcolor' => 'Username chat color',
	'currentlyOnline' => 'Currently online: ',
	'no_photo_available' => 'No photo available',
	'due' => 'Due',
	'overdue_tasks' => 'Overdue tasks',
	'view_task_details' => 'View task details',
	'admin_area' => 'Admin area',
	'environment' => 'Environment',
	'workspace' => 'Workspace',
	'enable_scroller' => 'Enable scroller',
	'online_time_limit' => 'Online status time limit',
	'show_chat_onlineusers' => 'Show users that are currently online',
	'show_chat_typingindicator' => 'Show chat typing indicator',
	'admin' => 'Admin',
	'create' => 'Create',
	'update' => 'Update',
	'remove' => 'Remove',
	'create_user' => 'Create user',
	'account_created' => 'Account created',
	'account_created_hint' => 'Your account for {workspace} was just created. Please <a href="{url}">login</a> with your e-mail and the password <strong>{password}</strong>. It is strongly recommended to change your password after logging in.',
	'environment_settings_saved' => 'Saved environment settings successfully',
	'user_created_successfully' => 'New user was created successfully',
	'user_updated_successfully' => 'User data successfully updated',
	'user_removed_successfully' => 'The user account was removed successfully',
	'confirm_user_removal' => 'Do you really want to remove this user account?',
	'sorting_type_name' => 'Alphabetically',
	'sorting_type_last_watered' => 'Last time watered',
	'sorting_type_last_repotted' => 'Last time repotted',
	'sorting_type_health_state' => 'Health state',
	'sorting_type_perennial' => 'Perennial',
	'sorting_type_light_level' => 'Light Level',
	'sorting_type_humidity' => 'Humidity',
	'sorting_dir_asc' => 'Ascending',
	'sorting_dir_desc' => 'Descending',
	'filter_by_text' => 'Filter by text',
	'mail_info_task_overdue' => 'Task is overdue',
	'mail_info_task_overdue_hint' => 'The task <strong>{name}</strong> is overdue! Due date: {date}. Go to tasks: <a href="{url}">{url}</a>',
	'notify_tasks_overdue' => 'Notify me about overdue tasks',
	'mail_info_task_tomorrow' => 'Task is due tomorrow',
	'mail_info_task_tomorrow_hint' => 'The task <strong>{name}</strong> is due tomorrow. Due date: {date}. Go to tasks: <a href="{url}">{url}</a>',
	'notify_tasks_tomorrow' => 'Notify me about tasks that are due tomorrow',
	'cronpw' => 'Cronjob authentication token',
	'enable_chat' => 'Enable Chat',
	'add_location' => 'Add location',
	'icon' => 'Icon',
	'active' => 'Active',
	'location_added_successfully' => 'Location was added successfully',
	'location_updated_successfully' => 'Location was updated successfully',
	'location_migration' => 'Location to move plants to',
	'remove_location' => 'Remove location',
	'location_removed_successfully' => 'Location was successfully removed',
	'check_for_new_version' => 'Check for new version',
	'new_version_available' => 'Version {new_version} is available. Get it <a href="{url}">here</a>.',
	'no_new_version_available' => 'You are using the latest version.',
	'admin_media' => 'Media',
	'media_logo' => 'Workspace logo (.png image)',
	'media_banner' => 'Workspace banner image (.jpg)',
	'media_background' => 'Workspace background image (.jpg)',
	'media_saved' => 'Media was saved successfully',
	'enable_history' => 'Enable history',
	'history_name' => 'History name',
	'confirmPlantAddHistory' => 'Do you want to perform this action?',
	'confirmPlantRemoveHistory' => 'Do you want to perform this action?',
	'sorting_type_history_date' => 'History date',
	'restore_from_history' => 'Restore',
	'content_empty' => 'It is looking rather empty in here...',
	'last_added_plants' => 'Last added plants',
	'last_authored_plants' => 'Last authored plants',
	'info' => 'Info',
	'hortusfox_version' => 'HortusFox v{version}',
	'php_version' => 'PHP Version: {version}',
	'mysql_version' => 'MySQL Version: {version}',
	'server_time' => 'Server time: {time}',
	'render_time' => 'Render time: {time}s',
	'background_overlay_alpha' => 'Overlay alpha value',
	'all_tasks_done' => 'There are currently no open tasks',
	'last_added_or_updated_plants_hint' => 'Select recent plants mode',
	'show_plants_aoru_added' => 'Show last added plants',
	'show_plants_aoru_updated' => 'Show last authored plants',
	'mail' => 'Mail',
	'smtp_fromname' => 'E-Mail sender name',
	'smtp_fromaddress' => 'E-Mail sender address',
	'smtp_host' => 'SMTP Host',
	'smtp_port' => 'SMTP Port',
	'smtp_username' => 'SMTP Username',
	'smtp_password' => 'SMTP Password',
	'smtp_encryption' => 'SMTP Encryption',
	'personal_notes' => 'Personal notes',
	'personal_notes_saved_successfully' => 'Your personal notes were successfully updated',
	'share_photo' => 'Share Photo',
	'share_photo_input' => 'Photo to share',
	'share_photo_title' => 'Title',
	'share_photo_hint' => 'This will submit your photo on {url}, so you can share it with others. You will get a confirmation e-mail once sharing succeeded.',
	'share' => 'Share',
	'copy_to_clipboard' => 'Copy',
	'copied_to_clipboard' => 'Content has been copied to clipboard.',
	'mail_share_photo' => 'Notes on your shared photo',
	'mail_share_photo_title' => 'Your photo was shared',
	'mail_share_photo_hint' => 'Your photo has been successfully shared!<br/><br/>Link to photo: {url_photo}<br/>Removal link: {url_removal}',
	'enable_photo_share' => 'Enable photo sharing',
	'restore_password_email_placeholder' => 'Enter your E-Mail address',
	'search_for_location_icons' => 'Search for icons <a href="{url}" target="_blank">here</a>.',
	'upcoming_tasks_overview' => 'Upcoming tasks',
	'view_more' => 'View more',
	'generate' => 'Generate',
	'generate_cronpw_hint' => 'Note: Generating a new token will invalidate the current one',
	'confirmSetAllRepotted' => 'Are you sure you want to update the last repotted date of all these plants?',
	'all_plants_repotted' => 'Last repotted status has been updated for these plants',
	'set_repotted' => 'Set all repotted',
	'backup' => 'Backup',
	'gallery' => 'Gallery',
	'export' => 'Export',
	'import' => 'Import',
	'import_successful' => 'Import succeeded!',
	'pwa_enable' => 'Enable PWA support',
	'home' => 'Home',
	'enable_system_messages' => 'Enable system messages',
	'plant_count' => '{count} plants',
	'danger_count' => '{count} in danger',
	'all_in_good_standing' => 'All fine',
	'theme' => 'Theme',
	'themes' => 'Themes',
	'confirm_generate_new_token' => 'Generating a new token will invalidate the previous one. Do you want to proceed?',
	'themes_hint' => 'Here you can import themes. Select a zip-file of your theme you want to import and once import succeeded, the theme will be available to all users. Note: If the zip-archive contains multiple themes, then the system will try to import all of them.',
	'theme_import_successful' => 'The import was successful. Imported themes: {count}',
	'theme_list' => 'List of installed themes',
	'confirm_theme_removal' => 'Are you sure that you want to remove this theme?',
	'send_confirmation_email' => 'Send confirmation E-Mail',
	'create_your_first_location' => 'There are no locations added yet. Please <a href="{url}">create your first location</a> in order to add plants.',
	'create_another_location_for_plant_migration' => 'Please create another location first, so that the plants can be safely moved.'
];