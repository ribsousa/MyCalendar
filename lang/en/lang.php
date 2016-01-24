<?php
return [
    'plugin' => [//Plugin File
        'name' => 'MyCalendar',
        'description' => 'Super simple calendar for displaying events.',
        'user_btn' => 'Users',
        'tab' => 'MyCalendar',
        'access_events' => 'events',
        'access_categories' => 'categories',
        'access_settings' => 'settings',
    ],
    'events' => [// Events Controller
        'menu_label' => 'Events',
        'toolbar_new' => 'New Event',
        'form_name' => 'Event',
        'update_title' => 'Edit Event',
        'preview_title' => 'Preview Event',
        'list_title' => 'Manage Events',
        'return' => 'Return to Events list',
        'delete_confirm' => 'Do you really want to delete this event?',
    ],
    'categories' => [// Categories Controller
        'menu_label' => 'Categories',
        'toolbar_new' => 'New Category',
        'form_name' => 'Category',
        'create_title' => 'Create Category',
        'update_title' => 'Edit Category',
        'preview_title' => 'Preview Category',
        'list_title' => 'Manage Categories',
        'return' => 'Return to categories list',
        'delete_confirm' => 'Do you really want to delete this category?',
    ],
    'settings' => [
        'description' => 'Configure calendar category protection.',
        'menu_label' => 'MyCalendar settings',
        'menu_description' => 'Manage calendar settings.',
        'public_perm_label' => 'Public Category',
        'public_perm_comment' => 'A permission for categories that will NOT be blocked from public viewing.',
        'deny_perm_label' => 'Denied Category',
        'deny_perm_comment' => 'A permission for categories that WILL be blocked from any viewing.',
        'default_perm_label' => 'Default Category',
        'default_perm_comment' => 'A permission that will be set on new categories by default ( unless set by user ).',
        'date_format_label' => 'Date Format',
        'date_format_comment' => 'Format to use for display of date.  Uses standard PHP date format string',
        'time_format_label' => 'Time Format',
        'time_format_comment' => 'Format to use for display of time.  Uses standard PHP date format string',
    ],
    'month' => [// Month Component
        'name' => 'Month View',
        'description' => 'Shows a month calendar with events',
        'month_title' => 'Month',
        'month_description' => 'The month you want to show.',
        'year_title' => 'Year',
        'year_description' => 'The year you want to show.',
        'events_title' => 'Events',
        'events_description' => 'Array of the events you want to show.',
        'color_title' => 'Calendar Color',
        'color_description' => 'What color do you want calendar to be?',
        'dayprops_title' => 'Day Properties',
        'dayprops_description' => 'Array of the properties you want to put on the day indicator.',
        'loadstyle_title' => 'Load Style Sheet',
        'loadstyle_description' => 'Load the default CSS file.',
        'opt_no' => 'No',
        'opt_yes' => 'Yes',
        'color_red' => 'red',
        'color_green' => 'green',
        'color_blue' => 'blue',
        'color_yellow' => 'yellow',
        'day_sun' => 'Sun',
        'day_mon' => 'Mon',
        'day_tue' => 'Tue',
        'day_wed' => 'Wed',
        'day_thu' => 'Thu',
        'day_fri' => 'Fri',
        'day_sat' => 'Sat',
        'previous' => 'Previous',
        'next' => 'Next',
    ],
    'week' => [// Week Component
        'name' => 'Week View',
        'description' => 'Shows a week calendar with events',
    ],
    'evlist' => [// EvList Component
        'name' => 'List View',
        'description' => 'Shows a list of events',
        'month_title' => 'Month',
        'month_description' => 'The month you want to show.',
        'year_title' => 'Year',
        'year_description' => 'The year you want to show.',
        'events_title' => 'Events',
        'events_description' => 'Array of the events you want to show.',
        'color_title' => 'Icon Color',
        'color_description' => 'What color do you want calendar icons to be?',
        'loadstyle_title' => 'Load Style Sheet',
        'loadstyle_description' => 'Load the default CSS file.',
        'opt_no' => 'No',
        'opt_yes' => 'Yes',
        'label' => 'Event',
        'id' => 'ID',
        'title' => 'Title',
        'is_published' => 'Published',
        'user_id' => 'Creator',
        'fname' => 'Creator First',
        'lname' => 'Creator Last',
        'date' => 'Date',
        'time' => 'Time',
        'text' => 'Details',
        'link' => 'Link',
        'categorys' => 'Categories',
    ],
    'events_comp' => [// Events Component
        'name' => 'Events Data',
        'description' => 'Get Events from DB and insert them into page',
        'linkpage_title' => 'Link to Event Detail Page',
        'linkpage_desc' => 'Name of the event page file for the "More Details" links. This property is used by the event component partial.',
        'linkpage_group' => 'Links',
        'linkpage_opt_none' => 'None - Use Modal Pop-up',
        'title_max_title' => 'Maximum Popup Title Length',
        'title_max_description' => 'Maximum length of "title" property that shows the details of an event on hover.',
        'permissions_title' => 'Use Permission',
        'permissions_description' => 'Use permissions to restrict what categories of events are shown based on roles.',
        'past_title' => 'Past Days',
        'past_description' => 'How far into the past do you want to load events from?',
        'future_title' => 'Future Days',
        'future_description' => 'How far into the future do you want to load events from?',
        'opt_no' => 'No',
        'opt_yes' => 'Yes',
    ],
    'event' => [// Event Component and Model
        'name' => 'Event View',
        'description' => 'Shows one event on page with details',
        'label' => 'Event',
        'id' => 'ID',
        'title' => 'Title',
        'is_published' => 'Published',
        'user_id' => 'Creator',
        'fname' => 'Creator First',
        'lname' => 'Creator Last',
        'date' => 'Date',
        'time' => 'Time',
        'text' => 'Details',
        'link' => 'Link',
        'categorys' => 'Categories',
        'category' => 'Category',
        'error_not_found' => 'Event not found!',
        'error_allow_no' => 'Event not allowed!',
        'error_prohibit' => 'Event Prohibited!',
        'phold_name' => 'Name your Event',
        'phold_fname' => 'Creator First',
        'phold_lname' => 'Creator Last',
        'phold_date' => 'Pick a Date',
        'phold_time' => 'Pick a Time',
        'phold_text' => 'Enter as much details as you want about your event. (HTML OK)',
        'phold_link' => 'Add URL Link to your event.',
        'phold_categorys' => 'Categories',
        'empty_categorys' => 'There are no categories, you should create one first!',
        'slug_title' => 'Event Slug',
        'slug_description' => 'URL slug to indicate Event ID to view on page',
        'link_title' => 'Events List Page',
        'link_description' => 'Name of the event page file for list or calendar page. This property is used by the event component partial.',
        'link_group' => 'Links',
    ],
    'event_form' => [// EventForm Component
        'name' => 'Event Form',
        'description' => 'Front end form to allow users to ad their own events',
        'allow_pub_title' => 'Allow Publish',
        'allow_pub_description' => 'Allow users to publish their event. (No means an admin must do it.)',
        'ckeditor_title' => 'Use CKEditor',
        'ckeditor_description' => 'Load CKEditor from cdn.ckeditor.com and show rich editor field for event description.',
        'opt_no' => 'No',
        'opt_yes' => 'Yes',
        'btn_add' => 'Add Event',
        'btn_edit' => 'Edit',
        'btn_copy' => 'Copy',
        'btn_delete' => 'Delete',
        'btn_save' => 'Save',
        'btn_cancel' => 'Cancel',
        'saving' => 'Saving Event...',
        'delete_conf' => 'Do you really want to delete this event?',
    ],
    'month_events' => [// MonthEvents Component
        'name' => 'Month View w/ Event Data',
        'description' => 'Show Full Month View with DB events',
    ],
    'list_events' => [// ListEvents Component
        'name' => 'Event List w/ Event Data',
        'description' => 'Show Event List View with DB events',
    ],
    'category' => [// Category Model
        'name' => 'Category',
        'slug' => 'Slug',
        'description' => 'Description',
        'permission' => 'Permision for this Category',
        'phold_name' => 'Name of Category',
        'phold_slug' => 'Slug for URLS',
        'phold_description' => 'More details',
        'comment_permission' => 'Set the permision for this category.',
    ],
];
