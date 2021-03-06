<?php
// The name of this module
define('_MI_XFORMS_NAME', 'xForms');

// A brief description of this module
define('_MI_XFORMS_DESC', 'This module is used to create forms to collect user input.');

// admin/menu.php
define('_MI_XFORMS_ADMENU0', 'Home');
define('_MI_XFORMS_ADMENU1', 'Manage forms');
define('_MI_XFORMS_ADMENU2', 'Create/Edit a form');
define('_MI_XFORMS_ADMENU3', 'Create/Edit form element');
define('_MI_XFORMS_ADMENU4', 'Form report');
define('_MI_XFORMS_ADMENU5', 'About');
define('_MI_XFORMS_ADMENU6', 'Import');

define('_MI_XFORMS_ADMENU0_DESC', 'Admin Home page');
define('_MI_XFORMS_ADMENU1_DESC', 'Manage defined forms');
define('_MI_XFORMS_ADMENU2_DESC', 'Create/Edit a specific form');
define('_MI_XFORMS_ADMENU3_DESC', 'Create/Edit a form element');
define('_MI_XFORMS_ADMENU4_DESC', 'Create/View a form report');
define('_MI_XFORMS_ADMENU5_DESC', 'About this module');
define('_MI_XFORMS_ADMENU6_DESC', 'Import data from similar module(s)');

// template descriptions
define('_MI_XFORMS_TMPL_ERROR_DESC', 'Page to show when error occurs');
define('_MI_XFORMS_TMPL_FORM_DESC', 'Template for forms');
define('_MI_XFORMS_TMPL_POLL_DESC', 'Template for polls');
define('_MI_XFORMS_TMPL_MAIN_DESC', 'Main page of ' . _MI_XFORMS_NAME);

// block descriptions
define('_MI_XFORMS_BLK_LIST', 'Form list block');
define('_MI_XFORMS_BLK_LIST_DESC', 'A block to list available forms (permissions aware)');
define('_MI_XFORMS_BLK_FORM', 'Form block');
define('_MI_XFORMS_BLK_FORM_DESC', 'A block to display a single available form (permissions aware)');

// preferences
define('_MI_XFORMS_TEXT_WIDTH', 'Default width of text boxes');
define('_MI_XFORMS_TEXT_MAX', 'Default maximum length of text boxes');
define('_MI_XFORMS_TEXTAREA_ROWS', 'Default rows of text areas');
define('_MI_XFORMS_TEXTAREA_COLS', 'Default columns of text areas');
define('_MI_XFORMS_MAIL_CHARSET', 'Text encoding for sending emails');
define('_MI_XFORMS_MOREINFO', 'Send additional information along with the submitted data');
define('_MI_XFORMS_MOREINFO_USER', 'User name and url to user info page');
define('_MI_XFORMS_MOREINFO_IP', 'Submitter\'s IP address');
define('_MI_XFORMS_MOREINFO_AGENT', 'Submitter\'s user agent (browser info)');
define('_MI_XFORMS_MOREINFO_FORM', 'URL of the submitted form');
define('_MI_XFORMS_PREFIX', 'Text prefix for required fields');
define('_MI_XFORMS_SUFFIX', 'Text suffix for required fields');
define('_MI_XFORMS_INTRO', 'Introduction text in main page');
define('_MI_XFORMS_GLOBAL', 'Text to be displayed in every form page');
define('_MI_XFORMS_DEFAULT_TITLE', 'Default Main Page Title');

// preferences default values
define('_MI_XFORMS_MAIL_CHARSET_DESC', 'Leave blank for ' . _CHARSET);
define('_MI_XFORMS_INTRO_DEFAULT', 'Feel free to contact us via the following means:');
define('_MI_XFORMS_GLOBAL_DEFAULT', '[b]* Required[/b]');
define('_MI_XFORMS_UPLOADDIR', 'Physical path for storing uploaded files WITHOUT trailing slash');
define('_MI_XFORMS_UPLOADDIR_DESC', 'All upload files will be stored here when a form is sent via private message');
define('_MI_XFORMS_NOFORM', 'Text shown when there are no forms visible to the current user');
define('_MI_XFORMS_NOFORM_DEFAULT', 'Sorry, there are currently no forms (visible for you).');
define('_MI_XFORMS_SHOWFORMS', 'Show ' . _MI_XFORMS_NAME . ' index page?');
define('_MI_XFORMS_SHOWFORMS_DESC', 'Yes - the forms available to the user will be shown on the index page. No - the user will be sent to the site home page if no specific form is form selected.');
define('_MI_XFORMS_PERPAGE', 'Number of forms to show per page (in Admin)');
define('_MI_XFORMS_PERPAGE_DESC', '');
define('_MI_XFORMS_DEFAULT_TITLE_DESC', 'Forms Page');

//1.22
define('_MI_XFORMS_ELE_SELECT_CTRY_DEFAULT', 'Select Default Country');

//2.00
define('_MI_XFORMS_INST_NO_TABLE', '%s table does not exist');
define('_MI_XFORMS_INST_TABLE_EXISTS', '%s table already exists');
define('_MI_XFORMS_INST_NO_DEL_DIRS', 'Could not delete old directories');
define('_MI_XFORMS_INST_NO_DEL_UPLOAD', 'Could not delete upload directory (%s)');
define('_MI_XFORMS_INST_DIR_NOT_FOUND', 'Could not find the %s directory');
define('_MI_XFORMS_HELP_OVERVIEW', 'Overview');
define('_MI_XFORMS_IMPORT', 'Import');
define('_MI_XFORMS_HELP_ISSUES', 'Issues');
define('_MI_XFORMS_HELP_ELEMENTS', 'Form Elements');
