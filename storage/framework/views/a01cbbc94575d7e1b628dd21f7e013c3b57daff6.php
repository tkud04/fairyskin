<?php $__env->startSection('title',"Contact Us"); ?>

<?php $__env->startSection('content'); ?>
<?php echo $__env->make('banner-2',['title' => 'Contact Us','subtitle' => 'We\'d like to hear from you!'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 

 <!--Contact Map section start-->
 <div class="contact-map-section section">
            <div class="contact-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.369022919513!2d3.364655!3d6.600979000000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b924f306c647b%3A0xb31aa08809604b07!2s3%20Bankole%20St%2C%20Oregun%20101233%2C%20Ikeja%2C%20Lagos!5e0!3m2!1sen!2sng!4v1689271876558!5m2!1sen!2sng" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <!--Contact Map section End-->
        
        <!--Contact section start-->
        <div class="conact-section section pt-95 pt-lg-75 pt-md-65 pt-sm-55 pt-xs-45  pb-100 pb-lg-80 pb-md-70 pb-sm-60 pb-xs-50">
            <div class="container">
               
                <div class="row">
                    <div class="col-lg-4 col-12">
                        <div class="contact-information">
                            <h3>Contact Information</h3>
                            <ul>
                                <li>
                                    <span class="icon"><i class="fa fa-building"></i></span>
                                    <span class="text"><span>3 Bankole St, Oregun 101233, Ikeja, Lagos</span></span>
                                </li>
                                <li>
                                    <span class="icon"><i class="fa fa-phone"></i></span>
                                    <span class="text"><a href="tel:+2349048166902">+234 904 816 6902</a></span>
                                </li>
                                <li>
                                    <span class="icon"><i class="fa fa-envelope"></i></span>
                                    <span class="text"><a href="mailto:fairyskintreatmentsorders@gmail.com">fairyskintreatmentsorders@gmail.com</a></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-8 col-12">
                        <div class="contact-form-wrap">
                            <h3 class="contact-title">Drop us a line</h3>
                            <form id="contact-form" action="#" method="post">
                              <input type="hidden" id="skf" value="<?php echo e(csrf_token()); ?>"/>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="contact-form-style mb-20">
                                            <input id="contact-name" name="name" placeholder="Name*" type="text">
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <div class="contact-form-style mb-20">
                                            <input id="contact-email" name="email" placeholder="Email*" type="email">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="contact-form-style mb-20">
                                            <input id="contact-subject" name="subject" placeholder="Subject*" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="contact-form-style">
                                            <textarea id="contact-message" name="message" placeholder="Type your message here.."></textarea>
                                            <button class="btn" id="contact-btn"><span>Send message</span></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <p class="form-messege"></p>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <!--Contact section end-->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/mac/repos/fairyskin/resources/views/contact.blade.php ENDPATH**/ ?>