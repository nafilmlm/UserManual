
<!DOCTYPE html>

<html lang="English">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" /><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width, initial-scale=1">
    <title>General &#8212; Gears 14.0 documentation</title>
 

    <link rel="stylesheet" href="_static/pygments.css" type="text/css" />
    <link rel="stylesheet" href="_static/style.css" type="text/css" />
    
    
    <script id="documentation_options" data-url_root="../" src="../_static/documentation_options.js"></script>
    <script src="../_static/jquery.js"></script>
    <script src="../_static/underscore.js"></script>
    <script src="../_static/doctools.js"></script>
    <script src="../_static/utils.js"></script>
    <script src="../_static/layout.js"></script>
    <script src="../_static/menu.js"></script>
    <script src="../_static/page_toc.js"></script>
    <script src="../_static/switcher.js"></script> 
    <script src="../_static/bootstrap.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
        crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="../_static/favicon.ico"/>
        <link rel="alternate" hreflang="zh" href="../applications/general.php" />
        <link rel="alternate" hreflang="fr" href="../applications/general.php" />
        <link rel="alternate" hreflang="es" href="../applications/general.php" />
        <link rel="alternate" hreflang="uk" href="../applications/general.php" />
    <link rel="canonical" href="../applications/general.php" />
    
    <link rel="index" title="Index" href="../genindex.html" />
    <link rel="search" title="Search" href="../search.html" />
    <link rel="next" title="Basics" href="general/odoo_basics.html" />
    <link rel="prev" title="Users and Features" href="settings/users_and_features.html" /> 

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
  .sidenav {
  height: 100%;
  width: 200px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  padding-top: 20px;
}

/* Style the sidenav links and the dropdown button */
.sidenav a, .dropdown-btn {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 20px;
  color: #818181;
  display: block;
  border: none;
  background: none;
  width:100%;
  text-align: left;
  cursor: pointer;
  outline: none;
}

/* On mouse-over */
.sidenav a:hover, .dropdown-btn:hover {
  color: #f1f1f1;
}

/* Main content */
.main {
  margin-left: 200px; /* Same as the width of the sidenav */
  font-size: 20px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}

/* Add an active class to the active dropdown button */
.active {
  background-color: green;
  color: white;
}

/* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
.dropdown-container {
  display: none;
  background-color: #262626;
  padding-left: 8px;
}

/* Optional: Style the caret down icon */
.fa-caret-down {
  float: right;
  padding-right: 8px;
}

  </style>

  </head><body>

        <nav class="o_side_nav border-end" >

        <div class="sidenav">
  <a href="#about">About</a>
  <a href="#services">Services</a>
  <a href="#clients">Clients</a>
  <a href="#contact">Contact</a>
  <button class="dropdown-btn">Dropdown
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="#">Link 1</a>
    <a href="#">Link 2</a>
    <a href="#">Link 3</a>
  </div>
  <a href="#contact">Search</a>
</div>


    </nav>
    <header class="o_main_header border-bottom navbar navbar-light navbar-expand-lg"><div class="o_logo_wrapper">
      <a href="../index.html" class="o_logo">
          <img src="../_static/img/logos/.svg" height="20" alt="Gears"/>
          <span>docs</span>
      </a>
</div>
<div id="searchbox" class="o_search_wrapper flex-grow-1 pe-lg-2" role="search">
    <form class="o_search" action="../search.html" method="get">
        <input type="text" name="q" id="q" class="form-control rounded-pill" placeholder="What are you looking for?">
        <input type="hidden" name="area" value="default">
        <input type="hidden" name="check_keywords" value="yes">
        <button type="submit" class="btn"><i class="i-search"></i></button>
    </form>
</div>
<script type="text/javascript">$('.o_search_wrapper').show(0);</script>
<div class="d-none d-lg-flex"><div class="o_languages me-3">
	<div class="dropdown">
            <button class="btn border dropdown-toggle"
                    id="languages"
                    data-bs-toggle="dropdown">
                English 
            </button>
        <ul class="dropdown-menu" aria-labelledby="languages">
                <li><a class="dropdown-item" href="https://www.odoo.com/documentation/14.0/zh_CN/applications/general.html">简体中文</a></li>
                <li><a class="dropdown-item" href="https://www.odoo.com/documentation/14.0/fr/applications/general.html">Français</a></li>
                <li><a class="dropdown-item" href="https://www.odoo.com/documentation/14.0/es/applications/general.html">Español</a></li>
                <li><a class="dropdown-item" href="https://www.odoo.com/documentation/14.0/uk/applications/general.html">українська</a></li>
        </ul>
	</div>
</div><div class="o_versions row gx-2 me-3">
	<div class="col col-form-label">
    	<label class="fw_bold small me-2">Version</label>
    </div>
    <div class="col">
        <div class="dropdown">
                <button class="btn border dropdown-toggle"
                        id="versions"
                        data-bs-toggle="dropdown">
                    14.0 
                </button>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="versions">
                    <li><a class="dropdown-item" href="https://www.odoo.com/documentation/13.0/applications/general.html">13.0</a></li>
                    <li><a class="dropdown-item" href="https://www.odoo.com/documentation/12.0/applications/general.html">12.0</a></li>
            </ul>
        </div>
    </div>
