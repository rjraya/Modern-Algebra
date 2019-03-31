<!DOCTYPE html>
<html  dir="ltr" lang="en" xml:lang="en">
<head>
    <title>MoodleUnil: Log in to the site</title>
    <link rel="shortcut icon" href="https://moodle.unil.ch/theme/image.php/unil/theme/1522785678/favicon" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="moodle, MoodleUnil: Log in to the site" />
<link rel="stylesheet" type="text/css" href="https://moodle.unil.ch/theme/yui_combo.php?rollup/3.17.2/yui-moodlesimple-min.css" /><script id="firstthemesheet" type="text/css">/** Required in order to fix style inclusion problems in IE with YUI **/</script><link rel="stylesheet" type="text/css" href="https://moodle.unil.ch/theme/styles.php/unil/1522785678/all" />
<script type="text/javascript">
//<![CDATA[
var M = {}; M.yui = {};
M.pageloadstarttime = new Date();
M.cfg = {"wwwroot":"https:\/\/moodle.unil.ch","sesskey":"0F5xqYA1lK","themerev":"1522785678","slasharguments":1,"theme":"unil","iconsystemmodule":"core\/icon_system_standard","jsrev":"1522785678","admin":"admin","svgicons":true,"usertimezone":"Europe\/Zurich","contextid":1};var yui1ConfigFn = function(me) {if(/-skin|reset|fonts|grids|base/.test(me.name)){me.type='css';me.path=me.path.replace(/\.js/,'.css');me.path=me.path.replace(/\/yui2-skin/,'/assets/skins/sam/yui2-skin')}};
var yui2ConfigFn = function(me) {var parts=me.name.replace(/^moodle-/,'').split('-'),component=parts.shift(),module=parts[0],min='-min';if(/-(skin|core)$/.test(me.name)){parts.pop();me.type='css';min=''}
if(module){var filename=parts.join('-');me.path=component+'/'+module+'/'+filename+min+'.'+me.type}else{me.path=component+'/'+component+'.'+me.type}};
YUI_config = {"debug":false,"base":"https:\/\/moodle.unil.ch\/lib\/yuilib\/3.17.2\/","comboBase":"https:\/\/moodle.unil.ch\/theme\/yui_combo.php?","combine":true,"filter":null,"insertBefore":"firstthemesheet","groups":{"yui2":{"base":"https:\/\/moodle.unil.ch\/lib\/yuilib\/2in3\/2.9.0\/build\/","comboBase":"https:\/\/moodle.unil.ch\/theme\/yui_combo.php?","combine":true,"ext":false,"root":"2in3\/2.9.0\/build\/","patterns":{"yui2-":{"group":"yui2","configFn":yui1ConfigFn}}},"moodle":{"name":"moodle","base":"https:\/\/moodle.unil.ch\/theme\/yui_combo.php?m\/1522785678\/","combine":true,"comboBase":"https:\/\/moodle.unil.ch\/theme\/yui_combo.php?","ext":false,"root":"m\/1522785678\/","patterns":{"moodle-":{"group":"moodle","configFn":yui2ConfigFn}},"filter":null,"modules":{"moodle-core-languninstallconfirm":{"requires":["base","node","moodle-core-notification-confirm","moodle-core-notification-alert"]},"moodle-core-event":{"requires":["event-custom"]},"moodle-core-maintenancemodetimer":{"requires":["base","node"]},"moodle-core-dock":{"requires":["base","node","event-custom","event-mouseenter","event-resize","escape","moodle-core-dock-loader","moodle-core-event"]},"moodle-core-dock-loader":{"requires":["escape"]},"moodle-core-popuphelp":{"requires":["moodle-core-tooltip"]},"moodle-core-blocks":{"requires":["base","node","io","dom","dd","dd-scroll","moodle-core-dragdrop","moodle-core-notification"]},"moodle-core-chooserdialogue":{"requires":["base","panel","moodle-core-notification"]},"moodle-core-tooltip":{"requires":["base","node","io-base","moodle-core-notification-dialogue","json-parse","widget-position","widget-position-align","event-outside","cache-base"]},"moodle-core-handlebars":{"condition":{"trigger":"handlebars","when":"after"}},"moodle-core-checknet":{"requires":["base-base","moodle-core-notification-alert","io-base"]},"moodle-core-lockscroll":{"requires":["plugin","base-build"]},"moodle-core-notification":{"requires":["moodle-core-notification-dialogue","moodle-core-notification-alert","moodle-core-notification-confirm","moodle-core-notification-exception","moodle-core-notification-ajaxexception"]},"moodle-core-notification-dialogue":{"requires":["base","node","panel","escape","event-key","dd-plugin","moodle-core-widget-focusafterclose","moodle-core-lockscroll"]},"moodle-core-notification-alert":{"requires":["moodle-core-notification-dialogue"]},"moodle-core-notification-confirm":{"requires":["moodle-core-notification-dialogue"]},"moodle-core-notification-exception":{"requires":["moodle-core-notification-dialogue"]},"moodle-core-notification-ajaxexception":{"requires":["moodle-core-notification-dialogue"]},"moodle-core-dragdrop":{"requires":["base","node","io","dom","dd","event-key","event-focus","moodle-core-notification"]},"moodle-core-actionmenu":{"requires":["base","event","node-event-simulate"]},"moodle-core-formchangechecker":{"requires":["base","event-focus","moodle-core-event"]},"moodle-core_availability-form":{"requires":["base","node","event","event-delegate","panel","moodle-core-notification-dialogue","json"]},"moodle-backup-confirmcancel":{"requires":["node","node-event-simulate","moodle-core-notification-confirm"]},"moodle-backup-backupselectall":{"requires":["node","event","node-event-simulate","anim"]},"moodle-course-formatchooser":{"requires":["base","node","node-event-simulate"]},"moodle-course-categoryexpander":{"requires":["node","event-key"]},"moodle-course-dragdrop":{"requires":["base","node","io","dom","dd","dd-scroll","moodle-core-dragdrop","moodle-core-notification","moodle-course-coursebase","moodle-course-util"]},"moodle-course-util":{"requires":["node"],"use":["moodle-course-util-base"],"submodules":{"moodle-course-util-base":{},"moodle-course-util-section":{"requires":["node","moodle-course-util-base"]},"moodle-course-util-cm":{"requires":["node","moodle-course-util-base"]}}},"moodle-course-management":{"requires":["base","node","io-base","moodle-core-notification-exception","json-parse","dd-constrain","dd-proxy","dd-drop","dd-delegate","node-event-delegate"]},"moodle-course-modchooser":{"requires":["moodle-core-chooserdialogue","moodle-course-coursebase"]},"moodle-form-showadvanced":{"requires":["node","base","selector-css3"]},"moodle-form-dateselector":{"requires":["base","node","overlay","calendar"]},"moodle-form-shortforms":{"requires":["node","base","selector-css3","moodle-core-event"]},"moodle-form-passwordunmask":{"requires":[]},"moodle-question-chooser":{"requires":["moodle-core-chooserdialogue"]},"moodle-question-qbankmanager":{"requires":["node","selector-css3"]},"moodle-question-searchform":{"requires":["base","node"]},"moodle-question-preview":{"requires":["base","dom","event-delegate","event-key","core_question_engine"]},"moodle-availability_completion-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-availability_date-form":{"requires":["base","node","event","io","moodle-core_availability-form"]},"moodle-availability_grade-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-availability_group-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-availability_grouping-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-availability_profile-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-qtype_ddimageortext-form":{"requires":["moodle-qtype_ddimageortext-dd","form_filepicker"]},"moodle-qtype_ddimageortext-dd":{"requires":["node","dd","dd-drop","dd-constrain"]},"moodle-qtype_ddmarker-dd":{"requires":["node","event-resize","dd","dd-drop","dd-constrain","graphics"]},"moodle-qtype_ddmarker-form":{"requires":["moodle-qtype_ddmarker-dd","form_filepicker","graphics","escape"]},"moodle-qtype_ddwtos-dd":{"requires":["node","dd","dd-drop","dd-constrain"]},"moodle-mod_assign-history":{"requires":["node","transition"]},"moodle-mod_forum-subscriptiontoggle":{"requires":["base-base","io-base"]},"moodle-mod_offlinequiz-offlinequizquestionbank":{"requires":["base","event","node","io","io-form","yui-later","moodle-question-qbankmanager","moodle-core-notification-dialogue"]},"moodle-mod_offlinequiz-repaginate":{"requires":["base","event","node","io","moodle-core-notification-dialogue"]},"moodle-mod_offlinequiz-modform":{"requires":["base","node","event"]},"moodle-mod_offlinequiz-toolboxes":{"requires":["base","node","event","event-key","io","moodle-mod_offlinequiz-offlinequizbase","moodle-mod_offlinequiz-util-slot","moodle-core-notification-ajaxexception"]},"moodle-mod_offlinequiz-randomquestion":{"requires":["base","event","node","io","moodle-core-notification-dialogue"]},"moodle-mod_offlinequiz-questionchooser":{"requires":["moodle-core-chooserdialogue","moodle-mod_offlinequiz-util","querystring-parse"]},"moodle-mod_offlinequiz-offlinequizbase":{"requires":["base","node"]},"moodle-mod_offlinequiz-dragdrop":{"requires":["base","node","io","dom","dd","dd-scroll","moodle-core-dragdrop","moodle-core-notification","moodle-mod_offlinequiz-offlinequizbase","moodle-mod_offlinequiz-util-base","moodle-mod_offlinequiz-util-page","moodle-mod_offlinequiz-util-slot","moodle-course-util"]},"moodle-mod_offlinequiz-autosave":{"requires":["base","node","event","event-valuechange","node-event-delegate","io-form"]},"moodle-mod_offlinequiz-util":{"requires":["node"],"use":["moodle-mod_offlinequiz-util-base"],"submodules":{"moodle-mod_offlinequiz-util-base":{},"moodle-mod_offlinequiz-util-slot":{"requires":["node","moodle-mod_offlinequiz-util-base"]},"moodle-mod_offlinequiz-util-page":{"requires":["node","moodle-mod_offlinequiz-util-base"]}}},"moodle-mod_quiz-quizquestionbank":{"requires":["base","event","node","io","io-form","yui-later","moodle-question-qbankmanager","moodle-core-notification-dialogue"]},"moodle-mod_quiz-repaginate":{"requires":["base","event","node","io","moodle-core-notification-dialogue"]},"moodle-mod_quiz-modform":{"requires":["base","node","event"]},"moodle-mod_quiz-toolboxes":{"requires":["base","node","event","event-key","io","moodle-mod_quiz-quizbase","moodle-mod_quiz-util-slot","moodle-core-notification-ajaxexception"]},"moodle-mod_quiz-randomquestion":{"requires":["base","event","node","io","moodle-core-notification-dialogue"]},"moodle-mod_quiz-quizbase":{"requires":["base","node"]},"moodle-mod_quiz-questionchooser":{"requires":["moodle-core-chooserdialogue","moodle-mod_quiz-util","querystring-parse"]},"moodle-mod_quiz-dragdrop":{"requires":["base","node","io","dom","dd","dd-scroll","moodle-core-dragdrop","moodle-core-notification","moodle-mod_quiz-quizbase","moodle-mod_quiz-util-base","moodle-mod_quiz-util-page","moodle-mod_quiz-util-slot","moodle-course-util"]},"moodle-mod_quiz-autosave":{"requires":["base","node","event","event-valuechange","node-event-delegate","io-form"]},"moodle-mod_quiz-util":{"requires":["node","moodle-core-actionmenu"],"use":["moodle-mod_quiz-util-base"],"submodules":{"moodle-mod_quiz-util-base":{},"moodle-mod_quiz-util-slot":{"requires":["node","moodle-mod_quiz-util-base"]},"moodle-mod_quiz-util-page":{"requires":["node","moodle-mod_quiz-util-base"]}}},"moodle-mod_scheduler-saveseen":{"requires":["base","node","event"]},"moodle-mod_scheduler-studentlist":{"requires":["base","node","event","io"]},"moodle-mod_scheduler-delselected":{"requires":["base","node","event"]},"moodle-message_airnotifier-toolboxes":{"requires":["base","node","io"]},"moodle-filter_glossary-autolinker":{"requires":["base","node","io-base","json-parse","event-delegate","overlay","moodle-core-event","moodle-core-notification-alert","moodle-core-notification-exception","moodle-core-notification-ajaxexception"]},"moodle-filter_mathjaxloader-loader":{"requires":["moodle-core-event"]},"moodle-editor_atto-editor":{"requires":["node","transition","io","overlay","escape","event","event-simulate","event-custom","node-event-html5","node-event-simulate","yui-throttle","moodle-core-notification-dialogue","moodle-core-notification-confirm","moodle-editor_atto-rangy","handlebars","timers","querystring-stringify"]},"moodle-editor_atto-plugin":{"requires":["node","base","escape","event","event-outside","handlebars","event-custom","timers","moodle-editor_atto-menu"]},"moodle-editor_atto-menu":{"requires":["moodle-core-notification-dialogue","node","event","event-custom"]},"moodle-editor_atto-rangy":{"requires":[]},"moodle-report_eventlist-eventfilter":{"requires":["base","event","node","node-event-delegate","datatable","autocomplete","autocomplete-filters"]},"moodle-report_loglive-fetchlogs":{"requires":["base","event","node","io","node-event-delegate"]},"moodle-gradereport_grader-gradereporttable":{"requires":["base","node","event","handlebars","overlay","event-hover"]},"moodle-gradereport_history-userselector":{"requires":["escape","event-delegate","event-key","handlebars","io-base","json-parse","moodle-core-notification-dialogue"]},"moodle-tool_capability-search":{"requires":["base","node"]},"moodle-tool_editrolesbycap-capabilityformfield":{"requires":["base","dom","event","cookie"]},"moodle-tool_lp-dragdrop-reorder":{"requires":["moodle-core-dragdrop"]},"moodle-tool_monitor-dropdown":{"requires":["base","event","node"]},"moodle-assignfeedback_editpdf-editor":{"requires":["base","event","node","io","graphics","json","event-move","event-resize","transition","querystring-stringify-simple","moodle-core-notification-dialog","moodle-core-notification-alert","moodle-core-notification-exception","moodle-core-notification-ajaxexception"]},"moodle-assignfeedback_editpdfplus-editor":{"requires":["base","event","node","io","graphics","json","event-move","event-resize","transition","querystring-stringify-simple","moodle-core-notification-dialog","moodle-core-notification-alert","moodle-core-notification-exception","moodle-core-notification-ajaxexception"]},"moodle-atto_accessibilitychecker-button":{"requires":["color-base","moodle-editor_atto-plugin"]},"moodle-atto_accessibilityhelper-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_align-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_bold-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_charmap-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_clear-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_collapse-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_corrections-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_emoticon-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_equation-button":{"requires":["moodle-editor_atto-plugin","moodle-core-event","io","event-valuechange","tabview","array-extras"]},"moodle-atto_fullscreen-button":{"requires":["event-resize","moodle-editor_atto-plugin"]},"moodle-atto_hr-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_html-button":{"requires":["moodle-editor_atto-plugin","event-valuechange"]},"moodle-atto_htmlplus-beautify":{},"moodle-atto_htmlplus-codemirror":{"requires":["moodle-atto_htmlplus-codemirror-skin"]},"moodle-atto_htmlplus-button":{"requires":["moodle-editor_atto-plugin","moodle-atto_htmlplus-beautify","moodle-atto_htmlplus-codemirror","event-valuechange"]},"moodle-atto_image-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_indent-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_italic-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_link-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_managefiles-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_managefiles-usedfiles":{"requires":["node","escape"]},"moodle-atto_media-button":{"requires":["moodle-editor_atto-plugin","moodle-form-shortforms"]},"moodle-atto_noautolink-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_orderedlist-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_playunil-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_poodll-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_rtl-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_strike-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_subscript-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_superscript-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_table-button":{"requires":["moodle-editor_atto-plugin","moodle-editor_atto-menu","event","event-valuechange"]},"moodle-atto_title-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_underline-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_undo-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_unorderedlist-button":{"requires":["moodle-editor_atto-plugin"]}}},"gallery":{"name":"gallery","base":"https:\/\/moodle.unil.ch\/lib\/yuilib\/gallery\/","combine":true,"comboBase":"https:\/\/moodle.unil.ch\/theme\/yui_combo.php?","ext":false,"root":"gallery\/1522785678\/","patterns":{"gallery-":{"group":"gallery"}}}},"modules":{"core_filepicker":{"name":"core_filepicker","fullpath":"https:\/\/moodle.unil.ch\/lib\/javascript.php\/1522785678\/repository\/filepicker.js","requires":["base","node","node-event-simulate","json","async-queue","io-base","io-upload-iframe","io-form","yui2-treeview","panel","cookie","datatable","datatable-sort","resize-plugin","dd-plugin","escape","moodle-core_filepicker","moodle-core-notification-dialogue"]},"core_comment":{"name":"core_comment","fullpath":"https:\/\/moodle.unil.ch\/lib\/javascript.php\/1522785678\/comment\/comment.js","requires":["base","io-base","node","json","yui2-animation","overlay","escape"]},"mathjax":{"name":"mathjax","fullpath":"https:\/\/cdnjs.cloudflare.com\/ajax\/libs\/mathjax\/2.7.1\/MathJax.js?delayStartupUntil=configured"}}};
M.yui.loader = {modules: {}};

