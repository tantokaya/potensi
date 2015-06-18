<div class="breadcrumbs" id="breadcrumbs">
    <ul class="breadcrumb">
        <li>
            <i class="icon-home home-icon"></i>
            <a href="#">Home</a>

							<span class="divider">
								<i class="icon-angle-right arrow-icon"></i>
							</span>
        </li>
        <li class="active">Dashboard</li>
    </ul><!--.breadcrumb-->

    <div class="nav-search" id="nav-search">
        <form class="form-search" />
							<span class="input-icon">
								<input type="text" placeholder="Search ..." class="input-small nav-search-input" id="nav-search-input" autocomplete="off" />
								<i class="icon-search nav-search-icon"></i>
							</span>
        </form>
    </div><!--#nav-search-->
</div>

<div class="page-content">
<div class="page-header position-relative">
    <h1>
        <?php echo $judul_halaman; ?>
        <small>
            <i class="icon-double-angle-right"></i>
            overview &amp; stats
        </small>
    </h1>
</div><!--/.page-header-->

<div class="row-fluid">
<div class="span12">
<!--PAGE CONTENT BEGINS-->

<div class="alert alert-block alert-success">
    <button type="button" class="close" data-dismiss="alert">
        <i class="icon-remove"></i>
    </button>

    <i class="icon-ok green"></i>

    Selamat datang di
    <strong class="green">
        <?php echo $nama_aplikasi;  ?>
        <small>(v1.1.0)</small>
    </strong>
    ,
    Aplikasi Telusur Inovasi.
</div>

<div class="space-6"></div>

