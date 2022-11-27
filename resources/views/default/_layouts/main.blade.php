<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="FinLab : Crypto Trading UI Admin  Bootstrap 5 Template" />
	<meta property="og:title" content="FinLab : Crypto Trading UI Admin  Bootstrap 5 Template" />
	<meta property="og:description" content="FinLab : Crypto Trading UI Admin  Bootstrap 5 Template" />
	<meta property="og:image" content="https://finlab.dexignlab.com/xhtml/social-image.png" />
	<meta name="format-detection" content="telephone=no">
	<!-- PAGE TITLE HERE -->
	<title>FinLab Crypto Trading UI Admin</title>
	<!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/png" href="/admin-panel/images/favicon.png" />
	<link href="/admin-panel/vendor/wow-master/css/libs/animate.css" rel="stylesheet">
	<link href="/admin-panel/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
	<link rel="stylesheet" href="/admin-panel/vendor/bootstrap-select-country/css/bootstrap-select-country.min.css">
	<link rel="stylesheet" href="/admin-panel/vendor/jquery-nice-select/css/nice-select.css">
	<link href="/admin-panel/vendor/datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
	<!-- ----swiper-slider---- -->
	<link rel="stylesheet" href="/admin-panel/vendor/swiper/css/swiper-bundle.min.css">
	<!-- Style css -->
	<link href="https://fonts.googleapis.com/css2?family=Material+Icons"rel="stylesheet">
    <link href="/admin-panel/css/style.css" rel="stylesheet">

