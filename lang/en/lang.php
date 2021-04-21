<?php
return [
    "plugin" => [
        //Plugin File
        "name" => "Passage",
        "description" => "Permission system for front-end user groups.",
        "backend_menu" => "Passage Keys",
        "backend_variance" => "User Variances",
        "field_tab" => "Passage Keys",
        "field_label" => "Passage Keys",
        "field_commentAbove" =>
            "Check all keys (permissions) that you want this group to have.",
        "field_emptyOption" =>
            "There are no pasage keys, you should create some!",
        "permiss_label" =>
            "Manage key names for front-end user-group permissions.",
        "permiss_label_ug" => "Manage front-end user-group permissions.",
    ],
    "keys_comp" => [
        //Controller
        "page_title" => "Manage Passage Keys",
        "new" => "New Key",
        "keys" => "Keys",
        "return" => "Return to keys list",
        "saving" => "Saving Key...",
        "deleting" => "Deleting Key...",
        "delete_confirm" => "Are you sure you want to delete this key?",
        "delete_selected_confirm" =>
            "Are you sure you want to delete the selected Keys?",
    ],
    "key" => [
        // Model
        "model" => "Key",
        "models" => "Keys",
        "id" => "ID",
        "name" => "Name",
        "description" => "Description",
        "updated" => "Updated",
        "created" => "Created",
        "people" =>
            "People associated by allowed groups ( Variances not considered )",
        "groups" => "Groups having this key",
    ],

    "variances_comp" => [
        //Controller
        "page_title" => "Manage Passage Variances",
        "new" => "New Variance",
        "variances" => "Variances",
        "return" => "Return to variance list",
        "saving" => "Saving Variance...",
        "deleting" => "Deleting Variance...",
        "delete_confirm" => "Are you sure you want to delete this variance?",
        "delete_selected_confirm" =>
            "Are you sure you want to delete the selected Variances?",
        "delete_selected" => "Delete Selected",
    ],
    "variance" => [
        // Model
        "model" => "Variance",
        "models" => "Variances",
        "user_id" => "User",
        "key_id" => "Passage Key",
        "grant" => "Grant",
        "description" => "Description / Note",
        "updated" => "Updated",
        "created" => "Created",

        "error_duplicate" =>
            "Duplicate variance. Locate and edit existing variance instead of creating duplicate.",
    ],
    "choose_one" => "-- Choose One --",
    "copy" => "Copy From Another Group",
    "copy_comment" => "Click group name to copy all keys from that group",
];