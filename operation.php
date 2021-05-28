
<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" lang="English">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Odoo User Documentation &#8212; Odoo 14.0 documentation</title>
    <link rel="stylesheet" href="css/index/_style.css" type="text/css" />
    <link rel="stylesheet" href="css/index/pygments.css" type="text/css" />
    <link rel="stylesheet" href="css/index/accounting.css" type="text/css" />
    <link rel="stylesheet" href="css/index/legal.css" type="text/css" />
 
    <script type="text/javascript" src="_static/documentation_options.js"></script>
    <script type="text/javascript" src="_static/jquery.js"></script>
    <script type="text/javascript" src="_static/underscore.js"></script>
    <script type="text/javascript" src="_static/doctools.js"></script>
    <script type="text/javascript" src="_static/prefixfree.min.js"></script>
    <script type="text/javascript" src="_static/atom.js"></script>
    <script type="text/javascript" src="_static/immutable.js"></script>
    <script type="text/javascript" src="_static/react.min.js"></script>
    <script type="text/javascript" src="_static/accounts.js"></script>
    <script type="text/javascript" src="_static/chart-of-accounts.js"></script>
    <script type="text/javascript" src="_static/entries.js"></script>
    <script type="text/javascript" src="_static/reconciliation.js"></script>
    <script type="text/javascript" src="_static/misc.js"></script>
    <script type="text/javascript" src="_static/inventory.js"></script>
    <script type="text/javascript" src="_static/coa-valuation-continental.js"></script>
    <script type="text/javascript" src="_static/coa-valuation-anglo-saxon.js"></script>