</div>
    <a class="btn btn-primary fw_semibold" href="https://odoo.com/trial">Try Gears for FREE</a>
</div>
        <button class="navbar-toggler pe-3 border-0" type="button" data-bs-toggle="collapse" data-bs-target="#o_main_toctree" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </header>
    <div class="related" role="navigation" aria-label="related navigation">
      <h3>Navigation</h3>
      <ul>
        <li class="right" style="margin-right: 10px">
          <a href="../genindex.html" title="General Index"
             accesskey="I">index</a></li>
        <li class="right" >
          <a href="../py-modindex.html" title="Python Module Index"
             >modules</a> |</li>
        <li class="right" >
          <a href="general/odoo_basics.html" title="Basics"
             accesskey="N">next</a> |</li>
        <li class="right" >
          <a href="settings/users_and_features.html" title="Users and Features"
             accesskey="P">previous</a> |</li>
        <li class="nav-item nav-item-0"><a href="../index.html">Odoo 14.0 documentation</a> &#187;</li>
          <li class="nav-item nav-item-1"><a href="../applications.html" accesskey="U">Applications</a> &#187;</li>
        <li class="nav-item nav-item-this"><a href="">General</a></li> 
      </ul>
    </div>
    <div id="wrap">

        <main class="container-fluid ">
                <article id="o_content" class="doc-body">
                    <div role="main"> 
  <section id="general">