<div class="row-fluid">
    <div class="span7 infobox-container">
        <div class="infobox infobox-green  ">
            <div class="infobox-icon">
                <i class="icon-comments"></i>
            </div>

            <div class="infobox-data">
                <span class="infobox-data-number">32</span>
                <div class="infobox-content">comments + 2 reviews</div>
            </div>
            <div class="stat stat-success">8%</div>
        </div>

        <div class="infobox infobox-blue  ">
            <div class="infobox-icon">
                <i class="icon-twitter"></i>
            </div>

            <div class="infobox-data">
                <span class="infobox-data-number">11</span>
                <div class="infobox-content">new followers</div>
            </div>

            <div class="badge badge-success">
                +32%
                <i class="icon-arrow-up"></i>
            </div>
        </div>

        <div class="infobox infobox-pink  ">
            <div class="infobox-icon">
                <i class="icon-shopping-cart"></i>
            </div>

            <div class="infobox-data">
                <span class="infobox-data-number">8</span>
                <div class="infobox-content">new orders</div>
            </div>
            <div class="stat stat-important">+4%</div>
        </div>

        <div class="infobox infobox-red  ">
            <div class="infobox-icon">
                <i class="icon-beaker"></i>
            </div>

            <div class="infobox-data">
                <span class="infobox-data-number">7</span>
                <div class="infobox-content">experiments</div>
            </div>
        </div>

        <div class="infobox infobox-orange2  ">
            <div class="infobox-chart">
                <span class="sparkline" data-values="196,128,202,177,154,94,100,170,224"></span>
            </div>

            <div class="infobox-data">
                <span class="infobox-data-number">6,251</span>
                <div class="infobox-content">pageviews</div>
            </div>

            <div class="badge badge-success">
                7.2%
                <i class="icon-arrow-up"></i>
            </div>
        </div>

        <div class="infobox infobox-blue2  ">
            <div class="infobox-progress">
                <div class="easy-pie-chart percentage" data-percent="42" data-size="46">
                    <span class="percent">42</span>
                    %
                </div>
            </div>

            <div class="infobox-data">
                <span class="infobox-text">traffic used</span>

                <div class="infobox-content">
                    <span class="bigger-110">~</span>
                    58GB remaining
                </div>
            </div>
        </div>

        <div class="space-6"></div>

        <div class="infobox infobox-green infobox-small infobox-dark">
            <div class="infobox-progress">
                <div class="easy-pie-chart percentage" data-percent="61" data-size="39">
                    <span class="percent">61</span>
                    %
                </div>
            </div>

            <div class="infobox-data">
                <div class="infobox-content">Task</div>
                <div class="infobox-content">Completion</div>
            </div>
        </div>

        <div class="infobox infobox-blue infobox-small infobox-dark">
            <div class="infobox-chart">
                <span class="sparkline" data-values="3,4,2,3,4,4,2,2"></span>
            </div>

            <div class="infobox-data">
                <div class="infobox-content">Earnings</div>
                <div class="infobox-content">$32,000</div>
            </div>
        </div>

        <div class="infobox infobox-grey infobox-small infobox-dark">
            <div class="infobox-icon">
                <i class="icon-download-alt"></i>
            </div>

            <div class="infobox-data">
                <div class="infobox-content">Downloads</div>
                <div class="infobox-content">1,205</div>
            </div>
        </div>
    </div>

    <div class="vspace"></div>

    <div class="span5">
        <div class="widget-box">
            <div class="widget-header widget-header-flat widget-header-small">
                <h5>
                    <i class="icon-signal"></i>
                    Traffic Sources
                </h5>

                <div class="widget-toolbar no-border">
                    <button class="btn btn-minier btn-primary dropdown-toggle" data-toggle="dropdown">
                        This Week
                        <i class="icon-angle-down icon-on-right"></i>
                    </button>

                    <ul class="dropdown-menu dropdown-info pull-right dropdown-caret">
                        <li class="active">
                            <a href="#">This Week</a>
                        </li>

                        <li>
                            <a href="#">Last Week</a>
                        </li>

                        <li>
                            <a href="#">This Month</a>
                        </li>

                        <li>
                            <a href="#">Last Month</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="widget-body">
                <div class="widget-main">
                    <div id="piechart-placeholder"></div>

                    <div class="hr hr8 hr-double"></div>

                    <div class="clearfix">
                        <div class="grid3">
														<span class="grey">
															<i class="icon-facebook-sign icon-2x blue"></i>
															&nbsp; likes
														</span>
                            <h4 class="bigger pull-right">1,255</h4>
                        </div>

                        <div class="grid3">
														<span class="grey">
															<i class="icon-twitter-sign icon-2x purple"></i>
															&nbsp; tweets
														</span>
                            <h4 class="bigger pull-right">941</h4>
                        </div>

                        <div class="grid3">
														<span class="grey">
															<i class="icon-pinterest-sign icon-2x red"></i>
															&nbsp; pins
														</span>
                            <h4 class="bigger pull-right">1,050</h4>
                        </div>
                    </div>
                </div><!--/widget-main-->
            </div><!--/widget-body-->
        </div><!--/widget-box-->
    </div><!--/span-->
</div><!--/row-->

<div class="hr hr32 hr-dotted"></div>

<div class="row-fluid">
<div class="span6">
<div class="widget-box transparent" id="recent-box">
<div class="widget-header">
    <h4 class="lighter smaller">
        <i class="icon-rss orange"></i>
        RECENT
    </h4>

    <div class="widget-toolbar no-border">
        <ul class="nav nav-tabs" id="recent-tab">
            <li class="active">
                <a data-toggle="tab" href="#task-tab">Tasks</a>
            </li>

            <li>
                <a data-toggle="tab" href="#member-tab">Members</a>
            </li>

            <li>
                <a data-toggle="tab" href="#comment-tab">Comments</a>
            </li>
        </ul>
    </div>
</div>