//]]>
</script>

<!-- website icon sur safari -->
<link rel="mask-icon" href="//moodle.unil.ch/theme/unil/pix/website_icon.svg" color="#000" >

<!-- Google Analytics -->
<script type="text/javascript">

  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-24025211-1', 'auto');
  ga('send', 'pageview');

</script><meta name="robots" content="noindex" />    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body  id="page-login-index" class="format-site  path-login gecko dir-ltr lang-en yui-skin-sam yui3-skin-sam moodle-unil-ch pagelayout-login course-1 context-1 notloggedin content-only layout-option-langmenu">

<div class="skiplinks">
    <a href="#maincontent" class="skip">Skip to main content</a>
</div><script type="text/javascript" src="https://moodle.unil.ch/theme/yui_combo.php?rollup/3.17.2/yui-moodlesimple-min.js"></script><script type="text/javascript" src="https://moodle.unil.ch/theme/jquery.php/core/jquery-3.1.0.min.js"></script>
<script type="text/javascript" src="https://moodle.unil.ch/theme/jquery.php/core/ui-1.12.1/jquery-ui.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://moodle.unil.ch/theme/jquery.php/core/ui-1.12.1/theme/smoothness/jquery-ui.min.css" />
<script type="text/javascript" src="https://moodle.unil.ch/lib/javascript.php/1522785678/lib/javascript-static.js"></script>
<script type="text/javascript">
//<![CDATA[
document.body.className += ' jsenabled';
//]]>
</script>


