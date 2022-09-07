@extends('pages.tenacademy.layouts.app')
@section('title', 'Student Profile')
@section('content')
    <!-- Page Title -->
    <section class="page-title">
        <div class="auto-container">
            <h1>Student Profile</h1>

            <!-- Search Boxed -->
            <div class="search-boxed">
                <div class="search-box">
                    <form method="post" action="contact.html">
                        <div class="form-group">
                            <input type="search" name="search-field" value="" placeholder="What do you want to learn?"
                                required>
                            <button type="submit"><span class="icon fa fa-search"></span></button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </section>
    <!--End Page Title-->

    <!-- Student Profile Section -->
    <section class="student-profile-section">
        <div class="patern-layer-one paroller" data-paroller-factor="0.40" data-paroller-factor-lg="0.20"
            data-paroller-type="foreground" data-paroller-direction="vertical"
            style="background-image: url(images/icons/icon-1.png)"></div>
        <div class="patern-layer-two paroller" data-paroller-factor="0.40" data-paroller-factor-lg="-0.20"
            data-paroller-type="foreground" data-paroller-direction="vertical"
            style="background-image: url(images/icons/icon-2.png)"></div>
        <div class="circle-one"></div>
        <div class="circle-two"></div>
        <div class="auto-container">

            <div class="row clearfix">

                <!-- Image Section -->
                <div class="image-column col-lg-3 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="image">
                            <img src="https://via.placeholder.com/278x319" alt="" />
                        </div>
                        <h4>Marvin Zona</h4>
                        <div class="text">Pro Member</div>
                        <div class="social-box">
                            <a href="#" class="fa fa-facebook-square"></a>
                            <a href="#" class="fa fa-twitter-square"></a>
                            <a href="#" class="fa fa-linkedin-square"></a>
                            <a href="#" class="fa fa-github"></a>
                        </div>
                        <ul class="student-editing">
                            <li><a href="edit-profile.html">Edit Account</a></li>
                            <li><a href="intro-profile.html">Notification</a></li>
                            <li><a href="edit-profile.html">Membership Upgrade</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Content Section -->
                <div class="content-column col-lg-9 col-md-12 col-sm-12">
                    <div class="inner-column">

                        <!-- Profile Info Tabs-->
                        <div class="profile-info-tabs">
                            <!-- Profile Tabs-->
                            <div class="profile-tabs tabs-box">

                                <!--Tab Btns-->
                                <ul class="tab-btns tab-buttons clearfix">
                                    <li data-tab="#prod-overview" class="tab-btn active-btn">Overview</li>
                                    <li data-tab="#prod-bookmark" class="tab-btn">Bookmarks</li>
                                    <li data-tab="#prod-billing" class="tab-btn">Billing</li>
                                    <li data-tab="#prod-setting" class="tab-btn">Settings</li>
                                </ul>

                                <!--Tabs Container-->
                                <div class="tabs-content">

                                    <!--Tab / Active Tab-->
                                    <div class="tab active-tab" id="prod-overview">
                                        <div class="content">
                                            <!-- Sec Title -->
                                            <div class="sec-title">
                                                <h2>Courses In Progress</h2>
                                            </div>

                                            <div class="row clearfix">

                                                <!-- Cource Block Two -->
                                                <div class="cource-block-two col-lg-4 col-md-6 col-sm-12">
                                                    <div class="inner-box">
                                                        <div class="image">
                                                            <a href="course-detail.html"><img
                                                                    src="https://via.placeholder.com/270x150"
                                                                    alt="" /></a>
                                                        </div>
                                                        <div class="lower-content">
                                                            <h5><a href="course-detail.html">Interaction Design</a></h5>
                                                            <div class="text">Replenish of third creature and meat blessed
                                                                void a fruit gathered waters.</div>
                                                            <div class="clearfix">
                                                                <div class="pull-left">
                                                                    <div class="students">12 Lecturer</div>
                                                                </div>
                                                                <div class="pull-right">
                                                                    <div class="hours">54 Hours</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Cource Block Two -->
                                                <div class="cource-block-two col-lg-4 col-md-6 col-sm-12">
                                                    <div class="inner-box">
                                                        <div class="image">
                                                            <a href="course-detail.html"><img
                                                                    src="https://via.placeholder.com/270x150"
                                                                    alt="" /></a>
                                                        </div>
                                                        <div class="lower-content">
                                                            <h5><a href="course-detail.html">Visual Design</a></h5>
                                                            <div class="text">Replenish of third creature and meat blessed
                                                                void a fruit gathered waters.</div>
                                                            <div class="clearfix">
                                                                <div class="pull-left">
                                                                    <div class="students">12 Lecturer</div>
                                                                </div>
                                                                <div class="pull-right">
                                                                    <div class="hours">54 Hours</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Cource Block Two -->
                                                <div class="cource-block-two col-lg-4 col-md-6 col-sm-12">
                                                    <div class="inner-box">
                                                        <div class="image">
                                                            <a href="course-detail.html"><img
                                                                    src="https://via.placeholder.com/270x150"
                                                                    alt="" /></a>
                                                        </div>
                                                        <div class="lower-content">
                                                            <h5><a href="course-detail.html">Wireframe Protos</a></h5>
                                                            <div class="text">Replenish of third creature and meat
                                                                blessed void a fruit gathered waters.</div>
                                                            <div class="clearfix">
                                                                <div class="pull-left">
                                                                    <div class="students">12 Lecturer</div>
                                                                </div>
                                                                <div class="pull-right">
                                                                    <div class="hours">54 Hours</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Cource Block Two -->
                                                <div class="cource-block-two col-lg-4 col-md-6 col-sm-12">
                                                    <div class="inner-box">
                                                        <div class="image">
                                                            <a href="course-detail.html"><img
                                                                    src="https://via.placeholder.com/270x150"
                                                                    alt="" /></a>
                                                        </div>
                                                        <div class="lower-content">
                                                            <h5><a href="course-detail.html">Color Theory</a></h5>
                                                            <div class="text">Replenish of third creature and meat
                                                                blessed void a fruit gathered waters.</div>
                                                            <div class="clearfix">
                                                                <div class="pull-left">
                                                                    <div class="students">12 Lecturer</div>
                                                                </div>
                                                                <div class="pull-right">
                                                                    <div class="hours">54 Hours</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Cource Block Two -->
                                                <div class="cource-block-two col-lg-4 col-md-6 col-sm-12">
                                                    <div class="inner-box">
                                                        <div class="image">
                                                            <a href="course-detail.html"><img
                                                                    src="https://via.placeholder.com/270x150"
                                                                    alt="" /></a>
                                                        </div>
                                                        <div class="lower-content">
                                                            <h5><a href="course-detail.html">Typography</a></h5>
                                                            <div class="text">Replenish of third creature and meat
                                                                blessed void a fruit gathered waters.</div>
                                                            <div class="clearfix">
                                                                <div class="pull-left">
                                                                    <div class="students">12 Lecturer</div>
                                                                </div>
                                                                <div class="pull-right">
                                                                    <div class="hours">54 Hours</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Cource Block Two -->
                                                <div class="cource-block-two col-lg-4 col-md-6 col-sm-12">
                                                    <div class="inner-box">
                                                        <div class="image">
                                                            <a href="course-detail.html"><img
                                                                    src="https://via.placeholder.com/270x150"
                                                                    alt="" /></a>
                                                        </div>
                                                        <div class="lower-content">
                                                            <h5><a href="course-detail.html">Picture Selection</a></h5>
                                                            <div class="text">Replenish of third creature and meat
                                                                blessed void a fruit gathered waters.</div>
                                                            <div class="clearfix">
                                                                <div class="pull-left">
                                                                    <div class="students">12 Lecturer</div>
                                                                </div>
                                                                <div class="pull-right">
                                                                    <div class="hours">54 Hours</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                    </div>

                                    <!-- Tab -->
                                    <div class="tab" id="prod-bookmark">
                                        <div class="content">

                                            <div class="row clearfix">

                                                <!-- Cource Block Two -->
                                                <div class="cource-block-two col-lg-4 col-md-6 col-sm-12">
                                                    <div class="inner-box">
                                                        <div class="image">
                                                            <a href="course-detail.html"><img
                                                                    src="https://via.placeholder.com/270x150"
                                                                    alt="" /></a>
                                                        </div>
                                                        <div class="lower-content">
                                                            <h5><a href="course-detail.html">Interaction Design</a></h5>
                                                            <div class="text">Replenish of third creature and meat
                                                                blessed void a fruit gathered waters.</div>
                                                            <div class="clearfix">
                                                                <div class="pull-left">
                                                                    <div class="students">12 Lecturer</div>
                                                                </div>
                                                                <div class="pull-right">
                                                                    <div class="hours">54 Hours</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Cource Block Two -->
                                                <div class="cource-block-two col-lg-4 col-md-6 col-sm-12">
                                                    <div class="inner-box">
                                                        <div class="image">
                                                            <a href="course-detail.html"><img
                                                                    src="https://via.placeholder.com/270x150"
                                                                    alt="" /></a>
                                                        </div>
                                                        <div class="lower-content">
                                                            <h5><a href="course-detail.html">Visual Design</a></h5>
                                                            <div class="text">Replenish of third creature and meat
                                                                blessed void a fruit gathered waters.</div>
                                                            <div class="clearfix">
                                                                <div class="pull-left">
                                                                    <div class="students">12 Lecturer</div>
                                                                </div>
                                                                <div class="pull-right">
                                                                    <div class="hours">54 Hours</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Cource Block Two -->
                                                <div class="cource-block-two col-lg-4 col-md-6 col-sm-12">
                                                    <div class="inner-box">
                                                        <div class="image">
                                                            <a href="course-detail.html"><img
                                                                    src="https://via.placeholder.com/270x150"
                                                                    alt="" /></a>
                                                        </div>
                                                        <div class="lower-content">
                                                            <h5><a href="course-detail.html">Wireframe Protos</a></h5>
                                                            <div class="text">Replenish of third creature and meat
                                                                blessed void a fruit gathered waters.</div>
                                                            <div class="clearfix">
                                                                <div class="pull-left">
                                                                    <div class="students">12 Lecturer</div>
                                                                </div>
                                                                <div class="pull-right">
                                                                    <div class="hours">54 Hours</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Cource Block Two -->
                                                <div class="cource-block-two col-lg-4 col-md-6 col-sm-12">
                                                    <div class="inner-box">
                                                        <div class="image">
                                                            <a href="course-detail.html"><img
                                                                    src="https://via.placeholder.com/270x150"
                                                                    alt="" /></a>
                                                        </div>
                                                        <div class="lower-content">
                                                            <h5><a href="course-detail.html">Color Theory</a></h5>
                                                            <div class="text">Replenish of third creature and meat
                                                                blessed void a fruit gathered waters.</div>
                                                            <div class="clearfix">
                                                                <div class="pull-left">
                                                                    <div class="students">12 Lecturer</div>
                                                                </div>
                                                                <div class="pull-right">
                                                                    <div class="hours">54 Hours</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Cource Block Two -->
                                                <div class="cource-block-two col-lg-4 col-md-6 col-sm-12">
                                                    <div class="inner-box">
                                                        <div class="image">
                                                            <a href="course-detail.html"><img
                                                                    src="https://via.placeholder.com/270x150"
                                                                    alt="" /></a>
                                                        </div>
                                                        <div class="lower-content">
                                                            <h5><a href="course-detail.html">Typography</a></h5>
                                                            <div class="text">Replenish of third creature and meat
                                                                blessed void a fruit gathered waters.</div>
                                                            <div class="clearfix">
                                                                <div class="pull-left">
                                                                    <div class="students">12 Lecturer</div>
                                                                </div>
                                                                <div class="pull-right">
                                                                    <div class="hours">54 Hours</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Cource Block Two -->
                                                <div class="cource-block-two col-lg-4 col-md-6 col-sm-12">
                                                    <div class="inner-box">
                                                        <div class="image">
                                                            <a href="course-detail.html"><img
                                                                    src="https://via.placeholder.com/270x150"
                                                                    alt="" /></a>
                                                        </div>
                                                        <div class="lower-content">
                                                            <h5><a href="course-detail.html">Picture Selection</a></h5>
                                                            <div class="text">Replenish of third creature and meat
                                                                blessed void a fruit gathered waters.</div>
                                                            <div class="clearfix">
                                                                <div class="pull-left">
                                                                    <div class="students">12 Lecturer</div>
                                                                </div>
                                                                <div class="pull-right">
                                                                    <div class="hours">54 Hours</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                    </div>

                                    <!-- Tab -->
                                    <div class="tab" id="prod-billing">
                                        <div class="content">

                                            <div class="row clearfix">

                                                <!-- Cource Block Two -->
                                                <div class="cource-block-two col-lg-4 col-md-6 col-sm-12">
                                                    <div class="inner-box">
                                                        <div class="image">
                                                            <a href="course-detail.html"><img
                                                                    src="https://via.placeholder.com/270x150"
                                                                    alt="" /></a>
                                                        </div>
                                                        <div class="lower-content">
                                                            <h5><a href="course-detail.html">Interaction Design</a></h5>
                                                            <div class="text">Replenish of third creature and meat
                                                                blessed void a fruit gathered waters.</div>
                                                            <div class="clearfix">
                                                                <div class="pull-left">
                                                                    <div class="students">12 Lecturer</div>
                                                                </div>
                                                                <div class="pull-right">
                                                                    <div class="hours">54 Hours</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Cource Block Two -->
                                                <div class="cource-block-two col-lg-4 col-md-6 col-sm-12">
                                                    <div class="inner-box">
                                                        <div class="image">
                                                            <a href="course-detail.html"><img
                                                                    src="https://via.placeholder.com/270x150"
                                                                    alt="" /></a>
                                                        </div>
                                                        <div class="lower-content">
                                                            <h5><a href="course-detail.html">Visual Design</a></h5>
                                                            <div class="text">Replenish of third creature and meat
                                                                blessed void a fruit gathered waters.</div>
                                                            <div class="clearfix">
                                                                <div class="pull-left">
                                                                    <div class="students">12 Lecturer</div>
                                                                </div>
                                                                <div class="pull-right">
                                                                    <div class="hours">54 Hours</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Cource Block Two -->
                                                <div class="cource-block-two col-lg-4 col-md-6 col-sm-12">
                                                    <div class="inner-box">
                                                        <div class="image">
                                                            <a href="course-detail.html"><img
                                                                    src="https://via.placeholder.com/270x150"
                                                                    alt="" /></a>
                                                        </div>
                                                        <div class="lower-content">
                                                            <h5><a href="course-detail.html">Wireframe Protos</a></h5>
                                                            <div class="text">Replenish of third creature and meat
                                                                blessed void a fruit gathered waters.</div>
                                                            <div class="clearfix">
                                                                <div class="pull-left">
                                                                    <div class="students">12 Lecturer</div>
                                                                </div>
                                                                <div class="pull-right">
                                                                    <div class="hours">54 Hours</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Cource Block Two -->
                                                <div class="cource-block-two col-lg-4 col-md-6 col-sm-12">
                                                    <div class="inner-box">
                                                        <div class="image">
                                                            <a href="course-detail.html"><img
                                                                    src="https://via.placeholder.com/270x150"
                                                                    alt="" /></a>
                                                        </div>
                                                        <div class="lower-content">
                                                            <h5><a href="course-detail.html">Color Theory</a></h5>
                                                            <div class="text">Replenish of third creature and meat
                                                                blessed void a fruit gathered waters.</div>
                                                            <div class="clearfix">
                                                                <div class="pull-left">
                                                                    <div class="students">12 Lecturer</div>
                                                                </div>
                                                                <div class="pull-right">
                                                                    <div class="hours">54 Hours</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Cource Block Two -->
                                                <div class="cource-block-two col-lg-4 col-md-6 col-sm-12">
                                                    <div class="inner-box">
                                                        <div class="image">
                                                            <a href="course-detail.html"><img
                                                                    src="https://via.placeholder.com/270x150"
                                                                    alt="" /></a>
                                                        </div>
                                                        <div class="lower-content">
                                                            <h5><a href="course-detail.html">Typography</a></h5>
                                                            <div class="text">Replenish of third creature and meat
                                                                blessed void a fruit gathered waters.</div>
                                                            <div class="clearfix">
                                                                <div class="pull-left">
                                                                    <div class="students">12 Lecturer</div>
                                                                </div>
                                                                <div class="pull-right">
                                                                    <div class="hours">54 Hours</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Cource Block Two -->
                                                <div class="cource-block-two col-lg-4 col-md-6 col-sm-12">
                                                    <div class="inner-box">
                                                        <div class="image">
                                                            <a href="course-detail.html"><img
                                                                    src="https://via.placeholder.com/270x150"
                                                                    alt="" /></a>
                                                        </div>
                                                        <div class="lower-content">
                                                            <h5><a href="course-detail.html">Picture Selection</a></h5>
                                                            <div class="text">Replenish of third creature and meat
                                                                blessed void a fruit gathered waters.</div>
                                                            <div class="clearfix">
                                                                <div class="pull-left">
                                                                    <div class="students">12 Lecturer</div>
                                                                </div>
                                                                <div class="pull-right">
                                                                    <div class="hours">54 Hours</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                    </div>

                                    <!-- Tab -->
                                    <div class="tab" id="prod-setting">
                                        <div class="content">

                                            <div class="row clearfix">

                                                <!-- Cource Block Two -->
                                                <div class="cource-block-two col-lg-4 col-md-6 col-sm-12">
                                                    <div class="inner-box">
                                                        <div class="image">
                                                            <a href="course-detail.html"><img
                                                                    src="https://via.placeholder.com/270x150"
                                                                    alt="" /></a>
                                                        </div>
                                                        <div class="lower-content">
                                                            <h5><a href="course-detail.html">Interaction Design</a></h5>
                                                            <div class="text">Replenish of third creature and meat
                                                                blessed void a fruit gathered waters.</div>
                                                            <div class="clearfix">
                                                                <div class="pull-left">
                                                                    <div class="students">12 Lecturer</div>
                                                                </div>
                                                                <div class="pull-right">
                                                                    <div class="hours">54 Hours</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Cource Block Two -->
                                                <div class="cource-block-two col-lg-4 col-md-6 col-sm-12">
                                                    <div class="inner-box">
                                                        <div class="image">
                                                            <a href="course-detail.html"><img
                                                                    src="https://via.placeholder.com/270x150"
                                                                    alt="" /></a>
                                                        </div>
                                                        <div class="lower-content">
                                                            <h5><a href="course-detail.html">Visual Design</a></h5>
                                                            <div class="text">Replenish of third creature and meat
                                                                blessed void a fruit gathered waters.</div>
                                                            <div class="clearfix">
                                                                <div class="pull-left">
                                                                    <div class="students">12 Lecturer</div>
                                                                </div>
                                                                <div class="pull-right">
                                                                    <div class="hours">54 Hours</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Cource Block Two -->
                                                <div class="cource-block-two col-lg-4 col-md-6 col-sm-12">
                                                    <div class="inner-box">
                                                        <div class="image">
                                                            <a href="course-detail.html"><img
                                                                    src="https://via.placeholder.com/270x150"
                                                                    alt="" /></a>
                                                        </div>
                                                        <div class="lower-content">
                                                            <h5><a href="course-detail.html">Wireframe Protos</a></h5>
                                                            <div class="text">Replenish of third creature and meat
                                                                blessed void a fruit gathered waters.</div>
                                                            <div class="clearfix">
                                                                <div class="pull-left">
                                                                    <div class="students">12 Lecturer</div>
                                                                </div>
                                                                <div class="pull-right">
                                                                    <div class="hours">54 Hours</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Cource Block Two -->
                                                <div class="cource-block-two col-lg-4 col-md-6 col-sm-12">
                                                    <div class="inner-box">
                                                        <div class="image">
                                                            <a href="course-detail.html"><img
                                                                    src="https://via.placeholder.com/270x150"
                                                                    alt="" /></a>
                                                        </div>
                                                        <div class="lower-content">
                                                            <h5><a href="course-detail.html">Color Theory</a></h5>
                                                            <div class="text">Replenish of third creature and meat
                                                                blessed void a fruit gathered waters.</div>
                                                            <div class="clearfix">
                                                                <div class="pull-left">
                                                                    <div class="students">12 Lecturer</div>
                                                                </div>
                                                                <div class="pull-right">
                                                                    <div class="hours">54 Hours</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Cource Block Two -->
                                                <div class="cource-block-two col-lg-4 col-md-6 col-sm-12">
                                                    <div class="inner-box">
                                                        <div class="image">
                                                            <a href="course-detail.html"><img
                                                                    src="https://via.placeholder.com/270x150"
                                                                    alt="" /></a>
                                                        </div>
                                                        <div class="lower-content">
                                                            <h5><a href="course-detail.html">Typography</a></h5>
                                                            <div class="text">Replenish of third creature and meat
                                                                blessed void a fruit gathered waters.</div>
                                                            <div class="clearfix">
                                                                <div class="pull-left">
                                                                    <div class="students">12 Lecturer</div>
                                                                </div>
                                                                <div class="pull-right">
                                                                    <div class="hours">54 Hours</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Cource Block Two -->
                                                <div class="cource-block-two col-lg-4 col-md-6 col-sm-12">
                                                    <div class="inner-box">
                                                        <div class="image">
                                                            <a href="course-detail.html"><img
                                                                    src="https://via.placeholder.com/270x150"
                                                                    alt="" /></a>
                                                        </div>
                                                        <div class="lower-content">
                                                            <h5><a href="course-detail.html">Picture Selection</a></h5>
                                                            <div class="text">Replenish of third creature and meat
                                                                blessed void a fruit gathered waters.</div>
                                                            <div class="clearfix">
                                                                <div class="pull-left">
                                                                    <div class="students">12 Lecturer</div>
                                                                </div>
                                                                <div class="pull-right">
                                                                    <div class="hours">54 Hours</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <!-- Post Share Options -->
                        <div class="styled-pagination">
                            <ul class="clearfix">
                                <li class="prev"><a href="#"><span class="fa fa-angle-left"></span> </a></li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li class="active"><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#">6</a></li>
                                <li><a href="#">7</a></li>
                                <li><a href="#">8</a></li>
                                <li class="next"><a href="#"><span class="fa fa-angle-right"></span> </a></li>
                            </ul>
                        </div>

                    </div>
                </div>

            </div>

        </div>

        <!-- Saved Books Section -->
        <div class="saved-books-section">
            <div class="auto-container">
                <div class="sec-title">
                    <h2>Saved Books</h2>
                </div>
                <div class="row clearfix">

                    <!-- Book Block -->
                    <div class="book-block col-lg-3 col-md-4 col-sm-12">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="https://via.placeholder.com/270x300" alt="">
                                <!-- Overlay Box -->
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <a href="books-detail.html" class="link"><span
                                                    class="icon fa fa-link"></span></a>
                                            <a href="https://via.placeholder.com/270x300" data-fancybox="books"
                                                data-caption="" class="link"><span
                                                    class="icon flaticon-full-screen"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                            <div class="lower-box">
                                <h6><a href="books-detail.html">Don’t make me think</a></h6>
                            </div>
                        </div>
                    </div>

                    <!-- Book Block -->
                    <div class="book-block col-lg-3 col-md-4 col-sm-12">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="https://via.placeholder.com/270x300" alt="">
                                <!-- Overlay Box -->
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <a href="books-detail.html" class="link"><span
                                                    class="icon fa fa-link"></span></a>
                                            <a href="https://via.placeholder.com/270x300" data-fancybox="books"
                                                data-caption="" class="link"><span
                                                    class="icon flaticon-full-screen"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                            <div class="lower-box">
                                <h6><a href="books-detail.html">Design of Everyday</a></h6>
                            </div>
                        </div>
                    </div>

                    <!-- Book Block -->
                    <div class="book-block col-lg-3 col-md-4 col-sm-12">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="https://via.placeholder.com/270x300" alt="">
                                <!-- Overlay Box -->
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <a href="books-detail.html" class="link"><span
                                                    class="icon fa fa-link"></span></a>
                                            <a href="https://via.placeholder.com/270x300" data-fancybox="books"
                                                data-caption="" class="link"><span
                                                    class="icon flaticon-full-screen"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                            <div class="lower-box">
                                <h6><a href="books-detail.html">Undercover UX Design</a></h6>
                            </div>
                        </div>
                    </div>

                    <!-- Book Block -->
                    <div class="book-block col-lg-3 col-md-4 col-sm-12">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="https://via.placeholder.com/270x300" alt="">
                                <!-- Overlay Box -->
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <a href="books-detail.html" class="link"><span
                                                    class="icon fa fa-link"></span></a>
                                            <a href="https://via.placeholder.com/270x300" data-fancybox="books"
                                                data-caption="" class="link"><span
                                                    class="icon flaticon-full-screen"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                            <div class="lower-box">
                                <h6><a href="books-detail.html">Interaction Design</a></h6>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>

    </section>
    <!-- End Profile Section -->



@endsection