<h1>General<a class="headerlink" href="#general" title="Permalink to this headline">¶</a></h1>
<div class="toctree-wrapper compound">
<ul>
<li class="toctree-l1 o_menu_general_odoo_basics"><a class="reference internal" href="#">Basics</a><ul>
<li class="toctree-l2 o_menu_general_odoo_basics_choose_language"><a class="reference internal" href="#">Manage Odoo in your own language</a><ul>
<li class="toctree-l3 o_menu_general_odoo_basics_choose_language#load-your-desired-language"><a class="reference internal" href="general/odoo_basics/choose_language.html#load-your-desired-language">Load your desired language</a></li>
<li class="toctree-l3 o_menu_general_odoo_basics_choose_language#change-your-language"><a class="reference internal" href="general/odoo_basics/choose_language.html#change-your-language">Change your language</a></li>
<li class="toctree-l3 o_menu_general_odoo_basics_choose_language#change-another-user-s-language"><a class="reference internal" href="general/odoo_basics/choose_language.html#change-another-user-s-language">Change another user’s language</a></li>
</ul>
</li>
<li class="toctree-l2 o_menu_general_odoo_basics_users"><a class="reference internal" href="#">Users and Access Rights</a><ul>
<li class="toctree-l3 o_menu_general_odoo_basics_users#add-individual-users"><a class="reference internal" href="general/odoo_basics/users.html#add-individual-users">Add individual users</a></li>
<li class="toctree-l3 o_menu_general_odoo_basics_users#passwords-management"><a class="reference internal" href="#">Passwords management</a><ul>
<li class="toctree-l4 o_menu_general_odoo_basics_users#reset-passwords"><a class="reference internal" href="#">Reset passwords</a><ul>
<li class="toctree-l5 o_menu_general_odoo_basics_users#enable-password-resets-from-login-page"><a class="reference internal" href="general/odoo_basics/users.html#enable-password-resets-from-login-page">Enable password resets from login page</a></li>
<li class="toctree-l5 o_menu_general_odoo_basics_users#send-reset-instructions-to-users"><a class="reference internal" href="general/odoo_basics/users.html#send-reset-instructions-to-users">Send reset instructions to users</a></li>
</ul>
</li>
<li class="toctree-l4 o_menu_general_odoo_basics_users#change-users-passwords"><a class="reference internal" href="general/odoo_basics/users.html#change-users-passwords">Change users’ passwords</a></li>
</ul>
</li>
<li class="toctree-l3 o_menu_general_odoo_basics_users#access-rights-in-detail"><a class="reference internal" href="#">Access Rights in detail</a><ul>
<li class="toctree-l4 o_menu_general_odoo_basics_users#groups"><a class="reference internal" href="general/odoo_basics/users.html#groups">Groups</a></li>
</ul>
</li>
<li class="toctree-l3 o_menu_general_odoo_basics_users#multi-companies"><a class="reference internal" href="general/odoo_basics/users.html#multi-companies">Multi Companies</a></li>
</ul>
</li>
<li class="toctree-l2 o_menu_general_odoo_basics_export-data"><a class="reference internal" href="general/odoo_basics/export-data.html">Export Data From Odoo</a></li>
</ul>
</li>
<li class="toctree-l1 o_menu_general_unsplash"><a class="reference internal" href="#">Unsplash</a><ul>
<li class="toctree-l2 o_menu_general_unsplash_unsplash_access_key"><a class="reference internal" href="#">How to generate an Unsplash access key</a><ul>
<li class="toctree-l3 o_menu_general_unsplash_unsplash_access_key#generate-an-unsplash-access-key-for-non-saas-users"><a class="reference internal" href="general/unsplash/unsplash_access_key.html#generate-an-unsplash-access-key-for-non-saas-users">Generate an Unsplash access key for <strong>non-Saas</strong> users</a></li>
</ul>
</li>
<li class="toctree-l2 o_menu_general_unsplash_unsplash_application_id"><a class="reference internal" href="general/unsplash/unsplash_application_id.html">How to generate an Unsplash application ID</a></li>
</ul>
</li>
<li class="toctree-l1 o_menu_general_base_import"><a class="reference internal" href="#">Data Import</a><ul>
<li class="toctree-l2 o_menu_general_base_import_adapt_template"><a class="reference internal" href="#">How to adapt an import template</a><ul>
<li class="toctree-l3 o_menu_general_base_import_adapt_template#how-to-customize-the-file"><a class="reference internal" href="general/base_import/adapt_template.html#how-to-customize-the-file">How to customize the file</a></li>
<li class="toctree-l3 o_menu_general_base_import_adapt_template#why-an-id-column"><a class="reference internal" href="general/base_import/adapt_template.html#why-an-id-column">Why an “ID” column</a></li>
<li class="toctree-l3 o_menu_general_base_import_adapt_template#how-to-import-relation-fields"><a class="reference internal" href="general/base_import/adapt_template.html#how-to-import-relation-fields">How to import relation fields</a></li>
</ul>
</li>
<li class="toctree-l2 o_menu_general_base_import_import_faq"><a class="reference internal" href="#">Import data</a><ul>
<li class="toctree-l3 o_menu_general_base_import_import_faq#how-to-start"><a class="reference internal" href="general/base_import/import_faq.html#how-to-start">How to start</a></li>
<li class="toctree-l3 o_menu_general_base_import_import_faq#how-to-adapt-the-template"><a class="reference internal" href="general/base_import/import_faq.html#how-to-adapt-the-template">How to adapt the template</a></li>
<li class="toctree-l3 o_menu_general_base_import_import_faq#how-to-import-from-another-application"><a class="reference internal" href="general/base_import/import_faq.html#how-to-import-from-another-application">How to import from another application</a></li>
<li class="toctree-l3 o_menu_general_base_import_import_faq#i-cannot-find-the-field-i-want-to-map-my-column-to"><a class="reference internal" href="general/base_import/import_faq.html#i-cannot-find-the-field-i-want-to-map-my-column-to">I cannot find the field I want to map my column to</a></li>
<li class="toctree-l3 o_menu_general_base_import_import_faq#where-can-i-change-the-date-import-format"><a class="reference internal" href="general/base_import/import_faq.html#where-can-i-change-the-date-import-format">Where can I change the date import format?</a></li>
<li class="toctree-l3 o_menu_general_base_import_import_faq#can-i-import-numbers-with-currency-sign-e-g-32-00"><a class="reference internal" href="general/base_import/import_faq.html#can-i-import-numbers-with-currency-sign-e-g-32-00">Can I import numbers with currency sign (e.g.: $32.00)?</a></li>
<li class="toctree-l3 o_menu_general_base_import_import_faq#what-can-i-do-when-the-import-preview-table-isn-t-displayed-correctly"><a class="reference internal" href="general/base_import/import_faq.html#what-can-i-do-when-the-import-preview-table-isn-t-displayed-correctly">What can I do when the Import preview table isn’t displayed correctly?</a></li>
<li class="toctree-l3 o_menu_general_base_import_import_faq#how-can-i-change-the-csv-file-format-options-when-saving-in-my-spreadsheet-application"><a class="reference internal" href="general/base_import/import_faq.html#how-can-i-change-the-csv-file-format-options-when-saving-in-my-spreadsheet-application">How can I change the CSV file format options when saving in my spreadsheet application?</a></li>
<li class="toctree-l3 o_menu_general_base_import_import_faq#what-s-the-difference-between-database-id-and-external-id"><a class="reference internal" href="general/base_import/import_faq.html#what-s-the-difference-between-database-id-and-external-id">What’s the difference between Database ID and External ID?</a></li>
<li class="toctree-l3 o_menu_general_base_import_import_faq#what-can-i-do-if-i-have-multiple-matches-for-a-field"><a class="reference internal" href="general/base_import/import_faq.html#what-can-i-do-if-i-have-multiple-matches-for-a-field">What can I do if I have multiple matches for a field?</a></li>
<li class="toctree-l3 o_menu_general_base_import_import_faq#how-can-i-import-a-many2many-relationship-field-e-g-a-customer-that-has-multiple-tags"><a class="reference internal" href="general/base_import/import_faq.html#how-can-i-import-a-many2many-relationship-field-e-g-a-customer-that-has-multiple-tags">How can I import a many2many relationship field (e.g. a customer that has multiple tags)?</a></li>
<li class="toctree-l3 o_menu_general_base_import_import_faq#how-can-i-import-a-one2many-relationship-e-g-several-order-lines-of-a-sales-order"><a class="reference internal" href="general/base_import/import_faq.html#how-can-i-import-a-one2many-relationship-e-g-several-order-lines-of-a-sales-order">How can I import a one2many relationship (e.g. several Order Lines of a Sales Order)?</a></li>
<li class="toctree-l3 o_menu_general_base_import_import_faq#can-i-import-several-times-the-same-record"><a class="reference internal" href="general/base_import/import_faq.html#can-i-import-several-times-the-same-record">Can I import several times the same record?</a></li>
<li class="toctree-l3 o_menu_general_base_import_import_faq#what-happens-if-i-do-not-provide-a-value-for-a-specific-field"><a class="reference internal" href="general/base_import/import_faq.html#what-happens-if-i-do-not-provide-a-value-for-a-specific-field">What happens if I do not provide a value for a specific field?</a></li>
<li class="toctree-l3 o_menu_general_base_import_import_faq#how-to-export-import-different-tables-from-an-sql-application-to-odoo"><a class="reference internal" href="general/base_import/import_faq.html#how-to-export-import-different-tables-from-an-sql-application-to-odoo">How to export/import different tables from an SQL application to Odoo?</a></li>
</ul>
</li>
</ul>
</li>
<li class="toctree-l1 o_menu_general_multi_companies"><a class="reference internal" href="#">Multi Companies</a><ul>
<li class="toctree-l2 o_menu_general_multi_companies_manage_multi_companies"><a class="reference internal" href="#">Multi Companies</a><ul>
<li class="toctree-l3 o_menu_general_multi_companies_manage_multi_companies#manage-companies-and-records"><a class="reference internal" href="general/multi_companies/manage_multi_companies.html#manage-companies-and-records">Manage companies and records</a></li>
<li class="toctree-l3 o_menu_general_multi_companies_manage_multi_companies#employees-access"><a class="reference internal" href="general/multi_companies/manage_multi_companies.html#employees-access">Employees’ access</a></li>
<li class="toctree-l3 o_menu_general_multi_companies_manage_multi_companies#documents-format"><a class="reference internal" href="general/multi_companies/manage_multi_companies.html#documents-format">Documents’ format</a></li>
<li class="toctree-l3 o_menu_general_multi_companies_manage_multi_companies#inter-company-transactions"><a class="reference internal" href="general/multi_companies/manage_multi_companies.html#inter-company-transactions">Inter-Company Transactions</a></li>
</ul>
</li>
</ul>
</li>
<li class="toctree-l1 o_menu_general_auth"><a class="reference internal" href="#">Authentication</a><ul>
<li class="toctree-l2 o_menu_general_auth_google"><a class="reference internal" href="general/auth/google.html">How to allow users to sign in with their Google account</a></li>
<li class="toctree-l2 o_menu_general_auth_google_spreadsheets"><a class="reference internal" href="#">How to use Google Spreadsheet in Addition to my Data?</a><ul>
<li class="toctree-l3 o_menu_general_auth_google_spreadsheets#configuration"><a class="reference internal" href="#">Configuration</a><ul>
<li class="toctree-l4 o_menu_general_auth_google_spreadsheets#create-a-new-spreadsheet"><a class="reference internal" href="general/auth/google_spreadsheets.html#create-a-new-spreadsheet">Create a new Spreadsheet</a></li>
<li class="toctree-l4 o_menu_general_auth_google_spreadsheets#link-a-spreadsheet-with-odoo"><a class="reference internal" href="general/auth/google_spreadsheets.html#link-a-spreadsheet-with-odoo">Link a Spreadsheet with Odoo</a></li>
</ul>
</li>
<li class="toctree-l3 o_menu_general_auth_google_spreadsheets#applications"><a class="reference internal" href="#">Applications</a><ul>
<li class="toctree-l4 o_menu_general_auth_google_spreadsheets#retrieve-data"><a class="reference internal" href="general/auth/google_spreadsheets.html#retrieve-data">Retrieve Data</a></li>
<li class="toctree-l4 o_menu_general_auth_google_spreadsheets#retrieve-grouped-sums"><a class="reference internal" href="general/auth/google_spreadsheets.html#retrieve-grouped-sums">Retrieve Grouped Sums</a></li>
<li class="toctree-l4 o_menu_general_auth_google_spreadsheets#other-uses"><a class="reference internal" href="general/auth/google_spreadsheets.html#other-uses">Other uses</a></li>
</ul>
</li>
</ul>
</li>
<li class="toctree-l2 o_menu_general_auth_azure"><a class="reference internal" href="general/auth/azure.html">OAuth</a></li>
<li class="toctree-l2 o_menu_general_auth_ldap"><a class="reference internal" href="general/auth/ldap.html">How to allow users to sign in with LDAP</a></li>
<li class="toctree-l2 o_menu_general_auth_2fa"><a class="reference internal" href="#">Two-factor Authentication</a><ul>
<li class="toctree-l3 o_menu_general_auth_2fa#requirements"><a class="reference internal" href="general/auth/2fa.html#requirements">Requirements</a></li>
<li class="toctree-l3 o_menu_general_auth_2fa#setting-up-two-factor-authentication"><a class="reference internal" href="general/auth/2fa.html#setting-up-two-factor-authentication">Setting up two-factor authentication</a></li>
<li class="toctree-l3 o_menu_general_auth_2fa#logging-in"><a class="reference internal" href="general/auth/2fa.html#logging-in">Logging in</a></li>
</ul>
</li>
</ul>
</li>
<li class="toctree-l1 o_menu_general_payment_acquirers"><a class="reference internal" href="#">Payment Acquirers</a><ul>
<li class="toctree-l2 o_menu_general_payment_acquirers_payment_acquirers"><a class="reference internal" href="#">Payment Acquirers (Credit Cards, Online Payment)</a><ul>
<li class="toctree-l3 o_menu_general_payment_acquirers_payment_acquirers#payment-acquirers"><a class="reference internal" href="#">Payment Acquirers</a><ul>
<li class="toctree-l4 o_menu_general_payment_acquirers_payment_acquirers#bank-payments"><a class="reference internal" href="general/payment_acquirers/payment_acquirers.html#bank-payments">Bank Payments</a></li>
<li class="toctree-l4 o_menu_general_payment_acquirers_payment_acquirers#online-payment-providers"><a class="reference internal" href="general/payment_acquirers/payment_acquirers.html#online-payment-providers">Online Payment Providers</a></li>
</ul>
</li>
<li class="toctree-l3 o_menu_general_payment_acquirers_payment_acquirers#configuration"><a class="reference internal" href="#">Configuration</a><ul>
<li class="toctree-l4 o_menu_general_payment_acquirers_payment_acquirers#add-a-new-payment-acquirer"><a class="reference internal" href="#">Add a new Payment Acquirer</a><ul>
<li class="toctree-l5 o_menu_general_payment_acquirers_payment_acquirers#credentials-tab"><a class="reference internal" href="general/payment_acquirers/payment_acquirers.html#credentials-tab">Credentials tab</a></li>
<li class="toctree-l5 o_menu_general_payment_acquirers_payment_acquirers#configuration-tab"><a class="reference internal" href="#">Configuration tab</a><ul>
<li class="toctree-l6 o_menu_general_payment_acquirers_payment_acquirers#save-and-reuse-credit-cards"><a class="reference internal" href="general/payment_acquirers/payment_acquirers.html#save-and-reuse-credit-cards">Save and reuse Credit Cards</a></li>
<li class="toctree-l6 o_menu_general_payment_acquirers_payment_acquirers#place-a-hold-on-a-card"><a class="reference internal" href="general/payment_acquirers/payment_acquirers.html#place-a-hold-on-a-card">Place a hold on a card</a></li>
<li class="toctree-l6 o_menu_general_payment_acquirers_payment_acquirers#payment-flow"><a class="reference internal" href="general/payment_acquirers/payment_acquirers.html#payment-flow">Payment Flow</a></li>
<li class="toctree-l6 o_menu_general_payment_acquirers_payment_acquirers#countries"><a class="reference internal" href="general/payment_acquirers/payment_acquirers.html#countries">Countries</a></li>
<li class="toctree-l6 o_menu_general_payment_acquirers_payment_acquirers#payment-journal"><a class="reference internal" href="general/payment_acquirers/payment_acquirers.html#payment-journal">Payment Journal</a></li>
</ul>
</li>
<li class="toctree-l5 o_menu_general_payment_acquirers_payment_acquirers#messages-tab"><a class="reference internal" href="general/payment_acquirers/payment_acquirers.html#messages-tab">Messages tab</a></li>
</ul>
</li>
</ul>
</li>
<li class="toctree-l3 o_menu_general_payment_acquirers_payment_acquirers#accounting-perspective"><a class="reference internal" href="general/payment_acquirers/payment_acquirers.html#accounting-perspective">Accounting perspective</a></li>
</ul>
</li>
<li class="toctree-l2 o_menu_general_payment_acquirers_wire_transfer"><a class="reference internal" href="#">How to get paid with wire transfers</a><ul>
<li class="toctree-l3 o_menu_general_payment_acquirers_wire_transfer#how-to-provide-customers-with-payment-instructions"><a class="reference internal" href="general/payment_acquirers/wire_transfer.html#how-to-provide-customers-with-payment-instructions">How to provide customers with payment instructions</a></li>
<li class="toctree-l3 o_menu_general_payment_acquirers_wire_transfer#how-to-manage-an-order-once-you-get-paid"><a class="reference internal" href="general/payment_acquirers/wire_transfer.html#how-to-manage-an-order-once-you-get-paid">How to manage an order once you get paid</a></li>
<li class="toctree-l3 o_menu_general_payment_acquirers_wire_transfer#how-to-create-other-manual-payment-methods"><a class="reference internal" href="general/payment_acquirers/wire_transfer.html#how-to-create-other-manual-payment-methods">How to create other manual payment methods</a></li>
</ul>
</li>
<li class="toctree-l2 o_menu_general_payment_acquirers_authorize"><a class="reference internal" href="#">Authorize.Net</a><ul>
<li class="toctree-l3 o_menu_general_payment_acquirers_authorize#authorize-net-account"><a class="reference internal" href="general/payment_acquirers/authorize.html#authorize-net-account">Authorize.Net account</a></li>
<li class="toctree-l3 o_menu_general_payment_acquirers_authorize#payment-acquirer-configuration"><a class="reference internal" href="#">Payment Acquirer Configuration</a><ul>
<li class="toctree-l4 o_menu_general_payment_acquirers_authorize#credentials"><a class="reference internal" href="general/payment_acquirers/authorize.html#credentials">Credentials</a></li>
<li class="toctree-l4 o_menu_general_payment_acquirers_authorize#payment-flow"><a class="reference internal" href="general/payment_acquirers/authorize.html#payment-flow">Payment Flow</a></li>
<li class="toctree-l4 o_menu_general_payment_acquirers_authorize#capture-the-payment-after-the-delivery"><a class="reference internal" href="general/payment_acquirers/authorize.html#capture-the-payment-after-the-delivery">Capture the payment after the delivery</a></li>
</ul>
</li>
</ul>
</li>
<li class="toctree-l2 o_menu_general_payment_acquirers_paypal"><a class="reference internal" href="#">Configure your Paypal account</a><ul>
<li class="toctree-l3 o_menu_general_payment_acquirers_paypal#paypal-account"><a class="reference internal" href="general/payment_acquirers/paypal.html#paypal-account">Paypal account</a></li>
<li class="toctree-l3 o_menu_general_payment_acquirers_paypal#settings-in-paypal"><a class="reference internal" href="#">Settings in Paypal</a><ul>
<li class="toctree-l4 o_menu_general_payment_acquirers_paypal#auto-return"><a class="reference internal" href="general/payment_acquirers/paypal.html#auto-return">Auto Return</a></li>
<li class="toctree-l4 o_menu_general_payment_acquirers_paypal#payment-data-transfer-pdt"><a class="reference internal" href="general/payment_acquirers/paypal.html#payment-data-transfer-pdt">Payment Data Transfer (PDT)</a></li>
<li class="toctree-l4 o_menu_general_payment_acquirers_paypal#instant-payment-notification-ipn"><a class="reference internal" href="general/payment_acquirers/paypal.html#instant-payment-notification-ipn">Instant Payment Notification (IPN)</a></li>
<li class="toctree-l4 o_menu_general_payment_acquirers_paypal#payment-messages-format"><a class="reference internal" href="general/payment_acquirers/paypal.html#payment-messages-format">Payment Messages Format</a></li>
</ul>
</li>
<li class="toctree-l3 o_menu_general_payment_acquirers_paypal#settings-in-odoo"><a class="reference internal" href="#">Settings in Odoo</a><ul>
<li class="toctree-l4 o_menu_general_payment_acquirers_paypal#activation"><a class="reference internal" href="general/payment_acquirers/paypal.html#activation">Activation</a></li>
<li class="toctree-l4 o_menu_general_payment_acquirers_paypal#credentials"><a class="reference internal" href="general/payment_acquirers/paypal.html#credentials">Credentials</a></li>
<li class="toctree-l4 o_menu_general_payment_acquirers_paypal#transaction-fees"><a class="reference internal" href="general/payment_acquirers/paypal.html#transaction-fees">Transaction fees</a></li>
</ul>
</li>
<li class="toctree-l3 o_menu_general_payment_acquirers_paypal#go-live"><a class="reference internal" href="general/payment_acquirers/paypal.html#go-live">Go live!</a></li>
<li class="toctree-l3 o_menu_general_payment_acquirers_paypal#test-environment"><a class="reference internal" href="general/payment_acquirers/paypal.html#test-environment">Test environment</a></li>
</ul>
</li>
<li class="toctree-l2 o_menu_general_payment_acquirers_stripe"><a class="reference internal" href="#">Stripe</a><ul>
<li class="toctree-l3 o_menu_general_payment_acquirers_stripe#enable-local-payment-methods"><a class="reference internal" href="general/payment_acquirers/stripe.html#enable-local-payment-methods">Enable Local Payment Methods</a></li>
</ul>
</li>
</ul>
</li>
<li class="toctree-l1 o_menu_general_voip"><a class="reference internal" href="#">VoIP (Voice over Internet Protocol)</a><ul>
<li class="toctree-l2 o_menu_general_voip_asterisk"><a class="reference internal" href="#">Configure your VoIP Asterisk server for Odoo</a><ul>
<li class="toctree-l3 o_menu_general_voip_asterisk#installing-asterisk-server"><a class="reference internal" href="#">Installing Asterisk server</a><ul>
<li class="toctree-l4 o_menu_general_voip_asterisk#dependencies"><a class="reference internal" href="general/voip/asterisk.html#dependencies">Dependencies</a></li>
<li class="toctree-l4 o_menu_general_voip_asterisk#asterisk"><a class="reference internal" href="general/voip/asterisk.html#asterisk">Asterisk</a></li>
<li class="toctree-l4 o_menu_general_voip_asterisk#dtls-certificates"><a class="reference internal" href="general/voip/asterisk.html#dtls-certificates">DTLS Certificates</a></li>
</ul>
</li>
<li class="toctree-l3 o_menu_general_voip_asterisk#configure-asterisk-server"><a class="reference internal" href="general/voip/asterisk.html#configure-asterisk-server">Configure Asterisk server</a></li>
<li class="toctree-l3 o_menu_general_voip_asterisk#configure-odoo-voip"><a class="reference internal" href="general/voip/asterisk.html#configure-odoo-voip">Configure Odoo VOIP</a></li>
</ul>
</li>
<li class="toctree-l2 o_menu_general_voip_onsip"><a class="reference internal" href="#">Use VoIP services in Odoo with OnSIP</a><ul>
<li class="toctree-l3 o_menu_general_voip_onsip#introduction"><a class="reference internal" href="general/voip/onsip.html#introduction">Introduction</a></li>
<li class="toctree-l3 o_menu_general_voip_onsip#configuration"><a class="reference internal" href="general/voip/onsip.html#configuration">Configuration</a></li>
<li class="toctree-l3 o_menu_general_voip_onsip#onsip-on-your-cell-phone"><a class="reference internal" href="general/voip/onsip.html#onsip-on-your-cell-phone">OnSIP on Your Cell Phone</a></li>
</ul>
</li>
<li class="toctree-l2 o_menu_general_voip_axivox"><a class="reference internal" href="#">Use VoIP services in Odoo with Axivox</a><ul>
<li class="toctree-l3 o_menu_general_voip_axivox#introduction"><a class="reference internal" href="general/voip/axivox.html#introduction">Introduction</a></li>
<li class="toctree-l3 o_menu_general_voip_axivox#configuration"><a class="reference internal" href="general/voip/axivox.html#configuration">Configuration</a></li>
<li class="toctree-l3 o_menu_general_voip_axivox#phone-calls"><a class="reference internal" href="general/voip/axivox.html#phone-calls">Phone Calls</a></li>
</ul>
</li>
</ul>
</li>
<li class="toctree-l1 o_menu_general_calendars"><a class="reference internal" href="#">Calendars</a><ul>
<li class="toctree-l2 o_menu_general_calendars_outlook_outlook_calendar"><a class="reference internal" href="#">Synchronization with Outlook’s Calendar</a><ul>
<li class="toctree-l3 o_menu_general_calendars_outlook_outlook_calendar#register-your-application-with-the-microsoft-identity-platform"><a class="reference internal" href="general/calendars/outlook/outlook_calendar.html#register-your-application-with-the-microsoft-identity-platform">Register your application with the Microsoft identity platform</a></li>
<li class="toctree-l3 o_menu_general_calendars_outlook_outlook_calendar#configuration-in-odoo"><a class="reference internal" href="general/calendars/outlook/outlook_calendar.html#configuration-in-odoo">Configuration in Odoo</a></li>
<li class="toctree-l3 o_menu_general_calendars_outlook_outlook_calendar#sync-with-outlook"><a class="reference internal" href="general/calendars/outlook/outlook_calendar.html#sync-with-outlook">Sync with Outlook</a></li>
</ul>
</li>
<li class="toctree-l2 o_menu_general_calendars_google_google_calendar_credentials"><a class="reference internal" href="#">Synchronize Google Calendar with Odoo</a><ul>
<li class="toctree-l3 o_menu_general_calendars_google_google_calendar_credentials#setup-in-google"><a class="reference internal" href="general/calendars/google/google_calendar_credentials.html#setup-in-google">Setup in Google</a></li>
<li class="toctree-l3 o_menu_general_calendars_google_google_calendar_credentials#setup-in-odoo"><a class="reference internal" href="general/calendars/google/google_calendar_credentials.html#setup-in-odoo">Setup in Odoo</a></li>
</ul>
</li>
</ul>
</li>
<li class="toctree-l1 o_menu_general_in_app_purchase"><a class="reference internal" href="#">In-App Purchase</a><ul>
<li class="toctree-l2 o_menu_general_in_app_purchase_in_app_purchase"><a class="reference internal" href="#">General guide about In-App Purchase (IAP) Services</a><ul>
<li class="toctree-l3 o_menu_general_in_app_purchase_in_app_purchase#buying-credits"><a class="reference internal" href="general/in_app_purchase/in_app_purchase.html#buying-credits">Buying Credits</a></li>
<li class="toctree-l3 o_menu_general_in_app_purchase_in_app_purchase#iap-accounts"><a class="reference internal" href="general/in_app_purchase/in_app_purchase.html#iap-accounts">IAP accounts</a></li>
<li class="toctree-l3 o_menu_general_in_app_purchase_in_app_purchase#iap-portal"><a class="reference internal" href="general/in_app_purchase/in_app_purchase.html#iap-portal">IAP Portal</a></li>
<li class="toctree-l3 o_menu_general_in_app_purchase_in_app_purchase#get-notified-when-credits-are-low"><a class="reference internal" href="general/in_app_purchase/in_app_purchase.html#get-notified-when-credits-are-low">Get notified when credits are low</a></li>
<li class="toctree-l3 o_menu_general_in_app_purchase_in_app_purchase#iap-services-available"><a class="reference internal" href="general/in_app_purchase/in_app_purchase.html#iap-services-available">IAP services available</a></li>
<li class="toctree-l3 o_menu_general_in_app_purchase_in_app_purchase#offering-my-own-services"><a class="reference internal" href="general/in_app_purchase/in_app_purchase.html#offering-my-own-services">Offering my own services</a></li>
</ul>
</li>
</ul>
</li>
<li class="toctree-l1 o_menu_general_developer_mode"><a class="reference internal" href="#">Developer Mode</a><ul>
<li class="toctree-l2 o_menu_general_developer_mode_activate"><a class="reference internal" href="#">Activate the Developer (Debug) Mode</a><ul>
<li class="toctree-l3 o_menu_general_developer_mode_activate#through-the-settings-application"><a class="reference internal" href="general/developer_mode/activate.html#through-the-settings-application">Through the Settings application</a></li>
<li class="toctree-l3 o_menu_general_developer_mode_activate#through-a-browser-extension"><a class="reference internal" href="general/developer_mode/activate.html#through-a-browser-extension">Through a browser extension</a></li>
<li class="toctree-l3 o_menu_general_developer_mode_activate#through-the-url"><a class="reference internal" href="general/developer_mode/activate.html#through-the-url">Through the URL</a></li>
<li class="toctree-l3 o_menu_general_developer_mode_activate#locate-the-mode-tools"><a class="reference internal" href="general/developer_mode/activate.html#locate-the-mode-tools">Locate the mode tools</a></li>
</ul>
</li>
</ul>
</li>
<li class="toctree-l1 o_menu_general_mobile"><a class="reference internal" href="#">Mobile</a><ul>
<li class="toctree-l2 o_menu_general_mobile#push-notifications"><a class="reference internal" href="general/mobile.html#push-notifications">Push Notifications</a></li>
</ul>
</li>
</ul>
</div>
</section>

                    </div>
                        <a href="https://github.com/odoo/documentation/edit/14.0/content/applications/general.rst"
                           class="o_git_link d-none d-lg-inline-block">
                            <i class="i-edit"></i> Edit on GitHub
                        </a>
                </article>
        </main>
            <aside id="o_page_toc" class="o_page_toc"><div class="o_page_toc_nav mt-1">
    <h3>On this page</h3>
    <ul>