<header role="banner" class="navbar navbar-fixed-top moodle-has-zindex">
    <nav role="navigation" class="navbar-inner">
        <div class="container-fluid">
            <a class="brand" title="Home" href="http://moodle.unil.ch/">MoodleUnil </a>            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span></a>            <div class="usermenu"><span class="login">You are not logged in.</span></div>                                    <div class="nav-collapse collapse">
                <ul class="nav"><li class="dropdown"><a href="#cm_submenu_1" class="dropdown-toggle" data-toggle="dropdown" title="Pour mes études">Pour mes études<b class="caret"></b></a><ul class="dropdown-menu"><li><a title="MyUnil" href="https://my.unil.ch/">MyUnil</a></li><li class="divider">&nbsp;</li><li><a title="Mahara: un outil pour créer son ePortfolio à l&#039;UNIL" href="http://sepia.unil.ch/mahara/">Accéder à mon ePortfolio</a></li><li class="divider">&nbsp;</li><li><a title="Liste des dictionnaires et encyclopédies de la BCUL" href="https://db-prod-bcul.unil.ch/dbbcu/cds/categorie.php?Code=09">Dictionnaires en ligne</a></li><li class="divider">&nbsp;</li><li><a title="Me former:" href="#">Me former:</a></li><li><a title="Liste des ateliers réussite du Service d&#039;orientation et carrière" href="http://www.unil.ch/reussir/home.html">Ateliers réussite (SOC)</a></li><li><a title="Liste des cours du Centre de langues" href="https://www.unil.ch/cdl/fr/home.html">Cours de langues (CDL)</a></li><li><a title="Liste des cours du Centre informatique" href="https://www.unil.ch/ci/cours-etudiants">Cours d'informatique (CI)</a></li><li><a title="Magellan, plate-forme d&#039;orientation et de ressources pour naviguer dans la documentation scientifique" href="https://www.unil.ch/magellan/fr/home.html">Formations TIC sur Magellan (BCUL-UNIL)</a></li></ul><li class="dropdown"><a href="#cm_submenu_2" class="dropdown-toggle" data-toggle="dropdown" title="Pour mes enseignements">Pour mes enseignements<b class="caret"></b></a><ul class="dropdown-menu"><li><a title="Un portail de liens pour les enseignants" href="http://www.unil.ch/enseigner">Enseigner à l'UNIL</a></li><li class="divider">&nbsp;</li><li><a title="Une plateforme regroupant des ressources pédagogiques pour intégrer les technologies dans l&#039;enseignement" href="http://sepia.unil.ch/eet/">Espace «enseignement et technologies» (EET)</a></li><li class="divider">&nbsp;</li><li><a title="Exemples d’activités et apport des technologies dans une approche centrée sur l’étudiant" href="https://sepia.unil.ch/eet/project/enseignement-et-apprentissage-centres-sur-letudiant-exemples-dactivites-et-apport-des-technologies/">Approche centrée sur l’étudiant</a></li><li class="divider">&nbsp;</li><li><a title="Le scénario pédagogique : la trame de chaque projet eLearning" href="https://sepia.unil.ch/eet/documentation/construire-un-scenario-pedagogique/">Scénarios pédagogiques</a></li><li class="divider">&nbsp;</li><li><a title="Quelques outils:" href="#">Quelques outils:</a></li><li><a title="Xerte: un outil qui permet de créer du contenu interactif en intégrant différents types de médias" href="https://sepia.unil.ch/eet/documentation/xerte/">Xerte, pour créer des contenus multimédia</a></li><li><a title="SelfPad, un outil d&#039;initiation à la démarche réflexive" href="https://sepia.unil.ch/eet/documentation/selfpad/">SelfPad, un outil d'initiation à la démarche réflexive</a></li><li><a title="La cartographie conceptuelle, pour apprendre et enseigner" href="https://sepia.unil.ch/eet/project/cartographie_conceptuelle/">La cartographie conceptuelle</a></li><li><a title="Dossier thématique sur la vidéo dans l&#039;enseignement" href="https://sepia.unil.ch/eet/project/video-2/">Travailler avec la vidéo</a></li></ul></ul>                <ul class="nav pull-right">
                    <li></li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<div id="page" class="container-fluid">

    <header id="page-header" class="clearfix"><div class="page-context-header"><div class="page-header-headings"><h1>MoodleUnil</h1></div></div><div class="clearfix" id="page-navbar"><div class="breadcrumb-nav"><span class="accesshide" id="navbar-label">Page path</span><nav aria-labelledby="navbar-label"><ul class="breadcrumb"><li><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a itemprop="url" href="http://moodle.unil.ch/"><span itemprop="title">Home</span></a></span> <span class="divider"> <span class="accesshide " ><span class="arrow_text">/</span>&nbsp;</span><span class="arrow sep">&#x25BA;</span> </span></li><li><span tabindex="0">Log in to the site</span></li></ul></nav></div><div class="breadcrumb-button"></div></div><div id="course-header"></div></header>
    <div id="page-content" class="row-fluid">
        <section id="region-main" class="span12">
            <span class="notifications" id="user-notifications"></span><div role="main"><span id="maincontent"></span><div class="loginbox clearfix onecolumn">


        <h2>Please choose an authentication method,<br />or use the &quot;Guest&quot; button</h2>
        <div class="loginpanel">
        <div class="subcontent">
            <div style="text-align:center;"><h1 style="line-height:1em;"></h1></div><style type="text/css">

    .fixclear {
        clear: both;
    }

    #login-buttons-box {
        width: 600px;
        padding: 10px 20px;
        margin: 0 auto; /*border: dotted 1px #999;*/
    }

    #login-buttons-box > a.odd, #login-buttons-box button.odd {
        float: left;
    }

    #login-buttons-box > a.even, #login-buttons-box button.even {
        float: right;
    }

    #login-buttons-box > a, #login-buttons-box button, #login-buttons-box > a:link, #login-buttons-box > a:visited, #login-buttons-box > a:active, #login-buttons-box > a:hover {
        font-size: 18px;
        display: block;
        width: 200px;
        height: 65px;
        overflow: hidden;
        line-height: 65px;
        text-align: center;
        text-decoration: none;
        color: #0000ff;
        margin: 10px;
        border-radius: 10px;
        outline: none;
    }

    #login-buttons-box > a, #login-buttons-box button {
        border: none;
        background-color: #ececec;
        border: 1px #d6d6d6 solid;
        /*box-shadow: inset -2px -2px 10px rgba(0, 0, 0, 0.5), /!*bottom internal shadow*!/ inset 2px 2px 10px rgba(255, 255, 255, 0.8); /!*top internal highlight*!/*/
        /*background-image: -webkit-gradient(linear, left top, left bottom, from(#E6E6E6), to(#CCCCCC));*/
        /*background-image: -webkit-linear-gradient(top, #E6E6E6, #CCCCCC);*/
        /*background-image: -moz-linear-gradient(top, #E6E6E6, #CCCCCC);*/
    }

    #login-buttons-box > a:hover, #login-buttons-box button:hover {
        background-color: #d6d6d6;
        /*background-image: -webkit-gradient(linear, left top, left bottom, from(#cdcdcd), to(#b3b3b3));*/
        /*background-image: -webkit-linear-gradient(top, #cdcdcd, #b3b3b3);*/
        /*background-image: -moz-linear-gradient(top, #cdcdcd, #b3b3b3);*/
    }

    #login-buttons-box > a.unifr img {
        height: 65px;
        padding: 0;
    }

    #login-buttons-box > a.guest {
        color: #ff0000;
    }

    #login-buttons-box > a img {
        display: block;
        height: 50px;
        margin: 0 auto;
        padding: 7.5px 0;
        vertical-align: middle;
    }

    #login-buttons-box > a span, #login-buttons-box button span {
        display: block;
        height: 37px;
        /*             padding: 25px 0; */
        line-height: 37px;
    }

    #login-buttons-box > a span.line1 {
        font-family: Avenir, "Helvetica Neue", sans-serif;
        font-weight: bold;
        font-size: 18px;
        color: #444;
    }