<script type="text/javascript" src="_static/jquery.min.js"></script>
<script type="text/javascript" src="_static/bootstrap.js"></script>
<script type="text/javascript" src="_static/doc.js"></script>
<script type="text/javascript" src="_static/jquery.noconflict.js"></script>
    <link rel="alternate" hreflang="zh" href="https://www.odoo.com/documentation/user/14.0/zh_CN/" />
    <link rel="alternate" hreflang="fr" href="https://www.odoo.com/documentation/user/14.0/fr/" />
    <link rel="alternate" hreflang="es" href="https://www.odoo.com/documentation/user/14.0/es/" />
    <link rel="alternate" hreflang="uk" href="https://www.odoo.com/documentation/user/14.0/uk/" />
    <link rel="alternate" hreflang="x-default" href="https://www.odoo.com/documentation/user/14.0/" />
    <link rel="canonical" href="https://www.odoo.com/documentation/user/14.0/" />
  
    <link rel="index" title="Index" href="genindex.html" />
    <link rel="search" title="Search" href="search.html" />
    <link rel="next" title="Applications" href="applications.html" /> 
  </head><body><header class="o_main_header o_has_sub_nav o_inverted index">
    <div class="o_main_header_main">
      <a class="pull-left " href="/"></a>
      <a href="#" class="o_mobile_menu_toggle visible-xs-block pull-right">
        <span class="sr-only">Toggle navigation</span>
        <span class="mdi-navigation-menu"></span>
      </a>
      <div class="o_header_buttons">
        <a href="http://www.odoo.com/trial" class="btn btn-primary">Start Now</a>
      </div>
      <ul class="o_primary_nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle">Apps</a>
          <div class="dropdown-menu o_secondary_nav">
            <div class="container">
              <div class="row">
                <div class="col-sm-3 o_website_apps">
                  <div class="o_nav_app_family">
                    <span></span> Websites
                    <div>Build great user experience</div>
                  </div>
                  <ul>
                    <li><a href="https://www.odoo.com/page/website-builder">Website Builder</a></li>
                    <li><a href="https://www.odoo.com/page/e-commerce">eCommerce</a></li>
                    <li><a href="https://www.odoo.com/page/blog-engine">Blogs</a></li>
                    <li><a href="https://www.odoo.com/page/community-builder">Forums</a></li>
                    <li><a href="https://www.odoo.com/page/learning-management-system">eLearning</a></li>
                    <li><a href="https://www.odoo.com/page/live-chat">Live Chat</a></li>
                  </ul>
                </div>
                <div class="col-sm-3 o_sale_apps">
                  <div class="o_nav_app_family">
                    <span></span> Sales
                    <div>Boost your success rate</div>
                  </div>
                  <ul>
                    <li><a href="https://www.odoo.com/page/sales">Sales</a></li>
                    <li><a href="https://www.odoo.com/page/crm">CRM</a></li>
                    <li><a href="https://www.odoo.com/page/billing">Invoicing</a></li>
                    <li class="dropdown">
                      <a href="#0" class="dropdown-toggle">Point of Sale</a>
                      <ul>
                        <li><a href="https://www.odoo.com/page/point-of-sale">Shops</a></li>
                        <li><a href="https://www.odoo.com/page/pos-restaurant">Restaurants</a></li>
                        <li><a href="https://www.odoo.com/page/point-of-sale-hardware">Hardware</a></li>
                      </ul>
                    </li>
                    <li><a href="https://www.odoo.com/page/subscriptions">Subscriptions</a></li>
                    <li><a href="https://www.odoo.com/page/sign">Sign</a></li>
                    <li><a href="https://www.odoo.com/page/rental">Rental</a></li>
                  </ul>
                </div>
                <div class="col-sm-3 o_operation_apps">
                  <div class="o_nav_app_family">
                    <span></span> Operations
                    <div>It's all about efficiency</div>
                  </div>
                  <ul>
                    <li><a href="https://www.odoo.com/page/accounting/">Accounting</a></li>
                    <li><a href="https://www.odoo.com/page/project-management/">Project</a></li>
                    <li class="dropdown">
                      <a href="#0" class="dropdown-toggle">Human Resources</a>
                      <ul>
                        <li><a href="https://www.odoo.com/page/referral">Referral</a></li>
                        <li><a href="https://www.odoo.com/page/employees">Employees</a></li>
                        <li><a href="https://www.odoo.com/page/expenses">Expenses</a></li>
                        <li><a href="https://www.odoo.com/page/appraisal">Appraisal</a></li>
                        <li><a href="https://www.odoo.com/page/fleet">Fleet</a></li>
                        <li><a href="https://www.odoo.com/page/leaves">Time Off</a></li>
                      </ul>
                    </li>
                    <li><a href="https://www.odoo.com/page/warehouse">Inventory</a></li>
                    <li><a href="https://www.odoo.com/page/purchase">Purchase</a></li>
                    <li class="dropdown">
                      <a href="#0" class="dropdown-toggle">Manufacturing</a>
                      <ul>
                        <li><a href="https://www.odoo.com/page/manufacturing">MRP</a></li>
                        <li><a href="https://www.odoo.com/page/plm">PLM</a></li>
                        <li><a href="https://www.odoo.com/page/maintenance">Maintenance</a></li>
                        <li><a href="https://www.odoo.com/page/quality">Quality</a></li>
                      </ul>
                    </li>
                    <li><a href="https://www.odoo.com/page/helpdesk">Helpdesk</a></li>
                    <li><a href="https://www.odoo.com/page/field-service-management">Field Service</a></li>
                  </ul>
                </div>
                <div class="col-sm-3 o_productivity_apps">
                  <div class="o_nav_app_family">
                    <span></span> Productivity Tools
                    <div>Great Tools = Happy People</div>
                  </div>
                  <ul>
                    <li class="dropdown">
                      <a href="#0" class="dropdown-toggle">Communication</a>
                      <ul>
                        <li><a href="https://www.odoo.com/page/discuss">Discuss</a></li>
                        <li><a href="https://www.odoo.com/page/discuss-groups">Mailing Lists</a></li>
                        <li><a href="https://www.odoo.com/page/notes">Notes</a></li>
                      </ul>
                    </li>
                    <li><a href="https://www.odoo.com/page/timesheet">Timesheet</a></li>
                    <li><a href="https://www.odoo.com/page/events">Events</a></li>
                    <li class="dropdown">
                      <a href="#0" class="dropdown-toggle">Marketing</a>
                      <ul>
                        <li><a href="https://www.odoo.com/page/marketing-automation">Automation</a></li>
                        <li><a href="https://www.odoo.com/page/email-marketing">Email</a></li>
                        <li><a href="https://www.odoo.com/page/social-marketing">Social</a></li>
                        <li><a href="https://www.odoo.com/page/sms-marketing">SMS</a></li>
                      </ul>
                    </li>
                    <li><a href="https://www.odoo.com/page/survey">Survey</a></li>
                    <li><a href="https://www.odoo.com/page/approval-workflow">Approvals</a></li>
                    <li><a href="https://www.odoo.com/page/appointments">Appointments</a></li>
                    <li><a href="https://www.odoo.com/page/documents">Documents</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <a href="http://www.odoo.com/apps/modules" class="o_store_link"><i class="fa fa-cube fa-fw"></i> Third party apps</a>
          </div>
        </li>
        <li><a href="https://www.odoo.com/page/tour">Tour</a></li>
        <li><a href="https://www.odoo.com/pricing">Pricing</a></li>
        <li><a href="https://www.odoo.com/page/docs">Docs</a></li>
      </ul>
    </div>
    <nav class="navbar o_sub_nav">
      <div class="container">
        <div class="navbar-header visible-xs">
            <button type="button" class="navbar-toggle collapsed text-left btn-block" data-toggle="collapse" data-target="#o_sub-menu" aria-expanded="false">
              Navigate
              <span class="mdi-hardware-keyboard-arrow-down pull-right"></span>
            </button>
        </div>

        <div class="collapse navbar-collapse" id="o_sub-menu">
          <ol class="o_breadcrumb breadcrumb nav navbar-left">
              
              