<div class="widget-body">
<div class="widget-main padding-4">
<div class="tab-content padding-8 overflow-visible">
<div id="task-tab" class="tab-pane active">
    <h4 class="smaller lighter green">
        <i class="icon-list"></i>
        Sortable Lists
    </h4>

    <ul id="tasks" class="item-list">
        <li class="item-orange clearfix">
            <label class="inline">
                <input type="checkbox" />
                <span class="lbl"> Answering customer questions</span>
            </label>

            <div class="pull-right easy-pie-chart percentage" data-size="30" data-color="#ECCB71" data-percent="42">
                <span class="percent">42</span>
                %
            </div>
        </li>

        <li class="item-red clearfix">
            <label class="inline">
                <input type="checkbox" />
                <span class="lbl"> Fixing bugs</span>
            </label>

            <div class="pull-right action-buttons">
                <a href="#" class="blue">
                    <i class="icon-pencil bigger-130"></i>
                </a>

                <span class="vbar"></span>

                <a href="#" class="red">
                    <i class="icon-trash bigger-130"></i>
                </a>

                <span class="vbar"></span>

                <a href="#" class="green">
                    <i class="icon-flag bigger-130"></i>
                </a>
            </div>
        </li>

        <li class="item-default clearfix">
            <label class="inline">
                <input type="checkbox" />
                <span class="lbl"> Adding new features</span>
            </label>

            <div class="inline pull-right position-relative">
                <button class="btn btn-minier bigger btn-primary dropdown-toggle" data-toggle="dropdown">
                    <i class="icon-cog icon-only bigger-120"></i>
                </button>

                <ul class="dropdown-menu dropdown-icon-only dropdown-yellow pull-right dropdown-caret dropdown-close">
                    <li>
                        <a href="#" class="tooltip-success" data-rel="tooltip" title="Mark&nbsp;as&nbsp;done">
																				<span class="green">
																					<i class="icon-ok bigger-110"></i>
																				</span>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																				<span class="red">
																					<i class="icon-trash bigger-110"></i>
																				</span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>

        <li class="item-blue clearfix">
            <label class="inline">
                <input type="checkbox" />
                <span class="lbl"> Upgrading scripts used in template</span>
            </label>
        </li>

        <li class="item-grey clearfix">
            <label class="inline">
                <input type="checkbox" />
                <span class="lbl"> Adding new skins</span>
            </label>
        </li>

        <li class="item-green clearfix">
            <label class="inline">
                <input type="checkbox" />
                <span class="lbl"> Updating server software up</span>
            </label>
        </li>

        <li class="item-pink clearfix">
            <label class="inline">
                <input type="checkbox" />
                <span class="lbl"> Cleaning up</span>
            </label>
        </li>
    </ul>
</div>

<div id="member-tab" class="tab-pane">
<div class="clearfix">
<div class="itemdiv memberdiv">
    <div class="user">
        <img alt="Bob Doe's avatar" src="assets/avatars/user.jpg" />
    </div>

    <div class="body">
        <div class="name">
            <a href="#">Bob Doe</a>
        </div>

        <div class="time">
            <i class="icon-time"></i>
            <span class="green">20 min</span>
        </div>

        <div>
            <span class="label label-warning">pending</span>

            <div class="inline position-relative">
                <button class="btn btn-minier bigger btn-yellow dropdown-toggle" data-toggle="dropdown">
                    <i class="icon-angle-down icon-only bigger-120"></i>
                </button>

                <ul class="dropdown-menu dropdown-icon-only dropdown-yellow pull-right dropdown-caret dropdown-close">
                    <li>
                        <a href="#" class="tooltip-success" data-rel="tooltip" title="Approve">
																						<span class="green">
																							<i class="icon-ok bigger-110"></i>
																						</span>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="tooltip-warning" data-rel="tooltip" title="Reject">
																						<span class="orange">
																							<i class="icon-remove bigger-110"></i>
																						</span>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																						<span class="red">
																							<i class="icon-trash bigger-110"></i>
																						</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="itemdiv memberdiv">
    <div class="user">
        <img alt="Joe Doe's avatar" src="assets/avatars/avatar2.png" />
    </div>

    <div class="body">
        <div class="name">
            <a href="#">Joe Doe</a>
        </div>

        <div class="time">
            <i class="icon-time"></i>
            <span class="green">1 hour</span>
        </div>

        <div>
            <span class="label label-warning">pending</span>

            <div class="inline position-relative">
                <button class="btn btn-minier bigger btn-yellow dropdown-toggle" data-toggle="dropdown">
                    <i class="icon-angle-down icon-only bigger-120"></i>
                </button>

                <ul class="dropdown-menu dropdown-icon-only dropdown-yellow pull-right dropdown-caret dropdown-close">
                    <li>
                        <a href="#" class="tooltip-success" data-rel="tooltip" title="Approve">
																						<span class="green">
																							<i class="icon-ok bigger-110"></i>
																						</span>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="tooltip-warning" data-rel="tooltip" title="Reject">
																						<span class="orange">
																							<i class="icon-remove bigger-110"></i>
																						</span>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																						<span class="red">
																							<i class="icon-trash bigger-110"></i>
																						</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="itemdiv memberdiv">
    <div class="user">
        <img alt="Jim Doe's avatar" src="assets/avatars/avatar.png" />
    </div>

    <div class="body">
        <div class="name">
            <a href="#">Jim Doe</a>
        </div>

        <div class="time">
            <i class="icon-time"></i>
            <span class="green">2 hour</span>
        </div>

        <div>
            <span class="label label-warning">pending</span>

            <div class="inline position-relative">
                <button class="btn btn-minier bigger btn-yellow dropdown-toggle" data-toggle="dropdown">
                    <i class="icon-angle-down icon-only bigger-120"></i>
                </button>

                <ul class="dropdown-menu dropdown-icon-only dropdown-yellow pull-right dropdown-caret dropdown-close">
                    <li>
                        <a href="#" class="tooltip-success" data-rel="tooltip" title="Approve">
																						<span class="green">
																							<i class="icon-ok bigger-110"></i>
																						</span>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="tooltip-warning" data-rel="tooltip" title="Reject">
																						<span class="orange">
																							<i class="icon-remove bigger-110"></i>
																						</span>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																						<span class="red">
																							<i class="icon-trash bigger-110"></i>
																						</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="itemdiv memberdiv">
    <div class="user">
        <img alt="Alex Doe's avatar" src="<?php echo base_url(); ?>assets/avatars/avatar5.png" />
    </div>

    <div class="body">
        <div class="name">
            <a href="#">Alex Doe</a>
        </div>

        <div class="time">
            <i class="icon-time"></i>
            <span class="green">3 hour</span>
        </div>

        <div>
            <span class="label label-important">blocked</span>
        </div>
    </div>
