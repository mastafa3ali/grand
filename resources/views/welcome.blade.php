<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}" />

        <title>PayTabs</title>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
        <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.20.2/dist/bootstrap-table.min.css">
        <style>
            html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
                background: #4a5568
            }
        </style>
    </head>
    <body class="antialiased container" >
        <div style="background: #4a5568" class="relative  items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">


            <div class="max-w-6xl mxauto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    <svg height="30" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 569.11 166.55">
                        <defs>
                            <style>.cls-1{fill:#fff;}</style>
                        </defs>
                        <path class="cls-1" d="M78.63,42.15H53.08V85.06H78.63c25.21,0,25.47-42.91,0-42.91"></path>
                        <path class="cls-1" d="M132.3,0H4.09A4.2,4.2,0,0,0,0,4.27V130.43l28.53,15V42.3H14.94V18.44h67.4c53.62,0,53,90.32,0,90.32h-30v49.36l16,8.43,68-36.12V4.27A4.19,4.19,0,0,0,132.3,0"></path>
                        <path class="cls-1" d="M169,39a16.77,16.77,0,0,1,16.74-16.77h11.47c7.26.25,13.92-.12,20.93,3.2,9,4.32,13.18,14.29,13.18,23.91,0,9.09-3.21,17.73-11.45,22.78-6.54,4.07-14.66,5.18-22.55,5.18H185.56v31.17H169Zm16.61,23.52h12.57c8.12,0,16.15-3.21,16.15-12.81,0-11.21-6.15-12.82-16.76-12.82h-9.85c-2.11,0-2.11,2-2.11,4.08Z"></path>
                        <path class="cls-1" d="M269.57,102.53a24.16,24.16,0,0,1-17.38,7.41c-12.79,0-22.26-8.63-22.64-21.17-.25-11.85,8.62-19.61,18.6-21l21.18-3.08c-.49-6.29-10.36-8.52-14.66-8.52a42.24,42.24,0,0,0-17.11,3.83h-1.74V45.77c6.17-1.73,12.33-3.21,19.11-3.21,14.78,0,29.17,5.55,29.68,21.81v44.1h-15ZM255,96.14c4.94,0,9.87-2,13.92-4.43V77.18c-5.27,1-10.7,1.47-16.13,2.58-4.31.86-7.51,3.19-7.51,8.13,0,6,4.55,8.25,9.72,8.25"></path>
                        <path class="cls-1" d="M337.08,43.92h14.55l-28.46,78.46C318.37,134.83,309.74,138,295,138h-2.82V124.48c11.8.12,15.75,0,18.84-8.5l3-8.15-28.1-63.91H303l18.34,43.35Z"></path>
                        <path class="cls-1" d="M337.16 37.27 337.16 22.23 401.24 22.23 401.24 37.27 377.33 37.27 377.33 108.47 360.7 108.47 360.7 37.27 337.16 37.27z"></path>
                        <path class="cls-1" d="M435.83,102.53a24.18,24.18,0,0,1-17.35,7.41c-12.83,0-22.32-8.63-22.67-21.17-.25-11.85,8.62-19.61,18.6-21l21.18-3.08c-.5-6.29-10.36-8.52-14.66-8.52a42.25,42.25,0,0,0-17.12,3.83h-1.74V45.77c6.16-1.73,12.34-3.21,19.1-3.21,14.79,0,29.2,5.55,29.71,21.81v44.1H435.83ZM421.3,96.14c4.92,0,9.85-2,13.91-4.43V77.18c-5.28,1-10.72,1.47-16.14,2.58-4.31.86-7.51,3.19-7.51,8.13,0,6,4.56,8.25,9.74,8.25"></path>
                        <path class="cls-1" d="M477.45,109.83A15.56,15.56,0,0,1,462,94.17v-76h15.62V45.75c4.08-2.58,8.14-3.19,12.44-3.19a29.36,29.36,0,0,1,22.58,10c5.15,6.66,6.51,14.42,6.74,22.67,0,7.15-1.23,14.54-4.78,20.81-5.79,9.61-15.28,13.53-26.59,13.82Zm3.84-13.94h5.18c4.16,0,9.09-.73,12.3-3.92,4-4.08,4.44-11.47,4.44-16.77.12-4.31-.62-9.13-2.84-12.82-2.71-4.3-7-5.67-11.81-5.9a47,47,0,0,0-11,1.6V92.32a3.69,3.69,0,0,0,3.72,3.57"></path>
                        <path class="cls-1" d="M522.43,106.61V92.81h2a54.19,54.19,0,0,0,18.13,3.47c4.42-.13,11.81-.88,11.81-6.9,0-3.33-4.8-4.94-7.75-6-5.54-2.1-10.85-3.69-15.65-6.15-6-3.09-9.13-9.73-9.13-16.13,0-12.33,11.48-18.61,22.19-18.49,7.87.13,13.18,1.48,19.82,3.44V59.19h-2.08a48.48,48.48,0,0,0-15.77-3c-2.47,0-9.37.49-9.37,4.2,0,2,3.57,4,6.29,4.81,5.3,2,11.58,3.69,16.51,6.28,7.27,3.58,9.73,10.59,9.73,17.12,0,14.79-13.67,21.2-27.24,21.2a64.44,64.44,0,0,1-19.44-3.22"></path>
                    </svg>
                </div>

                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <table data-toggle="table">
                        <thead>
                                <tr>
                                <th>name</th>
                                <th>Parent</th>
                                <th>Sub Categories</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>name</th>
                                <th>Parent</th>
                                <th>Sub Categories</th>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="card-body">
                        <form  class="tooltip-right-bottom" action="{{ route('category.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="form-group has-float-label col-md-6">
                                    <input class="form-control @error('name') is-invalid @enderror" placeholder="{{ __('name') }}" name="name"  id="name" value="{{ old('name') }}" required />
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group has-float-label col-md-6">
                                    <select class="form-control @error('category_id') is-invalid @enderror parent_id" placeholder="{{ __('parent') }}" name="category_id" id="category_id"  >
                                        <option value="" >{{ __('select') }}</option>
                                    </select>
                                    @error('category_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <button type="submit"  id="submitbtn" class="btn btn-primary">{{ __('save') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/jquery/dist/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/bootstrap-table@1.20.2/dist/bootstrap-table.min.js"></script>
        <script>
            $(document).on('click', '#submitbtn',function(){
                $('#comment').on('submit', function(e) {
                    e.preventDefault();
                    var name = $('#name').val();
                    var category_id = $('#category_id').val();
                    $.ajax({
                        type: "POST",
                        url:"{{ route('category.store') }}",
                        data: {name:name, category_id:category_id},
                        success: function( msg ) {
                            alert( msg );
                        }
                    });
                });

            });
        </script>
    </body>
</html>