</head>
<body>

    <!--*******************
        Preloader start
    ********************-->
	<div id="preloader">
	  <div class="loader"></div>
	</div>
    <!--*******************
        Preloader end
    ********************-->
    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper" class="wallet-open active">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="index.html" class="brand-logo">
				<svg class="logo-abbr" width="40" height="40" viewBox="0 0 64 61" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M7.0188 22.6571H56.1512L49.1323 33.9857H28.0756L38.6039 49.6714L31.585 61L7.0188 22.6571Z" fill="var(--primary)"/>
					<path d="M7.01891 0H56.1513L63.1702 12.2H0L7.01891 0Z" fill="var(--primary)"/>
				</svg>
				<div class="brand-title">
					<svg width="100" height="35" viewBox="0 0 176 44" fill="none" xmlns="http://www.w3.org/2000/svg">w
						<path d="M23.9171 4.94226V11.1817H7.83215V21.0653H20.1581V27.1942H7.83215V43.4827H0.09375V4.94226H23.9171Z" fill="#2A353A"/>
						<path d="M33.328 9.24916C31.965 9.24916 30.823 8.82586 29.901 7.97926C29.017 7.09576 28.575 6.00986 28.575 4.72156C28.575 3.43316 29.017 2.36566 29.901 1.51902C30.823 0.635568 31.965 0.193848 33.328 0.193848C34.692 0.193848 35.816 0.635568 36.7 1.51902C37.621 2.36566 38.082 3.43316 38.082 4.72156C38.082 6.00986 37.621 7.09576 36.7 7.97926C35.816 8.82586 34.692 9.24916 33.328 9.24916ZM37.142 12.8935V43.4828H29.404V12.8935H37.142Z" fill="#2A353A"/>
						<path d="M61.757 12.4517C65.405 12.4517 68.353 13.6113 70.601 15.9303C72.849 18.2126 73.973 21.4151 73.973 25.5378V43.4828H66.234V26.5869C66.234 24.1574 65.626 22.2985 64.41 21.0101C63.194 19.685 61.536 19.0224 59.435 19.0224C57.298 19.0224 55.603 19.685 54.35 21.0101C53.134 22.2985 52.526 24.1574 52.526 26.5869V43.4828H44.788V12.8935H52.526V16.7033C53.558 15.3782 54.866 14.3475 56.451 13.6113C58.072 12.8382 59.841 12.4517 61.757 12.4517Z" fill="#2A353A"/>
						<path d="M89.0701 37.3538H101.783V43.4827H81.3311V4.94226H89.0701V37.3538Z" fill="#2A353A"/>
						<path d="M104.711 28.0776C104.711 24.9856 105.319 22.2432 106.535 19.8505C107.788 17.4578 109.465 15.6173 111.565 14.329C113.703 13.0406 116.079 12.3964 118.696 12.3964C120.98 12.3964 122.97 12.8565 124.665 13.7768C126.397 14.6971 127.779 15.8566 128.811 17.2554V12.8934H136.604V43.4827H128.811V39.0103C127.816 40.4459 126.434 41.6422 124.665 42.5993C122.933 43.5196 120.925 43.9797 118.64 43.9797C116.061 43.9797 113.703 43.3171 111.565 41.9919C109.465 40.6668 107.788 38.8078 106.535 36.4152C105.319 33.9857 104.711 31.2065 104.711 28.0776ZM128.811 28.1881C128.811 26.3107 128.442 24.7095 127.705 23.3843C126.968 22.0223 125.973 20.9916 124.72 20.2922C123.468 19.556 122.123 19.1879 120.685 19.1879C119.248 19.1879 117.922 19.5376 116.706 20.237C115.49 20.9364 114.495 21.9671 113.721 23.3291C112.984 24.6543 112.615 26.2371 112.615 28.0776C112.615 29.9181 112.984 31.5378 113.721 32.9366C114.495 34.2986 115.49 35.3477 116.706 36.0839C117.959 36.8201 119.285 37.1882 120.685 37.1882C122.123 37.1882 123.468 36.8385 124.72 36.1391C125.973 35.4029 126.968 34.3722 127.705 33.047C128.442 31.685 128.811 30.0654 128.811 28.1881Z" fill="#2A353A"/>
						<path d="M151.901 17.3658C152.896 15.8934 154.259 14.6971 155.991 13.7768C157.76 12.8565 159.768 12.3964 162.016 12.3964C164.632 12.3964 166.99 13.0406 169.091 14.329C171.228 15.6173 172.905 17.4578 174.121 19.8505C175.374 22.2064 176 24.9487 176 28.0776C176 31.2065 175.374 33.9857 174.121 36.4152C172.905 38.8078 171.228 40.6668 169.091 41.9919C166.99 43.3171 164.632 43.9797 162.016 43.9797C159.731 43.9797 157.723 43.538 155.991 42.6545C154.296 41.7343 152.932 40.5563 151.901 39.1207V43.4827H144.162V2.62329H151.901V17.3658ZM168.096 28.0776C168.096 26.2371 167.709 24.6543 166.935 23.3291C166.198 21.9671 165.203 20.9364 163.95 20.237C162.734 19.5376 161.408 19.1879 159.971 19.1879C158.57 19.1879 157.244 19.556 155.991 20.2922C154.775 20.9916 153.78 22.0223 153.006 23.3843C152.269 24.7463 151.901 26.3475 151.901 28.1881C151.901 30.0286 152.269 31.6298 153.006 32.9918C153.78 34.3538 154.775 35.4029 155.991 36.1391C157.244 36.8385 158.57 37.1882 159.971 37.1882C161.408 37.1882 162.734 36.8201 163.95 36.0839C165.203 35.3477 166.198 34.2986 166.935 32.9366C167.709 31.5746 168.096 29.9549 168.096 28.0776Z" fill="#2A353A"/>
					</svg>
				</div>

            </a>
            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
					<svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
						<rect x="22" y="11" width="4" height="4" rx="2" fill="#2A353A"/>
						<rect x="11" width="4" height="4" rx="2" fill="#2A353A"/>
						<rect x="22" width="4" height="4" rx="2" fill="#2A353A"/>
						<rect x="11" y="11" width="4" height="4" rx="2" fill="#2A353A"/>
						<rect x="11" y="22" width="4" height="4" rx="2" fill="#2A353A"/>
						<rect width="4" height="4" rx="2" fill="#2A353A"/>
						<rect y="11" width="4" height="4" rx="2" fill="#2A353A"/>
						<rect x="22" y="22" width="4" height="4" rx="2" fill="#2A353A"/>
						<rect y="22" width="4" height="4" rx="2" fill="#2A353A"/>
					</svg>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

		<!--**********************************
            Chat box start
        ***********************************-->
		<div class="chatbox">
			<div class="chatbox-close"></div>
			<div class="custom-tab-1">
				<ul class="nav nav-tabs">
					<li class="nav-item">
						<a class="nav-link" data-bs-toggle="tab" href="#notes">Notes</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-bs-toggle="tab" href="#alerts">Alerts</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" data-bs-toggle="tab" href="#chat">Chat</a>
					</li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane fade active show" id="chat" role="tabpanel">
						<div class="card mb-sm-3 mb-md-0 contacts_card dlab-chat-user-box">
							<div class="card-header chat-list-header text-center">
								<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#chat_model"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect fill="#000000" x="4" y="11" width="16" height="2" rx="1"/><rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) " x="4" y="11" width="16" height="2" rx="1"/></g></svg></a>
								<div>
									<h6 class="mb-1">Chat List</h6>
									<p class="mb-0">Show All</p>
								</div>
								<a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg></a>
							</div>
							<div class="card-body contacts_body p-0 dlab-scroll  " id="DLAB_W_Contacts_Body">
								<ul class="contacts">
									<li class="name-first-letter">A</li>
									<li class="active dlab-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="/admin-panel/images/avatar/1.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon"></span>
											</div>
											<div class="user_info">
												<span>Archie Parker</span>
												<p>Kalid is online</p>
											</div>
										</div>
									</li>
									<li class="dlab-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="/admin-panel/images/avatar/2.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Alfie Mason</span>
												<p>Taherah left 7 mins ago</p>
											</div>
										</div>
									</li>
									<li class="dlab-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="/admin-panel/images/avatar/3.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon"></span>
											</div>
											<div class="user_info">
												<span>AharlieKane</span>
												<p>Sami is online</p>
											</div>
										</div>
									</li>
									<li class="dlab-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="/admin-panel/images/avatar/4.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Athan Jacoby</span>
												<p>Nargis left 30 mins ago</p>
											</div>
										</div>
									</li>
									<li class="name-first-letter">B</li>
									<li class="dlab-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="/admin-panel/images/avatar/5.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Bashid Samim</span>
												<p>Rashid left 50 mins ago</p>
											</div>
										</div>
									</li>
									<li class="dlab-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="/admin-panel/images/avatar/1.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon"></span>
											</div>
											<div class="user_info">
												<span>Breddie Ronan</span>
												<p>Kalid is online</p>
											</div>
										</div>
									</li>
									<li class="dlab-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="/admin-panel/images/avatar/2.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Ceorge Carson</span>
												<p>Taherah left 7 mins ago</p>
											</div>
										</div>
									</li>
									<li class="name-first-letter">D</li>
									<li class="dlab-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="/admin-panel/images/avatar/3.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon"></span>
											</div>
											<div class="user_info">
												<span>Darry Parker</span>
												<p>Sami is online</p>
											</div>
										</div>
									</li>
									<li class="dlab-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="/admin-panel/images/avatar/4.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Denry Hunter</span>
												<p>Nargis left 30 mins ago</p>
											</div>
										</div>
									</li>
									<li class="name-first-letter">J</li>
									<li class="dlab-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="/admin-panel/images/avatar/5.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Jack Ronan</span>
												<p>Rashid left 50 mins ago</p>
											</div>
										</div>
									</li>
									<li class="dlab-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="/admin-panel/images/avatar/1.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon"></span>
											</div>
											<div class="user_info">
												<span>Jacob Tucker</span>
												<p>Kalid is online</p>
											</div>
										</div>
									</li>
									<li class="dlab-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="/admin-panel/images/avatar/2.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>James Logan</span>
												<p>Taherah left 7 mins ago</p>
											</div>
										</div>
									</li>
									<li class="dlab-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="/admin-panel/images/avatar/3.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon"></span>
											</div>
											<div class="user_info">
												<span>Joshua Weston</span>
												<p>Sami is online</p>
											</div>
										</div>
									</li>
									<li class="name-first-letter">O</li>
									<li class="dlab-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="/admin-panel/images/avatar/4.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Oliver Acker</span>
												<p>Nargis left 30 mins ago</p>
											</div>
										</div>
									</li>
									<li class="dlab-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="/admin-panel/images/avatar/5.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Oscar Weston</span>
												<p>Rashid left 50 mins ago</p>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
						<div class="card chat dlab-chat-history-box d-none">
							<div class="card-header chat-list-header text-center">
								<a href="javascript:void(0);" class="dlab-chat-history-back">
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><polygon points="0 0 24 0 24 24 0 24"/><rect fill="#000000" opacity="0.3" transform="translate(15.000000, 12.000000) scale(-1, 1) rotate(-90.000000) translate(-15.000000, -12.000000) " x="14" y="7" width="2" height="10" rx="1"/><path d="M3.7071045,15.7071045 C3.3165802,16.0976288 2.68341522,16.0976288 2.29289093,15.7071045 C1.90236664,15.3165802 1.90236664,14.6834152 2.29289093,14.2928909 L8.29289093,8.29289093 C8.67146987,7.914312 9.28105631,7.90106637 9.67572234,8.26284357 L15.6757223,13.7628436 C16.0828413,14.136036 16.1103443,14.7686034 15.7371519,15.1757223 C15.3639594,15.5828413 14.7313921,15.6103443 14.3242731,15.2371519 L9.03007346,10.3841355 L3.7071045,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(9.000001, 11.999997) scale(-1, -1) rotate(90.000000) translate(-9.000001, -11.999997) "/></g></svg>
								</a>
								<div>
									<h6 class="mb-1">Chat with Khelesh</h6>
									<p class="mb-0 text-success">Online</p>
								</div>
								<div class="dropdown">
									<a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false">
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1" ">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<rect x="0" y="0" width="24" height="24"/>
												<circle fill="#000000" cx="5" cy="12" r="2"/>
												<circle fill="#000000" cx="12" cy="12" r="2"/>
												<circle fill="#000000" cx="19" cy="12" r="2"/>
											</g>
										</svg>
									</a>
									<ul class="dropdown-menu dropdown-menu-end">
										<li class="dropdown-item"><i class="fa fa-user-circle text-primary me-2"></i> View profile</li>
										<li class="dropdown-item"><i class="fa fa-users text-primary me-2"></i> Add to btn-close friends</li>
										<li class="dropdown-item"><i class="fa fa-plus text-primary me-2"></i> Add to group</li>
										<li class="dropdown-item"><i class="fa fa-ban text-primary me-2"></i> Block</li>
									</ul>
								</div>
							</div>
							<div class="card-body msg_card_body dlab-scroll" id="DLAB_W_Contacts_Body3">
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="/admin-panel/images/avatar/1.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
									<div class="msg_cotainer">
										Hi, how are you samim?
										<span class="msg_time">8:40 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
										Hi Khalid i am good tnx how about you?
										<span class="msg_time_send">8:55 AM, Today</span>
									</div>
									<div class="img_cont_msg">
								<img src="/admin-panel/images/avatar/2.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="/admin-panel/images/avatar/1.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
									<div class="msg_cotainer">
										I am good too, thank you for your chat template
										<span class="msg_time">9:00 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
										You are welcome
										<span class="msg_time_send">9:05 AM, Today</span>
									</div>
									<div class="img_cont_msg">
								<img src="/admin-panel/images/avatar/2.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="/admin-panel/images/avatar/1.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
									<div class="msg_cotainer">
										I am looking for your next templates
										<span class="msg_time">9:07 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
										Ok, thank you have a good day
										<span class="msg_time_send">9:10 AM, Today</span>
									</div>
									<div class="img_cont_msg">
										<img src="/admin-panel/images/avatar/2.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="/admin-panel/images/avatar/1.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
									<div class="msg_cotainer">
										Bye, see you
										<span class="msg_time">9:12 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="/admin-panel/images/avatar/1.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
									<div class="msg_cotainer">
										Hi, how are you samim?
										<span class="msg_time">8:40 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
										Hi Khalid i am good tnx how about you?
										<span class="msg_time_send">8:55 AM, Today</span>
									</div>
									<div class="img_cont_msg">
								<img src="/admin-panel/images/avatar/2.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="/admin-panel/images/avatar/1.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
									<div class="msg_cotainer">
										I am good too, thank you for your chat template
										<span class="msg_time">9:00 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
										You are welcome
										<span class="msg_time_send">9:05 AM, Today</span>
									</div>
									<div class="img_cont_msg">
								<img src="/admin-panel/images/avatar/2.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="/admin-panel/images/avatar/1.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
									<div class="msg_cotainer">
										I am looking for your next templates
										<span class="msg_time">9:07 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
										Ok, thank you have a good day
										<span class="msg_time_send">9:10 AM, Today</span>
									</div>
									<div class="img_cont_msg">
										<img src="/admin-panel/images/avatar/2.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="/admin-panel/images/avatar/1.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
									<div class="msg_cotainer">
										Bye, see you
										<span class="msg_time">9:12 AM, Today</span>
									</div>
								</div>
							</div>
							<div class="card-footer type_msg">
								<div class="input-group">
									<textarea class="form-control" placeholder="Type your message..."></textarea>
									<div class="input-group-append">
										<button type="button" class="btn btn-primary"><i class="fa fa-location-arrow"></i></button>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="alerts" role="tabpanel">
						<div class="card mb-sm-3 mb-md-0 contacts_card">
							<div class="card-header chat-list-header text-center">
								<a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg></a>
								<div>
									<h6 class="mb-1">Notications</h6>
									<p class="mb-0">Show All</p>
								</div>
								<a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/><path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero"/></g></svg></a>
							</div>
							<div class="card-body contacts_body p-0 dlab-scroll" id="DLAB_W_Contacts_Body1">
								<ul class="contacts">
									<li class="name-first-letter">SEVER STATUS</li>
									<li class="active">
										<div class="d-flex bd-highlight">
											<div class="img_cont primary">KK</div>
											<div class="user_info">
												<span>David Nester Birthday</span>
												<p class="text-primary">Today</p>
											</div>
										</div>
									</li>
									<li class="name-first-letter">SOCIAL</li>
									<li>
										<div class="d-flex bd-highlight">
											<div class="img_cont success">RU</div>
											<div class="user_info">
												<span>Perfection Simplified</span>
												<p>Jame Smith commented on your status</p>
											</div>
										</div>
									</li>
									<li class="name-first-letter">SEVER STATUS</li>
									<li>
										<div class="d-flex bd-highlight">
											<div class="img_cont primary">AU</div>
											<div class="user_info">
												<span>AharlieKane</span>
												<p>Sami is online</p>
											</div>
										</div>
									</li>
									<li>
										<div class="d-flex bd-highlight">
											<div class="img_cont info">MO</div>
											<div class="user_info">
												<span>Athan Jacoby</span>
												<p>Nargis left 30 mins ago</p>
											</div>
										</div>
									</li>
								</ul>
							</div>
							<div class="card-footer"></div>
						</div>
					</div>
					<div class="tab-pane fade" id="notes">
						<div class="card mb-sm-3 mb-md-0 note_card">
							<div class="card-header chat-list-header text-center">
								<a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect fill="#000000" x="4" y="11" width="16" height="2" rx="1"/><rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) " x="4" y="11" width="16" height="2" rx="1"/></g></svg></a>
								<div>
									<h6 class="mb-1">Notes</h6>
									<p class="mb-0">Add New Nots</p>
								</div>
								<a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/><path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero"/></g></svg></a>
							</div>
							<div class="card-body contacts_body p-0 dlab-scroll" id="DLAB_W_Contacts_Body2">
								<ul class="contacts">
									<li class="active">
										<div class="d-flex bd-highlight">
											<div class="user_info">
												<span>New order placed..</span>
												<p>10 Aug 2020</p>
											</div>
											<div class="ms-auto">
												<a href="javascript:void(0);" class="btn btn-primary btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
												<a href="javascript:void(0);" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
											</div>
										</div>
									</li>
									<li>
										<div class="d-flex bd-highlight">
											<div class="user_info">
												<span>Youtube, a video-sharing website..</span>
												<p>10 Aug 2020</p>
											</div>
											<div class="ms-auto">
												<a href="javascript:void(0);" class="btn btn-primary btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
												<a href="javascript:void(0);" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
											</div>
										</div>
									</li>
									<li>
										<div class="d-flex bd-highlight">
											<div class="user_info">
												<span>john just buy your product..</span>
												<p>10 Aug 2020</p>
											</div>
											<div class="ms-auto">
												<a href="javascript:void(0);" class="btn btn-primary btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
												<a href="javascript:void(0);" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
											</div>
										</div>
									</li>
									<li>
										<div class="d-flex bd-highlight">
											<div class="user_info">
												<span>Athan Jacoby</span>
												<p>10 Aug 2020</p>
											</div>
											<div class="ms-auto">
												<a href="javascript:void(0);" class="btn btn-primary btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
												<a href="javascript:void(0);" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--**********************************
            Chat box End
        ***********************************-->
		<!--**********************************
            Header start
        ***********************************-->
		<div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
							<div class="input-group search-area">
								<input type="text" class="form-control" placeholder="Search here...">
								<span class="input-group-text"><a href="javascript:void(0)">
									<svg width="15" height="15" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M17.5605 15.4395L13.7527 11.6317C14.5395 10.446 15 9.02625 15 7.5C15 3.3645 11.6355 0 7.5 0C3.3645 0 0 3.3645 0 7.5C0 11.6355 3.3645 15 7.5 15C9.02625 15 10.446 14.5395 11.6317 13.7527L15.4395 17.5605C16.0245 18.1462 16.9755 18.1462 17.5605 17.5605C18.1462 16.9747 18.1462 16.0252 17.5605 15.4395V15.4395ZM2.25 7.5C2.25 4.605 4.605 2.25 7.5 2.25C10.395 2.25 12.75 4.605 12.75 7.5C12.75 10.395 10.395 12.75 7.5 12.75C4.605 12.75 2.25 10.395 2.25 7.5V7.5Z" fill="#01A3FF"/>
									</svg>
								</a></span>
							</div>
                        </div>
                        <ul class="navbar-nav header-right">
							<li class="nav-item">
								<div class="search-coundry">
									<select class="form-control custom-image-select-2 image-select mt-3 mt-sm-0">
										<option data-thumbnail="/admin-panel/images/svg/albania.svg" data-content="<img src='images/svg/albania.svg'/> Dash Coin">Albania</option>
										<option data-thumbnail="/admin-panel/images/svg/algeria.svg" data-content="<img src='images/svg/algeria.svg'/> Ripple">Algeria</option>
										<option data-thumbnail="/admin-panel/images/svg/usflag.svg" data-content="<img src='images/svg/usflag.svg'/> Ethereum">Austria</option>
										<option data-thumbnail="/admin-panel/images/svg/rus.svg" data-content="<img src='images/svg/rus.svg'/> Bitcoin">Belarus</option>
									</select>
								</div>
							</li>
							<li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link  menu-wallet" href="javascript:void(0);">
									<i class="material-icons"> widgets </i>
                                </a>
							</li>
							<li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link bell-link" href="javascript:void(0);">
									<svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M4.33333 22.75C4.19613 22.7503 4.0601 22.7246 3.9325 22.6742C3.73093 22.5939 3.55811 22.4549 3.43642 22.2753C3.31473 22.0957 3.24979 21.8836 3.25 21.6667V4.33333C3.25 4.04602 3.36414 3.77047 3.5673 3.5673C3.77047 3.36414 4.04602 3.25 4.33333 3.25H21.6667C21.954 3.25 22.2295 3.36414 22.4327 3.5673C22.6359 3.77047 22.75 4.04602 22.75 4.33333V7.58333C22.75 7.87065 22.6359 8.1462 22.4327 8.34937C22.2295 8.55253 21.954 8.66667 21.6667 8.66667C21.3793 8.66667 21.1038 8.55253 20.9006 8.34937C20.6975 8.1462 20.5833 7.87065 20.5833 7.58333V5.41667H5.41667V18.9367L7.58333 16.5967C7.68803 16.4837 7.81563 16.3943 7.9576 16.3345C8.09958 16.2747 8.25267 16.2459 8.40667 16.25H20.5833V11.9167C20.5833 11.6293 20.6975 11.3538 20.9006 11.1506C21.1038 10.9475 21.3793 10.8333 21.6667 10.8333C21.954 10.8333 22.2295 10.9475 22.4327 11.1506C22.6359 11.3538 22.75 11.6293 22.75 11.9167V17.3333C22.75 17.6207 22.6359 17.8962 22.4327 18.0994C22.2295 18.3025 21.954 18.4167 21.6667 18.4167H8.8725L5.12417 22.4033C5.02316 22.5122 4.90083 22.5992 4.76478 22.6589C4.62874 22.7185 4.48188 22.7495 4.33333 22.75Z" fill="#666666"/>
										<path d="M17.3334 9.75001H8.66671C8.37939 9.75001 8.10384 9.63587 7.90068 9.43271C7.69751 9.22954 7.58337 8.95399 7.58337 8.66668C7.58337 8.37936 7.69751 8.10381 7.90068 7.90064C8.10384 7.69748 8.37939 7.58334 8.66671 7.58334H17.3334C17.6207 7.58334 17.8962 7.69748 18.0994 7.90064C18.3026 8.10381 18.4167 8.37936 18.4167 8.66668C18.4167 8.95399 18.3026 9.22954 18.0994 9.43271C17.8962 9.63587 17.6207 9.75001 17.3334 9.75001ZM17.3334 14.0833H8.66671C8.37939 14.0833 8.10384 13.9692 7.90068 13.766C7.69751 13.5629 7.58337 13.2873 7.58337 13C7.58337 12.7127 7.69751 12.4371 7.90068 12.234C8.10384 12.0308 8.37939 11.9167 8.66671 11.9167H17.3334C17.6207 11.9167 17.8962 12.0308 18.0994 12.234C18.3026 12.4371 18.4167 12.7127 18.4167 13C18.4167 13.2873 18.3026 13.5629 18.0994 13.766C17.8962 13.9692 17.6207 14.0833 17.3334 14.0833Z" fill="#666666"/>
									</svg>
                                </a>
							</li>
							<li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link " href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
									<svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M22.75 10.8334C22.7469 9.8751 22.4263 8.94488 21.8382 8.18826C21.2501 7.43163 20.4279 6.89126 19.5 6.6517V4.33337C19.4997 4.15871 19.4572 3.98672 19.3761 3.83204C19.295 3.67736 19.1777 3.54459 19.0342 3.44503C18.8922 3.34623 18.7286 3.28286 18.5571 3.26024C18.3856 3.23763 18.2111 3.25641 18.0484 3.31503L8.59086 6.7492L4.39835 6.50003C4.25011 6.49047 4.10147 6.51151 3.9617 6.56183C3.82192 6.61215 3.69399 6.69068 3.58585 6.79253C3.4789 6.89448 3.39394 7.01723 3.33619 7.15323C3.27843 7.28924 3.24911 7.43561 3.25002 7.58337V15.1667C3.25022 15.3205 3.28316 15.4725 3.34667 15.6126C3.41018 15.7527 3.5028 15.8777 3.61835 15.9792C3.733 16.0795 3.86752 16.1545 4.01312 16.1993C4.15873 16.2441 4.31214 16.2577 4.46335 16.2392L5.88252 16.0659L6.90085 21.8509C6.94471 22.1052 7.07794 22.3356 7.27655 22.5004C7.47516 22.6653 7.7261 22.7538 7.98419 22.75H11.9167C12.0748 22.7521 12.2314 22.7195 12.3756 22.6545C12.5197 22.5896 12.648 22.4939 12.7512 22.3741C12.8544 22.2544 12.9302 22.1135 12.9732 21.9613C13.0162 21.8092 13.0253 21.6494 13 21.4934L12.1984 16.7267L18.1242 18.4167C18.2211 18.4325 18.3198 18.4325 18.4167 18.4167C18.704 18.4167 18.9796 18.3026 19.1827 18.0994C19.3859 17.8962 19.5 17.6207 19.5 17.3334V15.015C20.4279 14.7755 21.2501 14.2351 21.8382 13.4785C22.4263 12.7218 22.7469 11.7916 22.75 10.8334ZM5.41669 8.7317L7.58335 8.85087V13.6717L5.41669 13.9425V8.7317ZM10.6384 20.5834H8.88336L8.03836 15.795L8.59086 15.73L9.89086 16.0875L10.6384 20.5834ZM17.3334 15.9034L11.4292 14.2675C11.2529 14.1491 11.0457 14.085 10.8334 14.0834L9.75002 13.78V8.6667L17.3334 5.91503V15.9034ZM19.5 12.6534V8.97003C19.8233 9.16188 20.0912 9.43455 20.2772 9.76124C20.4632 10.0879 20.5611 10.4574 20.5611 10.8334C20.5611 11.2093 20.4632 11.5788 20.2772 11.9055C20.0912 12.2322 19.8233 12.5049 19.5 12.6967V12.6534Z" fill="#666666"/>
									</svg>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end of-visible">
									<div class="dropdown-header">
										<h4 class="title mb-0">Notification</h4>
										<a href="javascript:void(0);" class="d-none"><i class="flaticon-381-settings-6"></i></a>
									</div>
                                    <div id="DZ_W_Notification1" class="widget-media dlab-scroll p-3" style="height:380px;">
										<ul class="timeline">
											<li>
												<div class="timeline-panel">
													<div class="media me-2">
														<img alt="image" width="50" src="/admin-panel/images/avatar/1.jpg">
													</div>
													<div class="media-body">
														<h6 class="mb-1">Dr sultads Send you Photo</h6>
														<small class="d-block">29 July 2020 - 02:26 PM</small>
													</div>
												</div>
											</li>
											<li>
												<div class="timeline-panel">
													<div class="media me-2 media-info">
														KG
													</div>
													<div class="media-body">
														<h6 class="mb-1">Resport created successfully</h6>
														<small class="d-block">29 July 2020 - 02:26 PM</small>
													</div>
												</div>
											</li>
											<li>
												<div class="timeline-panel">
													<div class="media me-2 media-success">
														<i class="fa fa-home"></i>
													</div>
													<div class="media-body">
														<h6 class="mb-1">Reminder : Treatment Time!</h6>
														<small class="d-block">29 July 2020 - 02:26 PM</small>
													</div>
												</div>
											</li>
											 <li>
												<div class="timeline-panel">
													<div class="media me-2">
														<img alt="image" width="50" src="/admin-panel/images/avatar/1.jpg">
													</div>
													<div class="media-body">
														<h6 class="mb-1">Dr sultads Send you Photo</h6>
														<small class="d-block">29 July 2020 - 02:26 PM</small>
													</div>
												</div>
											</li>
											<li>
												<div class="timeline-panel">
													<div class="media me-2 media-danger">
														KG
													</div>
													<div class="media-body">
														<h6 class="mb-1">Resport created successfully</h6>
														<small class="d-block">29 July 2020 - 02:26 PM</small>
													</div>
												</div>
											</li>
											<li>
												<div class="timeline-panel">
													<div class="media me-2 media-primary">
														<i class="fa fa-home"></i>
													</div>
													<div class="media-body">
														<h6 class="mb-1">Reminder : Treatment Time!</h6>
														<small class="d-block">29 July 2020 - 02:26 PM</small>
													</div>
												</div>
											</li>
										</ul>
									</div>
                                    <a class="all-notification" href="javascript:void(0);">See all notifications <i class="ti-arrow-end"></i></a>
                                </div>
                            </li>

							<li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link " href="javascript:void(0);" data-bs-toggle="dropdown">
									<svg width="22" height="21" viewBox="0 0 22 21" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M21.0966 7.93751L19.0491 7.28195L20.0133 5.42972C20.111 5.23585 20.1437 5.01761 20.1069 4.80514C20.07 4.59266 19.9654 4.39641 19.8075 4.24346L17.5 2.02703C17.3399 1.87311 17.1336 1.77126 16.9101 1.7358C16.6867 1.70034 16.4572 1.73304 16.2541 1.82932L14.3258 2.75544L13.6433 0.788743C13.5712 0.583741 13.4344 0.405421 13.2519 0.278597C13.0694 0.151774 12.8502 0.0827567 12.625 0.0811497H9.37496C9.14785 0.0805866 8.92629 0.148599 8.74161 0.275573C8.55693 0.402548 8.41847 0.582062 8.34579 0.788743L7.66329 2.75544L5.73496 1.82932C5.53312 1.73544 5.30592 1.70404 5.08472 1.73945C4.86351 1.77487 4.65919 1.87535 4.49996 2.02703L2.19246 4.24346C2.03222 4.39722 1.92619 4.59536 1.88927 4.81001C1.85234 5.02466 1.88639 5.24503 1.98663 5.44013L2.9508 7.29236L0.903296 7.94792C0.689871 8.01715 0.504224 8.14857 0.37219 8.32389C0.240156 8.4992 0.168303 8.70969 0.16663 8.92606V12.0478C0.166043 12.2659 0.23685 12.4788 0.369042 12.6561C0.501233 12.8335 0.688123 12.9665 0.903296 13.0363L2.9508 13.6919L1.98663 15.5441C1.88889 15.738 1.8562 15.9562 1.89307 16.1687C1.92994 16.3812 2.03455 16.5775 2.19246 16.7304L4.49996 18.9468C4.66004 19.1007 4.86632 19.2026 5.08979 19.2381C5.31326 19.2735 5.54268 19.2408 5.7458 19.1445L7.67413 18.2184L8.35663 20.1851C8.4293 20.3918 8.56777 20.5713 8.75245 20.6983C8.93713 20.8253 9.15868 20.8933 9.38579 20.8927H12.6358C12.8629 20.8933 13.0845 20.8253 13.2691 20.6983C13.4538 20.5713 13.5923 20.3918 13.665 20.1851L14.3475 18.2184L16.2758 19.1445C16.4763 19.2361 16.7013 19.2662 16.9203 19.2308C17.1392 19.1954 17.3416 19.0963 17.5 18.9468L19.8075 16.7304C19.9677 16.5766 20.0737 16.3785 20.1107 16.1639C20.1476 15.9492 20.1135 15.7288 20.0133 15.5337L19.0491 13.6815L21.0966 13.0259C21.3101 12.9567 21.4957 12.8253 21.6277 12.65C21.7598 12.4747 21.8316 12.2642 21.8333 12.0478V8.92606C21.8339 8.70791 21.7631 8.4951 21.6309 8.31771C21.4987 8.14032 21.3118 8.00732 21.0966 7.93751ZM19.6666 11.2986L18.3666 11.7148C18.0677 11.808 17.7934 11.9624 17.5629 12.1676C17.3323 12.3727 17.1509 12.6235 17.0314 12.9027C16.9118 13.1819 16.8569 13.4827 16.8705 13.7843C16.8841 14.0859 16.9658 14.381 17.11 14.6492L17.7275 15.8355L16.5358 16.9801L15.3333 16.3558C15.0555 16.2228 14.7512 16.1488 14.441 16.1386C14.1308 16.1285 13.8219 16.1824 13.5353 16.2969C13.2487 16.4113 12.9911 16.5836 12.7798 16.802C12.5685 17.0204 12.4086 17.2799 12.3108 17.5629L11.8775 18.8116H10.155L9.72163 17.5629C9.62466 17.2757 9.46382 17.0123 9.25027 16.7908C9.03671 16.5693 8.77556 16.3951 8.48492 16.2803C8.19427 16.1655 7.8811 16.1127 7.56712 16.1258C7.25314 16.1388 6.94587 16.2173 6.66663 16.3558L5.43163 16.9489L4.23996 15.8043L4.88996 14.6492C5.03415 14.381 5.11586 14.0859 5.12943 13.7843C5.143 13.4827 5.0881 13.1819 4.96855 12.9027C4.84899 12.6235 4.66764 12.3727 4.43707 12.1676C4.2065 11.9624 3.93223 11.808 3.6333 11.7148L2.3333 11.2986V9.67528L3.6333 9.25905C3.93223 9.16591 4.2065 9.01142 4.43707 8.80629C4.66764 8.60117 4.84899 8.35032 4.96855 8.07114C5.0881 7.79197 5.143 7.49116 5.12943 7.18957C5.11586 6.88798 5.03415 6.59284 4.88996 6.32462L4.27246 5.16958L5.46413 4.02494L6.66663 4.61807C6.94587 4.75656 7.25314 4.83505 7.56712 4.84808C7.8811 4.86112 8.19427 4.80839 8.48492 4.69355C8.77556 4.57871 9.03671 4.40452 9.25027 4.18305C9.46382 3.96158 9.62466 3.69814 9.72163 3.411L10.155 2.16231H11.845L12.2783 3.411C12.3753 3.69814 12.5361 3.96158 12.7497 4.18305C12.9632 4.40452 13.2244 4.57871 13.515 4.69355C13.8056 4.80839 14.1188 4.86112 14.4328 4.84808C14.7468 4.83505 15.054 4.75656 15.3333 4.61807L16.5683 4.02494L17.76 5.16958L17.11 6.32462C16.9715 6.59147 16.8944 6.88377 16.8839 7.18173C16.8733 7.47969 16.9295 7.77636 17.0486 8.05165C17.1678 8.32693 17.3471 8.57442 17.5745 8.77734C17.8019 8.98027 18.0721 9.1339 18.3666 9.22783L19.6666 9.64406V11.2986ZM11 6.32462C10.1429 6.32462 9.3051 6.56873 8.59249 7.02609C7.87988 7.48345 7.32446 8.13352 6.99648 8.89408C6.6685 9.65464 6.58269 10.4915 6.74989 11.299C6.91709 12.1064 7.3298 12.848 7.93583 13.4301C8.54186 14.0122 9.31398 14.4087 10.1546 14.5693C10.9952 14.7299 11.8664 14.6474 12.6583 14.3324C13.4501 14.0174 14.1268 13.4839 14.603 12.7994C15.0791 12.1149 15.3333 11.3102 15.3333 10.4869C15.3333 9.38302 14.8767 8.32432 14.0641 7.54373C13.2514 6.76315 12.1492 6.32462 11 6.32462ZM11 12.5681C10.5714 12.5681 10.1525 12.446 9.79623 12.2173C9.43992 11.9887 9.16221 11.6636 8.99822 11.2834C8.83423 10.9031 8.79132 10.4846 8.87493 10.0809C8.95853 9.67721 9.16488 9.30639 9.4679 9.01533C9.77091 8.72428 10.157 8.52606 10.5773 8.44576C10.9976 8.36546 11.4332 8.40667 11.8291 8.56419C12.225 8.72171 12.5634 8.98846 12.8015 9.3307C13.0396 9.67295 13.1666 10.0753 13.1666 10.4869C13.1666 11.0389 12.9384 11.5682 12.532 11.9585C12.1257 12.3488 11.5746 12.5681 11 12.5681Z" fill="#666666"/>
									</svg>
                                </a>
								<div class="dropdown-menu dropdown-menu-end">
									<div id="DZ_W_TimeLine02" class="widget-timeline dlab-scroll style-1 ps ps--active-y p-3 height370">
										<ul class="timeline">
											<li>
												<div class="timeline-badge primary"></div>
												<a class="timeline-panel text-muted" href="javascript:void(0);">
													<span>10 minutes ago</span>
													<h6 class="mb-0">Youtube, a video-sharing website, goes live <strong class="text-primary">$500</strong>.</h6>
												</a>
											</li>
											<li>
												<div class="timeline-badge info">
												</div>
												<a class="timeline-panel text-muted" href="javascript:void(0);">
													<span>20 minutes ago</span>
													<h6 class="mb-0">New order placed <strong class="text-info">#XF-2356.</strong></h6>
													<p class="mb-0">Quisque a consequat ante Sit amet magna at volutapt...</p>
												</a>
											</li>
											<li>
												<div class="timeline-badge danger">
												</div>
												<a class="timeline-panel text-muted" href="javascript:void(0);">
													<span>30 minutes ago</span>
													<h6 class="mb-0">john just buy your product <strong class="text-warning">Sell $250</strong></h6>
												</a>
											</li>
											<li>
												<div class="timeline-badge success">
												</div>
												<a class="timeline-panel text-muted" href="javascript:void(0);">
													<span>15 minutes ago</span>
													<h6 class="mb-0">StumbleUpon is acquired by eBay. </h6>
												</a>
											</li>
											<li>
												<div class="timeline-badge warning">
												</div>
												<a class="timeline-panel text-muted" href="javascript:void(0);">
													<span>20 minutes ago</span>
													<h6 class="mb-0">Mashable, a news website and blog, goes live.</h6>
												</a>
											</li>
											<li>
												<div class="timeline-badge dark">
												</div>
												<a class="timeline-panel text-muted" href="javascript:void(0);">
													<span>20 minutes ago</span>
													<h6 class="mb-0">Mashable, a news website and blog, goes live.</h6>
												</a>
											</li>
										</ul>
									</div>
								</div>
							</li>
							<li class="nav-item">
								<div class="dropdown header-profile2">
									<a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-expanded="false">
										<div class="header-info2 d-flex align-items-center">
											<div class="d-flex align-items-center sidebar-info">
												<div>
													<h4 class="mb-0">Nella Vita</h4>
													<span class="d-block text-end">Admin</span>
												</div>
											</div>
											<img src="/admin-panel/images/user.jpg" alt="">
										</div>
									</a>
									<div class="dropdown-menu dropdown-menu-end" style="">
										<a href="app-profile.html" class="dropdown-item ai-icon ">
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<polygon points="0 0 24 0 24 24 0 24"/>
													<path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
													<path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="var(--primary)" fill-rule="nonzero"/>
												</g>
											</svg>
											<span class="ms-2">Profile </span>
										</a>
										<a href="chat.html" class="dropdown-item ai-icon ">
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24"/>
													<path d="M21.9999843,15.009808 L22.0249378,15 L22.0249378,19.5857864 C22.0249378,20.1380712 21.5772226,20.5857864 21.0249378,20.5857864 C20.7597213,20.5857864 20.5053674,20.4804296 20.317831,20.2928932 L18.0249378,18 L5,18 C3.34314575,18 2,16.6568542 2,15 L2,6 C2,4.34314575 3.34314575,3 5,3 L19,3 C20.6568542,3 22,4.34314575 22,6 L22,15 C22,15.0032706 21.9999948,15.0065399 21.9999843,15.009808 Z M6.16794971,10.5547002 C7.67758127,12.8191475 9.64566871,14 12,14 C14.3543313,14 16.3224187,12.8191475 17.8320503,10.5547002 C18.1384028,10.0951715 18.0142289,9.47430216 17.5547002,9.16794971 C17.0951715,8.86159725 16.4743022,8.98577112 16.1679497,9.4452998 C15.0109146,11.1808525 13.6456687,12 12,12 C10.3543313,12 8.9890854,11.1808525 7.83205029,9.4452998 C7.52569784,8.98577112 6.90482849,8.86159725 6.4452998,9.16794971 C5.98577112,9.47430216 5.86159725,10.0951715 6.16794971,10.5547002 Z" fill="var(--primary)"/>
												</g>
											</svg>
											<span class="ms-2">Message </span>
										</a>
										<a href="email-inbox.html" class="dropdown-item ai-icon ">
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24"/>
													<path d="M21,12.0829584 C20.6747915,12.0283988 20.3407122,12 20,12 C16.6862915,12 14,14.6862915 14,18 C14,18.3407122 14.0283988,18.6747915 14.0829584,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,8 C3,6.8954305 3.8954305,6 5,6 L19,6 C20.1045695,6 21,6.8954305 21,8 L21,12.0829584 Z M18.1444251,7.83964668 L12,11.1481833 L5.85557487,7.83964668 C5.4908718,7.6432681 5.03602525,7.77972206 4.83964668,8.14442513 C4.6432681,8.5091282 4.77972206,8.96397475 5.14442513,9.16035332 L11.6444251,12.6603533 C11.8664074,12.7798822 12.1335926,12.7798822 12.3555749,12.6603533 L18.8555749,9.16035332 C19.2202779,8.96397475 19.3567319,8.5091282 19.1603533,8.14442513 C18.9639747,7.77972206 18.5091282,7.6432681 18.1444251,7.83964668 Z" fill="#000000"/>
													<circle fill="var(--primary)" opacity="0.3" cx="19.5" cy="17.5" r="2.5"/>
												</g>
											</svg>
											<span class="ms-2">Notification </span>
										</a>
										<a href="javascript:void(0);" class="dropdown-item ai-icon ">
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24"/>
													<path d="M18.6225,9.75 L18.75,9.75 C19.9926407,9.75 21,10.7573593 21,12 C21,13.2426407 19.9926407,14.25 18.75,14.25 L18.6854912,14.249994 C18.4911876,14.250769 18.3158978,14.366855 18.2393549,14.5454486 C18.1556809,14.7351461 18.1942911,14.948087 18.3278301,15.0846699 L18.372535,15.129375 C18.7950334,15.5514036 19.03243,16.1240792 19.03243,16.72125 C19.03243,17.3184208 18.7950334,17.8910964 18.373125,18.312535 C17.9510964,18.7350334 17.3784208,18.97243 16.78125,18.97243 C16.1840792,18.97243 15.6114036,18.7350334 15.1896699,18.3128301 L15.1505513,18.2736469 C15.008087,18.1342911 14.7951461,18.0956809 14.6054486,18.1793549 C14.426855,18.2558978 14.310769,18.4311876 14.31,18.6225 L14.31,18.75 C14.31,19.9926407 13.3026407,21 12.06,21 C10.8173593,21 9.81,19.9926407 9.81,18.75 C9.80552409,18.4999185 9.67898539,18.3229986 9.44717599,18.2361469 C9.26485393,18.1556809 9.05191298,18.1942911 8.91533009,18.3278301 L8.870625,18.372535 C8.44859642,18.7950334 7.87592081,19.03243 7.27875,19.03243 C6.68157919,19.03243 6.10890358,18.7950334 5.68746499,18.373125 C5.26496665,17.9510964 5.02757002,17.3784208 5.02757002,16.78125 C5.02757002,16.1840792 5.26496665,15.6114036 5.68716991,15.1896699 L5.72635306,15.1505513 C5.86570889,15.008087 5.90431906,14.7951461 5.82064513,14.6054486 C5.74410223,14.426855 5.56881236,14.310769 5.3775,14.31 L5.25,14.31 C4.00735931,14.31 3,13.3026407 3,12.06 C3,10.8173593 4.00735931,9.81 5.25,9.81 C5.50008154,9.80552409 5.67700139,9.67898539 5.76385306,9.44717599 C5.84431906,9.26485393 5.80570889,9.05191298 5.67216991,8.91533009 L5.62746499,8.870625 C5.20496665,8.44859642 4.96757002,7.87592081 4.96757002,7.27875 C4.96757002,6.68157919 5.20496665,6.10890358 5.626875,5.68746499 C6.04890358,5.26496665 6.62157919,5.02757002 7.21875,5.02757002 C7.81592081,5.02757002 8.38859642,5.26496665 8.81033009,5.68716991 L8.84944872,5.72635306 C8.99191298,5.86570889 9.20485393,5.90431906 9.38717599,5.82385306 L9.49484664,5.80114977 C9.65041313,5.71688974 9.7492905,5.55401473 9.75,5.3775 L9.75,5.25 C9.75,4.00735931 10.7573593,3 12,3 C13.2426407,3 14.25,4.00735931 14.25,5.25 L14.249994,5.31450877 C14.250769,5.50881236 14.366855,5.68410223 14.552824,5.76385306 C14.7351461,5.84431906 14.948087,5.80570889 15.0846699,5.67216991 L15.129375,5.62746499 C15.5514036,5.20496665 16.1240792,4.96757002 16.72125,4.96757002 C17.3184208,4.96757002 17.8910964,5.20496665 18.312535,5.626875 C18.7350334,6.04890358 18.97243,6.62157919 18.97243,7.21875 C18.97243,7.81592081 18.7350334,8.38859642 18.3128301,8.81033009 L18.2736469,8.84944872 C18.1342911,8.99191298 18.0956809,9.20485393 18.1761469,9.38717599 L18.1988502,9.49484664 C18.2831103,9.65041313 18.4459853,9.7492905 18.6225,9.75 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
													<path d="M12,15 C13.6568542,15 15,13.6568542 15,12 C15,10.3431458 13.6568542,9 12,9 C10.3431458,9 9,10.3431458 9,12 C9,13.6568542 10.3431458,15 12,15 Z" fill="#000000"/>
												</g>
											</svg>
											<span class="ms-2">Settings </span>
										</a>
										<a href="page-login.html" class="dropdown-item ai-icon">
											<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--primary)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
											<span class="ms-2">Logout </span>
										</a>
									</div>
								</div>
							</li>
                        </ul>
                    </div>
				</nav>
			</div>

		</div>
			<!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="dlabnav">
			<div class="dlabnav-scroll">
				<ul class="metismenu" id="menu">
					<li>
                        <a href="{{ route('dashboard') }}" aria-expanded="false">
							<i class="material-icons-outlined">dashboard</i>
							<span class="nav-text">Dashboard</span>
						</a>
					</li>
					<li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
						<i class="material-icons">folder</i>
						<span class="nav-text">File Manager</span>
					</a>
					<ul aria-expanded="false">
						<li><a href="file-manager.html">File Manager</a></li>
						<li><a href="user.html">User</a></li>
						<li><a href="celandar.html">Calendar</a></li>
						<li><a href="to-do-list.html">To Do List</a></li>
						<li><a href="chat.html">Chat</a></li>
						<li><a href="activity.html">Activity</a></li>
					</ul>
					</li>
					<li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
						<i class="material-icons"> app_registration </i>
						<span class="nav-text">Apps</span>
						</a>
						<ul aria-expanded="false">
							<li><a href="./app-profile.html">Profile</a></li>
							<li><a href="./edit-profile.html">Edit Profile</a></li>
							<li><a href="./post-details.html">Post Details</a></li>
							<li><a class="has-arrow" href="javascript:void(0);" aria-expanded="false">Email</a>
								<ul aria-expanded="false">
									<li><a href="./email-compose.html">Compose</a></li>
									<li><a href="./email-inbox.html">Inbox</a></li>
									<li><a href="./email-read.html">Read</a></li>
								</ul>
							</li>
							<li><a href="./app-calender.html">Calendar</a></li>
							<li><a class="has-arrow" href="javascript:void(0);" aria-expanded="false">Shop</a>
								<ul aria-expanded="false">
									<li><a href="./ecom-product-grid.html">Product Grid</a></li>
									<li><a href="./ecom-product-list.html">Product List</a></li>
									<li><a href="./ecom-product-detail.html">Product Details</a></li>
									<li><a href="./ecom-product-order.html">Order</a></li>
									<li><a href="./ecom-checkout.html">Checkout</a></li>
									<li><a href="./ecom-invoice.html">Invoice</a></li>
									<li><a href="./ecom-customers.html">Customers</a></li>
								</ul>
							</li>
						</ul>
					</li>
					<li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
						<i class="material-icons"> assessment </i>
							<span class="nav-text">Charts</span>
						</a>
						<ul aria-expanded="false">
							<li><a href="./chart-flot.html">Flot</a></li>
							<li><a href="./chart-morris.html">Morris</a></li>
							<li><a href="./chart-chartjs.html">Chartjs</a></li>
							<li><a href="./chart-chartist.html">Chartist</a></li>
							<li><a href="./chart-sparkline.html">Sparkline</a></li>
							<li><a href="./chart-peity.html">Peity</a></li>
						</ul>
					</li>
					<li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">

							<i class="material-icons"> favorite </i>
							<span class="nav-text">Bootstrap</span>
						</a>
						<ul aria-expanded="false">
							<li><a href="./ui-accordion.html">Accordion</a></li>
							<li><a href="./ui-alert.html">Alert</a></li>
							<li><a href="./ui-badge.html">Badge</a></li>
							<li><a href="./ui-button.html">Button</a></li>
							<li><a href="./ui-modal.html">Modal</a></li>
							<li><a href="./ui-button-group.html">Button Group</a></li>
							<li><a href="./ui-list-group.html">List Group</a></li>
							<li><a href="./ui-card.html">Cards</a></li>
							<li><a href="./ui-carousel.html">Carousel</a></li>
							<li><a href="./ui-dropdown.html">Dropdown</a></li>
							<li><a href="./ui-popover.html">Popover</a></li>
							<li><a href="./ui-progressbar.html">Progressbar</a></li>
							<li><a href="./ui-tab.html">Tab</a></li>
							<li><a href="./ui-typography.html">Typography</a></li>
							<li><a href="./ui-pagination.html">Pagination</a></li>
							<li><a href="./ui-grid.html">Grid</a></li>

						</ul>
					</li>
					<li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
							<i class="material-icons"> extension </i>
							<span class="nav-text">Plugins</span>
						</a>
						<ul aria-expanded="false">
							<li><a href="./uc-select2.html">Select 2</a></li>
							<li><a href="./uc-nestable.html">Nestedable</a></li>
							<li><a href="./uc-noui-slider.html">Noui Slider</a></li>
							<li><a href="./uc-sweetalert.html">Sweet Alert</a></li>
							<li><a href="./uc-toastr.html">Toastr</a></li>
							<li><a href="./map-jqvmap.html">Jqv Map</a></li>
							<li><a href="./uc-lightgallery.html">Light Gallery</a></li>
						</ul>
					</li>
					<li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
							<i class="material-icons"> widgets </i>
							<span class="nav-text">Widget</span>
						</a>
						<ul aria-expanded="false">
							<li><a href="./widget-chart.html">Chart</a></li>
							<li><a href="./widget-card.html">Card</a></li>
							<li><a href="./widget-list.html">List</a></li>
						</ul>
					</li>
					<li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
							<i class="material-icons"> insert_drive_file </i>
							<span class="nav-text">Forms</span>
						</a>
						<ul aria-expanded="false">
							<li><a href="./form-element.html">Form Elements</a></li>
							<li><a href="./form-wizard.html">Wizard</a></li>
							<li><a href="./form-ckeditor.html">CkEditor</a></li>
							<li><a href="form-pickers.html">Pickers</a></li>
							<li><a href="form-validation.html">Form Validate</a></li>
						</ul>
					</li>
					<li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
							<i class="material-icons"> table_chart </i>
							<span class="nav-text">Table</span>
						</a>
						<ul aria-expanded="false">
							<li><a href="table-bootstrap-basic.html">Bootstrap</a></li>
							<li><a href="table-datatable-basic.html">Datatable</a></li>
						</ul>
					</li>
					<li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
							<i class="material-icons">article</i>
							<span class="nav-text">Pages</span>
						</a>
						<ul aria-expanded="false">
							<li><a href="./page-login.html">Login</a></li>
							<li><a href="./page-register.html">Register</a></li>
							<li><a class="has-arrow" href="javascript:void(0);" aria-expanded="false">Error</a>
								<ul aria-expanded="false">
									<li><a href="./page-error-400.html">Error 400</a></li>
									<li><a href="./page-error-403.html">Error 403</a></li>
									<li><a href="./page-error-404.html">Error 404</a></li>
									<li><a href="./page-error-500.html">Error 500</a></li>
									<li><a href="./page-error-503.html">Error 503</a></li>
								</ul>
							</li>
							<li><a href="./page-lock-screen.html">Lock Screen</a></li>
							<li><a href="./empty-page.html">Empty Page</a></li>
						</ul>
					</li>
				</ul>
				<div class="support-box">
					<div class="media">
						<span>
							<svg width="22" height="29" viewBox="0 0 22 29" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M2.74982 1.40323C2.74982 2.17821 2.13421 2.80645 1.37482 2.80645C0.615425 2.80645 -0.000183105 2.17821 -0.000183105 1.40323C-0.000183105 0.628246 0.615425 0 1.37482 0C2.13421 0 2.74982 0.628246 2.74982 1.40323Z" fill="#FCFCFC"/>
								<path d="M9.16648 1.40323C9.16648 2.17821 8.55088 2.80645 7.79148 2.80645C7.03209 2.80645 6.41648 2.17821 6.41648 1.40323C6.41648 0.628246 7.03209 0 7.79148 0C8.55088 0 9.16648 0.628246 9.16648 1.40323Z" fill="#FCFCFC"/>
								<path d="M15.5832 1.40323C15.5832 2.17821 14.9675 2.80645 14.2082 2.80645C13.4488 2.80645 12.8332 2.17821 12.8332 1.40323C12.8332 0.628246 13.4488 0 14.2082 0C14.9675 0 15.5832 0.628246 15.5832 1.40323Z" fill="#FCFCFC"/>
								<path d="M21.9998 1.40323C21.9998 2.17821 21.3842 2.80645 20.6248 2.80645C19.8654 2.80645 19.2498 2.17821 19.2498 1.40323C19.2498 0.628246 19.8654 0 20.6248 0C21.3842 0 21.9998 0.628246 21.9998 1.40323Z" fill="#FCFCFC"/>
								<path d="M2.74982 7.95161C2.74982 8.72659 2.13421 9.35484 1.37482 9.35484C0.615425 9.35484 -0.000183105 8.72659 -0.000183105 7.95161C-0.000183105 7.17663 0.615425 6.54839 1.37482 6.54839C2.13421 6.54839 2.74982 7.17663 2.74982 7.95161Z" fill="#FCFCFC"/>
								<path d="M9.16648 7.95161C9.16648 8.72659 8.55088 9.35484 7.79148 9.35484C7.03209 9.35484 6.41648 8.72659 6.41648 7.95161C6.41648 7.17663 7.03209 6.54839 7.79148 6.54839C8.55088 6.54839 9.16648 7.17663 9.16648 7.95161Z" fill="#FCFCFC"/>
								<path d="M15.5832 7.95161C15.5832 8.72659 14.9675 9.35484 14.2082 9.35484C13.4488 9.35484 12.8332 8.72659 12.8332 7.95161C12.8332 7.17663 13.4488 6.54839 14.2082 6.54839C14.9675 6.54839 15.5832 7.17663 15.5832 7.95161Z" fill="#FCFCFC"/>
								<path d="M21.9998 7.95161C21.9998 8.72659 21.3842 9.35484 20.6248 9.35484C19.8654 9.35484 19.2498 8.72659 19.2498 7.95161C19.2498 7.17663 19.8654 6.54839 20.6248 6.54839C21.3842 6.54839 21.9998 7.17663 21.9998 7.95161Z" fill="#FCFCFC"/>
								<path d="M2.74982 14.5C2.74982 15.275 2.13421 15.9032 1.37482 15.9032C0.615425 15.9032 -0.000183105 15.275 -0.000183105 14.5C-0.000183105 13.725 0.615425 13.0968 1.37482 13.0968C2.13421 13.0968 2.74982 13.725 2.74982 14.5Z" fill="#FCFCFC"/>
								<path d="M9.16648 14.5C9.16648 15.275 8.55088 15.9032 7.79148 15.9032C7.03209 15.9032 6.41648 15.275 6.41648 14.5C6.41648 13.725 7.03209 13.0968 7.79148 13.0968C8.55088 13.0968 9.16648 13.725 9.16648 14.5Z" fill="#FCFCFC"/>
								<path d="M15.5832 14.5C15.5832 15.275 14.9675 15.9032 14.2082 15.9032C13.4488 15.9032 12.8332 15.275 12.8332 14.5C12.8332 13.725 13.4488 13.0968 14.2082 13.0968C14.9675 13.0968 15.5832 13.725 15.5832 14.5Z" fill="#FCFCFC"/>
								<path d="M21.9998 14.5C21.9998 15.275 21.3842 15.9032 20.6248 15.9032C19.8654 15.9032 19.2498 15.275 19.2498 14.5C19.2498 13.725 19.8654 13.0968 20.6248 13.0968C21.3842 13.0968 21.9998 13.725 21.9998 14.5Z" fill="#FCFCFC"/>
								<path d="M2.74982 21.0484C2.74982 21.8234 2.13421 22.4516 1.37482 22.4516C0.615425 22.4516 -0.000183105 21.8234 -0.000183105 21.0484C-0.000183105 20.2734 0.615425 19.6452 1.37482 19.6452C2.13421 19.6452 2.74982 20.2734 2.74982 21.0484Z" fill="#FCFCFC"/>
								<path d="M9.16648 21.0484C9.16648 21.8234 8.55088 22.4516 7.79148 22.4516C7.03209 22.4516 6.41648 21.8234 6.41648 21.0484C6.41648 20.2734 7.03209 19.6452 7.79148 19.6452C8.55088 19.6452 9.16648 20.2734 9.16648 21.0484Z" fill="#FCFCFC"/>
								<path d="M15.5832 21.0484C15.5832 21.8234 14.9675 22.4516 14.2082 22.4516C13.4488 22.4516 12.8332 21.8234 12.8332 21.0484C12.8332 20.2734 13.4488 19.6452 14.2082 19.6452C14.9675 19.6452 15.5832 20.2734 15.5832 21.0484Z" fill="#FCFCFC"/>
								<path d="M21.9998 21.0484C21.9998 21.8234 21.3842 22.4516 20.6248 22.4516C19.8654 22.4516 19.2498 21.8234 19.2498 21.0484C19.2498 20.2734 19.8654 19.6452 20.6248 19.6452C21.3842 19.6452 21.9998 20.2734 21.9998 21.0484Z" fill="#FCFCFC"/>
								<path d="M2.74982 27.5968C2.74982 28.3718 2.13421 29 1.37482 29C0.615425 29 -0.000183105 28.3718 -0.000183105 27.5968C-0.000183105 26.8218 0.615425 26.1935 1.37482 26.1935C2.13421 26.1935 2.74982 26.8218 2.74982 27.5968Z" fill="#FCFCFC"/>
								<path d="M9.16648 27.5968C9.16648 28.3718 8.55088 29 7.79148 29C7.03209 29 6.41648 28.3718 6.41648 27.5968C6.41648 26.8218 7.03209 26.1935 7.79148 26.1935C8.55088 26.1935 9.16648 26.8218 9.16648 27.5968Z" fill="#FCFCFC"/>
								<path d="M15.5832 27.5968C15.5832 28.3718 14.9675 29 14.2082 29C13.4488 29 12.8332 28.3718 12.8332 27.5968C12.8332 26.8218 13.4488 26.1935 14.2082 26.1935C14.9675 26.1935 15.5832 26.8218 15.5832 27.5968Z" fill="#FCFCFC"/>
								<path d="M21.9998 27.5968C21.9998 28.3718 21.3842 29 20.6248 29C19.8654 29 19.2498 28.3718 19.2498 27.5968C19.2498 26.8218 19.8654 26.1935 20.6248 26.1935C21.3842 26.1935 21.9998 26.8218 21.9998 27.5968Z" fill="#FCFCFC"/>
								</svg>
						</span>
					</div>
					<div class="info">
						<h3 class="fs-20">Upgrade you Account to Pro</h3>
						<a href="javascript:void(0);" class="btn bg-white btn-sm">Upgrade</a>
					</div>
				</div>
			</div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->


		<!--****
		Wallet Sidebar
		****-->
		<div class="wallet-bar wow fadeInRight dlab-scroll active" id="wallet-bar" data-wow-delay="0.7s">
				<div class="row ">
					<!-- --column-- -->
					<div class="col-xl-12">
						<div class="card bg-transparent contacts mb-1">
							<div class="card-header border-0 pb-0 px-3 pt-2">
								<div>
									<h2 class="heading mb-0">Contacts</h2>
									<span>You have <span class="font-w600">456</span> contacts</span>
								</div>
								<div >
									<a href="#" class="add" data-bs-toggle="modal" data-bs-target="#exampleModal">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M12 3C7.05 3 3 7.05 3 12C3 16.95 7.05 21 12 21C16.95 21 21 16.95 21 12C21 7.05 16.95 3 12 3ZM12 19.125C8.1 19.125 4.875 15.9 4.875 12C4.875 8.1 8.1 4.875 12 4.875C15.9 4.875 19.125 8.1 19.125 12C19.125 15.9 15.9 19.125 12 19.125Z" fill="white"/>
											<path d="M16.3503 11.0251H12.9753V7.65009C12.9753 7.12509 12.5253 6.67509 12.0003 6.67509C11.4753 6.67509 11.0253 7.12509 11.0253 7.65009V11.0251H7.65029C7.12529 11.0251 6.67529 11.4751 6.67529 12.0001C6.67529 12.5251 7.12529 12.9751 7.65029 12.9751H11.0253V16.3501C11.0253 16.8751 11.4753 17.3251 12.0003 17.3251C12.5253 17.3251 12.9753 16.8751 12.9753 16.3501V12.9751H16.3503C16.8753 12.9751 17.3253 12.5251 17.3253 12.0001C17.3253 11.4751 16.8753 11.0251 16.3503 11.0251Z" fill="white"/>
										</svg>
									</a>
								</div>
							</div>
							<div class="card-body loadmore-content  recent-activity-wrapper p-3 pt-2" id="RecentActivityContent">
								<!-- ---student--- -->
								<div class="d-flex align-items-center student">
									<span class="dz-media">
										<img src="/admin-panel/images/profile/small/pic1.jpg" alt="" width="50">
									</span>
									<div class="user-info">
										<h6 class="name"><a href="app-profile.html">Samantha William</a></h6>
										<span class="fs-14 font-w400 text-wrap">Marketing Manager</span>
									</div>
									<div class="indox">
										<a href="#">
											<svg width="19" height="14" viewBox="0 0 19 14" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M18 0.889911C18.0057 0.823365 18.0057 0.756458 18 0.689911L17.91 0.499911C17.91 0.499911 17.91 0.429911 17.86 0.399911L17.81 0.349911L17.65 0.219911C17.6062 0.175413 17.5556 0.138269 17.5 0.109911L17.33 0.0499115H17.13H0.93H0.73L0.56 0.119911C0.504246 0.143681 0.453385 0.177588 0.41 0.219911L0.25 0.349911C0.25 0.349911 0.25 0.349911 0.25 0.399911C0.25 0.449911 0.25 0.469911 0.2 0.499911L0.11 0.689911C0.10434 0.756458 0.10434 0.823365 0.11 0.889911L0 0.999911V12.9999C0 13.2651 0.105357 13.5195 0.292893 13.707C0.48043 13.8946 0.734784 13.9999 1 13.9999H10C10.2652 13.9999 10.5196 13.8946 10.7071 13.707C10.8946 13.5195 11 13.2651 11 12.9999C11 12.7347 10.8946 12.4803 10.7071 12.2928C10.5196 12.1053 10.2652 11.9999 10 11.9999H2V2.99991L8.4 7.79991C8.5731 7.92973 8.78363 7.99991 9 7.99991C9.21637 7.99991 9.4269 7.92973 9.6 7.79991L16 2.99991V11.9999H14C13.7348 11.9999 13.4804 12.1053 13.2929 12.2928C13.1054 12.4803 13 12.7347 13 12.9999C13 13.2651 13.1054 13.5195 13.2929 13.707C13.4804 13.8946 13.7348 13.9999 14 13.9999H17C17.2652 13.9999 17.5196 13.8946 17.7071 13.707C17.8946 13.5195 18 13.2651 18 12.9999V0.999911C18 0.999911 18 0.929911 18 0.889911ZM9 5.74991L4 1.99991H14L9 5.74991Z" fill="#01A3FF"/>
											</svg>
										</a>
									</div>
								</div>
								<!-- ---/student--- -->
								<!-- ---student--- -->
								<div class="d-flex align-items-center student">
									<span class="dz-media">
										<img src="./images/profile/small/pic2.jpg" alt="" width="50">
									</span>
									<div class="user-info">
										<h6 class="name"><a href="app-profile.html">Tony Soap</a></h6>
										<span class=" text-wrap text-break">UI Designer</span>
									</div>
									<div class="indox">
										<a href="#">
											<svg width="19" height="14" viewBox="0 0 19 14" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M18 0.889911C18.0057 0.823365 18.0057 0.756458 18 0.689911L17.91 0.499911C17.91 0.499911 17.91 0.429911 17.86 0.399911L17.81 0.349911L17.65 0.219911C17.6062 0.175413 17.5556 0.138269 17.5 0.109911L17.33 0.0499115H17.13H0.93H0.73L0.56 0.119911C0.504246 0.143681 0.453385 0.177588 0.41 0.219911L0.25 0.349911C0.25 0.349911 0.25 0.349911 0.25 0.399911C0.25 0.449911 0.25 0.469911 0.2 0.499911L0.11 0.689911C0.10434 0.756458 0.10434 0.823365 0.11 0.889911L0 0.999911V12.9999C0 13.2651 0.105357 13.5195 0.292893 13.707C0.48043 13.8946 0.734784 13.9999 1 13.9999H10C10.2652 13.9999 10.5196 13.8946 10.7071 13.707C10.8946 13.5195 11 13.2651 11 12.9999C11 12.7347 10.8946 12.4803 10.7071 12.2928C10.5196 12.1053 10.2652 11.9999 10 11.9999H2V2.99991L8.4 7.79991C8.5731 7.92973 8.78363 7.99991 9 7.99991C9.21637 7.99991 9.4269 7.92973 9.6 7.79991L16 2.99991V11.9999H14C13.7348 11.9999 13.4804 12.1053 13.2929 12.2928C13.1054 12.4803 13 12.7347 13 12.9999C13 13.2651 13.1054 13.5195 13.2929 13.707C13.4804 13.8946 13.7348 13.9999 14 13.9999H17C17.2652 13.9999 17.5196 13.8946 17.7071 13.707C17.8946 13.5195 18 13.2651 18 12.9999V0.999911C18 0.999911 18 0.929911 18 0.889911ZM9 5.74991L4 1.99991H14L9 5.74991Z" fill="#01A3FF"/>
											</svg>
										</a>
									</div>
								</div>
								<!-- ---/student--- -->
								<!-- ---student--- -->
								<div class="d-flex align-items-center student">
									<span class="dz-media">
										<img src="./images/profile/small/pic3.jpg" alt="" width="50">
									</span>
									<div class="user-info">
										<h6 class="name"><a href="app-profile.html">Karen Hope</a></h6>
										<span>Web Developer</span>
									</div>
									<div class="indox">
										<a href="#">
											<svg width="19" height="14" viewBox="0 0 19 14" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M18 0.889911C18.0057 0.823365 18.0057 0.756458 18 0.689911L17.91 0.499911C17.91 0.499911 17.91 0.429911 17.86 0.399911L17.81 0.349911L17.65 0.219911C17.6062 0.175413 17.5556 0.138269 17.5 0.109911L17.33 0.0499115H17.13H0.93H0.73L0.56 0.119911C0.504246 0.143681 0.453385 0.177588 0.41 0.219911L0.25 0.349911C0.25 0.349911 0.25 0.349911 0.25 0.399911C0.25 0.449911 0.25 0.469911 0.2 0.499911L0.11 0.689911C0.10434 0.756458 0.10434 0.823365 0.11 0.889911L0 0.999911V12.9999C0 13.2651 0.105357 13.5195 0.292893 13.707C0.48043 13.8946 0.734784 13.9999 1 13.9999H10C10.2652 13.9999 10.5196 13.8946 10.7071 13.707C10.8946 13.5195 11 13.2651 11 12.9999C11 12.7347 10.8946 12.4803 10.7071 12.2928C10.5196 12.1053 10.2652 11.9999 10 11.9999H2V2.99991L8.4 7.79991C8.5731 7.92973 8.78363 7.99991 9 7.99991C9.21637 7.99991 9.4269 7.92973 9.6 7.79991L16 2.99991V11.9999H14C13.7348 11.9999 13.4804 12.1053 13.2929 12.2928C13.1054 12.4803 13 12.7347 13 12.9999C13 13.2651 13.1054 13.5195 13.2929 13.707C13.4804 13.8946 13.7348 13.9999 14 13.9999H17C17.2652 13.9999 17.5196 13.8946 17.7071 13.707C17.8946 13.5195 18 13.2651 18 12.9999V0.999911C18 0.999911 18 0.929911 18 0.889911ZM9 5.74991L4 1.99991H14L9 5.74991Z" fill="#01A3FF"/>
											</svg>
										</a>
									</div>
								</div>
								<!-- ---/student--- -->
								<!-- ---student--- -->
								<div class="d-flex align-items-center student">
									<span class="dz-media">
										<img src="./images/profile/small/pic4.jpg" alt="" width="50">
									</span>
									<div class="user-info">
										<h6 class="name"><a href="app-profile.html">Jordan Nico</a></h6>
										<span class=" text-wrap">Graphic Design</span>
									</div>
									<div class="indox">
										<a href="#">
											<svg width="19" height="14" viewBox="0 0 19 14" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M18 0.889911C18.0057 0.823365 18.0057 0.756458 18 0.689911L17.91 0.499911C17.91 0.499911 17.91 0.429911 17.86 0.399911L17.81 0.349911L17.65 0.219911C17.6062 0.175413 17.5556 0.138269 17.5 0.109911L17.33 0.0499115H17.13H0.93H0.73L0.56 0.119911C0.504246 0.143681 0.453385 0.177588 0.41 0.219911L0.25 0.349911C0.25 0.349911 0.25 0.349911 0.25 0.399911C0.25 0.449911 0.25 0.469911 0.2 0.499911L0.11 0.689911C0.10434 0.756458 0.10434 0.823365 0.11 0.889911L0 0.999911V12.9999C0 13.2651 0.105357 13.5195 0.292893 13.707C0.48043 13.8946 0.734784 13.9999 1 13.9999H10C10.2652 13.9999 10.5196 13.8946 10.7071 13.707C10.8946 13.5195 11 13.2651 11 12.9999C11 12.7347 10.8946 12.4803 10.7071 12.2928C10.5196 12.1053 10.2652 11.9999 10 11.9999H2V2.99991L8.4 7.79991C8.5731 7.92973 8.78363 7.99991 9 7.99991C9.21637 7.99991 9.4269 7.92973 9.6 7.79991L16 2.99991V11.9999H14C13.7348 11.9999 13.4804 12.1053 13.2929 12.2928C13.1054 12.4803 13 12.7347 13 12.9999C13 13.2651 13.1054 13.5195 13.2929 13.707C13.4804 13.8946 13.7348 13.9999 14 13.9999H17C17.2652 13.9999 17.5196 13.8946 17.7071 13.707C17.8946 13.5195 18 13.2651 18 12.9999V0.999911C18 0.999911 18 0.929911 18 0.889911ZM9 5.74991L4 1.99991H14L9 5.74991Z" fill="#01A3FF"/>
											</svg>
										</a>
									</div>
								</div>
								<!-- ---/student--- -->
								<!-- ---student--- -->
								<div class="d-flex align-items-center student">
									<span class="dz-media">
										<img src="./images/profile/small/pic5.jpg" alt="" width="50">
									</span>
									<div class="user-info">
										<h6 class="name"><a href="app-profile.html">Nadila Adja</a></h6>
										<span class=" text-wrap">QA Engineer</span>
									</div>
									<div class="indox">
										<a href="#">
											<svg width="19" height="14" viewBox="0 0 19 14" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M18 0.889911C18.0057 0.823365 18.0057 0.756458 18 0.689911L17.91 0.499911C17.91 0.499911 17.91 0.429911 17.86 0.399911L17.81 0.349911L17.65 0.219911C17.6062 0.175413 17.5556 0.138269 17.5 0.109911L17.33 0.0499115H17.13H0.93H0.73L0.56 0.119911C0.504246 0.143681 0.453385 0.177588 0.41 0.219911L0.25 0.349911C0.25 0.349911 0.25 0.349911 0.25 0.399911C0.25 0.449911 0.25 0.469911 0.2 0.499911L0.11 0.689911C0.10434 0.756458 0.10434 0.823365 0.11 0.889911L0 0.999911V12.9999C0 13.2651 0.105357 13.5195 0.292893 13.707C0.48043 13.8946 0.734784 13.9999 1 13.9999H10C10.2652 13.9999 10.5196 13.8946 10.7071 13.707C10.8946 13.5195 11 13.2651 11 12.9999C11 12.7347 10.8946 12.4803 10.7071 12.2928C10.5196 12.1053 10.2652 11.9999 10 11.9999H2V2.99991L8.4 7.79991C8.5731 7.92973 8.78363 7.99991 9 7.99991C9.21637 7.99991 9.4269 7.92973 9.6 7.79991L16 2.99991V11.9999H14C13.7348 11.9999 13.4804 12.1053 13.2929 12.2928C13.1054 12.4803 13 12.7347 13 12.9999C13 13.2651 13.1054 13.5195 13.2929 13.707C13.4804 13.8946 13.7348 13.9999 14 13.9999H17C17.2652 13.9999 17.5196 13.8946 17.7071 13.707C17.8946 13.5195 18 13.2651 18 12.9999V0.999911C18 0.999911 18 0.929911 18 0.889911ZM9 5.74991L4 1.99991H14L9 5.74991Z" fill="#01A3FF"/>
											</svg>
										</a>
									</div>
								</div>
								<!-- ---/student--- -->

							</div>
							<div class="card-footer text-center border-0 pt-0 px-3">
								<a href="contact.html" class="btn btn-block btn-primary  dlab-load-more" id="RecentActivity" rel="ajax/recentactivity.html">View More</a>
							</div>
						</div>
					</div>
					<!-- --/column-- -->
					<!-- --column-- -->
					<div class="col-xl-12">
						<div class="card progressbar bg-transparent mb-0">
							<div class="card-header border-0 px-3 pb-0">
								<div>
									<h2 class="heading">Project</h2>
									<span class="fs-14 font-w400">You have <strong>456 </strong>contacts</span>
								</div>
								<div class="dropdown custom-dropdown">
									<div class="btn sharp btn-primary tp-btn " data-bs-toggle="dropdown">
										<svg width="6" height="20" viewBox="0 0 6 20" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M5.19995 10.001C5.19995 9.71197 5.14302 9.42576 5.03241 9.15872C4.9218 8.89169 4.75967 8.64905 4.55529 8.44467C4.35091 8.24029 4.10828 8.07816 3.84124 7.96755C3.5742 7.85694 3.28799 7.80001 2.99895 7.80001C2.70991 7.80001 2.4237 7.85694 2.15667 7.96755C1.88963 8.07816 1.64699 8.24029 1.44261 8.44467C1.23823 8.64905 1.0761 8.89169 0.965493 9.15872C0.854882 9.42576 0.797952 9.71197 0.797952 10.001C0.798085 10.5848 1.0301 11.1445 1.44296 11.5572C1.85582 11.9699 2.41571 12.2016 2.99945 12.2015C3.58319 12.2014 4.14297 11.9694 4.55565 11.5565C4.96832 11.1436 5.20008 10.5838 5.19995 10L5.19995 10.001ZM5.19995 3.00101C5.19995 2.71197 5.14302 2.42576 5.03241 2.15872C4.9218 1.89169 4.75967 1.64905 4.55529 1.44467C4.35091 1.24029 4.10828 1.07816 3.84124 0.967552C3.5742 0.856941 3.28799 0.800011 2.99895 0.800011C2.70991 0.800011 2.4237 0.856941 2.15667 0.967552C1.88963 1.07816 1.64699 1.24029 1.44261 1.44467C1.23823 1.64905 1.0761 1.89169 0.965493 2.15872C0.854883 2.42576 0.797953 2.71197 0.797953 3.00101C0.798085 3.58475 1.0301 4.14453 1.44296 4.55721C1.85582 4.96988 2.41571 5.20164 2.99945 5.20151C3.58319 5.20138 4.14297 4.96936 4.55565 4.5565C4.96832 4.14364 5.20008 3.58375 5.19995 3.00001L5.19995 3.00101ZM5.19995 17.001C5.19995 16.712 5.14302 16.4258 5.03241 16.1587C4.9218 15.8917 4.75967 15.6491 4.55529 15.4447C4.35091 15.2403 4.10828 15.0782 3.84124 14.9676C3.5742 14.8569 3.28799 14.8 2.99895 14.8C2.70991 14.8 2.4237 14.8569 2.15666 14.9676C1.88963 15.0782 1.64699 15.2403 1.44261 15.4447C1.23823 15.6491 1.0761 15.8917 0.965493 16.1587C0.854882 16.4258 0.797952 16.712 0.797952 17.001C0.798084 17.5848 1.0301 18.1445 1.44296 18.5572C1.85582 18.9699 2.41571 19.2016 2.99945 19.2015C3.58319 19.2014 4.14297 18.9694 4.55565 18.5565C4.96832 18.1436 5.20008 17.5838 5.19995 17L5.19995 17.001Z" fill="#01A3FF"/>
										</svg>

									</div>
									<div class="dropdown-menu dropdown-menu-end">
										<a class="dropdown-item" href="javascript:void(0);">Option 1</a>
										<a class="dropdown-item" href="javascript:void(0);">Option 2</a>
										<a class="dropdown-item" href="javascript:void(0);">Option 3</a>
									</div>
								</div>
							</div>
							<div class="card-body  p-3">
								<div>
									<div class="progress default-progress">
										<div class="progress-bar bg-vigit progress-animated bg-secondary" style="width: 90%; height:100%;" role="progressbar">
											<span class="sr-only">90% Complete</span>
										</div>
									</div>
									<div class="d-flex align-items-end mt-2 pb-4 justify-content-between">
										<span class="fs-14 font-w500 value text-secondary">Web Design</span>
										<span><span class="text-black pe-2 font-w500"></span>452 times</span>
									</div>
								</div>
								<div>
									<div class="progress default-progress">
										<div class="progress-bar bg-contact progress-animated " style="width: 68%; height:100%;" role="progressbar">
											<span class="sr-only">45% Complete</span>
										</div>
									</div>
									<div class="d-flex align-items-end mt-2 pb-4 justify-content-between">
										<span class="fs-14 font-w500 value text-primary">Graphic Design</span>
										<span><span class="text-black pe-2 font-w500"></span>97 times</span>
									</div>
								</div>
								<div>
									<div class="progress default-progress">
										<div class="progress-bar bg-contact progress-animated bg-danger" style="width: 68%; height:100%;" role="progressbar">
											<span class="sr-only">45% Complete</span>
										</div>
									</div>
									<div class="d-flex align-items-end mt-2 pb-4 justify-content-between">
										<span class="fs-14 font-w500 value text-danger">Front-End</span>
										<span><span class="text-black pe-2 font-w500"></span>61 times</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- --/column-- -->
					<!-- --column-- -->
					<div class="col-xl-12 ">
						<div class="card tags bg-transparent ">
							<div class="card-header border-0  p-3 py-4 pb-0">
								<div>
									<h2 class="heading">Tag</h2>
								</div>

							</div>
							<div class="card-body  p-3 py-1 ">
								<div >
									<a href="javascript:void(0);" class="tag">#teamwork</a>
									<a href="javascript:void(0);" class="tag">#design</a>
									<a href="javascript:void(0);" class="tag">#projectmanagement</a>
									<a href="javascript:void(0);" class="tag">16+</a>
								</div>

							</div>
						</div>
					</div>
					<!-- --/column-- -->
					<!-- --column-- -->
					<div class="col-xl-12">
						<div class="card progressbar bg-transparent ">
							<div class="card-header border-0  p-3 pb-2">
								<div>
									<h2 class="heading">Server Status</h2>
								</div>
								<div class="dropdown custom-dropdown">
									<div class="btn sharp btn-primary tp-btn " data-bs-toggle="dropdown">
										<svg width="6" height="20" viewBox="0 0 6 20" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M5.19995 10.001C5.19995 9.71197 5.14302 9.42576 5.03241 9.15872C4.9218 8.89169 4.75967 8.64905 4.55529 8.44467C4.35091 8.24029 4.10828 8.07816 3.84124 7.96755C3.5742 7.85694 3.28799 7.80001 2.99895 7.80001C2.70991 7.80001 2.4237 7.85694 2.15667 7.96755C1.88963 8.07816 1.64699 8.24029 1.44261 8.44467C1.23823 8.64905 1.0761 8.89169 0.965493 9.15872C0.854882 9.42576 0.797952 9.71197 0.797952 10.001C0.798085 10.5848 1.0301 11.1445 1.44296 11.5572C1.85582 11.9699 2.41571 12.2016 2.99945 12.2015C3.58319 12.2014 4.14297 11.9694 4.55565 11.5565C4.96832 11.1436 5.20008 10.5838 5.19995 10L5.19995 10.001ZM5.19995 3.00101C5.19995 2.71197 5.14302 2.42576 5.03241 2.15872C4.9218 1.89169 4.75967 1.64905 4.55529 1.44467C4.35091 1.24029 4.10828 1.07816 3.84124 0.967552C3.5742 0.856941 3.28799 0.800011 2.99895 0.800011C2.70991 0.800011 2.4237 0.856941 2.15667 0.967552C1.88963 1.07816 1.64699 1.24029 1.44261 1.44467C1.23823 1.64905 1.0761 1.89169 0.965493 2.15872C0.854883 2.42576 0.797953 2.71197 0.797953 3.00101C0.798085 3.58475 1.0301 4.14453 1.44296 4.55721C1.85582 4.96988 2.41571 5.20164 2.99945 5.20151C3.58319 5.20138 4.14297 4.96936 4.55565 4.5565C4.96832 4.14364 5.20008 3.58375 5.19995 3.00001L5.19995 3.00101ZM5.19995 17.001C5.19995 16.712 5.14302 16.4258 5.03241 16.1587C4.9218 15.8917 4.75967 15.6491 4.55529 15.4447C4.35091 15.2403 4.10828 15.0782 3.84124 14.9676C3.5742 14.8569 3.28799 14.8 2.99895 14.8C2.70991 14.8 2.4237 14.8569 2.15666 14.9676C1.88963 15.0782 1.64699 15.2403 1.44261 15.4447C1.23823 15.6491 1.0761 15.8917 0.965493 16.1587C0.854882 16.4258 0.797952 16.712 0.797952 17.001C0.798084 17.5848 1.0301 18.1445 1.44296 18.5572C1.85582 18.9699 2.41571 19.2016 2.99945 19.2015C3.58319 19.2014 4.14297 18.9694 4.55565 18.5565C4.96832 18.1436 5.20008 17.5838 5.19995 17L5.19995 17.001Z" fill="#01A3FF"/>
										</svg>

									</div>
									<div class="dropdown-menu dropdown-menu-end">
										<a class="dropdown-item" href="javascript:void(0);">Option 1</a>
										<a class="dropdown-item" href="javascript:void(0);">Option 2</a>
										<a class="dropdown-item" href="javascript:void(0);">Option 3</a>
									</div>
								</div>
							</div>
							<div class="card-body  p-3">
								<div class="server-content">
									<div class="progress default-progress">
										<div class="progress-bar bg-vigit progress-animated bg-pink" style="width: 15%; height:100%;" role="progressbar">
											<span class="sr-only">30% Complete</span>
										</div>
									</div>
									<div class="d-flex align-items-end  pe-2 justify-content-between">
										<span class=" value text-pink">10 AM</span>

									</div>
								</div>
								<div class="server-content">
									<div class="progress default-progress">
										<div class="progress-bar bg-contact progress-animated bg-secondary" style="width: 45%; height:100%;" role="progressbar">
											<span class="sr-only">45% Complete</span>
										</div>
									</div>
									<div class="d-flex align-items-end  pe-2 justify-content-between">
										<span class=" value text-secondary">8 AM</span>

									</div>
								</div>
								<div class="server-content">
									<div class="progress default-progress">
										<div class="progress-bar bg-contact progress-animated bg-success" style="width: 45%; height:100%;" role="progressbar">
											<span class="sr-only">45% Complete</span>
										</div>
									</div>
									<div class="d-flex align-items-end  pe-2 justify-content-between">
										<span class=" value text-success">6 AM</span>
									</div>
								</div>
								<div class="server-content">
									<div class="progress default-progress">
										<div class="progress-bar bg-contact progress-animated bg-primary" style="width: 25%; height:100%;" role="progressbar">
											<span class="sr-only">25% Complete</span>
										</div>
									</div>
									<div class="d-flex align-items-end  pe-2 justify-content-between">
										<span class=" value text-primary">4 AM</span>
									</div>
								</div>
								<div class="server-content">
									<div class="progress default-progress">
										<div class="progress-bar bg-contact progress-animated bg-danger" style="width: 10%; height:100%;" role="progressbar">
											<span class="sr-only">15% Complete</span>
										</div>
									</div>
									<div class="d-flex align-items-end  pe-2 justify-content-between">
										<span class=" value text-danger">2 AM</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- --/column-- -->
					<!-- --column-- -->
					<div class="sidebar-footer">
					<div class="col-xl-12">
							<!-- --row-- -->
							<div class="row">
								<!-- --column-- -->
								<div class="col-xl-4">
									<div class="sidebar-info">
										<h5>Country</h5>
										<h4><a href="#"> Indonesia</a></h4>
									</div>
								</div>
								<!-- --/column-- -->
								<!-- --column-- -->
								<div class="col-xl-4">
									<div class="sidebar-info">
										<h5>Domain</h5>
										<h4><a href="#"> website.com </a></h4>
									</div>
								</div>
								<!-- --/column-- -->
								<!-- --column-- -->
								<div class="col-xl-4">
									<div class="sidebar-info">
										<span>
											<svg width="16" height="10" viewBox="0 0 16 10" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M0.367887 8.38398L7.44789 0.535979C7.73589 0.199978 8.26389 0.199978 8.55189 0.535979L15.6319 8.38398C16.0879 8.88798 15.7519 9.70398 15.0799 9.70398L0.919888 9.70398C0.247888 9.70398 -0.0881128 8.88798 0.367887 8.38398Z" fill="var(--primary)"/>
											</svg>
										</span>
										<h4><a href="#">2.0 mbps</a></h4>
									</div>
								</div>
								<!-- --/column-- -->
							</div>
							<!-- /--row-- -->
						</div>
					</div>
				</div>


		</div>
		<div class="wallet-bar-close"></div>
		<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
			<div class="container-fluid">
				<!-- Row -->
				<div class="row">
					<div class="col-xl-12">
						<div class="row">
							<div class="col-xl-12">
								<div class="page-titles style1">
									<div class="d-flex align-items-center">
										<h2 class="heading">Dashboard</h2>
										<!-- <p class="text-warning ms-2">Welcome Back Yatin Sharma !</p> -->
									</div>
									<div id="datepicker" class="input-group date dz-calender" data-date-format="mm-dd-yyyy">
										<span class="input-group-addon d-flex align-items-center">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M12 14.0001C12.1978 14.0001 12.3911 13.9415 12.5556 13.8316C12.72 13.7217 12.8482 13.5655 12.9239 13.3828C12.9996 13.2001 13.0194 12.999 12.9808 12.805C12.9422 12.611 12.847 12.4329 12.7071 12.293C12.5673 12.1531 12.3891 12.0579 12.1951 12.0193C12.0011 11.9807 11.8 12.0005 11.6173 12.0762C11.4346 12.1519 11.2784 12.2801 11.1685 12.4445C11.0586 12.609 11 12.8023 11 13.0001C11 13.2653 11.1054 13.5197 11.2929 13.7072C11.4804 13.8947 11.7348 14.0001 12 14.0001ZM17 14.0001C17.1978 14.0001 17.3911 13.9415 17.5556 13.8316C17.72 13.7217 17.8482 13.5655 17.9239 13.3828C17.9996 13.2001 18.0194 12.999 17.9808 12.805C17.9422 12.611 17.847 12.4329 17.7071 12.293C17.5673 12.1531 17.3891 12.0579 17.1951 12.0193C17.0011 11.9807 16.8 12.0005 16.6173 12.0762C16.4346 12.1519 16.2784 12.2801 16.1685 12.4445C16.0586 12.609 16 12.8023 16 13.0001C16 13.2653 16.1054 13.5197 16.2929 13.7072C16.4804 13.8947 16.7348 14.0001 17 14.0001ZM12 18.0001C12.1978 18.0001 12.3911 17.9415 12.5556 17.8316C12.72 17.7217 12.8482 17.5655 12.9239 17.3828C12.9996 17.2001 13.0194 16.999 12.9808 16.805C12.9422 16.611 12.847 16.4328 12.7071 16.293C12.5673 16.1531 12.3891 16.0579 12.1951 16.0193C12.0011 15.9807 11.8 16.0005 11.6173 16.0762C11.4346 16.1519 11.2784 16.2801 11.1685 16.4445C11.0586 16.609 11 16.8023 11 17.0001C11 17.2653 11.1054 17.5197 11.2929 17.7072C11.4804 17.8947 11.7348 18.0001 12 18.0001ZM17 18.0001C17.1978 18.0001 17.3911 17.9415 17.5556 17.8316C17.72 17.7217 17.8482 17.5655 17.9239 17.3828C17.9996 17.2001 18.0194 16.999 17.9808 16.805C17.9422 16.611 17.847 16.4328 17.7071 16.293C17.5673 16.1531 17.3891 16.0579 17.1951 16.0193C17.0011 15.9807 16.8 16.0005 16.6173 16.0762C16.4346 16.1519 16.2784 16.2801 16.1685 16.4445C16.0586 16.609 16 16.8023 16 17.0001C16 17.2653 16.1054 17.5197 16.2929 17.7072C16.4804 17.8947 16.7348 18.0001 17 18.0001ZM7 14.0001C7.19778 14.0001 7.39112 13.9415 7.55557 13.8316C7.72002 13.7217 7.84819 13.5655 7.92388 13.3828C7.99957 13.2001 8.01937 12.999 7.98078 12.805C7.9422 12.611 7.84696 12.4329 7.70711 12.293C7.56725 12.1531 7.38907 12.0579 7.19509 12.0193C7.00111 11.9807 6.80004 12.0005 6.61732 12.0762C6.43459 12.1519 6.27841 12.2801 6.16853 12.4445C6.05865 12.609 6 12.8023 6 13.0001C6 13.2653 6.10536 13.5197 6.29289 13.7072C6.48043 13.8947 6.73478 14.0001 7 14.0001ZM19 4.00011H18V3.00011C18 2.73489 17.8946 2.48054 17.7071 2.293C17.5196 2.10546 17.2652 2.00011 17 2.00011C16.7348 2.00011 16.4804 2.10546 16.2929 2.293C16.1054 2.48054 16 2.73489 16 3.00011V4.00011H8V3.00011C8 2.73489 7.89464 2.48054 7.70711 2.293C7.51957 2.10546 7.26522 2.00011 7 2.00011C6.73478 2.00011 6.48043 2.10546 6.29289 2.293C6.10536 2.48054 6 2.73489 6 3.00011V4.00011H5C4.20435 4.00011 3.44129 4.31618 2.87868 4.87879C2.31607 5.4414 2 6.20446 2 7.00011V19.0001C2 19.7958 2.31607 20.5588 2.87868 21.1214C3.44129 21.684 4.20435 22.0001 5 22.0001H19C19.7956 22.0001 20.5587 21.684 21.1213 21.1214C21.6839 20.5588 22 19.7958 22 19.0001V7.00011C22 6.20446 21.6839 5.4414 21.1213 4.87879C20.5587 4.31618 19.7956 4.00011 19 4.00011ZM20 19.0001C20 19.2653 19.8946 19.5197 19.7071 19.7072C19.5196 19.8947 19.2652 20.0001 19 20.0001H5C4.73478 20.0001 4.48043 19.8947 4.29289 19.7072C4.10536 19.5197 4 19.2653 4 19.0001V10.0001H20V19.0001ZM20 8.00011H4V7.00011C4 6.73489 4.10536 6.48054 4.29289 6.293C4.48043 6.10546 4.73478 6.00011 5 6.00011H19C19.2652 6.00011 19.5196 6.10546 19.7071 6.293C19.8946 6.48054 20 6.73489 20 7.00011V8.00011ZM7 18.0001C7.19778 18.0001 7.39112 17.9415 7.55557 17.8316C7.72002 17.7217 7.84819 17.5655 7.92388 17.3828C7.99957 17.2001 8.01937 16.999 7.98078 16.805C7.9422 16.611 7.84696 16.4328 7.70711 16.293C7.56725 16.1531 7.38907 16.0579 7.19509 16.0193C7.00111 15.9807 6.80004 16.0005 6.61732 16.0762C6.43459 16.1519 6.27841 16.2801 6.16853 16.4445C6.05865 16.609 6 16.8023 6 17.0001C6 17.2653 6.10536 17.5197 6.29289 17.7072C6.48043 17.8947 6.73478 18.0001 7 18.0001Z" fill="var(--primary)"/>
											</svg>
										</span>
										<div class="calender-picker">
											<h6 class="fs-14 mb-0 ms-2 font-w600">Change Period</h6>
											<input class="form-control" type="text" readonly="">
										</div>
									</div>
										<!-- <div class="guest-calendar" id="accordion-one">
											<span class="cale-icon">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M12 14.0001C12.1978 14.0001 12.3911 13.9415 12.5556 13.8316C12.72 13.7217 12.8482 13.5655 12.9239 13.3828C12.9996 13.2001 13.0194 12.999 12.9808 12.805C12.9422 12.611 12.847 12.4329 12.7071 12.293C12.5673 12.1531 12.3891 12.0579 12.1951 12.0193C12.0011 11.9807 11.8 12.0005 11.6173 12.0762C11.4346 12.1519 11.2784 12.2801 11.1685 12.4445C11.0586 12.609 11 12.8023 11 13.0001C11 13.2653 11.1054 13.5197 11.2929 13.7072C11.4804 13.8947 11.7348 14.0001 12 14.0001ZM17 14.0001C17.1978 14.0001 17.3911 13.9415 17.5556 13.8316C17.72 13.7217 17.8482 13.5655 17.9239 13.3828C17.9996 13.2001 18.0194 12.999 17.9808 12.805C17.9422 12.611 17.847 12.4329 17.7071 12.293C17.5673 12.1531 17.3891 12.0579 17.1951 12.0193C17.0011 11.9807 16.8 12.0005 16.6173 12.0762C16.4346 12.1519 16.2784 12.2801 16.1685 12.4445C16.0586 12.609 16 12.8023 16 13.0001C16 13.2653 16.1054 13.5197 16.2929 13.7072C16.4804 13.8947 16.7348 14.0001 17 14.0001ZM12 18.0001C12.1978 18.0001 12.3911 17.9415 12.5556 17.8316C12.72 17.7217 12.8482 17.5655 12.9239 17.3828C12.9996 17.2001 13.0194 16.999 12.9808 16.805C12.9422 16.611 12.847 16.4328 12.7071 16.293C12.5673 16.1531 12.3891 16.0579 12.1951 16.0193C12.0011 15.9807 11.8 16.0005 11.6173 16.0762C11.4346 16.1519 11.2784 16.2801 11.1685 16.4445C11.0586 16.609 11 16.8023 11 17.0001C11 17.2653 11.1054 17.5197 11.2929 17.7072C11.4804 17.8947 11.7348 18.0001 12 18.0001ZM17 18.0001C17.1978 18.0001 17.3911 17.9415 17.5556 17.8316C17.72 17.7217 17.8482 17.5655 17.9239 17.3828C17.9996 17.2001 18.0194 16.999 17.9808 16.805C17.9422 16.611 17.847 16.4328 17.7071 16.293C17.5673 16.1531 17.3891 16.0579 17.1951 16.0193C17.0011 15.9807 16.8 16.0005 16.6173 16.0762C16.4346 16.1519 16.2784 16.2801 16.1685 16.4445C16.0586 16.609 16 16.8023 16 17.0001C16 17.2653 16.1054 17.5197 16.2929 17.7072C16.4804 17.8947 16.7348 18.0001 17 18.0001ZM7 14.0001C7.19778 14.0001 7.39112 13.9415 7.55557 13.8316C7.72002 13.7217 7.84819 13.5655 7.92388 13.3828C7.99957 13.2001 8.01937 12.999 7.98078 12.805C7.9422 12.611 7.84696 12.4329 7.70711 12.293C7.56725 12.1531 7.38907 12.0579 7.19509 12.0193C7.00111 11.9807 6.80004 12.0005 6.61732 12.0762C6.43459 12.1519 6.27841 12.2801 6.16853 12.4445C6.05865 12.609 6 12.8023 6 13.0001C6 13.2653 6.10536 13.5197 6.29289 13.7072C6.48043 13.8947 6.73478 14.0001 7 14.0001ZM19 4.00011H18V3.00011C18 2.73489 17.8946 2.48054 17.7071 2.293C17.5196 2.10546 17.2652 2.00011 17 2.00011C16.7348 2.00011 16.4804 2.10546 16.2929 2.293C16.1054 2.48054 16 2.73489 16 3.00011V4.00011H8V3.00011C8 2.73489 7.89464 2.48054 7.70711 2.293C7.51957 2.10546 7.26522 2.00011 7 2.00011C6.73478 2.00011 6.48043 2.10546 6.29289 2.293C6.10536 2.48054 6 2.73489 6 3.00011V4.00011H5C4.20435 4.00011 3.44129 4.31618 2.87868 4.87879C2.31607 5.4414 2 6.20446 2 7.00011V19.0001C2 19.7958 2.31607 20.5588 2.87868 21.1214C3.44129 21.684 4.20435 22.0001 5 22.0001H19C19.7956 22.0001 20.5587 21.684 21.1213 21.1214C21.6839 20.5588 22 19.7958 22 19.0001V7.00011C22 6.20446 21.6839 5.4414 21.1213 4.87879C20.5587 4.31618 19.7956 4.00011 19 4.00011ZM20 19.0001C20 19.2653 19.8946 19.5197 19.7071 19.7072C19.5196 19.8947 19.2652 20.0001 19 20.0001H5C4.73478 20.0001 4.48043 19.8947 4.29289 19.7072C4.10536 19.5197 4 19.2653 4 19.0001V10.0001H20V19.0001ZM20 8.00011H4V7.00011C4 6.73489 4.10536 6.48054 4.29289 6.293C4.48043 6.10546 4.73478 6.00011 5 6.00011H19C19.2652 6.00011 19.5196 6.10546 19.7071 6.293C19.8946 6.48054 20 6.73489 20 7.00011V8.00011ZM7 18.0001C7.19778 18.0001 7.39112 17.9415 7.55557 17.8316C7.72002 17.7217 7.84819 17.5655 7.92388 17.3828C7.99957 17.2001 8.01937 16.999 7.98078 16.805C7.9422 16.611 7.84696 16.4328 7.70711 16.293C7.56725 16.1531 7.38907 16.0579 7.19509 16.0193C7.00111 15.9807 6.80004 16.0005 6.61732 16.0762C6.43459 16.1519 6.27841 16.2801 6.16853 16.4445C6.05865 16.609 6 16.8023 6 17.0001C6 17.2653 6.10536 17.5197 6.29289 17.7072C6.48043 17.8947 6.73478 18.0001 7 18.0001Z" fill="#01A3FF"/>
												</svg>
											</span>
											<div id="headingOne" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-controls="collapseOne"   aria-expanded="true" role="button">
												<div class="pull-right reportrange"></div>
													<h6 class="fs-14 mb-0">Change Periode</h6>
													<span>August - October, 2020</span>
												</div>
										</div>
										<div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-bs-parent="#accordion-one">
											<div class="accordion-body-text">
												<div class="card-body card-calendar p-0">
													<input type='text' class="form-control d-none" id='datetimepicker' />
												</div>
											</div>
										</div> -->

								</div>
							</div>
						</div>
						<div class="swiper mySwiper-counter position-relative overflow-hidden">
							<div class="swiper-wrapper ">
								<!-- ---swiper-slide--- -->
								<div class="swiper-slide">
									<div class="card counter">
										<div class="card-body d-flex align-items-center">
											<div class="card-box-icon">
												<svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M22.8333 6.66667V7.16667H23.3333H28.3333C28.6428 7.16667 28.9395 7.28958 29.1583 7.50838C29.3771 7.72717 29.5 8.02391 29.5 8.33333V28.3333C29.5 28.6428 29.3771 28.9395 29.1583 29.1583C28.9395 29.3771 28.6428 29.5 28.3333 29.5H13.3333C13.0239 29.5 12.7272 29.3771 12.5084 29.1583C12.2896 28.9395 12.1667 28.6428 12.1667 28.3333C12.1667 28.0239 12.2896 27.7272 12.5084 27.5084C12.7272 27.2896 13.0239 27.1667 13.3333 27.1667H26.6667H27.1667V26.6667V18.3333V17.8333H26.6667H20H19.5V18.3333V20C19.5 20.3094 19.3771 20.6062 19.1583 20.825C18.9395 21.0438 18.6428 21.1667 18.3333 21.1667H11.6667C11.3572 21.1667 11.0605 21.0438 10.8417 20.825C10.6229 20.6062 10.5 20.3094 10.5 20V18.3333V17.8333H10H3.33333H2.83333V18.3333V26.6667V27.1667H3.33333H6.66667C6.97609 27.1667 7.27283 27.2896 7.49162 27.5084C7.71042 27.7272 7.83333 28.0239 7.83333 28.3333C7.83333 28.6428 7.71042 28.9395 7.49162 29.1583C7.27283 29.3771 6.97609 29.5 6.66667 29.5H1.66667C1.35725 29.5 1.0605 29.3771 0.841709 29.1583C0.622917 28.9395 0.5 28.6428 0.5 28.3333V8.33333C0.5 8.02391 0.622916 7.72717 0.841709 7.50838C1.0605 7.28958 1.35725 7.16667 1.66667 7.16667H6.66667H7.16667V6.66667V1.66667C7.16667 1.35725 7.28958 1.0605 7.50838 0.841709C7.72717 0.622916 8.02391 0.5 8.33333 0.5H21.6667C21.9761 0.5 22.2728 0.622916 22.4916 0.841709C22.7104 1.0605 22.8333 1.35725 22.8333 1.66667V6.66667ZM10 2.83333H9.5V3.33333V6.66667V7.16667H10H20H20.5V6.66667V3.33333V2.83333H20H10ZM16.6667 18.8333H17.1667V18.3333V15V14.5H16.6667H13.3333H12.8333V15V18.3333V18.8333H13.3333H16.6667ZM19.5 15V15.5H20H26.6667H27.1667V15V10V9.5H26.6667H3.33333H2.83333V10V15V15.5H3.33333H10H10.5V15V13.3333C10.5 13.0239 10.6229 12.7272 10.8417 12.5084C11.0605 12.2896 11.3572 12.1667 11.6667 12.1667H18.3333C18.6428 12.1667 18.9395 12.2896 19.1583 12.5084C19.3771 12.7272 19.5 13.0239 19.5 13.3333V15Z" fill="var(--primary)" stroke="var(--primary)"/>
												</svg>
											</div>
											<div  class="chart-num">
												<h2 class="font-w600 mb-0">932</h2>
												<p>
													Project
												</p>
											</div>
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="card counter">
										<div class="card-body d-flex align-items-center">
											<div class="card-box-icon">
												<svg width="28" height="30" viewBox="0 0 28 30" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M26.9666 8.96667L20.3 0.633334C20.1447 0.436911 19.9473 0.277976 19.7222 0.168333C19.4972 0.0586894 19.2503 0.00115414 19 0H2.33329C1.89126 0 1.46734 0.175595 1.15478 0.488155C0.842221 0.800716 0.666626 1.22464 0.666626 1.66667V10C0.666626 10.442 0.842221 10.8659 1.15478 11.1785C1.46734 11.4911 1.89126 11.6667 2.33329 11.6667C2.77532 11.6667 3.19924 11.4911 3.5118 11.1785C3.82436 10.8659 3.99996 10.442 3.99996 10V3.33333H15.6666V10C15.6666 10.442 15.8422 10.8659 16.1548 11.1785C16.4673 11.4911 16.8913 11.6667 17.3333 11.6667H24V26.6667H3.99996V18.3333C3.99996 17.8913 3.82436 17.4674 3.5118 17.1548C3.19924 16.8423 2.77532 16.6667 2.33329 16.6667C1.89126 16.6667 1.46734 16.8423 1.15478 17.1548C0.842221 17.4674 0.666626 17.8913 0.666626 18.3333V28.3333C0.666626 28.7754 0.842221 29.1993 1.15478 29.5118C1.46734 29.8244 1.89126 30 2.33329 30H25.6666C26.1086 30 26.5326 29.8244 26.8451 29.5118C27.1577 29.1993 27.3333 28.7754 27.3333 28.3333V10C27.3311 9.62406 27.2019 9.2599 26.9666 8.96667ZM19 4.33333L22.2 8.33333H19V4.33333Z" fill="#FF4646"/>
													<path d="M26.9666 8.96667L20.3 0.633334C20.1447 0.436911 19.9473 0.277976 19.7222 0.168333C19.4972 0.0586894 19.2503 0.00115414 19 0H2.33329C1.89126 0 1.46734 0.175595 1.15478 0.488155C0.842221 0.800716 0.666626 1.22464 0.666626 1.66667V10C0.666626 10.442 0.842221 10.8659 1.15478 11.1785C1.46734 11.4911 1.89126 11.6667 2.33329 11.6667C2.77532 11.6667 3.19924 11.4911 3.5118 11.1785C3.82436 10.8659 3.99996 10.442 3.99996 10V3.33333H15.6666V10C15.6666 10.442 15.8422 10.8659 16.1548 11.1785C16.4673 11.4911 16.8913 11.6667 17.3333 11.6667H24V26.6667H3.99996V18.3333C3.99996 17.8913 3.82436 17.4674 3.5118 17.1548C3.19924 16.8423 2.77532 16.6667 2.33329 16.6667C1.89126 16.6667 1.46734 16.8423 1.15478 17.1548C0.842221 17.4674 0.666626 17.8913 0.666626 18.3333V28.3333C0.666626 28.7754 0.842221 29.1993 1.15478 29.5118C1.46734 29.8244 1.89126 30 2.33329 30H25.6666C26.1086 30 26.5326 29.8244 26.8451 29.5118C27.1577 29.1993 27.3333 28.7754 27.3333 28.3333V10C27.3311 9.62406 27.2019 9.2599 26.9666 8.96667ZM19 4.33333L22.2 8.33333H19V4.33333Z" stroke="none"/>
													<path d="M14 13.3333C13.558 13.3333 13.134 13.5089 12.8215 13.8215C12.5089 14.1341 12.3333 14.558 12.3333 15V16.6667H10.6667C10.2246 16.6667 9.80072 16.8423 9.48816 17.1548C9.1756 17.4674 9 17.8913 9 18.3333C9 18.7754 9.1756 19.1993 9.48816 19.5118C9.80072 19.8244 10.2246 20 10.6667 20H12.3333V21.6667C12.3333 22.1087 12.5089 22.5326 12.8215 22.8452C13.134 23.1577 13.558 23.3333 14 23.3333C14.442 23.3333 14.866 23.1577 15.1785 22.8452C15.4911 22.5326 15.6667 22.1087 15.6667 21.6667V20H17.3333C17.7754 20 18.1993 19.8244 18.5118 19.5118C18.8244 19.1993 19 18.7754 19 18.3333C19 17.8913 18.8244 17.4674 18.5118 17.1548C18.1993 16.8423 17.7754 16.6667 17.3333 16.6667H15.6667V15C15.6667 14.558 15.4911 14.1341 15.1785 13.8215C14.866 13.5089 14.442 13.3333 14 13.3333Z" fill="#FF4646"/>
													<path d="M14 13.3333C13.558 13.3333 13.134 13.5089 12.8215 13.8215C12.5089 14.1341 12.3333 14.558 12.3333 15V16.6667H10.6667C10.2246 16.6667 9.80072 16.8423 9.48816 17.1548C9.1756 17.4674 9 17.8913 9 18.3333C9 18.7754 9.1756 19.1993 9.48816 19.5118C9.80072 19.8244 10.2246 20 10.6667 20H12.3333V21.6667C12.3333 22.1087 12.5089 22.5326 12.8215 22.8452C13.134 23.1577 13.558 23.3333 14 23.3333C14.442 23.3333 14.866 23.1577 15.1785 22.8452C15.4911 22.5326 15.6667 22.1087 15.6667 21.6667V20H17.3333C17.7754 20 18.1993 19.8244 18.5118 19.5118C18.8244 19.1993 19 18.7754 19 18.3333C19 17.8913 18.8244 17.4674 18.5118 17.1548C18.1993 16.8423 17.7754 16.6667 17.3333 16.6667H15.6667V15C15.6667 14.558 15.4911 14.1341 15.1785 13.8215C14.866 13.5089 14.442 13.3333 14 13.3333Z" stroke="transparent"/>
												</svg>
											</div>
											<div class="chart-num">
												<h2 class="font-w600 mb-0">1,032</h2>
												<p>
													Inquiries
												</p>
											</div>
										</div>

									</div>
								</div>
								<div class="swiper-slide">
									<div class="card counter">
										<div class="card-body d-flex align-items-center">
											<div class="card-box-icon">
												<svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M22.2833 9.18334C23.091 9.71212 24.0346 9.99576 25 10C25.9889 10 26.9556 9.70676 27.7778 9.15735C28.6001 8.60794 29.2409 7.82705 29.6194 6.91342C29.9978 5.99979 30.0968 4.99446 29.9039 4.02455C29.711 3.05465 29.2348 2.16373 28.5355 1.46447C27.8362 0.765206 26.9453 0.289002 25.9754 0.0960758C25.0055 -0.0968503 24.0002 0.00216643 23.0865 0.380605C22.1729 0.759043 21.392 1.39991 20.8426 2.22215C20.2932 3.0444 20 4.0111 20 5C20.0045 5.50999 20.0888 6.01612 20.25 6.5L17.6666 9.11667C16.7019 8.50671 15.5575 8.2452 14.4236 8.37557C13.2896 8.50594 12.2344 9.02035 11.4333 9.83333L9.89997 9.33334C9.96784 9.00436 10.0014 8.66923 9.99997 8.33334C10.0044 7.20166 9.62475 6.10197 8.92315 5.21402C8.22154 4.32607 7.23946 3.70239 6.13745 3.44495C5.03544 3.1875 3.87869 3.31151 2.8563 3.79671C1.83391 4.28191 1.00636 5.09959 0.508922 6.11609C0.011488 7.13258 -0.126399 8.28776 0.117802 9.39278C0.362002 10.4978 0.973844 11.4873 1.85331 12.1995C2.73277 12.9117 3.82783 13.3045 4.95948 13.3137C6.09112 13.3229 7.19241 12.9479 8.0833 12.25L9.99997 12.8833C9.9918 13.0332 9.9918 13.1834 9.99997 13.3333C9.99997 14.6594 10.5267 15.9312 11.4644 16.8689C12.4021 17.8066 13.6739 18.3333 15 18.3333C16.326 18.3333 17.5978 17.8066 18.5355 16.8689C19.4732 15.9312 20 14.6594 20 13.3333C19.9886 12.8008 19.8987 12.2729 19.7333 11.7667L22.2833 9.18334ZM25 3.33334C25.3296 3.33334 25.6518 3.43108 25.9259 3.61422C26.2 3.79736 26.4136 4.05765 26.5398 4.3622C26.6659 4.66674 26.6989 5.00185 26.6346 5.32515C26.5703 5.64845 26.4116 5.94543 26.1785 6.17851C25.9454 6.4116 25.6484 6.57034 25.3251 6.63464C25.0018 6.69895 24.6667 6.66595 24.3622 6.5398C24.0576 6.41366 23.7973 6.20003 23.6142 5.92595C23.431 5.65187 23.3333 5.32964 23.3333 5C23.3333 4.55797 23.5089 4.13405 23.8215 3.82149C24.134 3.50893 24.5579 3.33334 25 3.33334ZM3.3333 8.33334C3.3333 8.0037 3.43105 7.68147 3.61418 7.40739C3.79732 7.1333 4.05762 6.91968 4.36216 6.79354C4.66671 6.66739 5.00182 6.63438 5.32512 6.69869C5.64842 6.763 5.94539 6.92174 6.17848 7.15482C6.41157 7.38791 6.5703 7.68488 6.63461 8.00819C6.69892 8.33149 6.66591 8.6666 6.53977 8.97114C6.41362 9.27569 6.2 9.53598 5.92592 9.71912C5.65183 9.90225 5.3296 10 4.99997 10C4.55794 10 4.13402 9.82441 3.82146 9.51185C3.5089 9.19929 3.3333 8.77536 3.3333 8.33334ZM15 15C14.6703 15 14.3481 14.9023 14.074 14.7191C13.7999 14.536 13.5863 14.2757 13.4602 13.9711C13.334 13.6666 13.301 13.3315 13.3653 13.0082C13.4296 12.6849 13.5884 12.3879 13.8215 12.1548C14.0545 11.9217 14.3515 11.763 14.6748 11.6987C14.9981 11.6344 15.3332 11.6674 15.6378 11.7935C15.9423 11.9197 16.2026 12.1333 16.3857 12.4074C16.5689 12.6815 16.6666 13.0037 16.6666 13.3333C16.6666 13.7754 16.491 14.1993 16.1785 14.5118C15.8659 14.8244 15.442 15 15 15Z" fill="#9568FF"/>
													<path d="M22.2833 9.18334C23.091 9.71212 24.0346 9.99576 25 10C25.9889 10 26.9556 9.70676 27.7778 9.15735C28.6001 8.60794 29.2409 7.82705 29.6194 6.91342C29.9978 5.99979 30.0968 4.99446 29.9039 4.02455C29.711 3.05465 29.2348 2.16373 28.5355 1.46447C27.8362 0.765206 26.9453 0.289002 25.9754 0.0960758C25.0055 -0.0968503 24.0002 0.00216643 23.0865 0.380605C22.1729 0.759043 21.392 1.39991 20.8426 2.22215C20.2932 3.0444 20 4.0111 20 5C20.0045 5.50999 20.0888 6.01612 20.25 6.5L17.6666 9.11667C16.7019 8.50671 15.5575 8.2452 14.4236 8.37557C13.2896 8.50594 12.2344 9.02035 11.4333 9.83333L9.89997 9.33334C9.96784 9.00436 10.0014 8.66923 9.99997 8.33334C10.0044 7.20166 9.62475 6.10197 8.92315 5.21402C8.22154 4.32607 7.23946 3.70239 6.13745 3.44495C5.03544 3.1875 3.87869 3.31151 2.8563 3.79671C1.83391 4.28191 1.00636 5.09959 0.508922 6.11609C0.011488 7.13258 -0.126399 8.28776 0.117802 9.39278C0.362002 10.4978 0.973844 11.4873 1.85331 12.1995C2.73277 12.9117 3.82783 13.3045 4.95948 13.3137C6.09112 13.3229 7.19241 12.9479 8.0833 12.25L9.99997 12.8833C9.9918 13.0332 9.9918 13.1834 9.99997 13.3333C9.99997 14.6594 10.5267 15.9312 11.4644 16.8689C12.4021 17.8066 13.6739 18.3333 15 18.3333C16.326 18.3333 17.5978 17.8066 18.5355 16.8689C19.4732 15.9312 20 14.6594 20 13.3333C19.9886 12.8008 19.8987 12.2729 19.7333 11.7667L22.2833 9.18334ZM25 3.33334C25.3296 3.33334 25.6518 3.43108 25.9259 3.61422C26.2 3.79736 26.4136 4.05765 26.5398 4.3622C26.6659 4.66674 26.6989 5.00185 26.6346 5.32515C26.5703 5.64845 26.4116 5.94543 26.1785 6.17851C25.9454 6.4116 25.6484 6.57034 25.3251 6.63464C25.0018 6.69895 24.6667 6.66595 24.3622 6.5398C24.0576 6.41366 23.7973 6.20003 23.6142 5.92595C23.431 5.65187 23.3333 5.32964 23.3333 5C23.3333 4.55797 23.5089 4.13405 23.8215 3.82149C24.134 3.50893 24.5579 3.33334 25 3.33334ZM3.3333 8.33334C3.3333 8.0037 3.43105 7.68147 3.61418 7.40739C3.79732 7.1333 4.05762 6.91968 4.36216 6.79354C4.66671 6.66739 5.00182 6.63438 5.32512 6.69869C5.64842 6.763 5.94539 6.92174 6.17848 7.15482C6.41157 7.38791 6.5703 7.68488 6.63461 8.00819C6.69892 8.33149 6.66591 8.6666 6.53977 8.97114C6.41362 9.27569 6.2 9.53598 5.92592 9.71912C5.65183 9.90225 5.3296 10 4.99997 10C4.55794 10 4.13402 9.82441 3.82146 9.51185C3.5089 9.19929 3.3333 8.77536 3.3333 8.33334ZM15 15C14.6703 15 14.3481 14.9023 14.074 14.7191C13.7999 14.536 13.5863 14.2757 13.4602 13.9711C13.334 13.6666 13.301 13.3315 13.3653 13.0082C13.4296 12.6849 13.5884 12.3879 13.8215 12.1548C14.0545 11.9217 14.3515 11.763 14.6748 11.6987C14.9981 11.6344 15.3332 11.6674 15.6378 11.7935C15.9423 11.9197 16.2026 12.1333 16.3857 12.4074C16.5689 12.6815 16.6666 13.0037 16.6666 13.3333C16.6666 13.7754 16.491 14.1993 16.1785 14.5118C15.8659 14.8244 15.442 15 15 15Z" stroke="none"/>
													<path d="M8.33329 15H3.33329C2.89127 15 2.46734 15.1756 2.15478 15.4882C1.84222 15.8007 1.66663 16.2246 1.66663 16.6667V28.3333C1.66663 28.7754 1.84222 29.1993 2.15478 29.5118C2.46734 29.8244 2.89127 30 3.33329 30H8.33329C8.77532 30 9.19924 29.8244 9.5118 29.5118C9.82436 29.1993 9.99996 28.7754 9.99996 28.3333V16.6667C9.99996 16.2246 9.82436 15.8007 9.5118 15.4882C9.19924 15.1756 8.77532 15 8.33329 15ZM6.66663 26.6667H4.99996V18.3333H6.66663V26.6667ZM28.3333 11.6667H23.3333C22.8913 11.6667 22.4673 11.8423 22.1548 12.1548C21.8422 12.4674 21.6666 12.8913 21.6666 13.3333V28.3333C21.6666 28.7754 21.8422 29.1993 22.1548 29.5118C22.4673 29.8244 22.8913 30 23.3333 30H28.3333C28.7753 30 29.1992 29.8244 29.5118 29.5118C29.8244 29.1993 30 28.7754 30 28.3333V23.3333C30 22.8913 29.8244 22.4674 29.5118 22.1548C29.1992 21.8423 28.7753 21.6667 28.3333 21.6667C27.8913 21.6667 27.4673 21.8423 27.1548 22.1548C26.8422 22.4674 26.6666 22.8913 26.6666 23.3333V26.6667H25V15H26.6666V18.3333C26.6666 18.7754 26.8422 19.1993 27.1548 19.5118C27.4673 19.8244 27.8913 20 28.3333 20C28.7753 20 29.1992 19.8244 29.5118 19.5118C29.8244 19.1993 30 18.7754 30 18.3333V13.3333C30 12.8913 29.8244 12.4674 29.5118 12.1548C29.1992 11.8423 28.7753 11.6667 28.3333 11.6667ZM18.3333 20H13.3333C12.8913 20 12.4673 20.1756 12.1548 20.4882C11.8422 20.8007 11.6666 21.2246 11.6666 21.6667V28.3333C11.6666 28.7754 11.8422 29.1993 12.1548 29.5118C12.4673 29.8244 12.8913 30 13.3333 30H18.3333C18.7753 30 19.1992 29.8244 19.5118 29.5118C19.8244 29.1993 20 28.7754 20 28.3333V21.6667C20 21.2246 19.8244 20.8007 19.5118 20.4882C19.1992 20.1756 18.7753 20 18.3333 20ZM16.6666 26.6667H15V23.3333H16.6666V26.6667Z" fill="#9568FF"/>
													<path d="M8.33329 15H3.33329C2.89127 15 2.46734 15.1756 2.15478 15.4882C1.84222 15.8007 1.66663 16.2246 1.66663 16.6667V28.3333C1.66663 28.7754 1.84222 29.1993 2.15478 29.5118C2.46734 29.8244 2.89127 30 3.33329 30H8.33329C8.77532 30 9.19924 29.8244 9.5118 29.5118C9.82436 29.1993 9.99996 28.7754 9.99996 28.3333V16.6667C9.99996 16.2246 9.82436 15.8007 9.5118 15.4882C9.19924 15.1756 8.77532 15 8.33329 15ZM6.66663 26.6667H4.99996V18.3333H6.66663V26.6667ZM28.3333 11.6667H23.3333C22.8913 11.6667 22.4673 11.8423 22.1548 12.1548C21.8422 12.4674 21.6666 12.8913 21.6666 13.3333V28.3333C21.6666 28.7754 21.8422 29.1993 22.1548 29.5118C22.4673 29.8244 22.8913 30 23.3333 30H28.3333C28.7753 30 29.1992 29.8244 29.5118 29.5118C29.8244 29.1993 30 28.7754 30 28.3333V23.3333C30 22.8913 29.8244 22.4674 29.5118 22.1548C29.1992 21.8423 28.7753 21.6667 28.3333 21.6667C27.8913 21.6667 27.4673 21.8423 27.1548 22.1548C26.8422 22.4674 26.6666 22.8913 26.6666 23.3333V26.6667H25V15H26.6666V18.3333C26.6666 18.7754 26.8422 19.1993 27.1548 19.5118C27.4673 19.8244 27.8913 20 28.3333 20C28.7753 20 29.1992 19.8244 29.5118 19.5118C29.8244 19.1993 30 18.7754 30 18.3333V13.3333C30 12.8913 29.8244 12.4674 29.5118 12.1548C29.1992 11.8423 28.7753 11.6667 28.3333 11.6667ZM18.3333 20H13.3333C12.8913 20 12.4673 20.1756 12.1548 20.4882C11.8422 20.8007 11.6666 21.2246 11.6666 21.6667V28.3333C11.6666 28.7754 11.8422 29.1993 12.1548 29.5118C12.4673 29.8244 12.8913 30 13.3333 30H18.3333C18.7753 30 19.1992 29.8244 19.5118 29.5118C19.8244 29.1993 20 28.7754 20 28.3333V21.6667C20 21.2246 19.8244 20.8007 19.5118 20.4882C19.1992 20.1756 18.7753 20 18.3333 20ZM16.6666 26.6667H15V23.3333H16.6666V26.6667Z" stroke="none"/>
												</svg>
											</div>
											<div class="chart-num">
												<h2 class="font-w600 mb-0">102k</h2>
												<p>
													Invesment
												</p>
											</div>
										</div>

									</div>
								</div>
								<div class="swiper-slide">
									<div class="card counter">
										<div class="card-body d-flex align-items-center">
											<div class="card-box-icon">
												<svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M35.0001 21.4C34.9363 21.0057 34.7328 20.6474 34.4269 20.3904C34.121 20.1334 33.733 19.9949 33.3335 20H26.6668C26.91 20.0032 27.151 19.953 27.3728 19.8531C27.5946 19.7532 27.7918 19.606 27.9507 19.4217C28.1095 19.2375 28.2261 19.0207 28.2922 18.7866C28.3583 18.5525 28.3724 18.3068 28.3335 18.0667L26.6668 8.0667C26.6029 7.67233 26.3995 7.31402 26.0936 7.05706C25.7877 6.80009 25.3996 6.66156 25.0001 6.6667H15.0001C14.6007 6.66156 14.2126 6.80009 13.9067 7.05706C13.6008 7.31402 13.3974 7.67233 13.3335 8.0667L11.6668 18.0667C11.6287 18.3061 11.6433 18.5509 11.7095 18.784C11.7757 19.0172 11.8919 19.2331 12.0501 19.4167C12.2084 19.6018 12.4054 19.7499 12.6271 19.8507C12.8488 19.9515 13.0899 20.0025 13.3335 20H6.66681C6.26733 19.9949 5.87929 20.1334 5.57337 20.3904C5.26746 20.6474 5.06403 21.0057 5.00014 21.4L3.33348 31.4C3.29537 31.6394 3.30992 31.8842 3.37613 32.1173C3.44233 32.3505 3.55859 32.5664 3.71681 32.75C3.87511 32.9351 4.07204 33.0833 4.29377 33.1841C4.51549 33.2848 4.7566 33.3358 5.00014 33.3334H18.3335C18.5742 33.3334 18.8121 33.2812 19.0308 33.1806C19.2494 33.0799 19.4437 32.933 19.6001 32.75C19.7584 32.5664 19.8746 32.3505 19.9408 32.1173C20.007 31.8842 20.0216 31.6394 19.9835 31.4L18.3168 21.4C18.2533 21.0085 18.0523 20.6525 17.7499 20.3958C17.4475 20.1392 17.0634 19.9989 16.6668 20H23.3335C22.934 19.9949 22.5459 20.1334 22.24 20.3904C21.9341 20.6474 21.7307 21.0057 21.6668 21.4L20.0001 31.4C19.962 31.6394 19.9766 31.8842 20.0428 32.1173C20.109 32.3505 20.2253 32.5664 20.3835 32.75C20.5418 32.9351 20.7387 33.0833 20.9604 33.1841C21.1822 33.2848 21.4233 33.3358 21.6668 33.3334H26.6668C27.1088 33.3334 27.5328 33.1578 27.8453 32.8452C28.1579 32.5327 28.3335 32.1087 28.3335 31.6667C28.3335 31.2247 28.1579 30.8008 27.8453 30.4882C27.5328 30.1756 27.1088 30 26.6668 30H23.6335L24.7501 23.3334H31.9168L33.0335 30H31.6668C31.2248 30 30.8009 30.1756 30.4883 30.4882C30.1757 30.8008 30.0001 31.2247 30.0001 31.6667C30.0001 32.1087 30.1757 32.5327 30.4883 32.8452C30.8009 33.1578 31.2248 33.3334 31.6668 33.3334H35.0001C35.2434 33.3365 35.4843 33.2864 35.7061 33.1865C35.9279 33.0866 36.1252 32.9393 36.284 32.7551C36.4428 32.5708 36.5594 32.3541 36.6255 32.12C36.6917 31.8859 36.7057 31.6402 36.6668 31.4L35.0001 21.4ZM6.96681 30L8.08348 23.3334H15.2501L16.3668 30H6.96681ZM15.3001 16.6667L16.4168 10H23.5835L24.7001 16.6667H15.3001Z" fill="#EB62D0"/>
												</svg>
											</div>
											<div class="chart-num">
												<h2 class="font-w600 mb-0">32k</h2>
												<p>
													Assets
												</p>
											</div>
										</div>

									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-xl-8 wow fadeInUp" data-wow-delay="1.5s">
								<div class="card crypto-chart ">
									<div class="card-header pb-0 border-0 flex-wrap">
										<div class="mb-2 mb-sm-0">
											<div class="chart-title mb-3">
												<h2 class="heading">Project Statistic</h2>
											</div>
											<div class="d-flex align-items-center mb-3 mb-sm-0">
												<div class="round weekly" id="dzOldSeries">
													<div>
														<input type="checkbox" id="checkbox1" name="radio" value="weekly" />
														<label for="checkbox1" class="checkmark"></label>
													</div>
													<div>
														<span class="fs-14">This Week</span>
														<h4 class="fs-5 font-w600 mb-0">1.982</h4>
													</div>
												</div>
												<div class="round " id="dzNewSeries">
													<div>
														<input type="checkbox" id="checkbox" name="radio" value="monthly" />
														<label for="checkbox" class="checkmark"></label>
													</div>
													<div>
														<span class="fs-14">This Week</span>
														<h4 class="fs-5 font-w600 mb-0">1.982</h4>
													</div>
												</div>
											</div>
										</div>
										<div class="p-static">
											<div class="d-flex align-items-center mb-3 ">
												<select class="image-select default-select dashboard-select" aria-label="Default">
													<option selected>This Month</option>
													<option value="1">This Weeks</option>
													<option value="2">Today</option>
												</select>
												<div class="dropdown custom-dropdown">
													<div class="btn sharp btn-primary tp-btn " data-bs-toggle="dropdown">
														<svg width="6" height="20" viewBox="0 0 6 20" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M5.19995 10.001C5.19995 9.71197 5.14302 9.42576 5.03241 9.15872C4.9218 8.89169 4.75967 8.64905 4.55529 8.44467C4.35091 8.24029 4.10828 8.07816 3.84124 7.96755C3.5742 7.85694 3.28799 7.80001 2.99895 7.80001C2.70991 7.80001 2.4237 7.85694 2.15667 7.96755C1.88963 8.07816 1.64699 8.24029 1.44261 8.44467C1.23823 8.64905 1.0761 8.89169 0.965493 9.15872C0.854882 9.42576 0.797952 9.71197 0.797952 10.001C0.798085 10.5848 1.0301 11.1445 1.44296 11.5572C1.85582 11.9699 2.41571 12.2016 2.99945 12.2015C3.58319 12.2014 4.14297 11.9694 4.55565 11.5565C4.96832 11.1436 5.20008 10.5838 5.19995 10L5.19995 10.001ZM5.19995 3.00101C5.19995 2.71197 5.14302 2.42576 5.03241 2.15872C4.9218 1.89169 4.75967 1.64905 4.55529 1.44467C4.35091 1.24029 4.10828 1.07816 3.84124 0.967552C3.5742 0.856941 3.28799 0.800011 2.99895 0.800011C2.70991 0.800011 2.4237 0.856941 2.15667 0.967552C1.88963 1.07816 1.64699 1.24029 1.44261 1.44467C1.23823 1.64905 1.0761 1.89169 0.965493 2.15872C0.854883 2.42576 0.797953 2.71197 0.797953 3.00101C0.798085 3.58475 1.0301 4.14453 1.44296 4.55721C1.85582 4.96988 2.41571 5.20164 2.99945 5.20151C3.58319 5.20138 4.14297 4.96936 4.55565 4.5565C4.96832 4.14364 5.20008 3.58375 5.19995 3.00001L5.19995 3.00101ZM5.19995 17.001C5.19995 16.712 5.14302 16.4258 5.03241 16.1587C4.9218 15.8917 4.75967 15.6491 4.55529 15.4447C4.35091 15.2403 4.10828 15.0782 3.84124 14.9676C3.5742 14.8569 3.28799 14.8 2.99895 14.8C2.70991 14.8 2.4237 14.8569 2.15666 14.9676C1.88963 15.0782 1.64699 15.2403 1.44261 15.4447C1.23823 15.6491 1.0761 15.8917 0.965493 16.1587C0.854882 16.4258 0.797952 16.712 0.797952 17.001C0.798084 17.5848 1.0301 18.1445 1.44296 18.5572C1.85582 18.9699 2.41571 19.2016 2.99945 19.2015C3.58319 19.2014 4.14297 18.9694 4.55565 18.5565C4.96832 18.1436 5.20008 17.5838 5.19995 17L5.19995 17.001Z" fill="
														"/>
														</svg>

													</div>
													<div class="dropdown-menu dropdown-menu-end">
														<a class="dropdown-item" href="javascript:void(0);">Option 1</a>
														<a class="dropdown-item" href="javascript:void(0);">Option 2</a>
														<a class="dropdown-item" href="javascript:void(0);">Option 3</a>
													</div>
												</div>
											</div>
											<div class="progress-content">
												<div class="d-flex justify-content-between">
													<h6>Total</h6>
													<span class="pull-end">3.982</span>
												</div>
												<div class="progress mt-1">
													<div class="progress-bar bg-primary" style="width: 70%; height:	100%;" role="progressbar">
														<span class="sr-only">60% Complete</span>
													</div>
												</div>
											</div>
										</div>

									</div>
									<div class="card-body pt-2 custome-tooltip pb-0">
										<div id="activity"></div>
									</div>
								</div>
							</div>
							<!-- ----column-- -->
							<div class="col-xl-4 wow fadeInUp" data-wow-delay="1s">
								<div class="card">
									<div class="card-header border-0">
										<h2 class="heading">Email </h2>
										<div class="dropdown custom-dropdown">
											<div class="btn sharp btn-primary tp-btn " data-bs-toggle="dropdown">
												<svg width="6" height="20" viewBox="0 0 6 20" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M5.19995 10.001C5.19995 9.71197 5.14302 9.42576 5.03241 9.15872C4.9218 8.89169 4.75967 8.64905 4.55529 8.44467C4.35091 8.24029 4.10828 8.07816 3.84124 7.96755C3.5742 7.85694 3.28799 7.80001 2.99895 7.80001C2.70991 7.80001 2.4237 7.85694 2.15667 7.96755C1.88963 8.07816 1.64699 8.24029 1.44261 8.44467C1.23823 8.64905 1.0761 8.89169 0.965493 9.15872C0.854882 9.42576 0.797952 9.71197 0.797952 10.001C0.798085 10.5848 1.0301 11.1445 1.44296 11.5572C1.85582 11.9699 2.41571 12.2016 2.99945 12.2015C3.58319 12.2014 4.14297 11.9694 4.55565 11.5565C4.96832 11.1436 5.20008 10.5838 5.19995 10L5.19995 10.001ZM5.19995 3.00101C5.19995 2.71197 5.14302 2.42576 5.03241 2.15872C4.9218 1.89169 4.75967 1.64905 4.55529 1.44467C4.35091 1.24029 4.10828 1.07816 3.84124 0.967552C3.5742 0.856941 3.28799 0.800011 2.99895 0.800011C2.70991 0.800011 2.4237 0.856941 2.15667 0.967552C1.88963 1.07816 1.64699 1.24029 1.44261 1.44467C1.23823 1.64905 1.0761 1.89169 0.965493 2.15872C0.854883 2.42576 0.797953 2.71197 0.797953 3.00101C0.798085 3.58475 1.0301 4.14453 1.44296 4.55721C1.85582 4.96988 2.41571 5.20164 2.99945 5.20151C3.58319 5.20138 4.14297 4.96936 4.55565 4.5565C4.96832 4.14364 5.20008 3.58375 5.19995 3.00001L5.19995 3.00101ZM5.19995 17.001C5.19995 16.712 5.14302 16.4258 5.03241 16.1587C4.9218 15.8917 4.75967 15.6491 4.55529 15.4447C4.35091 15.2403 4.10828 15.0782 3.84124 14.9676C3.5742 14.8569 3.28799 14.8 2.99895 14.8C2.70991 14.8 2.4237 14.8569 2.15666 14.9676C1.88963 15.0782 1.64699 15.2403 1.44261 15.4447C1.23823 15.6491 1.0761 15.8917 0.965493 16.1587C0.854882 16.4258 0.797952 16.712 0.797952 17.001C0.798084 17.5848 1.0301 18.1445 1.44296 18.5572C1.85582 18.9699 2.41571 19.2016 2.99945 19.2015C3.58319 19.2014 4.14297 18.9694 4.55565 18.5565C4.96832 18.1436 5.20008 17.5838 5.19995 17L5.19995 17.001Z" fill="#01A3FF"/>
												</svg>
											</div>
											<div class="dropdown-menu dropdown-menu-end">
												<a class="dropdown-item" href="javascript:void(0);">Option 1</a>
												<a class="dropdown-item" href="javascript:void(0);">Option 2</a>
												<a class="dropdown-item" href="javascript:void(0);">Option 3</a>
											</div>
										</div>
									</div>
									<div class="card-body text-center pt-0 pb-2">
										<div id="pieChart" class="d-inline-block"></div>
										<div class="chart-items">
												<!-- --row-- -->
												<div class="row">
													<!-- ----column-- -->
													<div class=" col-xl-12 col-sm-12">
														<div class="text-start mt-2">
															<span class="font-w600 mb-3 d-block text-black fs-14">Legend</span>
															<div class="color-picker">
																<span class="mb-0 col-6 fs-14">
																	<svg class="me-2" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<rect width="14" height="14" rx="4" fill="#9568FF"																		"/>
																	</svg>
																	Primary (27%)
																</span>
																<h5>763</h5>
															</div>
															<div class="color-picker">
																<span class="mb-0 col-6 fs-14">
																	<svg class="me-2" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<rect width="14" height="14" rx="4" fill="#FF5166"/>
																	</svg>
																	Promotion (11%)
																</span>
																<h5>321</h5>
															</div>
															<div class="color-picker">
																<span class="mb-0 col-6 fs-14">
																	<svg class="me-2" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<rect width="14" height="14" rx="4" fill="#ED3DD1"/>
																	</svg>
																	Forum (22%)
																</span>
																<h5>154</h5>
															</div>
															<div class="color-picker">
																<span class="mb-0 col-6 fs-14">
																	<svg class="me-2" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<rect width="14" height="14" rx="4" fill="#2BC844"/>
																	</svg>
																	Socials (15%)
																</span>
																<h5>154</h5>
															</div>
														</div>
													</div>
													<!-- ----/column-- -->
												</div>
												<!-- --/row-- -->
											</div>
									</div>
								</div>
							</div>
							<!-- ----/column-- -->
						</div>
						<div class="row">
							<!-- --column-- -->
							<div class="col-lg-12 wow fadeInUp" data-wow-delay="1.5s">
								<!-- ----card--- -->
								<div class="card statistic">
									<div class="row">
										<div class="col-xl-9">
											<div class="card-header border-0 flex-wrap pb-2">
												<div class="chart-title mb-2 ">
													<h2 class="heading text-white">Statistic</h2>
												</div>
											</div>
											<div class="card-body pt-0 custome-tooltip pe-0">
												<div id="chartBarRunning"></div>
											</div>
										</div>
										<div class="col-xl-3">
											<div class="statistic-content">
												<div class="d-flex justify-content-between">
													<select class="image-select default-select dashboard-select primary-light" aria-label="Default">
														<option selected>This Month</option>
														<option value="1">This Weeks</option>
														<option value="2">This Day</option>
													</select>
													<div class="dropdown custom-dropdown">
														<div class="btn sharp primary-light" data-bs-toggle="dropdown">
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="12" cy="5" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="19" r="2"></circle></g></svg>
														</div>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="javascript:void(0);">Option 1</a>
															<a class="dropdown-item" href="javascript:void(0);">Option 2</a>
															<a class="dropdown-item" href="javascript:void(0);">Option 3</a>
														</div>
													</div>
												</div>
												<div class="statistic-toggle my-3">
													<div class="toggle-btn" id="dzExpenseSeries" >
														<div>
															<input type="checkbox" id="checkbox3" name="toggle-btn" value="Income" />
															<label for="checkbox3" class="check"></label>
														</div>
														<div>
															<span class="fs-14">Income</span>
															<h4 class="fs-15 font-w600 mb-0">1.982</h4>
														</div>
													</div>
													<div class="toggle-btn expense"  id="dzIncomeSeries">
														<div>
															<input type="checkbox" id="checkbox2" name="toggle-btn" value="Expense" />
															<label for="checkbox2" class="check"></label>
														</div>
														<div>
															<span class="fs-14">Expense</span>
															<h4 class="fs-15 font-w600 mb-0">1.982</h4>
														</div>
													</div>
												</div>
												<!-- -----card---- -->
												<div class="card expense mb-3">
													<div class="card-body p-3">
														<div class="students1 d-flex align-items-center justify-content-between ">
															<div class="content">
																<span>Income</span>
																<h2>$ 12,890,00</h2>
																<h5 class="up">
																	<svg width="24" height="23" viewBox="0 0 24 23" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path d="M23.25 11.5C23.25 5.275 18.225 0.25 12 0.25C5.775 0.249999 0.75 5.275 0.75 11.5C0.749999 17.725 5.775 22.75 12 22.75C18.225 22.75 23.25 17.725 23.25 11.5ZM11.25 16.075L11.25 9.175L9.3 10.9C8.85 11.275 8.25 11.2 7.875 10.825C7.725 10.6 7.65 10.375 7.65 10.15C7.65 9.85 7.8 9.55 8.025 9.4L11.625 6.25C11.7 6.175 11.775 6.175 11.85 6.1C11.925 6.1 11.925 6.1 12 6.025C12.075 6.025 12.075 6.025 12.15 6.025L12.225 6.025C12.3 6.025 12.3 6.025 12.375 6.025L12.45 6.025C12.525 6.025 12.525 6.025 12.6 6.1C12.6 6.1 12.675 6.1 12.675 6.175L12.75 6.25C12.75 6.25 12.75 6.25 12.825 6.325L15.975 9.55C16.35 9.925 16.35 10.6 15.975 10.975C15.6 11.35 14.925 11.35 14.55 10.975L13.125 9.475L13.125 16.15C13.125 16.675 12.675 17.2 12.075 17.2C11.7 17.05 11.25 16.6 11.25 16.075Z" fill="#FFD125"/>
																	</svg>
																		+15% </h5>
															</div>
														</div>
													</div>
												</div>
												<!-- -----/card---- -->
												<!-- -----card---- -->
												<div class="card expense mb-3 ">
													<div class="card-body p-3 ">
														<div class="students1 d-flex align-items-center justify-content-between ">
															<div class="content">
																<span>Expense</span>
																<h2>$12,890,00</h2>
																<h5>
																	<svg width="24" height="23" viewBox="0 0 24 23" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path d="M0.75 11.5C0.75 17.725 5.775 22.75 12 22.75C18.225 22.75 23.25 17.725 23.25 11.5C23.25 5.275 18.225 0.25 12 0.25C5.775 0.25 0.75 5.275 0.75 11.5ZM12.75 6.925L12.75 13.825L14.7 12.1C15.15 11.725 15.75 11.8 16.125 12.175C16.275 12.4 16.35 12.625 16.35 12.85C16.35 13.15 16.2 13.45 15.975 13.6L12.375 16.75C12.3 16.825 12.225 16.825 12.15 16.9C12.075 16.9 12.075 16.9 12 16.975C11.925 16.975 11.925 16.975 11.85 16.975L11.775 16.975C11.7 16.975 11.7 16.975 11.625 16.975L11.55 16.975C11.475 16.975 11.475 16.975 11.4 16.9C11.4 16.9 11.325 16.9 11.325 16.825L11.25 16.75C11.25 16.75 11.25 16.75 11.175 16.675L8.025 13.45C7.65 13.075 7.65 12.4 8.025 12.025C8.4 11.65 9.075 11.65 9.45 12.025L10.875 13.525L10.875 6.85C10.875 6.325 11.325 5.8 11.925 5.8C12.3 5.95 12.75 6.4 12.75 6.925Z" fill="#FCFCFC"/>
																	</svg>
																	+15% </h5>
															</div>
														</div>
													</div>
												</div>
												<!-- -----/card---- -->
											</div>
										</div>
									</div>
								</div>
								<!-- ----/card--- -->
							</div>
							<!-- --/column-- -->
							<!-- --column-- -->
							<div class="col-xl-6">
								<div class="card Upgrade">
									<div class="card-body d-flex align-items-center ps-0">
										<div class="d-inline-block position-relative donut-chart-sale ">
											<div id="redial"></div>
										</div>
										<div class="upgread-stroage">
											<h4 class="fs-20">Upgrade Your Storage</h4>
											<p>Lorem ipsum dolor sit amet, onsectetur.</p>
											<button class="btn btn-success">Upgrade</button>
										</div>
									</div>
								</div>
							</div>
							<!-- --/column-- -->
							<!-- --column-- -->
							<div class="col-xl-6">
								<div class="card overflow-hidden">
									<div class="card-body p-4">
										<div class="d-flex justify-content-between flex-wrap">
											<div>
												<h4 class="fs-28 mb-0">7,642</h4>
												<span class="fs-18 text-secondary font-w600 mb-3 d-block">Total emails Subcriber.</spam>
											</div>
											<div class="compose-btn">
												<button class="btn btn-secondary ">+ Compose Email</button>
											</div>
										</div>
										<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
										<div class="mail-img">
											<svg width="156" height="84" viewBox="0 0 156 84" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path opacity="0.1" d="M164.961 6.14744C165.013 5.67345 165.013 5.1969 164.961 4.72291L164.136 3.36961C164.136 3.36961 164.136 2.87103 163.678 2.65735L163.22 2.30122L161.754 1.37527C161.353 1.05833 160.888 0.79377 160.379 0.591786L158.821 0.164429H156.988H8.52299H6.69009L5.13212 0.663011C4.62116 0.832312 4.15505 1.07382 3.75745 1.37527L2.29113 2.30122C2.29113 2.30122 2.29113 2.30122 2.29113 2.65735C2.29113 3.01348 2.29113 3.15593 1.8329 3.36961L1.00809 4.72291C0.956224 5.1969 0.956224 5.67345 1.00809 6.14744L0 6.93093V92.4025C0 94.2916 0.965543 96.1032 2.68422 97.439C4.4029 98.7747 6.73393 99.5252 9.16451 99.5252H91.6451C94.0756 99.5252 96.4067 98.7747 98.1253 97.439C99.844 96.1032 100.81 94.2916 100.81 92.4025C100.81 90.5135 99.844 88.7018 98.1253 87.3661C96.4067 86.0303 94.0756 85.2799 91.6451 85.2799H18.329V21.1762L76.9818 55.3648C78.5682 56.2895 80.4976 56.7894 82.4805 56.7894C84.4635 56.7894 86.3929 56.2895 87.9792 55.3648L146.632 21.1762V85.2799H128.303C125.872 85.2799 123.541 86.0303 121.823 87.3661C120.104 88.7018 119.139 90.5135 119.139 92.4025C119.139 94.2916 120.104 96.1032 121.823 97.439C123.541 98.7747 125.872 99.5252 128.303 99.5252H155.797C158.227 99.5252 160.558 98.7747 162.277 97.439C163.996 96.1032 164.961 94.2916 164.961 92.4025V6.93093C164.961 6.93093 164.961 6.43234 164.961 6.14744ZM82.4805 40.7634L36.658 14.0536H128.303L82.4805 40.7634Z" fill="#9568FF"/>
											</svg>
										</div>
									</div>
								</div>
							</div>
							<!-- --/column-- -->
							<!-- --column-- -->
							<div class="col-xl-12">
								<div class="user_reviews overflow-hidden">
									<h4 class="heading mb-3"> User Reviews</h4>
									<div class="swiper mySwiper position-relative ">
										<div class="swiper-wrapper ">
											<!-- ---swiper-slide--- -->
											<div class="swiper-slide">
												<div class="card">
													<div class="card-header justify-content-start border-0 pb-0 p-4">
														<div class="slide-img me-3">
															<img src="./images/1.jpg" class="img-fluid" alt="">
														</div>
														<div>
															<h4>Exca Libur</h4>
															<span>UI Designer / <span><svg width="17" height="15" viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M8.5 0.5L10.2961 6.02786H16.1085L11.4062 9.44427L13.2023 14.9721L8.5 11.5557L3.79772 14.9721L5.59383 9.44427L0.891548 6.02786H6.70389L8.5 0.5Z" fill="#FFD125"/>
																</svg>
																5.0</span></span>
														</div>
													</div>
													<div class="card-body p-4">
														<p class="mb-0">Sed eligendi facere repellendus. Ipsam ipsam incidunt minima harum tenetur. Ab sit asperiores architecto repudiandae.</p>
													</div>
												</div>
											</div>
											<!-- ---/swiper-slide--- -->
											<!-- ---swiper-slide--- -->
											<div class="swiper-slide">
												<div class="card">
													<div class="card-header justify-content-start border-0 pb-0 p-4">
														<div class="slide-img me-3">
															<img src="./images/2.jpg" class="img-fluid" alt="">
														</div>
														<div>
															<h4>Exca Libur</h4>
															<span>UI Designer / <span><svg width="17" height="15" viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M8.5 0.5L10.2961 6.02786H16.1085L11.4062 9.44427L13.2023 14.9721L8.5 11.5557L3.79772 14.9721L5.59383 9.44427L0.891548 6.02786H6.70389L8.5 0.5Z" fill="#FFD125"/>
																</svg>
																5.0</span>
															</span>
														</div>
													</div>
													<div class="card-body p-4">
														<p class="mb-0">Sed eligendi facere repellendus. Ipsam ipsam incidunt minima harum tenetur. Ab sit asperiores architecto repudiandae.</p>
													</div>
												</div>
											</div>
											<!-- ---/swiper-slide--- -->
											<!-- ---swiper-slide--- -->
											<div class="swiper-slide">
												<div class="card">
													<div class="card-header justify-content-start border-0 pb-0 p-4">
														<div class="slide-img me-3">
															<img src="./images/3.jpg" class="img-fluid" alt="">
														</div>
														<div>
															<h4>Exca Libur</h4>
															<span>UI Designer / <span><svg width="17" height="15" viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M8.5 0.5L10.2961 6.02786H16.1085L11.4062 9.44427L13.2023 14.9721L8.5 11.5557L3.79772 14.9721L5.59383 9.44427L0.891548 6.02786H6.70389L8.5 0.5Z" fill="#FFD125"/>
																</svg>
																5.0</span>
															</span>
														</div>
													</div>
													<div class="card-body p-4">
														<p class="mb-0">Sed eligendi facere repellendus. Ipsam ipsam incidunt minima harum tenetur. Ab sit asperiores architecto repudiandae.</p>
													</div>
												</div>
											</div>
											<!-- ---/swiper-slide--- -->
											<!-- ---swiper-slide--- -->
											<div class="swiper-slide">
												<div class="card">
													<div class="card-header justify-content-start border-0 pb-0 p-4">
														<div class="slide-img me-3">
															<img src="./images/1.jpg" class="img-fluid" alt="">
														</div>
														<div>
															<h4>Exca Libur</h4>
															<span>UI Designer / <span><svg width="17" height="15" viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M8.5 0.5L10.2961 6.02786H16.1085L11.4062 9.44427L13.2023 14.9721L8.5 11.5557L3.79772 14.9721L5.59383 9.44427L0.891548 6.02786H6.70389L8.5 0.5Z" fill="#FFD125"/>
																</svg>
																5.0</span></span>
														</div>
													</div>
													<div class="card-body p-4">
														<p class="mb-0">Sed eligendi facere repellendus. Ipsam ipsam incidunt minima harum tenetur. Ab sit asperiores architecto repudiandae.</p>
													</div>
												</div>
											</div>
											<!-- ---/swiper-slide--- -->
											<!-- ---swiper-slide--- -->
											<div class="swiper-slide">
												<div class="card">
													<div class="card-header justify-content-start border-0 pb-0 p-4">
														<div class="slide-img me-3">
															<img src="./images/2.jpg" class="img-fluid" alt="">
														</div>
														<div>
															<h4>Exca Libur</h4>
															<span>UI Designer / <span><svg width="17" height="15" viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M8.5 0.5L10.2961 6.02786H16.1085L11.4062 9.44427L13.2023 14.9721L8.5 11.5557L3.79772 14.9721L5.59383 9.44427L0.891548 6.02786H6.70389L8.5 0.5Z" fill="#FFD125"/>
																</svg>
																5.0</span>
															</span>
														</div>
													</div>
													<div class="card-body p-4">
														<p class="mb-0">Sed eligendi facere repellendus. Ipsam ipsam incidunt minima harum tenetur. Ab sit asperiores architecto repudiandae.</p>
													</div>
												</div>
											</div>
											<!-- ---/swiper-slide--- -->
											<!-- ---swiper-slide--- -->
											<div class="swiper-slide">
												<div class="card">
													<div class="card-header justify-content-start border-0 pb-0 p-4">
														<div class="slide-img me-3">
															<img src="./images/3.jpg" class="img-fluid" alt="">
														</div>
														<div>
															<h4>Exca Libur</h4>
														<span>UI Designer / <span><svg width="17" height="15" viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M8.5 0.5L10.2961 6.02786H16.1085L11.4062 9.44427L13.2023 14.9721L8.5 11.5557L3.79772 14.9721L5.59383 9.44427L0.891548 6.02786H6.70389L8.5 0.5Z" fill="#FFD125"/>
																</svg>
																5.0</span></span>
														</div>
													</div>
													<div class="card-body p-4">
														<p class="mb-0">Sed eligendi facere repellendus. Ipsam ipsam incidunt minima harum tenetur. Ab sit asperiores architecto repudiandae.</p>
													</div>
												</div>
											</div>
											<!-- ---/swiper-slide--- -->
											<!-- ---swiper-slide--- -->
											<div class="swiper-slide">
												<div class="card">
													<div class="card-header justify-content-start border-0 pb-0 p-4">
														<div class="slide-img me-3">
															<img src="./images/1.jpg" class="img-fluid" alt="">
														</div>
														<div>
															<h4>Exca Libur</h4>
															<span>UI Designer / <span><svg width="17" height="15" viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M8.5 0.5L10.2961 6.02786H16.1085L11.4062 9.44427L13.2023 14.9721L8.5 11.5557L3.79772 14.9721L5.59383 9.44427L0.891548 6.02786H6.70389L8.5 0.5Z" fill="#FFD125"/>
																</svg>
																5.0</span>
															</span>
														</div>
													</div>
													<div class="card-body p-4">
														<p class="mb-0">Sed eligendi facere repellendus. Ipsam ipsam incidunt minima harum tenetur. Ab sit asperiores architecto repudiandae.</p>
													</div>
												</div>
											</div>
											<!-- ---/swiper-slide--- -->
											<!-- ---swiper-slide--- -->
											<div class="swiper-slide">
												<div class="card">
													<div class="card-header justify-content-start border-0 pb-0 p-4">
														<div class="slide-img me-3">
															<img src="./images/2.jpg" class="img-fluid" alt="">
														</div>
														<div>
															<h4>Exca Libur</h4>
															<span>UI Designer / <span><svg width="17" height="15" viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M8.5 0.5L10.2961 6.02786H16.1085L11.4062 9.44427L13.2023 14.9721L8.5 11.5557L3.79772 14.9721L5.59383 9.44427L0.891548 6.02786H6.70389L8.5 0.5Z" fill="#FFD125"/>
																</svg>
																5.0</span>
															</span>
														</div>
													</div>
													<div class="card-body p-4">
														<p class="mb-0">Sed eligendi facere repellendus. Ipsam ipsam incidunt minima harum tenetur. Ab sit asperiores architecto repudiandae.</p>
													</div>
												</div>
											</div>
											<!-- ---/swiper-slide--- -->
											<!-- ---swiper-slide--- -->
											<div class="swiper-slide">
												<div class="card">
													<div class="card-header justify-content-start border-0 pb-0 p-4">
														<div class="slide-img me-3">
															<img src="./images/3.jpg" class="img-fluid" alt="">
														</div>
														<div>
															<h4>Exca Libur</h4>
															<span>UI Designer / <span><svg width="17" height="15" viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M8.5 0.5L10.2961 6.02786H16.1085L11.4062 9.44427L13.2023 14.9721L8.5 11.5557L3.79772 14.9721L5.59383 9.44427L0.891548 6.02786H6.70389L8.5 0.5Z" fill="#FFD125"/>
																</svg>
																5.0</span>
															</span>
														</div>
													</div>
													<div class="card-body p-4">
														<p class="mb-0">Sed eligendi facere repellendus. Ipsam ipsam incidunt minima harum tenetur. Ab sit asperiores architecto repudiandae.</p>
													</div>
												</div>
											</div>
											<!-- ---/swiper-slide--- -->
										</div>
										<div class="">
											<div class="swiper-button-next">
												<svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M10.8163 11.3757L15.3283 6.83173C15.3923 6.76773 15.4243 6.70373 15.4883 6.63973C15.5203 6.60773 15.5203 6.57573 15.5523 6.54373C15.5843 6.51173 15.5843 6.47973 15.6163 6.41573C15.6163 6.38373 15.6483 6.35173 15.6483 6.28773C15.6483 6.25573 15.6803 6.22373 15.6803 6.19173L15.6803 5.99973C15.6803 5.93573 15.6803 5.83973 15.6483 5.77573C15.6483 5.74373 15.6163 5.71173 15.6163 5.67973C15.6163 5.64773 15.5843 5.61573 15.5843 5.58373C15.5843 5.55173 15.5523 5.51973 15.5203 5.48773C15.5203 5.39173 15.4883 5.35973 15.4883 5.35973C15.4563 5.29573 15.3923 5.23173 15.3283 5.16773L10.8163 0.623728C10.5923 0.399728 10.3043 0.271728 9.9843 0.271728C9.6643 0.271728 9.3763 0.399728 9.1523 0.623728C8.9283 0.847728 8.80029 1.13573 8.80029 1.45573C8.80029 1.77573 8.9283 2.06373 9.1523 2.28773L11.6483 4.78373L1.50429 4.78373C0.864291 4.78373 0.320291 5.32773 0.320291 5.96773C0.320291 6.60773 0.864291 7.15173 1.50429 7.15173L11.6483 7.15173L9.15229 9.64773C8.92829 9.87173 8.80029 10.1597 8.80029 10.4797C8.80029 10.7997 8.92829 11.0877 9.15229 11.3117C9.37629 11.5357 9.66429 11.6637 9.98429 11.6637C10.2723 11.6957 10.5923 11.5997 10.8163 11.3757Z" fill="#FCFCFC"/>
												</svg>
											</div>
											<div class="swiper-button-prev">
												<svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M5.1837 0.624268L0.671702 5.16827C0.607702 5.23227 0.575702 5.29627 0.511702 5.36027C0.479702 5.39227 0.479702 5.42427 0.447702 5.45627C0.415702 5.48827 0.415702 5.52027 0.383702 5.58427C0.383702 5.61627 0.351702 5.64827 0.351702 5.71227C0.351702 5.74427 0.319702 5.77627 0.319702 5.80827L0.319702 6.00027C0.319702 6.06427 0.319702 6.16027 0.351702 6.22427C0.351702 6.25627 0.383702 6.28827 0.383702 6.32027C0.383702 6.35227 0.415702 6.38427 0.415702 6.41627C0.415702 6.44827 0.447702 6.48027 0.479702 6.51227C0.479702 6.60827 0.511702 6.64027 0.511702 6.64027C0.543702 6.70427 0.607702 6.76827 0.671702 6.83227L5.1837 11.3763C5.4077 11.6003 5.6957 11.7283 6.0157 11.7283C6.3357 11.7283 6.6237 11.6003 6.8477 11.3763C7.0717 11.1523 7.19971 10.8643 7.19971 10.5443C7.19971 10.2243 7.0717 9.93627 6.8477 9.71227L4.3517 7.21627L14.4957 7.21627C15.1357 7.21627 15.6797 6.67227 15.6797 6.03227C15.6797 5.39227 15.1357 4.84827 14.4957 4.84827L4.3517 4.84827L6.8477 2.35227C7.0717 2.12827 7.1997 1.84027 7.1997 1.52027C7.1997 1.20027 7.0717 0.912268 6.8477 0.688268C6.6237 0.464268 6.3357 0.336267 6.0157 0.336267C5.7277 0.304268 5.4077 0.400268 5.1837 0.624268Z" fill="#FCFCFC"/>
												</svg>
											</div>
										</div>
									</div>


								</div>
							</div>
							<!-- --/column-- -->
						</div>
					</div>
				</div>
				<!--**********************************
					Footer start
				***********************************-->
				<div class="footer">
					<div class="copyright">
						<p>Copyright © Designed &amp; Developed by <a href="https://dexignlab.com/" target="_blank">DexignLab</a> 2022</p>
					</div>
				</div>
			</div>
		</div>

        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer end
        ***********************************-->

		<!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


	</div>
    <!--**********************************
        Main wrapper end
    ***********************************-->