</div>

<div class="itemdiv memberdiv">
    <div class="user">
        <img alt="Bob Doe's avatar" src="<?php echo base_url(); ?>assets/avatars/avatar2.png" />
    </div>

    <div class="body">
        <div class="name">
            <a href="#">Bob Doe</a>
        </div>

        <div class="time">
            <i class="icon-time"></i>
            <span class="green">6 hour</span>
        </div>

        <div>
            <span class="label label-success arrowed-in">approved</span>
        </div>
    </div>
</div>

<div class="itemdiv memberdiv">
    <div class="user">
        <img alt="Susan's avatar" src="<?php echo base_url(); ?>assets/avatars/avatar3.png" />
    </div>

    <div class="body">
        <div class="name">
            <a href="#">Susan</a>
        </div>

        <div class="time">
            <i class="icon-time"></i>
            <span class="green">yesterday</span>
        </div>

        <div>
            <span class="label label-success arrowed-in">approved</span>
        </div>
    </div>
</div>

<div class="itemdiv memberdiv">
    <div class="user">
        <img alt="Phil Doe's avatar" src="<?php echo base_url(); ?>assets/avatars/avatar4.png" />
    </div>

    <div class="body">
        <div class="name">
            <a href="#">Phil Doe</a>
        </div>

        <div class="time">
            <i class="icon-time"></i>
            <span class="green">2 days ago</span>
        </div>

        <div>
            <span class="label label-info arrowed-in  arrowed-in-right">online</span>
        </div>
    </div>
</div>

<div class="itemdiv memberdiv">
    <div class="user">
        <img alt="Alexa Doe's avatar" src="<?php echo base_url(); ?>assets/avatars/avatar1.png" />
    </div>

    <div class="body">
        <div class="name">
            <a href="#">Alexa Doe</a>
        </div>

        <div class="time">
            <i class="icon-time"></i>
            <span class="green">3 days ago</span>
        </div>

        <div>
            <span class="label label-success arrowed-in">approved</span>
        </div>
    </div>
</div>
</div>

<div class="center">
    <i class="icon-group icon-2x green"></i>

    &nbsp;
    <a href="#">
        See all members &nbsp;
        <i class="icon-arrow-right"></i>
    </a>
</div>

