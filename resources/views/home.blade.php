<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KuyKuyNgoding</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/stylesheet.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
</head>
<body>
    <header>
        <div class="container-header">
            <div class="header-left">
                <h6 class="header-left-h6">KUYKUYNGODING</h6>
            </div>
            <a href="#" class="menu-icon">
                <span class="fa fa-bars"></span>
            </a>
            <div class="header-right">
                <a href="#">SUMMARY</a>
                <a href="#">PROFILE</a>
                <a href="#">CERTIFICATE</a>
                <a href="#">SKILL</a>
                <a href="#">EXPERIENCE</a>
            </div>
        </div>
    </header>
    <div class="top-wrapper jumbotron">
        <div class="top-wrapper-text">
            <h1 class="top-wrapper-text-1">Joe Van DenBurg</h1>
            <h1 class="top-wrapper-text-2">Frontend and Backend Developer</h1>
        </div>
        <div class="top-wrapper-btn">
            <button type="button" class="btn btn-warning">My Profile</button>
        </div>
    </div>
    <div class="gallery-wrapper">
        <div class="gallery">
            <div class="gallery-photo">
                <img src="{{ asset('img/backdev@2x.png')}}" alt="" class="gallery-photo-1">
            </div>
            <div class="gallery-photo">
                <img src="{{ asset('img/frontdev@2x.png') }}" alt="" class="gallery-photo-2">
            </div>
            <div class="gallery-photo">
                <img src="{{ asset('img/mobiledev@2x.png') }}" alt="" class="gallery-photo-3">
            </div>
        </div> 
    </div>

    <div class="summary-wrapper">
        <div class="summary">
            <div class="summary-title">
                <i class="fa fa-quote-left"></i>
                <h2 class="summary-h2">Summary</h2>
            </div>
            <p class="summary-p">
                Quod Enchiridion Epictetus stoici scripsit. Rodrigo Abela et Technologiae
                apud Massachusetts instituta Opera collection. Ex anglicus latine translata sunt.
                Quidam alii sunt, et non est in nostra potestate. Quae omnia in nostra sententia.
            </p>
        </div>
    </div>

    <div class="profile-wrapper">
        <div class="profile">
            <div class="profile-title">
                <h1 class="profile-title-h1">Profile</h1>
            </div>
            <div class="profile-description">
                <div class="profile-photo">
                    <img class="profile-photo-1" src="{{ asset('img/Mask Group 2@2x.png') }}" alt="">
                </div>
                <div class="profile-bio">
                    <div class="profile-bio-self">
                        <h1 class="profile-bio-name">I'm Joe Van Denburg</h1>
                        <p class="profile-bio-job">Full Stack Developer</p>
                    </div>
                    <table class="profile-bio-table">
                        <tr>
                            <th class="profile-bio-table-th">Age</th>
                            <th>22th</th>
                        </tr>
                        <tr>
                            <th class="profile-bio-table-th">Location</th>
                            <th>Jakarta</th>
                        </tr>
                        <tr>
                            <th class="profile-bio-table-th">Nationality</th>
                            <th>Indonesian</th>
                        </tr>
                        <tr>
                            <th class="profile-bio-table-th">Religion</th>
                            <th>Moslem</th>
                        </tr>
                        <tr>
                            <th class="profile-bio-table-th">Email</th>
                            <th>vandenburg@gmail.com</th>
                        </tr>
                        <tr>
                            <th class="profile-bio-table-th">Phone</th>
                            <th>+62 812 1212 987</th>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="certificate-wrapper">
        <div class="certificate">
            <div class="certificate-description">
                <div class="certificate-title">
                    <h1 class="certificate-title-h1">certificate</h1>
                </div>
                <div class="certificate-slider">
                    <button class="btn-certificate-left"><i class="fa fa-chevron-left"></i></button>
                    <button class="btn-certificate-right"><i class="fa fa-chevron-right"></i></button>
                </div> 
            </div>
            <div class="certificate-card-wrapper">
                <div class="card certificate-card">
                    <img src="{{ asset('img/cerificate.jpg') }}" class="card-img-top img-certificate" alt="certificate">
                    <div class="card-body">
                        <h5 class="card-title certificate-card-title">Fullstack Web Beginner</h5>
                        <p class="card-text certificate-card-text">Quod Enchiridion Epictetus stoici scripsit. Rodrigo Abela et Technologiae.</p>
                        <p class="card-text certificate-card-text-2">BNSP - Januari 2020</p>
                        <a href="#" class="btn btn-primary certificate-btn">Download</a>
                    </div>
                </div>
                <div class="card certificate-card">
                    <img src="{{ asset('img/cerificate.jpg') }}" class="card-img-top img-certificate" alt="certificate">
                    <div class="card-body">
                        <h5 class="card-title certificate-card-title">Fullstack Web Beginner</h5>
                        <p class="card-text certificate-card-text">Quod Enchiridion Epictetus stoici scripsit. Rodrigo Abela et Technologiae.</p>
                        <p class="card-text certificate-card-text-2">BNSP - Januari 2020</p>
                        <a href="#" class="btn btn-primary certificate-btn">Download</a>
                    </div>
                </div>
                <div class="card certificate-card">
                    <img src="{{ asset('img/cerificate.jpg') }}" class="card-img-top img-certificate" alt="certificate">
                    <div class="card-body">
                        <h5 class="card-title certificate-card-title">Fullstack Web Beginner</h5>
                        <p class="card-text certificate-card-text">Quod Enchiridion Epictetus stoici scripsit. Rodrigo Abela et Technologiae.</p>
                        <p class="card-text certificate-card-text-2">BNSP - Januari 2020</p>
                        <a href="#" class="btn btn-primary certificate-btn">Download</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="skill-wrapper">
        <div class="skill">
            <div class="skill-title">
                <h1 class="skill-title-h1">SKILL</h1>
            </div>
            <div class="skills">
                <div class="container-skill">
                    <h1 class="skill-label">HTML</h1>
                    <div class="container-skills">
                        <div class="skill-1"></div>
                    </div>
                </div>
                <div class="container-skill">
                    <h1 class="skill-label">HTML</h1>
                    <div class="container-skills">
                        <div class="skill-1"></div>
                    </div>
                </div>
                <div class="container-skill">
                    <h1 class="skill-label">HTML</h1>
                    <div class="container-skills">
                        <div class="skill-1"></div>
                    </div>
                </div>
                <div class="container-skill">
                    <h1 class="skill-label">HTML</h1>
                    <div class="container-skills">
                        <div class="skill-1"></div>
                    </div>
                </div>
                <div class="container-skill">
                    <h1 class="skill-label">HTML</h1>
                    <div class="container-skills">
                        <div class="skill-1"></div>
                    </div>
                </div>
                <div class="container-skill">
                    <h1 class="skill-label">HTML</h1>
                    <div class="container-skills">
                        <div class="skill-1"></div>
                    </div>
                </div>
                
            </div>
        </div>
        
    </div>

    <div class="experience-wrapper">
        <div class="experience">
            <div class="experience-description">
                <div class="experience-title">
                    <h1 class="experience-title-h1">experience</h1>
                </div>
                <div class="experience-slider">
                    <button class="btn-experience-left"><i class="fa fa-chevron-left"></i></button>
                    <button class="btn-experience-right"><i class="fa fa-chevron-right"></i></button>
                </div> 
            </div>
            <div class="experience-card-wrapper">
                <div class="card experience-card">
                    <img src="{{ asset('img/cerificate.jpg') }}" class="card-img-top img-experience" alt="experience">
                    <div class="card-body">
                        <h5 class="card-title experience-card-title">Fullstack Web Beginner</h5>
                        <p class="card-text experience-card-text">Quod Enchiridion Epictetus stoici scripsit. Rodrigo Abela et Technologiae.</p>
                        <p class="card-text experience-card-text-2">BNSP - Januari 2020</p>
                        <a href="#" class="btn btn-primary experience-btn">Download</a>
                    </div>
                </div>
                <div class="card experience-card">
                    <img src="{{ asset('img/cerificate.jpg') }}" class="card-img-top img-experience" alt="experience">
                    <div class="card-body">
                        <h5 class="card-title experience-card-title">Fullstack Web Beginner</h5>
                        <p class="card-text experience-card-text">Quod Enchiridion Epictetus stoici scripsit. Rodrigo Abela et Technologiae.</p>
                        <p class="card-text experience-card-text-2">BNSP - Januari 2020</p>
                        <a href="#" class="btn btn-primary experience-btn">Download</a>
                    </div>
                </div>
                <div class="card experience-card">
                    <img src="{{ asset('img/cerificate.jpg') }}" class="card-img-top img-experience" alt="experience">
                    <div class="card-body">
                        <h5 class="card-title experience-card-title">Fullstack Web Beginner</h5>
                        <p class="card-text experience-card-text">Quod Enchiridion Epictetus stoici scripsit. Rodrigo Abela et Technologiae.</p>
                        <p class="card-text experience-card-text-2">BNSP - Januari 2020</p>
                        <a href="#" class="btn btn-primary experience-btn">Download</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="container-footer">
            <div class="footer-left">
                <h6 class="footer-left-h6">KuyKuyNgoding</h6>
            </div>
            <div class="footer-center">
                <i class="fa fa-copyright"></i><h6 class="footer-center-h6">2020 KuyKuyNgoding</h6>
            </div>
            <div class="footer-right">
                <a href="#"><img src="{{ asset('img/facebook@2x.png') }}" alt="" class="facebook"></a>
                <a href="#"><img src="{{ asset('img/instagram-sketched@2x.png') }}" alt="" class="instagram"></a>
                <a href="#"><img src="{{ asset('img/youtube@2x.png') }}" alt="" class="youtube"></a>
            </div>
        </div>
    </footer>
</body>
</html>