<script type="text/javascript">$('#searchbox').show(0);</script>
            

            
              <li class="divider"></li>
            
          </ul>

          <ul class="navbar-nav navbar-right nav o_sub_nav_actions">
            

            


            
          </ul>
        </div>
      </div>
    </nav>
  </header><div id="wrap" class="index">
    
    <figure class="card top ">
      <span class="card-img" ></span>
      <div class="container text-center">
        <h1> Gears User Documentation </h1>
      </div>
    </figure>
    
    
    
      <main class="container index">
        
            
  <section id="odoo-user-documentation"><div class="index-tree toctree-wrapper"><div class="toc-section row tutorials"><h2 class="col-sm-12">Applications</h2>
                <div class="col-sm-6 col-md-3">
                <figure class="card">
                    <a href="accountsPayable.php" class="card-img">
                        <span style="background-image: url('_static/banners/general.png')"></span>
                        <figcaption>Accounts Payable</figcaption>
                    </a>
                </figure>
                </div>
                
                <div class="col-sm-6 col-md-3">
                <figure class="card">
                    <a href="discuss.html" class="card-img">
                        <span style="background-image: url('_static/banners/discuss.png')"></span>
                        <figcaption>Discuss</figcaption>
                    </a>
                </figure>
                </div>
                
                <div class="col-sm-6 col-md-3">
                <figure class="card">
                    <a href="crm.html" class="card-img">
                        <span style="background-image: url('_static/banners/crm.png')"></span>
                        <figcaption>CRM</figcaption>
                    </a>
                </figure>
                </div>
                
                <div class="col-sm-6 col-md-3">
                <figure class="card">
                    <a href="sales.html" class="card-img">
                        <span style="background-image: url('_static/banners/sales.png')"></span>
                        <figcaption>Sales</figcaption>
                    </a>
                </figure>
                </div>
                
                <div class="col-sm-6 col-md-3">
                <figure class="card">
                    <a href="purchase.html" class="card-img">
                        <span style="background-image: url('_static/banners/purchase.png')"></span>
                        <figcaption>Purchase</figcaption>
                    </a>
                </figure>
                </div>
                
                <div class="col-sm-6 col-md-3">
                <figure class="card">
                    <a href="accounting.html" class="card-img">
                        <span style="background-image: url('_static/banners/accounting.png')"></span>
                        <figcaption>Invoicing and Accounting</figcaption>
                    </a>
                </figure>
                </div>
                
                <div class="col-sm-6 col-md-3">
                <figure class="card">
                    <a href="subscriptions.html" class="card-img">
                        <span style="background-image: url('_static/banners/subscriptions.png')"></span>
                        <figcaption>Subscriptions</figcaption>
                    </a>
                </figure>
                </div>
                
                <div class="col-sm-6 col-md-3">
                <figure class="card">
                    <a href="project.html" class="card-img">
                        <span style="background-image: url('_static/banners/project.png')"></span>
                        <figcaption>Project</figcaption>
                    </a>
                </figure>
                </div>
                
                <div class="col-sm-6 col-md-3">
                <figure class="card">
                    <a href="timesheets.html" class="card-img">
                        <span style="background-image: url('_static/banners/timesheets.png')"></span>
                        <figcaption>Timesheets</figcaption>
                    </a>
                </figure>
                </div>
                
                <div class="col-sm-6 col-md-3">
                <figure class="card">
                    <a href="fsm.html" class="card-img">
                        <span style="background-image: url('_static/banners/fsm.png')"></span>
                        <figcaption>Field Service</figcaption>
                    </a>
                </figure>
                </div>
                
                <div class="col-sm-6 col-md-3">
                <figure class="card">
                    <a href="sign.html" class="card-img">
                        <span style="background-image: url('_static/banners/sign.png')"></span>
                        <figcaption>Sign</figcaption>
                    </a>
                </figure>
                </div>
                
                <div class="col-sm-6 col-md-3">
                <figure class="card">
                    <a href="point_of_sale.html" class="card-img">
                        <span style="background-image: url('_static/banners/pos.png')"></span>
                        <figcaption>Point of Sale</figcaption>
                    </a>
                </figure>
                </div>
                
                <div class="col-sm-6 col-md-3">
                <figure class="card">
                    <a href="inventory.html" class="card-img">
                        <span style="background-image: url('_static/banners/inventory.png')"></span>
                        <figcaption>Inventory</figcaption>
                    </a>
                </figure>
                </div>
                
                <div class="col-sm-6 col-md-3">
                <figure class="card">
                    <a href="manufacturing.html" class="card-img">
                        <span style="background-image: url('_static/banners/manufacturing.png')"></span>
                        <figcaption>Manufacturing</figcaption>
                    </a>
                </figure>
                </div>
                
                <div class="col-sm-6 col-md-3">
                <figure class="card">
                    <a href="iot.html" class="card-img">
                        <span style="background-image: url('_static/banners/iot.png')"></span>
                        <figcaption>Internet of Things (IoT)</figcaption>
                    </a>
                </figure>
                </div>
                
                <div class="col-sm-6 col-md-3">
                <figure class="card">
                    <a href="website.html" class="card-img">
                        <span style="background-image: url('_static/banners/seo.png')"></span>
                        <figcaption>Website</figcaption>
                    </a>
                </figure>
                </div>
                
                <div class="col-sm-6 col-md-3">
                <figure class="card">
                    <a href="ecommerce.html" class="card-img">
                        <span style="background-image: url('_static/banners/ecommerce.png')"></span>
                        <figcaption>eCommerce</figcaption>
                    </a>
                </figure>
                </div>
                
                <div class="col-sm-6 col-md-3">
                <figure class="card">
                    <a href="helpdesk.html" class="card-img">
                        <span style="background-image: url('_static/banners/helpdesk.png')"></span>
                        <figcaption>Helpdesk</figcaption>
                    </a>
                </figure>
                </div>
                
                <div class="col-sm-6 col-md-3">
                <figure class="card">
                    <a href="live_chat.html" class="card-img">
                        <span style="background-image: url('_static/banners/livechat.png')"></span>
                        <figcaption>Live Chat</figcaption>
                    </a>
                </figure>
                </div>
                
                <div class="col-sm-6 col-md-3">
                <figure class="card">
                    <a href="sms_marketing.html" class="card-img">
                        <span style="background-image: url('_static/banners/sms.png')"></span>
                        <figcaption>SMS Marketing</figcaption>
                    </a>
                </figure>
                </div>
                
                <div class="col-sm-6 col-md-3">
                <figure class="card">
                    <a href="marketing_automation.html" class="card-img">
                        <span style="background-image: url('_static/banners/marketing_automation.png')"></span>
                        <figcaption>Marketing Automation</figcaption>
                    </a>
                </figure>
                </div>
                
                <div class="col-sm-6 col-md-3">
                <figure class="card">
                    <a href="survey.html" class="card-img">
                        <span style="background-image: url('_static/banners/survey.png')"></span>
                        <figcaption>Survey</figcaption>
                    </a>
                </figure>
                </div>
                
                <div class="col-sm-6 col-md-3">
                <figure class="card">
                    <a href="expense/expense.html" class="card-img">
                        <span style="background-image: url('_static/banners/expense.png')"></span>
                        <figcaption>Expenses</figcaption>
                    </a>
                </figure>
                </div>
                
                <div class="col-sm-6 col-md-3">
                <figure class="card">
                    <a href="studio.html" class="card-img">
                        <span style="background-image: url('_static/banners/studio.png')"></span>
                        <figcaption>Studio</figcaption>
                    </a>
                </figure>
                </div>
                
                <div class="col-sm-6 col-md-3">
                <figure class="card">
                    <a href="mobile/firebase.html" class="card-img">
                        <span style="background-image: url('_static/banners/mobile.png')"></span>
                        <figcaption>Mobile</figcaption>
                    </a>
                </figure>
                </div>
                </div><div class="toc-section row tutorials"><h2 class="col-sm-12">Practical Information</h2>
                <div class="col-sm-6 col-md-3">
                <figure class="card">
                    <a href="getting_started/documentation.html" class="card-img">
                        <span style="background-image: url('_static/banners/getting_started.png')"></span>
                        <figcaption>Basics of the QuickStart Methodology</figcaption>
                    </a>
                </figure>
                </div>
                
                <div class="col-sm-6 col-md-3">
                <figure class="card">
                    <a href="odoo_sh/documentation.html" class="card-img">
                        <span style="background-image: url('_static/banners/odoo_sh.png')"></span>
                        <figcaption>Odoo.sh</figcaption>
                    </a>
                </figure>
                </div>
                
                <div class="col-sm-6 col-md-3">
                <figure class="card">
                    <a href="db_management/documentation.html" class="card-img">
                        <span style="background-image: url('_static/banners/users.png')"></span>
                        <figcaption>Users and Features</figcaption>
                    </a>
                </figure>
                </div>
                
                <div class="col-sm-6 col-md-3">
                <figure class="card">
                    <a href="db_management/db_online.html" class="card-img">
                        <span style="background-image: url('_static/banners/db_online.png')"></span>
                        <figcaption>Online Database management</figcaption>
                    </a>
                </figure>
                </div>
                
                <div class="col-sm-6 col-md-3">
                <figure class="card">
                    <a href="db_management/db_premise.html" class="card-img">
                        <span style="background-image: url('_static/banners/db_premise.png')"></span>
                        <figcaption>On-premises Database management</figcaption>
                    </a>
                </figure>
                </div>
                
                <div class="col-sm-6 col-md-3">
                <figure class="card">
                    <a href="db_management/hosting_changes.html" class="card-img">
                        <span style="background-image: url('_static/banners/hosting_changes.png')"></span>
                        <figcaption>Hosting Changes</figcaption>
                    </a>
                </figure>
                </div>
                
                <div class="col-sm-6 col-md-3">
                <figure class="card">
                    <a href="db_management/db_upgrade.html" class="card-img">
                        <span style="background-image: url('_static/banners/db-upgrade.png')"></span>
                        <figcaption>Upgrade</figcaption>
                    </a>
                </figure>
                </div>
                
                <div class="col-sm-6 col-md-3">
                <figure class="card">
                    <a href="portal/my_odoo_portal.html" class="card-img">
                        <span style="background-image: url('_static/banners/my_odoo_portal.png')"></span>
                        <figcaption>My Gears Portal</figcaption>
                    </a>
                </figure>
                </div>
                
                <div class="col-sm-6 col-md-3">
                <figure class="card">
                    <a href="support.html" class="card-img">
                        <span style="background-image: url('_static/banners/support.png')"></span>
                        <figcaption>Support</figcaption>
                    </a>
                </figure>
                </div>
                
                <div class="col-sm-6 col-md-3">
                <figure class="card">
                    <a href="legal.html" class="card-img">
                        <span style="background-image: url('_static/banners/legal.png')"></span>
                        <figcaption>Legal</figcaption>
                    </a>
                </figure>
                </div>
                
                <div class="col-sm-6 col-md-3">
                <figure class="card">
                    <a href="contributing.html" class="card-img">
                        <span style="background-image: url('_static/banners/contributing.png')"></span>
                        <figcaption>Contributing</figcaption>
                    </a>
                </figure>
                </div>
                </div></div></section>

          
        <div id="mask"></div>
      </main>
  </div>

  <div class="floating_action_container">
    <a id="floating_action" class="ripple" href="#">
      <i class="mdi-action-explore"></i>
    </a>
    <div id="floating_action_menu">
      <span class="bubble"></span>
      <ul class="list-group content">
        <li class="list-group-item ripple"><a>Cras justo odio</a></li>
        <li class="list-group-item ripple"><a>Dapibus ac facilisis in</a></li>
        <li class="list-group-item ripple"><a>Morbi leo risus</a></li>
        <li class="list-group-item ripple"><a>Porta ac consectetur ac</a></li>
        <li class="list-group-item ripple"><a>Vestibulum at eros</a></li>
      </ul>
    </div>
  </div>
  <footer>
    <div id="footer" class="container">
      <span class=" o_logo_inverse center-block o_footer_logo"></span>
      <div class="row">
        <div class="col-sm-7 col-md-7 col-lg-6">
          <div class="row">
            <div class="col-xs-6 col-sm-4">
              <span class="menu_title">Community</span>
              <ul>
                <li><a href="https://github.com/odoo/odoo">Github</a></li>
                <li><a href="http://www.odoo.com/page/download">Download</a></li>
                <li class="divider"></li>
                <li><a href="http://runbot.odoo.com/runbot/repo/git-github-com-odoo-enterprise-7">Runbot</a></li>
                <li><a href="https://github.com/odoo/odoo/wiki/Translations">Translations</a></li>
                <li class="divider"></li>
                <li><a href="http://www.odoo.com/page/odoo-community">Mailing Lists</a></li>
                <li><a href="http://www.odoo.com/forum/help-1">Forum</a></li>
              </ul>
            </div>
            <div class="col-xs-6 col-sm-4">
              <span class="menu_title">Services</span>
              <ul>
                <li><a href="https://www.odoo.sh">Gears Cloud Platform</a></li>
                <li class="divider"></li>
                <li><a href="http://www.odoo.com/help">Support</a></li>
                <li><a href="https://upgrade.odoo.com">Upgrade</a></li>
                <li class="divider"></li>
                <li><a href="http://www.odoo.com/partners">Find a partner</a></li>
                <li><a href="http://www.odoo.com/page/become-a-partner">Become a partner</a></li>
                <li class="divider"></li>
                <li><a href="http://training.odoo.com/courses/odoo-functional">Training Center</a></li>
                <li><a href="http://www.odoo.com/page/education-program">Education</a></li>
                <li class="divider"></li>
                <li><a href="http://www.odoo.com/page/security">Security</a></li>
              </ul>
            </div>
            <div class="col-xs-12 col-sm-4 mb64">
              <span class="menu_title">About us</span>
              <ul>
                <li><a href="http://www.odoo.com/page/about-us">Our company</a></li>
                <li><a href="http://www.odoo.com/page/contactus">Contact</a></li>
                <li class="divider" />
                <li><a href="http://www.odoo.com/event">Events</a></li>
                <li><a href="http://www.odoo.com/blog">Blog</a></li>
                <li><a href="http://www.odoo.com/blog/6">Customers</a></li>
                <li class="divider" />
                <li><a href="http://www.odoo.com/jobs">Jobs</a></li>
                <li class="divider" />
                <li><a href="http://www.odoo.com/page/legal">Legal</a> | <a href="http://www.odoo.com/privacy">Privacy</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-sm-5 col-md-4 col-md-offset-1 col-lg-5 col-lg-offset-1">
          <p>
            <small>
              Gears is a suite of open source business apps that cover all your company needs: CRM, eCommerce, accounting, inventory, point of sale, project management, etc.
              <br/><br/>
              Gears's unique value proposition is to be at the same time very easy to use and fully integrated.
            </small>
          </p>
        </div>
      </div>
    </div>
    <div class="o_footer_bottom">
      <div class="container">
        <a class="small" href="http://www.odoo.com/page/website-builder">Website made with <span class=" o_logo_inverse o_logo_15"></span></a>
        <div class="social-links pull-right">
          <a href="http://www.odoo.com/web/about/facebook"><i class="fa fa-facebook"></i></a>
          <a href="http://www.odoo.com/web/about/twitter"><i class="fa fa-twitter"></i></a>
          <a href="http://www.odoo.com/web/about/linkedin"><i class="fa fa-linkedin"></i></a>
          <a href="mailto:info@odoo.com"><i class="fa fa-envelope"></i></a>
        </div>
      </div>
    </div>
  </footer><script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-52174891-1', 'auto');
    ga('set', 'anonymizeIp', true);
    ga('send','pageview');
    </script>
  </body>
</html>