<div class="hr hr-double hr8"></div>
</div><!--member-tab-->

<div id="comment-tab" class="tab-pane">
    <div class="comments">
        <div class="itemdiv commentdiv">
            <div class="user">
                <img alt="Bob Doe's Avatar" src="<?php echo base_url(); ?>assets/avatars/avatar.png" />
            </div>

            <div class="body">
                <div class="name">
                    <a href="#">Bob Doe</a>
                </div>

                <div class="time">
                    <i class="icon-time"></i>
                    <span class="green">6 min</span>
                </div>

                <div class="text">
                    <i class="icon-quote-left"></i>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo massa sed ipsum porttitor facilisis &hellip;
                </div>
            </div>

            <div class="tools">
                <div class="inline position-relative">
                    <button class="btn btn-minier bigger btn-yellow dropdown-toggle" data-toggle="dropdown">
                        <i class="icon-angle-down icon-only bigger-120"></i>
                    </button>

                    <ul class="dropdown-menu dropdown-icon-only dropdown-yellow pull-right dropdown-caret dropdown-close">
                        <li>
                            <a href="#" class="tooltip-success" data-rel="tooltip" title="Approve">
																					<span class="green">
																						<i class="icon-ok bigger-110"></i>
																					</span>
                            </a>
                        </li>

                        <li>
                            <a href="#" class="tooltip-warning" data-rel="tooltip" title="Reject">
																					<span class="orange">
																						<i class="icon-remove bigger-110"></i>
																					</span>
                            </a>
                        </li>

                        <li>
                            <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																					<span class="red">
																						<i class="icon-trash bigger-110"></i>
																					</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="itemdiv commentdiv">
            <div class="user">
                <img alt="Jennifer's Avatar" src="<?php echo base_url(); ?>assets/avatars/avatar1.png" />
            </div>

            <div class="body">
                <div class="name">
                    <a href="#">Jennifer</a>
                </div>

                <div class="time">
                    <i class="icon-time"></i>
                    <span class="blue">15 min</span>
                </div>

                <div class="text">
                    <i class="icon-quote-left"></i>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo massa sed ipsum porttitor facilisis &hellip;
                </div>
            </div>

            <div class="tools">
                <a href="#" class="btn btn-minier btn-info">
                    <i class="icon-only icon-pencil"></i>
                </a>

                <a href="#" class="btn btn-minier btn-danger">
                    <i class="icon-only icon-trash"></i>
                </a>
            </div>
        </div>

        <div class="itemdiv commentdiv">
            <div class="user">
                <img alt="Joe's Avatar" src="<?php echo base_url(); ?>assets/avatars/avatar2.png" />
            </div>

            <div class="body">
                <div class="name">
                    <a href="#">Joe</a>
                </div>

                <div class="time">
                    <i class="icon-time"></i>
                    <span class="orange">22 min</span>
                </div>

                <div class="text">
                    <i class="icon-quote-left"></i>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo massa sed ipsum porttitor facilisis &hellip;
                </div>
            </div>

            <div class="tools">
                <a href="#" class="btn btn-minier btn-info">
                    <i class="icon-only icon-pencil"></i>
                </a>

                <a href="#" class="btn btn-minier btn-danger">
                    <i class="icon-only icon-trash"></i>
                </a>
            </div>
        </div>

        <div class="itemdiv commentdiv">
            <div class="user">
                <img alt="Rita's Avatar" src="<?php echo base_url(); ?>assets/avatars/avatar3.png" />
            </div>

            <div class="body">
                <div class="name">
                    <a href="#">Rita</a>
                </div>

                <div class="time">
                    <i class="icon-time"></i>
                    <span class="red">50 min</span>
                </div>

                <div class="text">
                    <i class="icon-quote-left"></i>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo massa sed ipsum porttitor facilisis &hellip;
                </div>
            </div>

            <div class="tools">
                <a href="#" class="btn btn-minier btn-info">
                    <i class="icon-only icon-pencil"></i>
                </a>

                <a href="#" class="btn btn-minier btn-danger">
                    <i class="icon-only icon-trash"></i>
                </a>
            </div>
        </div>
    </div>

    <div class="hr hr8"></div>

    <div class="center">
        <i class="icon-comments-alt icon-2x green"></i>

        &nbsp;
        <a href="#">
            See all comments &nbsp;
            <i class="icon-arrow-right"></i>
        </a>
    </div>

    <div class="hr hr-double hr8"></div>