</style>

<div id="login-buttons-box" class="clearfix">

    <!-- UNIL -->
    <a class="login-button odd" title="Login button for users from Universit&eacute; de Lausanne"        href="https://moodle.unil.ch/Shibboleth.sso/DS?target=https%3A%2F%2Fmoodle.unil.ch%2Fauth%2Fshibboleth%2Findex.php&entityID=https%3A%2F%2Faai.unil.ch%2Fidp%2Fshibboleth">
        <img src="https://moodle.unil.ch/theme/unil/login_logos/unil.svg" alt="Login button for users from Universit&eacute; de Lausanne"/>
    </a>

    <!-- EXTERNE -->
    <a class="login-button even external" title="External user"
       href="https://moodle.unil.ch/login/index.php?ext=1">
        External user    </a>

    <!-- CHUV -->
    <a class="login-button odd chuv" title="Login button for users from Centre Hospitalier Universitaire Vaudois"        href="https://moodle.unil.ch/Shibboleth.sso/DS?target=https%3A%2F%2Fmoodle.unil.ch%2Fauth%2Fshibboleth%2Findex.php&entityID=https%3A%2F%2Fidp.chuv.ch%2Fidp%2Fshibboleth">
        <img src="https://moodle.unil.ch/theme/unil/login_logos/chuv.svg" alt="Login button for users from Centre Hospitalier Universitaire Vaudois"/>
    </a>

    <!-- EPFL -->
    <a class="login-button even epfl" title="Login button for users from Ecole Polytechnique F&eacute;d&eacute;rale de Lausanne"        href="https://moodle.unil.ch/Shibboleth.sso/DS?target=https%3A%2F%2Fmoodle.unil.ch%2Fauth%2Fshibboleth%2Findex.php&entityID=https%3A%2F%2Fidp.epfl.ch%2Fidp%2Fshibboleth">
        <img src="https://moodle.unil.ch/theme/unil/login_logos/epfl.svg" alt="Login button for users from Ecole Polytechnique F&eacute;d&eacute;rale de Lausanne"/>
    </a>

    <!-- UNIFR -->
    <a class="login-button odd unifr" title="Login button for users from Universit&eacute; de Fribourg"        href="https://moodle.unil.ch/Shibboleth.sso/DS?target=https%3A%2F%2Fmoodle.unil.ch%2Fauth%2Fshibboleth%2Findex.php&entityID=https%3A%2F%2Faai.unifr.ch%2Fidp%2Fshibboleth">
        <img src="https://moodle.unil.ch/theme/unil/login_logos/unifr.svg" alt="Login button for users from Universit&eacute; de Fribourg"/>
    </a>

    <!-- UNIGE -->
    <a class="login-button even unige" title="Login button for users from Universit&eacute; de Gen&egrave;ve"        href="https://moodle.unil.ch/Shibboleth.sso/DS?target=https%3A%2F%2Fmoodle.unil.ch%2Fauth%2Fshibboleth%2Findex.php&entityID=https%3A%2F%2Fidp.unige.ch%2Fidp%2Fshibboleth">
        <img src="https://moodle.unil.ch/theme/unil/login_logos/unige.svg" alt="Login button for users from Universit&eacute; de Gen&egrave;ve"/>
    </a>

    <!-- UNINE -->
    <a class="login-button odd unine" title="Login button for users from Universit&eacute; de Neuch&acirc;tel"        href="https://moodle.unil.ch/Shibboleth.sso/DS?target=https%3A%2F%2Fmoodle.unil.ch%2Fauth%2Fshibboleth%2Findex.php&entityID=https%3A%2F%2Faai-login.unine.ch%2Fidp%2Fshibboleth">
        <img src="https://moodle.unil.ch/theme/unil/login_logos/unine.svg" alt="Login button for users from Universit&eacute; de Neuch&acirc;tel"/>
    </a>

    <div style="clear:both; height:20px;"></div>

    <!-- SWITCH -->
    <a class="login-button odd other" title="Other institutions"
       href="https://moodle.unil.ch/auth/shibboleth/index.php">
        <span class="line1">SWITCHaai</span>
        <span class="line2">Other institutions</span>
    </a>

    <!-- GUEST -->
    <form action="index.php" method="post" id="guestlogin">
        <input type="hidden" name="username" value="guest"/>
        <input type="hidden" name="password" value="guest"/>
        <input type="hidden" name="testcookies" value="1"/>
        <!--<input type="submit" onclick="document.location.href=\'https://moodle.unil.ch/login/index.php?ext=1\'" title="'.$guest.'" value="'.$guest.'" style="background-image:url(WAYFnico/WAYFnico/logos/guest.gif); '.$btn_style.' font-size:2em; color:#F00;" />-->
        <!--        <button type="submit" class="login-button even guest" title="--><!--">-->
        <!--            <span>--><!--</span>-->
        <!--        </button>-->
    </form>
    <a class="login-button even guest" onclick="document.forms[0].submit();" title="Guest"
       href="#">
        Guest    </a>

