<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include APPROOT . '/views/includes/header.php'; ?>
</head>

<body>
    <?php
    include APPROOT . '/views/includes/tutor-navbar.php';
    ?>
    <?php print_r($data) ?>
    <main>
        <div class="container publish-gig pt-lg-4 pt-xs-2 pb-4">
            <div class="row">
                <div class="col-12-xs">
                    <h1 class="text-lg-start text-dark text-xs-center font-lg-xl font-xs-lg mb-xs-1 mb-lg-2">
                        Create Gig
                    </h1>
                </div>

                <div class="gig-form col-12-xs col-8-lg">
                    <form action="<?php echo URLROOT . '/gigs/settings/' . $data['gigid']; ?>" method="POST" style="width: 100%;" class="form-control row" enctype="multipart/form-data">
                        <div class="form-group col-12-xs">
                            <label for="firstname">Gig Title <span class="text-error">*</span> </label>
                            <input type="text" class="form-control" name="title" id="title" placeholder="Enter the Subject Area... (ex:- Pure Maths)" value="<?php echo $data['title'] ?>" required />
                            <p class="form-control form-feedback text-error">

                            </p>
                        </div>
                        <div class="form-group col-12-xs">
                            <label for="firstname">Gig Description <span class="text-error">*</span></label>
                            <textarea class="form-control" style="resize: none;" placeholder="Enter the description..." maxlength="2000" minlength="255" name="description" id="description" cols="30" rows="10"><?php echo $data['description'] ?></textarea>
                            <p class="form-control form-feedback text-error">

                            </p>
                        </div>
                        <div class="form-group col-12-xs">
                            <label for="firstname">Price <span class="text-error">*</span></label>
                            <input type="text" class="form-control" name="price" id="price" placeholder="Price.." value="<?php echo $data['price'] ?>" required />
                            <p class="form-control form-feedback text-error">

                            </p>
                        </div>
                        <div class="form-group col-12-xs">
                            <label for="revisions">Revisions <span class="text-error">*</span></label>
                            <select name="revisions" id="revisions" required>
                                <option class="select-option" value="<?php echo $data['revisions'] ?>" selected><?php echo $data['revisions'] ?></option>
                                <option class="select-option" value="0">0</option>
                                <option class="select-option" value="1">1</option>
                                <option class="select-option" value="2">2</option>
                                <option class="select-option" value="3">3</option>
                                <option class="select-option" value="4">4</option>
                                <option class="select-option" value="5">5</option>
                                <option class="select-option" value="unlimited">unlimited</option>

                            </select>
                            <p class="form-control form-feedback text-error">

                            </p>
                        </div>
                        <div class="form-group col-12-xs">
                            <label for="duration">Service within <span class="text-error">*</span></label>
                            <select name="duration" id="duration" required>
                                <option class="select-option" value="<?php echo $data['duration'] ?>" selected><?php echo $data['duration'] ?></option>
                                <option class="select-option" value="1">1 days</option>
                                <option class="select-option" value="2">2 days</option>
                                <option class="select-option" value="3">3 days</option>
                                <option class="select-option" value="4">4 days</option>
                                <option class="select-option" value="5">5 days</option>
                                <option class="select-option" value="6">6 days</option>
                                <option class="select-option" value="7">7 days</option>
                                <option class="select-option" value="8">8 days</option>
                                <option class="select-option" value="9">9 days</option>
                                <option class="select-option" value="10">10 days</option>
                                <option class="select-option" value="11">11 days</option>
                                <option class="select-option" value="12">12 days</option>
                                <option class="select-option" value="13">13 days</option>
                                <option class="select-option" value="14">14 days</option>
                            </select>
                            <p class="form-control form-feedback text-error">

                            </p>
                        </div>
                        <div class="form-group col-12-xs">
                            <label for="method">Delivery Method <span class="text-error">*</span></label>
                            <select name="method" id="method" value="" required>
                                <option class="select-option" value="<?php echo $data['method'] ?>" selected><?php echo $data['method'] ?></option>
                                <option class="select-option" value="zoom">Zoom</option>
                                <option class="select-option" value="teams">Microsoft Teams</option>
                                <option class="select-option" value="google">Google Meet</option>
                                <option class="select-option" value="other">Other</option>
                            </select>
                            <p class="form-control form-feedback text-error">
                            </p>
                        </div>
                        <div class="form-group col-12-xs">
                            <label for="medium">Medium <span class="text-error">*</span></label>
                            <select name="medium" id="medium" value="" required>
                                <option class="select-option" value="<?php echo $data['medium'] ?>" selected><?php echo $data['medium'] ?></option>
                                <option class="select-option" value="English">English</option>
                                <option class="select-option" value="Sinhala">Sinhala</option>
                                <option class="select-option" value="Tamil">Tamil</option>
                                <option class="select-option" value="Other">Other</option>
                            </select>
                            <p class="form-control form-feedback text-error">
                            </p>
                        </div>
                        <div class="form-group col-12-xs">
                            <label for="subject">Subject <span class="text-error">*</span></label>
                            <select name="subject" id="subject" value="" required>
                                <option class="select-option" value="<?php echo $data['subject'] ?>" selected><?php echo $data['subject'] ?></option>
                                <option class="select-option" value="Math">Math</option>
                                <option class="select-option" value="English">English</option>
                                <option class="select-option" value="Science">Science</option>
                                <option class="select-option" value="History">History</option>
                                <option class="select-option" value="Geography">Geography</option>
                                <option class="select-option" value="Other">Other</option>
                            </select>
                            <p class="form-control form-feedback text-error">
                            </p>
                        </div>
                        <div class="form-group col-12-xs">
                            <label for="lesson">Lesson <span class="text-error">*</span></label>
                            <input type="text" class="form-control" name="lesson" id="lesson" placeholder="Enter the lesson." value="<?php echo $data['lesson'] ?>" required />
                            <p class="form-control form-feedback text-error">

                            </p>
                        </div>
                        <div class="form-group col-12-xs">
                            <label for="image">Gig Display Image</label>
                            <input type="file" class="form-control" name="file" id="file" placeholder="First Name" value="" />
                            <p class="form-control form-feedback text-error">

                            </p>
                        </div>
                        <div class="form-group col-12-xs">
                            <input type="submit" onclick="this.form.submit();this.disabled=true;this.value='Sending, please wait...';" id="submit" name="submit" value="submit" class="form-control" />
                        </div>
                    </form>
                </div>
                <div class="gig-instructions col-12-xs col-4-lg pl-lg-3 mt-xs-4 mt-lg-0">
                    <div class="row justify-lg-content-start flex-xs-col flex-lg-row align-xs-items-center">
                        <h1>Instructions</h1>
                        <p class="font-lg mb-1 mt-2 text-black text-xs-center text-lg-left">Example Gig</p>
                        <div class="service-gig" style="width: 255px;">
                            <div class="service-gig__header" style="
									background-image: url(https://cdn.pixabay.com/photo/2016/01/19/01/42/library-1147815_960_720.jpg);
									background-size: cover;
									background-position: center;
								">

                            </div>
                            <div class="service-gig__body">
                                <div class="service-gig__body__tutor-details">
                                    <div class="service-gig__body__tutor-details__tutor-profile-picture" style="
											background-image: url(https://scontent.fcmb1-2.fna.fbcdn.net/v/t1.6435-9/122449448_697050650939469_6873584063804574562_n.jpg?_nc_cat=103&ccb=1-5&_nc_sid=174925&_nc_ohc=S1G6maLSXpgAX-yTTtA&_nc_ht=scontent.fcmb1-2.fna&oh=00_AT_llzl4n9U-KwnylYXrsh1qyWQbcuCzTXX5gytl8qWi_Q&oe=623363EF);
											background-size: cover;
											background-position: center;
										"></div>
                                    <div class="service-gig__body__tutor-details__tutor-name">
                                        <span class="name">Kesara Karannagoda</span>
                                        <span class="level">Level 2 Tutor&nbsp;

                                            <i class="fa fa-check-circle text-primary"></i></span>
                                    </div>
                                </div>
                                <div class="service-gig__body__gig-description">
                                    <p>I can teach you mathematics and science.</p>
                                </div>
                                <div class="service-gig__body__gig-details">
                                    <div class="service-gig__body__gig-details__star-ratings">
                                        <i class="fa fa-star"></i>&nbsp;4.6
                                    </div>
                                    <div class="service-gig__body__gig-details__services-given">
                                        (249)
                                    </div>
                                </div>
                                <div class="service-gig__footer">
                                    <div class="service-gig__footer__badge">
                                        <i class="fa fa-badge"></i>
                                    </div>
                                    <div class="service-gig__footer__price">
                                        LKR&nbsp;<span class="price-value">1500</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="font-lg mt-2 mb-1 text-xs-center text-lg-left">Gig Image Title</p>
                    <p class="text-gray text-xs-center text-lg-left">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Harum, facilis.</p>
                    <p class="font-lg mt-2 mb-1 text-xs-center text-lg-left">Gig Image Description</p>
                    <p class="text-gray text-xs-center text-lg-left">Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio tempore illo, error recusandae aspernatur exercitationem?</p>

                    <p class="font-lg mt-2 mb-1 text-xs-center text-lg-left">Gig Image size</p>
                    <img src="http://via.placeholder.com/640x360" class="br-sm" alt="Gig Image Size">
                    <p class="text-gray text-xs-center text-lg-left">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
            </div>

        </div>
        </div>
    </main>

    <?php
    include APPROOT . '/views/includes/footer.php';
    ?>
</body>

</html>