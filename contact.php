<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/livecanvas-team/ninjabootstrap/dist/css/bootstrap.min.css" media="all">

    <style>
        nav {
            background-color: #333;
            color: white;
            padding: 1em;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin-right: 20px;
        }
    </style>

</head>

<body>

    <nav>
        <a href="dashboard.php">Dashboard</a>
        <a href="members.php">Members</a>
        <a href="exercise.php">Exercises</a>
        <a href="contact.php">Contact</a>
    </nav>

    <div class="container-fluid g-0">
        <div class="row g-0">
            <div class="col-md-12">
                <div class="lc-block overflow-hidden">
                    <div style="max-height:40vh" class="ratio ratio-1x1" lc-helper="gmap-embed">
                        <iframe src="https://maps.google.com/maps?q=1%20Hacker%20Way%2C%20Menlo%20Park%2C%20CA%2094025%2C%20United%20states&amp;t=m&amp;z=12&amp;output=embed&amp;iwloc=near"></iframe>
                    </div>
                </div><!-- /lc-block -->
            </div><!-- /col -->
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center mt-3 mt-lg-5">
            <div class="col-md-5 me-md-5">

                <img class="img-fluid h-100" style="object-fit:cover" src="https://images.unsplash.com/photo-1599930113854-d6d7fd521f10?crop=entropy&amp;cs=tinysrgb&amp;fit=crop&amp;fm=jpg&amp;ixid=MnwzNzg0fDB8MXxzZWFyY2h8Mnx8bWFwfGVufDB8Mnx8fDE2MzYwNDExMTM&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=1080&amp;h=1080" srcset="https://images.unsplash.com/photo-1599930113854-d6d7fd521f10?crop=entropy&amp;cs=tinysrgb&amp;fit=crop&amp;fm=jpg&amp;ixid=MnwzNzg0fDB8MXxzZWFyY2h8Mnx8bWFwfGVufDB8Mnx8fDE2MzYwNDExMTM&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=1080&amp;h=1080 1080w, https://images.unsplash.com/photo-1599930113854-d6d7fd521f10??crop=entropy&amp;cs=tinysrgb&amp;fit=crop&amp;fm=jpg&amp;ixid=MnwzNzg0fDB8MXxzZWFyY2h8Mnx8bWFwfGVufDB8Mnx8fDE2MzYwNDExMTM&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=150 150w, https://images.unsplash.com/photo-1599930113854-d6d7fd521f10??crop=entropy&amp;cs=tinysrgb&amp;fit=crop&amp;fm=jpg&amp;ixid=MnwzNzg0fDB8MXxzZWFyY2h8Mnx8bWFwfGVufDB8Mnx8fDE2MzYwNDExMTM&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=300 300w, https://images.unsplash.com/photo-1599930113854-d6d7fd521f10??crop=entropy&amp;cs=tinysrgb&amp;fit=crop&amp;fm=jpg&amp;ixid=MnwzNzg0fDB8MXxzZWFyY2h8Mnx8bWFwfGVufDB8Mnx8fDE2MzYwNDExMTM&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=768 768w, https://images.unsplash.com/photo-1599930113854-d6d7fd521f10??crop=entropy&amp;cs=tinysrgb&amp;fit=crop&amp;fm=jpg&amp;ixid=MnwzNzg0fDB8MXxzZWFyY2h8Mnx8bWFwfGVufDB8Mnx8fDE2MzYwNDExMTM&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=1024 1024w" sizes="(max-width: 1080px) 100vw, 1080px" width="1080" height="1080" alt="Photo by Gaël Gaborel">

            </div>
            <div class="col-md-5 bg-light text-center p-5 d-flex flex-column justify-content-center">

                <div class="lc-block mb-4">

                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="3em" height="3em" viewBox="0 0 24 24" style="" lc-helper="svg-icon" fill="currentColor">
                        <path d="M14,11.5A2.5,2.5 0 0,0 16.5,9A2.5,2.5 0 0,0 14,6.5A2.5,2.5 0 0,0 11.5,9A2.5,2.5 0 0,0 14,11.5M14,2C17.86,2 21,5.13 21,9C21,14.25 14,22 14,22C14,22 7,14.25 7,9A7,7 0 0,1 14,2M5,9C5,13.5 10.08,19.66 11,20.81L10,22C10,22 3,14.25 3,9C3,5.83 5.11,3.15 8,2.29C6.16,3.94 5,6.33 5,9Z"></path>
                    </svg>

                </div>
                <div class="lc-block mb-3">
                    <div editable="rich">

                        <h2 class="fw-bolder">Contact Us</h2>
                    </div>
                </div>
                <div class="lc-block">
                    <div editable="rich">

                        <p>Street 3043 Clarence Court<br>Fayetteville NC
                            North Carolina 28306</p>

                    </div>
                </div>
                <div class="lc-block">
                    <div editable="rich">

                        <p class="fw-bolder">tel: 910-249-5283</p>
                    </div>
                </div>
                <div class="lc-block">
                    <div editable="rich">

                        <p class="fw-bolder">email: mymail@mydomain.com</p>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>