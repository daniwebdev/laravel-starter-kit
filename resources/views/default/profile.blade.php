@extends('default._layouts.main', [
    "pageTitle" => "Profile"
])


@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="profile card card-body px-3 pt-3 pb-0">
                <div class="profile-head">
                    <div class="photo-content">
                        <div class="cover-photo rounded"></div>
                    </div>
                    <div class="profile-info">
                        <div class="profile-photo">

                            <div style="position: relative; background: url(/admin-panel/images/profile/profile.png); background-position: center; background-size: cover; width: 80px; height: 80px; overflow:hidden" class="rounded-circle photo-image">
                                <button style="background: rgba(0,0,0,0.4); border:0; width: 100%; bottom: 0; position: absolute;" class="text-center text-white py-1" id="change-image">
                                    <i class="fa fa-camera" aria-hidden="true"></i>
                                </button>

                                <input style="display: none" type="file" id="input-upload-image">
                            </div>

                        </div>
                        <div class="profile-details">
                            <div class="profile-name px-3 pt-2">
                                <h4 class="text-primary mb-0">{{ $user->name }}</h4>
                                <p>
                                    {{ $user->getRoleNames()->first() }}
                                </p>
                            </div>

                            <div class="profile-email px-2 pt-2">
                                <h4 class="text-muted mb-0">{{ $user->email }}</h4>
                                <p>Email</p>
                            </div>

                            <div class="dropdown ms-auto">
                                <div class="btn sharp btn-primary tp-btn" data-bs-toggle="dropdown">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="12" cy="5" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="19" r="2"></circle></g></svg>
                                </div>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li class="dropdown-item"><a href="javascript:void(0)"><i class="fa fa-user-circle text-primary me-2"></i> View profile</a></li>
                                    <li class="dropdown-item"><a href="javascript:void(0)"><i class="fa fa-users text-primary me-2"></i> Add to btn-close friends</a></li>
                                    <li class="dropdown-item"><a href="javascript:void(0)"><i class="fa fa-plus text-primary me-2"></i> Add to group</a></li>
                                    <li class="dropdown-item"><a href="javascript:void(0)"><i class="fa fa-ban text-primary me-2"></i> Block</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-4">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="profile-statistics">
                                <div class="text-center">
                                    <div class="row">
                                        <div class="col">
                                            <h3 class="m-b-0">150</h3><span>Follower</span>
                                        </div>
                                        <div class="col">
                                            <h3 class="m-b-0">140</h3><span>Place Stay</span>
                                        </div>
                                        <div class="col">
                                            <h3 class="m-b-0">45</h3><span>Reviews</span>
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <a href="javascript:void(0);" class="btn btn-primary mb-1 me-1">Follow</a>
                                        <a href="javascript:void(0);" class="btn btn-primary mb-1" data-bs-toggle="modal" data-bs-target="#sendMessageModal">Send Message</a>
                                    </div>
                                </div>
                                <!-- Modal -->
                                <div class="modal fade" id="sendMessageModal">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Send Message</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form class="comment-form">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label class="text-black font-w600 form-label">Name <span class="required">*</span></label>
                                                                <input type="text" class="form-control" value="Author" name="Author" placeholder="Author">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label class="text-black font-w600 form-label">Email <span class="required">*</span></label>
                                                                <input type="text" class="form-control" value="Email" placeholder="Email" name="Email">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="mb-3">
                                                                <label class="text-black font-w600 form-label">Comment</label>
                                                                <textarea rows="8" class="form-control" name="comment" placeholder="Comment"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="mb-3 mb-0">
                                                                <input type="submit" value="Post Comment" class="submit btn btn-primary" name="submit">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="profile-blog">
                                <h5 class="text-primary d-inline">Today Highlights</h5>
                                <img src="/admin-panel/images/profile/1.jpg" alt="" class="img-fluid mt-4 mb-4 w-100 rounded">
                                <h4><a href="post-details.html" class="text-black">Darwin Creative Agency Theme</a></h4>
                                <p class="mb-0">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="profile-interest">
                                <h5 class="text-primary d-inline">Interest</h5>
                                <div class="row mt-4 sp4" id="lightgallery">
                                    <a href="/images/profile/2.jpg" data-exthumbimage="/admin-panel/images/profile/2.jpg" data-src="/admin-panel/images/profile/2.jpg" class="mb-1 col-lg-4 col-xl-4 col-sm-4 col-6">
                                        <img src="/admin-panel/images/profile/2.jpg" alt="" class="img-fluid rounded">
                                    </a>
                                    <a href="/images/profile/3.jpg" data-exthumbimage="/admin-panel/images/profile/3.jpg" data-src="/admin-panel/images/profile/3.jpg" class="mb-1 col-lg-4 col-xl-4 col-sm-4 col-6">
                                        <img src="/admin-panel/images/profile/3.jpg" alt="" class="img-fluid rounded">
                                    </a>
                                    <a href="/images/profile/4.jpg" data-exthumbimage="/admin-panel/images/profile/4.jpg" data-src="/admin-panel/images/profile/4.jpg" class="mb-1 col-lg-4 col-xl-4 col-sm-4 col-6">
                                        <img src="/admin-panel/images/profile/4.jpg" alt="" class="img-fluid rounded">
                                    </a>
                                    <a href="/admin-panel/images/profile/3.jpg" data-exthumbimage="/admin-panel/images/profile/3.jpg" data-src="/admin-panel/images/profile/3.jpg" class="mb-1 col-lg-4 col-xl-4 col-sm-4 col-6">
                                        <img src="/admin-panel/images/profile/3.jpg" alt="" class="img-fluid rounded">
                                    </a>
                                    <a href="/admin-panel/images/profile/4.jpg" data-exthumbimage="/admin-panel/images/profile/4.jpg" data-src="/admin-panel/images/profile/4.jpg" class="mb-1 col-lg-4 col-xl-4 col-sm-4 col-6">
                                        <img src="/admin-panel/images/profile/4.jpg" alt="" class="img-fluid rounded">
                                    </a>
                                    <a href="/admin-panel/images/profile/2.jpg" data-exthumbimage="/admin-panel/images/profile/2.jpg" data-src="/admin-panel/images/profile/2.jpg" class="mb-1 col-lg-4 col-xl-4 col-sm-4 col-6">
                                        <img src="/admin-panel/images/profile/2.jpg" alt="" class="img-fluid rounded">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="profile-news">
                                <h5 class="text-primary d-inline">Our Latest News</h5>
                                <div class="media pt-3 pb-3">
                                    <img src="/admin-panel/images/profile/5.jpg" alt="image" class="me-3 rounded" width="75">
                                    <div class="media-body">
                                        <h5 class="m-b-5"><a href="post-details.html" class="text-black">Collection of textile samples</a></h5>
                                        <p class="mb-0">I shared this on my fb wall a few months back, and I thought.</p>
                                    </div>
                                </div>
                                <div class="media pt-3 pb-3">
                                    <img src="/admin-panel/images/profile/6.jpg" alt="image" class="me-3 rounded" width="75">
                                    <div class="media-body">
                                        <h5 class="m-b-5"><a href="post-details.html" class="text-black">Collection of textile samples</a></h5>
                                        <p class="mb-0">I shared this on my fb wall a few months back, and I thought.</p>
                                    </div>
                                </div>
                                <div class="media pt-3 pb-3">
                                    <img src="/admin-panel/images/profile/7.jpg" alt="image" class="me-3 rounded" width="75">
                                    <div class="media-body">
                                        <h5 class="m-b-5"><a href="post-details.html" class="text-black">Collection of textile samples</a></h5>
                                        <p class="mb-0">I shared this on my fb wall a few months back, and I thought.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-8">
            <div class="card">
                <div class="card-body">
                    <div class="profile-tab">
                        <div class="custom-tab-1">
                            <ul class="nav nav-tabs">
                                <li class="nav-item"><a href="#my-posts" data-bs-toggle="tab" class="nav-link show">Posts</a>
                                </li>
                                <li class="nav-item"><a href="#about-me" data-bs-toggle="tab" class="nav-link">About Me</a>
                                </li>
                                <li class="nav-item"><a href="#profile-settings" data-bs-toggle="tab" class="nav-link active">Setting</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div id="my-posts" class="tab-pane fade">
                                    <div class="my-post-content pt-3">
                                        <div class="post-input">
                                            <textarea name="textarea" id="textarea" cols="30" rows="5" class="form-control bg-transparent" placeholder="Please type what you want...."></textarea>
                                            <a href="javascript:void(0);" class="btn btn-primary light me-1 px-3" data-bs-toggle="modal" data-bs-target="#linkModal"><i class="fa fa-link m-0"></i> </a>
                                            <!-- Modal -->
                                            <div class="modal fade" id="linkModal">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Social Links</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal">
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <a class="btn-social facebook" href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a>
                                                            <a class="btn-social google-plus" href="javascript:void(0)"><i class="fab fa-google-plus-g"></i></a>
                                                            <a class="btn-social linkedin" href="javascript:void(0)"><i class="fab fa-linkedin-in"></i></a>
                                                            <a class="btn-social instagram" href="javascript:void(0)"><i class="fab fa-instagram"></i></a>
                                                            <a class="btn-social twitter" href="javascript:void(0)"><i class="fab fa-twitter"></i></a>
                                                            <a class="btn-social youtube" href="javascript:void(0)"><i class="fab fa-youtube"></i></a>
                                                            <a class="btn-social whatsapp" href="javascript:void(0)"><i class="fab fa-whatsapp"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="javascript:void(0);" class="btn btn-primary light me-1 px-3" data-bs-toggle="modal" data-bs-target="#cameraModal"><i class="fa fa-camera m-0"></i> </a>
                                            <!-- Modal -->
                                            <div class="modal fade" id="cameraModal">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Upload images</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal">
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="input-group mb-3">
                                                                <span class="input-group-text">Upload</span>
                                                                <div class="form-file">
                                                                    <input type="file" class="form-file-input form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="javascript:void(0);" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#postModal">Post</a>
                                            <!-- Modal -->
                                            <div class="modal fade" id="postModal">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Post</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal">
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                             <textarea name="textarea" id="textarea2" cols="30" rows="5" class="form-control bg-transparent" placeholder="Please type what you want...."></textarea>
                                                             <a class="btn btn-primary" href="javascript:void(0)">Post</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="profile-uoloaded-post border-bottom-1 pb-5">
                                            <img src="/admin-panel/images/profile/8.jpg" alt="" class="img-fluid w-100 rounded">
                                            <a class="post-title" href="post-details.html"><h3 class="text-black">Collection of textile samples lay spread</h3></a>
                                            <p>A wonderful serenity has take possession of my entire soul like these sweet morning of spare which enjoy whole heart.A wonderful serenity has take possession of my entire soul like these sweet morning
                                                of spare which enjoy whole heart.</p>
                                            <button class="btn btn-primary me-2"><span class="me-2"><i class="fa fa-heart"></i></span>Like</button>
                                            <button class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#replyModal"><span class="me-2"><i class="fa fa-reply"></i></span>Reply</button>
                                        </div>
                                        <div class="profile-uoloaded-post border-bottom-1 pb-5">
                                            <img src="/admin-panel/images/profile/9.jpg" alt="" class="img-fluid w-100 rounded">
                                            <a class="post-title" href="post-details.html"><h3 class="text-black">Collection of textile samples lay spread</h3></a>
                                            <p>A wonderful serenity has take possession of my entire soul like these sweet morning of spare which enjoy whole heart.A wonderful serenity has take possession of my entire soul like these sweet morning
                                                of spare which enjoy whole heart.</p>
                                            <button class="btn btn-primary me-2"><span class="me-2"><i class="fa fa-heart"></i></span>Like</button>
                                            <button class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#replyModal"><span class="me-2"><i class="fa fa-reply"></i></span>Reply</button>
                                        </div>
                                        <div class="profile-uoloaded-post pb-3">
                                            <img src="/admin-panel/images/profile/8.jpg" alt="" class="img-fluid w-100 rounded">
                                            <a class="post-title" href="post-details.html"><h3 class="text-black">Collection of textile samples lay spread</h3></a>
                                            <p>A wonderful serenity has take possession of my entire soul like these sweet morning of spare which enjoy whole heart.A wonderful serenity has take possession of my entire soul like these sweet morning
                                                of spare which enjoy whole heart.</p>
                                            <button class="btn btn-primary me-2"><span class="me-2"><i class="fa fa-heart"></i></span>Like</button>
                                            <button class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#replyModal"><span class="me-2"><i class="fa fa-reply"></i></span>Reply</button>
                                        </div>
                                    </div>
                                </div>
                                <div id="about-me" class="tab-pane fade">
                                    <div class="profile-about-me">
                                        <div class="pt-4 border-bottom-1 pb-3">
                                            <h5 class="text-primary">About Me</h5>
                                            <p class="mb-2">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence was created for the bliss of souls like mine.I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents.</p>
                                            <p>A collection of textile samples lay spread out on the table - Samsa was a travelling salesman - and above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame.</p>
                                        </div>
                                    </div>
                                    <div class="profile-skills mb-5">
                                        <h5 class="text-primary mb-2">Skills</h5>
                                        <a href="javascript:void(0);" class="btn btn-primary light btn-xs mb-1">Admin</a>
                                        <a href="javascript:void(0);" class="btn btn-primary light btn-xs mb-1">Dashboard</a>
                                        <a href="javascript:void(0);" class="btn btn-primary light btn-xs mb-1">Photoshop</a>
                                        <a href="javascript:void(0);" class="btn btn-primary light btn-xs mb-1">Bootstrap</a>
                                        <a href="javascript:void(0);" class="btn btn-primary light btn-xs mb-1">Responsive</a>
                                        <a href="javascript:void(0);" class="btn btn-primary light btn-xs mb-1">Crypto</a>
                                    </div>
                                    <div class="profile-lang  mb-5">
                                        <h5 class="text-primary mb-2">Language</h5>
                                        <a href="javascript:void(0);" class="text-muted pe-3 f-s-16"><i class="flag-icon flag-icon-us"></i> English</a>
                                        <a href="javascript:void(0);" class="text-muted pe-3 f-s-16"><i class="flag-icon flag-icon-fr"></i> French</a>
                                        <a href="javascript:void(0);" class="text-muted pe-3 f-s-16"><i class="flag-icon flag-icon-bd"></i> Bangla</a>
                                    </div>
                                    <div class="profile-personal-info">
                                        <h5 class="text-primary mb-4">Personal Information</h5>
                                        <div class="row mb-2">
                                            <div class="col-sm-3 col-5">
                                                <h5 class="f-w-500">Name <span class="pull-end">:</span>
                                                </h5>
                                            </div>
                                            <div class="col-sm-9 col-7"><span>Mitchell C.Shay</span>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-sm-3 col-5">
                                                <h5 class="f-w-500">Email <span class="pull-end">:</span>
                                                </h5>
                                            </div>
                                            <div class="col-sm-9 col-7"><span>example@examplel.com</span>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-sm-3 col-5">
                                                <h5 class="f-w-500">Availability <span class="pull-end">:</span></h5>
                                            </div>
                                            <div class="col-sm-9 col-7"><span>Full Time (Free Lancer)</span>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-sm-3 col-5">
                                                <h5 class="f-w-500">Age <span class="pull-end">:</span>
                                                </h5>
                                            </div>
                                            <div class="col-sm-9 col-7"><span>27</span>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-sm-3 col-5">
                                                <h5 class="f-w-500">Location <span class="pull-end">:</span></h5>
                                            </div>
                                            <div class="col-sm-9 col-7"><span>Rosemont Avenue Melbourne,
                                                    Florida</span>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-sm-3 col-5">
                                                <h5 class="f-w-500">Year Experience <span class="pull-end">:</span></h5>
                                            </div>
                                            <div class="col-sm-9 col-7"><span>07 Year Experiences</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="profile-settings" class="tab-pane fade active show">
                                    <div class="pt-3">
                                        <div class="settings-form">
                                            <h5 class="text-primary">Account Setting</h5>
                                            <form>
                                                <div class="row">
                                                    <div class="mb-3 col-md-6">
                                                        <label class="form-label">Email</label>
                                                        <input type="email" placeholder="Email" class="form-control">
                                                    </div>
                                                    <div class="mb-3 col-md-6">
                                                        <label class="form-label">Password</label>
                                                        <input type="password" placeholder="Password" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Address</label>
                                                    <input type="text" placeholder="1234 Main St" class="form-control">
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Address 2</label>
                                                    <input type="text" placeholder="Apartment, studio, or floor" class="form-control">
                                                </div>
                                                <div class="row">
                                                    <div class="mb-3 col-md-6">
                                                        <label class="form-label">City</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                    <div class="mb-3 col-md-4">
                                                        <label class="form-label">State</label>
                                                        <div class="dropdown bootstrap-select form-control default-select wide"><select class="form-control default-select wide" id="inputState">
                                                            <option selected="">Choose...</option>
                                                            <option>Option 1</option>
                                                            <option>Option 2</option>
                                                            <option>Option 3</option>
                                                        </select><button type="button" tabindex="-1" class="btn dropdown-toggle btn-light" data-bs-toggle="dropdown" role="combobox" aria-owns="bs-select-2" aria-haspopup="listbox" aria-expanded="false" title="Choose..." data-id="inputState"><div class="filter-option"><div class="filter-option-inner"><div class="filter-option-inner-inner">Choose...</div></div> </div></button><div class="dropdown-menu "><div class="inner show" role="listbox" id="bs-select-2" tabindex="-1"><ul class="dropdown-menu inner show" role="presentation"></ul></div></div></div>
                                                    </div>
                                                    <div class="mb-3 col-md-2">
                                                        <label class="form-label">Zip</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="form-check custom-checkbox">
                                                        <input type="checkbox" class="form-check-input" id="gridCheck">
                                                        <label class="form-check-label form-label" for="gridCheck"> Check me out</label>
                                                    </div>
                                                </div>
                                                <button class="btn btn-primary" type="submit">Sign
                                                    in</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="replyModal">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Post Reply</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <textarea class="form-control" rows="4">Message</textarea>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Reply</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@push('head')
    <style>
    </style>
@endpush

@push('foot')
    <script>
        $(function() {
            $('#change-image').on('click', function() {
                $('#input-upload-image').trigger('click');
            });

            $('#input-upload-image').on('change', function() {
                let file = $(this)[0].files[0];

                if(file.type.indexOf('image/') == -1) {
                    $('#input-upload-image').val('')

                    alert("Format tidak didukung..!")

                    return;
                }

                let objectUrl = URL.createObjectURL(file);

                console.log(objectUrl);

                $('.photo-image').attr(`style`, `position: relative; background: url(${objectUrl}); background-position: center; background-size: cover; width: 80px; height: 80px; overflow:hidden`)
            })

            function process_upload() {

            }
        })
    </script>
@endpush