<!--**********************************
		Modal
***********************************-->
	<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">

				<label for="basic-url" class="form-label d-block">Enter Name</label>
				<input type="text" class="form-control w-100" placeholder="Username">

				<label for="basic-url" class="form-label d-block mt-3">Enter Position</label>
				<input type="text" class="form-control w-100" placeholder="Username">

			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>
			</div>
		</div>
		</div>
	</div>

		<!--Modal--2-->

	<div class="modal fade" id="chat_model" tabindex="-1" aria-labelledby="chat_modelLabel" aria-hidden="true">
		<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">

				<label for="basic-url" class="form-label d-block">Enter Name</label>
				<input type="text" class="form-control w-100" placeholder="Username">

				<label for="basic-url" class="form-label d-block mt-3">Enter Position</label>
				<input type="text" class="form-control w-100" placeholder="Username">

			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>
			</div>
		</div>
		</div>
	</div>

	<!--**********************************
		Modal
	***********************************-->
    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="/admin-panel/vendor/global/global.min.js"></script>
	<script src="/admin-panel/vendor/chart.js/Chart.bundle.min.js"></script>
	<script src="/admin-panel/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
	<!-- Apex Chart -->
	<script src="/admin-panel/vendor/apexchart/apexchart.js"></script>
	<!-- Chart piety plugin files -->
    <script src="/admin-panel/vendor/peity/jquery.peity.min.js"></script>
	<script src="/admin-panel/vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>
	<!-- ----swiper-slider---- -->
	<script src="/admin-panel/vendor/swiper/js/swiper-bundle.min.js"></script>
	<!-- Dashboard 1 -->
	<script src="/admin-panel/js/dashboard/dashboard-1.js"></script>
	<script src="/admin-panel/vendor/wow-master/dist/wow.min.js"></script>
	<script src="/admin-panel/vendor/bootstrap-datetimepicker/js/moment.js"></script>
	<script src="/admin-panel/vendor/datepicker/js/bootstrap-datepicker.min.js"></script>
	<script src="/admin-panel/vendor/bootstrap-select-country/js/bootstrap-select-country.min.js"></script>

	<script src="/admin-panel/js/dlabnav-init.js"></script>
    <script src="/admin-panel/js/custom.min.js"></script>
	<script src="/admin-panel/js/demo.js"></script>
    <script src="/admin-panel/js/styleSwitcher.js"></script>
	<script>

	$(function () {
        $("#datepicker").datepicker({
            autoclose: true,
            todayHighlight: true
        }).datepicker('update', new Date());

	});

    $(document).ready(function(){
        $(".booking-calender .fa.fa-clock-o").removeClass(this);
        $(".booking-calender .fa.fa-clock-o").addClass('fa-clock');
    });
	$('.my-select').selectpicker();
	</script>
</body>
</html>