</div>
</div>
</div><!--/widget-main-->
</div><!--/widget-body-->
</div><!--/widget-box-->
</div><!--/span-->

<div class="span6">
    <div class="widget-box ">
        <div class="widget-header">
            <h4 class="lighter smaller">
                <i class="icon-comment blue"></i>
                Conversation
            </h4>
        </div>

        <div class="widget-body">
            <div class="widget-main no-padding">
                <div class="dialogs">
                    <div class="itemdiv dialogdiv">
                        <div class="user">
                            <img alt="Alexa's Avatar" src="<?php echo base_url(); ?>assets/avatars/avatar1.png" />
                        </div>

                        <div class="body">
                            <div class="time">
                                <i class="icon-time"></i>
                                <span class="green">4 sec</span>
                            </div>

                            <div class="name">
                                <a href="#">Alexa</a>
                            </div>
                            <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo massa sed ipsum porttitor facilisis.</div>

                            <div class="tools">
                                <a href="#" class="btn btn-minier btn-info">
                                    <i class="icon-only icon-share-alt"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="itemdiv dialogdiv">
                        <div class="user">
                            <img alt="John's Avatar" src="<?php echo base_url(); ?>assets/avatars/avatar.png" />
                        </div>

                        <div class="body">
                            <div class="time">
                                <i class="icon-time"></i>
                                <span class="blue">38 sec</span>
                            </div>

                            <div class="name">
                                <a href="#">John</a>
                            </div>
                            <div class="text">Raw denim you probably haven&#39;t heard of them jean shorts Austin.</div>

                            <div class="tools">
                                <a href="#" class="btn btn-minier btn-info">
                                    <i class="icon-only icon-share-alt"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="itemdiv dialogdiv">
                        <div class="user">
                            <img alt="Bob's Avatar" src="<?php echo base_url(); ?>assets/avatars/user.jpg" />
                        </div>

                        <div class="body">
                            <div class="time">
                                <i class="icon-time"></i>
                                <span class="orange">2 min</span>
                            </div>

                            <div class="name">
                                <a href="#">Bob</a>
                                <span class="label label-info arrowed arrowed-in-right">admin</span>
                            </div>
                            <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo massa sed ipsum porttitor facilisis.</div>

                            <div class="tools">
                                <a href="#" class="btn btn-minier btn-info">
                                    <i class="icon-only icon-share-alt"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="itemdiv dialogdiv">
                        <div class="user">
                            <img alt="Jim's Avatar" src="<?php echo base_url(); ?>assets/avatars/avatar4.png" />
                        </div>

                        <div class="body">
                            <div class="time">
                                <i class="icon-time"></i>
                                <span class="grey">3 min</span>
                            </div>

                            <div class="name">
                                <a href="#">Jim</a>
                            </div>
                            <div class="text">Raw denim you probably haven&#39;t heard of them jean shorts Austin.</div>

                            <div class="tools">
                                <a href="#" class="btn btn-minier btn-info">
                                    <i class="icon-only icon-share-alt"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="itemdiv dialogdiv">
                        <div class="user">
                            <img alt="Alexa's Avatar" src="<?php echo base_url(); ?>assets/avatars/avatar1.png" />
                        </div>

                        <div class="body">
                            <div class="time">
                                <i class="icon-time"></i>
                                <span class="green">4 min</span>
                            </div>

                            <div class="name">
                                <a href="#">Alexa</a>
                            </div>
                            <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>

                            <div class="tools">
                                <a href="#" class="btn btn-minier btn-info">
                                    <i class="icon-only icon-share-alt"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <form />
                <div class="form-actions input-append">
                    <input placeholder="Type your message here ..." type="text" class="width-75" name="message" />
                    <button class="btn btn-small btn-info no-radius" onclick="return false;">
                        <i class="icon-share-alt"></i>
                        <span class="hidden-phone">Send</span>
                    </button>
                </div>
                </form>
            </div><!--/widget-main-->
        </div><!--/widget-body-->
    </div><!--/widget-box-->