<li><a class="reference internal" href="#">General</a></li>
</ul>
 
</div>
            </aside>
    </div>
    <footer><div class="o_get_help container-fluid d-lg-flex">
    <div class="col-12 col-lg-10">
        <h5><i class="i-o-help me-2"></i>Get Help</h5>
        <div>
            <a href="https://odoo.com/help" target="_blank" class="btn btn-outline-secondary mb-2">Contact Support</a>
            <a href="https://www.odoo.com/forum/help-1" target="_blank" class="btn btn-outline-secondary mb-2">Ask the Odoo Community</a>
        </div>
    </div>
    <div class="col-12 col-lg-2 mt-5 mt-lg-0 text-center">
        <a class="o_logo" href="https://www.odoo.com">
            <img src="../_static/img/logos/.svg" height="20" alt="Gears"/>
        </a>
    </div>
</div>
    </footer>
    <div class="related" role="navigation" aria-label="related navigation">
      <h3>Navigation</h3>
      <ul>
        <li class="right" style="margin-right: 10px">
          <a href="../genindex.html" title="General Index"
             >index</a></li>
        <li class="right" >
          <a href="../py-modindex.html" title="Python Module Index"
             >modules</a> |</li>
        <li class="right" >
          <a href="general/odoo_basics.html" title="Basics"
             >next</a> |</li>
        <li class="right" >
          <a href="settings/users_and_features.html" title="Users and Features"
             >previous</a> |</li>
        <li class="nav-item nav-item-0"><a href="../index.html">Odoo 14.0 documentation</a> &#187;</li>
          <li class="nav-item nav-item-1"><a href="../applications.html" >Applications</a> &#187;</li>
        <li class="nav-item nav-item-this"><a href="">General</a></li> 
      </ul>
    </div><script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-52174891-1', 'auto');
    ga('set', 'anonymizeIp', true);
    ga('send','pageview');
</script>

<script>
//* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}
</script>

<script>
$('btn').click(function(){
  $('selector').removeClass('caret-right').addClass('caret-down');
});
</script>

<script>

</script>

  </body>
</html>