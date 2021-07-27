<?php 
if(isset($_POST['submit'])){
 
 // Count total files
 $countfiles = count($_FILES['file']['name']);

 // Looping all files
 for($i=0;$i<$countfiles;$i++){
  $filename = $_FILES['file']['name'][$i];
 
  // Upload file
  move_uploaded_file($_FILES['file']['tmp_name'][$i],'upload/'.$filename);
 
 }
} 

?>
<html lang="en">
	<!--begin::Head-->
	<head><base href="">
		<meta charset="utf-8" />
		<title>Upload</title>
		<meta name="description" content="Metronic admin dashboard live demo. Check out all the features of the admin panel. A large number of settings, additional services and widgets." />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<link rel="canonical" href="https://keenthemes.com/metronic" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Page Vendors Styles(used by this page)-->
		<link href="https://hradiinfotech.com/metronic/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Page Vendors Styles-->
		<!--begin::Global Theme Styles(used by all pages)-->
		<link href="https://hradiinfotech.com/metronic/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="https://hradiinfotech.com/metronic/assets/plugins/custom/prismjs/prismjs.bundle.css" rel="stylesheet" type="text/css" />
		<link href="https://hradiinfotech.com/metronic/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Global Theme Styles-->
		<!--begin::Layout Themes(used by all pages)-->
		<link href="https://hradiinfotech.com/metronic/assets/css/themes/layout/header/base/light.css" rel="stylesheet" type="text/css" />
		<link href="https://hradiinfotech.com/metronic/assets/css/themes/layout/header/menu/light.css" rel="stylesheet" type="text/css" />
		<link href="https://hradiinfotech.com/metronic/assets/css/themes/layout/brand/dark.css" rel="stylesheet" type="text/css" />
		<link href="https://hradiinfotech.com/metronic/assets/css/themes/layout/aside/dark.css" rel="stylesheet" type="text/css" />
		<!--end::Layout Themes-->
		<link rel="shortcut icon" href="https://hradiinfotech.com/metronic/assets/media/logos/favicon.ico" />
        <link rel="shortcut icon" href="https://master.tus.io/files/" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Page Custom Styles(used by this page)-->
		<link href="https://hradiinfotech.com/metronic/assets/plugins/custom/uppy/uppy.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Page Custom Styles-->
        <script src="https://hradiinfotech.com/metronic/assets/plugins/custom/uppy/uppy.bundle.js"></script>
		<script src="https://hradiinfotech.com/metronic/assets/js/pages/crud/file-upload/uppy.js"></script>
		<!--end::Page Scripts-->	
	</head>
<body>

<form method='post' action='' enctype='multipart/form-data'>

												<div class="card-body">
													<div class="form-group row">
														<label class="col-lg-3 col-form-label text-lg-right">Full Name:</label>
														<div class="col-lg-6">
															<input type="text" class="form-control" placeholder="Enter full name" name="name">
															<span class="form-text text-muted">Please enter your full name</span>
														</div>
													</div>
													<div class="form-group row">
														<label class="col-lg-3 col-form-label text-lg-right">Email:</label>
														<div class="col-lg-6">
															<input type="email" class="form-control" placeholder="Enter email" name="email">
															<span class="form-text text-muted">Please enter your email</span>
														</div>
													</div>
													<div class="form-group row">
														<label class="col-lg-3 col-form-label text-lg-right">Message:</label>
														<div class="col-lg-6">
															<textarea class="form-control" id="exampleTextarea" rows="3" placeholder="Please enter your message"></textarea>
															<span class="form-text text-muted">We'll never share your message with anyone else.</span>
														</div>
													</div>
													<div class="form-group row">
														<label class="col-lg-3 col-form-label text-lg-right">Upload File:</label>
														<div class="col-lg-6">
															<div class="uppy" id="kt_uppy_5">
																<div class="uppy-wrapper"><div class="uppy-Root uppy-FileInput-container"><label class="uppy-input-label btn btn-light-primary btn-sm btn-bold" for="kt_uppy_5_input_control"><input type="file" class="btn-primary"name="file[]" id="file" multiple></label></div></div>
																<div class="uppy-list"></div>
																<div class="uppy-status"><div class="uppy-Root uppy-StatusBar is-waiting" aria-hidden="true"><div class="uppy-StatusBar-progress
                           " role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="width: 0%;"></div><div class="uppy-StatusBar-actions"></div></div></div>
																<div class="uppy-informer uppy-informer-min"><div class="uppy uppy-Informer" aria-hidden="true"><p role="alert"> </p></div></div>
															</div>
															<span class="form-text text-muted">Max file size is 1MB and max number of files is 5.</span>
														</div>
													</div>
												</div>
												<div class="card-footer">
													<div class="row">
														<div class="col-lg-3"></div>
														<div class="col-lg-6">
														<input type='submit' class="btn btn-primary" name='submit' value='Submit'>
															<button type="reset" class="btn btn-secondary">Cancel</button>
														</div>
													</div>
												</div>
											</form>
<!--end::Demo Panel-->
<script>var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";</script>
		<!--begin::Global Config(global config for global JS scripts)-->
		<script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1400 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#3699FF", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#E4E6EF", "dark": "#181C32" }, "light": { "white": "#ffffff", "primary": "#E1F0FF", "secondary": "#EBEDF3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#3F4254", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#EBEDF3", "gray-300": "#E4E6EF", "gray-400": "#D1D3E0", "gray-500": "#B5B5C3", "gray-600": "#7E8299", "gray-700": "#5E6278", "gray-800": "#3F4254", "gray-900": "#181C32" } }, "font-family": "Poppins" };</script>
		<!--end::Global Config-->
		<!--begin::Global Theme Bundle(used by all pages)-->
		<script src="https://hradiinfotech.com/metronic/assets/plugins/global/plugins.bundle.js"></script>
		<script src="https://hradiinfotech.com/metronic/assets/plugins/custom/prismjs/prismjs.bundle.js"></script>
		<script src="https://hradiinfotech.com/metronic/assets/js/scripts.bundle.js"></script>
		<!--end::Global Theme Bundle-->
		<!--begin::Page Vendors(used by this page)-->
		<script src="https://hradiinfotech.com/metronic/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
		<!--end::Page Vendors-->
		<!--begin::Page Scripts(used by this page)-->
		<script src="https://hradiinfotech.com/metronic/assets/js/pages/widgets.js"></script>
		
</body>
</html>