</div>


        </div>
    </div>

</div></div>        </section>
    </div>

    <footer id="page-footer">
        <div id="course-footer"></div>
        <p class="helplink"></p>
        <div class="logininfo">You are not logged in.</div><div class="homelink"><a href="http://moodle.unil.ch/">Home</a></div>    </footer>

    
<!-- jQuery FancyBox -->
<link type="text/css" href="//moodle.unil.ch/filter/fancybox/lib/fancybox/jquery.fancybox.css?v=2.1.4b" rel="stylesheet" />
<script type="text/javascript" src="//moodle.unil.ch/filter/fancybox/lib/fancybox/jquery.fancybox.js?v=2.1.4b"></script>



<script type="text/javascript" src="//moodle.unil.ch/blocks/teacherchoice/duplicate/course-duplicate-ui.js"></script>

<script type="text/javascript">
// afficher les modalités d'utilisation dans une FancyBox
$(document).ready(function(){
  $('a[href*=modalites]').fancybox({'type': 'iframe'});
});
</script>

<script type="text/javascript">

/* tracker pour les liens sortants */
    /* script réf: http://blog.polynet-online.fr/comment-tracker-facilement-ses-liens-sortants-avec-google-analytics.html */

function _gaLt(event){
    var el = event.srcElement || event.target;
     
    /* Loop up the DOM tree through parent elements if clicked element is not a link (eg: an image inside a link) */
    while(el && (typeof el.tagName == 'undefined' || el.tagName.toLowerCase() != 'a' || !el.href)){
        el = el.parentNode;
    }
 
    if(el && el.href){
        if(el.href.indexOf(location.host) == -1){ /* external link */
            /* HitCallback function to either open link in either same or new window */
            var hitBack = function(link, target){
                target ? window.open(link, target) : window.location.href = link;
            };
            var eventcat = 'Outgoing links';
            if ($(el).parents('ul.nav').length) {
                eventcat = 'Dashboard links';
            }
            /* link */
            var link = el.href;
            /* Is target set and not _(self|parent|top)? */
            var target = (el.target && !el.target.match(/^_(self|parent|top)$/i)) ? el.target : false;
            /* send event with callback */
            ga(
                "send", "event", eventcat, link,
                document.location.pathname + document.location.search,
                {"hitCallback": hitBack(link, target)}
            );
 
            /* Prevent standard click */
            event.preventDefault ? event.preventDefault() : event.returnValue = !1;
        }
 
    }
}

