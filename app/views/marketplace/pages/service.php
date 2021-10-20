<?php
include APPROOT . '/views/includes/data.php';
include APPROOT . '/views/marketplace/includes/header.php';
?>
<link rel="stylesheet" href="<?php echo URLROOT . '/public/css/marketplace/service.css' ?>">
<div class="service">
    <div class="subject-line">
        <ul class="subtitle-2">
            <li>Mathematics</li>
            <li>Science</li>
            <li>Technology</li>
            <li>Web Development</li>
            <li>Machine Learning</li>
            <li>UI/UX Designing</li>
            <li>History</li>
        </ul>
    </div>
    <div class="tree-details">
        <p class="subtitle-2 primary" style="margin-top: 20px;">Mathematics > Calculas</p>
    </div>
    <div class="service-details">
        <div class="pane-1">
            <div class="gig">
                <div class="title-box">
                    <h4>I will teach you operating systems in ICT</h4>
                </div>
                <div class="review-line">
                    <div class="picture"></div>
                    <style>
                        .pane-1 .gig .review-line .picture {
                            background: url(<?php echo URLROOT . '/public/img/students/pexels.webp' ?>);
                            background-position: center;
                            background-size: cover;
                            background-repeat: no-repeat;
                            width: 40px;
                            height: 40px;
                            border-radius: 50%;
                            margin-right: 20px;
                        }
                    </style>
                    <p class="subtitle-2">Dianne Russel |</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="subtitle-2">4.5 <span class="gray">(1)</span></p>

                </div>
                <div class="service-cover"></div>
                <style>
                    .pane-1 .gig .service-cover {
                        background: url(<?php echo URLROOT . '/public/img/students/pexels.webp' ?>);
                        background-position: center;
                        background-size: cover;
                        background-repeat: no-repeat;
                        width: 680px;
                        height: 420px;
                        border-radius: 10px;
                        margin: 20px 0;
                    }
                </style>
                <div class="about-service dark">
                    <h6>About the Service</h6>
                    <h5>Hello Student!</h5>
                    <p class="description-title body-1 bold dark">
                        Lorem Ipsum Qwers Lasusl?
                    </p>
                    <p class="description body-1 gray">
                        You are responsible for operations, service, or customer support and face challenges trying to communicate complex procedures to a global market effectively. Traditional methods don’t work and are laborious, costly and error prone.
                        You are responsible for operations, service, or customer support and face challenges trying to communicate complex procedures to a global market effectively. Traditional methods don’t work and are laborious, costly and error prone.
                        You are responsible for operations, service, or customer support and face challenges trying to communicate complex procedures to a global market effectively. Traditional methods don’t work and are laborious, costly and error prone.
                    </p>
                </div>
            </div>
            <div class="tutor">
                <div class="tutor-card">
                    <h6 class="title">About The Tutor</h6>
                    <div class="card">
                        <div class="picture"></div>
                        <style>
                            .pane-1 .tutor .tutor-card .card .picture {
                                background: url(<?php echo URLROOT . '/public/img/students/pexels.webp' ?>);
                                background-position: center;
                                background-size: cover;
                                background-repeat: no-repeat;
                                width: 100px;
                                height: 100px;
                                border-radius: 50%;
                                margin-right: 20px;
                            }
                        </style>
                        <div class="details">
                            <div class="name subtitle-2">Dianne Russel</div>
                            <div class="occupation body-1 gray">Engineer, NASTECH</div>
                            <div class="stars subtitle-2 gray">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <p class="rate subtitle-2">4.5 <span class="gray">(1)</span></p>
                            </div>
                        </div>
                    </div>
                    <button>Contact Me</button>
                </div>
                <div class="tutor-details">
                    <div class="tutor-info">
                        <div class="from">
                            <p class="gray">From</p>
                            <p class="detail">Colombo</p>
                        </div>
                        <div class="member-since">
                            <p class="gray">Member since</p>
                            <p class="detail">Apr 2019</p>
                        </div>
                    </div>
                    <hr>
                    <div class="tutor-bio">
                        <p class="body-2 gray">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="pane-2">
            <?php include APPROOT . '/views/marketplace/components/price-box.php' ?>
        </div>
    </div>
</div>
<style>
    .service {
        display: flex;
        width: 100%;
        flex-direction: column;
        justify-content: center;
        margin-bottom: 50px;
    }

    .subject-line {
        display: flex;
        flex-direction: row;
        width: 100%;
        height: 50px;
        justify-content: center;
        align-items: center;
        border: 0;
        border-top: 1px solid #acacac;
        border-bottom: 1px solid #acacac;
        margin: 30px 0 10px 0;
    }

    .subject-line ul {
        display: flex;
        flex-direction: row;
        width: 100%;
        list-style: none;
        justify-content: space-around;
    }

    .subject-line ul li {
        cursor: pointer;
        color: var(--gray);
        transition: 0.3s ease;
    }

    .subject-line ul li:hover {
        color: var(--primary);
    }
</style>

<!-- footer  -->
<?php
include APPROOT . '/views/includes/footer.php';
?>