</div><!--/span-->
</div><!--/row-->

<!--PAGE CONTENT ENDS-->
</div><!--/.span-->
</div><!--/.row-fluid-->
</div><!--/.page-content-->



</div><!--/.main-content-->

<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-small btn-inverse">
    <i class="icon-double-angle-up icon-only bigger-110"></i>
</a>

<!--inline scripts related to this page-->
<script>
$(function() {
    $('#id-disable-check').on('click', function() {
        var inp = $('#form-input-readonly').get(0);
        if(inp.hasAttribute('disabled')) {
            inp.setAttribute('readonly' , 'true');
            inp.removeAttribute('disabled');
            inp.value="This text field is readonly!";
        }
        else {
            inp.setAttribute('disabled' , 'disabled');
            inp.removeAttribute('readonly');
            inp.value="This text field is disabled!";
        }
    });


    $('[data-rel=tooltip]').tooltip({container:'body'});
    $('[data-rel=popover]').popover({container:'body'});

    $('textarea[class*=autosize]').autosize({append: "\n"});
    $('textarea[class*=limited]').each(function() {
        var limit = parseInt($(this).attr('data-maxlength')) || 100;
        $(this).inputlimiter({
            "limit": limit,
            remText: '%n character%s remaining...',
            limitText: 'max allowed : %n.'
        });
    });

    $.mask.definitions['~']='[+-]';
    $('.input-mask-date').mask('99/99/9999');
    $('.input-mask-phone').mask('(999) 999-9999');
    $('.input-mask-eyescript').mask('~9.99 ~9.99 999');
    $(".input-mask-product").mask("a*-999-a999",{placeholder:" ",completed:function(){alert("You typed the following: "+this.val());}});



    $( "#input-size-slider" ).css('width','200px').slider({
        value:1,
        range: "min",
        min: 1,
        max: 6,
        step: 1,
        slide: function( event, ui ) {
            var sizing = ['', 'input-mini', 'input-small', 'input-medium', 'input-large', 'input-xlarge', 'input-xxlarge'];
            var val = parseInt(ui.value);
            $('#form-field-4').attr('class', sizing[val]).val('.'+sizing[val]);
        }
    });

    $( "#input-span-slider" ).slider({
        value:1,
        range: "min",
        min: 1,
        max: 11,
        step: 1,
        slide: function( event, ui ) {
            var val = parseInt(ui.value);
            $('#form-field-5').attr('class', 'span'+val).val('.span'+val).next().attr('class', 'span'+(12-val)).val('.span'+(12-val));
        }
    });


    $( "#slider-range" ).css('height','200px').slider({
        orientation: "vertical",
        range: true,
        min: 0,
        max: 100,
        values: [ 17, 67 ],
        slide: function( event, ui ) {
            var val = ui.values[$(ui.handle).index()-1]+"";

            if(! ui.handle.firstChild ) {
                $(ui.handle).append("<div class='tooltip right in' style='display:none;left:15px;top:-8px;'><div class='tooltip-arrow'></div><div class='tooltip-inner'></div></div>");
            }
            $(ui.handle.firstChild).show().children().eq(1).text(val);
        }
    }).find('a').on('blur', function(){
        $(this.firstChild).hide();
    });

    $( "#slider-range-max" ).slider({
        range: "max",
        min: 1,
        max: 10,
        value: 2
    });

    $( "#eq > span" ).css({width:'90%', 'float':'left', margin:'15px'}).each(function() {
        // read initial values from markup and remove that
        var value = parseInt( $( this ).text(), 10 );
        $( this ).empty().slider({
            value: value,
            range: "min",
            animate: true

        });
    });


    $('#id-input-file-1 , #id-input-file-2').ace_file_input({
        no_file:'No File ...',
        btn_choose:'Choose',
        btn_change:'Change',
        droppable:false,
        onchange:null,
        thumbnail:false //| true | large
        //whitelist:'gif|png|jpg|jpeg'
        //blacklist:'exe|php'
        //onchange:''
        //
    });

    $('#id-input-file-3').ace_file_input({
        style:'well',
        btn_choose:'Drop files here or click to choose',
        btn_change:null,
        no_icon:'icon-cloud-upload',
        droppable:true,
        thumbnail:'small'
        //,icon_remove:null//set null, to hide remove/reset button
        /**,before_change:function(files, dropped) {
						//Check an example below
						//or examples/file-upload.html
						return true;
					}*/
        /**,before_remove : function() {
						return true;
					}*/
        ,
        preview_error : function(filename, error_code) {
            //name of the file that failed
            //error_code values
            //1 = 'FILE_LOAD_FAILED',
            //2 = 'IMAGE_LOAD_FAILED',
            //3 = 'THUMBNAIL_FAILED'
            //alert(error_code);
        }

    }).on('change', function(){
        //console.log($(this).data('ace_input_files'));
        //console.log($(this).data('ace_input_method'));
    });


    //dynamically change allowed formats by changing before_change callback function
    $('#id-file-format').removeAttr('checked').on('change', function() {
        var before_change
        var btn_choose
        var no_icon
        if(this.checked) {
            btn_choose = "Drop images here or click to choose";
            no_icon = "icon-picture";
            before_change = function(files, dropped) {
                var allowed_files = [];
                for(var i = 0 ; i < files.length; i++) {
                    var file = files[i];
                    if(typeof file === "string") {
                        //IE8 and browsers that don't support File Object
                        if(! (/\.(jpe?g|png|gif|bmp)$/i).test(file) ) return false;
                    }
                    else {
                        var type = $.trim(file.type);
                        if( ( type.length > 0 && ! (/^image\/(jpe?g|png|gif|bmp)$/i).test(type) )
                            || ( type.length == 0 && ! (/\.(jpe?g|png|gif|bmp)$/i).test(file.name) )//for android's default browser which gives an empty string for file.type
                            ) continue;//not an image so don't keep this file
                    }

                    allowed_files.push(file);
                }
                if(allowed_files.length == 0) return false;

                return allowed_files;
            }
        }
        else {
            btn_choose = "Drop files here or click to choose";
            no_icon = "icon-cloud-upload";
            before_change = function(files, dropped) {
                return files;
            }
        }
        var file_input = $('#id-input-file-3');
        file_input.ace_file_input('update_settings', {'before_change':before_change, 'btn_choose': btn_choose, 'no_icon':no_icon})
        file_input.ace_file_input('reset_input');
    });




    $('#spinner1').ace_spinner({value:0,min:0,max:200,step:10, btn_up_class:'btn-info' , btn_down_class:'btn-info'})
        .on('change', function(){
            //alert(this.value)
        });
    $('#spinner2').ace_spinner({value:0,min:0,max:10000,step:100, icon_up:'icon-caret-up', icon_down:'icon-caret-down'});
    $('#spinner3').ace_spinner({value:0,min:-100,max:100,step:10, icon_up:'icon-plus', icon_down:'icon-minus', btn_up_class:'btn-success' , btn_down_class:'btn-danger'});



    $('.date-picker').datepicker().next().on(ace.click_event, function(){
        $(this).prev().focus();
    });
    $('#id-date-range-picker-1').daterangepicker().prev().on(ace.click_event, function(){
        $(this).next().focus();
    });

    $('#timepicker1').timepicker({
        minuteStep: 1,
        showSeconds: true,
        showMeridian: false
    })

    $('#colorpicker1').colorpicker();
    $('#simple-colorpicker-1').ace_colorpicker();


    $(".knob").knob();


    //we could just set the data-provide="tag" of the element inside HTML, but IE8 fails!
    var tag_input = $('#form-field-tags');
    if(! ( /msie\s*(8|7|6)/.test(navigator.userAgent.toLowerCase())) )
        tag_input.tag({placeholder:tag_input.attr('placeholder')});
    else {
        //display a textarea for old IE, because it doesn't support this plugin or another one I tried!
        tag_input.after('<textarea id="'+tag_input.attr('id')+'" name="'+tag_input.attr('name')+'" rows="3">'+tag_input.val()+'</textarea>').remove();
        //$('#form-field-tags').autosize({append: "\n"});
    }




});
</script>