/* Attach the event to all clicks in the document after page has loaded */
var w = window;
w.addEventListener ? w.addEventListener("load",function(){document.body.addEventListener("click",_gaLt,!1)},!1)
 : w.attachEvent && w.attachEvent("onload",function(){document.body.attachEvent("onclick",_gaLt)});
 
 
 
 
</script><script type="text/javascript">
//<![CDATA[
var require = {
    baseUrl : 'https://moodle.unil.ch/lib/requirejs.php/1522785678/',
    // We only support AMD modules with an explicit define() statement.
    enforceDefine: true,
    skipDataMain: true,
    waitSeconds : 0,

    paths: {
        jquery: 'https://moodle.unil.ch/lib/javascript.php/1522785678/lib/jquery/jquery-3.1.0.min',
        jqueryui: 'https://moodle.unil.ch/lib/javascript.php/1522785678/lib/jquery/ui-1.12.1/jquery-ui.min',
        jqueryprivate: 'https://moodle.unil.ch/lib/javascript.php/1522785678/lib/requirejs/jquery-private'
    },

    // Custom jquery config map.
    map: {
      // '*' means all modules will get 'jqueryprivate'
      // for their 'jquery' dependency.
      '*': { jquery: 'jqueryprivate' },

      // 'jquery-private' wants the real jQuery module
      // though. If this line was not here, there would
      // be an unresolvable cyclic dependency.
      jqueryprivate: { jquery: 'jquery' }
    }
};

