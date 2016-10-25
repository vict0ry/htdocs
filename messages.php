<?PHP
require_once $_SERVER["DOCUMENT_ROOT"].'/template/header.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/template/nav.php';
?>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="/css/messages.css" media="screen" title="no title">
<div class="container bootstrap snippets">
<div class="row">
    <div class="col-lg-12">
        <div class="box">
            <!--mail inbox start-->
            <div class="mail-box">
                <aside class="sm-side">
                    <div class="user-head">
                        <a href="javascript:;" class="inbox-avatar">
                            <img src="http://bootdey.com/img/Content/avatar/avatar1.png" alt="" class="img-responsive">
                        </a>
                        <div class="user-name">
                            <h5><a href="#">Jonathan Smith</a></h5>
                            <span><a href="#">jsmith@gmail.com</a></span>
                        </div>
                        <a href="javascript:;" class="mail-dropdown pull-right">
                            <i class="fa fa-chevron-down"></i>
                        </a>
                    </div>
                    <div class="inbox-body">
                        <a class="btn btn-compose" data-toggle="modal" href="#myModal" data-original-title="" title="">
                            Compose
                        </a>
                        <!-- Modal -->
                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        <h4 class="modal-title">Compose</h4>
                                    </div>
                                    <div class="modal-body">
                                        <form class="form-horizontal" role="form">
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">To</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control" id="inputEmail1" placeholder="">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">Cc / Bcc</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control" id="cc" placeholder="">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">Subject</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control" id="inputPassword1" placeholder="">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">Message</label>
                                                <div class="col-lg-10">
                                                    <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-lg-offset-2 col-lg-10">
                                                    <span class="btn green fileinput-button" data-original-title="" title="">
                                                      <i class="fa fa-plus fa fa-white"></i>
                                                      <span>Attachment</span>
                                                      <input type="file" multiple="" name="files[]">
                                                    </span>
                                                    <button type="submit" class="btn btn-send" data-original-title="" title="">Send</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div><!-- /.modal -->
                    </div>

                    <ul class="inbox-nav inbox-divider">
                        <li class="active">
                            <a href="#"><i class="fa fa-inbox"></i> Inbox <span class="label label-danger pull-right">2</span></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-envelope-o"></i> Sent Mail</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bookmark-o"></i> Important</a>
                        </li>
                        <li>
                            <a href="#"><i class=" fa fa-external-link"></i> Drafts <span class="label label-info pull-right">30</span></a>
                        </li>
                        <li>
                            <a href="#"><i class=" fa fa-trash-o"></i> Trash</a>
                        </li>
                    </ul>
                    <ul class="nav nav-pills nav-stacked labels-info inbox-divider">
                        <li> <h4>Labels</h4> </li>
                        <li> <a href="#"> <i class=" fa fa-sign-blank text-danger"></i> Work </a> </li>
                        <li> <a href="#"> <i class=" fa fa-sign-blank text-success"></i> Design </a> </li>
                        <li> <a href="#"> <i class=" fa fa-sign-blank text-info "></i> Family </a>
                        </li><li> <a href="#"> <i class=" fa fa-sign-blank text-warning "></i> Friends </a>
                        </li><li> <a href="#"> <i class=" fa fa-sign-blank text-primary "></i> Office </a>
                        </li>
                    </ul>
                    <ul class="nav nav-pills nav-stacked labels-info ">
                        <li> <h4>Buddy online</h4> </li>
                        <li> <a href="#"> <i class=" fa fa-circle text-success"></i> Jhone Doe <p>I do not think</p></a>  </li>
                        <li> <a href="#"> <i class=" fa fa-circle text-danger"></i> Sumon <p>Busy with coding</p></a> </li>
                        <li> <a href="#"> <i class=" fa fa-circle text-muted "></i> Anjelina Joli <p>I out of control</p></a>
                        </li><li> <a href="#"> <i class=" fa fa-circle text-muted "></i> Jonathan Smith <p>I am not here</p></a>
                        </li><li> <a href="#"> <i class=" fa fa-circle text-muted "></i> Tawseef <p>I do not think</p></a>
                        </li>
                    </ul>
                    <div class="inbox-body text-center">
                        <div class="btn-group">
                            <a href="javascript:;" class="btn mini btn-primary" data-original-title="" title="">
                                <i class="fa fa-plus"></i>
                            </a>
                        </div>
                        <div class="btn-group">
                            <a href="javascript:;" class="btn mini btn-success" data-original-title="" title="">
                                <i class="fa fa-phone"></i>
                            </a>
                        </div>
                        <div class="btn-group">
                            <a href="javascript:;" class="btn mini btn-info" data-original-title="" title="">
                                <i class="fa fa-cog"></i>
                            </a>
                        </div>
                    </div>
                </aside>
                <aside class="lg-side">
                <div class="inbox-head">
                    <h3>Inbox</h3>
                    <form class="pull-right position" action="#">
                        <div class="input-append">
                            <input type="text" placeholder="Search Mail" class="sr-input">
                            <button type="button" class="btn sr-btn" data-original-title="" title=""><i class="fa fa-search"></i></button>
                        </div>
                    </form>
                </div>
                <div class="inbox-body">
                <div class="mail-option">
                    <div class="chk-all">
                        <input type="checkbox" class="mail-checkbox mail-group-checkbox">
                        <div class="btn-group">
                            <a class="btn mini all" href="#" data-toggle="dropdown" data-original-title="" title="">
                                All
                                <i class="fa fa-angle-down "></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#"> None</a></li>
                                <li><a href="#"> Read</a></li>
                                <li><a href="#"> Unread</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="btn-group">
                        <a class="btn mini tooltips" href="#" data-toggle="dropdown" data-placement="top" data-original-title="Refresh">
                            <i class=" fa fa-refresh"></i>
                        </a>
                    </div>
                    <div class="btn-group hidden-phone">
                        <a class="btn mini blue" href="#" data-toggle="dropdown" data-original-title="" title="">
                            More
                            <i class="fa fa-angle-down "></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="#"><i class="fa fa-pencil"></i> Mark as Read</a></li>
                            <li><a href="#"><i class="fa fa-ban"></i> Spam</a></li>
                            <li class="divider"></li>
                            <li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
                        </ul>
                    </div>
                    <div class="btn-group">
                        <a class="btn mini blue" href="#" data-toggle="dropdown" data-original-title="" title="">
                            Move to
                            <i class="fa fa-angle-down "></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="#"><i class="fa fa-pencil"></i> Mark as Read</a></li>
                            <li><a href="#"><i class="fa fa-ban"></i> Spam</a></li>
                            <li class="divider"></li>
                            <li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
                        </ul>
                    </div>
                    <ul class="unstyled inbox-pagination">
                        <li><span>1-50 of 234</span></li>
                        <li>
                            <a href="#" class="np-btn"><i class="fa fa-angle-left  pagination-left"></i></a>
                        </li>
                        <li>
                            <a href="#" class="np-btn"><i class="fa fa-angle-right pagination-right"></i></a>
                        </li>
                    </ul>
                </div>
                <table class="table table-inbox table-hover">
                <tbody>
                <tr class="unread">
                    <td class="inbox-small-cells">
                        <input type="checkbox" class="mail-checkbox">
                    </td>
                    <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                    <td class="view-message  dont-show">Arjuna Admin</td>
                    <td class="view-message ">Lorem ipsum dolor imit set.</td>
                    <td class="view-message  inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                    <td class="view-message  text-right">9:27 AM</td>
                </tr>
                <tr class="unread">
                    <td class="inbox-small-cells">
                        <input type="checkbox" class="mail-checkbox">
                    </td>
                    <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                    <td class="view-message dont-show">John Doe</td>
                    <td class="view-message">Hi Bro, How are you?</td>
                    <td class="view-message inbox-small-cells"></td>
                    <td class="view-message text-right">March 15</td>
                </tr>
                <tr class="">
                    <td class="inbox-small-cells">
                        <input type="checkbox" class="mail-checkbox">
                    </td>
                    <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                    <td class="view-message dont-show">Jabuk Doe</td>
                    <td class="view-message">Lorem ipsum dolor sit amet</td>
                    <td class="view-message inbox-small-cells"></td>
                    <td class="view-message text-right">June 15</td>
                </tr>
                <tr class="">
                    <td class="inbox-small-cells">
                        <input type="checkbox" class="mail-checkbox">
                    </td>
                    <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                    <td class="view-message dont-show">Facebook</td>
                    <td class="view-message">Dolor sit amet, consectetuer adipiscing</td>
                    <td class="view-message inbox-small-cells"></td>
                    <td class="view-message text-right">April 01</td>
                </tr>
                <tr class="">
                    <td class="inbox-small-cells">
                        <input type="checkbox" class="mail-checkbox">
                    </td>
                    <td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
                    <td class="view-message dont-show">Cendy Andrianto <span class="label label-danger pull-right">urgent</span></td>
                    <td class="view-message">Lorem ipsum dolor sit amet</td>
                    <td class="view-message inbox-small-cells"></td>
                    <td class="view-message text-right">May 23</td>
                </tr>
                <tr class="">
                    <td class="inbox-small-cells">
                        <input type="checkbox" class="mail-checkbox">
                    </td>
                    <td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
                    <td class="view-message dont-show">Facebook</td>
                    <td class="view-message">Dolor sit amet, consectetuer adipiscing</td>
                    <td class="view-message inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                    <td class="view-message text-right">March 14</td>
                </tr>
                <tr class="">
                    <td class="inbox-small-cells">
                        <input type="checkbox" class="mail-checkbox">
                    </td>
                    <td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
                    <td class="view-message dont-show">Rosid nur</td>
                    <td class="view-message">Lorem ipsum dolor sit amet</td>
                    <td class="view-message inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                    <td class="view-message text-right">January 19</td>
                </tr>
                <tr class="">
                    <td class="inbox-small-cells">
                        <input type="checkbox" class="mail-checkbox">
                    </td>
                    <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                    <td class="view-message dont-show">Facebook <span class="label label-success pull-right">megazine</span></td>
                    <td class="view-message view-message">Dolor sit amet, consectetuer adipiscing</td>
                    <td class="view-message inbox-small-cells"></td>
                    <td class="view-message text-right">March 04</td>
                </tr>
                <tr class="">
                    <td class="inbox-small-cells">
                        <input type="checkbox" class="mail-checkbox">
                    </td>
                    <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                    <td class="view-message dont-show">Cendy Andrianto</td>
                    <td class="view-message view-message">Lorem ipsum dolor sit amet</td>
                    <td class="view-message inbox-small-cells"></td>
                    <td class="view-message text-right">June 13</td>
                </tr>
                <tr class="">
                    <td class="inbox-small-cells">
                        <input type="checkbox" class="mail-checkbox">
                    </td>
                    <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                    <td class="view-message dont-show">Facebook <span class="label label-info pull-right">family</span></td>
                    <td class="view-message view-message">Dolor sit amet, consectetuer adipiscing</td>
                    <td class="view-message inbox-small-cells"></td>
                    <td class="view-message text-right">March 24</td>
                </tr>
                <tr class="">
                    <td class="inbox-small-cells">
                        <input type="checkbox" class="mail-checkbox">
                    </td>
                    <td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
                    <td class="view-message dont-show">Fikriandro</td>
                    <td class="view-message">Lorem ipsum dolor sit amet</td>
                    <td class="view-message inbox-small-cells"></td>
                    <td class="view-message text-right">March 09</td>
                </tr>
                <tr class="">
                    <td class="inbox-small-cells">
                        <input type="checkbox" class="mail-checkbox">
                    </td>
                    <td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
                    <td class="dont-show">Facebook</td>
                    <td class="view-message">Dolor sit amet, consectetuer adipiscing</td>
                    <td class="view-message inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                    <td class="view-message text-right">May 14</td>
                </tr>
                <tr class="">
                    <td class="inbox-small-cells">
                        <input type="checkbox" class="mail-checkbox">
                    </td>
                    <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                    <td class="view-message dont-show">Badrasianto</td>
                    <td class="view-message">Lorem ipsum dolor sit amet</td>
                    <td class="view-message inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                    <td class="view-message text-right">February 25</td>
                </tr>
                <tr class="">
                    <td class="inbox-small-cells">
                        <input type="checkbox" class="mail-checkbox">
                    </td>
                    <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                    <td class="dont-show">Facebook</td>
                    <td class="view-message view-message">Dolor sit amet, consectetuer adipiscing</td>
                    <td class="view-message inbox-small-cells"></td>
                    <td class="view-message text-right">March 14</td>
                </tr>
                <tr class="">
                    <td class="inbox-small-cells">
                        <input type="checkbox" class="mail-checkbox">
                    </td>
                    <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                    <td class="view-message dont-show">Daemon emon</td>
                    <td class="view-message">Lorem ipsum dolor sit amet</td>
                    <td class="view-message inbox-small-cells"></td>
                    <td class="view-message text-right">April 07</td>
                </tr>
                <tr class="">
                    <td class="inbox-small-cells">
                        <input type="checkbox" class="mail-checkbox">
                    </td>
                    <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                    <td class="view-message dont-show">Twitter</td>
                    <td class="view-message">Dolor sit amet, consectetuer adipiscing</td>
                    <td class="view-message inbox-small-cells"></td>
                    <td class="view-message text-right">July 14</td>
                </tr>
                <tr class="">
                    <td class="inbox-small-cells">
                        <input type="checkbox" class="mail-checkbox">
                    </td>
                    <td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
                    <td class="view-message dont-show">Sumomonosuke</td>
                    <td class="view-message">Lorem ipsum dolor sit amet</td>
                    <td class="view-message inbox-small-cells"></td>
                    <td class="view-message text-right">August 10</td>
                </tr>
                <tr class="">
                    <td class="inbox-small-cells">
                        <input type="checkbox" class="mail-checkbox">
                    </td>
                    <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                    <td class="view-message dont-show">Facebook</td>
                    <td class="view-message view-message">Dolor sit amet, consectetuer adipiscing</td>
                    <td class="view-message inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                    <td class="view-message text-right">April 14</td>
                </tr>
                <tr class="">
                    <td class="inbox-small-cells">
                        <input type="checkbox" class="mail-checkbox">
                    </td>
                    <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                    <td class="view-message dont-show">Daemon nikiwa</td>
                    <td class="view-message">Lorem ipsum dolor sit amet</td>
                    <td class="view-message inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                    <td class="view-message text-right">June 16</td>
                </tr>
                <tr class="">
                    <td class="inbox-small-cells">
                        <input type="checkbox" class="mail-checkbox">
                    </td>
                    <td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
                    <td class="view-message dont-show">Sumomonosuke</td>
                    <td class="view-message">Lorem ipsum dolor sit amet</td>
                    <td class="view-message inbox-small-cells"></td>
                    <td class="view-message text-right">August 10</td>
                </tr>
                <tr class="">
                    <td class="inbox-small-cells">
                        <input type="checkbox" class="mail-checkbox">
                    </td>
                    <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                    <td class="view-message dont-show">Facebook</td>
                    <td class="view-message view-message">Dolor sit amet, consectetuer adipiscing</td>
                    <td class="view-message inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                    <td class="view-message text-right">April 14</td>
                </tr>
                </tbody>
                </table>
                </div>
                </aside>
</div>
        <!--mail inbox end-->
        </div>
    </div>
</div>
</div>
