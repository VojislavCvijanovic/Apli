<?php

defined("DB_HOST") ? "" : DEFINE("DB_HOST","localhost"); 
defined("DB_USER") ? "" : DEFINE("DB_USER","root"); 
defined("DB_PASS") ? "" : DEFINE("DB_PASS",""); 
defined("DB_NAME") ? "" : DEFINE("DB_NAME","dis"); 

//User STATUS

defined("USER_STATUS_VERIFICATION") ? "" :   DEFINE("USER_STATUS_VERIFICATION","1");
defined("USER_STATUS_ACTIVE")? ""        :   DEFINE("USER_STATUS_ACTIVE","2");
defined("USER_STATUS_DISABLED")? ""      :   DEFINE("USER_STATUS_DISABLED","3");
defined("USER_STATUS_BLOCKED")? ""       :   DEFINE("USER_STATUS_BLOCKED","4");
defined("USER_STATUS_DEACTIVATED")? ""   :   DEFINE("USER_STATUS_DEACTIVATED","5");


//User ROLE

defined("USER_ROLE_ADMIN")? ""       :   DEFINE("USER_ROLE_ADMIN","1");
defined("USER_ROLE_USER")? ""        :   DEFINE("USER_ROLE_USER","2");


defined("EMAIL_VERCODE_GENERATED")? ""        :   DEFINE("EMAIL_VERCODE_GENERATED","1");
defined("EMAIL_VERCODE_SENT")? ""             :   DEFINE("EMAIL_VERCODE_SENT","2");
defined("EMAIL_VERCODE_REGENERATED")? ""      :   DEFINE("EMAIL_VERCODE_REGENERATED","3");
defined("EMAIL_VERCODE_EXPIRED")? ""          :   DEFINE("EMAIL_VERCODE_EXPIRED","4");
defined("EMAIL_VERCODE_VERIFIED")? ""         :   DEFINE("EMAIL_VERCODE_VERIFIED","5");


defined("EMAIL_VERCODE_VALID_PERIOD")? ""         :   DEFINE("EMAIL_VERCODE_VALID_PERIOD","2");




?>