//]]>
</script>
<script type="text/javascript" src="https://moodle.unil.ch/lib/javascript.php/1522785678/lib/requirejs/require.min.js"></script>
<script type="text/javascript">
//<![CDATA[
require(['core/first'], function() {
;
require(["media_videojs/loader"], function(loader) {
    loader.setUp(function(videojs) {
        videojs.options.flash.swf = "http://moodle.unil.ch/media/player/videojs/videojs/video-js.swf";
videojs.addLanguage("en",{
 "Play": "Play",
 "Pause": "Pause",
 "Current Time": "Current Time",
 "Duration Time": "Duration Time",
 "Remaining Time": "Remaining Time",
 "Stream Type": "Stream Type",
 "LIVE": "LIVE",
 "Loaded": "Loaded",
 "Progress": "Progress",
 "Fullscreen": "Fullscreen",
 "Non-Fullscreen": "Non-Fullscreen",
 "Mute": "Mute",
 "Unmute": "Unmute",
 "Playback Rate": "Playback Rate",
 "Subtitles": "Subtitles",
 "subtitles off": "subtitles off",
 "Captions": "Captions",
 "captions off": "captions off",
 "Chapters": "Chapters",
 "Close Modal Dialog": "Close Modal Dialog",
 "Descriptions": "Descriptions",
 "descriptions off": "descriptions off",
 "Audio Track": "Audio Track",
 "You aborted the media playback": "You aborted the media playback",
 "A network error caused the media download to fail part-way.": "A network error caused the media download to fail part-way.",
 "The media could not be loaded, either because the server or network failed or because the format is not supported.": "The media could not be loaded, either because the server or network failed or because the format is not supported.",
 "The media playback was aborted due to a corruption problem or because the media used features your browser did not support.": "The media playback was aborted due to a corruption problem or because the media used features your browser did not support.",
 "No compatible source was found for this media.": "No compatible source was found for this media.",
 "The media is encrypted and we do not have the keys to decrypt it.": "The media is encrypted and we do not have the keys to decrypt it.",
 "Play Video": "Play Video",
 "Close": "Close",
 "Modal Window": "Modal Window",
 "This is a modal window": "This is a modal window",
 "This modal can be closed by pressing the Escape key or activating the close button.": "This modal can be closed by pressing the Escape key or activating the close button.",
 ", opens captions settings dialog": ", opens captions settings dialog",
 ", opens subtitles settings dialog": ", opens subtitles settings dialog",
 ", opens descriptions settings dialog": ", opens descriptions settings dialog",
 ", selected": ", selected"
});

    });
});;

require(['core/yui'], function(Y) {
    M.util.init_skiplink(Y);
});
;

;
require(["core/notification"], function(amd) { amd.init(1, []); });;
require(["core/log"], function(amd) { amd.setConfig({"level":"warn"}); });
});
//]]>
</script>
<script type="text/javascript" src="https://moodle.unil.ch/theme/javascript.php/unil/1522785678/footer"></script>
<script type="text/javascript">
//<![CDATA[
M.str = {"moodle":{"lastmodified":"Last modified","name":"Name","error":"Error","info":"Information","yes":"Yes","no":"No","ok":"OK","cancel":"Cancel","morehelp":"More help","loadinghelp":"Loading...","confirm":"Confirm","areyousure":"Are you sure?","closebuttontitle":"Close","unknownerror":"Unknown error"},"repository":{"type":"Type","size":"Size","invalidjson":"Invalid JSON string","nofilesattached":"No files attached","filepicker":"File picker","logout":"Logout","nofilesavailable":"No files available","norepositoriesavailable":"Sorry, none of your current repositories can return files in the required format.","fileexistsdialogheader":"File exists","fileexistsdialog_editor":"A file with that name has already been attached to the text you are editing.","fileexistsdialog_filemanager":"A file with that name has already been attached","renameto":"Rename to \"{$a}\"","referencesexist":"There are {$a} alias\/shortcut files that use this file as their source","select":"Select"},"admin":{"confirmdeletecomments":"You are about to delete comments, are you sure?","confirmation":"Confirmation"},"block":{"addtodock":"Move this to the dock","undockitem":"Undock this item","dockblock":"Dock {$a} block","undockblock":"Undock {$a} block","undockall":"Undock all","hidedockpanel":"Hide the dock panel","hidepanel":"Hide panel"},"langconfig":{"thisdirectionvertical":"btt"}};
//]]>
</script>
<script type="text/javascript">
//<![CDATA[
(function() {Y.use("moodle-core-dock-loader",function() {M.core.dock.loader.initLoader();
});
Y.use("moodle-filter_mathjaxloader-loader",function() {M.filter_mathjaxloader.configure({"mathjaxconfig":"\n\n\nMathJax.Hub.Config({\n    config: [\"Accessible.js\", \"Safe.js\"],\n    errorSettings: { message: [\"!\"] },\n    skipStartupTypeset: true,\n    messageStyle: \"none\"\n});\n","lang":"en"});
});
Y.use("moodle-filter_glossary-autolinker",function() {M.filter_glossary.init_filter_autolinking({"courseid":0});
});
M.util.help_popups.setup(Y);
Y.use("moodle-core-popuphelp",function() {M.core.init_popuphelp();
});
 M.util.js_pending('random5ae27467af6012'); Y.on('domready', function() { M.util.js_complete("init");  M.util.js_complete('random5ae27467af6012'); });
})();
//]]>
</script>

</div>
</body>
</html>
